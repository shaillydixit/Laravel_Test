<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function Register(Request $request)
    {
        $user = User::where('email', $request->email)->first();
        if ($user) {
            return response()->json(['res' => 3]); 
        }
        if ($request->password !== $request->confirmPassword) {
            return response()->json(['res' => 2]); 
        }

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'mobile' => $request->mobile,
            'dob' => $request->dob,
            'created_at' => now(),
            'updated_at' => now(),
        ];
        $inserted = User::create($data);
        if ($inserted) {
            return response()->json(['res' => 1]); 
        } else {
            return response()->json(['res' => 0]); 
        }
    }

    
}
