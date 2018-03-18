@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Perfil</h1>
@stop

@section('content')


<div class="row">

	<div class="col-md-3">

		<!-- Profile Image -->
		<div class="box box-primary">
			<div class="box-body box-profile">
				<img class="profile-user-img img-responsive img-circle" src="{{asset('vendor/adminlte/dist/img/avatar.png')}}" alt="User profile picture">

				<h3 class="profile-username text-center">Nina Mcintire</h3>

				<p class="text-muted text-center">Software Engineer</p>
				<hr>
				<!-- form start -->
				<form role="form">
					<div class="box-body">
						<div class="form-group">
							<div class="checkbox">
								<label>
									<input type="checkbox" id="facebook-checkbox">
									<span class="fa fa-facebook-official"></span>
									Facebook
								</label>
								<input type="text" class="form-control" id="facebook-url" placeholder="URL">
							</div>
						</div>
						<div class="form-group">
							<div class="checkbox">
								<label>
									<input type="checkbox" id="twitter-checkbox">
									<span class="fa fa-twitter"></span>
									Twitter
								</label>
								<input type="text" class="form-control" id="twitter-url" placeholder="URL">
							</div>
						</div>
						<div class="form-group">
							<div class="checkbox">
								<label>
									<input type="checkbox" id="github-checkbox">
									<span class="fa fa-github"></span>
									Github
								</label>
								<input type="text" class="form-control" id="github-url" placeholder="URL">
							</div>
						</div>
						<div class="form-group">
							<div class="checkbox">
								<label>
									<input type="checkbox" id="youtube-checkbox">
									<span class="fa fa-youtube-play"></span>
									Youtube
								</label>
								<input type="text" class="form-control" id="youtube-url" placeholder="URL">
							</div>
						</div>
						<div class="form-group">
							<div class="checkbox">
								<label>
									<input type="checkbox" id="instagram-checkbox">
									<span class="fa fa-instagram"></span>
									Instagram
								</label>
								<input type="text" class="form-control" id="instagram-url" placeholder="URL">
							</div>
						</div>
					</div>
					<!-- /.box-body -->

					<div class="box-footer">
						<button type="submit" class="btn btn-primary">Submit</button>
					</div>
				</form>

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
						<label for="inputName" class="col-sm-2 control-label">Nombre</label>

						<div class="col-sm-10">
							<input type="name" class="form-control" id="name" placeholder="Nombre">
						</div>
					</div>
					<div class="form-group">
						<label for="email" class="col-sm-2 control-label">Correo</label>

						<div class="col-sm-10">
							<input type="email" class="form-control" id="email" placeholder="Correo Electrónico">
						</div>
					</div>
					<div class="form-group">
						<label for="skills" class="col-sm-2 control-label">Skills</label>

						<div class="col-sm-10">
							<input type="text" class="form-control" id="skills" name="skills" placeholder="Skills">
						</div>
					</div>
					<div class="form-group">
						<label for="experience" class="col-sm-2 control-label">Sobre mi</label>

						<div class="col-sm-10">
							<textarea class="textarea" placeholder="Place some text here"
							style="width: 100%; height: 150px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
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

<script src="{{asset('vendor/adminlte/dist/js/pages/dashboard.js')}}"></script>

<script>
	$(function(){
		//bootstrap WYSIHTML5 - text editor
		$('.textarea').wysihtml5()

		$("#facebook-url").hide();
		$("#twitter-url").hide();
		$("#github-url").hide();
		$("#youtube-url").hide();
		$("#instagram-url").hide();

		$("#facebook-checkbox").click(function(){
			$("#facebook-url").toggle();
		});
		$("#twitter-checkbox").click(function(){
			$("#twitter-url").toggle();
		});
		$("#github-checkbox").click(function(){
			$("#github-url").toggle();
		});
		$("#youtube-checkbox").click(function(){
			$("#youtube-url").toggle();
		});
		$("#instagram-checkbox").click(function(){
			$("#instagram-url").toggle();
		});
	});


</script>
@stop