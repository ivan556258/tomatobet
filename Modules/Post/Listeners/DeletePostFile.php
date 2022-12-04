<?php

namespace Modules\Post\Listeners;

use Modules\Post\Events\PostService;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Storage;

class DeletePostFile
{
    /**
     * Handle the event.
     *
     * @param  FileProcessed  $event
     * @return void
     */
    public function handle(PostService $event)
    {
        $image = $event->post->isImage($event->id);
        if (!is_null($image)) {
            Storage::delete($image);
        }
    }
}
