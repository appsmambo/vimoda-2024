@extends('layouts.front')

@section('content')

    <!-- Bread Crumb STRAT -->
    <div class="banner inner-banner1 contacto">
        <div class="container">
            <section class="banner-detail center-xs">
                <h1 class="banner-title">Contactos</h1>
                <div class="bread-crumb right-side float-none-xs">
                    <ul>
                        <li><a href="{{ route('index') }}">Inicio</a>/</li>
                        <li><span>Contactos</span></li>
                    </ul>
                </div>
            </section>
        </div>
    </div>
    <!-- Bread Crumb END -->

    <section class="pt-95 client-main align-center">
        <div class="container">
          <div class="contact-info">
            <div class="row m-0">
              <div class="col-sm-4 p-0">
                <div class="contact-box">
                  <div class="contact-icon contact-phone-icon"></div>
                  <span><b>Teléfonos</b></span>
                  <p>+51 960 503 821 / +51 964 680 024</p>
                </div>
              </div>
              <div class="col-sm-4 p-0">
                <div class="contact-box">
                  <div class="contact-icon contact-mail-icon"></div>
                  <span><b>Correo</b></span>
                  <p>ventasonline@vimodashoes.pe</p>
                </div>
              </div>
              <div class="col-sm-4 p-0">
                <div class="contact-box">
                  <div class="contact-icon contact-open-icon"></div>
                  <span><b>Horario</b></span>
                  <p>Lunes a Sábado: 9:00 am a 8:00 PM</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    <section class="ptb-95">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3901.916295494139!2d-77.03102722493878!3d-12.049280088187675!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMTLCsDAyJzU3LjQiUyA3N8KwMDEnNDIuNCJX!5e0!3m2!1ses!2spe!4v1712559468620!5m2!1ses!2spe" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <div class="heading-part align-center mb-30 mb-xs-15">
                        <h2 class="main_title"><span>¡Escríbenos!</span></h2>
                        @isset($msg)
                        <h3 class="primary-color mtb-30">
                            {{ $msg }}
                        </h3>
                        @endisset
                    </div>
                    <div class="main-form">
                        <div class="row">
                          <form action="{{ route('email.index') }}" method="POST" name="contactform">
                            @csrf
                            <div class="col-xs-12 mb-30">
                              <input type="text" required placeholder="Nombre" name="nombre">
                            </div>
                            <div class="col-xs-12 mb-30">
                              <input type="email" required placeholder="Email" name="email">
                            </div>
                            <div class="col-xs-12 mb-30">
                              <input type="tel" required placeholder="Teléfono" name="telefono">
                            </div>
                            <div class="col-xs-12 mb-30">
                              <textarea required placeholder="Mensaje" rows="3" cols="30" name="mensaje"></textarea>
                            </div>
                            <div class="col-xs-12">
                              <div class="align-center">
                                <button type="submit" name="submit" class="btn-color btn">Enviar</button>
                              </div>
                            </div>
                          </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
