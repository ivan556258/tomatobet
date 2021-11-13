<?php

namespace App\Repository\Contracts;
use App\Models\V1\TypeSport;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

interface TypeSportRepositoryInterface extends EloquentRepositoryInterface {
    
    
    /**
     * Method getPostsByTypeSport
     *
     * @param string $urn [explicite description]
     *
     * @return LengthAwarePaginator
     */
    public function getPostsByTypeSport(string $urn): ?LengthAwarePaginator;
    
    /**
     * Method getTypeSport
     *
     * @param string $urn [explicite description]
     *
     * @return TypeSport
     */
    public function getTypeSport(string $urn): ?TypeSport;
}