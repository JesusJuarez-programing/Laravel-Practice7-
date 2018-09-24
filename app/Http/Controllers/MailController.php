<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Mailtrap;

class MailController extends Controller
{
    public function index()
    {
        Mail::to('gatoman195@gmail.com')->send(new Mailtrap());
    }
}
