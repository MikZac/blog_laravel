<div class="header_main">
            
            <div class="mobile_menu">
               <nav class="navbar navbar-expand-lg navbar-light bg-light">
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNav">
                     <ul class="navbar-nav">
                        <li class="nav-item">
                           <a class="nav-link" href="index.html">Home</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link " href="{{url('blog')}}">Blog</a>
                        </li>
                        
                     @if (Route::has('login'))

                     @auth
                    
                     <li class="nav-item"><a class="nav-link " href="{{url('create_post')}}">Dodaj Post</a></li>
                     <li class="nav-item"><a class="nav-link " href="{{url('my_post')}}">Moje Posty</a></li>
                     <li> <x-app-layout>
   
                     </x-app-layout></li>

                     @else
                        <li class="nav-item">
                           <a class="nav-link " href="{{route('login')}}">Login</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link " href="{{route('register')}}">Rejestracja</a>
                        </li>
                        
                     @endauth

                     @endif
                     </ul>
                  </div>
               </nav>
            </div>
            <div class="container-fluid">
               <div class="menu_main">
                  <ul>
                     <li class="active"><a href="/">Home</a></li>
                     <li><a href="{{url('blog')}}">Blog</a></li>

                     @if (Route::has('login'))

                     @auth
                     <li> <x-app-layout>
   
                     </x-app-layout></li>
                     <li><a href="{{url('create_post')}}">Dodaj Post</a></li>
                     <li><a href="{{url('my_post')}}">Moje Posty</a></li>

                     @else

                     <li><a href="{{route('login')}}">Login</a></li>

                     <li><a href="{{route('register')}}">Rejesracja</a></li>

                     @endauth

                     @endif
                  </ul>
               </div>
            </div>
         </div>