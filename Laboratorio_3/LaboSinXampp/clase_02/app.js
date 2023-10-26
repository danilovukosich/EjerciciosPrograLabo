var __extends = (this && this.__extends) || (function () {
    var extendStatics = function (d, b) {
        extendStatics = Object.setPrototypeOf ||
            ({ __proto__: [] } instanceof Array && function (d, b) { d.__proto__ = b; }) ||
            function (d, b) { for (var p in b) if (Object.prototype.hasOwnProperty.call(b, p)) d[p] = b[p]; };
        return extendStatics(d, b);
    };
    return function (d, b) {
        if (typeof b !== "function" && b !== null)
            throw new TypeError("Class extends value " + String(b) + " is not a constructor or null");
        extendStatics(d, b);
        function __() { this.constructor = d; }
        d.prototype = b === null ? Object.create(b) : (__.prototype = b.prototype, new __());
    };
})();
var Prueba;
(function (Prueba) {
    var Persona = /** @class */ (function () {
        function Persona(apellidoValue, nombreValue) {
            this.apellido = apellidoValue;
            this.nombre = nombreValue;
        }
        Persona.prototype.GetApellido = function () {
            return this.apellido;
        };
        Persona.prototype.SetApellido = function (nuevoApellido) {
            this.apellido = nuevoApellido;
        };
        Persona.prototype.GetNombre = function () {
            return this.nombre;
        };
        Persona.prototype.SetNombre = function (nuevoNombre) {
            this.nombre = nuevoNombre;
        };
        Persona.prototype.ToString = function () {
            return this.nombre + " " + this.apellido;
        };
        return Persona;
    }());
    Prueba.Persona = Persona;
})(Prueba || (Prueba = {}));
/// <reference path="persona.ts"/>
var Prueba;
(function (Prueba) {
    var Alumno = /** @class */ (function (_super) {
        __extends(Alumno, _super);
        function Alumno(apellidoValue, nombreValue, legajoValue) {
            var _this = _super.call(this, apellidoValue, nombreValue) || this;
            _this.legajo = legajoValue;
            return _this;
        }
        Alumno.prototype.GetLegajo = function () {
            return this.legajo;
        };
        Alumno.prototype.SetLegajo = function (legajoValue) {
            this.legajo = legajoValue;
        };
        Alumno.prototype.ToString = function () {
            var x = _super.prototype.ToString.call(this);
            return x + " " + this.legajo;
        };
        return Alumno;
    }(Prueba.Persona));
    Prueba.Alumno = Alumno;
})(Prueba || (Prueba = {}));
/// <reference path= "persona.ts"  />
/// <reference path= "alumno.ts"  />
var TestPrueba;
(function (TestPrueba) {
    var alumnoUno = new Prueba.Alumno("Danilo", "Vukosich", 111677);
    var alumnoCinco = new Prueba.Alumno("Elias", "Vukosich", 111688);
    var alumnoDos = new Prueba.Persona("Eddi", "Yeran");
    var alumnoTres = new Prueba.Persona("Juan", "Mendes");
    var alumnoCuatro = new Prueba.Persona("Pepe", "Argento");
    var AlumnoArray = [alumnoDos, alumnoTres, alumnoCuatro];
    var AlumnoArray2 = [alumnoUno, alumnoCinco];
    for (var i = 0; i < 3; i++) {
        console.log(AlumnoArray[i].ToString());
    }
    for (var i = 0; i < 2; i++) {
        console.log(AlumnoArray2[i].ToString());
    }
})(TestPrueba || (TestPrueba = {}));
