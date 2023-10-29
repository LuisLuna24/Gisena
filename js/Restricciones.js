var inputNumero = document.getElementById("Telefono");
inputNumero.addEventListener("input", function () {
    var valor = inputNumero.value;
    valor = valor.replace(/[^0-9]/g, "");
    if (valor.length > 10) {
        valor = valor.slice(0, 10);
    }
    inputNumero.value = valor;
});
