// Ventana modal
var modal = document.getElementById("ventanaModal");

// Botón que abre el modal
var boton = document.getElementById("abrirModal");

// Hace referencia al elemento <span> que tiene la X que cierra la ventana
var span = document.getElementsByClassName("cerrar")[0];

console.log('abrir modal -> ',boton); // null

function closeModal() {            
  modal.style.display = "none";
}

if (boton) { 
    boton.addEventListener('click', () => {
    modal.style.display = "block";
    });
}

console.log('abrir modal -> ',span); // null
// Si el usuario hace click en la x, la ventana se cierra
if (span) { 
    span.addEventListener('click', () => {
    modal.style.display = "none";
    });
}
 
  
// Si el usuario hace click fuera de la ventana, se cierra.
window.addEventListener("click",function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
});
