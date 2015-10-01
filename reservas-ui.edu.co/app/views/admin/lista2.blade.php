@extends('plantilla2')
@section('contenido')



<div "">

		


	

	<h3>Agregar Equipo</h3>
	{{Form::open(array('url' => 'equipo', 'files' => true, 'id'=>'idForm'))}}
		@if (Session::get('mensaje'))
			<div class="alert alert-success">{{Session::get('mensaje')}}</div>
		@endif

		<div class="form-group">
			{{Form::label('nombre', 'Nombre')}}
			{{Form::text('nombre', Input::old('no'), array('class'=>'form-control', 'required'=>'true', 'placeholder'=>'nombre del equipo', 'autocomplete'=>'off'))}}
		</div>
		@if( $errors->has('nombre') )
			<div class="alert alert-danger">
			@foreach($errors->get('nombre') as $error)
				* {{$error}}</br>
			@endforeach
			</div>
		@endif
     
        <div   class="form-group">
		{{Form::label('imagen', 'Imagen')}}
		{{ Form::file('imagen', array('class' =>'file', 'data-buttonText' =>"Subir imagen", 'data-buttonName'=>"btn-primary"))}} 
		
		</div>
		@if( $errors->has('imagen') )
			<div class="alert alert-danger">
			@foreach($errors->get('imagen') as $error)
				* {{$error}}</br>
			@endforeach
			</div>
		@endif

		<div class="form-group">
			{{Form::label('descripcion', 'Descripcion')}}
			{{Form::text('descripcion', Input::old('descripcion'), array('class'=>'form-control', 'placeholder'=>'descripcion del equipo', 'autocomplete'=>'off'))}}
		</div>
		@if( $errors->has('descripcion') )
			<div class="alert alert-danger">
			@foreach($errors->get('descripcion') as $error)
				* {{$error}}</br>
			@endforeach
			</div>
		@endif
		<div class="form-group">
			{{Form::label('cantidad', 'Cantidad')}}
			{{Form::text('cantidad', Input::old('cantidad'), array('class'=>'form-control', 'placeholder'=>'Cantidad', 'autocomplete'=>'off'))}}
		</div>
		@if( $errors->has('cantidad') )
			<div class="alert alert-danger">
			@foreach($errors->get('cantidad') as $error)
				* {{$error}}</br>
			@endforeach
			</div>
		@endif
		
		
		{{Form::submit('Guardar', array('class'=>'btn btn-success'))}}
		{{Form::reset('Limpiar', array('class'=>'btn btn-default'))}}
	{{Form::close()}}
</div>

<div class="list-group">

	 @foreach($equipos as $equipo)

      <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="wow bounceInUp" data-wow-delay="0.5s">
                <div class="team boxed-grey">
                    <div class="inner">
            <h5>{{$equipo->nombre}}</h5>
                        <p class="subtitle">{{$equipo->descripcion}}</p>
                        <div class="avatar"><img src='{{ asset("imagenes/$equipo->imagen") }}' alt="" class="img-responsive img-rounded" /></div>
                       Cantidad<p class="text-success">{{$equipo->cantidad}}</p>
   

                     {{ Form::open(array('url'=>'admin', 'method'=>'DELETE', 'style'=>'display:inline;')) }} 

                     {{Form::hidden('id', $equipo->id)}}

                     {{Form::submit('Eliminar', array('class'=>'btn btn-danger',  'data-toggle' => 'modal', 'data-target' => '#confirmDelete', 'data-title'=>'Delete User', 'data-message' => 'Are you sure you want to delete this event?'))}}

                     {{Form::close()}}


                     <!-- Modal Dialog -->








                     {{Form::submit('Editar', array('class'=>'btn btn-primary'))}}



                  

                    </div>
                </div>
        </div>
            </div>

        @endforeach   


         
	
</div>
@stop



