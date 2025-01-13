<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Dwello - Find Your Dream Home</title>
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Custom Styles -->
    <style>
        @media (max-width: 768px) {
            .mobile-menu-open {
                overflow: hidden;
            }
        }

        /* Smooth scroll behavior */
        html {
            scroll-behavior: smooth;
        }

        /* Custom transitions */
        .menu-transition {
            transition: all 0.3s ease-in-out;
        }

        /* Hide scrollbar for Chrome, Safari and Opera */
        .no-scrollbar::-webkit-scrollbar {
            display: none;
        }

        /* Hide scrollbar for IE, Edge and Firefox */
        .no-scrollbar {
            -ms-overflow-style: none;
            /* IE and Edge */
            scrollbar-width: none;
            /* Firefox */
        }
    </style>

    <style>
        .testimonial-slide {
            flex: 0 0 100%;
            max-width: 100%;
            padding: 0 1rem;
        }

        @media (min-width: 768px) {
            .testimonial-slide {
                flex: 0 0 50%;
                max-width: 50%;
            }
        }

        @media (min-width: 1024px) {
            .testimonial-slide {
                flex: 0 0 33.333333%;
                max-width: 33.333333%;
            }
        }

        #testimonials-container {
            transition: transform 0.5s ease-in-out;
        }
    </style>

    <style>
        #testimonials-container {
            transition: transform 0.5s ease-in-out;
        }

        #slider-dots button.active {
            background-color: #4B5563;
        }
    </style>

    <style>
        .testimonial-slide {
            flex: 0 0 100%;
            max-width: 100%;
            padding: 0 1rem;
        }

        @media (min-width: 768px) {
            .testimonial-slide {
                flex: 0 0 50%;
                max-width: 50%;
            }
        }

        @media (min-width: 1024px) {
            .testimonial-slide {
                flex: 0 0 33.333333%;
                max-width: 33.333333%;
            }
        }

        #testimonials-container {
            transition: transform 0.5s ease-in-out;
        }

        #slider-dots button.active {
            background-color: #4B5563;
        }
    </style>

</head>

