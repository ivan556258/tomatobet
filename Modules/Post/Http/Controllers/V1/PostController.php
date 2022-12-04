<?php
declare(strict_types=1);

namespace Modules\Post\Http\Controllers\V1;

use Modules\Post\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;

/**
 * Class PostController
 * @package App\Http\Controllers\V1
 */
class PostController extends Controller
{
    /**
     * @return View
     */
    public function posts(): View
    {
        return view('V1.guest.layouts.posts');
    }

    /**
     * @param int $id
     * @return View
     */
    public function post(int $id): View
    {
        return view('V1.guest.layouts.post', compact('id'));
    }

    /**
     * @param string $urn
     * @return View
     */
    public function typeSport(string $urn): View
    {
        return view('V1.guest.layouts.posts', compact('urn'));
    }
}
