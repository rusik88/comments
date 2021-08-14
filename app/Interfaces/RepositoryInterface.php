<?php

namespace App\Interfaces;

use App\Models\Review;

interface RepositoryInterface {
    /**
     * Get all comments
     *
     * @return array App\Models\Comment
     */
    public function all();


    /**
     * Add comment
     *
     * @return App\Models\Comment
     */

    public function add($post);
}