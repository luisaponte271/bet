 
function keyup(i)  {   
  var ganancia = document.getElementById("ganancia"+i);
  var amount = document.getElementById("amount"+i).value; 
  var profit = document.getElementById("profit"+i).value; 
  
  ganancia.value=amount*profit;  
} 

function confirmapuesta() {
   var respuesta = confirm("Estas seguro que deseas apostar por este equipo?");
   if(respuesta==true) {
    return true;
   } else {
    return false;
   }
}
  