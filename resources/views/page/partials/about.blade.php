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
                         <p>Emprendedor, apasionado por la tecnología y la gestión de la información aplicada a las empresas.</p>
                         <p>Ingeniero en formación con conocimiento en diversas herramientas para la optimización de procesos productivos dentro de las organizaciones, CEO de <a href="https://www.modulares-multimueble.com">Modulares Multimueble</a> y admirador del arte.</p>
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