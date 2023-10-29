<div class="services_section layout_padding">
         <div class="container">
            <h1 class="services_taital">Ostatnie wpisy</h1>
            <p class="services_text">Na naszym blogu znajdziesz wiele ciekawych wpisów na różne tematy</p>
            <div class="services_section_2">
               <div class="row">

                  @foreach($latestPosts as $latestPosts) 
                  <div class="col-md-4">
                     <div><img src="/postimage/{{$latestPosts->image}}" class="services_img"></div>
                     <h4 class="services_post_title">{{$latestPosts->title}}</h4>
                     <p class="services_autor">Autor: <strong>{{$latestPosts->name}}</strong></p>
                     <div class="btn_main"><a href="{{url('post_details',$latestPosts->id)}}">Zobacz więcej</a></div>
                  </div>
                  @endforeach
                  
               </div>
            </div>
         </div>
      </div>