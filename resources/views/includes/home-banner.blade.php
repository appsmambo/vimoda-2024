<!-- BANNER STRAT -->
<div class="banner">
    <div class="main-banner">
    @forelse ($banners as $banner)
        <div>
            @if (!empty($banner->enlace))
            <a href="{{ $banner->enlace }}">
                <img alt="{{ $banner->titulo }}" src="{{ Storage::url($banner->imagen) }}">
            </a>
            @else
            <img alt="{{ $banner->titulo }}" src="{{ Storage::url($banner->imagen) }}">
            @endif
        </div>
    @empty
        <div>
            <a href="{{ route('emprende') }}" title="">
                <img src="{{ asset('images/home-banner/banner-2.jpg') }}" alt="Afíliate ahora - Venta por Catálogo">
            </a>
        </div>
        <div>
            <img src="{{ asset('images/home-banner/banner-3.jpg') }}" alt="Vimoda, estilo que impone moda">
        </div>
    @endforelse
    </div>
  </div>
  <!-- BANNER END -->
