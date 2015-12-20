<div id="headerContainer"></div>
<div id="header">
   <a href="{{url('feed')}}"><img src="{{asset('public/images/logoPenaHitam.png')}}" id="logoHeader"/></a>
   <div id="menu">
      <ul>
         <a href="{{url('tulis')}}"><li><b>Tulis</b></li></a>
         {{-- <a href=""><li><b>Notifikasi</b></li></a> --}}
         <a href="{{url('profil')}}">
            <div id="profPicHeader">
               {{-- <img src="{{asset('public/images/profPic/emmaProfPic.jpg')}}"/> --}}
               @if ($user != Auth::user())
                  <img src="{{asset($currentUser['profpic'])}}"/>
               @else
                  <img src="{{asset($user['profpic'])}}"/>
               @endif
            </div>
         </a>
      </ul>
   </div>
</div>
