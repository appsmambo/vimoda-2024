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
                                    <h2 class="heading">BANNERS EN HOME</h2>
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
                                                    <th><a href="{{ route('admin.home.new') }}"><i class="fa fa-plus-circle primary-color"></i> Nuevo Banner</a></th>
                                                    <th>Orden / Título / Enlace</th>
                                                    <th>Ocultar</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @forelse ($banners as $banner)
                                                <tr>
                                                    <td>
                                                        <div class="product-image">
                                                            <img alt="{{ $banner->titulo }}" src="{{ Storage::url($banner->imagen) }}" width="250">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <form action="{{ route('admin.sendHomeOrden') }}" method="POST">
                                                            @csrf
                                                            <input type="hidden" name="id" value="{{ $banner->id }}">
                                                            <div class="form-group">
                                                                <input type="text" name="orden" value="{{ $banner->orden }}" maxlength="100" id="banner_{{ $banner->id }}" class="form-control orden">
                                                                <label for="banner_{{ $banner->id }}">{{ $banner->titulo }}</label>
                                                            </div>
                                                        </form>
                                                        @if (!empty($banner->enlace))
                                                        <a target="_blank" href="{{ $banner->enlace }}">
                                                            {{ $banner->enlace }}
                                                        </a>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <form action="{{ route('admin.hideBannerHome') }}" method="POST" onsubmit="return checkDelete();">
                                                            @csrf
                                                            <input type="hidden" name="id" value="{{ $banner->id }}">
                                                            <button type="submit" class="btn btn-danger"><i class="fa fa-ban fa-5x "></i></button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="3">No hay banners publicados.</td>
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
