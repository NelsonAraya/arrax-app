@extends('layouts.main')

@section('content')
<div class="row mt-4"> <!-- Añade un margen superior al contenido -->
    <div class="col-md-8  offset-md-2"> <!-- Centra el contenido y ajusta el ancho -->
      <div class="card border-primary mb-3">
        <div class="card-header">MANTENEDOR DE FONDOS</div>
        <div class="card-body">
          <h5 class="card-title  text-primary">Ingreso de Fondos </h5>
          <div class="d-flex justify-content-between mb-3">
            <a href="{{ route('fondos.create') }}" class="btn btn-success">NUEVO FONDO <i class="bi bi-piggy-bank"></i></a>
            <div id="custom-search" class="d-flex align-items-center">
              <label class="mr-2 mb-0" for="custom-search">Buscar: </label>
            </div>
          </div>
          <br>
          <div class="table-responsive">
            <table id="tbl_fondo" class="table table-striped" style="width:100%">
              <thead>
                <tr>
                    <th>ID</th>
                    <th>NOMBRE FONDO</th>
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
  $('#tbl_fondo').DataTable({
    "ajax": '{{ route('fondos.all')}}',
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