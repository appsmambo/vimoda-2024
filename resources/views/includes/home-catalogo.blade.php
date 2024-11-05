<!-- SUB-BANNER START -->
<section class="container">
    <div class="row mb-40">
        <div class="col-md-1"></div>
        <div class="col-xs-12 col-md-10">
            <h2 class="main_title mt-40">
                <span>
                    Últimos Catálogos
                </span>
            </h2>
            <div class="sub-banner-block center-sm mt-40">
                <div class="row m-0">
                @foreach ($catalogos as $catalogo)
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 p-0">
                        <div class="sub-banner sub-banner4">
                            <a href="{{ $catalogo->enlace }}" target="_blank" title="{{ $catalogo->titulo }}">
                                <img alt="{{ $catalogo->titulo }}" src="{{ Storage::url($catalogo->imagen) }}">
                            </a>
                        </div>
                    </div>
                @endforeach
                </div>
            </div>
        </div>
        <div class="col-md-1"></div>
    </div>
</section>
<!-- SUB-BANNER END -->
