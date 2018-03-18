@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Categorias</h1>
@stop

@section('content')



<!-- Main row -->
<div class="row">
	<!-- Left col -->
	<section class="col-lg-7">
		<div class="box">
			<div class="box-header">
				<h3 class="box-title">Registros</h3>

				<div class="box-tools">
					<div class="input-group input-group-sm" style="width: 150px;">
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
						<tr class="table-header">
							<th>ID</th>
							<th>Nombre</th>
							<th>Slug</th>
							<th>Accion</th>
						</tr>
						@foreach($categories as $category)
						<tr id="tr-{{$category->id}}" class="fila">
							<td>{{$category->id}}</td>
							<td>{{$category->name}}</td>
							<td>{{$category->slug}}</td>
							<td>
								<a href="#" name="{{$category->id}}" class="editar"><span class="label label-info">Editar</span></a>
								<a href="#" name="{{$category->id}}" class="eliminar"><span class="label label-danger">Eliminar</span></a>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
			<!-- /.box-body -->
		</div>
		<!-- /.box -->

	</section>
	<!-- /.Left col -->
	<!-- right col (We are only adding the ID to make the widgets sortable)-->
	<section class="col-lg-5">
		<div class="box box-info">
			<div class="box-header with-border">
				<h3 class="box-title">Nueva Categoría</h3>
			</div>
			<!-- /.box-header -->
			<!-- form start -->
			<form class="form-horizontal" id="formulario" method="POST">
				@csrf
				@method('POST')
				<div class="box-body">
					<div class="form-group">
						<label for="text" class="col-sm-2 control-label">Name</label>
						<input type="hidden" id="id" name="id">
						<div class="col-sm-10">
							<input type="text" class="form-control" id="name" name="name" placeholder="Nombre">
						</div>
					</div>
					<div class="form-group">
						<label for="text" class="col-sm-2 control-label">Slug</label>

						<div class="col-sm-10">
							<input type="text" class="form-control" id="slug" name="slug" placeholder="Slug">
						</div>
					</div>
				</div>
				<!-- /.box-body -->
				<div class="box-footer">
					<button type="button" class="btn btn-info btn-flat pull-right agregar">Agregar</button>
				</div>
				<!-- /.box-footer -->
			</form>
		</div>
	</section>
	<!-- right col -->
</div>
<!-- /.row (main row) -->


@stop

@section('css')
@stop

@section('js')

<script src="{{asset('vendor/adminlte/dist/js/pages/dashboard.js')}}"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script>
	
	$(function () {

		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});

		$('.agregar').click(function () {
			if ($('.agregar').html() == "Editar") 
			{
				editarCategoria();
			}else{
				agregarCategoria();
			}
		});
		$('.editar').click(function () {
			var id_boton = $(this).prop("name");
			$('#id').val(id_boton);
			$('#name').val($('#tr-' + id_boton + ' td:nth-child(2)').html());
			$('#slug').val($('#tr-' + id_boton + ' td:nth-child(3)').html());
			$('.agregar').html("Editar")
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
					eliminarCategoria(id_boton);
				}
			});
		});

		function editarCategoria(id_boton){

			$.ajax({
				type: "POST",
				url: '{{ action('CategoryController@editarRegistro')}}',
				data: $('#formulario').serialize(),
				success: function (data) {

					$('#tr-' + data.id + ' td:nth-child(2)').html(data.name);
					$('#tr-' + data.id + ' td:nth-child(3)').html(data.slug);
					$('.agregar').html("Agregar")
					$('#name').val("");
					$('#slug').val("");
					swal({
						title: ":D",
						text: "Registro editado con éxito",
						icon: "success"
					});

				},
				error: function (data) {
					console.log('Error:', data);
				}
			});
		}

		function agregarCategoria(){

			$.ajax({
				type: "POST",
				url: '{{ action('CategoryController@agregarRegistro')}}',
				data: $('#formulario').serialize(),
				success: function (data) {
					swal({
						title: ":D",
						text: "Registro agregado con éxito",
						icon: "success"
					});
					location.reload();

				},
				error: function (data) {
					console.log('Error:', data);
				}
			});
		}

		function eliminarCategoria(id_boton){

			$.ajax({
				type: "POST",
				url: '{{ action('CategoryController@eliminar')}}',
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
	});
</script>
@stop