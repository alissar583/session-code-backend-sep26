<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Services\CommentService;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function __construct(protected CommentService $commentService)
    {
        // throw new \Exception('Not implemented');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }


    public function storeComment(Post $post)
    {
        $this->commentService->store($post);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
