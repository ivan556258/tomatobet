<?php

namespace Modules\Post\Repository\Eloquent;

use Modules\Post\Repository\Contracts\PostRepositoryInterface;
use Modules\Post\Models\V1\Post;
use Illuminate\Pagination\LengthAwarePaginator;

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
    public function __construct(Post $model)
    {
        $this->model = $model;
    }

    /**
     * Method isImage
     *
     * @param int $id [id post]
     *
     * @return string
     */
    public function isImage(int $id): string
    {
        return $this->model::find($id)->bigPicture;
    }

    /**
     * Get part model via desc
     *
     * @param array $columns
     * @param array $relations
     * @return Collection
     */
    public function partDescFront(array $relations = [], $elements = 12): LengthAwarePaginator
    {
        return $this->model->orderBy('id', 'DESC')->where('public', 1)->paginate($elements);
    }
}
