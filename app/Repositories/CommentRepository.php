<?php
namespace App\Repositories;

use App\Models\Comment;
use App\Interfaces\RepositoryInterface;

class CommentRepository implements RepositoryInterface {

    /**
     * Get all comments
     *
     * @return array App\Models\Comment
     */

    public function all() {
        $comments_main = Comment::where('parent_id', 0)->orderBy('id', 'DESC')->get();
        $comments_children = Comment::where('parent_id', '<>', 0)->orderBy('id', 'ASC')->get();
        return $comments_main->merge($comments_children);
    }
    
    /**
     * Add comment
     *
     * @return App\Models\Comment
     */

    public function add($post) {
        return Comment::create([
            'comment'   => $post['comment'],
            'parent_id' => $post['parent_id']
        ]);
    }
}