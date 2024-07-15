@extends('layouts.main')

@section('content')
<div class="row mt-4"> <!-- Añade un margen superior al contenido -->
    <div class="col-md-8  offset-md-2"> <!-- Centra el contenido y ajusta el ancho -->
      <div class="card border-primary mb-3">
        <div class="card-header">MANTENEDOR DE MONEDAS SISTEMA</div>
        <div class="card-body">
          <form class="row g-3 needs-validation" novalidate  method="POST" action="{{ route('monedasValor.store') }}">
            {{ csrf_field() }}
            <div class="col-md-4 position-relative">
              <label for="validationTooltip01" class="form-label">Moneda</label>
              <select class="form-select" id="validationCustom01" name="cb_moneda" aria-label="Seleccione Moneda" required>
                <option value=""> </option>
                @foreach($moneda as $value)
							    <option value="{{ $value->id }}"> {{ $value->nombre .' - $'. $value->codigo }}</option>
						    @endforeach
              </select>
              <div class="valid-feedback">
                Looks good!
              </div>
            </div>
            <div class="col-md-2">
              <label for="validationCustom02" class="form-label">Valor</label>
              <input type="text" class="form-control" id="validationCustom02" name="valor" placeholder="100.00" autocomplete="off" required>
              <div class="valid-feedback">
                Looks good!
              </div>
            </div>
            <div class="col-md-2">
              <label for="validationCustom03" class="form-label">Valor</label>
              <input type="date" class="form-control" id="validationCustom03" name="fecha" autocomplete="off" required>
              <div class="valid-feedback">
                Looks good!
              </div>
            </div>
            <div class="col-12">
              <button class="btn btn-primary" type="submit">Guardar <i class="bi bi-currency-dollar"></i></button>
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