@if(env('WHATSAPP_NUMBER'))
<div style="position: fixed; bottom: 20px; right: 20px; cursor: pointer; z-index: 99999999;">
    <a class="hidden md:flex" href="https://web.whatsapp.com/send?phone={{ env('WHATSAPP_NUMBER') }}&text=" target="_blank">
        <div>
            <div style="display:flex;justify-content: center;align-items: center;background-color:#e4e4e4;color:#222222;padding:0 12px;border-radius:25px;font-size:13px;line-height:32px;">
                <span style="margin:0 8px 0 -12px;;order:0;">
                    <img src="/images/whatsapp.svg"/>
                </span>
                <span>WhatsApp</span>
            </div>
        </div>
    </a>
    <a class="flex md:hidden" href="https://wa.me/{{ env('WHATSAPP_NUMBER') }}" target="_blank">
        <div>
            <div style="display:flex;justify-content: center;align-items: center;background-color:#e4e4e4;color:#222222;padding:0 12px;border-radius:25px;font-size:13px;line-height:32px;">
                <span style="margin:0 8px 0 -12px;;order:0;">
                    <img src="/images/whatsapp.svg"/>
                </span>
                <span>WhatsApp</span>
            </div>
        </div>
    </a>
</div>
@endif

<div class="w-full bg-gray-primary mt-12 text-black-primary">
    <div class="container pt-8 pb-4">
        <div class="flex flex-col md:flex-row gap-y-4 text-center md:text-left justify-between">
            <div class="w-full md:w-3/4 flex flex-col gap-4">
                <div class="logo"><img src="{{ asset('images/logo.png') }}" class="h-12"/></div>
                <p class="text-sm">Para más información o dudas acerca de nuestros servicios, nos ponemos a su disposición de Lunes a Domingo de 8:00 a 16:00 horas en los siguientes medios de contacto.</p>
                <div class="w-full flex flex-col md:flex-row gap-6">
                    <div class="w-full">
                        <p class="font-bold uppercase">Laboratorio</p>
                        <p><a href="tel:8124744933"><i class="text-red-primary fas fa-phone-alt"></i> 812 474 4933</a></p>
                        <p><a href="mailto:contacto@mavelsa.com"><i class="text-red-primary fas fa-envelope"></i> contacto@mavelsa.com</a></p>
                    </div>
                    <div class="w-full">
                        <p class="font-bold uppercase">Mavelsa Genetics</p>
                        <p><a href="tel:8132450996"><i class="text-red-primary fas fa-phone-alt"></i> 813 245 0996</a></p>
                        <p><a href="mailto:recepcion@mavelsagenetics.com"><i class="text-red-primary fas fa-envelope"></i> recepcion@mavelsagenetics.com</a></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-full text-sm my-8">
            {{ env('APP_NAME') }} © {{ date('Y') }}. Reservados todos los derechos.
        </div>
    </div>
</div>
