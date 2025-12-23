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
        </style>
    @endpush

    {{-- content --}}
    <!-- Fixed Background Layer (Z-0) -->
    <div id="fixed-backgrounds" class="fixed inset-0 w-full h-full z-0">

        <!-- Hero 1 (Top) -->
        <div id="about-1" class="absolute inset-0 w-full h-full transition-opacity duration-700 ease-in-out opacity-100">
            <!-- Image -->
            <div class="absolute inset-0 bg-stone-900 pointer-events-none">
                <img src="{{ asset('frontendimages/carouselimg/image2.png') }}"
                    alt="Resort Background" class="w-full h-full object-cover opacity-60">
            </div>

            <!-- Content -->
            <div
                class="relative h-full flex flex-col items-center justify-center text-center mx-auto space-y-4 pointer-events-auto px-4">
                <div class="max-w-4xl">
                    <h1
                        class="text-5xl md:text-7xl font-bold tracking-wider uppercase drop-shadow-sm text-white font-serif">
                        Bandipur Mountain Resort
                    </h1>
                </div>

                <div class="relative z-50 pt-10">
                    <a href="#about"
                        class="scroll-indicator text-white opacity-80 block cursor-pointer hover:opacity-100 transition-opacity flex flex-col items-center">
                        <p class="text-lg text-gray-200 mb-2 uppercase tracking-widest">About Us</p>
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

            {{-- header section --}}
            <section class='pt-16 mb-20' id='about'>
                <div class="flex items-center justify-center gap-7">
                    <!-- Left Line -->
                    <span class="h-0.5 w-12 bg-stone-900 sm:w-20"></span>

                    <!-- Text -->
                    <h2
                        class="font-serif fon text-xl md:text-4xl font-medium tracking-wide text-stone-900 sm:text-4xl antialiased">
                        About Our Resort
                    </h2>

                    <!-- Right Line -->
                    <span class="h-0.5 w-12 bg-stone-900 sm:w-20"></span>
                </div>
                <div class=' container mx-auto flex justify-center text-center items-center max-w-4xl text-lg mt-5'>
                    <p class='text-stone-600  font-serif tracking-wider'>With its exclusive location, the resort provides a
                        serene environment, wonderful views of the
                        Narayani River and its surrounding jungle which provides the perfect ambience to spend quality time
                        with loved ones. On some mornings, herds of rhinos can also been seen drinking water from the river
                        bank across the resort.</p>
                </div>
            </section>

            <div class="w-full px-6">
                <div class=" container mx-auto  max-w-4xl border border-stone-300  h-px  "></div>
            </div>

            <!-- Namaste / About Us Section -->
            <section class="py-12 md:py-20 bg-stone-100">
                <div class="container mx-auto max-w-7xl px-6">
                    <div class="flex flex-col lg:flex-row items-center gap-12 lg:gap-16">

                        <!-- Content Section -->
                        <div class="w-full lg:w-1/2 order-2 lg:order-1">
                            <header class="mb-8 border-l-4 border-stone-900 pl-6">
                                <h1 class="text-4xl md:text-6xl text-stone-900 mb-2 font-serif">Namaste</h1>
                                <h3 class="text-xl md:text-2xl text-blue-800 italic font-light">We bow to the divinity within
                                    you.</h3>
                            </header>

                            <div class="text-lg text-stone-600 space-y-6 leading-relaxed">
                                <p>
                                    Bandipur Mountain Resort is a resort hotel located in Bandipur, a scenic hilltop town in
                                    Tanahun District, Gandaki Province, Nepal. It is positioned about 7 km from the Prithvi
                                    Highway and serves as a comfortable base for travelers exploring the cultural and
                                    natural
                                    attractions of Bandipur.
                                </p>

                                <p>
                                    The resort offers comfortable accommodation with mountain or garden views, free Wi-Fi,
                                    private bathrooms, and balconies. Guests can enjoy facilities such as a restaurant, bar,
                                    garden, sun terrace, outdoor fireplace, and a children’s playground.
                                </p>
                            </div>
                        </div>

                        <!-- Image Section -->
                        <div class="w-full lg:w-1/2 order-1 lg:order-2">
                            <div class="relative aspect-4/3 overflow-hidden rounded-xl shadow-2xl group">
                                <img src="{{ asset('frontendimages/hotel.png') }}" alt="Bandipur Mountain Resort"
                                    class="w-full h-full object-cover transform group-hover:scale-105 transition duration-700 ease-out">
                                <div class="absolute inset-0 border border-white/20 rounded-xl m-4 pointer-events-none">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <!-- View and We Provide Section -->
            <section class="py-12 md:py-20 bg-stone-100 border-t border-stone-200">
                <div class="container mx-auto max-w-7xl px-4">
                    <h1 class="text-4xl px-4 text-center text-stone-900 font-serif mb-4">We Provide</h1>
                    <div class="flex justify-center container mx-auto mb-16">
                        <div class="border-b-2 border-stone-300 w-24"></div>
                    </div>

                    <div class="flex flex-col lg:flex-row gap-10 lg:gap-16">
                        <!-- Main Large Image -->
                        <div class="lg:w-1/2 overflow-hidden rounded-xl shadow-lg">
                            <img src="{{ asset('frontendimages/bandipur1.png') }}" alt="Room with a view"
                                class="w-full h-full object-cover object-center min-h-[400px]">
                        </div>

                        <!-- Text & Gallery Grid -->
                        <div class="lg:w-1/2 flex flex-col justify-center">
                            <div class="space-y-6 mb-8">
                                <h2
                                    class="text-3xl md:text-4xl text-stone-900 text-left font-serif tracking-wide leading-tight">
                                    Himalayan Gold at Your Bedside: Bandipur’s Best View, Right Outside Your Window.
                                </h2>
                                <p class="text-lg text-stone-600 leading-relaxed">
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

            <!-- Quote Section -->
            <section class="py-20 bg-stone-50 border-t border-stone-200">
                <div class="container mx-auto max-w-5xl px-4 text-center">
                    <div class="space-y-12">
                        <i class="fa-solid fa-quote-left text-4xl text-stone-300"></i>
                        <h1 class="text-2xl md:text-4xl text-stone-500 font-serif leading-tight italic">
                            "Bandipur is a Himalayan balcony where time pauses to catch its breath, and every window serves
                            as a frame for the gods."
                        </h1>
                        <div class="pt-4">
                            <a href="{{ url('gallery') }}"
                                class="inline-block py-3 px-8 border-2 border-stone-400 text-stone-500 font-semibold uppercase tracking-widest  hover:text-stone-700 transition-all duration-300 text-sm md:text-base">
                                Visit Our Gallery
                            </a>
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

    @endpush
@endsection