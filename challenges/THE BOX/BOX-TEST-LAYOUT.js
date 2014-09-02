var c = document.getElementById("backdrop");

var ctx = c.getContext("2d");

/* Shadowed Box */
ctx.shadowBlur=4;
ctx.shadowColor="#494949";
ctx.fillStyle = "#FFFFFF";
ctx.fillRect(30,27,569,519);
ctx.shadowBlur = null;
ctx.shadowColor = null;

/*Green 1*/
ctx.fillStyle = "#68884B";
ctx.fillRect(40,37,139,194);

/*Green 2*/
ctx.fillStyle = "#81BB4D";
ctx.fillRect(40,242,139,194);

/*Yellow*/
ctx.fillStyle = "#F1AB3C";
ctx.fillRect(190,37,399,399);

/*Blue 1*/
ctx.fillStyle = "#2669A8";
ctx.fillRect(40,447,289,89);

/*Blue 2*/
ctx.fillStyle = "#4794DC";
ctx.fillRect(340,447,89,89);

/*Blue 3*/
ctx.fillStyle = "#87BFF4";
ctx.fillRect(440,447,149,39);

/*Blue 4*/
ctx.fillStyle = "#B6DBFE";
ctx.fillRect(440,497,149,39);