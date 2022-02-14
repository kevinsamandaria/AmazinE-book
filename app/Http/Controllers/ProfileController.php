<?php

namespace App\Http\Controllers;

use App\Models\Gender;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class ProfileController extends Controller
{
    //
    public function view($id){
        return view('/profile', [
            'user'=>User::find($id)
        ]);
    }

    public function update(Request $request){
        $validate = $request->validate([
            'first_name' => 'required|max:30',
            'middle_name' => 'required|max:30',
            'last_name' => 'required|max:30',
            'gender_id' => 'required',
            'email' => 'required|email:dns',
            'picture'=>'image|file|required',
            'password' => ['required', Password::min(8)->numbers()],
        ]);

        if($request->file('picture')){
            $validate['picture'] = $request->file('picture')->store('assets', 'public');

            User::where('id', $request->id)->update([
                'picture' => $validate['picture']
            ]);
        }

        if(auth()->user()->email != $validate['email']){
            $temp = $request->validate([
                'email' => 'unique:users'
            ]);
            $validate['email'] = $temp['email'];
        }

        User::where('id', auth()->user()->id)->update([
            'first_name' => $validate['first_name'],
            'middle_name' => $validate['middle_name'],
            'last_name' => $validate['last_name'],
            'gender_id' => $validate['gender_id'],
            'email' => $validate['email'],
            'picture' => $validate['picture'],
            'password' => $validate['password'],
        ]);
        $validate['password'] = Hash::make($validate['password']);

        // return back()->with('updated', 'Update Profile Success');
        return redirect('/');
    }
}
