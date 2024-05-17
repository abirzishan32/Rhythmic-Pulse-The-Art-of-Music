<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\Follow;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class UserController extends Controller
{

    public function showAvatarForm(){
        return view('edit-profile');
    }

    public function storeAvatar(Request $request){
        $request->validate(
            [
                'avatar' => 'required|image|max:3000'
            ]
        );
        $user = auth()->user();
        $originalFileName = $request->file('avatar')->getClientOriginalName();
        $file_name = time() . '_' . $user->id . '_' . $originalFileName;

        $oldAvatar = $user->avatar;

        $request->file('avatar')->storeAs('public/avatars', $file_name);

        $user->avatar = $file_name;
        $user->save();


        if($oldAvatar != 'user.jpeg'){
            Storage::delete(str_replace('/storage/', 'public/', $oldAvatar));
        }

        return redirect('/home');
    
    }


   


    public function profile(User $user){
        $currentlyFollowing = 0;
        if(auth()->check()){
            $currentlyFollowing = Follow::where([['user_id', '=', auth()->user()->id], ['followeduser', '=', $user->id]])->count();
        }
        return view('profile-posts', ['currentlyFollowing' => $currentlyFollowing, 'avatar' => $user->avatar, 'username' => $user->username, 'posts' => $user->posts()->latest()->get(), 'postCount' => $user->posts()->count()]);
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
