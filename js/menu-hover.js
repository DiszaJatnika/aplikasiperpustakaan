$(".mega-links a").hover(function() {
    $("#pic").removeClass().addClass($(this).attr('rel'));
  });