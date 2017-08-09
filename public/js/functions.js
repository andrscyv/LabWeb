
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

function displayForm(){
	var form = document.getElementById("form").style.display = "block";
}

function hideForm(){
	form.style.display = "none";
	redirect();

}

function validar(){
	var usuario = document.getElementById("txUsu").value;
	var contrasena = document.getElementById("txCont").value;

	hideForm();
}

function redirect(){
	window.location.assign("alumnos.html");
}
