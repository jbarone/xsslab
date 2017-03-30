var flashDiv = document.createElement("div");
flashDiv.setAttribute("id", "flashDiv");
flashDiv.setAttribute("style", "position:absolute; top:20%; left:30%; z-index:51000;");
flashDiv.setAttribute("align", "center");

var flashImg = document.createElement("img");
flashImg.src = "//127.0.0.1:8000/flash/flash_update.png";
flashImg.setAttribute("onclick", "alert('You should not click on this')");
flashDiv.appendChild(flashImg);

document.body.appendChild(flashDiv);

var backDiv = document.createElement("div");
backDiv.setAttribute("style", "position: absolute; top: 0px; left: 0px; overflow: hidden; display: block; opacity: 0.3; z-index: 50000; background-color: rgb(0, 0, 0); width: 100%; height: 100%;");
backDiv.setAttribute("id", "darkenScreenObject");

document.body.appendChild(backDiv);
