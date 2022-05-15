var start = setInterval(function(){ zegar() }, 1000);

function zegar()  {
    var d = new Date();
    var t = d.toLocaleTimeString();
      document.getElementById("zegar").innerHTML = t;
}