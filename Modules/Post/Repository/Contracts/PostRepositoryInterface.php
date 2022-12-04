<?php

namespace Modules\Post\Repository\Contracts;

use Illuminate\Pagination\LengthAwarePaginator;

interface PostRepositoryInterface extends EloquentRepositoryInterface
{

    /**
     * Method isImage
     *
     * @param int $id [id post]
     *
     * @return string
     */
    public function isImage(int $id): string;

    /**
     * Get part model via desc
     *
     * @param array $columns
     * @param array $relations
     * @return Collection
     */
    public function partDescFront(array $relations = [], $elements = 12): LengthAwarePaginator;
}
