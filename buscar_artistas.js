function buscarArtistas() {
    var genero = document.getElementById("genero").value;

    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            document.getElementById("resultados-busqueda").innerHTML = xhr.responseText;
        }
    };

    xhr.open("POST", "buscar_artistas.php", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send("genero=" + genero);
}
