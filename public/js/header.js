$(document).ready(function(){
   var posisiScroll;
   var isMuncul = true;

   $(window).scroll(function(){
      if($(window).scrollTop() > posisiScroll && isMuncul && $(window).scrollTop() > 520)
      {
         $('#header').stop().slideUp("slow");
         isMuncul = false;
      }
      if($(window).scrollTop() < posisiScroll && !isMuncul)
      {
         $('#header').stop().slideDown("fast");
         isMuncul = true;
      }
      if($('#header').offset().top >= $('#main').offset().top)
      {
         // alert("yeay");
         $('#switch').css({"position": "fixed", "top": "-70px"});
      }
      if($('#header').offset().top <= $('#main').offset().top){
         $('#switch').css({"position": "absolute", "top": "450px"});

      }
      posisiScroll = $(window).scrollTop();
   });
});
