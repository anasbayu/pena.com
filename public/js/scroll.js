$(document).ready(function(){
   var bantuanScroll = 0;

   $(window).scroll(function(){
      // gAMBAR 1.
      if($(window).scrollTop() > 10)
      {
         $("#gambar1").slideUp();
         $("#gambar1Daftar").css({opacity: 0,
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
      else if($(window).scrollTop() < 10)
      {
         $("#gambar1").slideDown();
         $("#gambar1Daftar").css({opacity: 1});
         $("#gambar2KiriGambar").css({opacity: 0,
            WebkitTransition : 'opacity 1s ease-in-out',
            MozTransition    : 'opacity 1s ease-in-out',
            MsTransition     : 'opacity 1s ease-in-out',
            OTransition      : 'opacity 1s ease-in-out',
            transition       : 'opacity 1s ease-in-out'
         });
      }

      // gAMBAR 2.
      if($(window).scrollTop() > 400)
      {
         $("#gambar2Kiri").css('transform', 'translateX(-100%)');
         $("#gambar2Kanan").css('transform', 'translateX(+100%)');
         bantuanScroll = 1;

         // $("#gambar2Kiri").animate({'transform': 'translateX(-100%)'});
         // $("#gambar2Kanan").animate({"margin-right" : "+=200"});
         //  $("#gambar2Kiri").animate({"margin-left" : "-=1000"});
         //  $("#gambar2Kanan").animate({"margin-right" : "-=1000"});
      }
      else if($(window).scrollTop() < 400 && bantuanScroll == 1)
      {
         $("#gambar2Kiri").css('transform', 'translateX(0%)');
         $("#gambar2Kanan").css('transform', 'translateX(0%)');
      }
   });
});
