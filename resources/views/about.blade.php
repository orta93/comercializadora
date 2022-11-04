@extends('layout')

@section('content')
    <div class="bg-blue-primary pt-64 pb-24 font-bold text-5xl text-white">
        <div class="container">
            Acerca de {{ env('APP_NAME') }}
        </div>
    </div>
    <div class="container my-6 flex flex-col md:flex-row items-center">
        <div class="w-full">
            <div class="font-bold text-4xl my-6">{{ env('APP_NAME') }}</div>
            <div>
                Somos una empresa mexicana, líder en distribución de productos dentales a nivel nacional. {{ env('APP_NAME') }} tiene el firme propósito de satisfacer las demandas del sector odontológico; por ello distribuimos una amplia gama de productos de marcas mundialmente reconocidas y premiadas.
                <br>
                <br>
                Cuidamos detalladamente nuestros productos y servicios; por ello, solicitamos a nuestros proveedores certificaciones en sus procesos de control de calidad para garantizar el apoyo a los odontólogos.
            </div>
        </div>
        <div class="w-full">
            <iframe src="https://www.youtube.com/embed/hFb0p8qBzN0" class="h-60 w-full" title="MAVELSA COVID TEST - ZAMNA TULUM 2022" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>
    @php
        $values = [
            [
                'title' => 'Integridad',
                'content' => 'Nos comprometemos con la calidad en cada uno de nuestros productos.',
                'icon' => 'images/integridad.svg'
            ],
            [
                'title' => 'Convivencia',
                'content' => 'Fomentamos el trabajo en equipo dentro de VAMASA con actividades de integración.',
                'icon' => 'images/convivencia.svg'
            ],
            [
                'title' => 'Respeto',
                'content' => 'El Respeto es primordial para nosotros en la relación con proveedores y clientes.',
                'icon' => 'images/respeto.svg'
            ]
        ];
    @endphp
    <div class="container my-32">
        <div class="w-full text-center uppercase text-lg my-2">EN {{ env('APP_NAME') }} BUSCAMOS SER UNA EMPRESA HUMANA</div>
        <div class="w-full text-center text-4xl font-bold my-12">Conoce nuestros valores</div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-12 mt-12">
            @foreach($values as $value)
            <div class="text-center md:text-left flex flex-col gap-3">
                <p class="h-24 max-h-24"><img src="{{ $value['icon'] }}" class="w-20"/></p>
                <p class="font-bold text-3xl">{{ $value['title'] }}</p>
                <p>{{ $value['content'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
@endsection
