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
							<a type="button" href="{{action('PostController@create')}}" class="btn btn-info btn-flat"><i class="fa fa-plus"></i> Nuevo</a>
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
							<th>Imágen</th>
							<th>Titulo</th>
							<th>Autor</th>
							<th>Excerpt</th>
							<th style="width:15%">Fecha de creación</th>
							<th style="width:15%">Fecha de Modificación</th>
							<th style="width:15%">Accion</th>
						</tr>
						@foreach($entradas as $entrada)
						<tr id="tr-{{$entrada->id}}">
							<td>{{$entrada->id}}</td>
							<td>
								@if($entrada->image_id == null)
								<img src="{{asset('img/users/descarga.svg')}}" alt="" style="width: 70px; height: 70px;">
								@else
								<img src="{{asset($entrada->imagen->path)}}" alt="{{$entrada->imagen->alt}}" style="width: 70px; height: 70px;">
								@endif
							</td>
							<td>{{$entrada->title}}</td>
							<td>{{$entrada->autor->name}}</td>
							<td>{{$entrada->excerpt}}</td>
							<td>{{$entrada->created_at}}</td>
							<td>{{$entrada->updated_at}}</td>
							<td>
								<div class="btn-group">
									<a href="{{action('BlogController@post',$entrada->id)}}" target="_blank" name="{{$entrada->id}}" type="button" class="btn btn-info ver"><span class="fa fa-eye"></span></a>
									<a href="{{action('PostController@edit',$entrada->id)}}" name="{{$entrada->id}}" type="button" class="btn btn-info editar"><span class="fa fa-edit"></span></a>
									<button name="{{$entrada->id}}" type="button" class="btn btn-warning eliminar"><span class="fa fa-trash"></span></button>
								</div>

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

@stop

@section('css')
@stop

@section('js')

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>

	$(function () {

		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
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
					eliminarRegistro(id_boton);
				}
			});
		});
		function eliminarRegistro(id_boton){

			$.ajax({
				type: "POST",
				url: '{{ action('PostController@eliminar')}}',
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