
var bulle = function() {
	ellipse(20,20,20,20);
};

var monCanvas=document.getElementById("monCanvas");
var ctx = monCanvas.getContext("2d");

ctx.lineWidth="8";
ctx.strokeStyle="#316AC5";
ctx.rect(20,20,660,160);
ctx.stroke();
