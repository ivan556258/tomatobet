<?php

namespace Modules\Post\Widgets\V1\Auth;

use Arrilot\Widgets\AbstractWidget;

final class CardPostAdd extends AbstractWidget
{
   public function __construct(
        array $config = []
    ) {
        parent::__construct($config);
    }

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        return view('widgets.v1.auth.card_post_edit');
    }
}
