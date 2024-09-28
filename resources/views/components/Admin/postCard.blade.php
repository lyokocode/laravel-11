<div class=" p-2 border border-gray-400 bg-gray-200 shadow-2xl">
    <p>{{ $post->created_at->diffForHumans() }}</p>
    <h2>{{ $post->title }}</h2>
    <h3>{{ $post->body }}</h3>
</div>
