<?php

namespace App\Widgets\V1\Auth;

use Arrilot\Widgets\AbstractWidget;
use App\Repository\Contracts\PostRepositoryInterface;
use App\Repository\Contracts\TypeSportRepositoryInterface;
use Illuminate\Pagination\LengthAwarePaginator;

final class CardPostEdit extends AbstractWidget
{
    /**
     * typeSportRepository
     *
     * @var TypeSportRepositoryInterface
     */
    private $typeSportRepository;
    
    /**
     * posts
     *
     * @var LengthAwarePaginator
     */
    private $posts;

    /**
     * postRepository
     *
     * @var PostRepositoryInterface
     */
    private $postRepository;

    public function __construct(
        PostRepositoryInterface $postRepository,
        TypeSportRepositoryInterface $typeSportRepository,
        array $config = []
    ) {
        $this->postRepository = $postRepository;
        $this->typeSportRepository = $typeSportRepository;
        $this->posts = null;
        parent::__construct($config);
    }

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        return view('widgets.v1.auth.card_post_edit', [
            'post' => $this->postRepository->findById($this->config['id']),
        ]);
    }
}
