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

//opens the event registration box
function openBox() {
  var box = document.getElementById("scrapMessage");
  box.style.display = "block";
}
//hides the box when the close button is pressed
function closeBox() {
  var box = document.getElementById("scrapMessage");
  box.style.display = "none";
}
//hides the box if the user presses outside of it        
window.onclick = function(event) {
  var box = document.getElementById("scrapMessage");
  var scrap = document.getElementById("scrap");
  if (event.target == scrap) {
      box.style.display = "none";
  }
}

window.onload = function() {
  activeBookmark('ch2');
}
