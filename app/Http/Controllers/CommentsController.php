<?php

namespace App\Http\Controllers;
use App\Http\Requests\CommentFormRequest;
use Illuminate\Http\Request;
use App\Comment;

class CommentsController extends Controller
{
    public function newComment(CommentFormRequest $request)
    {
        $comment= new Comment(array(
            'post_id'=>$request->get('post_id'),
            'content'=>$request->get('content')

        ));
        $comment->save();
        return redirect()->back()->with('status','you has been create new comment');
    }
}
