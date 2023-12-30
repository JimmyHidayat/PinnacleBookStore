<header style="background-color: #C1E1DC">
<div class="py-2 px-6 flex items-center shadow-md shadow-black/5 sticky top-0 left-0 z-30">
    <button type="button" class="text-lg text-gray-600 sidebar-toggle">
        <i class="ri-menu-line"></i>
    </button>
    <ul class="flex items-center text-sm ml-4">
        <li class="mr-2">
            <a href="#" class="text-gray-400 hover:text-gray-600 items-center font-medium">Dashboard</a>
        </li>
        <li class="mr-2 items-center font-medium">/</li>
        <li class="mr-2 items-center font-medium">Admin</li>
    </ul>
    <ul class="ml-auto flex items-center">
        <li class="mr-1 dropdown ">
            <button type="button"
                class="dropdown-toggle text-gray-400 w-8 h-8 rounded flex items-center justify-center hover:bg-gray-50 hover:text-gray-600">
            </button>
            <div class="dropdown-menu shadow-md shadow-black/5 z-30 hidden max-w-xs w-full bg-white rounded-md">
            </div>
        </li>

        <li class="dropdown">
            <button type="button" class="dropdown-toggle flex items-center">
                <h1 style="font-size: 18px">Welcome Back, {{ auth()->user()->username }} </h1>
                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 14 18">
                    <path d="M7 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9Zm2 1H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z"/>
                  </svg>
                
            </button>
            <ul
                class="dropdown-menu shadow-md shadow-black/5 z-30 hidden py-1.5 rounded-md bg-white w-full max-w-[140px]">
                <li>
                <form action="/logout" method="POST">
                    @csrf
                    <button
                        class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-500 hover:bg-gray-50">Logout
                    </button>
                </form>
                </li>
            </ul>
        </li>
    </ul>
</div>
</header>