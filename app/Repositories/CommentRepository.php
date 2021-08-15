<?php
namespace App\Repositories;

use App\Models\Comment;
use App\Interfaces\RepositoryInterface;

class CommentRepository implements RepositoryInterface {

    /**
     * Get all comments by order DESC parent comment
     *
     * @return array App\Models\Comment
     */

    public function all() {
        return Comment::orderBy('id', 'DESC')->get(); 
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

    /**
     * Get all comments
     *
     * @return array App\Models\Comment
     */

    public function all_r() {
        return Comment::all(); 
    }
}