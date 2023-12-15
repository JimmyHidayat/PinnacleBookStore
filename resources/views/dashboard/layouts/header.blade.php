<header>
<div class="py-2 px-6 flex items-center bg-[#736356] shadow-md shadow-black/5 sticky top-0 left-0 z-30">
    <button type="button" class="text-lg text-gray-600 sidebar-toggle">
        <i class="ri-menu-line"></i>
    </button>
    <ul class="flex items-center text-sm ml-4">
        <li class="mr-2">
            <a href="#" class="text-gray-400 hover:text-gray-600 bg-[#736356] items-center font-medium">Dashboard</a>
        </li>
        <li class="bg-[#736356] mr-2 items-center font-medium">/</li>
        <li class="bg-[#736356] mr-2 items-center font-medium">Admin</li>
    </ul>
    <ul class="ml-auto flex items-center">
        <li class="mr-1 dropdown">
            <button type="button"
                class="dropdown-toggle text-gray-400 w-8 h-8 rounded flex items-center justify-center hover:bg-gray-50 hover:text-gray-600"></button>
            <div class="dropdown-menu shadow-md shadow-black/5 z-30 hidden max-w-xs w-full bg-white rounded-md">
            </div>
        </li>

        <li class="dropdown ml-3">
            <button type="button" class="dropdown-toggle flex items-center">
                <img src="/img/eye.png" alt=""
                    class="w-8 h-8 rounded block object-cover align-middle" />
            </button>
            <ul
                class="dropdown-menu shadow-md shadow-black/5 z-30 hidden py-1.5 rounded-md bg-white w-full max-w-[140px]">
                <li>
                    <a href="#"
                        class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-500 hover:bg-gray-50">Profile</a>
                </li>
                <li>
                    <a href="#"
                        class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-500 hover:bg-gray-50">Settings</a>
                </li>
                <li>
                    <a href="#"
                        class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-500 hover:bg-gray-50">Logout</a>
                </li>
            </ul>
        </li>
    </ul>
</div>
</header>