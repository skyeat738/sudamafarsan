<?php

namespace App\Http\Controllers;

use App\Models\SiteSetting;

class ContactController extends Controller
{
    public function index()
    {
        $setting = SiteSetting::current();

        return view('contact', compact('setting'));
    }
}
