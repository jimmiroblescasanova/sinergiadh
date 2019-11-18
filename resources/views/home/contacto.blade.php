@extends('home.layouts.main')

@section('cuerpo')
    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1860.3891650108246!2d-86.84365979854515!3d21.161218184184282!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2smx!4v1567265669256!5m2!1ses-419!2smx"
                width="100%" height="600" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    </div>
    <div class="light-wrapper">
        <div class="container inner">
            <div class="row">
                <div class="col-sm-8">
                    <h1 class="post-title">Nos interesa tu opinion</h1>
                    <div class="divide20"></div>
                    <div class="form-container">
                        {{-- <div class="response alert alert-success"></div> --}}
                        @include('home.partials.errors')
                        {!! Form::open(['route'=>'home.contact.store', 'class' => 'forms', 'role' => 'form', 'method' => 'POST']) !!}
                        @honeypot
                        <fieldset>
                            <ol>
                                <li class="form-row text-input-row">
                                    <input type="text" name="name" class="text-input defaultText"
                                           placeholder="Nombre completo (Obligatorio)" value="{{ old('name') }}"/>
                                </li>
                                <li class="form-row text-input-row">
                                    <input type="email" name="email" class="text-input defaultText"
                                           placeholder="Email (Obligatorio)" value="{{ old('email') }}"/>
                                </li>
                                <li class="form-row text-input-row">
                                    <input type="text" name="phone" class="text-input defaultText"
                                           placeholder="Tel&eacute;fono (Opcional)" value="{{ old('phone') }}"/>
                                </li>
                                <li class="form-row text-area-row">
                                    <textarea name="message" class="text-area">{{ old('message') }}</textarea>
                                </li>
                                <li class="button-row">
                                    {!! Form::submit('Enviar', ['class'=>'btn btn-submit']) !!}
                                </li>
                            </ol>
                        </fieldset>
                        {!! Form::close() !!}
                    </div>
                    <!-- /.form-container -->
                </div>
                <!-- /.span8 -->
                <aside class="col-sm-4 sidebar lp20">
                    <div class="sidebox widget">
                        <h3>Dirección</h3>
                        <p>Estamos dispuestos a escuchar tus propuestas, ideas, sugerencias y cualquier feedback que
                            quieras compartir.</p>
                        <address>
                            <strong>Av. Chichen Itzá</strong><br>
                            Manzana 12, Lote 8, Depto. 13 <br>
                            SM 32, 77508<br>
                            <abbr title="Phone">P:</abbr> (123) 456-7890 <br>
                            <abbr title="Email">E:</abbr> <a href="mailto:#">first.last@email.com</a>
                        </address>
                    </div>
                    <!-- /.widget -->
                </aside>
                <!-- /.span4 -->
            </div>
            <!-- /.row -->

        </div>
    </div>
@endsection