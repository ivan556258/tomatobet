<?php

namespace App\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use App\Models\V1\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AuthController extends Controller
{

    const PATH = 'public/images';
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
     * @return void
     */
    public function save(Request $request)
    {
        $imageName = null;
        $data = $request->all();
        if ($request->hasFile('bigPicture')) {
            $image      = $request->file('bigPicture');
            $imageName = time() . '.' . $image->extension();
            Storage::putFileAs(self::PATH, $image, $imageName);
        }
        $data['bigPicture'] = self::PATH . '/' . $imageName;
        if (!is_null($request['id'])) {
            $post = Post::find($request['id']);
            $data['public'] = (bool)$data['public'];
            $post->update($data);
        } else {
            $data['public'] = (bool)$data['public'];
            Post::create($data);
        }
    }
}
