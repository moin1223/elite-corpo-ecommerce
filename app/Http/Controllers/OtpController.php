<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Service\OTPService;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Auth\RegisteredUserController;

class OtpController extends Controller
{
    public function sendOtp()
    {
        $contact_no = Session::get('contact_no');
        if ($contact_no) {
            // $contact_no = 1234;
            (new OTPService)->sendOtp($contact_no);
            return view('auth.otp', compact('contact_no'));
        } else {
            return redirect()->route('seller-register');
        }
    }

    public function resendOtp(Request $request)
    {
        (new OTPService)->sendOtp($request->contact_no);

        return response()->json([
            'sent' => true
        ]);
    }

    public function verifyOtp(Request $request)
    {
        $verify = (new OTPService)->verifyOtp($request);
        if ($verify['result']) {
            $data = Session::get('seller_form_data');

            (new RegisteredUserController)->createRequestedUser((object)$data);
        }

        return response()->json($verify);
    }
}
