@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Subscriptores</h1>
@stop

@section('content')

<div class="row">
	<div class="col-xs-12">
		<div class="box">
			<div class="box-header">
				<h3 class="box-title">Registros</h3>

				<div class="box-tools">
					<div class="input-group input-group-sm" style="width: 250px;">
						<div class="input-group-btn">
							<button type="submit" class="btn btn-info btn-flat" data-toggle="modal" data-target="#modal-info"><i class="fa fa-plus"></i> Nuevo</button>
						</div>
						<input type="text" name="table_search" class="form-control pull-right" placeholder="Buscar...">

						<div class="input-group-btn">
							<button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
						</div>
					</div>
				</div>
			</div>
			<!-- /.box-header -->
			<div class="box-body table-responsive no-padding">
				<table class="table table-hover">
					<tbody>
						<tr>
							<th>ID</th>
							<th>Nombre</th>
							<th>Correo Electrónico</th>
							<th>Fecha de creación</th>
							<th>Accion</th>
						</tr>
						@foreach($subscriptores as $subscriptor)
						<tr id="tr-{{$subscriptor->id}}">
							<td>{{$subscriptor->id}}</td>
							<td>{{$subscriptor->name}}</td>
							<td>{{$subscriptor->email}}</td>
							<td>{{$subscriptor->created_at}}</td>
							<td>
								<a href="#" name="{{$subscriptor->id}}" class="eliminar"><span class="label label-danger">Eliminar</span></a>
								<!-- <a href="#" name="{{$subscriptor->id}}" class="enviar"><span class="label label-info">Enviar Correo</span></a> -->
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
			<!-- /.box-body -->
		</div>
		<!-- /.box -->
	</div>
</div>

<div class="modal modal-info fade" id="modal-info">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<h4 class="modal-title">Agregar registro</h4>
			</div>
			<!-- form start -->
			<form class="form-horizontal" id="formulario">
				<div class="modal-body">
					<div class="form-group">
						<label for="name" class="col-sm-2 control-label">Nombre</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="name" name="name" placeholder="Nombre">
						</div>
					</div>
					<div class="form-group">
						<label for="email" class="col-sm-2 control-label">Correo</label>
						<div class="col-sm-10">
							<input type="email" class="form-control" id="email" name="email" placeholder="Correo Electrónico">
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cerrar</button>
					<button type="submit" class="btn btn-primary agregar">Guardar</button>
				</div>
			</form>
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

<script src="{{ asset('vendor/adminlte/dist/js/pages/dashboard.js') }}"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
	$(function () {

		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});

		$('.agregar').click(function () {
			agregarSubscriptor();
		});

		$('.eliminar').click(function () {
			var id_boton = $(this).prop("name");
			swal({
				title: "¿Está seguro de eliminar el registro?",
				text: "Una vez eliminado no podrá recuperar la información!",
				icon: "warning",
				buttons: true,
				dangerMode: true,
				buttons: ["Cancelar", "Continuar"],
			})
			.then((willDelete) => {
				if (willDelete) {
					eliminarSubscriptor(id_boton);
				}
			});
		});

		function eliminarSubscriptor(id_boton){

			$.ajax({
				type: "POST",
				url: '{{ action('SubscriberController@eliminar')}}',
				data:{
					"id" : id_boton
				},
				success: function (data) {
					if (data==1) 
					{
						$('#tr-' + id_boton).remove();
						swal({
							title: ":D",
							text: "Registro eliminado con éxito",
							icon: "success"
						});
					}else{
						swal({
							title: ":c",
							text: "El registro no pudo ser eliminado",
							icon: "warning"
						});
					}
				},
				error: function (data) {
					console.log('Error:', data);
				}
			});
		}

		function agregarSubscriptor(){

			$.ajax({
				type: "POST",
				url: '{{ action('SubscriberController@store')}}',
				data: $('#formulario').serialize(),
				success: function (data) {
					if (data==1) 
					{
						swal({
							title: ":D",
							text: "Registro agregado con éxito",
							icon: "success"
						});
					}else{
						swal({
							title: ":c",
							text: "El registro no pudo ser agregado",
							icon: "warning"
						});
					}
				},
				error: function (data) {
					console.log('Error:', data);
				}
			});
		}
	});
</script>

@stop