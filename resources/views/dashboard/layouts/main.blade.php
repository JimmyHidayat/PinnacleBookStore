@extends('dashboard/layouts/header')
<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8" />
            <meta name="viewport" content="width=device-width, initial-scale=1.0" />
            <link
              href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css"
              rel="stylesheet"
            />
            <meta name="viewport" content="width=device-width, initial-scale=1" />
            <link
              rel="stylesheet"
              href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css"
            />
            <link
              rel="stylesheet"
              href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css"
            />
            <script type="module" src="https://unpkg.com/ionicons@5.0.0/dist/ionicons/ionicons.esm.js"></script>
        
            <link rel="stylesheet" href="/css/style2.css" />
    </head>
    <body>

    
    
    {{-- Header --}}

    @include('dashboard.layouts.header')

    {{-- Akhir Header --}}
         
    <!-- start: Main -->
    <main class="w-full md:w-[calc(100%-256px)] md:ml-64 bg-gray-50 min-h-screen transition-all main">
        <div class="p-6">
            <div class="bg-gray-900 shadow-md shadow-black/5 p-6 rounded">
                <div class="flex justify-between mb-4 items-start">
                    <div class="font-medium">Data Produk</div>
                    <div class="flex items-center">
                        <div class="search">
                            <input type="text" class="search__input" placeholder="Search..." />
                            <div class="search__icon">
                                <ion-icon name="search"></ion-icon>
                            </div>
                        </div>
                        <span class="font-medium btn-filter btn-btn-filter button" id="modal"><img
                                src="img/filter.png" alt=""
                                class="btn-filter-img btn-btn-filter-img" /></span>
                        <span class="font-medium btn-add btn-btn-add button" id="modal">Tambah<img
                                src="img/add.png" alt="" class="btn-add-img btn-btn-add-img" /></span>
                    </div>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full min-w-[460px]">
                        <thead>
                            <tr>
                                <th
                                    class="text-[12px] uppercase tracking-wide font-medium text-gray-400 py-2 px-4 bg-gray-50 text-left rounded-tl-md rounded-bl-md">
                                    ID
                                </th>
                                <th
                                    class="text-[12px] uppercase tracking-wide font-medium text-gray-400 py-2 px-4 bg-gray-50 text-left">
                                    Judul
                                </th>
                                <th
                                    class="text-[12px] uppercase tracking-wide font-medium text-gray-400 py-2 px-4 bg-gray-50 text-left rounded-tr-md rounded-br-md">
                                    Gambar
                                </th>
                                <th
                                    class="text-[12px] uppercase tracking-wide font-medium text-gray-400 py-2 px-4 bg-gray-50 text-left rounded-tr-md rounded-br-md">
                                    Penerbit
                                </th>
                                <th
                                    class="text-[12px] uppercase tracking-wide font-medium text-gray-400 py-2 px-4 bg-gray-50 text-left rounded-tr-md rounded-br-md">
                                    Tahun Terbit
                                </th>
                                <th
                                    class="text-[12px] uppercase tracking-wide font-medium text-gray-400 py-2 px-4 bg-gray-50 text-left rounded-tr-md rounded-br-md">
                                    Aksi
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <td class="py-2 px-4">
                                <div class="flex items-center">
                                    <a href="#"
                                        class="text-gray-600 text-sm font-medium hover:text-blue-500 ml-2 truncate">1</a>
                                </div>
                            </td>
                            <td class="py-2 px-4">
                                <span class="text-[13px] font-medium text-gray-600">One Piece</span>
                            </td>
                            <td class="py-2 px-4">
                                <img src="img/one-piece.jpg" alt=""
                                    class="w-8 h-8 rounded object-cover block" />
                            </td>
                            <td class="py-2 px-4">
                                <span class="text-[13px] font-medium text-gray-600">One Piece</span>
                            </td>
                            <td class="py-2 px-4">
                                <span class="text-[13px] font-medium text-gray-600">One Piece</span>
                            </td>
                            <td class="py-2">
                                <div class="flex items-center">
                                    <span class="btn-watch btn-btn-watch">
                                        <img src="img/eye.png" alt="Gambar" class="btn-watch-img btn-btn-watch-img" />
                                    </span>
                                    <span class="btn-edit btn-btn-edit">
                                        <img src="img/edit.png" alt="Gambar"
                                            class="btn-edit-img btn-btn-edit-img" /></span>
                                    <span class="btn-delete btn-btn-delete">
                                        <img src="img/delete1.png" alt="Gambar"
                                            class="btn-delete-img btn-btn-delete-img" /></span>
                                </div>
                            </td>
                        </tbody>
                    </table>
                    <div class="flex items-center">
                        <span class="btn-skipback btn-btn-skipback">
                            <img src="img/skipback.png" alt="Gambar"
                                class="btn-skipback-img btn-btn-skipback-img" /></span>
                        <span class="btn-back btn-btn-back">
                            <img src="img/back.png" alt="Gambar" class="btn-back-img btn-btn-back-img" /></span>
                        <span class="btn-next btn-btn-next">
                            <img src="img/next.png" alt="Gambar" class="btn-next-img btn-btn-next-img" /></span>
                        <span class="btn-skipnext btn-btn-skipnext">
                            <img src="img/skipnext.png" alt="Gambar"
                                class="btn-skipnext-img btn-btn-skipnext-img" /></span>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- end: Main -->

    


    @include('dashboard.layouts.sidebar')

    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="/js/script.js"></script>
    </body>
    </html>
   