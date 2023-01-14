function paginar(titulo, pagina) {
  document.getElementById("titulo").innerHTML = titulo;
  fetch(`paginas/${pagina}`)
    .then((response) => response.text())
    .then((data) => {
      document.getElementById("contenido").innerHTML = data;
    })
    .catch((error) => console.log(error));
}

paginar("INICIO", "inicio.html");

// function cambiarMenu(num){
//     switch(num){
//         case 1:
//             document.getElementById('sis256').className = 'gray';
//             document.getElementById('sis258').className = 'white';
//             document.getElementById('sis406').className = 'white';
//         break;
//         case 2:
//             document.getElementById('sis256').className = 'white';
//             document.getElementById('sis258').className = 'gray';
//             document.getElementById('sis406').className = 'white';
//         break;
//         case 3:
//             document.getElementById('sis256').className = 'white';
//             document.getElementById('sis258').className = 'white';
//             document.getElementById('sis406').className = 'gray';
//         break;
//     }
// }

// function obtener(){
//     const materia = document.querySelector('.gray');
//     if(!materia){
//         document.getElementById('error').innerHTML = 'Seleccionar la materia';
//     }else{
//         fetch('listar.php?num=' + document.getElementById("numero").value)
//         .then(response => response.text())
//         .then(data => {
//             document.getElementById("contenido").innerHTML = data;
//         })
//         .catch(error => console.log(error));
//     }
// }
// function cambiarNota(id){

//     const nota = document.getElementById('input-'+id).value;

//     var datos = new FormData();
//     datos.append('id', id);
//     datos.append('calificacion', nota);

//     fetch("registrarcalificación.php",
//         {
//             method: "POST",
//             body: datos
//         })
//         .then(response => response.text())
//         .then(data => {
//             document.getElementById('respuesta').innerHTML = data;
//         })
//         .catch(error => console.log(error));
// }
