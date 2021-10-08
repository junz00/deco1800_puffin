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
    return userName

    //var re = new RegExp(name + "=([^;]+)");
    //var value = re.exec(document.cookie);
    //return (value != null) ? unescape(value[1]) : null;
}
