<?php

namespace App\Http\Service;

use Carbon\Carbon;
use App\Models\OTPGeneration;
use Xenon\LaravelBDSms\Sender;
use Xenon\LaravelBDSms\Facades\SMS;
use Illuminate\Support\Facades\Session;
use Xenon\LaravelBDSms\Provider\Mobireach;
use App\Http\Controllers\Auth\RegisteredUserController;


class OTPService
{
    public function sendOtp($contact_no)
    {
        $otp = rand(1000, 9999);

        $message = "Your OTP To Login is - " . $otp;

        $sender = Sender::getInstance();
        $sender->setProvider(Mobireach::class);
        $sender->setMobile($contact_no);
        // $sender->setMobile('01881697754');
        $sender->setMessage($message);
        $sender->setConfig(
            [
                'Username' => 'elitecor',
                'Password' => '3Kaieschy-78',
                'From' => 'Elite Corpo'
            ]
        );
        $sender->send();

        return OTPGeneration::create([
            'contact_no' => $contact_no,
            'otp' => $otp,
            'expire_at' => Carbon::now()->addSeconds(120)
        ]);
    }

    public function verifyOtp($request)
    {
        $REQ_contact_no = strval($request->contact_no);
        $firstThreeCharacters = substr($REQ_contact_no, 0, 3);
        if ($firstThreeCharacters === '880') {
            $REQ_contact_no = $request->contact_no;
        } else {
            $REQ_contact_no = '0' . $request->contact_no;
        }
        $REQ_otp = $request->otp;
        $result = false;
        $message = '';
        $storedOtp = OTPGeneration::where([
            ['contact_no', $REQ_contact_no],
            ['otp', $REQ_otp],
        ])->latest()->first();

        if ($storedOtp) {
            $now = Carbon::now();
            if ($storedOtp && $now->isBefore($storedOtp->expire_at) && $now->between($storedOtp->created_at, $storedOtp->expire_at)) {
                $result = true;
                $message = "Success";
            } else {
                $result = false;
                $message = "Invalid Otp!!!";
            }
        } else {
            $result = false;
            $message = "Invalid Otp!!!";
        }

        return [
            'result' => $result,
            'message' => $message,
            'route' => route('seller-register')
        ];
    }
}
