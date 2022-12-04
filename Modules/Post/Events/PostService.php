<?php

namespace Modules\Post\Events;

use Modules\Post\Repository\Contracts\PostRepositoryInterface;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class PostService
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * The order instance.
     *
     * @var Post
     */
    public $post;

    /**
     * The order instance.
     *
     * @var int
     */
    public $id;

    /**
     * Create a new event instance.
     *
     * @param PostRepositoryInterface $post
     * @param int $id
     * @return void
     */
    public function __construct(int $id, PostRepositoryInterface $post)
    {
        $this->post = $post;
        $this->id = $id;
    }
}
