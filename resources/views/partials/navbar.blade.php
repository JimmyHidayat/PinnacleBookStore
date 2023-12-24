  <!-- Navbar -->
  {{-- <nav class="bg-[#736356] border-gray-200" > --}}
  <nav class="bg-[#736356] border-gray-200 fixed w-full z-50 top-0 start-0 border-b dark:border-gray-600">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
      <a href="/dashboard" class="flex items-center space-x-3 rtl:space-x-reverse">
          <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white" style="font-family: 'Caveat', cursive;">PinnacleBookStore.</span>
      </a>
      {{-- <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
          <span class="sr-only">Open main menu</span>
          <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
          </svg>
      </button> --}}
      <div class="hidden w-full md:block md:w-auto" id="navbar-default">
        <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border rounded-lg md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 bg-[#736356] border-gray-700">
          <li>
            <a href="/" class="block py-2 px-3 text-[#D9AE84] bg-blue-700 rounded md:bg-transparent md:p-0 hover:text-white">Home</a>
          </li>
          <li>
            <a href="/MyBooks" class="block py-2 px-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0  md:p-0 hover:text-[#D9AE84]">MyBooks</a>
          </li>
          <li>
            <a href="/categories" class="block py-2 px-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0  md:p-0 hover:text-[#D9AE84]">Categories</a>
          </li>
          

  
          
          {{-- <li>
              <div class="relative">
                <div class="absolute inset-y-0 start-0 flex items-center ps-1 pointer-events-none">
                  <svg class="w-3 h-3 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="none" viewBox="0 0 20 20">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/></svg>
                </div>
                <input type="search" id="search" class="block w-full p-1 ps-5 text-sm text-[#736356] border border-[#D9AE84] rounded-lg bg-gray-50 focus:ring-[#D9AE84] focus:border-[#D9AE84]  "placeholder="Cari judul buku" required>
              </div>
            </li> --}}
            <li>
              <a href="#" class="block py-2 px-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0  md:p-0 hover:text-[#D9AE84] dark:hover:bg-gray-700 md:dark:hover:bg-transparent"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
            </li>
                @auth
                
                
                  {{-- <h2>
                    Welcome Back, {{ auth()->user()->username }}
                  </h2> --}}

                  <form action="/logout" method="POST">
                    @csrf
                    <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="text-white bg-[#736356] hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-1 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">{{ auth()->user()->username }}<svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                      </svg>
                      </button>
                      
                                  <!-- Dropdown menu -->
                                  <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                                      <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                                        <a href="/dashboard" type="submit" class="block px-4 justify-start py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                          Dashboard
                                        </a>
                                        <li>
                                          <button type="submit" class="block px-4 justify-start py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                            Sign out
                                          </button>
                                        </li>
                                      </ul>
                                  </div>
                    {{-- <li>
                      <button type="submit" class="block text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0  md:p-0 hover:text-[#D9AE84] dark:hover:bg-gray-700 md:dark:hover:bg-transparent"><i class="fa-solid fa-arrow-right-to-bracket"></i>Logout</button>
                    </li> --}}
                  </form>
                
                @else
                
                <li>
                  <a href="/login" class="block py-2 px-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0  md:p-0 hover:text-[#D9AE84] dark:hover:bg-gray-700 md:dark:hover:bg-transparent"><i class="fa-solid fa-arrow-right-to-bracket"></i>Login</a>
                </li>
                @endauth
        </ul>
      </div>
    </div>
  </nav>

