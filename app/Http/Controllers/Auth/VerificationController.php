<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

class VerificationController extends Controller
{
    public function show(){
        return view('verify');
    }

//    public function verify(EmailVerificationRequest $request, $id, $hash)
//    {
//        $request->fulfill();
//
//        return redirect()->intended('/');
//    }
    public function verify($id, $hash)
    {
        return redirect()->intended('/');
    }
}
