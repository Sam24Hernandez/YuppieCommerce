/** Preloader **/

$(window).on("load", function() {
   $(".loader").fadeOut();
   $("#preloader").delay(200).fadeOut("slow");
});

/** Tooltip **/
$('[data-toggle="tooltip"]').tooltip(); 
