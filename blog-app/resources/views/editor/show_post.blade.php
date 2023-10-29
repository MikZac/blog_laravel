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
        .img_deg {
            height: 100px;
            width: 150px;
            padding: 10px;
        }
    </style>
  </head>
  <body>
   @include('editor.header')
    <div class="d-flex align-items-stretch">
     @include('editor.sidebar')
     <div class="page-content">
        @if(session()->has('message'))
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
            {{session()->get('message')}}

        </div>
        @endif
        <h1 class="title_deg ">Wszystkie posty</h1>
        <table class="table_deg">
            <tr class="th_deg">
                <th>Tytuł</th>
                <th>Autor</th>
                <th>Status</th>
                <th>Typ użytkownika</th>
                <th>Zdjęcie</th>
                <th>Usuń</th>
                <th>Edytuj</th>
                <th>Akceptuj<th>
                <th>Odrzuć<th>
            </tr>
            @foreach($post as $post)
            <tr>
                <td>{{$post->title}}</td>
                <td>{{$post->name}}</td>
                <td>{{$post->post_status}}</td>
                <td>{{$post->usertype}}</td>
                <td><img class="img_deg" src="postimage/{{$post->image}}"/></td>
                <td>
                    <a href="{{url('delete_post',$post->id)}}" class="btn btn-danger" onclick="return confirm('Czy na pewno chcesz usunąć Post?')">Usuń</a>
                </td>
                <td><a href="{{url('edit_post', $post->id)}}" class="btn btn-success">Edytuj</a></td>
                <td><a href="{{url('accept_post', $post->id)}}" class="btn btn-outline-secondary ">Akceptuj</a></td>
                <td><a href="{{url('reject_post', $post->id)}}" class="btn btn-primary">Odrzuć</a></td>
            </tr>
            @endforeach
            
        </table>
     </div>
    @include('editor.footer')
  </body>
</html>

