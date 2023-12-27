<!-- start: Sidebar -->
<div class="fixed left-0 top-0 w-64 h-full bg-gray-900 p-4 z-50 sidebar-menu transition-transform">
    <a href="/" class="flex items-center pb-4">
      <span class="text-gray-600 font-bold ml-3">PinnacleBooks</span>
    </a>
    <ul class="mt-4">
      <li class="mb-1 group">
        <a
          href="/dashboard"
          class="flex items-center py-2 px-4 text-gray-800 hover:bg-gray-950 hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100"
        >
          <i class="ri-home-2-line mr-3 text-lg"></i>
          <span class="text-sm">Dashboard</span>
        </a>
      </li>
      <li class="mb-1 group">
        <a
          href="/dashboard/posts"
          class="flex items-center py-2 px-4 text-gray-800 hover:bg-gray-950 hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100"
        >
          <i class="ri-home-2-line mr-3 text-lg"></i>
          <span class="text-sm">My Post</span>
        </a>
      </li>  
    </ul>

    @can('admin')
    <h6 class="flex justify-between items-center px-3 mb-4 text-muted">
      <span>Administrator</span>
    </h6>

    <ul class="mt-4">
      <li class="mb-1 group:">
        <a class="flex items-center py-2 px-4 {{ Request::is('dashboard/categories*') ? 'active' : '' }} text-gray-800 hover:bg-gray-950 hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100" href="/dashboard/categories">
          <i class="ri-home-2-line mr-3 text-lg"></i>
          <span class="text-sm">Post Categories</span>
        </a>
      </li>
    </ul>
    @endcan

    </div>
    <div class="fixed top-0 left-0 w-full h-full bg-black/50 z-40 md:hidden sidebar-overlay">
    </div>
    <!-- end: Sidebar -->
    