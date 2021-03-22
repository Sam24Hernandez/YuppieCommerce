/* 
 * Search Function Filtering
 */

$("#search a").click(function() {
   if ($("#search input").val() === "") {
       $("#search a").attr("href", "");
   } 
});

$("#search input").change(function() {
   
   var search = $("#search input").val();
   
   var expression = /^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]*$/;
   
   if (!expression.test(search)) {
       
       $("#search input").val("");
       
   } else {
       var evaluateSearch = search.replace(/[áéíóúÁÉÍÓÚ ]/g, "_");
       
       var routeSearch = $("#search a").attr("href");
       
       if ($("#search input").val() !== "") {
           
           $("#search a").attr("href", routeSearch+"/"+evaluateSearch);
           
       }
   }
   
});

/* Search with PC Platforms */

$("#search input").focus(function() {
   $(document).keyup(function(e) {
      e.preventDefault();
      
      if (e.keyCode === 13 && $("#search input").val() !== "") {
          var routeSearch = $("#search a").attr("href");
          
          window.location.href = routeSearch;
      }
   });
});


