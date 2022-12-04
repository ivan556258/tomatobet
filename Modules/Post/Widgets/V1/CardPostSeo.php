<?php

namespace Modules\Post\Widgets\V1;

use Arrilot\Widgets\AbstractWidget;

class CardPostSeo extends AbstractWidget
{
    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        return view('widgets.v1.card_post_seo');
    }
}
