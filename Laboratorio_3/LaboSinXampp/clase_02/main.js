"use strict";
/// <reference path= "persona.ts"  />
/// <reference path= "alumno.ts"  />
var TestPrueba;
(function (TestPrueba) {
    var alumnoUno = new Prueba.Alumno("Danilo", "Vukosich", 111677);
    var alumnoCinco = new Prueba.Alumno("Elias", "Vukosich", 111688);
    var alumnoDos = new Prueba.Persona("Eddi", "Yeran");
    var alumnoTres = new Prueba.Persona("Juan", "Mendes");
    var alumnoCuatro = new Prueba.Persona("Pepe", "Argento");
    let AlumnoArray = [alumnoDos, alumnoTres, alumnoCuatro];
    let AlumnoArray2 = [alumnoUno, alumnoCinco];
    for (let i = 0; i < 3; i++) {
        console.log(AlumnoArray[i].ToString());
    }
    for (let i = 0; i < 2; i++) {
        console.log(AlumnoArray2[i].ToString());
    }
})(TestPrueba || (TestPrueba = {}));
