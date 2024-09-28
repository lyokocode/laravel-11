<div class=" w-1/3 mx-auto text-center">

    {{-- session messages --}}
    @if (session('success'))
        <div>
            <p>{{ session('success') }}</p>
        </div>
    @endif

    <h2>yeni bir post oluştur.</h2>
    <form action="{{ route('posts.store') }}" method="post" class="text-center flex flex-col items-center gap-y-2">
        @csrf

        {{-- post title --}}
        <div class="flex flex-col w-2/3 items-start ">
            <label for="title" class="text-md font-semibold text-gray-600">post title:</label>
            <input type="text" name="title" value="{{ old('title') }}"
                placeholder="@error('title') {{ $message }} @enderror"
                class="w-full rounded-md pl-3 font-semibold text-gray-700 p-1 placeholder:text-red-500 placeholder:text-sm placeholder:text-left placeholder:font-light
                placeholder:pl-0 text-left @error('title') border border-red-500 @enderror">
        </div>

        {{-- body --}}
        <div class="flex flex-col w-2/3 items-start ">
            <label for="body" class="text-md font-semibold text-gray-600">post body:</label>
            <input type="body" name="body" placeholder="@error('body') {{ $message }} @enderror"
                class="w-full rounded-md pl-3 font-semibold text-gray-700 p-1 placeholder:text-red-500 placeholder:text-sm placeholder:text-left placeholder:font-light
                placeholder:pl-0 text-left @error('body') border border-red-500 @enderror">
        </div>


        @error('failed')
            <p class="text-sm text-red-500">{{ $message }}</p>
        @enderror

        <button class="bg-sky-500 text-sky-100 font-semibold text-xl px-2 py-1 rounded-md">oluştur</button>
    </form>

</div>
