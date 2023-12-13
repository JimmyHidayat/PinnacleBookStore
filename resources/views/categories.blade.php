<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css"  rel="stylesheet" />
</head>
<body>
  @include('partials.navbar')
  <section class="mx-5 my-5 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-3">
    {{-- @foreach ($menus as $menu) --}}
    <div class="w-full max-w-[125%] bg-gray-50 border rounded-lg shadow">
        <img class="p-8 rounded-t-lg w-[100%]" src="img/laskarPelangi.jpg" alt="image" />
        {{-- <div class="p-8 rounded-t-lg w-[100%]" style="background-image: url('register/panther.jpg'); background-size: cover; background-position: center center;"> --}}
        <div class="px-5 pb-5">
            <div class="flex items-center mt-2.5 mb-5">
                <div class="flex items-center space-x-1 rtl:space-x-reverse">
                    {{-- {{ Str::ucfirst($menu->category) }} --}}
                </div>
            </div>
        </div>
    </div>

    <div class="w-full max-w-[125%] bg-gray-50 border rounded-lg shadow">
        <img class="p-8 rounded-t-lg w-[100%]" src="img/laskarPelangi.jpg" alt="image" />
        {{-- <div class="p-8 rounded-t-lg w-[100%]" style="background-image: url('register/panther.jpg'); background-size: cover; background-position: center center;"> --}}
        <div class="px-5 pb-5">
            <div class="flex items-center mt-2.5 mb-5">
                <div class="flex items-center space-x-1 rtl:space-x-reverse">
                    {{-- {{ Str::ucfirst($menu->category) }} --}}
                </div>
            </div>
        </div>
    </div>


    <div class="w-full max-w-[125%] bg-gray-50 border rounded-lg shadow">
        <img class="p-8 rounded-t-lg w-[100%]" src="img/laskarPelangi.jpg" alt="image" />
        {{-- <div class="p-8 rounded-t-lg w-[100%]" style="background-image: url('register/panther.jpg'); background-size: cover; background-position: center center;"> --}}
        <div class="px-5 pb-5">
            <div class="flex items-center mt-2.5 mb-5">
                <div class="flex items-center space-x-1 rtl:space-x-reverse">
                    {{-- {{ Str::ucfirst($menu->category) }} --}}
                </div>
            </div>
        </div>
    </div>

    <div class="w-full max-w-[125%] bg-gray-50 border rounded-lg shadow">
        <img class="p-8 rounded-t-lg w-[100%]" src="img/laskarPelangi.jpg" alt="image" />
        {{-- <div class="p-8 rounded-t-lg w-[100%]" style="background-image: url('register/panther.jpg'); background-size: cover; background-position: center center;"> --}}
        <div class="px-5 pb-5">
            <div class="flex items-center mt-2.5 mb-5">
                <div class="flex items-center space-x-1 rtl:space-x-reverse">
                    {{-- {{ Str::ucfirst($menu->category) }} --}}
                </div>
            </div>
        </div>
    </div>
</body>
</html>

