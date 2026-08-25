<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SiteSetting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function edit()
    {
        $setting = SiteSetting::current();

        return view('admin.settings.edit', compact('setting'));
    }

    public function update(Request $request)
    {
        $data = $request->validate([
            'about_us' => ['nullable', 'string'],
            'brand_whatsapp' => ['nullable', 'string', 'max:20'],
            'brand_phone' => ['nullable', 'string', 'max:20'],
            'brand_email' => ['nullable', 'email', 'max:255'],
            'brand_address' => ['nullable', 'string'],
        ]);

        SiteSetting::current()->update($data);

        return redirect()->route('admin.settings.edit')->with('status', 'Site content updated.');
    }
}
