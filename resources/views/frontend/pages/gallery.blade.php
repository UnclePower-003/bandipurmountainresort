@extends('frontend.app')

@section('content')

    {{-- content --}}
    <!-- Fixed Background Layer (Z-0) -->
    <div id="fixed-backgrounds" class="fixed inset-0 w-full h-full z-0">

        <!-- Hero 1 (Top) -->
        <div id="about-1" class="absolute inset-0 w-full h-full transition-opacity duration-700 ease-in-out opacity-100">
            <!-- Image -->
            <div class="absolute inset-0 bg-stone-900 pointer-events-none">
                <img src="{{ asset('frontendimages/bandipur3.png') }}" alt="Resort Background"
                    class="w-full h-full object-cover opacity-60">
            </div>

            <!-- Content -->
            <div
                class="relative h-full flex flex-col items-center justify-center text-center mx-auto space-y-4 pointer-events-auto px-4">
                <div class="max-w-4xl">
                    <h1
                        class="text-5xl md:text-7xl font-bold tracking-wider uppercase drop-shadow-sm text-white font-serif">
                        Moments in Bandipur
                    </h1>
                </div>

                <div class="relative z-50 pt-10">
                    <a href="#gallery"
                        class="scroll-indicator text-white opacity-80 block cursor-pointer hover:opacity-100 transition-opacity flex flex-col items-center">
                        <p class="text-lg text-gray-200 mb-2 uppercase tracking-widest">Gallery</p>
                        <i class="fa-solid fa-angle-down text-2xl"></i>
                    </a>
                </div>
            </div>
        </div>

    </div>

    <!-- Scrollable Layer (Z-10) -->
    <div class="relative z-10 w-full pointer-events-none ">

        <!-- Top Spacer (Transparent to show Hero 1) -->
        <div class=" w-full h-[75vh] pointer-events-none"></div>


        <!-- Main Content (White Background) -->
        <main id="main-content" class="bg-white shadow-[0_-20px_50px_rgba(0,0,0,0.5)] relative z-20 pointer-events-auto">

            <!-- Gallery Controls -->
            <section class="py-12 bg-white" id='gallery'>
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <!-- Filter Buttons -->
                    <div class="flex flex-wrap justify-center gap-4 mb-10">
                        <button
                            class="filter-btn active px-6 py-2 rounded-full border border-stone-800 bg-stone-800 text-white transition-all duration-300 hover:shadow-md"
                            data-filter="all">All Moments</button>
                        <button
                            class="filter-btn px-6 py-2 rounded-full border border-stone-800 text-stone-800  cursor-pointer  transition-all duration-300 hover:shadow-md "
                            data-filter="views">Views</button>
                        <button
                            class="filter-btn px-6 py-2 rounded-full border border-stone-800 text-stone-800  cursor-pointer  transition-all duration-300 hover:shadow-md"
                            data-filter="rooms">Rooms</button>
                        <button
                            class="filter-btn px-6 py-2 rounded-full border border-stone-800 text-stone-800  cursor-pointer   transition-all duration-300 hover:shadow-md"
                            data-filter="dining">Dining</button>
                        <button
                            class="filter-btn px-6 py-2 rounded-full border border-stone-800 text-stone-800  cursor-pointer   transition-all duration-300 hover:shadow-md"
                            data-filter="culture">Culture</button>
                    </div>

                    <!-- Gallery Grid -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6" id="gallery-grid">
                        <!-- Content will be injected by JavaScript -->
                    </div>
                </div>
            </section>

            <!-- View and We Provide Section -->
            <section class="py-12 md:py-20 bg-stone-100 border-t border-stone-200">
                <div class="container mx-auto max-w-7xl px-4">
                    <h1 class="text-4xl px-4 text-center text-stone-900 font-serif mb-4">Precious Movement</h1>
                    <div class="flex justify-center container mx-auto mb-16">
                        <div class="border-b-2 border-stone-800 w-24"></div>
                    </div>

                    <div class="flex flex-col lg:flex-row gap-10 lg:gap-16">
                        <!-- Main Large Image -->
                        <div class="lg:w-1/2 overflow-hidden rounded-xl shadow-lg">
                            <img src="{{ asset('frontendimages/hero1.png') }}" alt="Room with a view"
                                class="w-full h-full object-cover object-center min-h-[400px]">
                        </div>

                        <!-- Text & Gallery Grid -->
                        <div class="lg:w-1/2 flex flex-col justify-center">
                            <div class="space-y-6 mb-8">
                                <h2
                                    class="text-3xl md:text-4xl text-stone-900 text-left font-serif tracking-wide leading-tight">
                                    Himalayan Gold at Your Bedside: Bandipur’s Best View, Right Outside Your Window.
                                </h2>
                                <p class="text-lg text-stone-800  cursor-pointer leading-relaxed">
                                    Imagine waking up to the Annapurna and Dhaulagiri ranges glowing in the first light of
                                    dawn,
                                    all without leaving the warmth of your covers. In Bandipur, the best bedroom views offer
                                    more than just mountains; they capture the ethereal mist rolling over the Marsyangdi
                                    Valley
                                    and the quiet, timeless charm of the village's red-brick architecture below. It is a
                                    rare,
                                    front-row experience where the "Queen of Hills" reveals her full majesty directly
                                    through
                                    your window.
                                </p>
                            </div>

                            <!-- Small Images Grid -->
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                <div class="overflow-hidden rounded-lg shadow-md aspect-video">
                                    <img src="{{ asset('frontendimages/bandipur1.png') }}" alt="Valley View"
                                        class="w-full h-full object-cover hover:scale-110 transition duration-500">
                                </div>
                                <div class="overflow-hidden rounded-lg shadow-md aspect-video">
                                    <img src="{{ asset('frontendimages/carouselimg/image1.png') }}" alt="Travel View"
                                        class="w-full h-full object-cover hover:scale-110 transition duration-500">
                                </div>
                                <div class="overflow-hidden rounded-lg shadow-md aspect-video">
                                    <img src="{{ asset('frontendimages/carouselimg/image4.png') }}" alt="Mountain Range"
                                        class="w-full h-full object-cover hover:scale-110 transition duration-500">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="w-full px-6">
                <div class=" container mx-auto  max-w-4xl border border-stone-300  h-px  "></div>
            </div>
        </main>



    </div>
    @push('script')
        <script>
            // Gallery Data (JSON)
            const galleryData = [
                {
                    category: "views",
                    img: "{{ asset('frontendimages/carouselimg/image1.png') }}",
                    title: "Himalayan Sunrise",
                    desc: "Morning views from the terrace"
                },
                {
                    category: "rooms",
                    img: "{{ asset('frontendimages/rooms/room1.png') }}",
                    title: "Heritage Suite",
                    desc: "Traditional comfort"
                },
                {
                    category: "culture",
                    img: "{{ asset('frontendimages/carouselimg/image2.png') }}",
                    title: "Old Bazaar",
                    desc: "A walk through history"
                },
                {
                    category: "dining",
                    img: "{{ asset('frontendimages/d1.png') }}",
                    title: "Rooftop Dining",
                    desc: "Breakfast with a view"
                },
                {
                    category: "rooms",
                    img: "{{ asset('frontendimages/rooms/room2.png') }}",
                    title: "Deluxe Double",
                    desc: "Modern amenities, rustic charm"
                },
                {
                    category: "views",
                    img: "{{ asset('frontendimages/carouselimg/image3.png') }}",
                    title: "Misty Hills",
                    desc: "Evening atmosphere"
                },
                {
                    category: "culture",
                    img: "{{ asset('frontendimages/culture.png') }}",
                    title: "Temple Detail",
                    desc: "Intricate wood carvings"
                },
                {
                    category: "dining",
                    img: "{{ asset('frontendimages/cusin.png') }}",
                    title: "Local Cuisine",
                    desc: "Authentic Nepali Thali"
                },
                {
                    category: "rooms",
                    img: "{{ asset('frontendimages/rooms/room4.png') }}",
                    title: "Balcony View",
                    desc: "Private relaxation space"
                }
            ];

            // Lightbox Elements
            const lightbox = document.getElementById('lightbox');
            const lightboxImg = document.getElementById('lightbox-img');
            const lightboxTitle = document.getElementById('lightbox-title');
            const lightboxDesc = document.getElementById('lightbox-desc');
            const closeBtn = document.getElementById('close-lightbox');
            const prevBtn = document.getElementById('prev-btn');
            const nextBtn = document.getElementById('next-btn');
            const galleryGrid = document.getElementById('gallery-grid');

            let galleryItems = [];
            let currentItems = [];
            let currentIndex = 0;

            // Render Gallery
            function renderGallery() {
                galleryGrid.innerHTML = galleryData.map(item => `
                                                                        <div class="group relative overflow-hidden rounded-lg shadow-md cursor-pointer h-80 gallery-item animate-fade-in" 
                                                                             data-category="${item.category}" 
                                                                             onclick="openLightbox(this)">
                                                                            <img src="${item.img}" alt="${item.title}" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                                                                            <div class="absolute inset-0 bg-black/0 group-hover:bg-black/40 transition-colors duration-300 flex items-center justify-center">
                                                                                <div class="opacity-0 group-hover:opacity-100 transition-opacity duration-300 text-center p-4">
                                                                                    <h3 class="text-white text-xl font-bold mb-1">${item.title}</h3>
                                                                                    <p class="text-stone-200 text-sm">${item.desc}</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    `).join('');

                // Initialize items lists
                galleryItems = document.querySelectorAll('.gallery-item');
                currentItems = Array.from(galleryItems);
            }

            // Initialize Gallery
            renderGallery();

            // Filter Functionality
            const filterBtns = document.querySelectorAll('.filter-btn');

            filterBtns.forEach(btn => {
                btn.addEventListener('click', () => {
                    // Update button styles
                    filterBtns.forEach(b => {
                        // Reset all buttons to the "Inactive" state
                        b.classList.remove('bg-red-600', 'text-white', 'border-stone-600'); // Remove active styles
                        b.classList.add('bg-white', 'text-stone-800', 'border-stone-800'); // Add default styles
                    });
                    btn.classList.remove('bg-white', 'text-stone-800','border-stone-800');
                    btn.classList.add('bg-stone-800', 'text-white', 'border-stone-800');

                    const filterValue = btn.getAttribute('data-filter');

                    // Filter items and update currentItems for lightbox
                    currentItems = [];

                    galleryItems.forEach(item => {
                        if (filterValue === 'all' || item.getAttribute('data-category') === filterValue) {
                            item.classList.remove('hidden');
                            // Reset animation
                            item.classList.remove('animate-fade-in');
                            void item.offsetWidth; // trigger reflow
                            item.classList.add('animate-fade-in');

                            currentItems.push(item);
                        } else {
                            item.classList.add('hidden');
                        }
                    });
                });
            });

            // Lightbox Functions
            function openLightbox(element) {
                // Find the index of the clicked element within the currently filtered items
                currentIndex = currentItems.indexOf(element);
                updateLightboxContent(element);

                lightbox.classList.remove('hidden');
                // Small delay to allow display:block to apply before adding opacity
                setTimeout(() => {
                    lightbox.classList.remove('opacity-0');
                }, 10);
                document.body.style.overflow = 'hidden'; // Prevent scrolling background
            }

            function updateLightboxContent(element) {
                const img = element.querySelector('img');
                const title = element.querySelector('h3').innerText;
                const desc = element.querySelector('p').innerText;

                // Use a higher quality image for lightbox if available (here using same for demo)
                lightboxImg.src = img.src.replace('w=800', 'w=1600');
                lightboxTitle.innerText = title;
                lightboxDesc.innerText = desc;
            }

            function closeLightboxModal() {
                lightbox.classList.add('opacity-0');
                setTimeout(() => {
                    lightbox.classList.add('hidden');
                }, 300);
                document.body.style.overflow = 'auto';
            }

            function showNext() {
                currentIndex = (currentIndex + 1) % currentItems.length;
                updateLightboxContent(currentItems[currentIndex]);
            }

            function showPrev() {
                currentIndex = (currentIndex - 1 + currentItems.length) % currentItems.length;
                updateLightboxContent(currentItems[currentIndex]);
            }

            // Event Listeners
            closeBtn.addEventListener('click', closeLightboxModal);

            lightbox.addEventListener('click', (e) => {
                if (e.target === lightbox) closeLightboxModal();
            });

            nextBtn.addEventListener('click', (e) => {
                e.stopPropagation();
                showNext();
            });

            prevBtn.addEventListener('click', (e) => {
                e.stopPropagation();
                showPrev();
            });

            // Keyboard navigation
            document.addEventListener('keydown', (e) => {
                if (lightbox.classList.contains('hidden')) return;

                if (e.key === 'Escape') closeLightboxModal();
                if (e.key === 'ArrowRight') showNext();
                if (e.key === 'ArrowLeft') showPrev();
            });
        </script>
    @endpush

@endsection