<?php 
namespace App\Services\V1;

use Illuminate\Support\Facades\Storage;
use App\Repository\Eloquent\PostRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Events\PostService as PostServiceFileDelete;

class PostService
{
    const PATH = 'public/images';
    
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
            $imageName = time() . '.' . $image->extension();
            Storage::putFileAs(self::PATH, $image, $imageName);
        }
        $data['bigPicture'] = self::PATH . '/' . $imageName;
        if (!is_null($request['id'])) {
            $data['public'] = (bool)$data['public'];
            event(new PostServiceFileDelete($request['id'], $this->postRepository));
            $this->postRepository->update($request['id'], $data);
            $status = 2;
        } else {
            $data['public'] = (bool)$data['public'];
            $this->postRepository->create($data);
            $status = 1;
        }
        return $status;
    }
}