<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class SettingController extends Controller
{
    public function edit(): View
    {
        $setting = Setting::query()->first();

        return view('admin.settings.edit', compact('setting'));
    }

    public function update(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'logo' => ['nullable', 'image', 'max:2048'],
            'wa' => ['nullable', 'string', 'max:255'],
            'email' => ['nullable', 'string', 'max:255'],
        ]);

        $setting = Setting::query()->firstOrFail();

        $setting->name = $data['name'];
        $setting->wa = $data['wa'] ?? null;
        $setting->email = $data['email'] ?? null;

        if ($request->hasFile('logo')) {
            $path = $request->file('logo')->store('settings', 'public');
            $setting->logo = $path;
        }

        $setting->save();

        return redirect()->route('admin.settings.edit')
            ->with('status', 'Pengaturan berhasil disimpan.');
    }
}
