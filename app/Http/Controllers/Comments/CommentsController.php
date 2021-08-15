<?php

namespace App\Http\Controllers\Comments;

use App\Http\Controllers\AbstractController;
use App\Repositories\CommentRepository;

class CommentsController extends AbstractController
{
    private $commentsRepository;
    private $commentsAll;
    private $counter = -1;

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
        //$this->commentsAll = $this->commentsRepository->all()->toArray();
        $comments = $this->commentsRepository->all()->toArray();
        $tree_comments = [];
        $comments_child = [];
        if($comments) {
            foreach($comments as $comment_key => $comment) {
                if($comment['parent_id'] != 0) {
                    $comments_child[$comment['id']] = $comment;
                    unset($comments[$comment_key]);
                }
            }
            if(!empty($comments_child)) {
                ksort($comments_child);
                $this->commentsAll = array_merge($comments, $comments_child);
            }
        }
        
        if($this->commentsAll) {
            foreach($this->commentsAll as $comment) {
                if($comment['parent_id'] == 0 && config('comment.deep') > 0) {
                    $tree_comments[] = $this->treeCommentsRecursion($comment);
                    $this->counter = 0;
                }
            }
        }
        return $tree_comments;
    }

    private function treeCommentsRecursion($comment) {
        $output = $comment;
         $this->counter++;
        foreach($this->commentsAll as $comment_item) {
            if($comment_item['parent_id'] == $comment['id'] && $this->counter < config('comment.deep')) {
                $output['children'][$comment_item['id']] = $this->treeCommentsRecursion($comment_item);
            }
        }
        $this->counter = 1;
        return $output;
    }
}
