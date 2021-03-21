/** == Background Image with Set BG == **/

$('.set-bg').each(function () {
    var bg = $(this).data('setbg');
    $(this).css('background-image', 'url(' + bg + ')');
});

/** == Test == **/

var today = new Date();
var dd = String(today.getDate()).padStart(2, '0');
var mm = String(today.getMonth() + 1).padStart(2, '0');
var yyyy = today.getFullYear();

if (mm === 12) {
    mm = '01';
    yyyy = yyyy + 1;
} else {
    mm = parseInt(mm) + 1;
    mm = String(mm).padStart(2, '0');
}

var timerdate = mm + '/' + dd + '/' + yyyy;

// console.log(timerdate);

/** == CountDown == **/

$("#countdown").countdown(timerdate, function (event) {
    $(this).html(event.strftime("<div class='cd-item'><span>%D</span> <p>Días</p> </div>" + "<div class='cd-item'><span>%H</span> <p>Hrs</p> </div>" + "<div class='cd-item'><span>%M</span> <p>Mins</p> </div>" + "<div class='cd-item'><span>%S</span> <p>Segs</p> </div>"));
});

/** == Range Price Slider == **/

var rangeSlider = $(".price-range"),
        minamount = $("#minamount"),
        maxamount = $("#maxamount"),
        minPrice = rangeSlider.data('min'),
        maxPrice = rangeSlider.data('max');
rangeSlider.slider({
    range: true,
    min: minPrice,
    max: maxPrice,
    values: [minPrice, maxPrice],
    slide: function (event, ui) {
        minamount.val('$' + ui.values[0]);
        maxamount.val('$' + ui.values[1]);
    }
});
minamount.val('$' + rangeSlider.slider("values", 0));
maxamount.val('$' + rangeSlider.slider("values", 1));

/** == Radio BTN == **/

$(".fw-size-choose .sc-item label, .pd-size-choose .sc-item label").on("click", function () {
    $(".fw-size-choose .sc-item label, .pd-size-choose .sc-item label").removeClass('active');
    $(this).addClass("active");
});

/* Nice Select */

$('.sorting').niceSelect();

