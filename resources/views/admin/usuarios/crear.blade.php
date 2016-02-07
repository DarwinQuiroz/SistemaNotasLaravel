@extends('layouts.app')
@section('title', 'Registrar Usuario')
@section('content')
<div class="container no-padding">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Registrar Usuario</div>
                <div class="panel-body">
					{!! Form::open(['route'=>'admin.usuarios.store', 'method'=>'POST']) !!}
							<div class="form-group">
								{!! Form::label('name', 'Nombre') !!}
								{!! Form::text('name', null, ['class'=>'form-control','placeholder'=>'Nombre Completo', 'required']) !!}
							</div>

							<div class="form-group">
								{!! Form::label('email', 'Correo Electrónico') !!}
								{!! Form::email('email', null, ['class'=>'form-control','placeholder'=>'example@gmail.com', 'required']) !!}
							</div>

							<div class="form-group">
									{!! Form::label('password', 'Contraseña') !!}
									{!! Form::password('password', ['class'=>'form-control','placeholder'=>'*************', 'required']) !!}
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