<?php

namespace App\Http\Controllers\Comments;

use App\Http\Controllers\AbstractController;
use App\Repositories\CommentRepository;

class CommentsController extends AbstractController
{
    private $commentsRepository;
    private $commentsAll;

    public function __construct() {
        $this->commentsRepository = new CommentRepository();
    }

    public function index() {
        return $this->displayView('comments');
    }

    public function recursionOther() {
        dd($this->treeComments());
    }

    private function treeComments() {
        $this->commentsAll = $this->commentsRepository->all()->toArray();
        $tree_comments = [];
        if($this->commentsAll) {
            foreach($this->commentsAll as $comment) {
                if($comment['parent_id'] == 0) {
                    $tree_comments[] = $this->treeCommentsRecursion($comment);
                }
            }
        }
        return $tree_comments;
    }

    private function treeCommentsRecursion($comment) {
        $output = $comment;
        foreach($this->commentsAll as $comment_item) {
            if($comment_item['parent_id'] == $comment['id']) {
                $output['children'][$comment_item['id']] = $this->treeCommentsRecursion($comment_item);
            }
        }
        return $output;
    }
}
