<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactoMail;

class MailController extends Controller
{
    public function mail(Request $request) {
        Mail::to('')->send($request->all());
        return redirect()->back();
    }
}
