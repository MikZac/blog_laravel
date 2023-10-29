<!DOCTYPE html>
<html lang="en">
   <head>
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
            padding: 5px;
        }
        .btn-outline-secondary {
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

        
        <h1>Dodaj Post</h1>
        </div>
        <form action="{{url('user_post')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="field_deg">
                <label>Tytuł</label>
                <input type="text" name="title">
            </div>
            <div class="field_deg">
                <label>Treść</label>
                <textarea rows="10" cols="50" name="description"></textarea>
            </div>
            <div class="field_deg">
                <label>Dodaj zdjęcie</label>
                <input type="file" name="image">
            </div>
            <div class="field_deg">
             <input type="submit" value="Dodaj post" class="btn btn-outline-secondary">
            </div>
        </form>
      </div>

        @include('home.footer')
   </body>
</html>