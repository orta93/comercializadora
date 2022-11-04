<div class="w-full bg-blue-primary z-50">
    <div class="container flex justify-between py-4">
        <div class="logo"><a href="/"><img src="{{ asset('images/logo-vector.png') }}" class="h-12"/></a></div>
        <div class="hidden md:flex gap-6 items-center font-bold">
            <div><a class="hover:text-white" href="{{ route('home') }}">Inicio</a></div>
            <div><a class="hover:text-white" href="{{ route('categories') }}">Categorias</a></div>
            <div><a class="hover:text-white" href="{{ route('about') }}">Acerca de</a></div>
            <div><a class="hover:text-white" href="{{ route('contact') }}">Contacto</a></div>
        </div>
    </div>
</div>
