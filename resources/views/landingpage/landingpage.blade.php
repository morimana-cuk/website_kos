<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Dwello - Find Your Dream Home</title>
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        @media (max-width: 768px) {
            .mobile-menu-open {
                overflow: hidden;
            }
        }

        html {
            scroll-behavior: smooth;
        }

        .menu-transition {
            transition: all 0.3s ease-in-out;
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
                    <a href="#properties" class="text-gray-700 hover:text-gray-900 transition-colors">Properties</a>
                    <a href="#contact" class="text-gray-700 hover:text-gray-900 transition-colors">Contact</a>
                </nav>

                <!-- Login Button -->
                <div class="hidden md:block">
                    <button class="bg-gray-800 text-white px-4 py-2 rounded-lg hover:bg-gray-700 transition-colors">
                        Login
                    </button>
                </div>
            </div>

            <!-- Mobile Menu -->
            <div class="md:hidden hidden menu-transition" id="mobile-menu">
                <nav class="mt-4 space-y-3 px-2">
                    <a href="#home" class="block py-2 px-4 text-gray-700 hover:bg-gray-100 rounded-lg">Home</a>
                    <a href="#properties"
                        class="block py-2 px-4 text-gray-700 hover:bg-gray-100 rounded-lg">Properties</a>
                    <a href="#contact" class="block py-2 px-4 text-gray-700 hover:bg-gray-100 rounded-lg">Contact</a>
                </nav>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section id="home" class="relative w-full min-h-[600px] md:h-screen">
        <div class="absolute inset-0">
            <img src="img/hero_bg_1.jpg" class="w-full h-full object-cover" alt="Hero background">
            <div class="absolute inset-0 bg-black bg-opacity-50"></div>
        </div>

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

   

    <!-- Featured Properties -->
    <section id="properties" class="bg-gray-100 py-12">
        <div class="container mx-auto px-4 max-w-6xl">
            <h2 class="text-3xl font-bold text-gray-900 mb-8 text-center">Featured Properties</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Property 1 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <div class="relative">
                        <img src="img/img_1.jpg" class="w-full h-64 object-cover" alt="Property">
                        <div class="absolute top-4 right-4 bg-blue-600 text-white px-2 py-1 rounded">
                            For Sale
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="font-bold text-gray-800 text-lg mb-2">Modern Apartment</h3>
                        <p class="text-gray-600 mb-4">San Francisco, CA</p>
                        <div class="flex justify-between items-center">
                            <p class="text-blue-600 font-bold text-xl">$2,500,000</p>
                            <div class="flex items-center text-gray-600">
                                <span class="mr-2">4 beds</span>
                                <span>2 baths</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Property 2 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <div class="relative">
                        <img src="img/img_2.jpg" class="w-full h-64 object-cover" alt="Property">
                        <div class="absolute top-4 right-4 bg-blue-600 text-white px-2 py-1 rounded">
                            For Sale
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="font-bold text-gray-800 text-lg mb-2">Luxury Villa</h3>
                        <p class="text-gray-600 mb-4">Beverly Hills, CA</p>
                        <div class="flex justify-between items-center">
                            <p class="text-blue-600 font-bold text-xl">$4,750,000</p>
                            <div class="flex items-center text-gray-600">
                                <span class="mr-2">5 beds</span>
                                <span>4 baths</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Property 3 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <div class="relative">
                        <img src="img/img_3.jpg" class="w-full h-64 object-cover" alt="Property">
                        <div class="absolute top-4 right-4 bg-blue-600 text-white px-2 py-1 rounded">
                            For Sale
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="font-bold text-gray-800 text-lg mb-2">Family Home</h3>
                        <p class="text-gray-600 mb-4">Palo Alto, CA</p>
                        <div class="flex justify-between items-center">
                            <p class="text-blue-600 font-bold text-xl">$3,200,000</p>
                            <div class="flex items-center text-gray-600">
                                <span class="mr-2">6 beds</span>
                                <span>3 baths</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="bg-gray-50 py-12">
        <div class="container mx-auto px-4 text-center max-w-4xl">
            <h2 class="text-2xl font-bold text-gray-900 mb-4">Ready to Find Your Dream Homee?</h2>
            <p class="text-gray-600 mb-8">Contact us today and let us help you find the perfect property</p>

            <!-- Contact Form -->
            <div class="bg-white p-8 rounded-lg shadow-lg">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                    <div>
                        <input type="text" placeholder="Your Name"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div>
                        <input type="email" placeholder="Your Email"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                </div>
                <div class="mb-6">
                    <textarea placeholder="Your Message" rows="4"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                </div>
                <button class="bg-blue-600 text-white px-8 py-3 rounded-lg hover:bg-blue-700 transition-colors">
                    Send Message
                </button>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-12">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- Company Info -->
                <div>
                    <h3 class="text-xl font-bold mb-4">Dwello</h3>
                    <p class="text-gray-400">Your trusted partner in finding the perfect home.</p>
                    <div class="mt-4">
                        <p class="text-gray-400">123 Main Street</p>
                        <p class="text-gray-400">San Francisco, CA 94105</p>
                        <p class="text-gray-400">contact@dwello.com</p>
                    </div>
                </div>

                <!-- Quick Links -->
                <div>
                    <h3 class="font-bold mb-4">Quick Links</h3>
                    <ul class="space-y-2">
                        <li><a href="#home" class="text-gray-400 hover:text-white transition-colors">Home</a></li>
                        <li><a href="#properties"
                                class="text-gray-400 hover:text-white transition-colors">Properties</a></li>
                        <li><a href="#contact" class="text-gray-400 hover:text-white transition-colors">Contact</a>
                        </li>
                    </ul>
                </div>

                <!-- Services -->
                <div>
                    <h3 class="font-bold mb-4">Services</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Buy
                                Property</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Sell
                                Property</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Property
                                Management</a></li>
                    </ul>
                </div>

                <!-- Follow Us -->
                <div>
                    <h3 class="font-bold mb-4">Follow Us</h3>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white transition-colors">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                            </svg>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition-colors">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z" />
                            </svg>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition-colors">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Copyright -->
            <div class="border-t border-gray-700 mt-8 pt-8 text-center">
                <p class="text-gray-400">&copy; 2024 Dwello. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- JavaScript -->
    <script>
        // Mobile Menu Toggle
        document.addEventListener('DOMContentLoaded', function() {
            const mobileMenuButton = document.getElementById('mobile-menu-button');
            const mobileMenu = document.getElementById('mobile-menu');

            mobileMenuButton.addEventListener('click', function() {
                mobileMenu.classList.toggle('hidden');
                document.body.classList.toggle('mobile-menu-open');
            });

            // Close mobile menu when clicking on a link
            const mobileLinks = mobileMenu.querySelectorAll('a');
            mobileLinks.forEach(link => {
                link.addEventListener('click', () => {
                    mobileMenu.classList.add('hidden');
                    document.body.classList.remove('mobile-menu-open');
                });
            });
        });

        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>
</body>

</html>
