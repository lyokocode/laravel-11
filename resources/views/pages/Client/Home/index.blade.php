<x-client.layout>
    @auth
        <h1>Merhaba, giriş yapmış bir kullanıcısınız</h1>
    @endauth

    @guest
        <h1>Merhaba, henüz giriş yapmadınız</h1>
    @endguest
</x-client.layout>
