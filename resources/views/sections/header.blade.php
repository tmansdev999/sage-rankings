<header class="flex justify-between items-center p-2 md:p-10 bg-[#FEFAED] shadow-md">
  <div class="flex items-center">
      <div class="text-xl font-semibold text-blue-600 mr-12">
          <!-- <img src="@images/logo/logo.svg" /> -->
          <img src={{ Vite::asset('resources/images/logo/logo.svg') }} />
      </div>

      <!-- Navigation: hidden on mobile, shown on medium and larger screens -->
      <nav class="hidden lg:flex space-x-6 text-black text-md">
          <a href="#" class="hover:text-blue-600 font-['satoshi'] font-semibold text-[13px]">WHO WE ARE</a>
          <a href="#"
              class="flex hover:text-blue-600 font-['satoshi'] font-semibold text-[13px] justify-center items-center">WHAT
              WE DO<img src={{ Vite::asset('resources/images/icons/vector.svg')}} class="w-[9px] h-[5px] ml-1" /></a>
          <a href="#" class="hover:text-blue-600 font-['satoshi'] font-semibold text-[13px]">RESULTS</a>
          <a href="#" class="hover:text-blue-600 font-['satoshi'] font-semibold text-[13px]">PORTFOLIO</a>
          <a href="#"
              class="hover:text-blue-600 font-['satoshi'] font-semibold text-[13px]  justify-center items-center flex">GUIDE<img
                  src={{ Vite::asset('resources/images/icons/vector.svg')}} class="w-[9px] h-[5px] ml-1" /></a>
      </nav>

      <!-- Mobile Menu Button (Hamburger) -->
      <div class="lg:hidden">
          <button class="text-black">
              <img src="./hamburger.png" alt="Menu" class="w-4 h-4 md:w-8 md:h-8" />
          </button>
      </div>
  </div>

  <!-- Buttons: Stack on mobile, show side by side on larger screens -->
  <div class="lg:flex justify-end items-end md:flex-wrap gap-4 md:gap-6">
      <button
          class="font-semibold w-[135px] h-[45px] md:w-[160px] md:h-[52px] text-[13px] border-black border-2 flex items-center justify-center">
          <div class="flex items-center gap-2">
              OUR BRANDS
              <img src={{ Vite::asset('resources/images/icons/vector.svg')}} />
          </div>
      </button>
      <button
          class="font-semibold w-[135px] h-[45px] mt-1 lg:mt-0 md:w-[160px] md:h-[52px] text-[13px] text-[#EAFF6A] bg-[#07374F] flex justify-center items-center">
          <div class="flex items-center gap-2">
              LET'S TALK
              <img src={{ Vite::asset('resources/images/icons/arrow.svg')}} />
          </div>
      </button>
  </div>
</header>