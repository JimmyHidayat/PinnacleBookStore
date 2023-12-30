<!-- start: Sidebar -->
<div class="fixed left-0 top-0 w-64 h-full bg-gray-900 p-4 z-50 sidebar-menu transition-transform" style="background-color: #C1E1DC">
    <a href="/" class="flex items-center pb-4">
      <span class="text-black font-bold ml-3">PinnacleBooks</span>
    </a>
    <ul class="mt-4">
      <li class="mb-1 group">
        <a
          href="/dashboard"
          class="flex items-center py-2 px-4 text-gray-800 hover:bg-gray-950 hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100"
        >
          {{-- <i class="ri-home-2-line mr-3 text-lg"></i> --}}
          <svg xmlns="http://www.w3.org/2000/svg" height="18" width="18" viewBox="0 0 512 512"><path d="M0 96C0 60.7 28.7 32 64 32H448c35.3 0 64 28.7 64 64V416c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V96zm64 64V416H224V160H64zm384 0H288V416H448V160z"/></svg>
          <span class="text-sm text-black font-medium ml-4">Dashboard</span>
        </a>
      </li>
      <li class="mb-1 group">
        <a
          href="/dashboard/posts"
          class="flex items-center py-2 px-4 text-gray-800 hover:bg-gray-950 hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100"
        >
          {{-- <i class="ri-home-2-line mr-3 text-lg"></i> --}}
          <svg xmlns="http://www.w3.org/2000/svg" height="18" width="18" viewBox="0 0 384 512"><path d="M64 464c-8.8 0-16-7.2-16-16V64c0-8.8 7.2-16 16-16H224v80c0 17.7 14.3 32 32 32h80V448c0 8.8-7.2 16-16 16H64zM64 0C28.7 0 0 28.7 0 64V448c0 35.3 28.7 64 64 64H320c35.3 0 64-28.7 64-64V154.5c0-17-6.7-33.3-18.7-45.3L274.7 18.7C262.7 6.7 246.5 0 229.5 0H64zm56 256c-13.3 0-24 10.7-24 24s10.7 24 24 24H264c13.3 0 24-10.7 24-24s-10.7-24-24-24H120zm0 96c-13.3 0-24 10.7-24 24s10.7 24 24 24H264c13.3 0 24-10.7 24-24s-10.7-24-24-24H120z"/></svg>
          <span class="text-sm text-black font-medium ml-4">My Post</span>
        </a>
      </li>
      <li class="mb-1 group">
        <a href="/cetakBuku" target="_blank" class="flex items-center py-2 px-4 text-gray-800 hover:bg-gray-950 hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100">
          <svg class="text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"  height="18" width="18" fill="none" viewBox="0 0 16 20">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 18a.969.969 0 0 0 .933 1h12.134A.97.97 0 0 0 15 18M1 7V5.828a2 2 0 0 1 .586-1.414l2.828-2.828A2 2 0 0 1 5.828 1h8.239A.97.97 0 0 1 15 2v5M6 1v4a1 1 0 0 1-1 1H1m0 9v-5h1.5a1.5 1.5 0 1 1 0 3H1m12 2v-5h2m-2 3h2m-8-3v5h1.375A1.626 1.626 0 0 0 10 13.375v-1.75A1.626 1.626 0 0 0 8.375 10H7Z"/>
          </svg>
          <span class="text-sm text-black font-medium ml-4">Print To PDF</span>
      </a>
      </li>
    </ul>

    @can('admin')
    <h6 class="flex justify-between items-center px-3 mb-4 text-muted">
      
      <span class="text-black font-bold">Administrator</span>
    </h6>

    <ul class="mt-4">
      <li class="mb-1 group:">
        <a class="flex items-center py-2 px-4 {{ Request::is('dashboard/categories*') ? 'active' : '' }} text-gray-800 hover:bg-gray-950 hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100" href="/dashboard/categories">
          {{-- <i class="ri-home-2-line mr-3 text-lg"></i> --}}
          <svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512"><path d="M40 48C26.7 48 16 58.7 16 72v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V72c0-13.3-10.7-24-24-24H40zM192 64c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zM16 232v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V232c0-13.3-10.7-24-24-24H40c-13.3 0-24 10.7-24 24zM40 368c-13.3 0-24 10.7-24 24v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V392c0-13.3-10.7-24-24-24H40z"/></svg>
          <span class="text-sm text-black font-medium ml-4">Post Categories</span>
        </a>
      </li>
    </ul>
    @endcan

    </div>
    <div class="fixed top-0 left-0 w-full h-full bg-black/50 z-40 md:hidden sidebar-overlay">
    </div>
    <!-- end: Sidebar -->
    