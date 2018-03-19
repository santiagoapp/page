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
				<img class="profile-user-img img-responsive img-circle" src="{{asset('vendor/adminlte/dist/img/avatar.png')}}" alt="User profile picture">

				<h3 class="profile-username text-center">Santiago Pereira</h3>

				<p class="text-muted text-center">Ingeniero Industrial</p>
				<hr>
				<div class="box-body">
					<!-- form start -->
					<form role="form" class="redes-sociales">
						@foreach($redesSociales as $redsocial)
						<input type="hidden" id="id-{{$redsocial->id}}" name="id-{{$redsocial->id}}">
						<div class="form-group">
							<div class="checkbox">
								<label>
									<input type="checkbox" name="{{$redsocial->name}}-checkbox" id="{{$redsocial->name}}-checkbox">
									<span class="fa {{$redsocial->icon}}"></span>
									{{$redsocial->name}}
								</label>
								<input type="text" class="form-control" name="{{$redsocial->name}}-url" id="{{$redsocial->name}}-url" placeholder="URL">
							</div>
						</div>
						@endforeach
					</form>
				</div>
				<!-- /.box-body -->

				<div class="box-footer">
					<button type="button" class="btn btn-primary">Actualizar</button>
				</div>

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
				<form class="form-horizontal">
					<div class="form-group">
						<label for="inputName" class="col-sm-1 control-label">Nombre</label>

						<div class="col-sm-11">
							<input type="name" class="form-control" id="name" placeholder="Nombre">
						</div>
					</div>
					<div class="form-group">
						<label for="email" class="col-sm-1 control-label">Correo</label>

						<div class="col-sm-11">
							<input type="email" class="form-control" id="email" placeholder="Correo Electrónico">
						</div>
					</div>
					<div class="form-group">
						<label for="skills" class="col-sm-1 control-label">Skills</label>

						<div class="col-sm-11">
							<input type="text" class="form-control" id="skills" name="skills" placeholder="Skills">
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
							<button type="submit" class="btn btn-info">Enviar</button>
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


@stop

@section('css')
@stop

@section('js')


<script>
	$(function(){
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
		@foreach($redesSociales as $redsocial)
		
		@if($redsocial->actived)
		$("#{{$redsocial->name}}-checkbox").prop('checked',true)
		$("#{{$redsocial->name}}-url").show();
		@else
		$("#{{$redsocial->name}}-checkbox").prop('checked',false)
		$("#{{$redsocial->name}}-url").hide();		
		@endif
		$("#{{$redsocial->name}}-checkbox").click(function(){
			$("#{{$redsocial->name}}-url").toggle();
		});

		@endforeach

	});


</script>
@stop