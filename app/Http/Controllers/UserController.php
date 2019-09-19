<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index']);
    }

    public function edit(User $user){
        return view('users/edit', ['user'=> $user]);
    }

    public function update(Request $request, User $user){

        $originalImg = $request->image_url;
        
        $user->name = $request->name;
        $user->email = $request->email;
        if($originalImg) {
            $filePath = $originalImg->store('public');
            $user->image_url = str_replace('public/', '', $filePath);
        }
        $user->save();

        return redirect()->route('users.edit', ['user'=> $user]);
    }
}
