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
    return userName
}
