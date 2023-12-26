<style>

.shopping-cart {
  position: absolute;
  top: 100%;
  right: -100%;
  height: 100vh;
  width: 35rem;
  padding: 0 1.5rem;
  color: #000000;
  background-color: #ffffff;
  transition: all 0.5s ease-in-out;
}

.shopping-cart.active {
  right: 0;
}

.shopping-cart .cart-item {
  position: relative;
  margin: 2rem 0;
  display: flex;
  align-items: center;
  gap: 1.5rem;
  padding-bottom: 1rem;
  border-bottom: 1px dashed #666;
}

.shopping-cart img {
  height: 6rem;
  width: 6rem;
  border-radius: 50%;
}

.shopping-cart h3 {
  font-size: 1.6rem;
  padding-bottom: 1.5rem;
}

.shopping-cart .item-price{
  font-size: 1.2rem;
}

.shopping-cart .remove-item {
  position: absolute;
  right: 1.2rem;
  cursor: pointer;

}

.shopping-cart .remove-item:hover {
  color: #675d5d;
}


</style>  
  
  
  
  
  
  <!-- Navbar -->
  <nav class="bg-[#736356] border-gray-200 fixed w-full z-50 top-0 start-0 border-b dark:border-gray-600">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
      <a href="/dashboard" class="flex items-center space-x-3 rtl:space-x-reverse">
          <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white" style="font-family: 'Caveat', cursive;">PinnacleBookStore.</span>
      </a>
      <div class="hidden w-full md:block md:w-auto" id="navbar-default">
        <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border rounded-lg md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 bg-[#736356] border-gray-700">
          <li>
            <a href="/" class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:p-0 hover:text-[#D9AE84]">Home</a>
          </li>
          <li>
            <a href="/MyBooks" class="block py-2 px-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0  md:p-0 hover:text-[#D9AE84]">MyBooks</a>
          </li>
          <li>
            <a href="/categories" class="block py-2 px-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0  md:p-0 hover:text-[#D9AE84]">Categories</a>
          </li>
          <li>
            <a href="#" id="shopping-cart-button" class="block py-2 px-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0  md:p-0 hover:text-[#D9AE84] dark:hover:bg-gray-700 md:dark:hover:bg-transparent"><i class="fa fa-shopping-cart" aria-hidden="true"></i>
            </a>

            <div class="shopping-cart">
              {{-- @foreach($posts as $post)
              <div class="cart-item">
                @if(str_contains($post->image, 'https:'))
                <img src="{{ $post->image }}" alt="{{ $post->title }}">
                @else
                <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}">
                @endif
                <div class="item-detail">
                  <h3>{{ $post->title }}</h3>
                    <div class="item-price">
                      {{ $post->price  }}
                    </div>
                </div>
                    <i class="remove-item"><svg xmlns="http://www.w3.org/2000/svg" height="20" width="18" viewBox="0 0 448 512"><path d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"/></svg>
                    </i>
              </div>
              @endforeach --}}
              {{-- <div class="cart-item">
                <img src="https://source.unsplash.com/600x600?Book" alt="product1">
                <div class="item-detail">
                  <h3>Product</h3>
                    <div class="item-price">
                      IDR 100K
                    </div>
                </div>
                    <i class="remove-item"><svg xmlns="http://www.w3.org/2000/svg" height="20" width="18" viewBox="0 0 448 512"><path d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"/></svg>
                    </i>
              </div>
              <div class="cart-item">
                <img src="https://source.unsplash.com/600x600?Book" alt="product1">
                <div class="item-detail">
                  <h3>Product</h3>
                    <div class="item-price">
                      IDR 100K
                    </div>
                </div>
                    <i class="remove-item"><svg xmlns="http://www.w3.org/2000/svg" height="20" width="18" viewBox="0 0 448 512"><path d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"/></svg>
                    </i>
              </div> --}}
            </div>
          </li>

          

          @auth
                  <form action="/logout" method="POST">
                    @csrf
                    <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="text-white bg-[#736356] hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-1 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">{{ auth()->user()->username }}
                      <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6"> <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                      </svg>
                    </button>
                    <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                      <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                        <a href="/dashboard" type="submit" class="block px-4 justify-start py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                          Dashboard
                        </a>
                        <li>
                          <button type="submit" class="block px-4 justify-start py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                            Sign out
                          </button>
                        </li>
                      </ul>
                    </div>            
                  </form>
                
                @else
                
                  <li>
                    <a href="/login" class="block py-2 px-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0  md:p-0 hover:text-[#D9AE84] dark:hover:bg-gray-700 md:dark:hover:bg-transparent"><i class="fa-solid fa-arrow-right-to-bracket"></i>Login</a>
                  </li>
                @endauth
        </ul>
      </div>
    </div>
  </nav>


  <script>

   const shoppingCart = document.querySelector('.shopping-cart');

   document.querySelector('#shopping-cart-button').onclick = (e) => {
    shoppingCart.classList.toggle('active');
    e.preventDefault();
   }

  </script>

