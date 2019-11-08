<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AppController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function registerUser(Request $request)
    {
        $user = new User();
        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->gender = $request->gender;
        $user->address = $request->street . ' ' . $request->city . ' ' . $request->country;
        $user->save();

        return response()->json(['success', 'User Registered Successfully'], 200);
    }
}
