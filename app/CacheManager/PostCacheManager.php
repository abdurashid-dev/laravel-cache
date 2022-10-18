<?php

namespace App\CacheManager;

use App\Models\Post;
use Illuminate\Cache\Events\CacheHit;
use Illuminate\Support\Facades\Cache;

class PostCacheManager
{
    public static function clear()
    {
        Cache::forget('posts');
    }

    public static function write()
    {
        $posts = Post::all();
        Cache::put('posts', $posts);
    }

    public static function read()
    {
        $posts = Cache::get('posts');
        if (!Cache::has('posts')) {
            self::write();
            $posts = Cache::get('posts');
        }

        return [
            'posts' => $posts
        ];
    }
}
