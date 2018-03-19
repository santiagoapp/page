@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Categorias</h1>
@stop

@section('content')



<!-- Main row -->
<div class="row">

	<section class="col-lg-12">
		<div class="box box-info">
			<div class="box-header with-border">
				<h3 class="box-title">Imágenes
					<small>(Click sobre la imagen para editar)</small>
				</h3>
				<div class="box-tools">
					<div class="input-group input-group-sm" style="width: 100px;">

						<div class="input-group-btn">
							<button type="button" class="btn btn-info agregar"><i class="fa fa-plus"></i> Subir Imagen</button>
						</div>
					</div>
				</div>
			</div>
			<!-- /.box-header -->
			<div class="row" style="padding: 25px;">


				@foreach($imagenes as $imagen)

				<div class="col-md-3">
					<div class="box box-solid">
						<div class="box-header with-border">
							<h3 class="box-title" id="name-{{$imagen->id}}">{{$imagen->name}}</h3>
						</div>
						<!-- /.box-header -->
						<div class="box-body">
							<a href="#" class="modals" name="{{$imagen->id}}">
								<img id="img-{{$imagen->id}}" src="{{$imagen->path}}" style="width: 100%; margin-bottom: 25px;" alt="{{$imagen->alt}}">
							</a>
						</div>
						<!-- /.box-body -->
						<div class="box-footer">
							<p id="description-{{$imagen->id}}">{{$imagen->description}}</p>
						</div>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</section>
	<!-- right col -->
</div>
<!-- /.row (main row) -->

<div class="modal modal-info fade" id="modal">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<h4 class="modal-title">Editar</h4>
			</div>
			<div class="modal-body ">
				<div class="row">
					<div class="col-sm-7">
						<img id="img-preview" src="" style="width: 100%; margin-bottom: 25px;" alt="">
					</div>
					<div class="col-sm-5">
						<form role="form">

							<!-- text input -->
							<input type="hidden" name="id" id="id" class="form-control" placeholder="Nombre">
							<div class="form-group">
								<label>Nombre</label>
								<input type="text" name="name" id="name" class="form-control" placeholder="Nombre">
							</div>
							<!-- textarea -->
							<div class="form-group">
								<label>alt</label>
								<textarea name="alt" id="alt" class="form-control" rows="2" placeholder="Alt..."></textarea>
							</div>
							<!-- textarea -->
							<div class="form-group">
								<label>Descripcción</label>
								<textarea name="description" id="description" class="form-control" rows="3" placeholder="Descripcción..."></textarea>
							</div>
							<!-- imagen -->
							<div class="form-group imagen">
								<label>Imágen</label>
								<input type="file" name="imagen" id="imagen">
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cerrar</button>
				<button type="button" class="btn btn-primary" id="guardar">Guardar</button>
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

<script src="{{asset('vendor/adminlte/dist/js/pages/dashboard.js')}}"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script>

	$(function () {

		$('.modals').click(function(){
			var id = $(this).prop('name');
			var ruta = $('#img-' + id).attr('src')
			var name = $('#name-' + id).html()
			var alt = $('#img-' + id).attr('alt')
			var description = $('#description-' + id).html()


			$('#id').val(id)
			$('#alt').val(alt)
			$('#name').val(name)
			$('#description').val(description)
			$('#img-preview').attr('src', ruta);
			$('#modal').modal('show');
		});
		$('.agregar').click(function(){

			$('#id').val('')
			$('#alt').val('')
			$('#name').val('')
			$('#description').val('')
			$('#img-preview').attr('src', '#');

			$('#modal').modal('show');
		});

	});
</script>
@stop