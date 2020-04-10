<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    /**
     * Show the wall main page
     *
     */
    protected function printWall()
    {
        // Select *
        $posts = Post::all();
        // ajoute apres la fin du dernier cours
        return view('wall', ['posts'=>$posts]);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function savePost(Request $request)
    {
        $post = new Post;
        $post->content = $request->post;
        $post->save();

        // ajoute apres la fin du dernier cours
        return redirect('wall');
    }
}
