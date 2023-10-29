<!DOCTYPE html>
<html lang="en">
   <head>
    <base href="/public">
      @include('home.homecss')
      <style>
         .post-image {
            
            text-align: center;
           
            max-width: 40%;
            margin: auto;
            padding-top: 30px;
         }
         .post-title-detalis {
            margin-top: 30px;
            font-size: 24px;
         }
         .post-autor-details {
            font-size: 16px;
            margin: 0px;
         }
         .post-desc {
            margin: auto;
            width: 70%;
            margin-bottom: 30px;
         }
      </style>
   </head>
   <body>
      <div class="header_section">
         @include('home.header')  

         
         
      </div>
      <div style="text-align: center" class="col-md-12">
         <div ><img style="text" class="post-image" src="/postimage/{{$post->image}}" class="services_img"></div>
         <h1 class="post-title-detalis">{{$post->title}}</h1>
         <p class="post-autor-details">Autor: <strong>{{$post->name}}</strong></p>
         <p class="post-desc">{{$post->description}}</p>
      </div>
        @include('home.footer')
   </body>
</html>