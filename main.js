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
