@extends('masterpage.app')

@section('body')
<section class="banner banner-inner parallax" data-stellar-background-ratio="0.5" id="list-view-normal">
    <div class="banner-text">
        <div class="center-text">
            <div class="container">
                <h1>Inicio de sesión</h1>
                <strong class="subtitle">Ser un usuario registrado te proporsiona más opciones de navegación</strong> 
                <nav class="breadcrumbs">
                    <ul>
                        <li><a href="/logout">HOME</a></li>
                        <li><span>Session</span></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</section>

<main id="main">
    <section class="content-block bg-white">
        <div class="container">
            <header class="content-heading">
                <h2 class="main-heading">Esencial Costa Rica</h2>
                <span class="main-subtitle">LA ESENCIA SOS VOS, TODOS SOMOS.</span>
                <div class="seperator"></div>
            </header>

            <div class="adventure-holder gallery-home-holder">
                <div class="row">
                    <div class="row">
                        <!-- Formulario de ingreso -->
                        <div class="col-md-6 wow fadeInCenter">

                            {{ Form::open(array('url' => 'login','class' => 'contact-form has-border')) }}
                                <fieldset>
                                    <div class="top-box">
                                        <span class="holder height">Inicio de Sesión</span>
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label('user', 'Usuario:', array('class' => 'control-label')) }}
                                        {{ Form::text('user','', array('class' => 'form-control')) }}
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label('password', 'Contraseña:', array('class' => 'control-label')) }}
                                        {{ Form::password('password', array('class' => 'form-control')) }}
                                    </div>
                                    <div class="form-group">
                                        {{ Form::submit('Enviar', array('class' => 'btn btn-primary')) }}
                                    </div>
                                    @if(Session::has('msj_error'))
                                        <div class="alert alert-danger">
                                          <strong>¡Error!</strong> {{ Session::get('msj_error') }}
                                        </div>
                                    @endif
                                </fieldset>
                            {{ Form::close() }}
                        </div>

                        <div class="col-md-6 wow fadeInCenter ">
                            {{ Form::open(array('url' => 'signin','class' => 'contact-form has-border')) }}
                                <fieldset>
                                    <div class="top-box">
                                        <span class="holder height">Registro</span>
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label('name', 'Nombre:', array('class' => 'control-label')) }}
                                        {{ Form::text('name','', array('class' => 'form-control')) }}
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label('firstlastname', 'Primer apellido:', array('class' => 'control-label')) }}
                                        {{ Form::text('firstlastname','', array('class' => 'form-control')) }}
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label('secondlastname', 'Segundo apellido:', array('class' => 'control-label')) }}
                                        {{ Form::text('secondlastname','', array('class' => 'form-control')) }}
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label('email', 'Correo:', array('class' => 'control-label')) }}
                                        {{ Form::text('email','', array('class' => 'form-control')) }}
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label('password', 'Contraseña:', array('class' => 'control-label')) }}
                                        {{ Form::password('password', array('class' => 'form-control')) }}
                                    </div>

                                    {{ Form::hidden('profilphoto', 'http://qualiadesigns.com/wp-content/uploads/qdi-generic-testimonial-person.png') }}
                                    {{ Form::hidden('idroles',2) }}

                                    <div class="form-group">
                                        {{ Form::submit('Registrarse', array('class' => 'btn btn-primary')) }}
                                    </div>
                                    @if(Session::has('msjEmailExist'))
                                        <div class="alert alert-danger">
                                          <strong>¡Error!</strong> {{ Session::get('msjEmailExist') }}
                                        </div>
                                    @endif
                                    @if(Session::has('successRegister'))
                                        <div class="alert alert-success">
                                          <strong>Genial!</strong> {{ Session::get('successRegister') }}
                                        </div>
                                    @endif
                                </fieldset>

                                <div class="form-group"></div>
                            {{ Form::close() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection