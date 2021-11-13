<?php

namespace App\Repository\Eloquent;

use App\Repository\Contracts\PostRepositoryInterface;
use App\Models\V1\Post;

class PostRepository extends BaseRepository implements PostRepositoryInterface
{
    /**
     * @var Model
     */
    protected $model;

    /**
     * BaseRepository constructor
     *
     * @param Model $model
     */
    public function __construct(Post $model) {
        $this->model = $model;
    }
}