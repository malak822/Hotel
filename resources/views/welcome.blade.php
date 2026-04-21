@extends('layouts.hotel')
@section('title', 'hotel')
@section('content')
<!-- الفيديو + العنوان + الزر في الرئيسية فقط -->
<div class="relative h-screen">
    <video autoplay muted loop playsinline class="absolute inset-0 w-full h-full object-cover">
        <source src="https://videos.hyatt.com/centric_dxbcl_hotel_brand_video_0723.mp4" type="video/mp4">
    </video>
    <div class="absolute inset-0 bg-black bg-opacity-60"></div>

    <div class="relative h-full flex items-center justify-center text-center px-6">
        <div>
            <h1 class="text-6xl md:text-9xl font-bold mb-6 drop-shadow-2xl">
                HÔTEL HYATT CENTRIC
            </h1>
            <p class="text-3xl md:text-5xl mb-10 drop-shadow-2xl">
                Luxe absolu à DUBAI
            </p>
            <a href="/reservation" class="bg-amber-500 text-black px-16 py-6 text-2xl rounded-full font-bold hover:bg-amber-400">
                Réserver maintenant
            </a>
        </div>
    </div>
</div>

<!-- باقي المحتوى تحت الفيديو (اختياري) -->
<div class="py-20 text-center">
    <h2 class="text-5xl font-bold mb-10">Bienvenue dans le luxe</h2>
    <p class="text-2xl">Découvrez nos chambres, spa, restaurant...</p>
</div>
    </div>
@endsection