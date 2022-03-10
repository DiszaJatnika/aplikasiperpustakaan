$(function() {
    $(window).scroll(function () {
        var scrollval = $(window).scrollTop();
        if (scrollval >= 80){
            $("#showdiv").hide();
            $("#hidediv").show();
        }
        else {
            // $("#showdiv").show();
            $("#hidediv").hide();
        }
    })
})