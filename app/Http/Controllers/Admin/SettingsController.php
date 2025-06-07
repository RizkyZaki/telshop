<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function index()
    {
        return view('admin.pages.settings.index', [
            'title' => 'Pengaturan Situs',
            'heading' => 'Atur Situs & Kontak untuk meningkatkan SEO',
        ]);
    }
    public function updateSite(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'keyword' => 'nullable|string|max:255',
            'tagline' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'logo' => 'nullable|image|mimes:png,jpg,jpeg|max:2048',
        ]);

        $setting = Setting::first();

        $setting->name = $request->name;
        $setting->keyword = $request->keyword;
        $setting->tagline = $request->tagline;
        $setting->description = $request->description;

        if ($request->hasFile('logo')) {
            $logo = $request->file('logo');
            $eks = $logo->getClientOriginalExtension();
            $imgHash = md5($logo->getClientOriginalName()) . '.' . $eks;
            $logo->storeAs('assets/site/logo', $imgHash);
            $setting->logo =  $imgHash;
        }

        $setting->save();

        return redirect()->back()->with('success', 'Pengaturan situs berhasil diperbarui.');
    }

    public function updateContact(Request $request)
    {
        $request->validate([
            'phone' => 'nullable|string|max:20',
            'email' => 'required|email',
            'address' => 'nullable|string|max:255',
            'ig' => 'nullable|url',
            'fb' => 'nullable|url',
            'twitter' => 'nullable|url',
        ]);

        $setting = Setting::first();

        $setting->phone = $request->phone;
        $setting->email = $request->email;
        $setting->address = $request->address;
        $setting->ig = $request->ig;
        $setting->fb = $request->fb;
        $setting->twitter = $request->twitter;

        $setting->save();

        return redirect()->back()->with('success', 'Kontak & Sosial Media berhasil diperbarui.');
    }
}
