<footer
    class="bg-white py-12 px-6 font-sans text-gray-700 relative z-20 pointer-events-auto">
    <div class="max-w-7xl mx-auto grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-12 items-start">

        <div class="space-y-5">
            <h3 class="text-xs font-bold uppercase tracking-[0.2em] text-stone-500 border-b border-stone-500 pb-6 ">Reservation Office</h3>
         
            <div class="text-sm leading-relaxed space-y-2 text-stone-600">
                <p class="flex items-center gap-2">GPO Box: 2154</p>
                <p>Durbar Marg, Kathmandu, Nepal</p>
                <p class="pt-2 italic">Tel: +977-1-5320162, 5329116</p>
            </div>
            <div class="pt-2 space-y-2 text-sm">
                <a href="mailto:island@mos.com.np"
                    class="block text-stone-500 hover:underline transition-colors">island@mos.com.np</a>
                <a href="mailto:info@islandjungleresort.com.np"
                    class="block text-stone-500 hover:underline transition-colors">info@islandjungleresort.com.np</a>
            </div>
        </div>



        <div class="flex flex-col items-start md:items-center text-left md:text-center space-y-6">
            <h3 class="text-xs font-bold uppercase tracking-[0.2em] text-stone-500 border-b border-stone-500 pb-6">Our Partners</h3>
          
            <div class="flex flex-wrap items-center justify-center gap-8 lg:gap-5  pt-6">
                <!-- Partner Logo Placeholders -->
                <div class="flex flex-col items-center">
                    <img src="{{ asset("frontendimages/partners/bandipurvillageresort.png") }}" alt=""
                        class='w-auto h-14'>

                </div>
                <div class="flex flex-col items-center">
                    <img src="{{ asset('frontendimages/partners/islandjungleresort.png') }}" alt="" class='w-auto h-14'>
                    <span class="text-xs font-bold text-stone-600 uppercase">Island Jungle Resort</span>
                </div>
                <div class="flex flex-col items-center">
                    <img src="{{ asset('frontendimages/partners/partner3.png') }}" alt="" class='w-auto h-14'>

                </div>
            </div>

            <div
                class="text-[11px] uppercase tracking-widest leading-loose text-stone-600 border-t border-stone-500 pt-6 w-full">
                <p>© 2025 Bandipur Mountain Resort</p>
                <p class="mt-1">Website by <a href="#"
                        class="text-stone-500 hover:text-[#2f2f73] font-semibold hover:underline">BeyondtechNepal</a>
                </p>
            </div>
        </div>

        <div class="flex flex-col md:items-end space-y-5">
            <h3 class="text-xs font-bold uppercase tracking-[0.2em] text-stone-500 border-b border-stone-500 pb-6">Connect With Us</h3>
            <div class="flex items-center space-x-5 text-lg">
                <a href="#" class="text-stone-600 hover:text-blue-600 transition-all transform hover:-translate-y-1"><i
                        class="fab fa-facebook-f"></i></a>
                <a href="#" class="text-stone-600 hover:text-pink-600 transition-all transform hover:-translate-y-1"><i
                        class="fab fa-instagram"></i></a>

            </div>
            <p class="text-sm text-stone-600 md:text-right max-w-50 tracking-wider">Follow our journey for latest updates and jungle
                stories.</p>
        </div>

    </div>
</footer>

    <div class="hidden md:flex gap-8 font-medium">
        <a href="{{ url('/') }}" class="hover:text-[#02c215] transition">Home</a>
        <a href="{{ url('about') }}" class="hover:text-[#02c215] transition">About</a>
        <a href="{{ url('accommodation') }}" class="hover:text-[#02c215] transition">Accommodation</a>
        <a href="{{ url('gallery') }}" class="hover:text-[#02c215] transition">Gallery</a>
        <a href="{{ url('contact') }}" class="hover:text-[#02c215] transition">Contact us</a>

    </div>

        <div class="hidden md:block">
        <a href='{{ url('contact') }}'
            class="bg-[#0a7c15] hover:bg-[#6d6d18] text-white px-6 py-2 rounded-full transition duration-300">
            Book Now
        </a>
    </div>