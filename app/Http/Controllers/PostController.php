<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Helpers\LinkHelper; 
use App\Helpers\DateHelper; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class PostController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->paginate(6);

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
    public function store(Request $request){

         //Validate
        $fields = $request -> validate([
            'title' => ['required', 'max:255'],
            'body' => ['required', 'max:255'],
            ], [
            'title.required' => 'title zorunludur!',
            'body.required' => 'link zorunludur!',
            'body.unique' => 'Bu link zaten paylaşılmış!',
        ]);

        // create a post 
        Auth::user()->posts()->create($fields);

        // redirect to client page
        return back()->with('success', 'Post başarılı bir şekilde paylaşıldı');

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
    public function update(Request $request, Post $post)
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
