function prevPage(){
    location.href="index.php";
}

function nextPage(){
    location.href="map.php";
}



var today = new Date();
var expiry = new Date(today.getTime() + 30 * 24 * 3600 * 1000); // plus 1 day??

function setCookie(name, id) {
    var element = document.getElementById(id);
    var elementValue = escape(element.value);

    document.cookie = name + "=" + elementValue + "; path=/; expires=" + expiry.toGMTString();
    console.log(document.cookie);

    displayCookieValue(name)

}

function displayCookieValue(name) {
    var value = getCookie(name);
    var element = document.getElementById("enterName");
    element.innerHTML = value;

    const namePara = document.createElement("p");
    namePara.className = "p1";
    const nameValue = document.createTextNode(value);
    namePara.appendChild(nameValue);
    const nameForm = document.getElementById("enterName");
    nameForm.parentNode.replaceChild(namePara, nameForm);
}

function getCookie(name) {
    var re = new RegExp(name + "=([^;]+)");
    var value = re.exec(document.cookie);
    return (value != null) ? unescape(value[1]) : null;
}