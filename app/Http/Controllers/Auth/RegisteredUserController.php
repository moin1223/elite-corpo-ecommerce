<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterSellerRequest;
use App\Models\RequestedUser;
use Illuminate\Validation\Rules;
use App\Http\Controllers\Controller;
use App\Http\Service\OTPService;
use App\Models\AuthorizedPartne;
use App\Models\District;
use App\Models\Division;
use App\Models\Thana;
use App\Models\UserDetails;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\RedirectResponse;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;
use Illuminate\Validation\ValidationException;
use Spatie\Permission\Models\Role;
use Exception;
use Xenon\LaravelBDSms\Provider\Mobireach;
use Xenon\LaravelBDSms\Sender;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        if ($request->role === 'user') {
            $request->validate([
                'first_name' => ['required', 'string', 'max:255'],
                'last_name' => ['required', 'string', 'max:255'],
                'mobile_number' => ['required','unique:' . UserDetails::class],
                'password' => ['required', 'min:6', 'max:100'],
                'confirm_password' => ['required', 'same:password'],
                'division_id' => ['required'],
                'district_id' => ['required'],
    
            ]);
            $user = User::create([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'password' => Hash::make($request->password),
            ]);
            $userDetails = UserDetails::create([
                'gender' => $request->gender,
                'division_id' => $request->division_id,
                'district_id' => $request->district_id,
                'mobile_number' => $request->mobile_number,
                'role' => $request->role,
                'user_id' => $user->id,
            ]);
            $role = Role::where('name', $user->role)->first();
    
            if ($role) {
                $user->assignRole($role);
            }
        //        try {
        //     $sender = Sender::getInstance();
        //     $sender->setProvider(Mobireach::class);
        //     $sender->setMobile($userDetails->mobile_number);
        //     $sender->setMessage('বিশ্বমানের পণ্য উৎপাদনকারী প্রতিষ্ঠান এলিট কর্পোরেশন এর পক্ষ থেকে আপনাকে জানাই অভিনন্দন। আপনার সন্তুষ্টিই আমাদের সফলতা।');
        //     $sender->setConfig(
        //         [
        //             'Username' => 'elitecor',
        //             'Password' => '3Kaieschy-78',
        //             'From' => 'Elite Corpo'
        //         ]
        //     );
        //     $status = $sender->send();
        // } catch (Exception $e) {

        //     echo 'Error: ' . $e->getMessage();
        // }
            return redirect()->back()->with(['successMessage' => 'You are regitered now you can login!', 'alert-type' => 'success']);
        
        }
        if($request->role === 'seller')
        {
            $request->validate([
                'first_name' => ['required', 'string', 'max:255'],
                'last_name' => ['required', 'string', 'max:255'],
                'gender' => ['required'],
                'division_id' => ['required'],
                'district_id' => ['required'],
                'thana_id' => ['required'],
                'ward_no' => ['required'],
                'group_id' => ['required'],
                'mobile_number' => ['required', 'string', 'unique:' . RequestedUser::class],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:' . RequestedUser::class],
                'whats_app_number' => ['required'],
                'password' => ['required','min:6','max:100'],
                'confirm_password' => ['required', 'same:password'],
                'mobile_number' => ['required'],
                'monitor_name' => ['required'],
                'monitor_number' => ['required'],
                'drector_name' => ['required'],
                'director_number' => ['required'],

            ]);   
            $this->createRequestedUser($request);

            $checkIfTheUserIsAccepted = RequestedUser::where([['email', $request->email], ['status', 0]])->first();
            if ($checkIfTheUserIsAccepted) {
                throw ValidationException::withMessages([
                    'confirm_password' => "Account created. Please wait untill the admin accept your request.",
                ]);
            }
        }


       

        // event(new Registered($user));
        // Auth::login($user);
        // return redirect(RouteServiceProvider::HOME);

        return redirect()->back()->with("");
    }

    public function registerSeller(RegisterSellerRequest $request): RedirectResponse
    {
        if (Session::get('seller_form_data')) {
            Session::flush();
        }
        Session::put('seller_form_data', $request->all());

        $contact_no = $request->input('mobile_number');


        // $checkIfTheUserIsAccepted = RequestedUser::where([['email', $request->email], ['status', 0]])->first();
        // if ($checkIfTheUserIsAccepted) {
        //     throw ValidationException::withMessages([
        //         'confirm_password' => "Account created. Please wait untill the admin accept your request.",
        //     ]);
        // }

        // // event(new Registered($user));
        // // Auth::login($user);
        // // return redirect(RouteServiceProvider::HOME);

        return redirect()->route('sendOtp')->with(['contact_no' => $contact_no]);
    }

    public function createRequestedUser($request)
    {
        RequestedUser::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'gender' => $request->gender,
            'division_id' => $request->division_id,
            'district_id' => $request->district_id,
            'thana_id' => $request->thana_id,
            'ward_no' => $request->ward_no,
            'group_id' => $request->group_id,
            'mobile_number' => $request->mobile_number,
            'whats_app_number' => $request->whats_app_number,
            'monitor_name' => $request->monitor_name,
            'monitor_number' => $request->monitor_number,
            'drector_name' => $request->drector_name,
            'director_number' => $request->director_number,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'status' => 0,
            'role' => $request->role,
        ]);

        return redirect()->route('seller-register');
    }

    public function userRegister()
    {
        $divisons = Division::all();
        $districts = District::all();
        $thanas = Thana::all();
        return view('auth.user-register', compact('divisons', 'districts', 'thanas'));
    }
    public function sellerRegister()
    {
        $divisons = Division::all();
        $districts = District::all();
        $thanas = Thana::all();
        $authorizedPartners = AuthorizedPartne::all();
        return view('auth.seller-register', compact('divisons', 'districts', 'thanas', 'authorizedPartners'));
    }
}
