<x-admin.layout>
    <div class="p-5 flex flex-col gap-y-3">

        <x-admin.form.post />

        <h1 class="font-bold underline text-2xl">Paylaştığım Postlar</h1>

        <div class="grid grid-cols-2 gap-3">

            @foreach ($posts as $post)
                <x-admin.postCard :post="$post" />
            @endforeach
        </div>

    </div>
    {{ $posts->links() }}
</x-admin.layout>
