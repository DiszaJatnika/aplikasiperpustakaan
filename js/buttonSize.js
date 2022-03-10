var header = document.getElementById("selectSize");
var btns = header.getElementsByClassName("btnSize");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
  var current = document.getElementsByClassName("activeSize");
  current[0].className = current[0].className.replace(" activeSize", "");
  this.className += " activeSize ";
  });
}

var height = document.getElementById("selectHeight");
var btnsHeight = height.getElementsByClassName("btnHeight");
for (var x = 0; x < btnsHeight.length; x++) {
  btnsHeight[x].addEventListener("click", function() {
  var currentHeight = document.getElementsByClassName("activeHeight");
  currentHeight[0].className = currentHeight[0].className.replace(" activeHeight", "");
  this.className += " activeHeight";
  });
}

var comfort = document.getElementById("selectComfort");
var btnsComfort = comfort.getElementsByClassName("btnComfort");
for (var x = 0; x < btnsComfort.length; x++) {
  btnsComfort[x].addEventListener("click", function() {
  var currentComfort = document.getElementsByClassName("activeComfort");
  currentComfort[0].className = currentComfort[0].className.replace(" activeComfort", "");
  this.className += " activeComfort";
  });
}

