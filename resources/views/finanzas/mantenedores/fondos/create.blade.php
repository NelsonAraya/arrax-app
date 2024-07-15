@extends('layouts.main')

@section('content')
<div class="row mt-4"> <!-- Añade un margen superior al contenido -->
    <div class="col-md-8  offset-md-2"> <!-- Centra el contenido y ajusta el ancho -->
      <div class="card border-primary mb-3">
        <div class="card-header">MANTENEDOR DE FONDOS</div>
        <div class="card-body">
          <form class="row g-3 needs-validation" novalidate  method="POST" action="{{ route('fondos.store') }}">
            {{ csrf_field() }}
            <div class="col-md-3 position-relative">
              <label for="validationTooltip01" class="form-label">Nombre Fondo</label>
              <input type="text" class="form-control" id="validationTooltip01" name="nombre_fondo" placeholder="salud" autocomplete="off" required>
              <div class="valid-feedback">
                Looks good!
              </div>
            </div>
            <div class="col-md-2">
              <label for="validationCustom02" class="form-label">Monto</label>
              <input type="text" class="form-control" id="validationCustom02" name="nombre_monto" placeholder="120000" autocomplete="off" required>
              <div class="valid-feedback">
                Looks good!
              </div>
            </div>
            <div class="col-md-5">
              <label for="validationCustom03" class="form-label">Nombre Completo</label>
              <input type="text" class="form-control" id="validationCustom03" name="nombre_completo" placeholder="fondo administracion salud" autocomplete="off" required>
              <div class="valid-feedback">
                Looks good!
              </div>
            </div>
            <div class="col-md-2">
              <label for="validationCustom04" class="form-label">Año Fondo</label>
              <input type="number" class="form-control" id="validationCustom04" name="anio_fondo" placeholder="2024" min="2024" max="2100" autocomplete="off" required>
              <div class="valid-feedback">
                Looks good!
              </div>
            </div>
            <div class="col-md-3">
              <label for="validationCustom05" class="form-label">Departamento</label>
              <select class="form-select" id="validationCustom05" name="cb_dpto" aria-label="Seleccione Departamento" required>
                <option value=""> </option>
                @foreach($dpto as $value)
							    <option value="{{ $value->id }}"> {{ $value->nombre }}</option>
						    @endforeach
              </select>
              <div class="valid-feedback">
                Looks good!
              </div>
            </div>
            <div class="col-12">
              <button class="btn btn-primary" type="submit">Guardar <i class="bi bi-piggy-bank"></i></button>
            </div>
          </form>
        </div>
      </div>
    </div>
</div>
@endsection
@section('js')
<script>
$(document).ready(function() {
  (() => {
  'use strict'
  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  const forms = document.querySelectorAll('.needs-validation')
  // Loop over them and prevent submission
  Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }
      form.classList.add('was-validated')
    }, false)
  })
})()
});
</script>
@endsection