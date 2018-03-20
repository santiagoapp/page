<!-- BLOG HEADER -->
<section id="blog-header" data-stellar-background-ratio="0.5">
     <div class="overlay"></div>
     <div class="container">
          <div class="row">

               <div class="col-md-offset-1 col-md-7 col-sm-12">
                    <h2><span class="auto-type"></span></h2>
                    <div id="typed-strings">
                         <p>{!!$post->title!!}</p>
                    </div>
                    <!-- {{ setlocale(LC_TIME, 'Spanish') }} -->
                    {{ \Carbon\Carbon::setUtf8(true) }}
                    {{ \Carbon\Carbon::now()->formatLocalized('%A %d %B %Y') }} 
               </div>

          </div>
     </div>
</section>