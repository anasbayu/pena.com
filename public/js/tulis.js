$(document).ready(function(){
   // Sembunyikan area menulis secara default.
   $('#overlay').hide();

   // Munculkan area menulis.
   $('#tulis').click(function(event){
      event.preventDefault();
      $('#overlay').slideDown();
      $("body").css("overflow", "hidden");
   });

   // Sembunyikan area menulis.
   $('#overlay').click(function() {
      $('#overlay').slideUp("fast");
      $("body").css("overflow", "auto");
   });
});
