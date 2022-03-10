function openReviews(evt, slideName) {
  var i, x, tablinkSlides;
  x = document.getElementsByClassName("reviewTab");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  tablinkSlides = document.getElementsByClassName("tablinkSlide");
  for (i = 0; i < x.length; i++) {
    tablinkSlides[i].className = tablinkSlides[i].className.replace(" reviewButton", "");
  }
  document.getElementById(slideName).style.display = "block";
  evt.currentTarget.className += " reviewButton";
}