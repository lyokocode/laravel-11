@props(['post'])

{{-- post card --}}
<div class="border border-gray-400 px-3 py-2 flex flex-col gap-y-2">
    {{-- author & date --}}
    <div class="w-full flex items-center gap-x-1">
        <img src="https://pbs.twimg.com/profile_images/1740476733659254785/S3chCct-_400x400.jpg" alt=""
            class="w-10 h-10 rounded-full mx-1">
        <h2 class="font-normal text-gray-600">aelita.dev tarafından,</h2>
        <p class="font-normal text-gray-600">{{ $post->created_at_formatted }} oluşturuldu.</p>
    </div>

    {{-- card title --}}
    <h2 class="text-gray-800">"{{ $post->title }}"</h2>

    {{-- card link --}}
    <div class="flex space-x-3 p-3 bg-emerald-100">
        @if ($post->linkData['image'])
            <img src="{{ $post->linkData['image'] }}" alt="Link Resmi" class="w-40 h-auto">
        @endif
        <div class="">
            <a href="{{ $post->body }}" class="text-gray-700 font-medium underline" target="_blank">
                {{ $post->linkData['title'] }}
            </a>
            <p class="font-light text-gray-700">{{ $post->linkData['description'] }}</p>
        </div>

    </div>
</div>
