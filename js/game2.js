//Adapted from How to JS animation - https://www.w3schools.com/howto/howto_js_animate.asp

var id = null;
function move_car() {
  var elem = document.getElementById("car");   
  var pos = 10;
  clearInterval(id);
  id = setInterval(frame, 10);
  function frame() {
    if (pos == 700) {
      clearInterval(id);
    } else {
      pos++;  
      elem.style.left = pos + 'px'; 
    }
  }
}

function stop_car() {
    var elem = document.getElementById("car");
    clearInterval(id);
    cont.style.display = "block";
}