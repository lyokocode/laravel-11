<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

<nav class="h-[8vh] px-4 sm:px-10 md:px-20 flex items-center justify-between sticky top-0 bg-gray-300">

    {{-- logo --}}
    <h1 class="text-3xl font-bold text-gray-600">/AELITA</h1>

    <input type="text" placeholder="Ara..."
        class="w-1/2 bg-gray-200 h-8 pl-4 rounded-lg font-medium text-gray-600 placeholder:text-gray-500 hidden sm:block">

    <div>
        @auth
            <div class="relative grid place-items-center" x-data="{ open: false }" @click.outside="open=false">
                <button x-on:click="open = !open">
                    <img src="https://pbs.twimg.com/profile_images/1740476733659254785/S3chCct-_400x400.jpg" alt=""
                        class="w-10 h-10 rounded-full">
                </button>

                {{-- dropdown menu --}}
                <div x-show="open"
                    class="bg-gray-200 shadow-xl absolute top-10 right-4 rounded-lg font-light p-2 overflow-hidden w-40">
                    <p class=" border-b border-zinc-300">{{ auth()->user()->username }}</p>
                    <a href="{{ route('profile') }}" class="block hover:bg-gray-300 p-1 my-2 max-w-max">Profilim</a>

                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <button class="px-2 py-1 bg-gray-300 hover:bg-gray-400 duration-500 delay-100 rounded-md">Çıkış
                            Yap</button>
                    </form>
                </div>

            </div>
        @endauth

    </div>

    @guest
        <a href="{{ route('login') }}" class="bg-gray-400 rounded-lg px-3 py-2 font-semibold text-gray-700">giriş yap</a>
    @endguest

</nav>
