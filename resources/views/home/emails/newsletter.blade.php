@component('mail::message')
    # Hola!

    Una persona ha dejado su correo para obtener mas información: {{ $msg['correo'] }}.

    @component('mail::button', ['url' => 'mailto:'.$msg['correo']])
        Responder
    @endcomponent

    Gracias,<br>
    {{ config('app.name') }}
@endcomponent
