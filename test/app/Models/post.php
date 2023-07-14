<?php

namespace App\Models;

class post
{
    public static function find($slug)
    {
        //resource_path('posts/{$slug}.html');
        $path= resource_path("posts/{$slug}.html");
        return file_get_contents($path);

    }
}
