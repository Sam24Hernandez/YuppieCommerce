/* Global variable from route */

var hidePath = $("#hidePath").val();

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

/** Back to top button **/

$.scrollUp({
   scrollText: "",
   scrollSpeed: 2000,
   easingType: "easeOutQuint"
});

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

// Change the type of input to password or text

function Toggle() {
    var temp = document.getElementById("regPassword");

    if (temp.type === "password") {
        temp.type = "text";
    } else {
        temp.type = "password";
    }
}

// Change the type of input to password or text on Login Form

function ToggleLogin() {

    var tempLogin = document.getElementById("logPassword");

    if (tempLogin.type === "password") {

        tempLogin.type = "text";

    } else {

        tempLogin.type = "password";

    }

}

// Change the type of input to password or text on Update Password Form

function TogglePasswordChange() {

    var tempProfile = document.getElementById("editPassword");

    if (tempProfile.type === "password") {

        tempProfile.type = "text";

    } else {

        tempProfile.type = "password";

    }

}


// Change the icon toggle on click to the register Form

$("#toggle-password").click(function () {

    if (document.getElementById("show-pass").className === "fa fa-eye") {

        document.getElementById("show-pass").className = "fa fa-eye-slash";

    } else {

        document.getElementById("show-pass").className = "fa fa-eye";

    }

});

// Change the icon toggle on click to the login form

$("#toggle-password-login").click(function () {

    if (document.getElementById("show-pass-login").className === "fa fa-eye") {

        document.getElementById("show-pass-login").className = "fa fa-eye-slash";

    } else {

        document.getElementById("show-pass-login").className = "fa fa-eye";

    }

});

$("#toggle-password-change").click(function () {

    if (document.getElementById("show-pass-change").className === "fa fa-eye") {

        document.getElementById("show-pass-change").className = "fa fa-eye-slash";

    } else {

        document.getElementById("show-pass-change").className = "fa fa-eye";

    }

});

/** Close Offers **/

$(".closeOffers").click(function() {
   
   $(this).parent().remove();
    
});
