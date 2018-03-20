@include('page.partials.blog-head')
@include('page.partials.preloader')
@include('page.partials.blog-menu')
@include('page.partials.blog-header')

@include('page.partials.blog-layout1')

{!! $post->content !!}

@include('page.partials.blog-layout2')

@include('page.partials.footer')
@include('page.partials.subscription')
@include('page.partials.scripts')
<script>
	$(function(){
		var asd = '{{url("img/home-bg.jpg")}}'
		$('#home').css({'background':'url('+ asd +')'})
	});
</script>