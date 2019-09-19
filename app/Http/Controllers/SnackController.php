<?php

namespace App\Http\Controllers;

use App\Snack;
use Illuminate\Http\Request;

class SnackController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index']);
    }

    public function fullAccess(){
        $snacks = Snack::all();
        return view('snacks/index', ['snacks' => $snacks,]);
    }
    
    public function index(){
        $snacks = Snack::all();
        return view('snacks/index', ['snacks' => $snacks,]);
    }
    public function new(){
        return view('snacks/new');
    }
    public function create(Request $request){
        $snack = new Snack();
        $snack->name = $request->name;
        $snack->link_url = $request->link_url;
        $snack->explain = $request->explain;
        $snack->price = $request->price;
        $snack->save();

        return redirect()->route('snacks.new');
    }
}
