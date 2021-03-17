/* Variables */
var item = 0;
var itemPagination = $("#pagination li");
var interruptCycle = false;
var imgProduct = $(".product-img");
var titles1 = $("#slide h1");
var para = $("#slide p");
var btnSeeProduct = $("#slide a");
var stopInterval = false;
var toggle = false;

$("#slide ul li").css({"width": 100 / $("#slide ul li").length + "%"});
$("#slide ul").css({"width": $("#slide ul li").length * 100 + "%"});

/* Initial Animation (Images) */

$(imgProduct[item]).animate({"top": -10 + "%", "opacity": 0}, 100);
$(imgProduct[item]).animate({"top": 30 + "px", "opacity": 1}, 600);

$(titles1[item]).animate({"top": -10 + "%", "opacity": 0}, 100);
$(titles1[item]).animate({"top": 30 + "px", "opacity": 1}, 600);

$(para[item]).animate({"top": -10 + "%", "opacity": 0}, 100);
$(para[item]).animate({"top": 30 + "px", "opacity": 1}, 600);

$(btnSeeProduct[item]).animate({"top": -10 + "%", "opacity": 0}, 100);
$(btnSeeProduct[item]).animate({"top": 30 + "px", "opacity": 1}, 600);

/* Pagination */

$("#pagination li").click(function () {
    item = $(this).attr("item") - 1;

    slideMovement(item);
});

/* Next Arrow */

function next() {
    if (item === $("#slide ul li").length - 1) {
        item = 0;
    } else {
        item++;
    }

    slideMovement(item);
}

$("#slide #next").click(function () {
    next();
});

/* Previous Arrow */

$("#slide #previous").click(function () {
    if (item === 0) {
        item = $("#slide ul li").length - 1;
    } else {
        item--;
    }

    slideMovement(item);
});

/* Slide Movement Function */
function slideMovement(item) {

    $("#slide ul li").finish();

    $("#slide ul").animate({"left": item * -100 + "%"}, 1000, "easeOutQuart");

    $("#pagination li").css({"opacity": .5});

    $(itemPagination[item]).css({"opacity": 1});

    interruptCycle = true;

    $(imgProduct[item]).animate({"top": -10 + "%", "opacity": 0}, 100);
    $(imgProduct[item]).animate({"top": 30 + "px", "opacity": 1}, 600);

    $(titles1[item]).animate({"top": -10 + "%", "opacity": 0}, 100);
    $(titles1[item]).animate({"top": 30 + "px", "opacity": 1}, 600);

    $(para[item]).animate({"top": -10 + "%", "opacity": 0}, 100);
    $(para[item]).animate({"top": 30 + "px", "opacity": 1}, 600);

    $(btnSeeProduct[item]).animate({"top": -10 + "%", "opacity": 0}, 100);
    $(btnSeeProduct[item]).animate({"top": 30 + "px", "opacity": 1}, 600);

}

/* Interval Timing */

setInterval(function () {

    if (interruptCycle) {
        interruptCycle = false;

        stopInterval = false;

        $("#slide ul li").finish();

    } else {

        if (!stopInterval) {
            next();
        }
    }

}, 3000);

/* Show Arrows On Hover */

$("#slide").mouseover(function () {

    $("#slide #previous").css({"opacity": 1});
    $("#slide #next").css({"opacity": 1});

    stopInterval = false;

});

$("#slide").mouseout(function () {

    $("#slide #previous").css({"opacity": 0});
    $("#slide #next").css({"opacity": 0});

    stopInterval = false;

});

/* Hide Slide */

$("#btnSlide").click(function () {

    if (!toggle) {

        toggle = true;

        $("#slide").slideUp("fast");

        $("#btnSlide").html('<i class="fa fa-angle-down" title="Mostrar Slide"></i>');

    } else {

        toggle = false;

        $("#slide").slideDown("fast");

        $("#btnSlide").html('<i class="fa fa-angle-up" title="Ocultar Slide"></i>');
    }

});


