namespace Test
{
    let xhttp : XMLHttpRequest = new XMLHttpRequest();

    export function AjaxPost():void
    {
        xhttp.open("POST", "BACKEND/ajaxTest.php",true);

        let form : FormData = new FormData();

        var valor = document.getElementById('numeroIngresado') as HTMLInputElement;
        var numero = parseInt(valor.value);

        //alert(numero);

        form.append("numeroIngresado", numero.toString());

        xhttp.send(form);

        xhttp.onreadystatechange = () =>
        {
            if(xhttp.readyState == 4 && xhttp.status == 200)
            {
                (<HTMLDivElement>document.getElementById("divResultado")).innerHTML = xhttp.responseText;
            }
        }


    }


}