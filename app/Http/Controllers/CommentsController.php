<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Cat;
use App\Comment;
use App\User;

class CommentsController extends Controller
{
    public function addComment(Request $request, $id)
    {
        $cat = Cat::find($id);
    	$comment = new Comment();
    	$user = Auth::user()->getId();
    	$username = User::find($user);

    	$comment->name = $username->name;
    	$comment->comment = $request->body;
    	$comment->user_id = $user;
        $comment->catCardId = $cat->id;

    	$comment->save();

        

    	return back();

    }

}
