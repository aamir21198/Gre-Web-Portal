function showMore(identifier){
    var child = document.getElementById('link'+identifier);
    child.remove();
    document.getElementById('more'+identifier).style.display = "block";
}

function showMoreOverview(identifier){
    //removes the link
    var child = document.getElementById('link_overview'+identifier);
    child.remove();
    document.getElementById('more_of_overview'+identifier).style.display = "block";
}