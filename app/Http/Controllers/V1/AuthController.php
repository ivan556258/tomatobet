<?php

namespace App\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\V1\PostService;
use Illuminate\Http\Response;

class AuthController extends Controller
{
    public function __construct(PostService $postService)
    {
        $this->postService = $postService;
    }

    /**
     * Method posts
     *
     * @return void
     */
    public function posts()
    {
        return view('V1.auth.layouts.posts');
    }


    /**
     * Method edit
     *
     * @param int $id int
     *
     * @return void
     */
    public function edit(int $id)
    {
        return view('V1.auth.layouts.post', compact('id'));
    }

    /**
     * Method add
     *
     * @return void
     */
    public function add()
    {
        return view('V1.auth.layouts.add');
    }

    /**
     * Method save
     *
     * @param integer $id
     * @return Response
     */
    public function save(Request $request): Response
    {
        return response($this->postService->save($request));
    }
}
