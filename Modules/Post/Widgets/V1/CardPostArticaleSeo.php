<?php

namespace Modules\Post\Widgets\V1;

use Arrilot\Widgets\AbstractWidget;
use Modules\Post\Repository\Contracts\PostRepositoryInterface;

class CardPostArticaleSeo extends AbstractWidget
{
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
        // only config
        $this->addConfigDefaults([
            'urn' => '0'
        ]);
        parent::__construct($config);
    }

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        return view('widgets.v1.card_post_articale_seo', [
            'post' => $this->postRepository->findById($this->config['id']),
        ]);
    }
}
