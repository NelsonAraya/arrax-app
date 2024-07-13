@extends('layouts.main')

@section('content')
<div class="row mt-4"> <!-- Añade un margen superior al contenido -->
    <div class="col-md-8  offset-md-2"> <!-- Centra el contenido y ajusta el ancho -->
      <div class="card border-primary mb-3">
        <div class="card-header">MANTENEDOR DE CUENTAS PRESUPUESTARIAS</div>
        <div class="card-body">
          <h5 class="card-title  text-primary">Ingreso de Cuentas Presupuestarias </h5>
          <div class="d-flex justify-content-between mb-3">
            <a href="{{ route('cuentap.create') }}" class="btn btn-success">NUEVA CUENTA <i class="bi bi-bank"></i></a>
            <div id="custom-search" class="d-flex align-items-center">
              <label class="mr-2 mb-0" for="custom-search">Buscar: </label>
            </div>
          </div>
          <br>
          <div class="table-responsive">
            <table id="tbl_cuenta" class="table table-striped" style="width:100%">
              <thead>
                <tr>
                    <th>CUENTA</th>
                    <th>NOMBRE</th>
                </tr>
            </thead>
            </table>
          </div>  
        </div>
      </div>
    </div>
</div>
@endsection
@section('js')
<script>
$(document).ready(function() {
  $('#tbl_cuenta').DataTable({
    "columnDefs": [{ width: '30%', targets: 0 }],
    "ajax": '{{ route('cuentap.all')}}',
    "columns": [
            { data: 'id' },
            { data: 'nombre' }         
    ],
    "language": {
        url: '{{ asset('json/es-MX.json') }}'
    },
     "ordering": false,
     "initComplete": function() {
            $('#dt-search-0').detach().appendTo('#custom-search');
            $('#dt-search-0 input').addClass('form-control').css('width', 'auto');
            $('#custom-search label').css('margin-right', '10px'); // Añade un margen al label
            $('.dt-search').detach();
        }
  });
});
</script>
@endsection