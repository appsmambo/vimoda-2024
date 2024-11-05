@extends('layouts.front')

@section('content')
    <!-- Bread Crumb STRAT -->
    <div class="banner inner-banner1 nosotros">
        <div class="container">
            <section class="banner-detail center-xs">
                <h1 class="banner-title">Nosotros</h1>
                <div class="bread-crumb right-side float-none-xs">
                    <ul>
                        <li><a href="{{ route('index') }}">Inicio</a>/</li>
                        <li><span>Nosotros</span></li>
                    </ul>
                </div>
            </section>
        </div>
    </div>
    <!-- Bread Crumb END -->

    <!-- CONTAIN START ptb-95-->
    <section class="ptb-95">
        <div class="container">
            <div class="row mb-40">
                <div class="col-md-6 col-sm-12">
                    <h3>Acerca de la tienda</h3>
                    <p>
                        VIMODA es una empresa 100% peruana, nace como parte del deseo de desarrollo y visión de crecimiento en proporcionar a la sociedad la opción de crear su propio negocio a través de la venta de calzado y accesorios por catálogo para damas, caballeros y niños(as).
                        <br><br>
                        Otorgamos la oportunidad de crear su propio negocio desde su domicilio, trabajo u otros espacios donde pueda realizar la labor de ejecutiva de venta, y generar ingresos que le permitan mejorar su nivel de vida y desarrollo personal. Tenemos presencia y cobertura en Lima y Provincias a través de la venta en línea deseando convertirnos en el líder de la ventas por Catálogo a nivel nacional con colaboradores comprometidos con los objetivos de crecimiento de la empresa.
                    </p>
                </div>
                <div class="col-md-6 col-sm-12">
                    <img src="{{ asset('images/nosotros.jpg') }}" class="img-rounded" alt="VimodaShoes">
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-md-4 mb-30">
                    <div class="heading-part align_left">
                        <h2 class="heading">
                            MISIÓN:
                        </h2>
                        <p>
                            Brindar comodidad, moda y estilo a nuestros clientes a nivel nacional a traves de un producto y servicio de calidad capaz de satisfacer su necesidad de forma oportuna y a un precio adecuado.
                        </p>
                    </div>
                </div>
                <div class="col-xs-12 col-md-4 mb-30">
                    <div class="heading-part align_left">
                        <h2 class="heading">
                            VISIÓN:
                        </h2>
                        <p>
                            Ser la empresa numero uno en ventas por catalogo en calzado y accesorios a nivel nacional, con colaboradores comprometidos con los objetivos de calidad y servicio a un buen precio.
                        </p>
                    </div>
                </div>
                <div class="col-xs-12 col-md-4 mb-30">
                    <div class="heading-part align_left">
                        <h2 class="heading">
                            NUESTRO COMPROMISO:
                        </h2>
                        <p>
                            Ofrecer productos de primera calidad, somos una tienda confiable y oportuna, que garantizan una adecuada atención al cliente; acorde con los avances de la moda con la finalidad de satisfacer las necesidades y expectativas de nuestros clientes y su grupo familiar en un ambiente agradable y en excelentes condiciones.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

  <!--Testimonial Block Start -->
  <section class="client-bg ptb-95 hide">
    <div class="top-shadow">
      <img alt="Eshoper" src="{{ asset('assets/images/top-shadow.png') }}">
    </div>
      <div class="container">
        <div class="row ">
          <div class="col-xs-12 ">
            <div class="heading-part align-center mb-30 mb-xs-15">
              <h2 class="main_title"><span>testimonials</span></h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="client-main client-bg">
              <div class="client-inner align-center">
                <div id="client" class="owl-carousel">
                  <div class="item client-detail">
                    <div class="client-img left-side mt-40">
                        <img alt="Eshoper" src="{{ asset('assets/images/testimonial_img1.jpg') }}">
                      <h4 class="sub-title client-title">- Joseph deboungawer - </h4>
                      <div class="designation">Maneger of Business  Development, 2base</div>
                    </div>
                    <div class="quote right-side">
                      <div class="quote1-img">
                        <img src="{{ asset('assets/images/quote1.png') }}" alt="Eshoper">
                      </div>
                      <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters
                      </p>
                      <div class="quote2-img">
                        <img src="{{ asset('assets/images/quote2.png') }}" alt="Eshoper">
                      </div>
                    </div>
                  </div>
                  <div class="item client-detail">
                    <div class="client-img left-side mt-40">
                        <img alt="Eshoper" src="{{ asset('assets/images/testimonial_img2.jpg') }}">
                      <h4 class="sub-title client-title">- Joseph deboungawer - </h4>
                      <div class="designation">Maneger of Business  Development, 2base</div>
                    </div>
                    <div class="quote-border right-side">
                      <div class="quote">
                        <div class="quote1-img">
                          <img src="{{ asset('assets/images/quote1.png') }}" alt="Eshoper">
                        </div>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters
                        </p>
                        <div class="quote2-img">
                          <img src="{{ asset('assets/images/quote2.png') }}" alt="Eshoper">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="item client-detail">
                    <div class="client-img left-side mt-40">
                        <img alt="Eshoper" src="{{ asset('assets/images/testimonial_img3.jpg') }}">
                      <h4 class="sub-title client-title">- Joseph deboungawer - </h4>
                      <div class="designation">Maneger of Business  Development, 2base</div>
                    </div>
                    <div class="quote right-side">
                      <div class="quote1-img">
                        <img src="{{ asset('assets/images/quote1.png') }}" alt="Eshoper">
                      </div>
                      <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters
                      </p>
                      <div class="quote2-img">
                        <img src="{{ asset('assets/images/quote2.png') }}" alt="Eshoper">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    <div class="bottom-shadow">
      <img alt="Eshoper" src="{{ asset('assets/images/bottom-shadow.png') }}">
    </div>
  </section>
  <!--Testimonial Block End -->

  <section class="ptb-95 hide">
    <div class="container">
      <div class="team-part team-opt-1">
        <div class="heading-part align-center mb-30 mb-xs-15">
          <h2 class="main_title"><span>Our Team</span></h2>
        </div>
        <div class="row mlr_-20">
          <div class="col-md-2 col-sm-4 col-xs-6 plr-20">
            <div class="team-item listing-effect col-sm-margin-b"> <img alt="Eshoper" src="{{ asset('assets/images/tm1.jpg') }}">
              <div class="team-item-detail">
                <h3 class="sub-title listing-effect-title">Adamaris Corliss</h3>
                <div class="listing-meta">Co-Founder</div>
                <div class="social_icon">
                  <ul>
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-2 col-sm-4 col-xs-6 plr-20">
            <div class="team-item listing-effect col-sm-margin-b"> <img alt="Eshoper" src="{{ asset('assets/images/tm2.jpg') }}">
              <div class="team-item-detail">
                <h3 class="sub-title listing-effect-title">Lusi Rose</h3>
                <div class="listing-meta">Project Manager</div>
                <div class="social_icon">
                  <ul>
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-2 col-sm-4 col-xs-6 plr-20">
            <div class="team-item listing-effect col-sm-margin-b"> <img alt="Eshoper" src="{{ asset('assets/images/tm3.jpg') }}">
              <div class="team-item-detail">
                <h3 class="sub-title listing-effect-title">Adamaris Corliss</h3>
                <div class="listing-meta">Co-Founder</div>
                <div class="social_icon">
                  <ul>
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-2 col-sm-4 col-xs-6 plr-20">
            <div class="team-item listing-effect col-sm-margin-b"> <img alt="Eshoper" src="{{ asset('assets/images/tm4.jpg') }}">
              <div class="team-item-detail">
                <h3 class="sub-title listing-effect-title">Adamaris Corliss</h3>
                <div class="listing-meta">Co-Founder</div>
                <div class="social_icon">
                  <ul>
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-2 col-sm-4 col-xs-6 plr-20">
            <div class="team-item listing-effect col-sm-margin-b"> <img alt="Eshoper" src="{{ asset('assets/images/tm1.jpg') }}">
              <div class="team-item-detail">
                <h3 class="sub-title listing-effect-title">Adamaris Corliss</h3>
                <div class="listing-meta">Co-Founder</div>
                <div class="social_icon">
                  <ul>
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-2 col-sm-4 col-xs-6 plr-20">
            <div class="team-item listing-effect col-sm-margin-b"> <img alt="Eshoper" src="{{ asset('assets/images/tm2.jpg') }}">
              <div class="team-item-detail">
                <h3 class="sub-title listing-effect-title">Lusi Rose</h3>
                <div class="listing-meta">Project Manager</div>
                <div class="social_icon">
                  <ul>
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- CONTAINER END -->
@endsection
