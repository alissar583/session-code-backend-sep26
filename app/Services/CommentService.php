<?php

namespace App\Services;

class CommentService
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    public function store($entity)
    {
        // if ($type == 'post') {
            $entity->comments()->create([
                'content' =>"test"
            ]);
        // }
    }
}
