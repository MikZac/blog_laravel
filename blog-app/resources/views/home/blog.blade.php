<!DOCTYPE html>
<html lang="en">
   <head>
      @include('home.homecss')
      <style>
         
         .services_img {
            height: 200px;
            object-fit: cover;
            margin-bottom: 10px
         }
         .services_post_title {
            text-align: center;
            font-size: 18px;
         }
         .services_autor {
            text-align: center;
         }
         .services_autor strong {
            color: black;
            font-weight: bold;
         }
         .post_deg {
            margin-bottom: 40px;
         }
      </style>
   </head>
   <body>
      <div class="header_section">
         @include('home.header')
         <div class="banner_section layout_padding">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="container">
                        <h1 class="banner_taital">Wpisy blogowe</h1>
                        <p class="banner_text">Zobacz wpisy na naszym blogu. Na pewno znajdziesz treści które Cię zainteresują.</p>
                        <div class="read_bt"><a href="#">Sprawdź!</a></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>    
      </div>
      <div class="services_section layout_padding">
        <div class="container">
           <h2 class="services_taital">Nasze wpisy</h2>
           <p class="services_text">Na naszym blogu znajdziesz wiele ciekawych wpisów na różne tematy</p>
           <div class="services_section_2">
              <div class="row">

                 @foreach($post as $post) 
                 <div class="col-md-4 post_deg">
                    <div><img src="/postimage/{{$post->image}}" class="services_img"></div>
                    <h4 class="services_post_title">{{$post->title}}</h4>
                    <p class="services_autor">Autor: <strong>{{$post->name}}</strong></p>
                    <div class="btn_main"><a href="{{url('post_details',$post->id)}}">Zobacz więcej</a></div>
                 </div>
                 @endforeach
                 
              </div>
           </div>
        </div>
     </div>
        @include('home.footer')
   </body>
</html>