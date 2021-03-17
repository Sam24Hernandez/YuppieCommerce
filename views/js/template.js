/** == GRID OR LIST == **/

var btn_list = $(".btn-list");
var btn_grid = $(".btn-grid");

for(var i = 0; i < btn_list.length; i++) {
    $(btn_grid[i]).addClass("backColor");
    
    $("#btnGrid"+i).click(function() {
       
       var num = $(this).attr("id").substr(-1);
       
       $("#btnGrid"+num).addClass("backColor");
       $("#btnList"+num).attr("style","");
       $("#btnList"+num).removeClass("backColor");       
    });
    
    $("#btnList"+i).click(function() {
       
       var num = $(this).attr("id").substr(-1);
       
       $("#btnList"+num).addClass("backColor");
       $("#btnGrid"+num).attr("style","");
       $("#btnGrid"+num).removeClass("backColor");       
    });
}
