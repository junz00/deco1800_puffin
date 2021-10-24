function prevPage(){
    location.href="intro.php";
}

function nextPage(){
    location.href="article1_p1.php";
}

$(document).ready(function() {
    /* Event handler when changing galleries. */
    $(".db-queries li").click(function() {
        $(".db-queries li").removeClass("selected");
        $(this).addClass("selected");
        $(".gallery-images")
                .attr("query", $(this).attr("query"))
                .attr("limit", $(this).attr("limit"));
        updateGalleries();
    });
});


window.onload = function() {
    activeBookmark('gallery')
}
 