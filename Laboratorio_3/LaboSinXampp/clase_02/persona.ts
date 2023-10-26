namespace Prueba
{
    export class Persona
    {
        protected apellido : string;
        protected nombre : string;


        public constructor(apellidoValue : string, nombreValue : string)
        {
            this.apellido=apellidoValue;
            this.nombre=nombreValue;
        }

        public GetApellido()
        {
            return this.apellido;
        }
        public SetApellido(nuevoApellido : string)
        {
            this.apellido = nuevoApellido;
        }

        public GetNombre()
        {
            return this.nombre;
        }
        public SetNombre(nuevoNombre : string)
        {
            this.nombre = nuevoNombre;
        }

        public ToString() : string
        {
            return this.nombre + " " + this.apellido;
        }

    }



}