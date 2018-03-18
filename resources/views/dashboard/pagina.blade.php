@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Contenido de la Landing Page</h1>
@stop

@section('content')

<!-- Main row -->
<div class="row">
	<!-- Left col -->
	<section class="col-lg-6">
		<div class="box box-primary">
			<div class="box-header with-border">
				<h3 class="box-title">Acerca de</h3>
			</div>
			<!-- /.box-header -->
			<div class="box-body">
				<form role="form">
					<!-- text input -->
					<div class="form-group">
						<label>Titulo</label>
						<input type="text" class="form-control" placeholder="Titulo de la seccion acerca de">
					</div>
					<!-- textarea -->
					<div class="form-group">
						<label>Contenido</label>
						<textarea class="form-control" rows="3" placeholder="Contenido de la seccion acerca de"></textarea>
					</div>
				</form>
			</div>
			<!-- /.box-body -->
		</div>
	</section>
	<!-- /.Left col -->
	<!-- right col -->
	<section class="col-lg-6">

		<div class="box box-primary">
			<div class="box-header with-border">
				<h3 class="box-title">Información de contacto</h3>
			</div>
			<!-- /.box-header -->
			<div class="box-body">
				<form role="form">
					<!-- text input -->
					<div class="form-group">
						<label>Telefono</label>
						<input type="text" class="form-control" placeholder="Titulo de la seccion acerca de">
					</div>
					<!-- text input -->
					<div class="form-group">
						<label>Correo</label>
						<input type="text" class="form-control" placeholder="Titulo de la seccion acerca de">
					</div>
				</form>
			</div>
			<!-- /.box-body -->
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
@stop