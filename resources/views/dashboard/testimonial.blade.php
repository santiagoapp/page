@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Testimonial</h1>
@stop

@section('content')

<div class="row">
	<div class="col-md-8">
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
							<th>Foto</th>
							<th>Autor</th>
							<th>Organización</th>
							<th>Contenido</th>
							<th>Accion</th>
						</tr>
						@foreach($testimonials as $testimonial)
						<tr id="tr-{{$testimonial->id}}">
							<td>{{$testimonial->id}}</td>
							<td><img src="{{asset($testimonial->imagen->path)}}" style="width: 80px; height: 80px;" alt=""></td>
							<td>{{$testimonial->author}}</td>
							<td>{{$testimonial->company}}</td>
							<td>{{$testimonial->cargo}}</td>
							<td>{{$testimonial->content}}</td>
							<td>
								<!-- <button name="{{$testimonial->id}}" type="button" class="btn btn-info btn-flat editar"><span class="fa fa-edit"></span></button> -->
								<button name="{{$testimonial->id}}" type="button" class="btn btn-warning btn-flat eliminar"><span class="fa fa-trash"></span></button>
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

	<div class="col-md-4">
		<div class="box">
			<div class="box-header">
				<h3 class="box-title">Agregar nuevo</h3>
			</div>
			<!-- /.box-header -->
			<div class="box-body">
				<form id="formulario">
					<!-- Select multiple-->
					<div class="form-group">
						<label>Imágen Destacada</label>
						<div class="img_preview" style="width: 100%;border-style: dashed; border-color: #CECECD; height: 280px"></div>
						<input type="hidden" name="featured_image" id="featured_image">
						<input type="hidden" name="id" id="id">
					</div>
					<div class="box-footer">
						<button type="button" class="btn btn-info btn-flat pull-right mostrar_modal">Seleccionar Imágen</button>
					</div>
					<!-- text input -->
					<div class="form-group">
						<label>Autor</label>
						<input type="text" class="form-control" name="author" id="author" placeholder="Autor...">
					</div>
					<!-- text input -->
					<div class="form-group">
						<label>Organizacion</label>
						<input type="text" class="form-control" name="company" id="company" placeholder="Organizacion...">
					</div>
					<!-- text input -->
					<div class="form-group">
						<label>Cargo</label>
						<input type="text" class="form-control" name="cargo" id="cargo" placeholder="Cargo...">
					</div>
					<!-- textarea -->
					<div class="form-group">
						<label>Contenido</label>
						<textarea class="form-control" id="content" name="content" rows="3" placeholder="Resúmen..."></textarea>
					</div>
					<div class="box-footer">
						<button type="button" class="btn btn-info btn-flat pull-right guardar">Guardar</button>
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

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script>
	$(function () {

		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});

		$('.guardar').click(function(){
			agregarTestimonial();
		});

		$('.mostrar_modal').click(function(){
			$('#modal').modal('show');
		});

		$('.seleccionar').click(function(){
			$('.img_preview').html('<img src="' + $(this).prop('src') + '" style="width:100%; max-height:275px" alt="">');
			$('#featured_image').val($(this).prop('name'));
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
					eliminarTestimonial(id_boton);
				}
			});
		});
		function agregarTestimonial(){

			$.ajax({
				type: "POST",
				url: '{{ action('TestimonialController@agregarRegistro')}}',
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
		function eliminarTestimonial(id_boton){

			$.ajax({
				type: "POST",
				url: '{{ action('TestimonialController@eliminar')}}',
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