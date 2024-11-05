@extends('layouts.front')

@section('content')

<!-- Bread Crumb STRAT -->
<div class="banner inner-banner1 emprende">
    <div class="container">
        <section class="banner-detail center-xs">
            <h1 class="banner-title">Emprende</h1>
            <div class="bread-crumb right-side float-none-xs">
                <ul>
                    <li><a href="{{ route('index') }}">Inicio</a>/</li>
                    <li><span>Emprende</span></li>
                </ul>
            </div>
        </section>
    </div>
</div>
<!-- Bread Crumb END -->

<!-- CONTAIN START -->
<section class="checkout-section ptb-95">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div class="row">
            <div class="col-lg-6 col-md-8 col-sm-8 col-lg-offset-3 col-sm-offset-2">
              <form action="{{ route('emprende.send') }}" method="POST" class="main-form full">
                @csrf
                <input type="hidden" id="departamento" name="departamento" value="">
                <input type="hidden" id="provincia" name="provincia" value="">
                <input type="hidden" id="distrito" name="distrito" value="">
                <div class="row">
                  <div class="col-xs-12 mb-20">
                    <div class="heading-part align-center mb-30 mb-xs-15">
                        <h2 class="main_title"><span>Emprende con nosotros!</span></h2>
                        {{-- display validation error message --}}
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @else
                        @if (session('msg'))
                        <h3 class="primary-color mtb-30">
                            {{ session('msg') }}
                        </h3>
                        @endisset
                        @endif
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-6">
                    <div class="input-box">
                        <label for="dni">DNI / RUC</label>
                        <input type="text" id="dni" name="dni" required value="{{ old('dni') }}" maxlength="11">
                      </div>
                  </div>
                  <div class="col-xs-12 col-sm-6">
                    <div class="input-box">
                        <label for="telefono">Teléfono</label>
                        <input type="text" id="telefono" name="telefono" required value="{{ old('telefono') }}" maxlength="20">
                      </div>
                  </div>
                  <div class="col-xs-12 col-sm-6">
                    <div class="input-box">
                        <label for="nombres">Nombres</label>
                      <input type="text" id="nombres" name="nombres" required value="{{ old('nombres') }}" maxlength="50">
                      </div>
                  </div>
                  <div class="col-xs-12 col-sm-6">
                    <div class="input-box">
                        <label for="apellidos">Apellidos</label>
                      <input type="text" id="apellidos" name="apellidos" required value="{{ old('apellidos') }}" maxlength="50">
                      </div>
                  </div>
                  <div class="col-xs-12">
                    <div class="input-box">
                      <label for="correo">Correo</label>
                      <input type="email" id="correo" name="correo" required value="{{ old('correo') }}" maxlength="50">
                    </div>
                  </div>
                  <div class="col-xs-12">
                    <div class="input-box">
                      <label for="direccion">Dirección</label>
                      <input type="text" id="direccion" name="direccion" required value="{{ old('direccion') }}" maxlength="50">
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-4">
                    <div class="input-box">
                      <label for="cboDepartamento">Departamento</label>
                      <select id="cboDepartamento" class="form-control">
                      </select>
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-4">
                    <div class="input-box">
                      <label for="cboProvincia">Provincia</label>
                      <select id="cboProvincia" class="form-control">
                      </select>
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-4">
                    <div class="input-box">
                      <label for="cboDistrito">Distrito</label>
                      <select id="cboDistrito" class="form-control">
                      </select>
                    </div>
                  </div>
                  <div class="col-xs-12">
                    <button name="submit" type="submit" class="btn-color right-side">¡Registrate!</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- CONTAINER END -->


@endsection

@section('scripts')

<script>
    // Ubigeos
    var ubigeo = window.ubigeo;

    var $cbodepartamento = $('#cboDepartamento');
    var $cboprovincia = $('#cboProvincia');
    var $cbodistrito = $('#cboDistrito');

    function loadCaption(control, caption) {
        control.empty().append($('<option />').prop('disabled', true)
            .prop('selected', true).text(caption));
    }

    function loadSelect (control, caption, data) {
        loadCaption(control, caption);
        data.forEach(function(e) {
            control.append($('<option />').val(e.id_ubigeo).text(e.nombre_ubigeo));
    });
    }

    function loadProvincias (id) {
        loadSelect($cboprovincia, 'Seleccionar provincia', ubigeo.provincias[id]);
        loadCaption($cbodistrito, 'Seleccionar distrito');
    }

    function loadDistritos (id) {
        loadSelect($cbodistrito, 'Seleccionar distrito', ubigeo.distritos[id]);
    }

    // Departamento: Click event
    $cbodepartamento.on('change', function() {
        loadProvincias(this.value);
        var departamento = $('#cboDepartamento option:selected').text();
        $('#departamento').val(departamento);
    });

    // Provincia: Click event
    $cboprovincia.on('change', function() {
        loadDistritos(this.value);
        var provincia = $('#cboProvincia option:selected').text();
        $('#provincia').val(provincia);
    });

    $cbodistrito.on('change', function() {
        var distrito = $('#cboDistrito option:selected').text();
        $('#distrito').val(distrito);
    });

    // Cargar departamento por defecto
    loadSelect($cbodepartamento, 'Seleccionar departamento', ubigeo.departamentos);
</script>
@endsection
