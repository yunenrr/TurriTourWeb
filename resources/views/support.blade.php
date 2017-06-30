@extends('masterpage.app')

@section('body')
<section class="banner banner-inner parallax" data-stellar-background-ratio="0.5" id="banner-contact">
    <div class="banner-text">
        <div class="center-text">
            <div class="container">
                <h1>Contáctanos</h1>
                <strong class="subtitle">Realiza comentarios o evacua dudas sobre nuestro sistema </strong>
                <nav class="breadcrumbs">
                    <ul>
                        <li><a href="/">Inicio</a></li>
                        <li><span>Soporte</span></li>
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
                        <div class="col-md-6 wow fadeInLeft"> 
                            <fieldset>
                                <div class="centered">
                                    <h2 class="intro-heading">Nuestra Ubicación</h2>
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m21!1m12!1m3!1d7889.40621095499!2d-70.23299216136742!3d8.624475075086659!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m6!3e6!4m0!4m3!3m2!1d8.626995899999999!2d-70.2301559!5e0!3m2!1ses-419!2sve!4v1456756695234" style="border:0" allowfullscreen="" frameborder="0" height="100%" width="100%"></iframe>
                                </div>
                            </fieldset>
                        </div>

                        <div class="col-md-6 wow fadeInLeft">
                            <form method="post" action="/sendemail" class="contact-form has-border" id="contact_form" name="contact_form" >
                                {{ csrf_field() }}
                                <fieldset>
                                    <div class="form-group">
                                        <label class="control-label" for="name">Nombre:</label>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Introduzca su name" required autofocus />
                                    </div>            
                                    <div class="form-group">
                                        <label class="control-label" for="email">Correo:</label>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Introduzca su email electrónico" required />
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="msg">Mensaje:</label>
                                        <textarea rows="5" cols="30" class="form-control" id="msg" name="msg" placeholder="Introduzca su message" required ></textarea>
                                    </div>
                                    <div class="form-group">                
                                        <input type="submit" class="btn btn-primary" value="Enviar">
                                    </div>
                                    <div id="respuesta" style="display: none;"></div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection