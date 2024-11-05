@extends('layouts.front')

@section('content')
    <!-- Bread Crumb STRAT -->
    <div class="banner inner-banner1 catalogo">
        <div class="container">
            <section class="banner-detail center-xs">
                <h1 class="banner-title">Catálogos</h1>
                <div class="bread-crumb right-side float-none-xs">
                    <ul>
                        <li><a href="{{ route('index') }}">Inicio</a>/</li>
                        <li><span>Catálogos</span></li>
                    </ul>
                </div>
            </section>
        </div>
    </div>
    <!-- Bread Crumb END -->

    <!-- CONTAIN START ptb-95-->
    <section class="ptb-95">
        <div class="container">
            <div class="product-listing">
                <div class="inner-listing">
                    <div class="row mlr_-20">
                        @foreach ($catalogos as $catalogo)
                        @php
                            $createdAt = strtotime($catalogo->created_at);
                        @endphp
                        <div class="col-md-4 col-xs-6 plr-20 mb-30">
                            <div class="product-item">
                                <div class="new-label {{ $createdAt < $prevMonth ? 'hide' : '' }}" date-prevMonth="{{ $prevMonth }}"><span>NUEVO</span></div>
                                <div class="product-image">
                                    <a href="{{ $catalogo->enlace }}" target="_blank" title="{{ $catalogo->titulo }}">
                                        <img alt="{{ $catalogo->titulo }}" src="{{ Storage::url($catalogo->imagen) }}">
                                    </a>
                                </div>
                                <div class="product-item-details">
                                    <div class="product-item-name">
                                        <a href="{{ $catalogo->enlace }}" target="_blank" title="{{ $catalogo->titulo }}">
                                            {{ $catalogo->titulo }}
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
