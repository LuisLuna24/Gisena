document.getElementById("Orden_Direcciones").addEventListener("keyup", getDomicilio)

function getDomicilio() {

    let Direccion = document.getElementById("Orden_Cliente").value
    let ListaDireccion = document.getElementById("lista_Direccion");

    if (Direccion.length > 0) {

        let url = "phpOrden/Buscar_Direcciones.php"
        let formData = new FormData()
        formData.append("campo", Direccion)

        fetch(url, {
            method: "POST",
            body: formData,
            mode: "cors"
        }).then(response => response.json())
            .then(data => {
                if(data != ''){
                    ListaDireccion.style.display = 'block'
                    ListaDireccion.innerHTML = data
                }else{
                    ListaDireccion.style.display = 'none'
                }
                
            })
            .catch(err => console.log(err))
    } else {
        ListaDireccion.style.display = 'none'
    }
}

function mostrarDireccion(cpe) {
    let ListaDireccion = document.getElementById("lista_Direccion");
    ListaDireccion.style.display = 'none'
    document.getElementById("Orden_Direcciones").value = cpe;
    
}