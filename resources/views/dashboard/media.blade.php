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

				<div class="col-md-3" id="card-{{$imagen->id}}">
					<div class="box box-solid">
						<div class="box-header with-border">
							<h3 class="box-title" id="name-{{$imagen->id}}">{{$imagen->name}}</h3>
						</div>
						<!-- /.box-header -->
						<div class="box-body" style="height: 250px;">
							<a href="#" class="modals" name="{{$imagen->id}}">
								<img id="img-{{$imagen->id}}" src="{{asset($imagen->path)}}" style="width: 100%; margin-bottom: 25px; max-height: 220px;" alt="{{$imagen->alt}}">
							</a>
						</div>
						<!-- /.box-body -->
						<div class="box-footer">
							<p id="description-{{$imagen->id}}">{{$imagen->description}}</p>
							<button type="button" name="{{$imagen->id}}" class="btn btn-danger btn-flat eliminar pull-right"><i class="fa fa-trash"></i></button>
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
					<div class="col-sm-7" id="img-field">
						<img id="img-preview" src="" style="width: 100%; margin-bottom: 25px;" alt="">
					</div>
					<div class="col-sm-5">
						<form role="form" id="formulario">

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
							<div class="msg-error"></div>
						</form>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cerrar</button>
				<button type="button" class="btn btn-primary" id="guardar" name="guardar">Guardar</button>
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

		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});

		$('#guardar').click(function(e){
			e.preventDefault();
			if ($('#id').val() == ''){
				agregarImagen()
			}else{
				editarImagen()	
			}
		})

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

		$('.eliminar').click(function () {
			var id_boton = $(this).prop("name");
			swal({
				title: "¿Está seguro de eliminar la imagen?",
				text: "¡Una vez eliminada no podrá ser recuperada!",
				icon: "warning",
				buttons: true,
				dangerMode: true,
				buttons: ["Cancelar", "Continuar"],
			})
			.then((willDelete) => {
				if (willDelete) {
					eliminarImagen(id_boton);
				}
			});
		});
		function editarImagen()
		{
			if ($("#id").val() != "")
			{
				var imagen = $('#imagen').prop('files')[0];
				var id = $('#id').val();
				var alt = $('#alt').val();
				var name = $('#name').val();
				var description = $('#description').val();

				var formData = new FormData();

				formData.append('imagen', imagen);
				formData.append('id', id);
				formData.append('alt', alt);
				formData.append('name', name);
				formData.append('description', description);

				$.ajax({
					type: "POST",
					url: '{{ action('MediaController@editarImagen')}}',
					processData: false,
					contentType: false,
					data : formData,	
					success: function (data) {
						location.reload();
					},
					error: function (data) {
						console.log('Error:', data);
					}
				});

			}
		}
		function agregarImagen()
		{
			if ($("#imagen").val() != "")
			{
				var imagen = $('#imagen').prop('files')[0];
				var alt = $('#alt').val();
				var name = $('#name').val();
				var description = $('#description').val();

				var formData = new FormData();

				formData.append('imagen', imagen);
				formData.append('alt', alt);
				formData.append('name', name);
				formData.append('description', description);

				$.ajax({
					type: "POST",
					url: '{{ action('MediaController@subirImagen')}}',
					processData: false,
					contentType: false,
					data : formData,	
					success: function (data) {
						location.reload();
						
					},
					error: function (data) {
						console.log('Error:', data);
					}
				});

			}
		}
		function eliminarImagen(id_boton){

			$.ajax({
				type: "POST",
				url: '{{ action('MediaController@eliminar')}}',
				data:{
					"id" : id_boton
				},
				success: function (data) {
					if (data==1) 
					{
						$('#card-' + id_boton).remove();
						swal({
							title: ":D",
							text: "Imagen eliminada con éxito",
							icon: "success"
						});
					}else{
						swal({
							title: ":c",
							text: "La imagen no pudo ser eliminada",
							icon: "warning"
						});
					}
				},
				error: function (data) {
					console.log('Error:', data);
				}
			});
		}
		function validarImagen()
		{
			var extension = $('#imagen').val().split('.').pop().toLowerCase();
			var isImage = $.inArray(extension, ['jpg', 'jpeg', 'png']) != -1 ? 1 : 0;
			if (isImage)
			{
				return true
			}
			return false
		}

		function cargarImagen(evento){
			var tgt = evento.target || window.event.srcElement,
			files = tgt.files;
			var fr = new FileReader();
			fr.onload = function () {
				$("#img-preview").attr('src',fr.result);

			}
			fr.readAsDataURL(files[0]);
		}

		document.getElementById('imagen').onchange = function (evento) {
			if (validarImagen()) {
				$(".msg-error").html('');
				cargarImagen(evento)
			}else{
				$("#img-preview").attr('src','');
				$("#imagen").val('');
				$(".msg-error").html(
					'<div class="alert alert-danger alert-dismissible">'+
					'El archivo que intenta subir no cumple con los requerimientos (solo se admiten formatos .png .jpg .jpeg)'+
					'</div>'
					);
			}
		}
	});
</script>
@stop