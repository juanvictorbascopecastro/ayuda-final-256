function setTitulos(titulo) {
  document.getElementById("titulo").innerHTML = titulo;
}
function paginar(titulo, pagina) {
  setTitulos(titulo);
  fetch(`paginas/${pagina}`)
    .then((response) => response.text())
    .then((data) => {
      document.getElementById("contenido").innerHTML = data;
    })
    .catch((error) => console.log(error));
}

paginar("INICIO", "inicio.html");
// pregunta 2
function listar() {
  setTitulos("Lista de alumnos");
  if (!document.getElementById("numero").value) {
    alert("El numero es requerido");
    return;
  }
  var ajax = new XMLHttpRequest();
  ajax.onreadystatechange = function () {
    if (ajax.readyState == 4) {
      document.getElementById("contenido").innerHTML = ajax.responseText;
      // verificamos que pagina se va cargar
    }
  };
  ajax.open(
    "GET",
    "paginas/listar.php?num=" + document.getElementById("numero").value,
    true
  );
  ajax.send();
}

// pregunta 3
function horarios() {
  const materia = "SIS256";
  setTitulos("Horarios " + materia);
  var ajax = new XMLHttpRequest();
  ajax.onreadystatechange = function () {
    if (ajax.readyState == 4) {
      document.getElementById("contenido").innerHTML = ajax.responseText;
      // verificamos que pagina se va cargar
    }
  };
  ajax.open("GET", `paginas/horarios.php?materia=${materia}`, true);
  ajax.send();
}

// pregunta 4
function listarAlumnos() {
  setTitulos("Editar calificaciones");
  fetch(`paginas/editarcalificaciones.php`)
    .then((response) => response.text())
    .then((data) => {
      document.getElementById("contenido").innerHTML = data;
    })
    .catch((error) => console.log(error));
}
// actualizamos la nota
function actualizarNota(id) {
  console.log(id);
  const nota = document.getElementById("input-" + id).value;
  if (!nota) {
    alert("Nota es requerido!");
    return;
  }
  if (parseFloat(nota) < 0 || parseFloat(nota) > 100) {
    alert("La nota no es valida!");
    return;
  }
  var ajax = new XMLHttpRequest();
  const formDatos = new FormData();
  formDatos.append("id", id);
  formDatos.append("nota", nota);
  ajax.open("POST", "php/registrarcalificación.php", false);
  ajax.onreadystatechange = function () {
    if (ajax.readyState == 4 && ajax.status == 200) {
      console.log(ajax.responseText);
      // document.getElementById("resultado").innerHTML = ajax.responseText;
    }
  };
  ajax.send(formDatos);
}
