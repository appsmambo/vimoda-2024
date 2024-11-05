@extends('layouts.front')

@section('content')
    <!-- Bread Crumb STRAT -->
    <div class="banner inner-banner1 ">
        <div class="container">
            <section class="banner-detail center-xs">
                <h1 class="banner-title">Ver Catálogo</h1>
                <div class="bread-crumb right-side float-none-xs">
                    <ul>
                        <li><a href="{{ route('index') }}">Inicio</a>/</li>
                        <li><a href="{{ route('catalogo') }}">Catálogos</a>/</li>
                        <li><span>Ver Catálogo</span></li>
                    </ul>
                </div>
            </section>
        </div>
    </div>
    <!-- Bread Crumb END -->

    <!-- CONTAIN START ptb-95-->
    <section class="ptb-95">
        <div class="container">

        </div>
    </section>
@endsection
