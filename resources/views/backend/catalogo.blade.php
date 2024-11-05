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
                                    <h2 class="heading">CATÁLOGOS</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 mb-sm-30">
                                <div class="cart-item-table complete-order-table commun-table mb-30">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th><a href="{{ route('admin.catalogo.new') }}"><i class="fa fa-plus-circle primary-color"></i> Nuevo Catálogo</a></th>
                                                    <th>Título / Enlace</th>
                                                    <th>&nbsp;</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @forelse ($catalogos as $catalogo)
                                                <tr>
                                                    <td>
                                                        <div class="product-image">
                                                            <img alt="{{ $catalogo->titulo }}" src="{{ Storage::url($catalogo->imagen) }}" width="120">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        {{ $catalogo->titulo }}
                                                        @if (!empty($catalogo->enlace))
                                                        <br>
                                                        <a target="_blank" href="{{ $catalogo->enlace }}">
                                                            {{ $catalogo->enlace }}
                                                        </a>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <form action="{{ route('admin.deleteCatalogo') }}" method="POST" onsubmit="return checkDelete();">
                                                            @csrf
                                                            <input type="hidden" name="id" value="{{ $catalogo->id }}">
                                                            <button type="submit" class="btn btn-danger"><i class="fa fa-ban fa-5x "></i></button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="3">No hay catálogos publicados.</td>
                                                </tr>
                                            @endforelse
                                            </tbody>
                                        </table>
                                    </div>
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
