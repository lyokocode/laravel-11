<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Helpers\LinkHelper; 
use App\Helpers\DateHelper; 

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->get();

        // Her bir post için link verilerini al
        foreach ($posts as $post) {
            $post->linkData = LinkHelper::fetchLinkData($post->body); // body alanını link olarak varsayıyoruz
            $post->created_at_formatted = DateHelper::timeAgo($post->created_at); // Tarihi formatla
        }

        return view('pages/Client/Explore.index', ['posts' => $posts ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
