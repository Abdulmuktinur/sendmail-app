<?php

namespace App\Http\Controllers;

use App\Mail\sendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class sendMailController extends Controller
{
    public function index()
    {
        Mail::to('your-email@gmail.com')->send(new sendMail());
        return "<b>Succes Send Mai</b>";
        // return redirect()->back()->with('success', 'Email has been sent successfully!');
    }
}
