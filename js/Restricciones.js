var inputNumero = document.getElementById("Telefono");
inputNumero.addEventListener("input", function () {
    var valor = inputNumero.value;
    valor = valor.replace(/[^0-9]/g, "");
    if (valor.length > 10) {
        valor = valor.slice(0, 10);
    }
    inputNumero.value = valor;
});

function validarEmail(elemento){

    var texto = document.getElementById(elemento.id).value;
    var regex = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;
    var mensaje2 = document.getElementById("Contraseña2");
    var mensaje1 = document.getElementById("Contraseña1");
    if (!regex.test(texto)) {
        $('#Faltan_Datos').text('Correo invalido');
        mensaje2.classList.add("corr_null");
        mensaje1.classList.add("corr_null");
    } else {
        $('#Faltan_Datos').text('');
        mensaje2.classList.remove("corr_null");
        mensaje1.classList.remove("corr_null");
    }
      
}
