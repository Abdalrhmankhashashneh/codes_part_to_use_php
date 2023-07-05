<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class SiteControler extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('welcome' , compact('users'));
    }
    public function add_user(Request $request){
        $data = array(
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password
        );
        user::create($data);
        return redirect()->back();
    }
}
