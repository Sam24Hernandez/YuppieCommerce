/** Preloader **/

$(window).on("load", function () {
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

/** Active Pagination Button - Products Page **/

var url = window.location.href;

var index = url.split("/");

var actualPage = index[5];

if (isNaN(actualPage)) {
    $("#item1").addClass("active");
} else {
    $("#item" + actualPage).addClass("active");
}

// This is auto select left sidebar
// Cache Selectors
var lastId,
        topMenu = $(".stickyside"),
        topMenuHeight = topMenu.outerHeight(),
        // All list items
        menuItems = topMenu.find("a"),
        // Anchors corresponding to menu items
        scrollItems = menuItems.map(function () {
            var item = $($(this).attr("href"));

            if (item.length) {
                return item;
            }
        });

// Bind to scroll
$(window).scroll(function () {
    // Get container scroll position
    var fromTop = $(this).scrollTop() + topMenuHeight - 250;

    // Get it of current scroll item
    var cur = scrollItems.map(function () {
        if ($(this).offset().top < fromTop)
            return this;
    });
    // Get the id of the current element
    cur = cur[cur.length - 1];
//    var id = cur && cur.length ? cur[0].id : "";
});
