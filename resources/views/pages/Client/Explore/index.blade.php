<x-client.layout>

    <div class="flex flex-col space-y-4">

        <h1 class="text-4xl font-bold underline text-gray-600">Keşfet</h1>

        <div class="bg-slate-300 p-2 rounded-md text-gray-600">
            <p>
                Hepimiz "bir ara şu bloğu okuyayım" ya da "şu kodları bi ara inceleyeyim" deyip sonra unuttuğumuz hatta
                asla aklımıza gelmediği linkler mutlaka oluyordur.
            </p>
            <p>Şahsen ben bunu çok yapıyorum. Hatta favori linklerime ekleyip unuttuğum kaynaklar bile oluyor.</p>
            <p>İşte bu alanda, hem unutmamak için hem de sizlere faydası olabilecek kaynakları listelemek istiyorum.</p>
        </div>

        @foreach ($posts as $post)
            <x-client.postCard :post="$post" />
        @endforeach

    </div>
    <div class="mt-4">
        {{ $posts->links() }}
    </div>

</x-client.layout>
