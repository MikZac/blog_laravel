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
            padding: 10px;
        }
        label {
            display: block;
        }
    </style>

  </head>
  <body>
   @include('admin.header')
    <div class="d-flex align-items-stretch">
     @include('admin.sidebar')
     <div class="page-content">
        @if(session()->has('message'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>

                {{session()->get('message')}}
            </div>
        @endif
        <h1 class="post_title">Dodaj użytkownika</h1>
        <div>
            <form action="{{url('add_user')}}" method="POST" enctype="multipart/form-data" >
                @csrf
                <div class="div_center">
                    <label>Nazwa użytkownika</label>
                    <input type="text" name="name">
                </div>
                <div class="div_center">
                    <label>Email użytkownika</label>
                    <input type="email" name="email">
                </div>
                <div class="div_center">
                    <label>Hasło użytkownika</label>
                    <input type="password" name="password">
                </div>
                <div class="div_center">
                    <label>Typ użytkownika</label>
                    <select name="usertype">
                        <option value="user">user</option>
                        <option value="editor">editor</option>
                        <option value="admin">admin</option>
                    </select>
                </div>

                <div class="div_center">
                    <input type="submit" class="btn btn-primary" value="Dodaj użytkownika">
                </div>
            </form>

            
        </div>
        
    </div>
    @include('admin.footer')
  </body>
</html>