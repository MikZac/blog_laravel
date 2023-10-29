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
      </style>
   </head>
   <body>
      <!-- header section start -->
      <div class="header_section">
         @include('home.header')
         @include('home.banner')    
         
      </div>
      <!-- header section end -->
        @include('home.services')
        @include('home.about')
      <!-- footer section start -->
        @include('home.footer')
   </body>
</html>