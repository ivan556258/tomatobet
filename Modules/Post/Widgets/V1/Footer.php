<?php

namespace Modules\Post\Widgets\V1;

use Arrilot\Widgets\AbstractWidget;

class Footer extends AbstractWidget
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        return view('widgets.v1.footer');
    }
}
