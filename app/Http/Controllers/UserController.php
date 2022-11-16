<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function register (Request $request) {
      
        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'password'=>'required|confirmed',
            'tc'=>'required'
        ]);

        if (User::where('city',$request->email)->first())
        {
          return response([
            'message'=>'Email already Exits',
            'status'=>'Failed'
          ],200);
        }
    }
}
