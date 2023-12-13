<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite('resources/css/app.css')
        <link href="https://cdn.jsdelivr.net/npm/daisyui@4.4.17/dist/full.min.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="resources/css/app.css">
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="login">

        @include('partials.navbar')

      <div class="w-full max-w-sm mx-auto p-3 bg-[#D9AE84] border border-[#D9AE84] rounded-lg shadow sm:p-2 md:p-4 dark:bg-[#D9AE84] dark:border-[#D9AE84] transform translate-y-20">
          <form class="space-y-6" action="#">
              <h5 class="text-center text-[35px] font-medium text-gray-900 dark:text-gray-600">Login</h5>
              <div>
                  <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-600">Your email</label>
                  <input type="email" name="email" id="email" class="bg-[#D9AE84] border border-yellow-900 text-gray-900 text-sm rounded-lg focus:border-[#D9AE84] block w-full p-2.5 dark:bg-[#D9AE84] dark:border-yellow-900 dark:placeholder-yellow-800" placeholder="pinnacle@bookstore.com" required>
              </div>
              <div>
                  <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-600">Your password</label>
                  <input type="password" name="password" id="password" placeholder="" class="bg-[#D9AE84] border border-yellow-900 text-gray-900 text-sm rounded-lg focus:ring-[#D9AE84] focus:border-[#D9AE84] block w-full p-2.5 dark:bg-[#D9AE84] dark:border-yellow-900 dark:placeholder-yellow-800 dark:text-[#736356]" required>
              </div>
              <div class="flex items-start">
                  <div class="flex items-start">
                      <div class="flex items-center h-5">
                          <input id="remember" type="checkbox" value="" class="w-4 h-4 border border-[#736356] rounded bg-[#736356] focus:ring-white dark:bg-[#736356] dark:border-[#736356] dark:focus:ring-white dark:ring-offset-white dark:focus:ring-offset-white" required>
                      </div>
                      <label for="remember" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-600">Remember me</label>
                  </div>
                  <a href="#" class="ms-auto text-sm font-bold  hover:underline hover:text-blue-500 dark:text-black">Forgot Password?</a>
              </div>
              <button type="submit" class="w-full text-white hover:text-black focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center hover:bg-opacity-90 bg-[#736356]">Login to your account</button>
              <div class="text-sm font-medium text-gray-500 dark:text-gray-600 text-capasity-30">
                  Not registered? <a href="/register" class="hover:underline hover:text-blue-500 dark:text-black">Create account</a>
              </div>
              <div class="flex flex-wrap items-center justify-center">
                <a class="px-32 text-center text-sm font-medium text-gray-600 mb-2">-Or Continue-</a>
                <button type="submit" class="flex items-center text-white hover:text-black bg-white hover:bg-[#736356] focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-[#736356] dark:hover:bg-[#EFDECE] dark:focus:ring-[#736356]">
                    <img
                        src="img/google.png"
                        alt=""
                        class="w-5 h-5 rounded block object-cover align-middle"
                    > <span class="ml-3 text-md"> Login with google</span>
                </button>
              </div>
          </form>
      </div>
        
  </body>
</html>