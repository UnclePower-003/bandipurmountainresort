@extends('frontend.app')

@section('content')
    {{-- content --}}
    <!-- Fixed Background Layer (Z-0) -->
    <div id="fixed-backgrounds" class="fixed inset-0 w-full h-full z-0">

        <!-- Hero 1 (Top) -->
        <div id="about-1" class="absolute inset-0 w-full h-full transition-opacity duration-700 ease-in-out opacity-100">
            <!-- Image -->
            <div class="absolute inset-0 bg-stone-800 pointer-events-none ">
                <img src="{{ asset('frontendimages/carouselimg/image2.png') }}" alt="Space Background"
                    class="w-full h-full object-cover opacity-60">

            </div>
        </div>

    </div>

    <!-- Scrollable Layer (Z-10) -->
    <div class="relative z-10 w-full pointer-events-none ">

        <div class="h-[75vh] w-full pointer-events-auto flex text-center items-center justify-center">
            <div class="relative px-4 text-white">
                <h1 class="text-5xl md:text-7xl mb-4 ">Sleep Above the Clouds</h1>
                <p class="text-lg md:text-xl font-light max-w-2xl mx-auto uppercase tracking-widest">
                    Traditional Newari Craftsmanship meets Himalayan Grandeur
                </p>
            </div>
        </div>



        <!-- Main Content (White Background) -->
        <main id="main-content" class="bg-white shadow-[0_-20px_50px_rgba(0,0,0,0.5)] relative z-20 pointer-events-auto">


            <!-- Intro Text -->
            <section class="py-20 px-4 bg-white">
                <div class="max-w-3xl mx-auto text-center">
                    <h2 class="text-3xl md:text-4xl font-bold text-stone-900 mb-6">Where Culture Meets Luxury</h2>
                    <div class="w-24 h-1 bg-stone-900 mx-auto mb-8"></div>
                    <p class="text-stone-600 text-lg leading-relaxed">
                        Located in the heart of Bandipur, a living museum of Newari culture, Serenity Stays offers a
                        standard of excellence for all visitors. Wake up to the golden sunrise over the Annapurna range and
                        immerse yourself in the rich history of this ancient trading post, all while enjoying modern
                        comforts in an authentic setting.
                    </p>
                </div>
            </section>

            <!-- Rooms Section -->
            <section id="rooms" class="py-20 px-4 bg-stone-50">
                <div class="max-w-7xl mx-auto">
                    <div class="text-center mb-16">
                        <h2 class="text-3xl md:text-4xl font-bold text-stone-900 mb-4">Our Accommodations</h2>
                        <p class="text-stone-600">Choose from our range of exquisite rooms and suites.</p>
                    </div>

                    <!-- Room Card 1: Mountain View Deluxe -->
                    <div
                        class="bg-white shadow-xl rounded-sm overflow-hidden mb-12 flex flex-col md:flex-row group hover:shadow-2xl transition duration-300">
                        <div class="md:w-1/2 relative overflow-hidden">
                            <img src="{{ asset('frontendimages/rooms/room1.png') }}" alt="Mountain View Deluxe"
                                class="w-full h-full object-cover transform group-hover:scale-105 transition duration-500">
                            <div
                                class="absolute top-4 left-4 bg-stone-900 text-white text-xs font-bold px-3 py-1 uppercase tracking-wide">
                                Most Popular</div>
                        </div>
                        <div class="md:w-1/2 p-8 md:p-12 flex flex-col justify-center">
                            <div class="flex justify-between items-baseline mb-2">
                                <h3 class="text-2xl font-bold text-stone-800">Mountain View Deluxe</h3>
                                <span class="text-stone-900 font-bold text-xl">Rs. 3000<span
                                        class="text-stone-400 text-sm font-normal">/night</span></span>
                            </div>
                            <p class="text-stone-600 mb-6 leading-relaxed">
                                Wake up to the majestic Himalayas. Our Deluxe rooms blend traditional Newari craftsmanship
                                with modern luxury. Featuring carved wood details and a balcony facing the mountains.
                            </p>

                            <div class="grid grid-cols-2 gap-y-3 gap-x-4 mb-8 text-sm text-stone-600">
                                <div class="flex items-center gap-5"><i class="fas fa-wifi w-6 text-stone-900"></i>
                                    High-Speed
                                    Wi-Fi</div>
                                <div class="flex items-center gap-5"><i class="fas fa-bed w-6 text-stone-900"></i> King Size
                                    Bed
                                </div>
                                <div class="flex items-center gap-5"><i class="fas fa-mountain w-6 text-stone-900"></i>
                                    Himalaya
                                    View</div>
                                <div class="flex items-center gap-5"><i class="fas fa-coffee w-6 text-stone-900"></i> Local
                                    Coffee
                                </div>
                                <div class="flex items-center gap-5"><i class="fas fa-wind w-6 text-stone-900"></i> Climate
                                    Control</div>
                                <div class="flex items-center gap-5"><i class="fas fa-bath w-6 text-stone-900"></i> Modern
                                    Bath
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Room Card 2: Heritage Suite -->
                    <div
                        class="bg-white shadow-xl rounded-sm overflow-hidden mb-12 flex flex-col md:flex-row-reverse group hover:shadow-2xl transition duration-300">
                        <div class="md:w-1/2 relative overflow-hidden">
                            <img src="{{ asset('frontendimages/rooms/room2.png') }}" alt="Heritage Suite"
                                class="w-full h-full object-cover transform group-hover:scale-105 transition duration-500">
                        </div>
                        <div class="md:w-1/2 p-8 md:p-12 flex flex-col justify-center">
                            <div class="flex justify-between items-baseline mb-2">
                                <h3 class="text-2xl font-bold text-stone-800">Heritage Suite</h3>
                                <span class="text-stone-900 font-bold text-xl">Rs. 2800<span
                                        class="text-stone-400 text-sm font-normal">/night</span></span>
                            </div>
                            <p class="text-stone-600 mb-6 leading-relaxed">
                                Experience the grandeur of ancient Bandipur. This suite features authentic exposed brick,
                                intricately carved windows, and a spacious living area ideal for families or cultural
                                enthusiasts.
                            </p>

                            <div class="grid grid-cols-2 gap-y-3 gap-x-4 mb-8 text-sm text-stone-600">
                                <div class="flex items-center gap-5"><i class="fas fa-couch w-6 text-stone-900"></i> Living
                                    Area
                                </div>
                                <div class="flex items-center gap-5"><i class="fas fa-user-friends w-6 text-stone-900"></i>
                                    Sleeps
                                    up to 4</div>
                                <div class="flex items-center gap-5"><i
                                        class="fas fa-glass-martini-alt w-6 text-stone-900"></i>
                                    Mini Bar</div>
                                <div class="flex items-center gap-5"><i
                                        class="fas fa-concierge-bell w-6 text-stone-900"></i> Room
                                    Service</div>
                                <div class="flex items-center gap-5"><i class="fas fa-hot-tub w-6 text-stone-900"></i>
                                    Soaking Tub
                                </div>
                                <div class="flex items-center gap-5"><i class="fas fa-landmark w-6 text-stone-900"></i>
                                    Village
                                    View</div>
                            </div>


                        </div>
                    </div>

                    <!-- Room Card 3: Royal Durbar Suite -->
                    <div
                        class="bg-white shadow-xl rounded-sm overflow-hidden mb-12 flex flex-col md:flex-row group hover:shadow-2xl transition duration-300">
                        <div class="md:w-1/2 relative overflow-hidden">
                            <img src="{{ asset('frontendimages/rooms/room4.png') }}" alt="Royal Durbar Suite"
                                class="w-full h-full object-cover transform group-hover:scale-105 transition duration-500">
                            <div
                                class="absolute top-4 left-4 bg-stone-900 text-white text-xs font-bold px-3 py-1 uppercase tracking-wide">
                                Ultimate Luxury</div>
                        </div>
                        <div class="md:w-1/2 p-8 md:p-12 flex flex-col justify-center">
                            <div class="flex justify-between items-baseline mb-2">
                                <h3 class="text-2xl font-bold text-stone-800">Royal Durbar Suite</h3>
                                <span class="text-stone-900 font-bold text-xl">Rs. 1800<span
                                        class="text-stone-400 text-sm font-normal">/night</span></span>
                            </div>
                            <p class="text-stone-600 mb-6 leading-relaxed">
                                Live like royalty in our Durbar Suite. Offering the best panoramic views of the Himalayas
                                from a private rooftop terrace, complete with a jacuzzi and dedicated butler service for the
                                ultimate stay.
                            </p>

                            <div class="grid grid-cols-2 gap-y-3 gap-x-4 mb-8 text-sm text-stone-600">
                                <div class="flex items-center"><i class="fas fa-crown w-6 text-stone-900"></i> Butler
                                    Service</div>
                                <div class="flex items-center gap-5"><i class="fas fa-water w-6 text-stone-900"></i> Private
                                    Jacuzzi</div>
                                <div class="flex items-center gap-5"><i class="fas fa-sun w-6 text-stone-900"></i> Private
                                    Terrace
                                </div>
                                <div class="flex items-center gap-5"><i class="fas fa-wine-bottle w-6 text-stone-900"></i>
                                    Premium
                                    Bar</div>
                                <div class="flex items-center gap-5"><i class="fas fa-music w-6 text-stone-900"></i> Sound
                                    System
                                </div>
                                <div class="flex items-center gap-5"><i class="fas fa-shuttle-van w-6 text-stone-900"></i>
                                    Airport
                                    Transfer</div>
                            </div>
                        </div>
                    </div>

                </div>
            </section>

            <!-- Amenities Highlight -->
            <section id="amenities" class="py-20 ">
                <div class="max-w-7xl mx-auto px-4">
                    <div class="text-center mb-16">
                        <h2 class="text-3xl md:text-4xl font-bold text-stone-900 mb-4">Amenities</h2>
                        <p class="text-stone-600">Everything you need for a perfect stay.</p>
                    </div>

                    <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                        <div class="p-6   transition duration-300 text-stone-500 hover:text-stone-900 cursor-pointer">
                            <i class="fas fa-mountain text-4xl  mb-4"></i>
                            <h3 class="text-xl font-bold mb-2">Himalayan Views</h3>
                            <p class="text-stone-400 text-sm">Unobstructed views of the Annapurna range.</p>
                        </div>
                        <div class="p-6 transition duration-300 text-stone-500 hover:text-stone-900 cursor-pointer">
                            <i class="fas fa-spa text-4xl  mb-4"></i>
                            <h3 class="text-xl font-bold mb-2">Ayurvedic Spa</h3>
                            <p class="text-stone-400 text-sm">Traditional healing and relaxation therapies.</p>
                        </div>
                        <div class="p-6  transition duration-300 text-stone-500 hover:text-stone-900 cursor-pointer">
                            <i class="fas fa-utensils text-4xl  mb-4"></i>
                            <h3 class="text-xl font-bold mb-2">Local & Global</h3>
                            <p class="text-stone-400 text-sm">Authentic Newari cuisine and international favorites.</p>
                        </div>
                        <div
                            class="p-6 rounded  transition duration-300 text-stone-500 hover:text-stone-900 cursor-pointer">
                            <i class="fas fa-hiking text-4xl  mb-4"></i>
                            <h3 class="text-xl font-bold mb-2">Cultural Tours</h3>
                            <p class="text-stone-400 text-sm">Guided walks through the historic Bandipur bazaar.</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Reviews Section -->
            <section id="reviews" class="py-20 px-4 bg-amber-50">
                <div class="max-w-7xl mx-auto">
                    <h2 class="text-3xl md:text-4xl font-bold text-center text-stone-900 mb-12">Guest Experiences</h2>

                    <div class="grid md:grid-cols-3 gap-8">
                        <div class="bg-white p-8 shadow-md rounded-sm relative">
                            <div class="text-amber-500 mb-4"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                    class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                            <p class="text-stone-600 mb-6 italic">"The mountain views from our room were unreal. Waking up
                                to the Himalayas in such a beautifully preserved town was magical."</p>
                            <div class="flex items-center">
                                <div
                                    class="w-10 h-10 bg-stone-300 rounded-full flex items-center justify-center text-stone-600 font-bold mr-3">
                                    SJ</div>
                                <div>
                                    <h4 class="font-bold text-stone-900">Sarah Jenkins</h4>
                                    <p class="text-xs text-stone-500">Stayed Oct 2023</p>
                                </div>
                            </div>
                        </div>

                        <div class="bg-white p-8 shadow-md rounded-sm relative">
                            <div class="text-amber-500 mb-4"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                    class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                            <p class="text-stone-600 mb-6 italic">"The Heritage Suite perfectly captures the spirit of
                                Bandipur. The wood carvings are exquisite, and the service is incredibly warm."</p>
                            <div class="flex items-center">
                                <div
                                    class="w-10 h-10 bg-stone-300 rounded-full flex items-center justify-center text-stone-600 font-bold mr-3">
                                    MR</div>
                                <div>
                                    <h4 class="font-bold text-stone-900">Michael Ross</h4>
                                    <p class="text-xs text-stone-500">Stayed Sept 2023</p>
                                </div>
                            </div>
                        </div>

                        <div class="bg-white p-8 shadow-md rounded-sm relative">
                            <div class="text-amber-500 mb-4"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                    class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                            <p class="text-stone-600 mb-6 italic">"Dining under the stars with a view of the Annapurna range
                                was the highlight of our trip. Truly a sanctuary in the clouds."</p>
                            <div class="flex items-center">
                                <div
                                    class="w-10 h-10 bg-stone-300 rounded-full flex items-center justify-center text-stone-600 font-bold mr-3">
                                    EL</div>
                                <div>
                                    <h4 class="font-bold text-stone-900">Emily & Liam</h4>
                                    <p class="text-xs text-stone-500">Stayed Nov 2023</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Policies Section -->
            <section id="policies" class="py-16 px-4 bg-white border-t border-stone-100">
                <div class="max-w-5xl mx-auto">
                    <h2 class="text-2xl md:text-3xl font-bold text-stone-900 mb-8 text-center">Hotel Policies</h2>
                    <div class="grid md:grid-cols-2 gap-8 mb-16">
                        <div class="flex items-start">
                            <div class="bg-stone-100 p-3 rounded-full mr-4">
                                <i class="fas fa-clock text-stone-900 text-xl"></i>
                            </div>
                            <div>
                                <h3 class="font-bold text-lg text-stone-800 mb-1">Check-In & Check-Out</h3>
                                <p class="text-stone-600 text-sm">Check-in from 3:00 PM. Check-out before 11:00 AM. Early
                                    check-in and late check-out available upon request subject to availability.</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="bg-stone-100 p-3 rounded-full mr-4">
                                <i class="fas fa-ban text-stone-900 text-xl"></i>
                            </div>
                            <div>
                                <h3 class="font-bold text-lg text-stone-800 mb-1">Cancellation Policy</h3>
                                <p class="text-stone-600 text-sm">Free cancellation up to 48 hours before arrival.
                                    Cancellations within 48 hours will be charged the first night's rate.</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="bg-stone-100 p-3 rounded-full mr-4">
                                <i class="fas fa-paw text-stone-900 text-xl"></i>
                            </div>
                            <div>
                                <h3 class="font-bold text-lg text-stone-800 mb-1">Pet Policy</h3>
                                <p class="text-stone-600 text-sm">We are a pet-friendly establishment. A cleaning fee of $50
                                    per stay applies. Please inform us in advance.</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="bg-stone-100 p-3 rounded-full mr-4">
                                <i class="fas fa-walking text-stone-900 text-xl"></i>
                            </div>
                            <div>
                                <h3 class="font-bold text-lg text-stone-800 mb-1">Vehicle-Free Zone</h3>
                                <p class="text-stone-600 text-sm">Bandipur Bazaar is a pedestrian-only zone. We provide
                                    complimentary porter service from the Tundikhel parking area for your luggage.</p>
                            </div>
                        </div>
                    </div>

                    <!-- FAQ Subsection -->
                    <div class="border-t border-stone-200 pt-12">
                        <h2 class="text-2xl md:text-3xl font-bold text-stone-900 mb-8 text-center">Frequently Asked
                            Questions</h2>
                        <div class="space-y-4 max-w-3xl mx-auto">
                            <div class="border border-stone-200 rounded-sm p-4">
                                <h3 class="font-bold text-stone-800 mb-2">How do I reach Bandipur?</h3>
                                <p class="text-stone-600 text-sm">Bandipur is located midway between Kathmandu and Pokhara.
                                    We can arrange private transfers from either city (approx. 4-5 hours drive), or pick you
                                    up from the Dumre highway stop.</p>
                            </div>
                            <div class="border border-stone-200 rounded-sm p-4">
                                <h3 class="font-bold text-stone-800 mb-2">What is the best time to visit?</h3>
                                <p class="text-stone-600 text-sm">The best views of the Himalayas are typically from October
                                    to March. However, Bandipur has a pleasant climate year-round, with lush greenery during
                                    the monsoon season (June-August).</p>
                            </div>
                            <div class="border border-stone-200 rounded-sm p-4">
                                <h3 class="font-bold text-stone-800 mb-2">Do you serve traditional Nepali food?</h3>
                                <p class="text-stone-600 text-sm">Yes, our restaurant specializes in authentic Newari
                                    Thakali sets, as well as a variety of international dishes. We source many ingredients
                                    locally from Bandipur farmers.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </main>

        <!-- Bottom Spacer (Transparent to show Hero 2) -->


    </div>

@endsection