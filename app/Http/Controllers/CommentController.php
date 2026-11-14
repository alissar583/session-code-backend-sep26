<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        if ($request->commentable_type == 'post') {
            // $post_id = $request->commentable_id;
            // $post = Post::find($post_id);
            // $post->comments()->create([
            //     'content' => "test"
            // ]);
            $commentable_type = Post::class;

            Comment::create([
                'commentable_type' => $commentable_type,
                'commentable_id' => $request->commentable_id,
                'content' => "sadfsa"
            ]);
        }
    }
}
