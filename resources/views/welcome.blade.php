<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uganda Airlines Cargo Tracking</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
    <!-- Navigation -->
    @if (Route::has('login'))
    <nav class="bg-white shadow-md">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <div class="shrink-0">
                        <img class="h-8 w-auto" src="{{ asset('logo.jpg') }}" alt="Uganda Airlines">
                    </div>
                </div>
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex ml-auto">
                    <a href="#about" class="text-gray-500 hover:text-gray-700 focus:text-gray-700">About Us</a>
                    <a href="#services" class="text-gray-500 hover:text-gray-700 focus:text-gray-700">Services</a>
                    @auth
                    <a href="{{ url('/dashboard') }}" class="text-gray-500 hover:text-gray-700 focus:text-gray-700">Dashboard</a>
                    @else
                    <a href="{{ route('login') }}" class="text-gray-500 hover:text-gray-700 focus:text-gray-700">Login</a>
                    @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="text-gray-500 hover:text-gray-700 focus:text-gray-700">Register</a>
                </div>
            </div>
        </div>
        @endif
        @endauth
    </nav>
    @endif

    <!-- Hero Section -->
    <header class="bg-cover bg-center h-96" style="background-image: url('{{ asset('cargo4.jpg') }}');">
        <div class="flex items-center justify-center h-full bg-blue-900 bg-opacity-50">
            <div class="text-center">
                <h1 class="text-black text-4xl font-bold">Welcome to Uganda Airlines Cargo Tracking</h1>
                <p class="text-black mt-4">Efficient and reliable cargo tracking at your fingertips.</p>
                <a href="{{ route('register') }}" class="mt-6 inline-block bg-blue-500 text-black px-6 py-3 rounded-full">Get Started</a>
            </div>
        </div>
    </header>

    <!-- About Section -->
    <main class="mt-8">
        <section id="about" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-gray-800">About Uganda Airlines</h2>
            <p class="mt-4 text-gray-600">
                Uganda Airlines is dedicated to providing the best air cargo services. We ensure that your packages are delivered safely and on time. Our state-of-the-art tracking system allows you to keep track of your cargo every step of the way.
            </p>
        </section>

        <!-- Services Section -->
        <section id="services" class="mt-12 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-gray-800">Our Services</h2>
            <div class="mt-6 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <img src="{{ asset('cargo2.jpg') }}"  class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold">Real Time Tracking</h3>
                        <p class="mt-2 text-gray-600">Provide real-time updates on the status and location of cargo throughout its journey.</p>
                    </div>
                </div>
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <img src="{{ asset('cargo3.jpg') }}"  class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold">Cargo History</h3>
                        <p class="mt-2 text-gray-600"> Be able to view previous cargo history</p>
                    </div>
                </div>
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <img src="{{ asset('cargo1.jpg') }}"  class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold">Secure Handling</h3>
                        <p class="mt-2 text-gray-600">Ensure secure handling of cargo to minimize damage and loss during transit.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Testimonials Section -->
        <section id="testimonials" class="mt-12 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-gray-800">Testimonials</h2>
            <div class="mt-6 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="bg-white shadow-md rounded-lg p-6">
                    <p class="text-gray-600">"Uganda Airlines cargo tracking is the best service I've used. My packages are always on time!"</p>
                    <div class="mt-4">
                        <h4 class="text-lg font-semibold">John Doe</h4>
                    </div>
                </div>
                <div class="bg-white shadow-md rounded-lg p-6">
                    <p class="text-gray-600">"Highly recommend Uganda Airlines for their reliable and efficient cargo services."</p>
                    <div class="mt-4">
                        <h4 class="text-lg font-semibold">Jane Smith</h4>
                    </div>
                </div>
                <div class="bg-white shadow-md rounded-lg p-6">
                    <p class="text-gray-600">"Excellent service and great customer support!"</p>
                    <div class="mt-4">
                        <h4 class="text-lg font-semibold">Mike Johnson</h4>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 mt-12 py-6">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center text-white">
            &copy; 2024 Uganda Airlines. All rights reserved.
        </div>
    </footer>

    @vite('resources/js/app.js')
</body>
</html>