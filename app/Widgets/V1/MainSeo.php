<?php

namespace App\Widgets\V1;

use Arrilot\Widgets\AbstractWidget;

class MainSeo extends AbstractWidget
{

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        return view('widgets.v1.main_seo');
    }
}
