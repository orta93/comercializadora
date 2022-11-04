@extends('layout')

@section('content')
    <div class="bg-blue-primary pt-64 pb-24 font-bold text-5xl text-white">
        <div class="container">
            Categorías
        </div>
    </div>
    @php
        $categories = [
            [
                'title' => 'Acetatos y Guardas',
                'content' => 'Acetatos para la formación de guardas y/o protectores bucales',
                'image' => '/images/ACETATOS-1.png',
                'route' => '#',
                'color' => '#54595f'
            ],
            [
                'title' => 'Aislamientos y Abrebocas',
                'content' => 'Membrana de látex natural utilizado para aislar el diente',
                'image' => '/images/AISLAMIENTO.png',
                'route' => '#',
                'color' => '#d0cbe1'
            ]
        ];
    @endphp
    <div class="container my-4">
        <div class="w-full text-center uppercase text-lg my-2">Elige la categoria que deseas</div>
        <div class="w-full text-center text-4xl font-bold my-4">Compra por categoria</div>
        <div class="grid gap-6 grid-cols-1 md:grid-cols-2 gap-5">
            @foreach($categories as $key => $category)
                <div class="rounded" style="background-color: {{ $category['color'] }}">
                    <div class="flex flex-col-reverse @if($key % 2 == 0){{ 'md:flex-row' }}@else {{ 'md:flex-row-reverse' }}@endif h-full items-end">
                        <img src="{{ $category['image'] }}" class="w-1/2 md:w-1/3 mx-auto"/>
                        <div class="w-full md:w-2/3 flex flex-col gap-4 text-white p-6 text-center @if($key % 2 == 0){{ 'md:text-right' }}@else {{ 'md:text-left' }}@endif">
                            <p class="font-bold text-4xl">{{ $category['title'] }}</p>
                            <p class="text-sm">{{ $category['content'] }}</p>
                            <p class="underline pb-2 text-lg"><a href="{{ $category['route'] }}">Ver mas</a></p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