<body class="bg-gray-50 font-sans">
    <!-- Header -->
    <header class="bg-white shadow-sm sticky top-0 z-50">
        <div class="container mx-auto px-4 py-4">
            <div class="flex justify-between items-center">
                <!-- Logo -->
                <div class="text-xl font-bold">Dwello</div>

                <!-- Mobile Menu Button -->
                <button class="md:hidden focus:outline-none" id="mobile-menu-button">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>

                <!-- Desktop Navigation -->
                <nav class="hidden md:flex space-x-6 flex-1 justify-center">
                    <a href="#home" class="text-gray-700 hover:text-gray-900 transition-colors">Home</a>
                    {{-- <a href="#" class="text-gray-700 hover:text-gray-900 transition-colors">Service</a> --}}
                    {{-- <a href="#" class="text-gray-700 hover:text-gray-900 transition-colors">Agents</a> --}}
                    <a href="#contact" class="text-gray-700 hover:text-gray-900 transition-colors">Contact</a>
                </nav>

                <!-- Desktop Search and Profile -->
                <div class="hidden md:flex items-center space-x-4">
                    <!-- Search Input -->
                    {{-- <div class="relative">
                        <input type="text" placeholder="Search..."
                            class="px-4 py-2 w-48 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-800">
                        <button class="absolute right-3 top-1/2 transform -translate-y-1/2">
                            <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                        </button>
                    </div> --}}

                    <!-- Profile -->
                    <div class="flex items-center space-x-4">
                        {{-- <img src="img/person_1-min.jpg" alt="Profile"
                            class="h-10 w-10 rounded-full border-2 border-white hover:scale-105 transition-transform duration-200"> --}}
                        <button class="bg-gray-800 text-white px-4 py-2 rounded-lg hover:bg-gray-700 transition-colors">
                            Login
                        </button>
                    </div>
                </div>
            </div>

            <!-- Mobile Menu (Hidden by default) -->
            <div class="md:hidden hidden menu-transition" id="mobile-menu">
                <nav class="mt-4 space-y-3 px-2">
                    <a href="#" class="block py-2 px-4 text-gray-700 hover:bg-gray-100 rounded-lg">Home</a>
                    <a href="#" class="block py-2 px-4 text-gray-700 hover:bg-gray-100 rounded-lg">Service</a>
                    <a href="#" class="block py-2 px-4 text-gray-700 hover:bg-gray-100 rounded-lg">Agents</a>
                    <a href="#" class="block py-2 px-4 text-gray-700 hover:bg-gray-100 rounded-lg">Contact</a>
                </nav>

                <!-- Mobile Menu (Hidden by default) -->
                <div class="md:hidden hidden menu-transition" id="mobile-menu">
                    <nav class="mt-4 space-y-3 px-2">
                        <a href="#home" class="block py-2 px-4 text-gray-700 hover:bg-gray-100 rounded-lg">Home</a>
                        <a href="#" class="block py-2 px-4 text-gray-700 hover:bg-gray-100 rounded-lg">Service</a>
                        <a href="#" class="block py-2 px-4 text-gray-700 hover:bg-gray-100 rounded-lg">Agents</a>
                        <a href="#contact"
                            class="block py-2 px-4 text-gray-700 hover:bg-gray-100 rounded-lg">Contact</a>
                    </nav>
                </div>

                <!-- Mobile Search -->
                <div class="mt-4 px-2">
                    <div class="relative">
                        <input type="text" placeholder="Search..."
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-800">
                        <button class="absolute right-3 top-1/2 transform -translate-y-1/2">
                            <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                        </button>
                    </div>
                    <button
                        class="w-full mt-4 bg-gray-800 text-white px-4 py-2 rounded-lg hover:bg-gray-700 transition-colors">
                        Sign up
                    </button>
                </div>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section id="home" class="relative w-full min-h-[600px] md:h-screen">
        <!-- Background Image -->
        <div class="absolute inset-0">
            <img src="img/hero_bg_1.jpg" class="w-full h-full object-cover" alt="Hero background">
            <div class="absolute inset-0 bg-black bg-opacity-50"></div>
        </div>

        <!-- Content -->
        <div class="relative container mx-auto h-full flex items-center px-4 md:px-6">
            <div class="w-full lg:w-1/2 space-y-6 py-12 md:py-0">
                <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold text-white leading-tight">
                    Find Your Dream Home
                </h1>
                <p class="text-gray-200 text-base md:text-lg max-w-lg">
                    Explore our curated selection of exquisite properties meticulously
                    tailored to your unique dream home vision.
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <button
                        class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-3 rounded-lg transition-colors duration-300">
                        Get Started
                    </button>
                    <button
                        class="bg-transparent border-2 border-white text-white px-8 py-3 rounded-lg hover:bg-white hover:text-gray-900 transition-colors duration-300">
                        Learn More
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Search Section -->
    <section class="relative -mt-24 px-4 mb-12 z-10">
        <div class="container mx-auto">
            <div class="bg-white rounded-xl shadow-xl p-6 max-w-4xl mx-auto">
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    <!-- Location -->
                    <div class="space-y-2">
                        <label class="block text-sm font-medium text-gray-700">Location</label>
                        <div class="relative">
                            <select
                                class="w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5">
                                <option selected>Choose location</option>
                                <option value="SF">San Francisco</option>
                                <option value="NY">New York</option>
                                <option value="LA">Los Angeles</option>
                                <option value="CH">Chicago</option>
                            </select>
                            <div
                                class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7" />
                                </svg>
                            </div>
                        </div>
                    </div>

                    <!-- Property Type -->
                    <div class="space-y-2">
                        <label class="block text-sm font-medium text-gray-700">Property Type</label>
                        <div class="relative">
                            <select
                                class="w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5">
                                <option selected>Choose type</option>
                                <option value="AP">Apartment</option>
                                <option value="HO">House</option>
                                <option value="VI">Villa</option>
                                <option value="CO">Condo</option>
                            </select>
                            <div
                                class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7" />
                                </svg>
                            </div>
                        </div>
                    </div>

                    <!-- Price Range -->
                    <div class="space-y-2">
                        <label class="block text-sm font-medium text-gray-700">Price Range</label>
                        <input type="text" placeholder="Enter price range"
                            class="w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5">
                    </div>

                    <!-- Search Button -->
                    <div class="flex items-end">
                        <button
                            class="w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-2.5 px-4 rounded-lg transition-colors duration-300 flex items-center justify-center gap-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                            Search
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-gray-50 py-16">
        <div class="container mx-auto px-4 max-w-6xl">
            <!-- Main Content -->
            <div class="flex flex-col lg:flex-row justify-between gap-12 mb-16">
                <!-- Left Content: Header + Features -->
                <div class="lg:w-2/5 space-y-8">
                    <!-- Header Section -->
                    <div class="mb-12">
                        <h2 class="text-3xl md:text-4xl font-bold text-blue-600 mb-4">
                            Let's find home that's perfect for you
                        </h2>
                        <p class="text-gray-600">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam enim pariatur similique
                            debitis vel nisi qui reprehenderit.
                        </p>
                    </div>

                    <!-- Features Section -->
                    <div class="space-y-8">
                        <!-- Feature 1 -->
                        <div class="flex items-start">
                            <div class="flex-shrink-0 mr-4">
                                <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center">
                                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                    </svg>
                                </div>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold mb-2">2M Properties</h3>
                                <p class="text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Nostrum iste.</p>
                            </div>
                        </div>

                        <!-- Feature 2 -->
                        <div class="flex items-start">
                            <div class="flex-shrink-0 mr-4">
                                <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center">
                                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                    </svg>
                                </div>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold mb-2">Top Rated Agents</h3>
                                <p class="text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Nostrum iste.</p>
                            </div>
                        </div>

                        <!-- Feature 3 -->
                        <div class="flex items-start">
                            <div class="flex-shrink-0 mr-4">
                                <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center">
                                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                    </svg>
                                </div>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold mb-2">Legit Properties</h3>
                                <p class="text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Nostrum iste.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Image Section -->
                <div class="lg:w-3/5">
                    <div class="relative">
                        <img src="img/hero_bg_3.jpg" alt="About Image"
                            class="w-full h-full object-cover rounded-lg shadow-lg" />
                    </div>
                </div>
            </div>

            <!-- Stats Section -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                <!-- Stat 1 -->
                <div class="text-center">
                    <span class="block text-3xl font-bold text-blue-600 mb-2">3,298</span>
                    <span class="text-gray-600 text-sm">Buy Properties</span>
                </div>

                <!-- Stat 2 -->
                <div class="text-center">
                    <span class="block text-3xl font-bold text-blue-600 mb-2">2,181</span>
                    <span class="text-gray-600 text-sm">Sell Properties</span>
                </div>

                <!-- Stat 3 -->
                <div class="text-center">
                    <span class="block text-3xl font-bold text-blue-600 mb-2">9,316</span>
                    <span class="text-gray-600 text-sm">All Properties</span>
                </div>

                <!-- Stat 4 -->
                <div class="text-center">
                    <span class="block text-3xl font-bold text-blue-600 mb-2">7,191</span>
                    <span class="text-gray-600 text-sm">Agents</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us -->
    <section class="py-12 bg-gray-50">
        <div class="container mx-auto px-6">
            <!-- Section Header -->
            <div class="max-w-3xl mx-auto mb-12 text-center">

                <h2 class="text-3xl font-bold text-gray-900 mb-4">Why Choose Us</h2>
                <p class="text-gray-600">Elevating Your Home Buying Experience with Expertise, Integrity, and Unmatched
                    Personalized Service</p>
            </div>

            <!-- Features Grid -->
            <div class="container mx-auto px-4 max-w-5xl">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                    <!-- Expert Guidance -->
                    <div class="bg-white p-4 rounded-lg shadow-lg">
                        <div class="text-blue-500 mb-3">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">Expert Guidance</h3>
                        <p class="text-sm text-gray-600">Benefit from our team's seasoned expertise for a smooth buying
                            experience.</p>
                    </div>

                    <!-- Personalized Service -->
                    <div class="bg-white p-4 rounded-lg shadow-lg">
                        <div class="text-blue-500 mb-3">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">Personalized Service</h3>
                        <p class="text-sm text-gray-600">Our services adapt to your unique needs, making your journey
                            stress-free.</p>
                    </div>

                    <!-- Transparent Process -->
                    <div class="bg-white p-4 rounded-lg shadow-lg">
                        <div class="text-blue-500 mb-3">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">Transparent Process</h3>
                        <p class="text-sm text-gray-600">Stay informed with our clear and honest approach to buying
                            your home.</p>
                    </div>

                    <!-- Exceptional Support -->
                    <div class="bg-white p-4 rounded-lg shadow-lg">
                        <div class="text-blue-500 mb-3">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z" />
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">Exceptional Support</h3>
                        <p class="text-sm text-gray-600">Providing peace of mind with our responsive and attentive
                            customer service.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Popular Residences -->
    <section class="bg-gray-100 py-12">
        <div class="container mx-auto px-4 max-w-6xl text-center">
            <h2 class="text-3xl font-bold text-gray-900 mb-8">Our Popular Residences</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <div class="aspect-w-16 aspect-h-10">
                        <img src="img/img_1.jpg" class="w-full h-full object-cover" alt="San Francisco residence">
                    </div>
                    <div class="p-6">
                        <h3 class="font-bold text-gray-800 text-lg mb-2">San Francisco, California</h3>
                        <p class="text-gray-600 mb-2">4 Rooms, 1,500 sq ft</p>
                        <p class="text-gray-800 font-semibold">$2,500,000</p>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <div class="aspect-w-16 aspect-h-10">
                        <img src="img/img_2.jpg" class="w-full h-full object-cover" alt="Beverly Hills residence">
                    </div>
                    <div class="p-6">
                        <h3 class="font-bold text-gray-800 text-lg mb-2">Beverly Hills, California</h3>
                        <p class="text-gray-600 mb-2">3 Rooms, 1,500 sq ft</p>
                        <p class="text-gray-800 font-semibold">$850,000</p>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <div class="aspect-w-16 aspect-h-10">
                        <img src="img/img_3.jpg" class="w-full h-full object-cover" alt="Palo Alto residence">
                    </div>
                    <div class="p-6">
                        <h3 class="font-bold text-gray-800 text-lg mb-2">Palo Alto, California</h3>
                        <p class="text-gray-600 mb-2">6 Rooms, 4,000 sq ft</p>
                        <p class="text-gray-800 font-semibold">$3,700,000</p>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- Testimonials Section -->
    <section class="py-12 md:py-16 bg-gray-50">
        <div class="container mx-auto px-4 relative">
            <div class="text-center mb-12">
                <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mb-4">What People Say About Dwello</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Real stories from our satisfied customers</p>
            </div>

            <!-- Testimonials Slider Container -->
            <div class="relative max-w-5xl mx-auto overflow-hidden px-4">
                <!-- Navigation Buttons -->
               

                <!-- Testimonials Wrapper -->
                <div class="flex transition-transform duration-500 ease-in-out" id="testimonials-container">
                    <!-- First Testimonial -->
                    <div class="testimonial-slide">
                        <div class="bg-white rounded-xl shadow-lg overflow-hidden mx-2">
                            <div class="relative h-48">
                                <img src="img/img_1.jpg" class="w-full h-full object-cover" alt="Property">
                                <div class="absolute top-4 right-4 bg-white px-2 py-1 rounded-lg shadow">
                                    <div class="flex items-center gap-1">
                                        <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <span class="text-sm font-semibold">4.8</span>
                                    </div>
                                </div>
                            </div>
                            <div class="p-6">
                                <div class="flex items-center gap-4 mb-4">
                                    <img src="img/person_1-min.jpg"
                                        class="w-12 h-12 rounded-full object-cover border-2 border-white"
                                        alt="Customer">
                                    <div>
                                        <h3 class="font-semibold text-gray-900">Sarah Nguyen</h3>
                                        <p class="text-sm text-gray-500">Indonesia</p>
                                    </div>
                                </div>
                                <p class="text-gray-600">"Dwello truly cares about their clients. They listened to my
                                    needs and helped me find the perfect home."</p>
                            </div>
                        </div>
                    </div>

                    <!-- Second Testimonial -->
                    <div class="testimonial-slide">
                        <div class="bg-white rounded-xl shadow-lg overflow-hidden mx-2">
                            <div class="relative h-48">
                                <img src="img/img_2.jpg" class="w-full h-full object-cover" alt="Property">
                                <div class="absolute top-4 right-4 bg-white px-2 py-1 rounded-lg shadow">
                                    <div class="flex items-center gap-1">
                                        <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <span class="text-sm font-semibold">4.9</span>
                                    </div>
                                </div>
                            </div>
                            <div class="p-6">
                                <div class="flex items-center gap-4 mb-4">
                                    <img src="img/person_2-min.jpg"
                                        class="w-12 h-12 rounded-full object-cover border-2 border-white"
                                        alt="Customer">
                                    <div>
                                        <h3 class="font-semibold text-gray-900">John Smith</h3>
                                        <p class="text-sm text-gray-500">United States</p>
                                    </div>
                                </div>
                                <p class="text-gray-600">"The team at Dwello made my home buying experience seamless
                                    and enjoyable. Highly recommended!"</p>
                            </div>
                        </div>
                    </div>

                    <!-- Third Testimonial -->
                    <div class="testimonial-slide">
                        <div class="bg-white rounded-xl shadow-lg overflow-hidden mx-2">
                            <div class="relative h-48">
                                <img src="img/img_3.jpg" class="w-full h-full object-cover" alt="Property">
                                <div class="absolute top-4 right-4 bg-white px-2 py-1 rounded-lg shadow">
                                    <div class="flex items-center gap-1">
                                        <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <span class="text-sm font-semibold">5.0</span>
                                    </div>
                                </div>
                            </div>
                            <div class="p-6">
                                <div class="flex items-center gap-4 mb-4">
                                    <img src="img/person_3-min.jpg"
                                        class="w-12 h-12 rounded-full object-cover border-2 border-white"
                                        alt="Customer">
                                    <div>
                                        <h3 class="font-semibold text-gray-900">Maria Garcia</h3>
                                        <p class="text-sm text-gray-500">Spain</p>
                                    </div>
                                </div>
                                <p class="text-gray-600">"Outstanding service! Found my dream apartment in just two
                                    weeks. The process was smooth and professional."</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Navigation Buttons - Pindahkan ke luar overflow-hidden -->
                <button
                    class="absolute left-0 top-1/2 -translate-y-1/2 bg-white p-2 rounded-full shadow-lg hover:bg-gray-100 z-10 hidden md:block"
                    id="prev-testimonial">
                    <svg class="w-6 h-6 text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                </button>

                <button
                    class="absolute right-0 top-1/2 -translate-y-1/2 bg-white p-2 rounded-full shadow-lg hover:bg-gray-100 z-10 hidden md:block"
                    id="next-testimonial">
                    <svg class="w-6 h-6 text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </button>
            </div>

            <!-- Slider Navigation Dots -->
            <div class="flex justify-center mt-8 space-x-2" id="slider-dots">
                <button
                    class="w-3 h-3 rounded-full bg-gray-300 hover:bg-gray-400 transition-colors duration-200 active"></button>
                <button
                    class="w-3 h-3 rounded-full bg-gray-300 hover:bg-gray-400 transition-colors duration-200"></button>
                <button
                    class="w-3 h-3 rounded-full bg-gray-300 hover:bg-gray-400 transition-colors duration-200"></button>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="bg-gray-100 py-12">
        <div class="container mx-auto text-center">
            <h2 class="text-2xl font-bold text-gray-900">Do You Have Any Questions?</h2>
            <p class="text-gray-600">Get Help From Us</p>
            <div
                class="mt-6 flex flex-col sm:flex-row items-center justify-center space-y-4 sm:space-y-0 sm:space-x-4">
                <button class="bg-gray-800 text-white px-6 py-2 rounded">Chat with Support</button>
                <button class="bg-gray-800 text-white px-6 py-2 rounded">Browse FAQ</button>
            </div>
            <div class="mt-6 flex justify-center">
                <input type="email" placeholder="Enter your email"
                    class="px-8 py-2 w-72 border border-gray-300 rounded-l focus:outline-none focus:ring-2 focus:ring-gray-800 rounded-lg" />
                <button class="bg-gray-800 text-white px-6 py-2 rounded-lg hover:bg-gray-700 ml-6 ">
                    Submit
                </button>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer id="contact" class="bg-gray-800 text-white py-8">
        <div class="container mx-auto grid grid-cols-1 md:grid-cols-5 gap-6 ml-6">
            <div>
                <div class="text-xl font-bold">Dwello</div>
                <ul>
                    <li>
                        <p>Dwello made my dream of owning a home a reality! Exceptional support
                            and guidance throughout every step of the process.</p>
                    </li>

                </ul>
            </div>
            <div>
                <h3 class="font-bold">About</h3>
                <ul>
                    <li><a href="#" class="hover:underline">Our Story</a></li>
                    <li><a href="#" class="hover:underline">Careers</a></li>
                    <li><a href="#" class="hover:underline">Our Team</a></li>
                    <li><a href="#" class="hover:underline">Resources</a></li>
                </ul>
            </div>
            <div>
                <h3 class="font-bold">Support</h3>
                <ul>
                    <li><a href="#" class="hover:underline">FAQ</a></li>
                    <li><a href="#" class="hover:underline">Contact Us</a></li>
                    <li><a href="#" class="hover:underline">Help Center</a></li>
                    <li><a href="#" class="hover:underline">Terms of Service</a></li>
                </ul>
            </div>
            <div>
                <h3 class="font-bold">Find Us</h3>
                <ul>
                    <li><a href="#" class="hover:underline">Events</a></li>
                    <li><a href="#" class="hover:underline">Locations</a></li>
                    <li><a href="#" class="hover:underline">Newsletter</a></li>
                </ul>
            </div>
            <div>
                <h3 class="font-bold">Our Social</h3>
                <ul>
                    <li><a href="#" class="hover:underline">Instagram</a></li>
                    <li><a href="#" class="hover:underline">Facebook</a></li>
                    <li><a href="#" class="hover:underline">Twitter</a></li>
                </ul>
            </div>
        </div>
    </footer>
