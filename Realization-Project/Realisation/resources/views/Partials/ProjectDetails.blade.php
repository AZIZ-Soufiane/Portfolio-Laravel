  <section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-white rounded-xl shadow-lg overflow-hidden">
            <img src="{{ asset($project['image']) }}" alt="{{ $project['title'] }}" class="w-full h-96 object-cover">
            <div class="p-8">
                <h1 class="text-4xl font-bold text-gray-900 mb-4">{{ $project['title'] }}</h1>
                <div class="flex flex-wrap gap-2 mb-6">
                    @foreach($project['technologies'] as $tech)
                        @php $techInfo = App\Services\TechnologyService::get($tech); @endphp
                        <span class="px-3 py-1 rounded-full text-sm font-medium" 
                              style="background-color: {{ $techInfo['color'] }}20; color: {{ $techInfo['color'] }}">
                            {{ $techInfo['name'] }}
                        </span>
                    @endforeach
                </div>
                <p class="text-gray-600 leading-relaxed mb-8">{{ $project['description'] }}</p>
                <a href="{{ route('projects') }}" 
                   class="inline-block px-6 py-2 bg-gradient-to-r from-blue-600 to-purple-600 text-white font-semibold rounded-lg hover:shadow-lg transition-all duration-300">
                    Back to Projects
                </a>
            </div>
        </div>
    </div>
  </section>