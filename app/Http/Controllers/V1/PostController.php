<?php

namespace App\Http\Controllers\V1;

use App\Http\Controllers\Controller;

class PostController extends Controller
{   
    /**
     * Method posts
     *
     * @return void
     */
    public function posts()
    {
        return view('V1.layouts.posts');
    }
    
    /**
     * Method post
     *
     * @param int $id [explicite description]
     *
     * @return void
     */
    public function post(int $id)
    {
        return view('V1.layouts.post', compact('id'));
    }
    
    /**
     * Method typeSport
     *
     * @param string $urn [explicite description]
     *
     * @return void
     */
    public function typeSport(string $urn)
    {
        return view('V1.layouts.posts', compact('urn'));
    }
}
