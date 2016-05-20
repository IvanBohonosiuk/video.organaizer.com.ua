<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Comment;

class CommentController extends Controller
{
    public function store(Request $request, Comment $comment)
    {

        $this->validate($request, [
            'body'=>'required|min:5|max:400'
        ]);

        $all=$request->all();
        // $all['videos_id']=$comment->id;
        Comment::create($all);
        return back()->with('message','Спасибо за комментарий. После проверки он будет опубликован');

    }
}
