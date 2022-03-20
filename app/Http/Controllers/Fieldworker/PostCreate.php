<?php

namespace App\Http\Controllers\Fieldworker;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostCreate extends Controller
{
    public function store(Request $request)
    {
        $post = new Post;

        $post->user_id  = Auth()->user()->id;
        $post->date     = date('Y-m-d',strtotime($request->date));
        $post->subject  = $request->subject;
        $post->text     = $request->text;
        $post->status   = $request->status;
        $post->moderate = 1;
        $post->save();

        return redirect()->route('fieldworker.posts.index');
    }
}
