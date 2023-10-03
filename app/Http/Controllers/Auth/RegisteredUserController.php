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
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\RedirectResponse;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;
use Illuminate\Validation\ValidationException;

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
                'mobile_number' => ['required'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:' . RequestedUser::class],
                'password' => ['required', 'min:6', 'max:100'],
                'confirm_password' => ['required', 'same:password'],
                'division_id' => ['required'],
                'district_id' => ['required'],
                'thana_id' => ['required'],
            ]);
        }

        $this->createRequestedUser($request);

        $checkIfTheUserIsAccepted = RequestedUser::where([['email', $request->email], ['status', 0]])->first();
        if ($checkIfTheUserIsAccepted) {
            throw ValidationException::withMessages([
                'confirm_password' => "Account created. Please wait untill the admin accept your request.",
            ]);
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