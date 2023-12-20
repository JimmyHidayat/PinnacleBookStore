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
        <div class="container mt-40">
            <div class="row">

                    @include('dashboard.layouts.sidebar')

                <main class="w-full md:w-[calc(100%-256px)] md:ml-64 bg-gray-50 min-h-screen transition-all main">
                    @yield('container')
                </main>
            </div>
        </div>





    {{-- @include('dashboard.layouts.sidebar')git --}}

    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="/js/script.js"></script>
    </body>
    </html>
