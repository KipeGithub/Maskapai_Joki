<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;


class UserProfileController extends Controller
{

    public function show()
    {
        return view('pages.user-profile');
    }

    public function update(Request $request)
    {
        $attributes = $request->validate([
            'username' => ['required', 'max:255', 'min:2'],
            'firstname' => ['max:100'],
            'lastname' => ['max:100'],
            'email' => ['required', 'email', 'max:255',  Rule::unique('users')->ignore(auth()->user()->id),],
            'address' => ['max:100'],
            'city' => ['max:100'],
            'country' => ['max:100'],
            'postal' => ['max:100'],
            'about' => ['max:255'],
        ]);

        auth()->user()->update([
            'username' => $request->get('username'),
            'firstname' => $request->get('firstname'),
            'lastname' => $request->get('lastname'),
            'email' => $request->get('email'),
            'address' => $request->get('address'),
            'city' => $request->get('city'),
            'country' => $request->get('country'),
            'postal' => $request->get('postal'),
            'about' => $request->get('about'),
        ]);
        return back()->with('succes', 'Profile succesfully updated');
    }

    public function update_pw(Request $request)
    {
        $request->validate([
            'password' => ['required', 'max:255'],
            'password_confirmation' => ['required', 'string', 'min:8', 'same:password']
        ]);

        // $newPassword = $request->password;
        // $confirmnewPassword = $request->password_confirmation;
        // echo "Password baru yang akan disimpan: " . $newPassword;
        // echo "Password baru yang akan disimpan: " . $confirmnewPassword;

        auth()->user()->update([
            'password' => $request->password,
        ]);

        return back()->with('success', 'Password succesfully updated');
    }
}
