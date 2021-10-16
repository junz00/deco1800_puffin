function prevPage(){
    location.href="article1_p2.php";
}

function nextPage(){
    location.href="article2_p1.php";
}

function displayCookieValue() {
    var value =getCookie();
    var element = document.getElementById("enterName");
    element.innerHTML = value;
}

function getCookie() {
    storedName = document.cookie
    userName= storedName.slice(9,)
    return ", " + userName 
}


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
        box.style.display = "none";}
}