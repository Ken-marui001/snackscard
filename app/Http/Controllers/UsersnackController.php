<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserSnackController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index']);
    }
    public function index(int $id){
        
    }
}
