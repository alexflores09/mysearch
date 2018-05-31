function openSearch() {
    document.getElementById("myOverlay").style.display = "block";
}

function closeSearch() {
    document.getElementById("myOverlay").style.display = "none";
}

$(document).ready(function(){
    if($('.slider').length > 0){
        $('.slider').slider();
    }
});