</body>

</html>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const container = document.getElementById('testimonials-container');
        const prevButton = document.getElementById('prev-testimonial');
        const nextButton = document.getElementById('next-testimonial');
        let currentIndex = 0;

        // Handle slider navigation
        function updateSlider() {
            const cards = container.children;
            const cardWidth = cards[0].offsetWidth;
            container.style.transform = `translateX(-${currentIndex * cardWidth}px)`;
        }

        prevButton?.addEventListener('click', () => {
            if (currentIndex > 0) {
                currentIndex--;
                updateSlider();
            }
        });

        nextButton?.addEventListener('click', () => {
            const cards = container.children;
            if (currentIndex < cards.length - 3) {
                currentIndex++;
                updateSlider();
            }
        });

        // Handle resize
        window.addEventListener('resize', updateSlider);
    });

    document.addEventListener('DOMContentLoaded', function() {
        const container = document.getElementById('testimonials-container');
        const slides = document.querySelectorAll('.testimonial-slide');
        const prevButton = document.getElementById('prev-testimonial');
        const nextButton = document.getElementById('next-testimonial');

        // Clone slides for infinite loop
        slides.forEach(slide => {
            const clone = slide.cloneNode(true);
            container.appendChild(clone);
        });

        let currentIndex = 0;
        const slideCount = slides.length;
        let isTransitioning = false;

        function updateSlider(direction) {
            if (isTransitioning) return;
            isTransitioning = true;

            const slideWidth = slides[0].offsetWidth;
            currentIndex = direction === 'next' ? currentIndex + 1 : currentIndex - 1;

            container.style.transform = `translateX(-${currentIndex * slideWidth}px)`;

            // Handle infinite loop
            if (direction === 'next' && currentIndex >= slideCount) {
                setTimeout(() => {
                    container.style.transition = 'none';
                    currentIndex = 0;
                    container.style.transform = `translateX(0)`;
                    setTimeout(() => {
                        container.style.transition = 'transform 0.5s ease-in-out';
                    }, 50);
                }, 500);
            } else if (direction === 'prev' && currentIndex < 0) {
                setTimeout(() => {
                    container.style.transition = 'none';
                    currentIndex = slideCount - 1;
                    container.style.transform = `translateX(-${currentIndex * slideWidth}px)`;
                    setTimeout(() => {
                        container.style.transition = 'transform 0.5s ease-in-out';
                    }, 50);
                }, 500);
            }

            setTimeout(() => {
                isTransitioning = false;
            }, 500);
        }

        // Auto slide every 5 seconds
        let autoSlideInterval = setInterval(() => updateSlider('next'), 5000);

        // Event listeners
        prevButton?.addEventListener('click', () => {
            clearInterval(autoSlideInterval);
            updateSlider('prev');
            autoSlideInterval = setInterval(() => updateSlider('next'), 5000);
        });

        nextButton?.addEventListener('click', () => {
            clearInterval(autoSlideInterval);
            updateSlider('next');
            autoSlideInterval = setInterval(() => updateSlider('next'), 5000);
        });

        // Reset on window resize
        window.addEventListener('resize', () => {
            container.style.transition = 'none';
            container.style.transform = `translateX(-${currentIndex * slides[0].offsetWidth}px)`;
        });
    });
</script>
