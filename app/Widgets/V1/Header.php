<?php

namespace App\Widgets\V1;

use Arrilot\Widgets\AbstractWidget;

class Header extends AbstractWidget
{
    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        return view('widgets.v1.header');
    }
}
