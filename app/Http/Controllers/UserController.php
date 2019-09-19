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

    public function edit(User $id){
        return view('users/edit', ['user'=> $id]);
    }

    public function update(Request $request, User $id){
        
    }
}
