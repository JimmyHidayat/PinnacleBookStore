<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  {{-- Tailwimd CSS --}}
  <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
  {{-- Font Google --}}
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@500&display=swap" rel="stylesheet">
  {{-- !!! --}}

  {{-- title --}}
  <title>PinnacleBookStore</title>

  {{-- Font Awesome --}}
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
  
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,800;1,400&display=swap" rel="stylesheet">
  <script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>
  <style>
    .self-center {
        font-family: 'Caveat', cursive;
    }
  </style>
</head>
    <body>
  
        @include('partials.navbar')

            <div class="container">
                @yield('container')
            </div>

        @include('partials.footer')
    </body>
</html>