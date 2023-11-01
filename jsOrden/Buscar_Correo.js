document.getElementById("Orden_Correo").addEventListener("keyup", getCorreo)

function getCorreo() {

    let Correo = document.getElementById("Orden_Cliente").value
    let ListaCoreo = document.getElementById("lista_Correo");

    if (Correo.length > 0) {

        let url = "phpOrden/Buscar_Correo.php"
        let formData = new FormData()
        formData.append("campo", Correo)

        fetch(url, {
            method: "POST",
            body: formData,
            mode: "cors"
        }).then(response => response.json())
            .then(data => {
                ListaCoreo.style.display = 'block'
                ListaCoreo.innerHTML = data
            })
            .catch(err => console.log(err))
    } else {
        ListaCoreo.style.display = 'none'
    }
}

function BuscarCorreo(cpe) {
    let ListaCoreo = document.getElementById("lista_Correo");
    ListaCoreo.style.display = 'none'
    document.getElementById("Orden_Correo").value = cpe;
}
