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
        box.style.display = "none";}
}


window.onload = function(){
    activeBookmark('ch1')
    recordFoundPaper("ch2Complete");
    displayName()
}
