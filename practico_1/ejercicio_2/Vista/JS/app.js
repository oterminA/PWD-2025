let horaUnoLun = document.getElementById('horaUnoLun');
let horaDosLun = document.getElementById('horaDosLun');
let horaUnoMar = document.getElementById('horaUnoMar');
let horaDosMar = document.getElementById('horaDosMar');
let horaUnoMie = document.getElementById('horaUnoMie');
let horaDosMie = document.getElementById('horaDosMie');
let horaUnoJue = document.getElementById('horaUnoJue');
let horaDosJue = document.getElementById('horaDosJue');
let horaUnoVie = document.getElementById('horaUnoVie');
let horaDosVie = document.getElementById('horaDosVie');

function mostrarAlert() {
    alert("Los campos deben estar llenos");
}

function limpiar() {
    horaUnoLun.style.border = "1px solid"
    horaDosLun.style.border = "1px solid"
    horaUnoMar.style.border = "1px solid"
    horaDosMar.style.border = "1px solid"
    horaUnoMie.style.border = "1px solid"
    horaDosMie.style.border = "1px solid"
    horaUnoJue.style.border = "1px solid"
    horaDosJue.style.border = "1px solid"
    horaUnoVie.style.border = "1px solid"
    horaDosVie.style.border = "1px solid"
}

function validar() {
    let lleno = true;
    limpiar();
    if ((horaUnoLun.value == "") || (horaDosLun.value == "")) {
        horaUnoLun.style.border = "1px solid red"
        horaDosLun.style.border = "1px solid red"
        lleno = false;
        mostrarAlert();
    }

    if ((horaUnoMar.value == "") || (horaDosMar.value == "")) {
        horaUnoMar.style.border = "1px solid red"
        horaDosMar.style.border = "1px solid red"
        lleno = false;
        mostrarAlert();

    }

    if ((horaUnoMie.value == "") || (horaDosMie.value == "")) {
        horaUnoMie.style.border = "1px solid red"
        horaDosMie.style.border = "1px solid red"
        lleno = false;
        mostrarAlert();

    }

    if ((horaUnoJue.value == "") || (horaDosJue.value == "")) {
        horaUnoJue.style.border = "1px solid red"
        horaDosJue.style.border = "1px solid red"
        lleno = false;
        mostrarAlert();

    }

    if ((horaUnoVie.value == "") || (horaDosVie.value == "")) {
        horaUnoVie.style.border = "1px solid red"
        horaDosVie.style.border = "1px solid red"
        lleno = false;
        mostrarAlert();
    }

    return lleno;
}