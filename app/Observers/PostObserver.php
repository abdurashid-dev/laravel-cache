<?php

namespace App\Observers;

use App\Events\PostCreated;
use App\Events\PostDeleted;
use App\Events\PostUpdated;
use App\Models\Post;

class PostObserver
{
    /**
     * Handle the Post "created" event.
     *
     * @param \App\Models\Post $post
     * @return void
     */
    public function created(Post $post)
    {
        event(new PostCreated);
    }

    /**
     * Handle the Post "updated" event.
     *
     * @param \App\Models\Post $post
     * @return void
     */
    public function updated(Post $post)
    {
        event(new PostUpdated);
    }

    /**
     * Handle the Post "deleted" event.
     *
     * @param \App\Models\Post $post
     * @return void
     */
    public function deleted(Post $post)
    {
        event(new PostDeleted());
    }

    /**
     * Handle the Post "restored" event.
     *
     * @param \App\Models\Post $post
     * @return void
     */
    public function restored(Post $post)
    {
        //
    }

    /**
     * Handle the Post "force deleted" event.
     *
     * @param \App\Models\Post $post
     * @return void
     */
    public function forceDeleted(Post $post)
    {
        //
    }
}
