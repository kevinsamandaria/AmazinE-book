<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;

class AdminController extends Controller
{
    //
    public function view(){
        $user = User::simplePaginate(6);
        return view('admin', compact('user'));
    }

    public function delete(Request $request){
        User::where('id', $request->id)->delete();

        return back();
    }

    public function updatePage($id){
        return view('/updateRole', [
            'user'=>User::find($id)
        ]);
    }

    public function update(Request $request){
        $user = User::where('id', $request->user_id)->first();

        if($user->role_id == 1){
            $user->role_id = 2;
        }
        else{
            $user->role_id = 1;
        }

        $user->save();
        return redirect()->route('admin');
    }
}
