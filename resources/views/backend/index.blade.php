@extends('layouts.front')

@section('content')
<div class="container">
    <section class="ptb-95 client-main align-center">
        <div class="container">
            <div class="contact-info">
                <div class="row mb-40">
                    <div class="col-sm-4 p-0 mb-20">
                        <div class="contact-box">
                            <a href="{{ route('index') }}" target="_blank">
                                <i class="fa fa-home fa-5x primary-color"></i>
                                <span><b>Ir a la Web</b></span>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4 p-0 mb-20">
                        <div class="contact-box">
                            <a href="{{ route('admin.home') }}">
                                <i class="fa fa-image fa-5x primary-color"></i>
                                <span><b>Banners del Home</b></span>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4 p-0 mb-20">
                        <div class="contact-box">
                            <a href="{{ route('admin.catalogo') }}">
                                <i class="fa fa-book fa-5x primary-color"></i>
                                <span><b>Página Catálogos</b></span>
                            </a>
                        </div>
                    </div>

                    <div class="col-sm-4 p-0 mb-20 hidden">
                        <div class="contact-box">
                            <i class="fa fa-users fa-5x primary-color"></i>
                            <span><b>Página Nosotros</b></span>
                        </div>
                    </div>
                    <div class="col-sm-4 p-0 mb-20 hidden">
                        <div class="contact-box">
                            <i class="fa fa-user fa-5x primary-color"></i>
                            <span><b>Página Contactos</b></span>
                        </div>
                    </div>
                    <div class="col-sm-4 p-0 mb-20 hidden">
                        <div class="contact-box">
                            <i class="fa fa-user-plus fa-5x primary-color"></i>
                            <span><b>Página Emprende</b></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
