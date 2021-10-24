function printCert() {
    // TODO
}

function nextPage() {
    location.href="index.php";
}

$(document).ready(function() {
    /* Display recipient and date */
    $("#recipient").text(getUserName());
    today = new Date();
    $("#date").text(`${today.getDate()}/${today.getMonth() + 1}/${today.getFullYear()}`);
});
