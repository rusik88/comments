<?php

namespace App\Http\Controllers\Comments;

use App\Http\Controllers\AbstractController;
use Illuminate\Http\Request;

class CommentsController extends AbstractController
{
    public function index() {
        return $this->displayView('comments');
    }
}
