document.getElementById("Orden_Cliente").addEventListener("keyup", getCliente)

function getCliente() {

    let Clientes = document.getElementById("Orden_Cliente").value
    let ListaClientes = document.getElementById("lista_Clientes")

    if (Clientes.length > 0) {

        let url = "phpOrden/Buscar_Cliente.php"
        let formData = new FormData()
        formData.append("campo", Clientes)

        fetch(url, {
            method: "POST",
            body: formData,
            mode: "cors"
        }).then(response => response.json())
            .then(data => {
                ListaClientes.style.display = 'block'
                ListaClientes.innerHTML = data
            })
            .catch(err => alert(err))
    } else {
        ListaClientes.style.display = 'none'
    }
}

function mostrar(cp) {
    let ListaClientes = document.getElementById("lista_Clientes")
    ListaClientes.style.display = 'none'
    document.getElementById("Orden_Cliente").value = cp;
    document.getElementById("Orden_Razon").value = cp;
}