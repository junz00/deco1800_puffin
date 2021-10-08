function prevPage(){
    location.href="map.php";
}

function nextPage(){
    location.href="article1_p2.php";
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
