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
							<th>Fecha de creación</th>
							<th>Accion</th>
						</tr>
						@foreach($entradas as $entrada)
						<tr id="tr-{{$entrada->id}}">
							<td>{{$entrada->id}}</td>
							<td><img src="{{asset('$entrada->image->path')}}" alt="{{$entrada->image->alt}}" style="width: 70px; height: 70px;"></td>
							<td>{{$entrada->title}}</td>
							<td>{{$entrada->author->name}}</td>
							<td>{{$entrada->excerpt}}</td>
							<td>{{$entrada->created_at}}</td>
							<td>
								<a href="#" name="{{$entrada->id}}" class="eliminar"><span class="label label-danger">Eliminar</span></a>
								<!-- <a href="#" name="{{$entrada->id}}" class="enviar"><span class="label label-info">Enviar Correo</span></a> -->
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

<script src="{{ asset('vendor/adminlte/dist/js/pages/dashboard.js') }}"></script>
<!-- <script src="{{ asset('vendor/adminlte/vendor/ckeditor/ckeditor.js') }}"></script> -->
<!-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> -->
<script>

	$(function () {

		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});

	});

</script>

@stop