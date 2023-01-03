<?php
namespace Modules\Post\Services\V1;

use Illuminate\Support\Facades\Storage;
use Modules\Post\Repository\Eloquent\PostRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Modules\Post\Events\PostService as PostServiceFileDelete;

class PostService
{
    const PATH = 'public/images';

    /**
     * @var PostRepository
     */
    private PostRepository $postRepository;

    /**
     * BaseRepository constructor.
     *
     * @param PostRepository $postRepository
     */
    public function __construct(PostRepository $postRepository)
    {
        $this->postRepository = $postRepository;
    }


    /**
     * Method save
     *
     * @param Request $request
     *
     * @return int
     */
    public function save(Request $request):int
    {
        $status = 0;
        $imageName = null;
        $data = $request->all();
        $data['user_id'] = Auth::user()->id;
        if ($request->hasFile('bigPicture')) {
            $image      = $request->file('bigPicture');
            $imageName  = time() . '.' . $image->extension();
            Storage::putFileAs(self::PATH, $image, $imageName);
        }
        $data['bigPicture'] = Storage::url(self::PATH . '/' . $imageName);
        $data['prevText'] = preg_replace('#<[^>]+>#', ' ', $request['eDataHtml']);
        $data['public'] = (bool)$data['public'];
        $data['smallPicture'] = null;
        if (!is_null($request['id'])) {
            event(new PostServiceFileDelete($request['id'], $this->postRepository));
            $this->postRepository->update($request['id'], $data);
            $status = 2;
        } else {
            $this->postRepository->create($data);
            $status = 1;
        }
        return $status;
    }
}
