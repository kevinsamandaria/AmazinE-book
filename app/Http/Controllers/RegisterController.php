<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class RegisterController extends Controller
{
    //
    public function view()
    {
        return view('register');
    }

    public function val(Request $request)
    {
        $validate = $request->validate([
            'first_name' => 'required|max:30',
            'middle_name' => 'required|max:30',
            'last_name' => 'required|max:30',
            'gender_id' => 'required',
            'email' => 'required|email:dns',
            'role_id' => 'required',
            'picture' => 'image|file|required',
            'password' => ['required', Password::min(8)->numbers(), 'confirmed'],
        ]);

        if($request->file('picture')){
            $validate['picture'] = $request->file('picture')->store('assets', 'public');
        }


        $validate['password'] = Hash::make($validate['password']);
        User::create($validate);
        return redirect('/login');
    }
}
