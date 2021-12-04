@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="card">
            <div class="card-header">EDITAR RECETA</div>

            <div class="card-body">
                <form method="POST" action="{{  route('recetas.update', $recipe->id)  }}">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    
                    <div class="form-group">
                        <label>Nombre de Receta</label>
                        <input type="text" name="name" class="form-control" value="{{ $recipe->name }}" required="">
                    </div>

                    <div class="form-group">
                        <label>Descripción</label>
                        <textarea class="form-control" name="description" rows="5"> {{ $recipe->description }} </textarea>
                    </div>

                    <div class="form-group">
                        <label>País</label>
                        <input type="text" name="country" class="form-control" value="{{ $recipe->country }}" required="">
                    </div>
                    <button type="submit" class="btn btn-primary">Actualizar en la base de datos</button>
                    <a href="{{ route('recetas.index') }}" class="btn btn-outline-dark">Cancelar</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection