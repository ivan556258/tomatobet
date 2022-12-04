<?php
declare(strict_types=1);

namespace Modules\Post\Http\Controllers\V1;

use JetBrains\PhpStorm\NoReturn;
use Modules\Post\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Modules\Post\Services\V1\PostService;
use Illuminate\Http\Response;

/**
 * Class PostController
 * @package App\Http\Controllers\V1
 */
class AuthController extends Controller
{
    /**
     * @var PostService
     */
    private PostService $postService;

    /**
     * @param PostService $postService
     */
    public function __construct(PostService $postService)
    {
        $this->postService = $postService;
    }

    /**
     * @return View
     */
    #[NoReturn] public function posts(): View
    {
        dd(5454);
        return view('V1.auth.layouts.posts');
    }


    /**
     * @param int $id
     * @return View
     */
    public function edit(int $id): View
    {
        return view('V1.auth.layouts.post', compact('id'));
    }

    /**
     * @return View
     */
    public function add(): View
    {
        return view('V1.auth.layouts.add');
    }

    /**
     * @param Request $request
     * @return Response
     */
    public function save(Request $request): Response
    {
        return response($this->postService->save($request));
    }
}
