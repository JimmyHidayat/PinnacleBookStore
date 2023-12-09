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
        <button class="bg-[#736356] hover:bg-[#D9AE84] text-white font-bold py-2 px-4 rounded">
            <svg class="h-6 w-6 inline-block" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
            </svg>
        </button>
      <div class="w-full max-w-sm mx-auto p-3 bg-[#D9AE84] border border-[#D9AE84] rounded-lg shadow sm:p-2 md:p-4 dark:bg-[#D9AE84] dark:border-[#D9AE84] transform translate-y-20">
          <form class="space-y-6" action="#">
              <h5 class="text-center text-[35px] font-medium text-gray-900 dark:text-gray-600">Login</h5>
              <div>
                  <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-600">Your email</label>
                  <input type="email" name="email" id="email" class="bg-[#D9AE84] border border-yellow-900 text-gray-900 text-sm rounded-lg focus:ring-[#D9AE84] focus:border-[#D9AE84] block w-full p-2.5 dark:bg-[#D9AE84] dark:border-yellow-900 dark:placeholder-yellow-800 dark:text-[#736356]" placeholder="pinnacle@bookstore.com" required>
              </div>
              <div>
                  <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-600">Your password</label>
                  <input type="password" name="password" id="password" placeholder="" class="bg-[#D9AE84] border border-yellow-900 text-gray-900 text-sm rounded-lg focus:ring-[#D9AE84] focus:border-[#D9AE84] block w-full p-2.5 dark:bg-[#D9AE84] dark:border-yellow-900 dark:placeholder-yellow-800 dark:text-[#736356]" required>
              </div>
              <div class="flex items-start">
                  <div class="flex items-start">
                      <div class="flex items-center h-5">
                          <input id="remember" type="checkbox" value="" class="w-4 h-4 border border-[#736356] rounded bg-[#736356] focus:ring-white focus:ring-white dark:bg-[#736356] dark:border-[#736356] dark:focus:ring-white dark:ring-offset-white dark:focus:ring-offset-white" required>
                      </div>
                      <label for="remember" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-600">Remember me</label>
                  </div>
                  <a href="#" class="ms-auto text-sm text-white font-bold hover:underline dark:text-gray-600">Forgot Password?</a>
              </div>
              <button type="submit" class="w-full text-white bg-[#736356] hover:bg-[#736356] focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-[#736356] dark:hover:bg-[#736356] dark:focus:ring-[#736356]">Login to your account</button>
              <div class="text-sm font-medium text-gray-500 dark:text-gray-600">
                  Not registered? <a href="#" class="text-[#736356] hover:underline dark:text-white">Create account</a>
              </div>
              <div>
              <a class="px-32 text-center text-sm font-medium text-gray-500 dark:text-gray-600">-Or Continue-</a>
              <a href="#">
              <img src="https://developers.google.com/identity/images/g-logo.png" alt="Google logo" class="h-11 w-7 mx-auto my-auto py-2">
              </a>
              </div>
          </form>
      </div>
        
  </body>
</html>