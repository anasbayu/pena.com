@if (isset($feeds))
   @foreach ($feeds as $feed)
      <div class="feedClass">
         <content>
               <div id="feedProfPic">
                  <img src="public/images/orang.png"/>
               </div>
            <div id="feedInfo">
               <a href="cerita/{{$feed->idCerita}}"><h2>{{$feed->judul}}</h2></a>
               <span>
                  Oleh <a href="{{action('userController@show', $feed->user_id)}}">
                     {{App\User::find($feed->user_id)->username}}
                  </a>
               </span>
               <span>|</span>
               <span>{{$feed->created_at}}</span>
               <div id="feedPref">
                  <span>comment</span>
                  <span>like</span>
               </div>
            </div>
            <div id="feedKonten">
               {{$feed->isi}}
            </div>
         </content>
         <hr>
      </div>
   @endforeach
@endif
