function show() {
    document.getElementById("startDiv").style.display="block";
    setTimeout("hide()", 5000); // 5 wait, change the delay here
}

function hide() {
    document.getElementById("startDiv").style.display="none";
    document.getElementById("content").style.display="block";
}