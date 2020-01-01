window.onload = function startTime() {
    var today = new Date();
    var h = today.getHours();
    var m = today.getMinutes();
    var s = today.getSeconds();
    m = checkTime(m);
    s = checkTime(s);
    document.getElementById('currentTime').innerHTML =
    h + ":" + m + ":" + s;
    var t = setTimeout(startTime, 500);
}

var today = new Date();
var date = (today.getMonth()+1)+'/'+today.getDate()+'/'+today.getFullYear();
var todaysDate = document.getElementById('todaysDate');
todaysDate.innerHTML = "Todays Date: " + date;


function checkTime(i) {
    if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
    return i;
}