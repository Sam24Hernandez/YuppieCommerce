/** Preloader **/

$(window).on("load", function() {
   $(".loader").fadeOut();
   $("#preloader").delay(200).fadeOut("slow");
});

/** Tooltip **/
$('[data-toggle="tooltip"]').tooltip(); 

/** Breadcrumb Fixed **/

var activePage = $(".active-page").html();

if (activePage != null) {
    var regActivePage = activePage.replace(/-/g, " ");
    
    $(".active-page").html(regActivePage);
}

/** Active Pagination Button **/

var url = window.location.href;

var index = url.split("/");

var actualPage = index[5];

if(isNaN(actualPage)) {
    $("#item1").addClass("active");
} else {
    $("#item"+actualPage).addClass("active");
}
