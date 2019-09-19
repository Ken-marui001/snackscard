<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index']);
    }
    public function edit(int $id){
        return view('users/edit');
    }

    public function update(Request $request, int $id){
        $user = User::find($id);
    }
}
