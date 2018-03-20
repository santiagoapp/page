<!-- BLOG -->
<section id="blog" data-stellar-background-ratio="0.5">
     <div class="container">
          <div class="row">

               <div class="col-md-12 col-sm-12">
                    <div class="section-title">
                         <h2>Blog</h2>
                         <span class="line-bar">...</span>
                    </div>
               </div>
               @foreach($entradas as $entrada)
               <div class="col-md-6 col-sm-6">
                    <!-- BLOG THUMB -->
                    <div class="media blog-thumb">
                         <div class="media-object media-left">
                              <a href="{!! config('app.url') !!}/blog/post/{!! $entrada->id !!}"><img src="{!! asset($entrada->imagen->path) !!}" class="img-responsive" alt="{!! $entrada->imagen->alt !!}"></a>
                         </div>
                         <div class="media-body blog-info">
                              <small><i class="fa fa-clock-o"></i> {!! $entrada->created_at !!}</small>
                              <h3><a href="{!! config('app.url') !!}/blog/post/{!! $entrada->id !!}">{!! $entrada->title !!}</a></h3>
                              <p>{!! $entrada->excerpt !!}</p>
                              <a href="{!! config('app.url') !!}/blog/post/{!! $entrada->id !!}" class="btn section-btn">Leer artículo</a>
                         </div>
                    </div>
               </div>
               @endforeach
          </div>
     </div>
</section>