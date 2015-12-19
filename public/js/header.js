$(document).ready(function(){
   var posisiScroll;       // Untuk menyimpan posisi scroll window saat ini.
   var isMuncul = true;    // Untuk status header muncul atau tidak.

   $(window).scroll(function(){
      // Cek pejet bawah dan header sedang muncul dan sudah scroll sampai #main.
      if($(window).scrollTop() > posisiScroll && isMuncul && $(window).scrollTop() > 600)
      {
         $('#header').stop().slideUp("fast");
         $('#headerContainer').stop().slideUp("slow");
         isMuncul = false;
      }
      // Cek pejet atas dan header sedang tersembunyi.
      if($(window).scrollTop() < posisiScroll && !isMuncul)
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
