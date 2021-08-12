<?php

namespace App\Repositories;

use App\Models\Review;

class CommentRepository {
    private $comments;

    public function all() {
        return Review::all();
    }
}