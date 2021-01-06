<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\URL;
use Carbon\Carbon;

class SitemapController extends Controller
{
    public function index()
    {
        // create sitemap
        $sitemap = App::make("sitemap");

        // set cache
        // $sitemap->setCache('laravel.sitemap-posts', 3600);

        // add items
        $now = Carbon::now();
        $sitemap->add(URL::to('/'), $now, '1.0', 'always');
        $sitemap->add(URL::to('/about'), '2021-01-06', '1.0', 'yearly');

        // add posts
        $posts = \DB::table('posts')->orderBy('created_at', 'desc')->get();

        foreach ($posts as $post)
        {
            $sitemap->add(URL::to('/posts/' . $post->id), $post->updated_at, '1.0', 'yearly');
        }

        // show sitemap
        return $sitemap->render('xml');
    }
}
