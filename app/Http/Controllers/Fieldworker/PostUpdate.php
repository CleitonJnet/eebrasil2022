<?php

namespace App\Http\Controllers\Fieldworker;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostUpdate extends Controller
{
    public function update(Request $request,$id)
    {
        $post = Post::find($id);

        $post->date     = date('Y-m-d',strtotime($request->date));
        $post->subject  = $request->subject;
        $post->text     = $request->text;
        $post->status   = $request->status;
        $post->save();

        session()->flash('message','Registro atualizado com sucesso!');
        return redirect()->route('fieldworker.posts.view',$id);
    }
}
