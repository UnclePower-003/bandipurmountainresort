@extends('frontend.app')

@section('content')
    @push('style')
        <style>
            .scroll-indicator {
                animation: bounce 2s infinite;
            }

            @keyframes bounce {

                0%,
                20%,
                50%,
                80%,
                100% {
                    transform: translateY(0);
                }

                40% {
                    transform: translateY(-10px);
                }

                60% {
                    transform: translateY(-5px);
                }
            }

            /* Carousel  */



            .carousel-slide img {
                pointer-events: none;
            }
        </style>
    @endpush
    {{-- content --}}
    <!-- Fixed Background Layer (Z-0) -->
    <div id="fixed-backgrounds" class="fixed inset-0 w-full h-full z-0">

        <!-- Hero 1 (Top) -->
        <div id="hero-1" class="absolute inset-0 w-full h-full transition-opacity duration-700 ease-in-out opacity-100">
            <!-- Image -->
            <div class="absolute inset-0 bg-stone-800 pointer-events-none">
                <img src="{{ asset('frontendimages/hero1.png') }}" alt="Space Background"
                    class="w-full h-full object-cover opacity-60">
                <div class="absolute inset-0 bg-gradient-to-b from-black/10 via-transparent to-black/10"></div>
            </div>

            <!-- Content -->
            <div
                class="relative h-full flex flex-col items-center justify-center text-center px-4 max-w-4xl mx-auto space-y-6 mt-15  pointer-events-auto">
                <h1 class="text-5xl md:text-7xl font-bold tracking-wider uppercase drop-shadow-xl text-stone-300">
                    Land of Culture
                </h1>
                <p class="text-lg md:text-2xl text-stone-300 max-w-2xl mx-auto leading-relaxed">
                    Bandipur Mountain Resort
                </p>

                <div class="relative z-50 pt-10">

                    <a href="#about"
                        class="scroll-indicator text-white opacity-80 block cursor-pointer hover:opacity-100 transition-opacity">
                        <p class="text-lg text-gray-300 mb-2 uppercase tracking-widest">Explore</p>
                        <i class="fa-solid fa-angle-down"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- Hero 2 (Bottom) -->
        <div id="hero-2" class="absolute inset-0 w-full h-full transition-opacity duration-700 ease-in-out opacity-0">
            <!-- Image -->
            <div class="absolute inset-0 bg-stone-900 pointer-events-none">
                <img src="{{ asset('frontendimages/carouselimg/image2.png') }}" alt="Night View"
                    class="w-full h-full object-cover opacity-60">
                <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-black/40"></div>
            </div>
        </div>
    </div>

    <!-- Scrollable Layer (Z-10) -->
    <div class="relative z-10  pointer-events-none ">

        <!-- Top Spacer (Transparent to show Hero 1) -->
        <div class="h-screen w-full pointer-events-none" id='top'></div>


        <!-- Main Content (White Background) -->
        <main id="main-content" class="bg-white shadow-[0_-20px_50px_rgba(0,0,0,0.5)] relative  pointer-events-auto">
            <div class="max-w-7xl container mx-auto flex justify-center items-center pt-5">
                <a href="#top">
                    <i class='fa-solid fa-angles-down text-4xl text-gray-300'></i>
                </a>

            </div>

            <!-- About Bandipur -->
            <section id="about" class=" px-4 mb-16 pt-16 container mx-auto max-w-7xl">
                <div class="flex min-h-32 items-center text-center justify-center mb-12">
                    <div class="flex-col space-y-4">
                        <div class="flex items-center justify-center gap-4">
                            <!-- Left Line -->
                            <span class="h-px w-12 md:w-24 bg-stone-900"></span>
                            <!-- Text -->
                            <h2
                                class="text-3xl md:text-4xl uppercase font-semibold tracking-wide text-stone-900 antialiased">
                                Bandipur
                            </h2>
                            <!-- Right Line -->
                            <span class="h-px w-12 md:w-24 bg-stone-900"></span>
                        </div>
                        <p class='text-sm items-center text-center text-stone-500 uppercase tracking-widest antialiased'>
                            “Bandipur — Timeless Heritage, Himalayan Horizons.”
                        </p>
                    </div>
                </div>

                <!-- Features Grid -->
                <div class="flex justify-center items-center pb-12">
                    <div class="w-full grid md:grid-cols-2 lg:grid-cols-3 gap-8">

                        <!-- Feature 1 -->
                        <div class="space-y-4 group">
                            <div class="overflow-hidden rounded-sm">
                                <img src="{{ asset('frontendimages/bandipur1.png') }}" alt="History"
                                    class='aspect-[3/2] w-full object-cover transition-transform duration-700 group-hover:scale-105'>
                            </div>
                            <div class="space-y-2 px-2">
                                <h1 class='text-xl lg:text-2xl font-serif text-stone-900'>Historical Significance</h1>
                                <p class='text-sm lg:text-base text-stone-600 leading-relaxed'>Bandipur was once a
                                    prosperous trading hub on the ancient trans-Himalayan trade route between Tibet and
                                    India.</p>
                            </div>
                        </div>

                        <!-- Feature 2 -->
                        <div class="space-y-4 group">
                            <div class="overflow-hidden rounded-sm">
                                <img src="{{ asset('frontendimages/bandipur2.png') }}" alt="Architecture"
                                    class='aspect-[3/2] w-full object-cover transition-transform duration-700 group-hover:scale-105'>
                            </div>
                            <div class="space-y-2 px-2">
                                <h1 class='text-xl lg:text-2xl font-serif text-stone-900'>Architecture & Townscape</h1>
                                <p class='text-sm lg:text-base text-stone-600 leading-relaxed'>The main bazaar area is lined
                                    with restored Newari-style buildings featuring carved wooden windows, brick facades, and
                                    slate roofs.</p>
                            </div>
                        </div>

                        <!-- Feature 3 -->
                        <div class="space-y-4 group">
                            <div class="overflow-hidden rounded-sm">
                                <img src="{{ asset('frontendimages/carouselimg/image3.png') }}" alt="Views"
                                    class='aspect-[3/2] w-full object-cover transition-transform duration-700 group-hover:scale-105'>
                            </div>
                            <div class="space-y-2 px-2">
                                <h1 class='text-xl lg:text-2xl font-serif text-stone-900'>Natural Beauty</h1>
                                <p class='text-sm lg:text-base text-stone-600 leading-relaxed'>Bandipur offers unobstructed
                                    views of the Himalayan range, including peaks such as Langtang, Ganesh Himal, Manaslu,
                                    and even Dhaulagiri.</p>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <div class="w-full px-6">
                <div class=" container mx-auto  max-w-4xl border border-stone-300  h-px  "></div>
            </div>

            <!-- About Us Section -->
            <section class="py-12 md:py-20 bg-stone-100">
                <div class="container mx-auto max-w-7xl px-4">
                    <div class="flex flex-col lg:flex-row items-center gap-12">

                        <!-- Content Section -->
                        <div class="w-full lg:w-1/2 order-2 lg:order-1">
                            <header class="mb-6">
                                <h1 class="text-3xl md:text-5xl text-stone-900 font-semibold mb-2 tracking-wide font-serif">
                                    Namaste</h1>
                                <h3 class="text-xl md:text-2xl text-stone-600 tracking-wider font-light">We bow to the
                                    divinity within you.</h3>
                            </header>

                            <div class="text-base lg:text-lg text-stone-600 space-y-4 leading-relaxed font-light">
                                <p>
                                    Bandipur Mountain Resort is a resort hotel located in Bandipur, a scenic hilltop town in
                                    Tanahun District, Gandaki Province, Nepal. It is positioned about 7 km from the Prithvi
                                    Highway and serves as a comfortable base for travelers exploring the cultural and
                                    natural attractions of Bandipur.
                                </p>
                                <p>
                                    The resort offers comfortable accommodation with mountain or garden views, free Wi-Fi,
                                    private bathrooms, and balconies. Guests can enjoy facilities such as a restaurant, bar,
                                    garden, sun terrace, outdoor fireplace, and a children’s playground.
                                </p>
                            </div>

                            <div class="mt-8">
                                <a href="{{ url('about') }}"
                                    class="inline-block bg-stone-800 text-white px-8 py-3 rounded-sm hover:bg-stone-700 transition-colors uppercase tracking-widest text-sm">
                                    Explore More
                                </a>
                            </div>
                        </div>

                        <!-- Image Section -->
                        <div class="w-full lg:w-1/2 order-1 lg:order-2">
                            <div class="relative aspect-video lg:aspect-4/3 overflow-hidden rounded-lg shadow-xl">
                                <img src="{{ asset('frontendimages/hotel.png') }}" alt="Bandipur Mountain Resort"
                                    class="w-full h-full object-cover transform hover:scale-105 transition-transform duration-700">
                                <div class="absolute inset-0 bg-black/20"></div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <div class="w-full px-6">
                <div class=" container mx-auto  max-w-4xl border border-stone-300  h-px  "></div>
            </div>

            <!-- Services -->
            <section id="features" class="bg-white px-4 py-16">
                <div class="flex w-full items-center text-center justify-center mb-16">
                    <div class="flex-col space-y-3">
                        <div class="flex items-center justify-center gap-4">
                            <span class="h-px w-12 md:w-24 bg-stone-900"></span>
                            <h2
                                class="text-3xl md:text-4xl font-semibold uppercase tracking-wide text-stone-900 antialiased">
                                Our Services
                            </h2>
                            <span class="h-px w-12 md:w-24 bg-stone-900"></span>
                        </div>
                        <p
                            class='text-sm items-center max-w-lg mx-auto text-center text-stone-400 uppercase tracking-widest antialiased'>
                            Experience Gracious and quality hospitality from our friendly staff
                        </p>
                    </div>
                </div>

                <div class="flex justify-center items-center">
                    <div class="max-w-7xl w-full grid md:grid-cols-2 lg:grid-cols-4 gap-8">

                        <!-- Service 1 -->
                        <div class="space-y-4 text-center group">
                            <div class="text-5xl text-stone-400 group-hover:text-stone-900 transition-colors duration-300">
                                <i class="fa-solid fa-square-parking"></i>
                            </div>
                            <div class="space-y-2 px-2">
                                <h1 class='text-xl lg:text-2xl font-medium font-serif text-stone-900'>Parking</h1>
                                <p class='text-sm lg:text-base text-stone-600 font-serif'>Parking is available at the
                                    premises for your convenience.</p>
                            </div>
                        </div>

                        <!-- Service 2 -->
                        <div class="space-y-4 text-center group">
                            <div class="text-5xl text-stone-400 group-hover:text-stone-900 transition-colors duration-300">
                                <i class="fa-solid fa-utensils"></i>
                            </div>
                            <div class="space-y-2 px-2">
                                <h1 class='text-xl lg:text-2xl font-medium font-serif text-stone-900'>Restaurant</h1>
                                <p class='text-sm lg:text-base text-stone-600 font-serif'>We are proud to present our
                                    speciality restaurants.</p>
                            </div>
                        </div>

                        <!-- Service 3 -->
                        <div class="space-y-4 text-center group">
                            <div class="text-5xl text-stone-400 group-hover:text-stone-900 transition-colors duration-300">
                                <i class="fa-solid fa-people-roof"></i>
                            </div>
                            <div class="space-y-2 px-2">
                                <h1 class='text-xl lg:text-2xl font-medium font-serif text-stone-900'>Event Room</h1>
                                <p class='text-sm lg:text-base text-stone-600 font-serif'>Our goal is to make your event as
                                    simple and seamless as possible</p>
                            </div>
                        </div>

                        <!-- Service 4 -->
                        <div class="space-y-4 text-center group">
                            <div class="text-5xl text-stone-400 group-hover:text-stone-900 transition-colors duration-300">
                                <i class="fa-solid fa-spa"></i>
                            </div>
                            <div class="space-y-2 px-2">
                                <h1 class='text-xl lg:text-2xl font-medium font-serif text-stone-900'>Shanti Spa</h1>
                                <p class='text-sm lg:text-base text-stone-600 font-serif'>Signifying peace it includes
                                    extensive yoga and relaxation.</p>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <div class="w-full px-6">
                <div class=" container mx-auto  max-w-4xl border border-stone-300  h-px  "></div>
            </div>

            <!-- Rooms -->
            <section id="rooms" class="bg-gray-50 px-4 py-16">
                <div class="flex w-full items-center text-center justify-center mb-12">
                    <div class="flex-col space-y-3">
                        <div class="flex items-center justify-center gap-4">
                            <span class="h-px w-12 md:w-24 bg-stone-900"></span>
                            <h2
                                class="text-3xl md:text-4xl font-semibold uppercase tracking-wide text-stone-900 antialiased">
                                Our Rooms
                            </h2>
                            <span class="h-px w-12 md:w-24 bg-stone-900"></span>
                        </div>
                        <p class='text-sm items-center text-center text-stone-400 uppercase tracking-widest antialiased'>
                            Wake Up to the Himalayas.
                        </p>
                    </div>
                </div>

                <div class="flex justify-center items-center">
                    <div class="max-w-7xl w-full grid md:grid-cols-2 lg:grid-cols-3 gap-8">

                        <!-- Room 1 -->
                        <div
                            class="bg-white rounded-lg shadow-sm overflow-hidden hover:shadow-lg transition-shadow duration-300">
                            <div class="overflow-hidden">
                                <img src="{{ asset('frontendimages/rooms/room1.png') }}" alt="Standard Room"
                                    class='aspect-[3/2] w-full object-cover transition-transform duration-700 hover:scale-105'>
                            </div>
                            <div class="p-6 space-y-4">
                                <h1 class='text-2xl font-serif text-stone-900'>Standard Room</h1>
                                <p class='text-sm text-stone-600 font-serif leading-relaxed line-clamp-3'>Enjoy your stay in
                                    our inspired standard rooms. It comes with comfortable king size bed or double bed
                                    including 43" Smart LED TV, bathtub and independent high speed Wi-Fi.</p>

                            </div>
                        </div>

                        <!-- Room 2 -->
                        <div
                            class="bg-white rounded-lg shadow-sm overflow-hidden hover:shadow-lg transition-shadow duration-300">
                            <div class="overflow-hidden">
                                <img src="{{ asset('frontendimages/rooms/room2.png') }}" alt="Deluxe Room"
                                    class='aspect-[3/2] w-full object-cover transition-transform duration-700 hover:scale-105'>
                            </div>
                            <div class="p-6 space-y-4">
                                <h1 class='text-2xl font-serif text-stone-900'>Deluxe Room</h1>
                                <p class='text-sm text-stone-600 font-serif leading-relaxed line-clamp-3'>Enjoy an amazing
                                    stay in our cozy & comfortable deluxe rooms. It comes with single, double & twin bed
                                    including 43" Smart LED TV, bathtub & independent high speed Wi-Fi.</p>
                            </div>
                        </div>

                        <!-- Room 3 -->
                        <div
                            class="bg-white rounded-lg shadow-sm overflow-hidden hover:shadow-lg transition-shadow duration-300">
                            <div class="overflow-hidden">
                                <img src="{{ asset('frontendimages/rooms/room4.png') }}" alt="Junior Suite"
                                    class='aspect-[3/2] w-full object-cover transition-transform duration-700 hover:scale-105'>
                            </div>
                            <div class="p-6 space-y-4">
                                <h1 class='text-2xl font-serif text-stone-900'>Junior Suite</h1>
                                <p class='text-sm text-stone-600 font-serif leading-relaxed line-clamp-3'>Junior Suite Room
                                    for our VIP guests, also available for family tourist including 55" Smart LED TV,
                                    bathtub & independent high speed Wi-Fi.</p>

                            </div>
                        </div>

                    </div>
                </div>
            </section>


            <div class="w-full px-6">
                <div class=" container mx-auto  max-w-7xl border border-stone-300  h-px  "></div>
            </div>


            {{-- carousel section --}}
            <section class="container mx-auto pb-20 pt-7 flex flex-col justify-center px-4">
                <div class="flex w-full items-center text-center justify-center bg-gray-100 rounded-lg p-8 mb-8">
                    <div class="flex-col space-y-2">
                        <div class="flex items-center justify-center gap-4">
                            <span class="h-px w-12 md:w-20 bg-stone-900"></span>
                            <h2
                                class="text-3xl md:text-4xl font-semibold uppercase tracking-wide text-stone-900 antialiased">
                                Our Services
                            </h2>
                            <span class="h-px w-12 md:w-20 bg-stone-900"></span>
                        </div>
                        <p class="text-sm text-stone-400 uppercase tracking-widest antialiased">
                            Wake Up to the Himalayas.
                        </p>
                    </div>
                </div>

                <section class="flex flex-col lg:flex-row w-full max-w-7xl mx-auto gap-4">

                    <div id="carousel-area"
                        class="relative w-full lg:w-1/2 aspect-video lg:aspect-auto lg:min-h-[500px] rounded-xl shadow-xl border border-stone-300 overflow-hidden cursor-grab active:cursor-grabbing touch-pan-y">

                        <div id="slides-track"
                            class="flex h-full transition-transform duration-700 ease-in-out will-change-transform">
                        </div>

                        <div
                            class="absolute inset-0 pointer-events-none shadow-inner bg-gradient-to-t from-black/40 to-transparent">
                        </div>
                    </div>

                    <div
                        class="w-full lg:w-1/2 bg-stone-200 border border-stone-300 rounded-xl shadow-xl flex items-center justify-center p-8 relative z-10">
                        <div id="desc-container" class="max-w-xl w-full">
                            <h6 id="desc-subtitle"
                                class="text-stone-900 font-semibold tracking-wide uppercase text-base mb-2">
                                Description
                            </h6>
                            <h1 id="desc-title" class="text-2xl lg:text-4xl font-bold mb-6 text-gray-900 leading-tight">
                            </h1>
                            <p id="desc-text" class="text-base text-gray-600 leading-relaxed">
                            </p>

                            <div class="mt-8 h-1 w-full bg-gray-200 rounded-full overflow-hidden">
                                <div id="progress-bar" class="h-full bg-stone-900 w-0 transition-all duration-300"></div>
                            </div>
                        </div>
                    </div>

                </section>
            </section>
        </main>

        <!-- Bottom Spacer (Transparent to show Hero 2) -->
        <div class="h-screen w-full pointer-events-auto flex items-center justify-center">
            {{-- last --}}
            <section class='h-screen relative z-50 flex flex-col items-center justify-center w-full'>
                <!-- Content -->
                <div
                    class="flex flex-col items-center justify-center text-center px-4 max-w-4xl mx-auto space-y-8 lg:p-14 ">
                    <h2 class="text-4xl md:text-6xl font-extrabold tracking-wider uppercase drop-shadow-lg text-white">
                        Experience Serenity
                    </h2>
                    <p class="text-lg md:text-2xl text-gray-100 max-w-2xl mx-auto leading-relaxed drop-shadow-md">
                        Book your stay under the stars
                    </p>
                    <div class="pt-4">
                        <a href="{{ url('contact') }}"
                            class="px-10 py-4 border-2 border-white rounded text-white hover:bg-white hover:text-black transition-all duration-300 uppercase tracking-widest text-sm font-bold active:scale-95 cursor-pointer">
                            Book Now
                        </a>
                    </div>
                </div>
            </section>

        </div>

    </div>






    @push('script')
        <script>
            // Optional: Simple JS to make the hero content fade/move slightly for better depth
            window.addEventListener('scroll', () => {
                const scrollPos = window.scrollY;
                const heroContent = document.querySelector('#hero div.relative');

                // Only animate if the hero is somewhat visible
                if (scrollPos < window.innerHeight) {
                    // Parallax effect on text
                    heroContent.style.transform = `translateY(${scrollPos * 0.4}px)`;
                    // Fade out effect
                    heroContent.style.opacity = 1 - (scrollPos / (window.innerHeight * 0.8));
                }
            });

            // scroll img 
            document.addEventListener('DOMContentLoaded', () => {
                const hero1 = document.getElementById('hero-1');
                const hero2 = document.getElementById('hero-2');
                const mainContent = document.getElementById('main-content');

                function handleScroll() {
                    const rect = mainContent.getBoundingClientRect();
                    const windowHeight = window.innerHeight;

                    // Switch point: When the middle of the main content passes the middle of the viewport.
                    const mainContentCenter = rect.top + (rect.height / 2);
                    const viewportCenter = windowHeight / 2;

                    if (mainContentCenter < viewportCenter) {
                        // Scrolling down (lower half or bottom spacer)
                        if (!hero2.classList.contains('opacity-100')) {
                            hero1.classList.remove('opacity-100');
                            hero1.classList.add('opacity-0');

                            hero2.classList.remove('opacity-0');
                            hero2.classList.add('opacity-100');
                        }
                    } else {
                        // Scrolling up (upper half or top spacer)
                        if (!hero1.classList.contains('opacity-100')) {
                            hero1.classList.remove('opacity-0');
                            hero1.classList.add('opacity-100');

                            hero2.classList.remove('opacity-100');
                            hero2.classList.add('opacity-0');
                        }
                    }
                }

                window.addEventListener('scroll', handleScroll, { passive: true });
                handleScroll();
            });

            // Carousel
            // Data Source
            const slidesData = [
                {
                    image: "{{ asset('frontendimages/bandipur1.png') }}",
                    title: "Historical Significance",
                    description: "Bandipur was once a prosperous trading hub on the ancient trans-Himalayan trade route between Tibet and India."
                },
                {
                    image: "{{ asset('frontendimages/carouselimg/image1.png') }}",
                    title: "A Timeless Hilltop Heritage",
                    description: "Where history rests above the clouds"
                },
                {
                    image: "{{ asset('frontendimages/carouselimg/image2.png') }}",
                    title: "Nepal’s Heritage Balcony",
                    description: "Panoramic views, timeless streets"
                },
                {
                    image: "{{ asset('frontendimages/carouselimg/image3.png') }}",
                    title: "Where Time Slows Down",
                    description: "A peaceful escape above the ordinary"
                },
                {
                    image: "{{ asset('frontendimages/image3.png') }}",
                    title: "Culture in the Clouds",
                    description: "Elevated traditions, enduring beauty"
                }
            ];

            // State
            let currentIndex = 0;
            let autoPlayInterval;
            let progressInterval;
            const autoPlayDelay = 3000; // 3 seconds
            let isDragging = false;
            let startPos = 0;
            let currentTranslate = 0;
            let prevTranslate = 0;
            let animationID;
            let descTimeout;

            // DOM Elements
            const track = document.getElementById('slides-track');
            const descContainer = document.getElementById('desc-container');
            const descTitle = document.getElementById('desc-title');
            const descText = document.getElementById('desc-text');
            const progressBar = document.getElementById('progress-bar');
            const carouselArea = document.getElementById('carousel-area');

            // Initialization
            function init() {
                // Render Slides
                slidesData.forEach((slide, index) => {
                    const slideDiv = document.createElement('div');
                    slideDiv.className = 'w-full aspect-video flex-shrink-0 relative';

                    const img = document.createElement('img');
                    img.src = slide.image;
                    img.alt = slide.title;
                    img.draggable = false;
                    img.className = 'w-full h-full object-cover object-center slide-image';

                    slideDiv.appendChild(img);
                    track.appendChild(slideDiv);
                });

                // Set initial content
                updateDescription(0, false);

                // Start Auto Play
                startAutoPlay();

                // Event Listeners
                addEventListeners();
            }

            // Core Carousel Logic
            function updateSlide(index) {
                // Loop logic
                if (index < 0) index = slidesData.length - 1;
                if (index >= slidesData.length) index = 0;

                currentIndex = index;

                // Move Track
                track.style.transform = `translateX(-${currentIndex * 100}%)`;

                // Update Description
                updateDescription(currentIndex);

                // Reset Drag State
                currentTranslate = -currentIndex * carouselArea.offsetWidth;
                prevTranslate = currentTranslate;
            }

            function updateDescription(index, animate = true) {
                clearTimeout(descTimeout);

                if (animate) {
                    // Fade out
                    descContainer.classList.remove('opacity-100', 'translate-y-0');
                    descContainer.classList.add('opacity-0', 'translate-y-4'); // Slide down slightly

                    descTimeout = setTimeout(() => {
                        setContent(index);
                        // Fade in
                        descContainer.classList.remove('opacity-0', 'translate-y-4');
                        descContainer.classList.add('opacity-100', 'translate-y-0');
                    }, 300); // Wait for fade out
                } else {
                    setContent(index);
                    // Ensure visibility if animation was skipped
                    descContainer.classList.remove('opacity-0', 'translate-y-4');
                    descContainer.classList.add('opacity-100', 'translate-y-0');
                }
            }

            function setContent(index) {
                descTitle.textContent = slidesData[index].title;
                descText.textContent = slidesData[index].description;
            }

            // Auto Play Logic
            function startAutoPlay() {
                clearInterval(autoPlayInterval);
                clearInterval(progressInterval);

                let progress = 0;
                const step = 100 / (autoPlayDelay / 50); // Update every 50ms

                // Reset progress bar
                progressBar.style.width = '0%';
                progressBar.style.transition = 'none'; // Instant reset

                // Tiny delay to allow CSS transition reset
                setTimeout(() => {
                    progressBar.style.transition = `width ${autoPlayDelay}ms linear`;
                    progressBar.style.width = '100%';
                }, 50);

                autoPlayInterval = setInterval(() => {
                    nextSlide();
                }, autoPlayDelay);
            }

            function resetTimer() {
                clearInterval(autoPlayInterval);
                progressBar.style.transition = 'none';
                progressBar.style.width = '0%';
                startAutoPlay();
            }

            function nextSlide() {
                updateSlide(currentIndex + 1);
                resetTimer(); // Restart timer after slide change
            }

            function prevSlide() {
                updateSlide(currentIndex - 1);
                resetTimer();
            }

            // Swipe / Drag Logic
            function addEventListeners() {
                // Touch Events
                carouselArea.addEventListener('touchstart', touchStart);
                carouselArea.addEventListener('touchend', touchEnd);
                carouselArea.addEventListener('touchmove', touchMove);

                // Mouse Events
                carouselArea.addEventListener('mousedown', touchStart);
                carouselArea.addEventListener('mouseup', touchEnd);
                carouselArea.addEventListener('mouseleave', () => {
                    if (isDragging) touchEnd();
                });
                carouselArea.addEventListener('mousemove', touchMove);

                // Resize Event (Recalculate width for drag math)
                window.addEventListener('resize', () => {
                    updateSlide(currentIndex); // Re-align
                });
            }

            function touchStart(event) {
                // Ignore non-left clicks (e.g. right click)
                if (event.type.includes('mouse') && event.button !== 0) return;

                isDragging = true;
                startPos = getPositionX(event);
                carouselArea.classList.add('cursor-grabbing');
                carouselArea.classList.remove('cursor-grab');

                // Pause Timer on interaction
                clearInterval(autoPlayInterval);
                progressBar.style.transition = 'none';
                progressBar.style.width = '0%';

                // Disable transition for instant drag response
                track.style.transition = 'none';

                animationID = requestAnimationFrame(animation);
            }

            function touchMove(event) {
                if (isDragging) {
                    const currentPosition = getPositionX(event);
                    const currentMove = currentPosition - startPos;
                    // Move based on current index position
                    const baseTranslate = -currentIndex * carouselArea.offsetWidth;
                    currentTranslate = baseTranslate + currentMove;
                }
            }

            function touchEnd() {
                isDragging = false;
                cancelAnimationFrame(animationID);
                carouselArea.classList.remove('cursor-grabbing');
                carouselArea.classList.add('cursor-grab');

                // Re-enable transition
                track.style.transition = 'transform 0.5s ease-in-out';

                const movedBy = currentTranslate - (-currentIndex * carouselArea.offsetWidth);
                const threshold = 100; // Minimum px to trigger slide

                if (movedBy < -threshold) {
                    nextSlide();
                } else if (movedBy > threshold) {
                    prevSlide();
                } else {
                    updateSlide(currentIndex); // Snap back
                    resetTimer(); // Resume timer even if we didn't change slide
                }
            }

            function getPositionX(event) {
                return event.type.includes('mouse') ? event.pageX : event.touches[0].clientX;
            }

            function animation() {
                if (isDragging) {
                    track.style.transform = `translateX(${currentTranslate}px)`;
                    requestAnimationFrame(animation);
                }
            }

            // Run
            init();
        </script>
    @endpush
@endsection