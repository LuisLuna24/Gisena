document.getElementById("Orden_Telefono").addEventListener("keyup", getTelefono)

function getTelefono() {

    let Telefono = document.getElementById("Orden_Cliente").value
    let ListaTelefono = document.getElementById("lista_Telefono");

    if (Telefono.length > 0) {

        let url = "phpOrden/Buscar_Telefono.php"
        let formData = new FormData()
        formData.append("campo", Telefono)

        fetch(url, {
            method: "POST",
            body: formData,
            mode: "cors"
        }).then(response => response.json())
            .then(data => {
                ListaTelefono.style.display = 'block'
                ListaTelefono.innerHTML = data
            })
            .catch(err => console.log(err))
    } else {
        ListaTelefono.style.display = 'none'
    }
}

function mostrarTelefono(cpe) {
    let ListaTelefono = document.getElementById("lista_Telefono");
    ListaTelefono.style.display = 'none'
    document.getElementById("Orden_Telefono").value = cpe;
}