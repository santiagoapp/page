<!-- WORK -->
<section id="work" data-stellar-background-ratio="0.5">
     <div class="container">
          <div class="row">

               <div class="col-md-12 col-sm-12">
                    <div class="section-title">
                         <h2>Proyectos</h2>
                         <span class="line-bar">...</span>
                    </div>
               </div>
               @foreach($images as $image) 
               <div class="col-md-4 col-sm-6" style="margin-bottom: 10px;">
                    <!-- WORK THUMB -->
                    <div class="work-thumb">
                         <a href="{{$image->path}}" class="image-popup">
                              <img src="{{$image->path}}" class="img-responsive" alt="{{$image->alt}}">

                              <div class="work-info">
                                   <h3>{{$image->name}}</h3>
                                   <small>{{$image->description}}</small>
                              </div>
                         </a>
                    </div>
               </div>
               @endforeach
          </div>
     </div>
</section>