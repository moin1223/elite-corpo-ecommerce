<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserType;
use App\Models\AssignUser;
use Illuminate\Http\Request;
use App\Models\RequestedUser;
use App\Models\UserDetails;
use App\Models\UserEditRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Repositories\UserDataRepository;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{

    public function index(Request $request)
    {
        $groupName = $request->input('group_name');

        // $users = UserDetails::with('user')->whereHas('group', function ($query) use ($groupName) {
        //     $query->where('name', $groupName);
        // })->get(); 
        $users = UserDetails::with('user')
    ->whereHas('group', function ($query) use ($groupName) {
        $query->where('name', 'like', '%' . $groupName . '%');
    })
    ->paginate(10)
    ->appends($request->all());
    //  $users = User:: all();
     return view('website.user.list', compact('users'));
    }
    public function show(User $user)
    {
        // dd($user);
    // $user = User::findOrfail($user); 
    $userDetails = UserDetails::with('division', 'district', 'thana', 'group')->where('user_id', $user->id)->firstOrfail();
    // dd($userDetails);
     return view('website.user.show', compact('user', 'userDetails'));
    }
    public function destroy(User $user)
    {
        $user->delete();
        $userDetails = UserDetails::where('user_id', $user->id)->firstOrfail();
        $userDetails->delete();
        return redirect()->back()->with(['message' => 'User deleted successfully', 'alert-type' => 'success']);
    }
    public function requestedUser()
    {
        $requestedUsers = RequestedUser::where('status', 0)->get();

        return view('website.user.requested-user-list', compact('requestedUsers'));
    }
    public function getRequestedUserDetails()
    {
        $user_id = request('user_id');
        $requestedUser = RequestedUser::with('division', 'district', 'thana','group')->findOrfail($user_id);
        return response()->json($requestedUser);
    }
    public function acceptUserRegisterRequest(Request $request)
    {
        $requestedUser = RequestedUser::findOrfail($request->user_id);
        $requestedUser->update([
            'status' => 1,
        ]);
        $user = User::create([
            'first_name' => $requestedUser->first_name,
            'last_name' => $requestedUser->last_name,
            'email' => $requestedUser->email,
            'password' =>$requestedUser->password,
        ]);
        UserDetails::create([
            'gender' => $requestedUser->gender,
            'division_id' => $requestedUser->division_id,
            'district_id' => $requestedUser->district_id,
            'thana_id' => $requestedUser->thana_id,
            'ward_no' => $requestedUser->ward_no,
            'group_id' => $requestedUser->group_id,
            'mobile_number' => $requestedUser->mobile_number,
            'whats_app_number' => $requestedUser->whats_app_number,
            'monitor_name' => $requestedUser->monitor_name,
            'monitor_number' => $requestedUser->monitor_number,
            'drector_name' => $requestedUser->drector_name,
            'director_number' => $requestedUser->director_number,
            'role' => $requestedUser->role,
            'user_id' => $user->id,
        ]);
        $role = Role::where('name', $requestedUser->role)->first();

        if ($role) {
            $user->assignRole($role);
        }

        return redirect()->back()->with(['message' => 'User Register Request Accepted', 'alert-type' => 'success']);
    }
    public function cancelUserRegisterRequest($id)
    {
        $requestedUser = RequestedUser::findOrfail($id);
        $requestedUser->delete();
        return redirect()->back()->with(['message' => 'User Register Request Cancel', 'alert-type' => 'success']);
    }
    
}
