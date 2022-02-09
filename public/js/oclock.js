var timeDisplay = document.getElementById("time");
var dayDisplay = document.getElementById("day");
var timeMarkups = document.getElementById("dayMarkups");

function refreshTime() {
  var dateString = new Date().toLocaleString("en-US", {timeZone: "America/Sao_Paulo"});
  var formattedString = dateString.replace(", ", " - ");
  var formattedString = formattedString.split(" - ")
  var time = formattedString[1];
  var day = formattedString[0];

  var time = time.split(":");
  var time = time[0] + ':' + time[1];

  timeDisplay.innerHTML = time;
  dayDisplay.innerHTML = day;
}

setInterval(refreshTime, 1000);