@component('mail::message')
    # Hola!

    Mensaje recibido desde la p&aacute;gina de contacto del sitio web.

    Nombre: {{ $msg['name'] }}

    Correo: {{ $msg['email'] }}

    Telefono: {{ $msg['phone'] }}

    Mensaje:
    {{ $msg['message'] }}

    @component('mail::button', ['url' => 'mailto:'.$msg['email']])
        Responder
    @endcomponent

    Gracias,<br>
    {{ config('app.name') }}
@endcomponent
