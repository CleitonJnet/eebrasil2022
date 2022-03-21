<?php

namespace App\Http\Controllers\Fieldworker;

use App\Http\Controllers\Controller;
use App\Models\Post;
use PDF;

class PDFController extends Controller
{
    public function index()
    {
        $post = Post::find(1);

        $data = [
            'name' => Auth()->user()->name,
            'subject' => $post->subject,
            'text' => $post->text,
            'date' => date('d-m-Y',strtotime($post->date))
        ];

        $pdf = PDF::loadView('post', $data);

        return $pdf->stream('post.pdf',['Attachment' => false]);
    }
}
