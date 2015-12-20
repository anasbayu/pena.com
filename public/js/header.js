var headerHiding = true;

$(window).resize(function() {
   if ($(this).width() < 500) {
      headerHiding = false;
   }
   if ($(this).width() > 500) {
      headerHiding = true;
   }
});

$(document).ready(function(){
   var posisiScroll;       // Untuk menyimpan posisi scroll window saat ini.
   var isMuncul = true;    // Untuk status header muncul atau tidak.

   $(window).resize();

   $(window).scroll(function(){
      // Cek pejet bawah dan header sedang muncul dan sudah scroll sampai #main.
      if($(window).scrollTop() > posisiScroll && isMuncul && $(window).scrollTop() > 600 && headerHiding)
      {
         $('#header').stop().slideUp("fast");
         $('#headerContainer').stop().slideUp("slow");
         isMuncul = false;
      }
      // Cek pejet atas dan header sedang tersembunyi.
      if($(window).scrollTop() < posisiScroll && !isMuncul  && headerHiding)
      {
         $('#header').stop().slideDown("fast");
         $('#headerContainer').stop().slideDown("fast");
         isMuncul = true;
      }

      // // ==================Docking switch==================
      // // Cek sudah scroll sampai #main atau belum.
      // if($('#header').offset().top >= $('#main').offset().top)
      // {
      //    // alert("yeay");
      //    $('#switch').css({"position": "fixed",
      //       "top": "-68px"
      //    });
      // }
      // // Mengembalikan docking jika scroll atas menjauhi #main.
      // if($('#header').offset().top <= $('#main').offset().top){
      //    $('#switch').css({"position": "absolute", "top": "450px"});
      // }

      posisiScroll = $(window).scrollTop();     // Set posisi scroll.
   });
});
