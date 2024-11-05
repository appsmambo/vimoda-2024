<!-- FOOTER START -->
<div class="footer">
    <div class="container">
        <div class="footer-inner">
            <div class="footer-top">
                <div class="row">
                    <div class="col-md-4 col-lg-3 f-col footer-middle-left">
                        <div class="f-logo">
                            <a href="index.html" class="">
                                <img src="{{ asset('assets/images/logo-secondary.png') }}" alt="Eshoper">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-8 col-lg-9 footer-middle-right">
                        <div class="row">
                            <div class="col-md-4 f-col">
                                <div class="footer-static-block">
                                    <h3 class="title">Menú <span></span></h3>
                                    <ul class="footer-block-contant link">
                                        @if (Route::current()->getName() != 'index')
                                        <li>
                                            <a href="{{ route('index') }}">
                                                Inicio
                                            </a>
                                        </li>
                                        @endif
                                        <li class="@if (Route::current()->getName() == 'catalogo') active @endif">
                                            <a href="{{ route('catalogo') }}">
                                                Catálogos
                                            </a>
                                        </li>
                                        <li class="@if (Route::current()->getName() == 'nosotros') active @endif">
                                            <a href="{{ route('nosotros') }}">
                                                Nosotros
                                            </a>
                                        </li>
                                        <li class="@if (Route::current()->getName() == 'contactos') active @endif">
                                            <a href="{{ route('contactos') }}">
                                                Contactos
                                            </a>
                                        </li>
                                        <li class="@if (Route::current()->getName() == 'emprende') active @endif">
                                            <a href="{{ route('emprende') }}">
                                                Emprende
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                Tienda Virtual
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4 f-col">
                                <div class="footer-static-block">
                                    <h3 class="title">Info <span></span></h3>
                                    <ul class="footer-block-contant address-footer">
                                        <li class="item"> <i class="fa fa-map-marker"> </i>
                                            <p>
                                                Jr. Ucayali Nro. 439 Pasaje Ucayali
                                                <br>
                                                Centro Comercial
                                                <br>
                                                (cruce entre Abancay y Ucayali)
                                                <br>
                                                Lima - Lima - Lima
                                            </p>
                                        </li>
                                        <li class="item">
                                            <i class="fa fa-envelope"> </i>
                                            <p>
                                                <a href="mailto:ventasonline@vimodashoes.pe">
                                                    ventasonline@vimodashoes.pe
                                                </a>
                                            </p>
                                        </li>
                                        <li class="item">
                                            <i class="fa fa-phone"> </i>
                                            <p>
                                                (+51) 960 503 821
                                                <br>
                                                (+51) 01 7130530
                                            </p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4 f-col">
                                <div class="footer-static-block">
                                    <h3 class="title">Links <span></span></h3>
                                    <div class="footer_social pt-xs-15 center-sm">
                                        <ul class="social-icon">
                                            <li><a href="https://www.facebook.com/vimoda.ofi" title="Facebook" class="facebook" target="_blank"><i class="fa fa-facebook"> </i></a></li>
                                            <li><a href="https://www.instagram.com/vimoda_oficial/" title="Instagram" class="instagram" target="_blank"><i class="fa fa-instagram"> </i></a></li>
                                            <li><a href="#" title="WhatsApp" class="whatsapp" target="_blank"><i class="fa fa-whatsapp"> </i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="footer-bottom">
                <div class="row">
                    <div class="col-xs-12 align-center">
                        <div class="copy-right ">
                            © 2024 Vimoda New Fashion
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="scroll-top">
        <div id="scrollup"></div>
    </div>
  <!-- FOOTER END -->
