@extends('layouts.app')

@section('title', 'Registrar Materia')

@section('content')
	<div class="container no-padding">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Registrar Materia</div>
                <div class="panel-body">
					{!! Form::open(['route'=>'admin.materias.store', 'method'=>'POST']) !!}
							<div class="form-group">
								{!! Form::label('nivel_id', 'Nivel') !!}
								{!! Form::select('nivel_id', $niveles, null, ['class'=>'form-control select-nivel', 'required']) !!}
							</div>

							<div class="form-group">
								{!! Form::label('descripcion', 'Descripcion') !!}
								{!! Form::text('descripcion', null, ['class'=>'form-control','placeholder'=>'Nombre de la materia', 'required']) !!}
							</div>

							<div class="form-group">
								{!! Form::label('credito', 'Creditos') !!}
								{!! Form::number('credito', null, ['class'=>'form-control','placeholder'=>'Número de créditos', 'required']) !!}
							</div>

							<div class="form-group">
								{!! Form::submit('Registrar', ['class'=>'btn btn-primary'])!!}
							</div>

					{!! Form::close() !!}
				</div>
            </div>
        </div>
    </div>
</div>
@endsection