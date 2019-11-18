<div id="fourth" class="parallax">
    <div class="container inner text-center">
        <div class="section-title">¿Quieres más información? <span>Déjanos tu correo y te notificaremos de las novedades.</span>
        </div>
        {!! Form::open(['route'=>'mail', 'class' => 'form-inline newsletter', 'role' => 'form', 'id' => 'newsletter', 'method' => 'POST']) !!}
        @honeypot
        <div>
            <label class="sr-only" for="exampleInputEmail">Email address</label>
            <input type="email" name="correo" class="form-control" id="exampleInputEmail"
                   placeholder="Ingresa tu email">
        </div>
        {!! Form::submit('Enviar', ['class'=>'btn btn-default btn-submit']) !!}
        {!! Form::close() !!}
    </div>
</div>