<!DOCTYPE html>
<html lang="en">
<head>

	<title>Santiagoapp</title>
<!-- 
Hydro Template 
http://www.templatemo.com/tm-509-hydro
--> 
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
@if($post->meta)
@if($post->meta->description <> null)
<meta name="description" content="{!! $post->meta->description !!}">
@endif
@if($post->meta->robot <> null)
<meta name="robots" content="{!! $post->meta->robot !!}" />
@endif
@if($post->meta->schema_name <> null)
<!-- Schema.org markup for Google+ -->
<meta itemprop="name" content="{!! $post->meta->schema_name !!}">
@endif
@if($post->meta->schema_description <> null)
<meta itemprop="description" content="{!! $post->meta->schema_description !!}">
@endif
@if($post->meta->schema_image <> null)
<meta itemprop="image" content="{!! $post->meta->schema_image !!}">
@endif
@if($post->meta->twitter_card <> null)
<!-- Twitter Card data -->
<meta name="twitter:card" content="{!! $post->meta->twitter_card !!}">
@endif
@if($post->meta->twitter_site <> null)
<meta name="twitter:site" content="{!! $post->meta->twitter_site !!}">
@endif
@if($post->meta->twitter_title <> null)
<meta name="twitter:title" content="{!! $post->meta->twitter_title !!}">
@endif
@if($post->meta->twitter_description <> null)
<meta name="twitter:description" content="{!! $post->meta->twitter_description !!}">
@endif
@if($post->meta->twitter_creator <> null)
<meta name="twitter:creator" content="{!! $post->meta->twitter_creator !!}">
@endif
@if($post->meta->twitter_image <> null)
<!-- Twitter summary card with large image must be at least 280x150px -->
<meta name="twitter:image:src" content="{!! $post->meta->twitter_image !!}">
@endif
@if($post->meta->og_title <> null)
<!-- Open Graph data -->
<meta property="og:title" content="{!! $post->meta->twitter_image !!}" />
@endif
@if($post->meta->og_type <> null)
<meta property="og:type" content="{!! $post->meta->og_type !!}" />
@endif
@if($post->meta->og_url <> null)
<meta property="og:url" content="{!! $post->meta->og_url !!}" />
@endif
@if($post->meta->og_image <> null)
<meta property="og:image" content="{!! $post->meta->og_image !!}" />
@endif
@if($post->meta->og_description <> null)
<meta property="og:description" content="{!! $post->meta->og_description !!}" />
@endif
@if($post->meta->og_site_name <> null)
<meta property="og:site_name" content="{!! $post->meta->og_site_name !!}" />
@endif
<meta property="article:published_time" content="{!! $post->created_at !!}" />
<meta property="article:modified_time" content="{!! $post->updated_at !!}" />
@if($post->meta->article_section <> null)
<meta property="article:section" content="{!! $post->meta->article_section !!}" />
@endif
@if($post->meta->twitter_image <> null)
<meta property="fb:admins" content="{!! $post->meta->twitter_image !!}" />
@endif
@endif
@isset($post->tags[0])
<meta property="article:tag" content="@foreach($post->tags as $tag)@if($loop->last){!!$tag->tag->name!!}@else{!! $tag->tag->name!!},@endif @endforeach" />
@endisset

<link rel="stylesheet" href="{{asset('vendor/hydro-master/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('vendor/hydro-master/css/magnific-popup.css')}}">
<link rel="stylesheet" href="{{asset('vendor/hydro-master/css/font-awesome.min.css')}}">

<!-- MAIN CSS -->
<link rel="stylesheet" href="{{asset('vendor/hydro-master/css/templatemo-style.css')}}">