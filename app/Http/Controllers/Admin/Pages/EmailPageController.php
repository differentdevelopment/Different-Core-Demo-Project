<?php

namespace App\Http\Controllers\Admin\Pages;

use App\Mail\TestMail;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\Mail;

class EmailPageController
{
    public function index()
    {
        return view('pages.emails', [
            'title' => __('emails.emails'),
        ]);
    }

    public function send()
    {
        Mail::to(backpack_user()->email)->send(new TestMail(backpack_user()->name));
        return back();
    }
}
