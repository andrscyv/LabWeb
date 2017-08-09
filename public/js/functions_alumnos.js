function home(){
	window.location.assign("index.html");
}

function w3_open() {
	var sideBar = document.getElementById("sideBar")
    if (sideBar.style.display === 'block') {
        sideBar.style.display = 'none';
    } else {
        sideBar.style.display = 'block';
    }
}

function w3_close() {
	var sideBar = document.getElementById("sideBar")
    sideBar.style.display = "none";
}