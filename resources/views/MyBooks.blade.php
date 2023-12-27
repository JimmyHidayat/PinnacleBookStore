{{-- <!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css"  rel="stylesheet" />
  <link rel="stylesheet" href="/css/style.css">
</head>
<body> --}}
    @extends('layouts.main')

    @section('container')

    <div class="grid gap-4">
      <div>
          <img class="h-auto max-w-full rounded-lg" src="https://source.unsplash.com/1200x400?Books" alt="Books">
      </div>
      <div class="grid grid-cols-5 gap-4">
          <div>
              <img class="h-auto max-w-full rounded-lg" src="https://source.unsplash.com/1200x400?Books" alt="Novel">
          </div>
          <div>
              <img class="h-auto max-w-full rounded-lg" src="https://source.unsplash.com/1200x400?Books" alt="Sains">
          </div>
          <div>
              <img class="h-auto max-w-full rounded-lg" src="https://source.unsplash.com/1200x400?Books" alt="Biography">
          </div>
          <div>
              <img class="h-auto max-w-full rounded-lg" src="https://source.unsplash.com/1200x400?Books" alt="Comic">
          </div>
          <div>
              <img class="h-auto max-w-full rounded-lg" src="https://source.unsplash.com/1200x400?Books" alt="Education">
          </div>
      </div>
    </div>




    @endsection
{{-- </body>
</html> --}}

