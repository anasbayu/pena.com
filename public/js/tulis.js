// $(document).ready(function(){
//    // Sembunyikan area menulis secara default.
//    $('#overlay').hide();
//
//    // Munculkan area menulis.
//    $('#tulis').click(function(event){
//       event.preventDefault();
//       $('#overlay').slideDown();
//       $("body").css("overflow", "hidden");
//    });
//
//    // Sembunyikan area menulis.
//    $('#overlay').click(function() {
//       $('#overlay').slideUp("fast");
//       $("body").css("overflow", "auto");
//    });
// });

$(document).ready(function()
{
    var wordCounts = {};
    $("#textarea").keyup(function() {
        var matches = this.value.match(/\b/g);
        wordCounts[this.id] = matches ? matches.length / 2 : 0;
        var finalCount = 0;
        $.each(wordCounts, function(k, v) {
            finalCount += v;
        });
        $('#jumlahHuruf').html(finalCount);
        am_cal(finalCount);
    }).keyup();
 });
