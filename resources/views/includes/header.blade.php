<!-- HEADER START -->
<header class="navbar navbar-custom " id="header">
    <!-- linea -top -->
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-xs-5">
                    <div class="top-link-left">
                        <ul>
                            <li>
                                <a href="mailto:ventasonline@vimodashoes.pe" title="Email">
                                    <i class="fa fa-envelope"></i>
                                    <span class="hidden-xs hidden-sm">ventasonline@vimodashoes.pe</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://api.whatsapp.com/send?phone=+51960503821" title="WhatsApp">
                                    <i class="fa fa-phone"></i>
                                    <span class="hidden-xs hidden-sm">Escríbenos: +51 960 503 821</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 col-xs-7">
                    <div class="right-side">
                        <div class="top-link-left">
                            <ul>
                                <li>
                                    <a href="#" title="Tiendas">
                                        <i class="fa fa-support"></i>
                                        <span class="hidden-xs hidden-sm">Encuentra nuestras tiendas</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-middle">
        <div class="container">
            <div class="header-inner">
                <div class="row">
                    <div class="col-md-3 col-xs-6">
                        <div class="navbar-header">
                            <a class="navbar-brand page-scroll" href="{{ route('index') }}">
                                <img alt="Eshoper" src="{{ asset('assets/images/logo-main.png') }}">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-9 col-sm-12 position-s float-none-sm">
                        <div id="menu" class="navbar-collapse collapse" >
                            <ul class="nav navbar-nav">

                                @if (str_contains(Route::current()->getName(), 'admin'))
                                <!-- menu backend -->
                                <li class="level @if (Route::current()->getName() == 'admin.index') active @endif">
                                    <a href="{{ route('admin.index') }}" class="page-scroll">
                                        Inicio
                                    </a>
                                </li>
                                <li class="level">
                                    <a href="{{ route('index') }}" target="_blank" class="page-scroll">
                                        Volver a la Web
                                    </a>
                                </li>
                                <li class="level">
                                    <a href="{{ url('/limpiar-temporales') }}" target="_blank" class="page-scroll">
                                        Limpiar temporales
                                    </a>
                                </li>
                                @else
                                <!-- menu frontend -->
                                @if (Route::current()->getName() != 'index')
                                <li class="level">
                                    <a href="{{ route('index') }}" class="page-scroll">
                                        Inicio
                                    </a>
                                </li>
                                @endif
                                <li class="level @if (Route::current()->getName() == 'catalogo') active @endif">
                                    <a href="{{ route('catalogo') }}" class="page-scroll">
                                        Catálogos
                                    </a>
                                </li>
                                <li class="level @if (Route::current()->getName() == 'nosotros') active @endif">
                                    <a href="{{ route('nosotros') }}" class="page-scroll">
                                        Nosotros
                                    </a>
                                </li>
                                <li class="level @if (Route::current()->getName() == 'contactos') active @endif">
                                    <a href="{{ route('contactos') }}" class="page-scroll">
                                        Contactos
                                    </a>
                                </li>
                                <li class="level @if (Route::current()->getName() == 'emprende') active @endif">
                                    <a href="{{ route('emprende') }}" class="page-scroll">
                                        Emprende
                                    </a>
                                </li>
                                <li class="level dropdown" style="display: none">
                                    <span class="opener plus"></span>
                                    <a class="page-scroll">Tienda Virtual</a>
                                    <div class="megamenu mobile-sub-menu">
                                        <div class="megamenu-inner-top">
                                            <ul class="sub-menu-level1">
                                                <li class="level2">
                                                    <ul class="sub-menu-level2 ">
                                                        <li class="level3"><a href="about.html"><span>■</span>About Us</a></li>
                                                        <li class="level3"><a href="account.html"><span>■</span>Account</a></li>
                                                        <li class="level3"><a href="checkout.html"><span>■</span>Checkout</a></li>
                                                        <li class="level3"><a href="compare.html"><span>■</span>Compare</a></li>
                                                        <li class="level3"><a href="wishlist.html"><span>■</span>Wishlist</a></li>
                                                        <li class="level3"><a href="contact.html"><span>■</span>Contact</a></li>
                                                        <li class="level3"><a href="404.html"><span>■</span>404 Error</a></li>
                                                        <li class="level3"><a href="blog.html"><span>■</span>Blog</a></li>
                                                        <li class="level3"><a href="single-blog.html"><span>■</span>Single Blog</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                @endif
                            </ul>
                        </div>
                        <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button"><i class="fa fa-bars"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
