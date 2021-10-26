function printCert() {
    // TODO
}

$(document).ready(function() {
    /* Display recipient and date */
    let uname = getUserName();
    if (uname) {
        $("#recipient").text(uname);
    }
    today = new Date();
    $("#date").text(`${today.getDate()}/${today.getMonth() + 1}/${today.getFullYear()}`);
});
