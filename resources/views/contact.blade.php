@extends('layouts.main')

{{-- @section('title', 'Privacy Policy') --}}

@section('container')
{{-- <body class=" text-black px-8 py-12"> --}}
<form action="" name="submit-to-google-sheet">
<div class="text-center w-full">
  <h1 class="text-3xl lg:text-5xl">Contact Form</h1>
</div>
<div class="contact mt-24 px-8 grid gap-8 grid-cols-1 md:grid-cols-2 md:px-12 lg:px-16 xl:px-32 py-16 mx-auto bg-gray-100 text-gray-900 rounded-lg shadow-lg">
  <div class="flex flex-col justify-between">
    <div>
      <h2 class="text-4xl lg:text-5xl font-bold leading-tight">Lets talk about everything!</h2>
      <div class="text-gray-700 mt-8">
      </div>
    </div>
  </div>
  <div class="">
    <div id="notification" class="hidden w-full max-w-xs p-4 text-gray-900 bg-white rounded-lg shadow dark:bg-gray-800 dark:text-gray-300" role="alert">
      <div class="flex items-center mb-3">
          <span class="mb-1 text-sm font-semibold text-gray-900 dark:text-white">Terimakasih! Pesan anda sudah kami terima.</span>
              <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-white justify-center items-center flex-shrink-0 text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700" data-dismiss-target="#notification" aria-label="Close">
              <span class="sr-only">Close</span>
                  <svg class="w-3 h-3" aria-hidden="true" fill="none" viewBox="0 0 14 14">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                  </svg>
              </button>
      </div>
    </div>
    <div>
      <span class="uppercase text-sm text-gray-600 font-bold">Full Name</span>
      <input class="w-full bg-gray-300 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"
        type="text" placeholder="" name="nama">
    </div>
    <div class="mt-8">
      <span class="uppercase text-sm text-gray-600 font-bold">Email</span>
      <input class="w-full bg-gray-300 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"
        type="text" name="email">
    </div>
    <div class="mt-8">
      <span class="uppercase text-sm text-gray-600 font-bold">Message</span>
      <textarea
        class="w-full h-32 bg-gray-300 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline" name="pesan">
      </textarea>
    </div>
    <div class="mt-8">
      <button
        type="submit" class="btn-kirim uppercase text-sm font-bold tracking-wide bg-[#675d5d] text-gray-100 p-3 rounded-lg w-full focus:outline-none focus:shadow-outline">
        Send Message
      </button>
    </div>
  </div>
</div>
</form>

<script>
  const scriptURL = 'https://script.google.com/macros/s/AKfycbzAguySZXmixsMjTvhiF_FJzoPfY8ulLQ1XM79KHXvwulKVkuU9lHZFvtRZ959X5yS1/exec'
  const form = document.forms['submit-to-google-sheet']
  const btnKirim = document.querySelector('.btn-kirim')
  const myAlert = document.querySelector('#notification')

  form.addEventListener('submit', e => {
    e.preventDefault()

    // ketika tombol submit di klik
    // tampilkan tombol alert
    // btnKirim.classList.toggle('hidden');
    // myAlert.classList.toggle('hidden');
    myAlert.classList.remove('hidden');
    
    fetch(scriptURL, { method: 'POST', body: new FormData(form)})
      .then(response => {
        // tampilkan tombol alert
        myAlert.classList.remove('hidden');
        // reset formnya
        form.reset();
        console.log('Success!', response);
      })
      .catch(error => console.error('Error!', error.message));
  });
</script>

{{-- <script>
  const scriptURL = 'https://script.google.com/macros/s/AKfycbzAguySZXmixsMjTvhiF_FJzoPfY8ulLQ1XM79KHXvwulKVkuU9lHZFvtRZ959X5yS1/exec'
  const form = document.forms['submit-to-google-sheet']
  const btnKirim = document.querySelector('.btn-kirim')
  const myAlert = document.querySelector('.hidden')


  form.addEventListener('submit', e => {
    e.preventDefault()

      // ketika tombol submit di klik
      // tampilkan tombol alert
      btnKirim.classList.toggle('hidden');
      myAlert.classList.toggle('hidden');
      fetch(scriptURL, { method: 'POST', body: new FormData(form)})
      .then((response => {
        // tampilkan tombol alert
        myAlert.classList.toggle('hidden');
        // reset formnya
        form.reset();
        console.log('Success!', response);
      }));
      .catch(error => console.error('Error!', error.message));
  });
</script> --}}
@endsection
