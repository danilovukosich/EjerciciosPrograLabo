/// <reference path="persona.ts"/>

namespace Prueba
{
    export class Alumno extends Persona
    {
        private legajo : number;

        public constructor(apellidoValue : string, nombreValue:string, legajoValue:number)
        {
            super(apellidoValue,nombreValue);
            this.legajo=legajoValue;
        }

        public GetLegajo()
        {
            return this.legajo;
        }
        public SetLegajo(legajoValue :number)
        {
            this.legajo=legajoValue;
        }

        public ToString(): string 
        {
            let x = super.ToString();

            return x + " " + this.legajo;
        }
    }
}