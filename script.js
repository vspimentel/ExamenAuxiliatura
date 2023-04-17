var selected = "SIS256";
var last_numero = 0
var titulo = document.getElementById("titulo");
var contenido = document.getElementById("contenido");

inicio()

function inicio(){
    titulo.innerHTML = "Inicio";
    fetch("card.php")
    .then(response => response.text())
    .then(data => contenido.innerHTML = data);
}

function changeAsignment(element){
    if(element.className = "option"){
        selected_elements = document.getElementsByClassName("option_selected")
        if(selected_elements.length > 0){
            selected_elements[0].className = "option"
        }
        element.className = "option_selected"
        selected = element.innerHTML
        switch(titulo.innerHTML.split(" ")[0]){
            case "Lista": 
                createTable()
                titulo.innerHTML =  "Lista " + selected
                break
            case "Calificaciones": 
                calificaciones()
                titulo.innerHTML =  "Calificaciones " + selected
                break
        }
    }
}

function listas(){
    titulo.innerHTML = "Lista " + selected;
    contenido.innerHTML = 
    `<div class="ncuadros">
        <div class="text">Nro de Cuadros</div>
        <form action="javascript:createTable()">
            <input type="number" id="numero"><br><br>
            <input type="submit" value="Obtener">
        </form>
    </div>`;
}

function createTable(){
    if(last_numero == 0){
        numero = document.getElementById("numero").value
        last_numero = numero
    } else {
        numero = last_numero
    }
    fetch(`cuadros.php?numero=${numero}&materia=${selected}`)
    .then(response => response.text())
    .then(data => contenido.innerHTML = data);
}

function calificaciones(){
    titulo.innerHTML = "Calificaciones " + selected;
    fetch("calificaciones.php?materia=" + selected)
    .then(response => response.text())
    .then(data => contenido.innerHTML = data);
}

function registrarcalificacion(calificacion, id){
    var datos = new FormData();
    datos.append("calificacion", calificacion);
    datos.append("id", id);
    var ajax = new XMLHttpRequest();
    ajax.open("POST", "registrarcalificacion.php", false);
    ajax.onreadystatechange = function(){
        if(ajax.readyState == 4 && ajax.status == 200)
            calificaciones()
    }
    ajax.send(datos);
}

function informes(){
    titulo.innerHTML = "Informes";
    fetch("informe.php")
    .then(response => response.text())
    .then(data => contenido.innerHTML = data);
}

function registrarinforme(){
    var datos = new FormData();
    datos.append("mes", document.getElementById("mes").value);
    datos.append("SIS256", document.getElementById("F256").value);
    datos.append("SIS258", document.getElementById("F258").value);
    datos.append("SIS406", document.getElementById("F406").value);
    fetch("registrarinformes.php", {method: "POST", body: datos})
    .then(response => response.text())
    .then(data => document.getElementById("respuesta").innerHTML = data)
}

