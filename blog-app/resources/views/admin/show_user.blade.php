<!DOCTYPE html>
<html>
  <head> 
    @include('editor.css')

    <style>
       .title_deg{
            font-size: 30px;
            font-weight: bold;
            padding: 30px;
            color: white;
            text-align: center;
        }
        .table_deg {
            border: 1px solid white;
            width: 80%;
            text-align: center;
            margin-left: 70px;
        }
        .th_deg {
            background-color: skyblue;
        }
    </style>

  </head>
  <body>
   @include('admin.header')
    <div class="d-flex align-items-stretch">
     @include('admin.sidebar')
     <div class="page-content">
        @if(session()->has('message'))
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
            {{session()->get('message')}}

        </div>
        @endif
        <h1 class="title_deg ">Użytkownicy</h1>
        <table class="table_deg">
            <tr class="th_deg">
                <th>Nazwa</th>
                <th>E-mail</th>
                <th>Typ użytkownika</th>
                <th>Usuń użytkownika</th>
                <th>Zmień typ</th>
            </tr>
            @foreach($users as $user)
            <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->usertype}}</td>
                <td>
                    <a href="{{url('delete_user',$user->id)}}" class="btn btn-danger" onclick="return confirm('Czy na pewno chcesz usunąć Post?')">Usuń</a>
                </td>
                <td>
                    <form action="{{url('update_user_status',$user->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <select name="usertype_{{$user->id}}">
                            <option value="user" {{ $user->usertype == 'user' ? 'selected' : '' }}>user</option>
                            <option value="editor" {{ $user->usertype == 'editor' ? 'selected' : '' }}>editor</option>
                            <option value="admin" {{ $user->usertype == 'admin' ? 'selected' : '' }}>admin</option>
                        </select>
                        <input type="submit" class="btn btn-primary" value="Zmień status">
                    </form>
                </td>
            </tr>
            @endforeach
            
        </table>
     </div>
    @include('admin.footer')
  </body>
</html>