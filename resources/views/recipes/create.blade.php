@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="card">
			<div class="card-header">CREAR RECETA</div>

			<div class="card-body">
				<form method="POST" action="{{  route('recetas.store')  }}">
					{{ csrf_field() }}
					<div class="form-group">
						<label>Titulo de Receta</label>
						<input type="text" name="name" class="form-control" required="">
					</div>

					<div class="form-group">
						<label>Descripción</label>
						<textarea class="form-control" name="description" rows="5"></textarea>
					</div>
					<div class="form-group">
						<label>País</label>
						<input type="text" name="country" class="form-control" required="">
					</div>

					<button type="submit" class="btn btn-primary">Guardar Receta</button>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection