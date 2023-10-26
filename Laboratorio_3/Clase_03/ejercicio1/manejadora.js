"use strict";
var Test;
(function (Test) {
    let xhttp = new XMLHttpRequest();
    function AjaxPost() {
        xhttp.open("POST", "BACKEND/ajaxTest.php", true);
        let form = new FormData();
        var valor = document.getElementById('numeroIngresado');
        var numero = parseInt(valor.value);
        //alert(numero);
        form.append("numeroIngresado", numero.toString());
        xhttp.send(form);
        xhttp.onreadystatechange = () => {
            if (xhttp.readyState == 4 && xhttp.status == 200) {
                document.getElementById("divResultado").innerHTML = xhttp.responseText;
            }
        };
    }
    Test.AjaxPost = AjaxPost;
})(Test || (Test = {}));
//# sourceMappingURL=manejadora.js.map