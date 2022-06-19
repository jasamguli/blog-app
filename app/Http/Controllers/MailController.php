<?php

namespace App\Http\Controllers;

use App\Mail\SendMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendEmail(Request $request)
    {
        Mail::to("nikolalondrovic41@gmail.com")->send(new SendMessage($request));

        return view('master.contact');
    }
}
