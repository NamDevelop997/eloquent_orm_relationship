<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\FeatureImages;

class PostController extends Controller
{
    function read()
    {
        $img = FeatureImages::find(2)
            ->post;
            // ->get();
       return $img;
    }

    function del($id)
    {
        return Post::find($id)
            ->destroy($id);
    }

    function showOnlyTrashed()
    {
        return Post::onlyTrashed()->get();
    }
    function add()
    {
        return Post::create(
            [
                'title' => 'title 2',
                'content' => 'content 2',
            ]
        );
    }
}
