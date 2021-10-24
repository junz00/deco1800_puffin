// Adapted from HTML Drag and Drop API - https://www.w3schools.com/html/html5_draganddrop.asp

var count = 0;

function exitGame() {
    location.href="article1_p2.php";
}

function dragStart1(event) {
    event.dataTransfer.setData("text", event.target.id);
}

function showDrop(event) {
    event.preventDefault();
}

function drop1(event) {
    event.preventDefault();
    var id = event.dataTransfer.getData("text");
    if (id == "sandbag1" || id == "sandbag2") {
        return;
    }
    var item = document.getElementById(id);
    event.target.appendChild(item);
    plastic_cover.style.display = "block";
    box2.style.display = "block";
    box1.style.display = "none";
}

function dragStart2(event) {
    event.dataTransfer.setData("text", event.target.id); 
}

function drop2(event) {
    event.preventDefault();
    var id = event.dataTransfer.getData("text");
    var item = document.getElementById(id);

    count = count + 1;

    if (count == 1) {
        sandbag2_placed.style.display = "block";
    }
    
    if (count == 2) {
        sandbag1_placed.style.display = "block";
        cont.style.display = "block";
    }
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


window.onload = function(){
    activeBookmark('ch1')
     }
 