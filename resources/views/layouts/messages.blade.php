@foreach (['danger', 'warning', 'success', 'info'] as $key)
    @if(session()->has($key))
	<div class="row mt-4">
		<div class="col-md-8  offset-md-2">
			<div class="alert alert-{{ $key }} alert-dismissible fade show" role="alert">
				<strong>{{ $key }} !! </strong> {{ session()->get($key) }}
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>
		</div>
	</div>			
    @endif
@endforeach