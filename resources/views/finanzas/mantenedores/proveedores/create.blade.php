@extends('layouts.main')

@section('content')
<div class="row mt-4"> <!-- Añade un margen superior al contenido -->
    <div class="col-md-8  offset-md-2"> <!-- Centra el contenido y ajusta el ancho -->
      <div class="card border-primary mb-3">
        <div class="card-header">MANTENEDOR DE PROVEEDORES</div>
        <div class="card-body">
          <form class="row g-3 needs-validation" novalidate  method="POST" action="{{ route('proveedores.store') }}">
            {{ csrf_field() }}
            <div class="col-md-2 position-relative">
              <label for="validationTooltip01" class="form-label">Rut Proveedor</label>
              <input type="text" class="form-control" id="validationTooltip01" name="rut_proveedor" placeholder="12345678-9" autocomplete="off" required>
              <div class="valid-feedback">
                Looks good!
              </div>
            </div>
            <div class="col-md-5">
              <label for="validationCustom02" class="form-label">Nombre Proveedor</label>
              <input type="text" class="form-control" id="validationCustom02" name="nombre_proveedor" placeholder="andigraf" autocomplete="off" required>
              <div class="valid-feedback">
                Looks good!
              </div>
            </div>
            <div class="col-md-5">
              <label for="validationCustom03" class="form-label">Direccion</label>
              <input type="text" class="form-control" id="validationCustom03" name="direccion" placeholder="av la tirana 1850" autocomplete="off" required>
              <div class="valid-feedback">
                Looks good!
              </div>
            </div>
            <div class="col-md-2">
              <label for="validationCustom04" class="form-label">Ciudad</label>
              <input type="text" class="form-control" id="validationCustom04" name="ciudad" placeholder="iquique" autocomplete="off" required>
              <div class="valid-feedback">
                Looks good!
              </div>
            </div>
            <div class="col-md-3">
              <label for="validationCustom05" class="form-label">Contacto</label>
              <input type="text" class="form-control" id="validationCustom05" name="contacto" placeholder="Juan Perez" autocomplete="off" required>
              <div class="valid-feedback">
                Looks good!
              </div>
            </div>
            <div class="col-md-2">
              <label for="validationCustom06" class="form-label">Telefono</label>
              <input type="number" class="form-control" id="validationCustom06" name="telefono" placeholder="912345678" autocomplete="off" required>
              <div class="valid-feedback">
                Looks good!
              </div>
            </div>
            <div class="col-md-3">
              <label for="validationCustom07" class="form-label">Mail Contacto</label>
              <input type="email" class="form-control" id="validationCustom07" name="mail_contacto" placeholder="juan@empresa.cl" autocomplete="off" required>
              <div class="valid-feedback">
                Looks good!
              </div>
            </div>
            <div class="col-md-2">
              <label for="validationCustom08" class="form-label">Mail Pagos</label>
              <input type="email" class="form-control" id="validationCustom08" name="mail_pago" placeholder="pagos@empresa.cl" autocomplete="off" required>
              <div class="valid-feedback">
                Looks good!
              </div>
            </div>
            <div class="col-md-3">
              <label for="validationCustom09" class="form-label">Banco</label>
              <select class="form-select" id="validationCustom09" name="cb_banco" aria-label="Seleccione Departamento" required>
                <option value=""> </option>
                @foreach($banco as $value)
							    <option value="{{ $value->id }}"> {{ $value->nombre }}</option>
						    @endforeach
              </select>
              <div class="valid-feedback">
                Looks good!
              </div>
            </div>
            <div class="col-md-3">
              <label for="validationCustom10" class="form-label">Tipo Cuenta</label>
              <select class="form-select" id="validationCustom10" name="cb_tipo_cuenta" aria-label="Seleccione Departamento" required>
                <option value=""> </option>
                @foreach($cuenta as $value)
							    <option value="{{ $value->id }}"> {{ $value->nombre }}</option>
						    @endforeach
              </select>
              <div class="valid-feedback">
                Looks good!
              </div>
            </div>
            <div class="col-md-2">
              <label for="validationCustom11" class="form-label">Numero de Cuenta</label>
              <input type="text" class="form-control" id="validationCustom11" name="numero_cuenta" placeholder="12345678" autocomplete="off" required>
              <div class="valid-feedback">
                Looks good!
              </div>
            </div>
            <div class="col-12">
              <button class="btn btn-primary" type="submit">Guardar <i class="bi bi-person-circle"></i></button>
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