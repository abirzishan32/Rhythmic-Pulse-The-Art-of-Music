<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\View;

class PostController extends Controller
{
    public function updatedPost(Post $post, Request $request){
        $incomingFields = $request->validate(
            [
                'title' => 'required',
                'body' => 'required'
            ]
        );

        $incomingFields['title'] = strip_tags($incomingFields['title']);
        $incomingFields['body'] = strip_tags($incomingFields['body']);

        $post->update($incomingFields);
        return redirect("/post/{$post->id}")->with('success', 'Post was updated successfully!');

    } 

    public function showEditForm(Post $post){
        return view('edit-post', ['post' => $post]);
    } 


    public function delete(Post $post){
        $post->delete();
        return redirect('/home')->with('success', 'Post was deleted successfully!');

    }

    public function viewSinglePost(Post $post){
        $post['body'] = Str::markdown($post->body); //Converting the body to markdown
        return view('single-post', ['post' => $post]);
    }

    public function storeNewPost(Request $request){

        //Validating the incoming fields
        $incomingFields = $request->validate(
            [
                'title' => 'required',
                'body' => 'required'
            ]
        );

        //Striping out any HTML or JavaScript tags that malicious user may have entered
        $incomingFields['title'] = strip_tags($incomingFields['title']);
        $incomingFields['body'] = strip_tags($incomingFields['body']);

        //Dynamic user id value by the session
        $incomingFields['user_id'] = auth()->id(); 

        //Saving the entry into the database 
        $newPost = Post::create($incomingFields);

        return redirect("/post/{$newPost->id}")->with('success', 'Post was created successfully!');

    }

    public function showCreateForm(){
        return view('create-post');
    }
}
