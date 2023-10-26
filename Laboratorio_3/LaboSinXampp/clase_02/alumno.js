"use strict";
/// <reference path="persona.ts"/>
var Prueba;
(function (Prueba) {
    class Alumno extends Prueba.Persona {
        constructor(apellidoValue, nombreValue, legajoValue) {
            super(apellidoValue, nombreValue);
            this.legajo = legajoValue;
        }
        GetLegajo() {
            return this.legajo;
        }
        SetLegajo(legajoValue) {
            this.legajo = legajoValue;
        }
        ToString() {
            let x = super.ToString();
            return x + " " + this.legajo;
        }
    }
    Prueba.Alumno = Alumno;
})(Prueba || (Prueba = {}));
