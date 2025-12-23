@extends('frontend.app')

@section('content')
    @push('style')
        <style>
            /* Animations */
            .reveal-on-scroll {
                opacity: 0;
                transform: translateY(30px);
                transition: all 1s ease-out;
            }

            .reveal-on-scroll.is-visible {
                opacity: 1;
                transform: translateY(0);
            }

            @keyframes bounce-slow {

                0%,
                100% {
                    transform: translateY(0);
                }

                50% {
                    transform: translateY(10px);
                }
            }

            .animate-bounce-slow {
                animation: bounce-slow 2s infinite;
            }
        </style>
    @endpush

    <!-- Fixed Background Hero -->
    <div id="fixed-backgrounds" class="fixed inset-0 w-full h-full z-0">
        <!-- Hero 1 (Top) -->
        <div id="about-1" class="absolute inset-0 w-full h-full transition-opacity duration-700 ease-in-out opacity-100">
            <!-- Image -->
            <div class="absolute inset-0 bg-stone-900 pointer-events-none">
                <img src="{{ asset('frontendimages/hotel.png') }}" alt="Resort Background"
                    class="w-full h-full object-cover opacity-70">
                <div class="absolute inset-0 bg-gradient-to-b from-black/60 via-transparent to-black/60"></div>
            </div>

            <!-- Content -->
            <div
                class="relative h-[75vh] top-10 flex flex-col items-center justify-center text-center mx-auto space-y-4 pointer-events-auto px-4">
                <div class=" p-8 md:p-12  max-w-3xl">
                    <span class="block text-stone-200 font-bold tracking-[0.3em] text-xs md:text-sm uppercase mb-4">At Your
                        Service</span>
                    <h1 class="text-5xl md:text-7xl font-semibold text-white mb-6 drop-shadow-lg">Get in Touch</h1>
                    <p class="text-stone-100 text-lg md:text-xl font-light max-w-2xl mx-auto leading-relaxed">
                        Whether you are planning a honeymoon, a family retreat, or a corporate event, our concierge team is
                        here to craft your perfect itinerary.
                    </p>
                </div>

            </div>
        </div>
    </div>

    <!-- Main Content Wrapper -->
    <section class="relative z-10 w-full pointer-events-auto">
        <!-- Top Spacer (Transparent to show Hero 1) -->
        <div class="w-full h-[75vh] pointer-events-none"></div>

        <!-- MAIN CONTENT GRID -->
        <section class="px-4 md:px-6 py-16 lg:py-28 -mt-20 relative z-20 bg-stone-100">
            <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 reveal-on-scroll">

                <!-- LEFT: Contact Info (Takes up 5 columns) -->
                <!-- Replaced teal theme with Stone/Red theme as requested -->
                <div
                    class="lg:col-span-5 bg-stone-800 text-white p-4 md:p-14 rounded-t-xl lg:rounded-l-xl lg:rounded-tr-none shadow-2xl flex flex-col justify-between h-full border-t-4 border-yellow-300">
                    <div>
                        <h2 class="text-3xl md:text-4xl mb-8 text-white italic">Contact Information</h2>
                        <p class="text-stone-300 mb-12 leading-relaxed font-light text-lg">
                            Our reservations desk is open 24/7. Reach out to us for bespoke arrangements or general
                            inquiries.
                        </p>

                        <div class="space-y-10 ">
                            <!-- Location -->
                            <div class="flex items-start group">
                                <div
                                    class="md:w-12 md:h-12 w-8 h-8 rounded-full  flex items-center justify-center shrink-0 mt-1 group-hover:bg-stone-900 transition duration-300 shadow-lg border border-stone-700">
                                    <i
                                        class="fa-solid fa-location-dot text-stone-300 group-hover:text-white transition-colors"></i>
                                </div>
                                <div class="ml-6">
                                    <h3 class="text-xl font-serif text-stone-100">Reservation Office</h3>
                                    <p class="text-stone-400 text-sm mt-2 leading-relaxed">GPO Box: 2154<br>Durbar Marg,
                                        Kathmandu, Nepal</p>
                                </div>
                            </div>

                            <!-- Phone -->
                            <div class="flex items-start group">
                                <div
                                    class="md:w-12 md:h-12 w-8 h-8 rounded-full  flex items-center justify-center flex-shrink-0 mt-1 group-hover:bg-stone-900 transition duration-300 shadow-lg border border-stone-700">
                                    <i class="fa fa-phone text-stone-300 group-hover:text-white transition-colors"></i>
                                </div>
                                <div class="ml-6">
                                    <h3 class="text-xl font-serif text-stone-100">Call Us</h3>
                                    <p class="text-stone-400 text-sm mt-2">Tel: +977-1-5320162, 5329116</p>

                                </div>
                            </div>

                            <!-- Email -->
                            <div class="flex items-start group">
                                <div
                                    class="md:w-12 md:h-12 w-8 h-8 rounded-full  flex items-center justify-center flex-shrink-0 mt-1 group-hover:bg-stone-900 transition duration-300 shadow-lg border border-stone-700">
                                    <i class="fa fa-message text-stone-300 group-hover:text-white transition-colors"></i>
                                </div>
                                <div class="ml-6">
                                    <h3 class="text-xl font-serif text-stone-100">Email</h3>
                                    <p class="text-stone-400 text-sm mt-2">island@mos.com.np</p>
                                    <p class="text-stone-400 text-sm ">info@islandjungleresort.com.np</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Social Icons -->
                    <div class="mt-16 pt-10 border-t border-stone-800">
                        <p class="text-xs uppercase tracking-[0.2em] text-stone-400 mb-6">Follow our journey</p>
                        <div class="flex space-x-4">
                            <a href="#"
                                class="w-10 h-10 rounded-full shadow-xl flex items-center justify-center text-stone-200 hover:bg-stone-900 hover:text-white transition duration-300">
                                <i class="fa-brands fa-facebook"></i>
                            </a>
                            <a href="#"
                                class="w-10 h-10 rounded-full shadow-xl flex items-center justify-center text-stone-200 hover:bg-stone-900 hover:text-white transition duration-300">
                                <i class="fa-brands fa-instagram"></i>
                            </a>


                        </div>
                    </div>
                </div>

                <!-- RIGHT: Contact Form (Takes up 7 columns) -->
                <div
                    class="lg:col-span-7 bg-white rounded-b-xl lg:rounded-r-xl lg:rounded-bl-none shadow-2xl p-10 md:p-14 border-t-4 lg:border-t-0 border-stone-100">
                    <h2 class="text-3xl md:text-4xl text-stone-800 mb-3 font-serif">Send a Message</h2>
                    <p class="text-stone-500 mb-10 text-sm">Required fields are marked with an asterisk (*)</p>

                    <form class="space-y-8"
                        onsubmit="event.preventDefault(); alert('Thank you for your message. We will contact you shortly.');">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                            <!-- First Name -->
                            <div class="relative group">
                                <label
                                    class="block text-xs font-bold uppercase tracking-wide text-stone-500 mb-2 group-focus-within:text-stone-900 transition-colors">First
                                    Name *</label>
                                <input type="text" required
                                    class="w-full bg-stone-50 text-stone-700 border-b-2 border-stone-200 focus:border-stone-900 focus:bg-white outline-none py-3 px-2 leading-tight transition duration-300 placeholder-stone-500"
                                    placeholder="Jane">
                            </div>
                            <!-- Last Name -->
                            <div class="relative group">
                                <label
                                    class="block text-xs font-bold uppercase tracking-wide text-stone-500 mb-2 group-focus-within:text-stone-900 transition-colors">Last
                                    Name *</label>
                                <input type="text" required
                                    class="w-full bg-stone-50 text-stone-700 border-b-2 border-stone-200 focus:border-stone-900 focus:bg-white outline-none py-3 px-2 leading-tight transition duration-300 placeholder-stone-500"
                                    placeholder="Doe">
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                            <!-- Email -->
                            <div class="relative group">
                                <label
                                    class="block text-xs font-bold uppercase tracking-wide text-stone-500 mb-2 group-focus-within:text-stone-900 transition-colors">Email
                                    Address *</label>
                                <div class="relative">
                                    <span
                                        class="absolute inset-y-0 left-0 flex items-center pl-0 text-stone-400 group-focus-within:text-stone-900 transition-colors">
                                        <i class="fa fa-envelope-o"></i>
                                    </span>
                                    <input type="email" required
                                        class="w-full bg-stone-50 text-stone-700 border-b-2 border-stone-200 focus:border-stone-900 focus:bg-white outline-none py-3 pl-8 px-2 leading-tight transition duration-300 placeholder-stone-500"
                                        placeholder="you@example.com">
                                </div>
                                <!-- Phone -->
                                <div class="relative group">
                                    <label
                                        class="block text-xs font-bold uppercase tracking-wide text-stone-500 mb-2 group-focus-within:text-stone-900 transition-colors">Phone
                                        Number</label>
                                    <input type="tel"
                                        class="w-full bg-stone-50 text-stone-700 border-b-2 border-stone-200 focus:border-stone-900 focus:bg-white outline-none py-3 px-2 leading-tight transition duration-300 placeholder-stone-500"
                                        placeholder="+1 (555) 000-0000">
                                </div>
                            </div>

                            <!-- Topic Selection -->
                            <div class="relative group">
                                <label
                                    class="block text-xs font-bold uppercase tracking-wide text-stone-500 mb-2 group-focus-within:text-stone-900 transition-colors">I'm
                                    interested in *</label>
                                <div class="relative">
                                    <select
                                        class="block w-full bg-stone-50 border-b-2 border-stone-200 text-stone-700 py-3 px-2 pr-8 leading-tight focus:border-stone-900 focus:bg-white outline-none appearance-none cursor-pointer transition duration-300">
                                        <option>Room Reservations</option>
                                        <option>Wedding & Private Events</option>
                                        <option>Spa & Wellness</option>
                                        <option>Dining</option>
                                        <option>General Inquiry</option>
                                    </select>
                                    <div
                                        class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-stone-600">
                                        <i class="fa fa-angle-down"></i>
                                    </div>
                                </div>
                            </div>

                            <!-- Message -->
                            <div class="relative group">
                                <label
                                    class="block text-xs font-bold uppercase tracking-wide text-stone-500 mb-2 group-focus-within:text-stone-900 transition-colors">Message
                                    *</label>
                                <textarea rows="4" required
                                    class="w-full bg-stone-50 text-stone-700 border-b-2 border-stone-200 focus:border-stone-900 focus:bg-white outline-none py-3 px-2 leading-tight transition duration-300 placeholder-stone-500 resize-none"
                                    placeholder="How can we help make your stay memorable?"></textarea>
                            </div>

                            <!-- Submit Button -->
                            <div class="pt-6">
                                <button type="submit"
                                    class="w-full md:w-auto border-2 border-stone-800 text-stone-800 bg-transparent hover:bg-stone-900 hover:text-white hover:border-stone-900 font-bold py-4 px-12 rounded-sm shadow-sm hover:shadow-xl transform hover:-translate-y-1 transition duration-300 uppercase tracking-widest text-xs cursor-pointer">
                                    Send Message
                                </button>
                            </div>
                    </form>
                </div>
            </div>
        </section>


        <!-- MAP & PARTNERS -->
        <section class="w-full  relative group flex flex-col lg:flex-row bg-[#e3e3e3] ">
            <!-- Partners Section -->
            <div class="flex flex-col justify-center items-center text-center space-y-8 lg:w-1/2 w-full py-20 px-8 ">
                <div>
                    <h3 class="text-xs font-bold uppercase tracking-[0.3em] text-blue-700 mb-2">Trusted By</h3>
                    <h2 class="text-3xl font-serif text-stone-800">Our Partners</h2>
                </div>

                <p class="text-stone-500 max-w-sm mx-auto text-sm leading-relaxed">
                    We collaborate with the finest local and international organizations to ensure sustainable tourism and
                    exceptional experiences.
                </p>
                <div
                    class="flex flex-wrap items-center justify-center gap-8 lg:gap-12 opacity-60 hover:opacity-100 transition-opacity duration-500 pt-6 cursor-pointer">
                    <!-- Partner Logo Placeholders -->
                    <div class="flex flex-col items-center">
                        <img src="{{ asset("frontendimages/partners/bandipurvillageresort.png") }}" alt="">
                        <span class="text-xs font-bold text-stone-500 uppercase">Bandipur Village Resort</span>
                    </div>
                    <div class="flex flex-col items-center">
                        <img src="{{ asset('frontendimages/partners/islandjungleresort.png') }}" alt="">
                        <span class="text-xs font-bold text-stone-500 uppercase">Island Jungle Resort</span>
                    </div>
                    <div class="flex flex-col items-center">
                        <img src="{{ asset('frontendimages/partners/partner3.png') }}" alt="">
                        <span class="text-xs font-bold text-stone-500 uppercase">IJR</span>
                    </div>
                </div>
            </div>

            <!-- Map Section -->
            <div class=" lg:w-1/2 w-full overflow-hidden md:p-10 p-3 ">
                <!-- Google Map Iframe -->
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4273.001854894023!2d84.40220742609301!3d27.943958742036124!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399504fba56665cf%3A0xf4b6ea3d96e89bb0!2sBandipur%20Mountain%20Resort!5e0!3m2!1sen!2snp!4v1766299794627!5m2!1sen!2snp"
                    width="100%" height="100%" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                    class="aspect-4/3 rounded-xl"></iframe>

            </div>
        </section>

    </section>

    @push('script')
        <script>

            document.addEventListener('DOMContentLoaded', function () {
                const observerOptions = {
                    root: null,
                    rootMargin: '0px',
                    threshold: 0.1
                };

                const observer = new IntersectionObserver((entries, observer) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            entry.target.classList.add('is-visible');
                            observer.unobserve(entry.target);
                        }
                    });
                }, observerOptions);

                document.querySelectorAll('.reveal-on-scroll').forEach(element => {
                    observer.observe(element);
                });
            });
        </script>
    @endpush
@endsection