<!-- MENU -->
<section class="navbar custom-navbar navbar-fixed-top" role="navigation">
     <div class="container">

          <div class="navbar-header">
               <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
               </button>

               <!-- lOGO TEXT HERE -->
               <a href="index.html" class="navbar-brand">SantiagoAPP</a>
          </div>

          <!-- MENU LINKS -->
          <div class="collapse navbar-collapse">
               <ul class="nav navbar-nav navbar-nav-first">
                    <li><a href="{!! config('app.url') !!}#home" class="smoothScroll">Inicio</a></li>
                    <li><a href="{!! config('app.url') !!}#about" class="smoothScroll">Sobre mi</a></li>
                    <li><a href="{!! config('app.url') !!}#blog" class="smoothScroll">Blog</a></li>
                    <li><a href="{!! config('app.url') !!}#work" class="smoothScroll">Proyectos</a></li>
                    <li><a href="{!! config('app.url') !!}#contact" class="smoothScroll">Contacto</a></li>
               </ul>

               <ul class="nav navbar-nav navbar-right">
                    @foreach($redesSociales as $redSocial)
                    @if($redSocial->actived)
                    <li><a href="{{$redSocial->url}}"><i class="fa {{$redSocial->icon}}"></i></a></li>
                    @endif
                    @endforeach
                    <li class="section-btn"><a href="#" data-toggle="modal" data-target="#modal-form">Suscribete</a></li>
               </ul>
          </div>

     </div>
</section>