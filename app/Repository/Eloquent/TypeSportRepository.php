<?php

namespace App\Repository\Eloquent;

use App\Repository\Contracts\TypeSportRepositoryInterface;
use App\Models\V1\TypeSport;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection;
use App\Repository\Eloquent\BaseRepository;

class TypeSportRepository extends BaseRepository implements TypeSportRepositoryInterface
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
    public function __construct(TypeSport $model) {
        $this->model = $model;
    }

    /**
     * Method getPostsByTypeSport
     *
     * @param string $urn [explicite description]
     *
     * @return LengthAwarePaginator
     */
    public function getPostsByTypeSport(string $urn): LengthAwarePaginator
    {
        $typeSport = $this->getTypeSport($urn);
        return $typeSport->posts()->orderBy('id', 'DESC')->paginate();
    }

    /**
     * Method findByUrn
     *
     * @param string $urn [explicite description]
     *
     * @return Model
     */
    public function getTypeSport(string $urn): TypeSport
    {
        return $this->model->select('id')->where('urn', $urn)->first();
    }

}