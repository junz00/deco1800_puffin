function activeBookmark(page){
    if(page == "map"){
        var bookmark = document.getElementById("bmMap");
        bookmark.classList.add("active");
    }else if(page == "ch1"){
        var bookmark = document.getElementById("bmCh1");
        bookmark.classList.add("active");
    } else if(page == "ch2"){
        var bookmark = document.getElementById("bmCh2");
        bookmark.classList.add("active");
    }else if(page == "gallery"){
        var bookmark = document.getElementById("bmGallery");
        bookmark.classList.add("active");
    }else {
        var bookmark = document.getElementById("bmQuiz");
        bookmark.classList.add("active");
    }
}