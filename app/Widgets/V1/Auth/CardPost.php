<?php

namespace App\Widgets\V1\Auth;

use Arrilot\Widgets\AbstractWidget;
use App\Repository\Contracts\PostRepositoryInterface;
use App\Repository\Contracts\TypeSportRepositoryInterface;
use Illuminate\Pagination\LengthAwarePaginator;

final class CardPost extends AbstractWidget
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
        array $config = []
    ) {
        $this->postRepository = $postRepository;
        $this->posts = null;
        parent::__construct($config);
    }

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        $this->getPosts();
        return view('widgets.v1.auth.card_post', [
            'posts' => $this->posts,
        ]);
    }

    private function getPosts(): void
    {
        if ($this->config['urn'] != '0') {
            $this->posts = $this->typeSportRepository->getPostsByTypeSport($this->config['urn']);
        } else {
            $this->posts = $this->postRepository->partDesc();
        }
    }
}
