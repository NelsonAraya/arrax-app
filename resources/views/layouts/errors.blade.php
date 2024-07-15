@if($errors->any())
<div class="row mt-4">
    <div class="col-md-8  offset-md-2">
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <ul>
                @foreach($errors->all() as $error)
                    <li>  <strong>ERROR !! </strong> {{$error}}</li>
                @endforeach
            </ul>      
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    </div>
</div>		
@endif