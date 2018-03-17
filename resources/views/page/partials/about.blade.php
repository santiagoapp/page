<!-- ABOUT -->
<section id="about" data-stellar-background-ratio="0.5">
     <div class="container">
          <div class="row">

               <div class="col-md-5 col-sm-6">
                    <div class="about-info">
                         <div class="section-title">
                              <h2>Deja que me presente</h2>
                              <span class="line-bar">...</span>
                         </div>
                         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</p>
                         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                    </div>
               </div>

               <div class="col-md-3 col-sm-6">
                    <div class="about-info skill-thumb">
                         @foreach($skills as $skill)
                         <strong>{{$skill->name}}</strong>
                         <span class="pull-right">{{$skill->percentage}}%</span>
                         <div class="progress">
                              <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="{{$skill->percentage}}" aria-valuemin="0" aria-valuemax="100" style="width: {{$skill->percentage}}%;"></div>
                         </div>
                         @endforeach
                    </div>
               </div>

               <div class="col-md-4 col-sm-12">
                    <div class="about-image">
                         <img src="{{asset('img/about-image.jpg')}}" class="img-responsive" alt="">
                    </div>
               </div>
               
          </div>
     </div>
</section>