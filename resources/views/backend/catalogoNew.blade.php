@extends('layouts.front')

@section('content')
<div class="container">
    <section class="checkout-section ptb-95">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="checkout-content">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="heading-part align-center">
                                    <h2 class="heading">SUBIR NUEVO CATÁLOGO</h2>
                                </div>
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 mb-sm-30">
                                <div class="cart-item-table complete-order-table commun-table mb-30">
                                    @if (session()->has('status'))
                                    <div class="alert alert-warning" role="alert">
                                        {{ session('status') }}
                                    </div>
                                    @endif
                                    <form action="{{ route('admin.sendCatalogo') }}" method="POST" class="main-form full" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row mt-30">
                                            <div class="col-xs-12 col-sm-6">
                                                <div class="input-box">
                                                    <label for="titulo">Título</label>
                                                    <input type="text" id="titulo" name="titulo" required value="{{ old('titulo') }}" maxlength="100" autofocus>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-6">
                                                <div class="input-box">
                                                    <label for="enlace">Enlace</label>
                                                    <input type="text" id="enlace" name="enlace" value="{{ old('enlace') }}" maxlength="100">
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-6">
                                                <div class="input-box">
                                                    <label for="catalogo">Portada del catálogo</label>
                                                    <input type="file" id="catalogo" name="catalogo" required accept="image/x-png,image/jpeg">
                                                    <span class="small text-danger">
                                                        Consideraciones:
                                                    </span>
                                                    <ol>
                                                        <li class="small text-danger">
                                                            Dimensiones: 750 x 1000 píxeles
                                                        </li>
                                                        <li class="small text-danger">
                                                            Peso máximo del archivo: 500 KB.
                                                        </li>
                                                        <li class="small text-danger">
                                                            Recuerda optimizar la portada del catálogo con la herramienta: <a href="https://tinypng.com/" target="_blank">tinify</a>
                                                        </li>
                                                    </ol>
                                                </div>
                                            </div>
                                            <div class="col-xs-12">
                                                <button name="submit" type="submit" class="btn-color right-side">Grabar</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
