<!DOCTYPE html>
<html>
  <head> 
    @include('editor.css')

    <style>
        .post_title {
            font-size: 30px;
            font-weight: bold;
            padding: 30px;
            text-align: center;
            color: white;
        }
        .div_center {
            text-align: center;
            padding: 30px;
        }
        label {
            display: inline-block;
            width: 200px;
        }
    </style>

  </head>
  <body>
   @include('editor.header')
    <div class="d-flex align-items-stretch">
     @include('editor.sidebar')
     <div class="page-content">
        @if(session()->has('message'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>

                {{session()->get('message')}}
            </div>
        @endif
        <h1 class="post_title">Dodaj Post</h1>
        <div>
            <form action="{{url('add_post')}}" method="POST" enctype="multipart/form-data" >
                @csrf
                <div class="div_center">
                    <label>Tytuł wpisu</label>
                    <input type="text" name="title">
                </div>
                <div class="div_center">
                    <label>Treść wpisu</label>
                    <textarea name="description"></textarea>
                </div>
                <div class="div_center">
                    <label>Dodaj zdjęcie</label>
                    <input type="file" name="image">
                </div>
                <div class="div_center">
                    <input type="submit" class="btn btn-primary">
                </div>
            </form>
        </div>
        
    </div>
    @include('editor.footer')
  </body>
</html>