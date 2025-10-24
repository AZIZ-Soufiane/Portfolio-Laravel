<nav class="fixed top-0 w-full bg-white/90 backdrop-blur-md shadow-sm z-50 animate-fade-in">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <a href="index.html" class="text-2xl font-bold gradient-text">Soufiane</a>
                <div class="hidden md:flex space-x-8">
                    <a href="{{ route('home') }}" class="nav-link text-gray-700 hover:text-blue-600 font-medium">Home</a>
                    <a href="{{ route('about') }}" class="nav-link text-gray-700 hover:text-blue-600 font-medium">About</a>
                    <a href="{{ route('projects') }}" class="nav-link text-gray-700 hover:text-blue-600 font-medium">Projects</a>
                </div>
                <button id="mobile-menu-btn" class="md:hidden text-gray-700">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>

        <div id="mobile-menu" class="hidden md:hidden bg-white border-t">
            <div class="px-4 py-3 space-y-3">
                <a href="index.html" class="block text-gray-700 hover:text-blue-600 font-medium">Home</a>
                <a href="about.html" class="block text-gray-700 hover:text-blue-600 font-medium">About</a>
                <a href="projects.html" class="block text-gray-700 hover:text-blue-600 font-medium">Projects</a>
            </div>
        </div>
    </nav>