<!-- BLOG DETAIL -->
<section id="blog-detail" data-stellar-background-ratio="0.5">
	<div class="container">
		<div class="row">

			<div class="col-md-offset-1 col-md-10 col-sm-12">
				<!-- BLOG THUMB -->
				<div class="blog-detail-thumb">
					<div class="blog-image">
						@if($post->imagen)
						<img src="{!! asset($post->imagen->path) !!}" class="img-responsive imagen-principal" alt="{!! $post->imagen->alt !!}">
						@else
						@endif
					</div>

