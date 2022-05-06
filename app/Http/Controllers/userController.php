<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;

class userController extends Controller
{
    public function index(){
        $user = user::all();
        return response()->json($user);
    }

    public function store(Request $request){
        
        $user = new user();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->email_verified_at = $request->email_verified_at;
        $user->password = $request->password;
        $user->save();
        
        return 'ajouter avec success';
    }

    
}
