@props(['msg', 'bg' => 'bg-green-500'])

<p class="text-sm font-medium text-zinc-50 bg-green-500 px-3 py-2 rounded-md {{ $bg }}">
    {{ $msg }}
</p>
