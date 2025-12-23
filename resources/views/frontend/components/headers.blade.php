<nav id="navbar"
    class="fixed w-full z-50 px-6 left-0 right-0 container mx-auto  py-4 flex justify-between items-center bg-transparent backdrop-blur-2xl text-white">
    <a href="{{ url('/') }}" class="flex items-center gap-2">
        <div class="">
            <img src="{{ asset('frontendimages/logo.png') }}" alt="" class='h-16 w-22'>
        </div>

    </a>

    <div class="hidden md:flex gap-6 tracking-wider">
        <a href="{{ url('/') }}"
            class="hover:text-[#02c215] transition {{ Request::is('/') ? 'border-b-3 border-yellow-300 text-[#02c215]' : '' }}">Home</a>
        <a href="{{ url('about') }}"
            class="hover:text-[#02c215] transition {{ Request::is('about') ? 'border-b-3 border-yellow-300 text-[#02c215]' : '' }}">About</a>
        <a href="{{ url('accommodation') }}"
            class="hover:text-[#02c215] transition {{ Request::is('accommodation') ? 'border-b-3 border-yellow-300 text-[#02c215]' : '' }}">Accommodation</a>
        <a href="{{ url('gallery') }}"
            class="hover:text-[#02c215] transition {{ Request::is('gallery') ? 'border-b-3 border-yellow-300 text-[#02c215]' : '' }}">Gallery</a>
        <a href="{{ url('contact') }}"
            class="hover:text-[#02c215] transition {{ Request::is('contact') ? 'border-b-3 border-yellow-300 text-[#02c215]' : '' }}">Contact
            us</a>

    </div>

    <div class="hidden md:block">
        <a href='{{ url('contact') }}'
            class="bg-[#0a7c15] hover:bg-[#6d6d18] text-white px-6 py-2 rounded-full transition duration-300">
            Book Now
        </a>
    </div>

    <button class="md:hidden text-2xl focus:outline-none" id="menu-toggle">
        <i class="fas fa-bars" id="menu-icon"></i>
    </button>
</nav>

<div id="mobile-menu"
    class="fixed inset-0 bg-stone-700 bg-opacity-95 z-40 flex  flex-col justify-around text-white text-xl font-medium -translate-y-full md:hidden mobile-menu">
    <div class="flex flex-col gap-8 items-start justify-center mt-30 pl-6"> <a href="{{ url('/') }}"
            class="hover:text-[#02c215] transition {{ Request::is('/') ? 'border-b-3 border-yellow-300 text-[#02c215]' : '' }}">Home</a>
        <a href="{{ url('about') }}"
            class="hover:text-[#02c215] transition {{ Request::is('about') ? 'border-b-3 border-yellow-300 text-[#02c215]' : '' }}">About</a>
        <a href="{{ url('accommodation') }}"
            class="hover:text-[#02c215] transition {{ Request::is('accommodation') ? 'border-b-3 border-yellow-300 text-[#02c215]' : '' }}">Accommodation</a>
        <a href="{{ url('gallery') }}"
            class="hover:text-[#02c215] transition {{ Request::is('gallery') ? 'border-b-3 border-yellow-300 text-[#02c215]' : '' }}">Gallery</a>
        <a href="{{ url('contact') }}"
            class="hover:text-[#02c215] transition {{ Request::is('contact') ? 'border-b-3 border-yellow-300 text-[#02c215]' : '' }}">Contact
            us</a>
    </div>
    <div class="flex justify-center items-center items-center"><a href='{{ url('contact') }}' class="bg-[#0a7c15] px-8 py-3 rounded-full items-center text-lg">Book
            Now</a></div>
</div>