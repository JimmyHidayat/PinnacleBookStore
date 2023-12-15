<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        {{-- @vite('resources/css/app.css') --}}
        <link href="https://cdn.jsdelivr.net/npm/daisyui@4.4.17/dist/full.min.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="/css/style.css">
        <script src="https://cdn.tailwindcss.com"></script>

        {{--  --}}

        <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
        {{-- Font Google --}}
         <link rel="preconnect" href="https://fonts.googleapis.com">
         <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
         <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@500&display=swap" rel="stylesheet">
        {{--  --}}
        <title>PinnacleBookStore</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,800;1,400&display=swap" rel="stylesheet">
        <script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>

        {{--  --}}

    </head>
    <body>
        <div class="Registrasi">

        @include('partials.navbar')

        <div class="w-full max-w-sm mx-auto p-3 bg-[#D9AE84] border border-[#D9AE84] rounded-lg shadow sm:p-2 md:p-4  transform translate-y-20">
            <form action="/register" method="POST" class="max-w-md mx-auto">
                @if(session()->has('failed'))
                    <div id="notification" class="w-full max-w-xs p-4 text-gray-900 bg-white rounded-lg shadow dark:bg-gray-800 dark:text-gray-300" role="alert">
                    <div class="flex items-center mb-3">
                    <span class="mb-1 text-sm font-semibold text-gray-900 dark:text-white">New notification</span>
                    <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-white justify-center items-center flex-shrink-0 text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700" data-dismiss-target="#notification" aria-label="Close">
                    <span class="sr-only">Close</span>
                    <svg class="w-3 h-3" aria-hidden="true" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                     </svg>
                    </button>
                    </div>

                 {{ session('failed') }}
        
                    </div>
                @endif
                @csrf
            <h5 class="text-center text-[35px] font-medium text-gray-600 pb-5 ">Register</h5>
            <div class="relative z-0 w-full mb-5 group">
                <input type="text" name="username" id="username" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-[#736356] dark:border-gray-600 dark:focus:border-[#736356] focus:outline-none focus:ring-0 focus:border-[#736356] peer" placeholder=" " required @error('username') is-invalid @enderror value="{{ old('username') }}" />
                <label for="floating_first_name" class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-[#736356] peer-focus:dark:text-[#736356] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Username</label>
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <input type="email" name="email" id="email" class="block py-2.5 px-0 w-full text-sm  bg-transparent border-0 border-b-2  appearance-none text-[#736356] border-gray-600 focus:outline-none focus:ring-0 focus:border-[#736356] peer" placeholder=" " required @error('email') is-invalid @enderror value="{{ old('username') }}" />
                <label for="floating_email" class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-[#736356] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email address</label>
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <input type="password" name="password" id="floating_repeat_password" class="block py-2.5 px-0 w-full text-sm bg-transparent border-0 border-b-2 border-gray-600 appearance-none text-[#736356]  focus:outline-none focus:ring-0 focus:border-[#736356] peer" placeholder=" " required @error('password') is-invalid @enderror/>
                <label for="floating_repeat_password" class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-[#736356] peer-focus:dark:text-[#736356] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Password</label>
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <input type="password" name="confirmPassword" id="floating_repeat_password" class="block py-2.5 px-0 w-full text-sm bg-transparent border-0 border-b-2 border-gray-600 appearance-none text-[#736356]  focus:outline-none focus:ring-0 focus:border-[#736356] peer" placeholder=" " required @error('confirmPassword') is-invalid @enderror />
                <label for="floating_repeat_password" class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-[#736356] peer-focus:dark:text-[#736356] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Confirm password</label>
            </div>
            {{-- <div class="grid md:grid-cols-2 md:gap-6">
                <div class="relative z-0 w-full mb-5 group">
                    <input type="text" name="floating_first_name" id="floating_first_name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-[#736356] dark:border-gray-600 dark:focus:border-[#736356] focus:outline-none focus:ring-0 focus:border-[#736356] peer" placeholder=" " required />
                    <label for="floating_first_name" class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-[#736356] peer-focus:dark:text-[#736356] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Username</label>
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <input type="text" name="floating_last_name" id="floating_last_name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-[#736356] dark:border-gray-600 dark:focus:border-[#736356] focus:outline-none focus:ring-0 focus:border-[#736356] peer" placeholder=" " required />
                    <label for="floating_last_name" class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-[#736356] peer-focus:dark:text-[#736356] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Last name</label>
                </div>
            </div> --}}
            {{-- <div class="flex items-start mb-5">
                <div class="flex items-center h-5">
                    <input id="terms" type="checkbox" value="" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800" required>
                </div>
                <label for="terms" class="ms-2 text-sm font-medium text-gray-500">I agree with the <a href="#" class="hover:underline hover:text-blue-500 dark:text-black">terms and conditions</a></label>
            </div> --}}

                <button type="submit" class="w-full text-white hover:text-black focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center hover:bg-opacity-90  bg-[#736356] mb-4">Register</button>

                <div class="text-sm font-medium text-gray-500 dark:text-gray-600 text-capasity-30">
                    Already registered? <a href="/login" class="hover:underline hover:text-blue-500 dark:text-black">Login</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
