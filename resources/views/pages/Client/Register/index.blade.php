<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>/AELITA || Kayıt Ol</title>
    @vite('resources/css/app.css')

</head>

<body>

    {{-- page container --}}
    <div class="flex items-center justify-center bg-gray-300 w-full h-screen">
        {{-- wrapper --}}
        <div class="text-center bg-gray-200 w-1/3 min-w-80 max-w-xl rounded-md p-3">
            <h1 class="text-3xl font-bold text-gray-700">/AELITA</h1>
            <h2 class="my-2 text-lg font-medium text-gray-600">Yeni bir hesap oluştur.</h2>

            <form action="{{ route('register') }}" method="post"
                class="text-center flex flex-col items-center gap-y-2">

                @csrf

                {{-- username --}}
                <div class="flex flex-col w-2/3 items-start ">
                    <label for="username" class="text-md font-semibold text-gray-600">Kullanıcı adı:</label>
                    <input type="text" name="username" value="{{ old('username') }}"
                        placeholder="@error('username') {{ $message }} @enderror"
                        class="w-full rounded-md pl-3 font-semibold text-gray-700 p-1 placeholder:text-red-500 placeholder:text-sm placeholder:text-left placeholder:font-light
                        placeholder:pl-0 text-left @error('username') border border-red-500 @enderror">
                </div>

                {{-- email --}}
                <div class="flex flex-col w-2/3 items-start ">
                    <label for="email" class="text-md font-semibold text-gray-600">Email:</label>
                    <input type="text" name="email" value="{{ old('email') }}"
                        placeholder="@error('email') {{ $message }} @enderror"
                        class="w-full rounded-md pl-3 font-semibold text-gray-700 p-1 placeholder:text-red-500 placeholder:text-sm placeholder:text-left placeholder:font-light
                        placeholder:pl-0 text-left @error('email') border border-red-500 @enderror">
                </div>

                {{-- password --}}
                <div class="flex flex-col w-2/3 items-start ">
                    <label for="password" class="text-md font-semibold text-gray-600">Şifre:</label>
                    <input type="password" name="password"
                        placeholder="@error('password') {{ $message }} @enderror"
                        class="w-full rounded-md pl-3 font-semibold text-gray-700 p-1 placeholder:text-red-500 placeholder:text-sm placeholder:text-left placeholder:font-light
                        placeholder:pl-0 text-left @error('password') border border-red-500 @enderror">
                </div>

                {{-- confirmed password --}}
                <div class="flex flex-col w-2/3 items-start ">
                    <label for="password_confirmation"
                        class="text-md font-semibold text-gray-600">Şifre(tekrar):</label>
                    <input type="password" name="password_confirmation"
                        placeholder="@error('password') {{ $message }} @enderror"
                        class="w-full rounded-md pl-3 font-semibold text-gray-700 p-1 placeholder:text-red-500 placeholder:text-sm placeholder:text-left placeholder:font-light
                        placeholder:pl-0 text-left @error('password') border border-red-500 @enderror">
                </div>
                <button class="bg-sky-500 text-sky-100 font-semibold text-xl px-2 py-1 rounded-md">kayıt ol</button>

                {{-- route to login page --}}
                <div class="self-end text-end">
                    <h3>zaten bir hesabın var mı?</h3>
                    <a href="{{ route('login') }}" class='text-blue-600'>giriş yap</a>
                </div>
            </form>

        </div>
    </div>

</body>

</html>
