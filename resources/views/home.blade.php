@extends('layout')

@section('content')
    @php
    $stories = [
        [
            'img' => 'carousel1.jpg'
        ]
    ];
    @endphp
    <div>
        <vue-carousel :items='@json($stories)'/>
    </div>
    <div class="container my-4">
        <div class="w-full text-center text-2xl font-bold my-2">Quiénes somos</div>
        <div class="flex flex-col md:flex-row gap-5">
            <div class="w-full">
                <div class="font-bold text-xl">Nuestra Historia</div>
                <div>Mavelsa es una empresa...</div>
                <div class="font-bold text-xl">Nuestra Filosofía</div>
                <div>La misión de Mavelsa es...</div>
            </div>
            <div class="w-full">
                <img src="{{ asset('/images/laboratorio.jpg') }}" class="w-full"/>
            </div>
        </div>
    </div>
    <div class="my-4">
        @php
            $clients = [
                ['img' => 'Cliente-01.png'],
                ['img' => 'Cliente-02.png'],
                ['img' => 'Cliente-03.png'],
                ['img' => 'Cliente-04.png'],
                ['img' => 'Cliente-05.png'],
                ['img' => 'Cliente-06.png'],
                ['img' => 'Cliente-07.png'],
            ];
        @endphp
        <p class="w-full text-center text-2xl font-bold my-2">Clientes que confian en nosotros</p>
        <vue-carousel :items='@json($clients)' :total="5"/>
    </div>
    <div class="container my-4">
        <p class="w-full text-center text-2xl font-bold my-2">Conoce más de nosotros</p>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
            <div class="w-full shadow-lg flex flex-col cursor-pointer">
                <img src="{{ asset('/images/img-sostenibilidad-pleca.jpg') }}"/>
                <p class="text-center cursor-pointer my-3 font-bold">Sostenibilidad</p>
            </div>
            <div class="w-full shadow-lg flex flex-col cursor-pointer">
                <img src="{{ asset('/images/img-inversionistas-pleca.jpg') }}"/>
                <p class="text-center cursor-pointer my-3 font-bold">Inversionistas</p>
            </div>
            <div class="w-full shadow-lg flex flex-col cursor-pointer">
                <img src="{{ asset('/images/img-fundacion-pleca.jpg') }}"/>
                <p class="text-center cursor-pointer my-3 font-bold">Fundación</p>
            </div>
            <div class="w-full shadow-lg flex flex-col cursor-pointer">
                <img src="{{ asset('/images/img-acercade-pleca.jpg') }}"/>
                <p class="text-center cursor-pointer my-3 font-bold">Acerca de Mavelsa</p>
            </div>
        </div>
    </div>
@endsection
