@extends('layouts.hotel')
@section('title', 'services')

@section('content')
<div class="py-32 bg-gray-900">
    <div class="container mx-auto px-6 text-center">
        <h1 class="text-6xl md:text-8xl font-bold mb-6 text-amber-400 drop-shadow-2xl">
            Services & Facilities
        </h1>
        <p class="text-2xl md:text-3xl text-gray-300 mb-20">
            Tout le luxe dont vous avez besoin
        </p>

        <!-- الخدمات في جريد فخم -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12 max-w-7xl mx-auto">

            <!-- 1. المسبح -->
            <div class="group relative overflow-hidden rounded-2xl shadow-2xl hover:shadow-amber-500/50 transition-all duration-500">
                <img src="{{ asset('images/Screenshot 2025-12-06 224749.png') }}" alt="Piscine" class="w-full h-96 object-cover group-hover:scale-110 transition duration-700">
                <div class="absolute inset-0 bg-gradient-to-t from-black via-transparent to-transparent opacity-80"></div>
                <div class="absolute bottom-8 left-8 text-left">
                    <h3 class="text-4xl font-bold mb-2">Piscine Infinie</h3>
                    <p class="text-gray-300 text-lg">Piscine extérieure chauffée – Vue panoramique</p>
                </div>
            </div>

            <!-- 2. الجيم -->
            <div class="group relative overflow-hidden rounded-2xl shadow-2xl hover:shadow-amber-500/50 transition-all duration-500">
                <img src="https://images.unsplash.com/photo-1534438327276-14e5300c3a48?w=800&q=80" alt="Gym" class="w-full h-96 object-cover group-hover:scale-110 transition duration-700">
                <div class="absolute inset-0 bg-gradient-to-t from-black via-transparent to-transparent opacity-80"></div>
                <div class="absolute bottom-8 left-8 text-left">
                    <h3 class="text-4xl font-bold mb-2">Salle de Sport</h3>
                    <p class="text-gray-300 text-lg">Technogym – Coach personnel – 24h/24</p>
                </div>
            </div>

            <!-- 3. السبا -->
            <div class="group relative overflow-hidden rounded-2xl shadow-2xl hover:shadow-amber-500/50 transition-all duration-500">
                <img src="{{ asset('images/condado.jpg') }}" alt="Spa" class="w-full h-96 object-cover group-hover:scale-110 transition duration-700">
                <div class="absolute inset-0 bg-gradient-to-t from-black via-transparent to-transparent opacity-80"></div>
                <div class="absolute bottom-8 left-8 text-left">
                    <h3 class="text-4xl font-bold mb-2">Spa & Hammam</h3>
                    <p class="text-gray-300 text-lg">Massages – Sauna – Jacuzzi – Soins du visage</p>
                </div>
            </div>

            <!-- 4. المطعم -->
            <div class="group relative overflow-hidden rounded-2xl shadow-2xl hover:shadow-amber-500/50 transition-all duration-500">
                <img src="{{ asset('images/Screenshot 2025-12-06 230345.png') }}" alt="Restaurant" class="w-full h-96 object-cover group-hover:scale-110 transition duration-700">
                <div class="absolute inset-0 bg-gradient-to-t from-black via-transparent to-transparent opacity-80"></div>
                <div class="absolute bottom-8 left-8 text-left">
                    <h3 class="text-4xl font-bold mb-2">Restaurant Le Gourmet</h3>
                    <p class="text-gray-300 text-lg">Cuisine française & méditerranéenne – Chef étoilé</p>
                </div>
            </div>
              <!-- 5. البار -->
             <div class="group relative overflow-hidden rounded-2xl shadow-2xl hover:shadow-amber-500/50 transition-all duration-500">
                <img src="{{ asset('images/Screenshot 2025-12-06 230345.png') }}" alt="Restaurant" class="w-full h-96 object-cover group-hover:scale-110 transition duration-700">
                <div class="absolute inset-0 bg-gradient-to-t from-black via-transparent to-transparent opacity-80"></div>
                <div class="absolute bottom-8 left-8 text-left">
                    <h3 class="text-4xl font-bold mb-2">Restaurant Le Gourmet</h3>
                    <p class="text-gray-300 text-lg">Cuisine française & méditerranéenne – Chef étoilé</p>
                </div>
            </div>

            <!-- 6. قاعة الاجتماعات -->
            <div class="group relative overflow-hidden rounded-2xl shadow-2xl hover:shadow-amber-500/50 transition-all duration-500">
                <img src="{{ asset('images/Screenshot 2025-12-06 233301.png') }}" alt="Meeting Room" class="w-full h-96 object-cover group-hover:scale-110 transition duration-700">
                <div class="absolute inset-0 bg-gradient-to-t from-black via-transparent to-transparent opacity-80"></div>
                <div class="absolute bottom-8 left-8 text-left">
                    <h3 class="text-4xl font-bold mb-2">Salles de Réunion</h3>
                    <p class="text-gray-300 text-lg">Jusqu’à 200 personnes – Équipement high-tech</p>
                </div>
            </div>

        </div>


        <!-- زر في الأسفل -->
        <div class="mt-24">
            <a href="/reservation" class="bg-amber-500 text-black px-20 py-7 text-3xl rounded-full font-bold hover:bg-amber-400 transition inline-block shadow-2xl">
                Profiter de tous ces services
            </a>
        </div>
    </div>
</div>
@endsection