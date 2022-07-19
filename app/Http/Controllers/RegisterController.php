<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegisterController extends Controller
{
    public function index(){
        return view('register', [
            "title" => "Register K4"
        ]);
    }

    public function store(Request $request){
        $validated = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|max:255|confirmed',
        ]);

        $validated['password'] = Hash::make($validated['password']);

        User::create($validated);
        
        return redirect('/login')->with('success', 'Registrasion Successfull, Please Login');
    }
}
