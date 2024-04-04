<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{

    public function profile(User $user){
        return view('profile-posts', ['username' => $user->username, 'posts' => $user->posts()->latest()->get(), 'postCount' => $user->posts()->count()]);
    }


    public function login(Request $request){
        $incomingFields = $request->validate(
            [
                'loginusername' => 'required',
                'loginpassword' => 'required'
            ]
        );

        if(auth()->attempt(['username' => $incomingFields['loginusername'], 'password' => $incomingFields['loginpassword']])){
            $request->session()->regenerate(); 
            return redirect('/home');
        }

        else{
            return back()->withErrors([
                'loginusername' => 'The provided credentials do not match our records.',
            ]);
        }
            
        
    }



    public function register(Request $request){
        $incomingFields = $request->validate(
            [
                'username' => ['required', 'min:3', 'max:20', Rule::unique('users', 'username')],
                'email' => ['required', 'email', Rule::unique('users', 'email')],
                'password' => ['required', 'min:6', 'confirmed']
            ]
        );

        // Hash the password
        $incomingFields['password'] = bcrypt($incomingFields['password']);

        User::create($incomingFields);

        return "Ghumai";
    }
}
