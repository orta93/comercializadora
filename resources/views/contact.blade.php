@extends('layout')

@section('content')
    <div class="bg-blue-primary pt-64 pb-24 font-bold text-5xl text-white">
        <div class="container">
            Contáctanos
        </div>
    </div>
    @php
        $whatsapp = env('WHATSAPP_NUMBER');
        $values = [
            [
                'title' => 'Dirección',
                'content' => 'Av. Garza Sada 3001 L2, Plaza Eko, Alta Vista',
                'icon' => 'images/direction.svg',
                'link' => '#'
            ],
            [
                'title' => 'Teléfono',
                'content' => '812 474 4933',
                'icon' => 'images/phone.svg',
                'link' => 'tel:8124744933'
            ],
            [
                'title' => 'Email',
                'content' => 'contacto@mavelsa.com',
                'icon' => 'images/mail.svg',
                'link' => 'mailto:contacto@mavelsa.com'
            ],
            [
                'title' => 'Whatsapp',
                'content' => 'Chatea con nosotros',
                'icon' => 'images/whatsapp-i.svg',
                'link' => "https://web.whatsapp.com/send?phone=52{$whatsapp}&text="
            ]
        ];
    @endphp
    <div class="container mt-20 mb-6 flex flex-col md:flex-row items-center gap-6">
        <div class="w-full grid grid-cols-1 md:grid-cols-2 gap-6">
            @foreach($values as $value)
                <div class="flex flex-col gap-2">
                    <a href="{{ $value['link'] }}"><img src="{{ $value['icon'] }}" class="w-10 h-10"/></a>
                    <p class="font-bold">{{ $value['title'] }}</p>
                    <p>{{ $value['content'] }}</p>
                </div>
            @endforeach
            <div class="w-full col-span-1 md:col-span-2 flex flex-col gap-2">
                <p class="mt-6 font-bold text-xl">Envíanos un mensaje</p>
                <label for="name" class="text-sm uppercase">Nombre</label>
                <input type="text" class="w-full p-3 my-2 bg-gray-100 outline-none" placeholder="Ingresa tu nombre"/>
                <label for="name" class="text-sm uppercase">Correo Electrónico</label>
                <input type="email" class="w-full p-3 my-2 bg-gray-100 outline-none" placeholder="Ingresa tu email"/>
                <label for="name" class="text-sm uppercase">Correo Electrónico</label>
                <textarea class="w-full p-3 my-2 bg-gray-100 outline-none" placeholder="Ingresa tu mensaje" rows="6"></textarea>
                <div class="w-full flex flex-row-reverse">
                    <button type="button" class="text-white bg-black-primary p-4">Enviar</button>
                </div>
            </div>
        </div>
        <div class="w-full">
            <iframe src="https://www.google.com/maps/embed?pb=!1m13!1m8!1m3!1d3596.790550456321!2d-100.2904088!3d25.6450761!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMjXCsDM4JzQyLjMiTiAxMDDCsDE3JzE3LjYiVw!5e0!3m2!1ses-419!2smx!4v1667535851811!5m2!1ses-419!2smx" class="h-96 w-full" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
@endsection
