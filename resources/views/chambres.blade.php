@extends('layouts.hotel')
@section('title', 'chambres')

@section('content')
<div class="py-32 bg-gray-900">
    <div class="container mx-auto px-6 text-center">
        <h1 class="text-6xl md:text-8xl font-bold mb-6 text-amber-400 drop-shadow-2xl">
            Nos Chambres & Suites
        </h1>
        <p class="text-2xl md:text-3xl text-gray-300 mb-20">
            Luxe absolu • Confort • Vue imprenable
        </p>

        <!-- الغرف -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12 max-w-7xl mx-auto">

            <!-- غرفة 1 -->
            <div class="group relative overflow-hidden rounded-2xl shadow-2xl hover:shadow-amber-500/50 transition-all duration-500">
                <img src="https://images.unsplash.com/photo-1631049307264-da0ec9d70304?w=800&q=80" 
                     alt="Suite Royale" class="w-full h-96 object-cover group-hover:scale-110 transition duration-700">
                <div class="absolute inset-0 bg-gradient-to-t from-black via-transparent to-transparent opacity-80"></div>
                <div class="absolute bottom-8 left-8 text-left">
                    <h3 class="text-4xl font-bold mb-2">Suite Royale</h3>
                    <p class="text-amber-400 text-3xl font-bold">18 000 DA <span class="text-lg text-gray-300">/ nuit</span></p>
                    <a href="/reservation" class="mt-6 inline-block bg-amber-500 text-black px-8 py-4 rounded-full font-bold hover:bg-amber-400 transition">
                        Réserver
                    </a>
                </div>
            </div>

            <!-- غرفة 2 -->
            <div class="group relative overflow-hidden rounded-2xl shadow-2xl hover:shadow-amber-500/50 transition-all duration-500">
                <img src="https://assets.hyatt.com/content/dam/hyatt/hyattdam/images/2023/03/24/0637/DXBCL-P0247-Deluxe-Room-Sitting-Area-Into-Bedroom.jpg/DXBCL-P0247-Deluxe-Room-Sitting-Area-Into-Bedroom.16x9.jpg" 
                     alt="Chambre Deluxe" class="w-full h-96 object-cover group-hover:scale-110 transition duration-700">
                <div class="absolute inset-0 bg-gradient-to-t from-black via-transparent to-transparent opacity-80"></div>
                <div class="absolute bottom-8 left-8 text-left">
                    <h3 class="text-4xl font-bold mb-2">Chambre Deluxe</h3>
                    <p class="text-amber-400 text-3xl font-bold">9 500 DA <span class="text-lg text-gray-300">/ nuit</span></p>
                    <a href="/reservation" class="mt-6 inline-block bg-amber-500 text-black px-8 py-4 rounded-full font-bold hover:bg-amber-400 transition">
                        Réserver
                    </a>
                </div>
            </div>

            <!-- غرفة 3 -->
            <!-- غرفة 3 – الفيديو تاعك (النصوص داخل إطار الفيديو تمامًا) -->
            <div class="group relative rounded-3xl overflow-hidden shadow-2xl">
                <video autoplay muted loop playsinline 
                       class="w-full h-96 object-cover group-hover:scale-110 transition duration-700">
                    <source src="{{ asset('videos/Recording 2025-12-06 235454.mp4') }}" type="video/mp4">
                </video>

                <!-- نفس الطبقة + النصوص داخل إطار الفيديو زي الصور -->
               <div class="absolute bottom-0 left-0 right-0 bg-black/60 p-6 text-center">
                    <h3 class="text-3xl font-bold mb-2">Famille</h3>
                    <p class="text-amber-400 text-2xl font-bold">25 000 DA / nuit</p>
                    <a href="/reservation" class="mt-4 inline-block bg-amber-500 text-black px-10 py-3 rounded-full font-bold">
                        Réserver
                    </a>
                </div>
            </div>
        </div>

        <div class="mt-20">
            <a href="/reservation" class="bg-amber-500 text-black px-16 py-6 text-3xl rounded-full font-bold hover:bg-amber-400 transition inline-block">
                Voir toutes les chambres
            </a>
        </div>
    </div>
</div>
@endsection