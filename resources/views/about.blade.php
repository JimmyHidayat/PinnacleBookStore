@extends('layouts.main')

@section('container')
<div class="carousel carousel-end rounded-box flex justify-center mb-8 py-8">
    <div class="carousel-item relative h-100 mx-2 my-200">
      <img src="https://source.unsplash.com/1200x400?Library" alt="Library" />
    </div>
    <div class="carousel-item relative h-100 mx-2 my-200">
      <img src="https://source.unsplash.com/1200x400?Book" alt="Book" />
    </div>
    <div class="carousel-item relative h-100 mx-2 my-200">
      <img src="https://source.unsplash.com/1200x400?Novel" alt="Novel" />
    </div>
    </div>

    <div class="text-gray-600 text-lg mb-8 text-center ">
        <p>PinnacleBookStore Website</p>
        <p class="text-xs">Butuh penjelasan untuk berbagai fitur di PinnacleBookStore? Cari tahu disini</p>
    </div>

    <div id="accordion-flush" data-accordion="collapse" data-active-classes="bg-[#d2cac9] text-[#584f49]" data-inactive-classes="text-[#584f49]">
        <h2 id="accordion-flush-heading-1">
          <button type="button" class="flex items-center justify-between w-full py-5 font-medium rtl:text-right text-[#584f49] border-b border-gray-700 gap-3" data-accordion-target="#accordion-flush-body-1" aria-expanded="true" aria-controls="accordion-flush-body-1">
            <span class="px-5">About PinnacleBookStore</span>
            <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
            </svg>
          </button>
        </h2>
        <div id="accordion-flush-body-1" class="hidden" aria-labelledby="accordion-flush-heading-1">
          <div class="py-5 border-b border-gray-700">
            <p class="mb-2 text-gray-600 px-5">Kami adalah toko buku, sebuah destinasi literasi yang mengedepankan kecintaan terhadap dunia tulis-menulis dan pengetahuan. Berkomitmen untuk menjadi jembatan antara penulis dan pembaca, toko buku kami berusaha menyediakan pilihan bacaan berkualitas dari berbagai genre dan topik.
                Di PinnacleBookStore, Anda akan menemukan tim kami yang penuh dedikasi dan bersemangat. Dari para penulis lokal hingga pembaca setia, setiap individu di sini memiliki satu kesamaan: cinta akan kata-kata dan cerita.
                Kami percaya bahwa buku bukan hanya kumpulan halaman yang terikat, tetapi sebuah jendela ke dunia, sebuah teman setia yang selalu ada untuk Anda. Dengan semangat ini, kami berkomitmen untuk terus menyediakan bacaan yang memperkaya pikiran dan jiwa Anda.
                Terima kasih telah mengunjungi halaman "About". Kami berharap Anda menemukan buku yang Anda cari dan dapatkan pengalaman belanja yang memuaskan bersama PinnacleBookStore.
                Jika Anda memiliki pertanyaan atau saran, jangan ragu untuk menghubungi kami. Kami selalu siap untuk melayani dan berbagi cinta literasi dengan Anda.</p>
                <p class="text-gray-600 px-5">Salam literasi,
                    Tim PinnacleBookStore<3 </p>
          </div>
        </div>
        <h2 id="accordion-flush-heading-2">
          <button type="button" class="flex items-center justify-between w-full py-5 font-medium rtl:text-right text-[#584f49] border-b border-gray-700 gap-3" data-accordion-target="#accordion-flush-body-2" aria-expanded="false" aria-controls="accordion-flush-body-2">
            <span class="px-5">Bagaimana cara mendaftar di PinnacleStore?</span>
            <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
            </svg>
          </button>
        </h2>
        <div id="accordion-flush-body-2" class="hidden" aria-labelledby="accordion-flush-heading-2">
          <div class="py-5 border-b border-gray-700">
            <p class="mb-2 text-gray-600 px-5">Buka website PinnacleStore, lalu klik login pada halaman home. Jika belum mempunyai akun, maka klik
                <a href="/register" class="text-blue-600 dark:text-blue-500 hover:underline">Create Account</a>.
            </p>
          </div>
        </div>
        <h2 id="accordion-flush-heading-3">
          <button type="button" class="flex items-center justify-between w-full py-5 font-medium rtl:text-right text-[#584f49] border-b border-gray-700 gap-3" data-accordion-target="#accordion-flush-body-3" aria-expanded="false" aria-controls="accordion-flush-body-3">
            <span class="px-5">Di mana saya bisa menghubungi PinnacleBookStore?</span>
            <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
            </svg>
          </button>
        </h2>
        <div id="accordion-flush-body-3" class="hidden" aria-labelledby="accordion-flush-heading-3">
          <div class="py-5 border-b border-gray-700">
            <p class="mb-2 text-gray-600 px-5">Chat : Buka website PinnacleBookStore, dan klik
                <a href="/contact" class="text-blue-600 hover:underline">Contact</a>
            </p>
            <p class="mb-2 text-gray-600 px-5">Email :
                <a href="mailto:pinnaclebookstore0@gmail.com" class="text-blue-600 hover:underline">pinnaclebookstore0@gmail.com</a>
            </p>

          </div>
        </div>
      </div>


    {{-- <div class="bg-gray-100 min-h-screen">
        <div class="container mx-auto px-4 py-16">
            <h2 class="text-4xl font-bold mb-10">About us</h2>
            <div class="text-gray-600 text-lg">
                <p>Selamat datang di halaman "About" dari toko kami!</p>
                <br>
                <p> Kami adalah toko buku, sebuah destinasi literasi yang mengedepankan kecintaan terhadap dunia tulis-menulis dan pengetahuan. Berkomitmen untuk menjadi jembatan antara penulis dan pembaca, toko buku kami berusaha menyediakan pilihan bacaan berkualitas dari berbagai genre dan topik.
                    Di Pinnacle Store, Anda akan menemukan tim kami yang penuh dedikasi dan bersemangat. Dari para penulis lokal hingga pembaca setia, setiap individu di sini memiliki satu kesamaan: cinta akan kata-kata dan cerita.
                    Kami percaya bahwa buku bukan hanya kumpulan halaman yang terikat, tetapi sebuah jendela ke dunia, sebuah teman setia yang selalu ada untuk Anda. Dengan semangat ini, kami berkomitmen untuk terus menyediakan bacaan yang memperkaya pikiran dan jiwa Anda.
                    Terima kasih telah mengunjungi halaman "About". Kami berharap Anda menemukan buku yang Anda cari dan dapatkan pengalaman belanja yang memuaskan bersama Pinnacle Store.
                    Jika Anda memiliki pertanyaan atau saran, jangan ragu untuk menghubungi kami. Kami selalu siap untuk melayani dan berbagi cinta literasi dengan Anda.</p>

                    <br>
                    <p>Salam literasi,
                    Tim Pinnacle Store<3 </p>

            </div>
        </div>
    </div> --}}
@endsection
