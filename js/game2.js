//Adapted from How to JS animation - https://www.w3schools.com/howto/howto_js_animate.asp

var id = null;
function move_car() {
  stopbutton.style = "display : block !important";
  cont.style = "display : none !important";
  restart.style = "display : none !important";
  var elem = document.getElementById("car");   
  var pos = 10;
  clearInterval(id);
  id = setInterval(frame, 10);
  function frame() {
    if (pos == 700) {
      clearInterval(id);
      restart.style = "display: block !important";
      stopbutton.style = "display : none !important";
    } else {
      pos++;  
      elem.style.left = pos + 'px'; 
    }
  }
}

function stop_car() {
    var elem = document.getElementById("car");
    clearInterval(id);
    cont.style = "display: block !important";
}