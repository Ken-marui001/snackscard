<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Snack;
use App\User;

class Usersnack extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index']);
    }
    public function index(int $id){
        
    }
}
