/** Dynamic Header ++  **/

$("#category-btn").click(function () {
    $("#category-btn").after($("#categories").slideToggle("fast"));
});

/* Responsive Navigation Mobile */

$(".mobile-menu").slicknav({
    prependTo: '#mobile-menu-wrap',
    allowParentLinks: true
});