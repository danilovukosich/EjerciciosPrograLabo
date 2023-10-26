"use strict";
var Prueba;
(function (Prueba) {
    class Persona {
        constructor(apellidoValue, nombreValue) {
            this.apellido = apellidoValue;
            this.nombre = nombreValue;
        }
        GetApellido() {
            return this.apellido;
        }
        SetApellido(nuevoApellido) {
            this.apellido = nuevoApellido;
        }
        GetNombre() {
            return this.nombre;
        }
        SetNombre(nuevoNombre) {
            this.nombre = nuevoNombre;
        }
        ToString() {
            return this.nombre + " " + this.apellido;
        }
    }
    Prueba.Persona = Persona;
})(Prueba || (Prueba = {}));
