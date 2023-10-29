<!DOCTYPE html>
<html lang="en">
   <head>
    <base href="/public">
      @include('home.homecss')
      <style>
         .div_deg {
            text-align: center;
           
        }
        .title_deg h1 {
            
            font-size: 26px;
            color: black;
        }
        label {
            display: block;
            color: black;
        }
        .field_deg {
            margin: auto;
            padding: 25px;
        }
        .btn-outline-secondary {
            text-align: center;
            background-color: black !important;
        }
        .title_deg {
            
        }
      </style>
   </head>
   <body>
      <div class="header_section">
         @include('home.header')   
         
      </div>
      <div class="div_deg">
        <div class="title_deg">

        
        <h1>Aktualizuj Post</h1>
        </div>
        <form action="{{url('update_post_data',$data->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="field_deg">
                <label>Tytuł</label>
                <input type="text" name="title" value="{{$data->title}}">
            </div>
            <div class="field_deg">
                <label>Treść</label>
                <textarea rows="10" cols="50" name="description">{{$data->description}}</textarea>
            </div>
            <div class="field_deg">
                <label>Aktualne zdjęcie</label>
                <img style="margin:auto; margin-bottom:30px;" height="200" width="300" src="/postimage/{{$data->image}}" alt="">
            </div>
            <div class="field_deg">
                <label>Zmień zdjęcie</label>
                <input type="file" name="image">
            </div>
            <div class="field_deg">
             <input type="submit" value="Aktualizuj" class="btn btn-outline-secondary">
            </div>
        </form>
      </div>
        @include('home.footer')
   </body>
</html>