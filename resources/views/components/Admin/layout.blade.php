<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')

    <title>/AELITA</title>

</head>

<body>

    {{-- app container --}}
    <div>
        {{-- navbar --}}
        <x-admin.Navbar.index />

        {{-- app wrapper --}}
        <div class="flex ">
            {{-- sidebar --}}
            <div class="w-[15rem]">
                <x-admin.Sidebar.index />
            </div>
            {{-- app --}}
            <div class="flex-1 p-4">
                {{ $slot }}
            </div>
        </div>

    </div>

</body>

</html>
