 
var span = document.getElementsByClassName("cerrar")[0];

 
function abrirModal(id) {
  var modal = document.getElementById("ventanaModal"+id);  
  modal.style.display = "block"; 
} 

function closeModal(id) {       
  console.log('test ', id)
  var modal = document.getElementById("ventanaModal"+id);      
  modal.style.display = "none";
}
          
if (span) { 
    span.addEventListener('click', () => {
    modal.style.display = "none";
    });
}

function keyup(id)  {   
  var ganancia = document.getElementById("ganancia"+id);
  var cantidad = document.getElementById("cantidad"+id).value; 
  var profit = document.getElementById("profit"+id).value; 
  console.log('change event1. (%s)', cantidad.value);
   
  ganancia.value=cantidad*profit; 
 
}
 

  /*
$( document ).ready(function() {
  cant.addEventListener('keydown', (event) => {
    const thisTarget = event.target;
    console.log('change event. (%s)', thisTarget.value);
   // ganancia = document.getElementById("ganancia");
    console.log('test ', ' pasa x aca');
  }); 
});  


window.addEventListener("click",function(event) { 
    if(event.target == modal) { 
    event.target.style.display = "none"; 
    }
});¨*/
