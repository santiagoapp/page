@include('page.partials.header')
@include('page.partials.preloader')
@include('page.partials.menu')
@include('page.partials.home')
@include('page.partials.about')
@include('page.partials.blog')
@include('page.partials.work')
@include('page.partials.testimonials')
@include('page.partials.contact')
@include('page.partials.footer')
@include('page.partials.subscription')
@include('page.partials.scripts')
<script>
	$(function(){
		var asd = '{{url("img/home-bg.jpg")}}'
		$('#home').css({'background':'url('+ asd +')'})
	});
</script>