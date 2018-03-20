@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Subscriptores</h1>
@stop

@section('content')

<div class="row">
	<div class="col-md-8">
		<div class="box">
			<div class="box-header with-border">
				<h3 class="box-title">Información General</h3>
			</div>
			<!-- /.box-header -->
			<div class="box-body">

				<form role="form">
					<!-- text input -->
					<div class="form-group">
						<label>Título</label>
						<input type="text" class="form-control" placeholder="Título ...">
					</div>
					<!-- text input -->
					<div class="form-group">
						<label>URL SEO Friendly</label>
						<input type="text" class="form-control" placeholder="URL ...">
					</div>
					<!-- textarea -->
					<div class="form-group">
						<label>Resúmen (Excerpt)</label>
						<textarea class="form-control" rows="4" placeholder="Resúmen..."></textarea>
					</div>

					<!-- textarea -->
					<div class="form-group">
						<label>Contenido</label>
						<textarea class="form-control" id="content" rows="3" placeholder="Resúmen..."></textarea>
					</div>
					<div class="box-footer">
						<button type="button" class="btn btn-info btn-flat pull-right">Actualizar</button>
					</div>
				</form>

			</div>
			<!-- /.box-body -->
		</div>
		<!-- /.box -->
	</div>
	<div class="col-md-4">
		<div class="box">
			<div class="box-header with-border">
				<h3 class="box-title">Imagen Destacada</h3>
			</div>
			<!-- /.box-header -->
			<div class="box-body">

				<form role="form">
					<!-- Select multiple-->
					<div class="form-group">
						<label>Imágen Destacada</label>
						<div class="img_preview" style="width: 100%;border-style: dashed; border-color: #CECECD; height: 280px"></div>
						<input type="hidden" name="featured_image" id="featured_image" class="form-control" placeholder="Título ...">
					</div>
					<div class="box-footer">
						<button type="button" class="btn btn-info btn-flat pull-right mostrar_modal">Seleccionar Imágen</button>
					</div>
				</form>

			</div>
			<!-- /.box-body -->
		</div>
		<!-- /.box -->
	</div>
	<div class="col-md-4">
		<div class="box">
			<div class="box-header with-border">
				<h3 class="box-title">Etiquetas</h3>
			</div>
			<!-- /.box-header -->
			<div class="box-body">

				<form role="form">
					<!-- Select multiple-->
					<div class="form-group">
						<label>Seleccionar etiquetas</label>
						<select multiple="multiple" class="form-control select2" data-placeholder="Select a State" style="width: 100%;">
							<option>option 1</option>
							<option>option 2</option>
							<option>option 3</option>
							<option>option 4</option>
							<option>option 5</option>
						</select>
					</div>
				</form>

			</div>
			<!-- /.box-body -->
		</div>
		<!-- /.box -->
	</div>
	<div class="col-md-4">
		<div class="box">
			<div class="box-header with-border">
				<h3 class="box-title">Categoría</h3>
			</div>
			<!-- /.box-header -->
			<div class="box-body">

				<form role="form">
					<!-- Select multiple-->
					<div class="form-group">
						<label>Seleccionar Categoría</label>
						<select class="form-control select2" style="width: 100%;">
							<option></option>
							<option>option 1</option>
							<option>option 2</option>
							<option>option 3</option>
							<option>option 4</option>
							<option>option 5</option>
						</select>
					</div>
				</form>

			</div>
			<!-- /.box-body -->
		</div>
		<!-- /.box -->
	</div>
	<div class="col-md-4">
		<div class="box">
			<div class="box-header with-border">
				<h3 class="box-title">Meta Tags</h3>
			</div>
			<!-- /.box-header -->
			<div class="box-body">
				<form role="form">
					<!-- text input -->
					<div class="form-group">
						<label>Meta Description</label>
						<input type="text" class="form-control" placeholder="Título ...">
					</div>
				</form>

			</div>
			<!-- /.box-body -->
		</div>
		<!-- /.box -->
	</div>
	<div class="col-md-4">
		<div class="box">
			<div class="box-header with-border">
				<h3 class="box-title">Schema.org Google + Meta Tags</h3>
			</div>
			<!-- /.box-header -->
			<div class="box-body">
				<form role="form">
					<!-- text input -->
					<div class="form-group">
						<label>Name</label>
						<input type="text" class="form-control" placeholder="Título ...">
					</div>
					<!-- text input -->
					<div class="form-group">
						<label>Meta Description</label>
						<input type="text" class="form-control" placeholder="Título ...">
					</div>
					<!-- text input -->
					<div class="form-group">
						<label>Image</label>
						<input type="text" class="form-control" placeholder="Título ...">
					</div>
				</form>

			</div>
			<!-- /.box-body -->
		</div>
		<!-- /.box -->
	</div>
	<div class="col-md-4">
		<div class="box">
			<div class="box-header with-border">
				<h3 class="box-title">Twitter Tags</h3>
			</div>
			<!-- /.box-header -->
			<div class="box-body">

				<form role="form">
					<!-- text input -->
					<div class="form-group">
						<label>Card</label>
						<input type="text" class="form-control" placeholder="Título ...">
					</div>
					<!-- text input -->
					<div class="form-group">
						<label>Site</label>
						<input type="text" class="form-control site" placeholder="Título ...">
					</div>
					<!-- text input -->
					<div class="form-group">
						<label>Title</label>
						<input type="text" class="form-control" placeholder="Título ...">
					</div>
					<!-- text input -->
					<div class="form-group">
						<label>Description</label>
						<input type="text" class="form-control" placeholder="Título ...">
					</div>
					<!-- text input -->
					<div class="form-group">
						<label>Creator</label>
						<input type="text" class="form-control" placeholder="Título ...">
					</div>
					<!-- text input -->
					<div class="form-group">
						<label>Image</label>
						<input type="text" class="form-control" placeholder="Título ...">
					</div>
				</form>

			</div>
			<!-- /.box-body -->
		</div>
		<!-- /.box -->
	</div>
	<div class="col-md-4">
		<div class="box">
			<div class="box-header with-border">
				<h3 class="box-title">Facebook Tags</h3>
			</div>
			<!-- /.box-header -->
			<div class="box-body">

				<form role="form">
					<!-- text input -->
					<div class="form-group">
						<label>Title</label>
						<input type="text" class="form-control" placeholder="Título ...">
					</div>
					<!-- text input -->
					<div class="form-group">
						<label>Type</label>
						<input type="text" class="form-control" placeholder="Título ...">
					</div>
					<!-- text input -->
					<div class="form-group">
						<label>url</label>
						<input type="text" class="form-control" placeholder="Título ...">
					</div>
					<!-- text input -->
					<div class="form-group">
						<label>Image</label>
						<input type="text" class="form-control" placeholder="Título ...">
					</div>
					<!-- text input -->
					<div class="form-group">
						<label>Description</label>
						<input type="text" class="form-control" placeholder="Título ...">
					</div>
					<!-- text input -->
					<div class="form-group">
						<label>Site Name</label>
						<input type="text" class="form-control site" placeholder="Título ...">
					</div>
					<!-- text input -->
					<div class="form-group">
						<label>Admins</label>
						<input type="text" class="form-control" placeholder="Título ...">
					</div>
				</form>

			</div>
			<!-- /.box-body -->
		</div>
		<!-- /.box -->
	</div>
	<div class="col-md-4">
		<div class="box">
			<div class="box-header with-border">
				<h3 class="box-title">Google Robot Tag</h3>
			</div>
			<!-- /.box-header -->
			<div class="box-body">

				<form role="form">
					<!-- Select multiple-->
					<div class="form-group">
						<label>Seleccionar Tags</label>
						<select multiple="multiple" class="form-control select2" style="width: 100%;">
							<option></option>
							<option>all</option>
							<option>noindex</option>
							<option>nofollow</option>
							<option>none</option>
							<option>noarchive</option>
							<option>nosnippet</option>
							<option>noodp</option>
							<option>notranslate</option>
							<option>noimageindex</option>
						</select>
					</div>
					<div class="callout callout-info">
						<h4>all</h4>
						<p>No hay restricciones de indexación ni de presentación de contenido. Nota: Esta directiva es el valor predeterminado y no tiene ningún efecto si se muestra de forma explícita.</p>
					</div>
					<div class="callout callout-info">
						<h4>noindex</h4>
						<p>No se muestra ni esta página ni un enlace "en caché" en los resultados de búsqueda.</p>
					</div>
					<div class="callout callout-info">
						<h4>nofollow</h4>
						<p>No se siguen los enlaces de esta página.</p>
					</div>
					<div class="callout callout-info">
						<h4>none</h4>
						<p>Equivalente a noindex, nofollow.</p>
					</div>
					<div class="callout callout-info">
						<h4>noarchive</h4>
						<p>No se muestra ningún enlace "en caché" en los resultados de búsqueda.</p>
					</div>
					<div class="callout callout-info">
						<h4>nosnippet</h4>
						<p>No se muestra ningún fragmento en los resultados de búsqueda de esta página.</p>
					</div>
					<div class="callout callout-info">
						<h4>noodp</h4>
						<p>No se utilizan metadatos del proyecto de Open Directory para los títulos o los fragmentos que se muestran en esta página.</p>
					</div>
					<div class="callout callout-info">
						<h4>notranslate</h4>
						<p>No se ofrece una traducción de esta página en los resultados de búsqueda.</p>
					</div>
					<div class="callout callout-info">
						<h4>noimageindex</h4>
						<p>No se indexan las imágenes de esta página.</p>
					</div>
				</form>

			</div>
			<!-- /.box-body -->
		</div>
		<!-- /.box -->
	</div>
</div>


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

<script src="{{ asset('vendor/adminlte/dist/js/pages/dashboard.js') }}"></script>
<script src="{{ asset('vendor/adminlte/vendor/ckeditor/ckeditor.js') }}"></script>
<!-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> -->
<script>
	
	$(function () {

		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});

		$('.mostrar_modal').click(function(){
			$('#modal').modal('show');
		});
		$('.seleccionar').click(function(){
			$('.img_preview').html('<img src="' + $(this).prop('src') + '" style="width:100%; max-height:275px" alt="">');
			$('#featured_image').val($(this).prop('name'));
		});

		$('.select2').select2()
		$('.site').val('{!! config('app.name') !!}')
		CKEDITOR.replace('content')
	});

</script>

@stop