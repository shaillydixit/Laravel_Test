<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function Login(Request $request)
    {
		$email = $request->email;
        $password = $request->password;

        if (!empty($email) && !empty($password)) {    
            $user = User::where('email', $email)->first();
            
            if ($user && Hash::check($password, $user->password)) {
                return response()->json(['res' => 1]); 
            } else {
                return response()->json(['res' => 2]); 
            }
        } else {
            return response()->json(['res' => 0]); 
        }
	}
   
    
}
