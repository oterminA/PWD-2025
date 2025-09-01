<?php

class controlHorario {
    function horario($horario){
        foreach ($horario as $dia => $hora) {
            $mensaje= "Día $dia: $hora horas<br> <br>";
        }
    }
}