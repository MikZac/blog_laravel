<!DOCTYPE html>
<html lang="en">
   <head>
      @include('home.homecss')
      <style>
        .post_deg {
            padding: 30px;
            text-align: center;
        }
        .title_deg {
            font-size: 20px;
            font-weight: bold;
            padding: 15px;
        }
        .desc_deg {
            font-size: 16px;
            font-weight: bold;
            padding: 5px;
        }
        .img_deg {
            height: 300px;
            width: 400px;
            padding: 30px;
            margin: auto;
        }
        .desc_deg {
            margin: auto;
            width: 50%;
        }
      </style>
   </head>
   <body>
      <div class="header_section">
         @include('home.header')
   
      </div>
      @foreach($data as $data)
      <div class="post_deg">
        <img class="img_deg" src="/postimage/{{$data->image}}" alt="">
        <h4 class="title_deg">{{$data->title}}</h4>
        <p class="desc_deg">{{$data->description}}</p>
        <a onclick="return confirm('Czy na pewno chcesz usunąć post?')" href="{{url('my_post_del',$data->id)}}" class="btn btn-danger">Usuń</a>
        <a href="{{url('post_update_page',$data->id)}}" class="btn btn-primary">Aktualizuj</a>
     </div>
     @endforeach
        @include('home.footer')
   </body>
</html>