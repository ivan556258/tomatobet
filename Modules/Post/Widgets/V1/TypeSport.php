<?php

namespace Modules\Post\Widgets\V1;

use Arrilot\Widgets\AbstractWidget;
use Modules\Post\Repository\Contracts\TypeSportRepositoryInterface;

class TypeSport extends AbstractWidget
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    /**
     * postRepository
     *
     * @var TypeSportRepositoryInterface
     */
    private $typeSportRepository;

    public function __construct(TypeSportRepositoryInterface $typeSportRepository) {
        $this->typeSportRepository = $typeSportRepository;
    }

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        return view('widgets.v1.type_sport', [
            'config' => $this->typeSportRepository->all(),
        ]);
    }
}
