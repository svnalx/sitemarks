function showRow(wid) {
    //window.alert(wid);
    document.getElementByID(wid).style.display = "none";
}

function showRow2(rid) {
    var row = document.getElementByID('rid');
    var tags = document.getElementsByTagName('td');
    var i;
    for (i = 0; (i < tags.length) && (i < 4); i++)
    {
        tags[i].style.backgroundColor = "red";
    }
}