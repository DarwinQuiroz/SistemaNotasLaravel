@extends('layouts.app')
@section('title', 'Registrar Usuario')
@section('content')
<div class="container no-padding">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading text-center">Registrar Usuario</div>
                <div class="panel-body">
					{!! Form::open(['route'=>'admin.profesores.store', 'method'=>'POST']) !!}
							<div class="form-group">
								{!! Form::label('facultad_id', 'Facultad') !!}
								{!! Form::select('facultad_id', $facultades, null, ['class'=>'form-control select-category', 'required']) !!}
							</div>

							<div class="form-group">
								{!! Form::label('cedula', 'Cedula') !!}
								{!! Form::text('cedula', null, ['class'=>'form-control','placeholder'=>'Número de Cedula', 'required']) !!}
							</div>

							<div class="form-group">
								{!! Form::label('nombres', 'Nombres') !!}
								{!! Form::text('nombres', null, ['class'=>'form-control','placeholder'=>'Nombres', 'required']) !!}
							</div>

							<div class="form-group">
								{!! Form::label('apellidos', 'Apellidos') !!}
								{!! Form::text('apellidos', null, ['class'=>'form-control','placeholder'=>'Apellido', 'required']) !!}
							</div>

							<div class="form-group">
								{!! Form::label('telefono', 'Telefono') !!}
								{!! Form::text('telefono', null, ['class'=>'form-control','placeholder'=>'Telefono', 'required']) !!}
							</div>

							<div class="form-group">
								{!! Form::label('direccion', 'Dirección') !!}
								{!! Form::text('direccion', null, ['class'=>'form-control','placeholder'=>'Dirección', 'required']) !!}
							</div>

							<div class="form-group">
								{!! Form::label('correo', 'Correo Electrónico') !!}
								{!! Form::email('correo', null, ['class'=>'form-control','placeholder'=>'example@gmail.com', 'required']) !!}
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