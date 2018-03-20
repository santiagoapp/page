@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Perfíl</h1>
@stop

@section('content')


<div class="row">

	<div class="col-md-3">

		<!-- Profile Image -->
		<div class="box box-primary">
			<div class="box-body box-profile">
				<div class="img_preview">
					<img class="profile-user-img img-responsive img-circle" src="{{asset(Auth::user()->imagen->path)}}" alt="User profile picture">
				</div>

				<h3 class="profile-username text-center">{{Auth::user()->name}}</h3>

				<hr>
				<div class="box-body">
					<button type="button" class="btn btn-primary btn-block btn-flat pull-right mostrar_modal">Actualizar Imágen</button>

				</div>
				<!-- /.box-body -->

			</div>
			<!-- /.box-body -->
		</div>
		<!-- /.box -->


	</div>

	<!-- /.col -->

	
	<div class="col-md-9">
		<!-- About Me Box -->
		<div class="box box-primary">
			<div class="box-header with-border">
				<h3 class="box-title">Información</h3>
			</div>
			<!-- /.box-header -->
			<div class="box-body">
				<form class="form-horizontal" id="formulario">
					<div class="form-group">
						<label for="inputName" class="col-sm-1 control-label">Nombre</label>

						<div class="col-sm-11">
							<input type="hidden" id="id" name="id" >
							<input type="hidden" id="image_id" name="image_id" >
							<input type="name" class="form-control" id="name" name="name" placeholder="Nombre">
						</div>
					</div>
					<div class="form-group">
						<label for="email" class="col-sm-1 control-label">Correo</label>

						<div class="col-sm-11">
							<input type="email" class="form-control" id="email" name="email" placeholder="Correo Electrónico">
						</div>
					</div>
					<div class="form-group">
						<label for="about" class="col-sm-1 control-label">Sobre mi</label>

						<div class="col-sm-11">
							<textarea class="textarea" name="about" id="about" placeholder="Contenido..."
							style="width: 100%; height: 158px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
							<button type="button" class="btn btn-info btn-flat pull-right guardar">Enviar</button>
						</div>
					</div>
				</form>
			</div>
			<!-- /.box-body -->
		</div>
		<!-- /.box -->
	</div>

	
</div>
<!-- /.col -->
</div>
<!-- /.row -->

<div class="modal modal-info fade" id="modal">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<h4 class="modal-title">Agregar Imágen</h4>
			</div>
			<div class="modal-body ">
				<div class="row">
					@foreach($imagenes as $imagen)
					<div class="col-sm-3">
						<img src="{{asset($imagen->path)}}" name="{{$imagen->id}}" class="seleccionar" style="width: 100%" alt="">
					</div>
					@endforeach
				</div>
			</div>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>
<!-- /.modal -->
@stop

@section('css')
@stop

@section('js')


<script>
	$(function(){
		$('#name').val('{{Auth::user()->name}}')
		$('#email').val('{{Auth::user()->email}}')
		$('#id').val('{{Auth::user()->id}}')

		//bootstrap WYSIHTML5 - text editor
		$('.textarea').wysihtml5({
			"font-styles": true, 
			"emphasis": true, 
			"lists": true, 
			"html": true, 
			"link": true, 
			"image": false, 
			"color": true 
		});	


		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});

		$('.guardar').click(function(){
			editarUsuario()
		});
		$('.mostrar_modal').click(function(){
			$('#modal').modal('show');
		});
		$('.seleccionar').click(function(){
			$('.img_preview').html('<img class="profile-user-img img-responsive img-circle" src="' + $(this).prop('src') + '" alt="User profile picture">');

			$('#image_id').val($(this).prop('name'));
		});

		function editarUsuario(){

			$.ajax({
				type: "POST",
				url: '{{ action('ProfileController@editarRegistro')}}',
				data: $('#formulario').serialize(),
				success: function (data) {
					location.reload();
				},
				error: function (data) {
					console.log('Error:', data);
				}
			});
		}

	});


</script>
@stop