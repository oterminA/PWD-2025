let inputNum = document.getElementById('numero');

function validar() {
    let num = inputNum.value.trim();
    let lleno = true;

    if (num === "") { //evaluo si está vacio
        inputNum.style.border = "1px solid red";
        alert("El campo debe estar lleno");
        lleno = false;
    } else {
        inputNum.style.border = "1px solid"; //limpio el campo
    }

    return lleno;
}