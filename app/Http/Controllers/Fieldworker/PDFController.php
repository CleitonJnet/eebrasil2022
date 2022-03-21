<?php

namespace App\Http\Controllers\Fieldworker;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use PDF;

class PDFController extends Controller
{

    public function index($id)
    {
        if (Auth()->user()->profile_photo_path != null) {
            $photo = Auth::user()->profile_photo_url;
        }else {
            $photo = asset('img/users/user.jpg');
        };

        $post = Post::find($id);

        $data = [
            'name' => Auth()->user()->name,
            'subject' => $post->subject,
            'text' => $post->text,
            'date' => date('d-m-Y',strtotime($post->date)),
            'photo'=> $photo
        ];

        $pdf = PDF::loadView('post', $data);

        return $pdf->stream('post_'.strtolower(str_replace(' ','-',$data['name'])).'_'.date('Ymd',strtotime($data['date'])).'.pdf',['Attachment' => false]);
    }
}
