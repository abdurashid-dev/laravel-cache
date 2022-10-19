<?php

namespace App\Listeners;

use App\CacheManager\PostCacheManager;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class ClearPostCache
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function handle()
    {
        info('Clear post listener triggered');
        PostCacheManager::clear();
    }
}
