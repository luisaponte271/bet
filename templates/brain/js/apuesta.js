 
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
function enviar(){
  saldo=document.datos.saldo.value;  
  profit=document.datos.profit.value;  
  cantidad=document.datos.cantidad.value;  

  alert('saldo' + saldo);
  alert('profit' + profit);
  alert('cantidad' + cantidad);

 
  ruta="ejemplo9.php" //ruta del archivo
  envio1="envioEmail="+reemail; //datos email
  envio2="envioContra1="+recontra1; //datos contraseña 1�
  envio3="envioContra2="+recontra2; //datos contraseña 2�
  url=ruta+"?"+envio1+"&"+envio2+"&"+envio3; //url para enviar
  ajax1=new ObjetoAjax; //instanciar objeto ObjetoAjax;
  ajax1.pedirTexto(url,"comp"); //método que devuelve texto en un id. 
}
 */
 
  $(document).ready(function (){
      $('#btnguardar').click(function (){
             var datos=$('#frmajax').serialize();
             alert(datos);
             return false;
            $.ajax({
                 type: "POST",
                 url: "apuestaadd2",
                 data:datos,
                 success:function(){ 
                 
                 }
             });
         });
   });
 


 
