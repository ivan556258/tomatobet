<?php
declare(strict_types=1);

namespace App\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use App\Services\V1\PostService;
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
    private $postService;

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
    public function posts(): View
    {
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
