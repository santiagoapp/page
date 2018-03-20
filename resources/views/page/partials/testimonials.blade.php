<!-- BLOG -->
<section id="blog" data-stellar-background-ratio="0.5">
     <div class="container">
          <div class="row">

               <div class="col-md-12 col-sm-12">
                    <div class="section-title">
                         <h2>Recomendaciones</h2>
                         <span class="line-bar">...</span>
                    </div>
               </div>
               @foreach($testimonials as $testimonial)
               <div class="col-md-4" style="padding: 5px; background:#ffffff; margin: 10px" >
                    <div class="card card-info" >
                         <div style="padding: 10px 20px 10px 20px; background:#ffffff">
                              <img src="{{asset($testimonial->imagen->path)}}" style="border-radius:50%;width:100px;height: 100px;">
                              <div class="card-block" >
                                   <p class="card-text" style="color: #0577e5; font-size: 13px; margin-top: 10px;"><cite title="Source Title"><small>{{$testimonial->content}}</small></cite> -{{$testimonial->author}}
                                   </p>
                              </div>
                              <small>{{$testimonial->cargo}} - <a href=""> {{$testimonial->company}}</a></small>
                         </div>
                    </div>
               </div>
               @endforeach
          </div>
     </div>
</section>