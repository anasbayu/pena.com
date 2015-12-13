$(document).ready(function(){
   var bantuanScroll = 0;
   var bantuanScrollOrang = 0;

   $(window).scroll(function(){
      // gAMBAR 1.
      if($(window).scrollTop() > 1)
      {
         $("#section1Home").slideUp();
         $("#formDaftar").css({opacity: 0,
            WebkitTransition : 'opacity 1s ease-in-out',
            MozTransition    : 'opacity 1s ease-in-out',
            MsTransition     : 'opacity 1s ease-in-out',
            OTransition      : 'opacity 1s ease-in-out',
            transition       : 'opacity 1s ease-in-out'
         });
         $("#gambar2KiriGambar").css({opacity: 1,
            WebkitTransition : 'opacity 1s ease-in-out',
            MozTransition    : 'opacity 1s ease-in-out',
            MsTransition     : 'opacity 1s ease-in-out',
            OTransition      : 'opacity 1s ease-in-out',
            transition       : 'opacity 1s ease-in-out'
         });
      }
      else if($(window).scrollTop() < 1)
      {
         $("#section1Home").slideDown();
         $("#formDaftar").css({opacity: 1});
         $("#gambar2KiriGambar").css({opacity: 0,
            WebkitTransition : 'opacity 1s ease-in-out',
            MozTransition    : 'opacity 1s ease-in-out',
            MsTransition     : 'opacity 1s ease-in-out',
            OTransition      : 'opacity 1s ease-in-out',
            transition       : 'opacity 1s ease-in-out'
         });
      }

      // Gambar orang.
      if($(window).scrollTop() > 10)
      {
         $("#orang").stop().animate({'left': '300px'}, 1000);
         bantuanScrollOrang = 0;
      }
      else if($(window).scrollTop() < 10 && bantuanScrollOrang == 0)
      {
         $("#orang").stop().animate({'left': '-200px'});
      }

      if($(window).scrollTop() > 700)
      {
         $("#orang").stop().animate({'left': '700px'}, 1000);
         $("#orangBerubah").stop().animate({'left': '550px'}, 1000);
         bantuanScrollOrang = 1;
      }
      else if($(window).scrollTop() < 700 && bantuanScrollOrang == 1)
      {
         $("#orang").stop().animate({'left': '300px'}, 1000);
         $("#orangBerubah").stop().animate({'left': '-400px'}, 1000);
      }
      // gAMBAR 2.
      // if($(window).scrollTop() > 700)
      // {
      //    // $("#gambar2Kiri").css('transform', 'translateX(-100%)');
      //    // $("#gambar2Kanan").css('transform', 'translateX(+100%)');
      //    bantuanScroll = 1;
      //
      //    $("#gambar2Kiri").stop().animate({'left': '-100%'}, 1000);
      //    $("#gambar2Kanan").stop().animate({"right" : "-100%"}, 1000);
      //    //$("#gambar2Kiri").animate({"margin-left" : "-=1000"});
      //    //  $("#gambar2Kanan").animate({"margin-right" : "-=1000"});
      // }
      // else if($(window).scrollTop() < 700 && bantuanScroll == 1)
      // {
      //    $("#gambar2Kiri").stop().animate({'left': '0px'}, 500);
      //    $("#gambar2Kanan").stop().animate({'right': '0px'}, 500);
      //    bantuanScroll = 0;
      // }
   });
});
