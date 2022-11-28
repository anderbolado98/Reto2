<?php

include databaseconnect.php;

$fecha->format("Y-m-d") = $_POST["fecha"];
$proyecto = $_POST["proyecto"];
$importe = $_POST["importe"];
$divisa = $_POST["divisa"];
$pais = $_POST["pais"];
$descripcion = $_POST["descripcion"];
$ticket = $_POST["ticket"];


$sql = "INSERT INTO ander_gastos (fecha, proyecto, importe, divisa, pais, descripcion, ticket) 
    VALUES ($fecha, $proyecto, $importe, $divisa, $pais, $descripcion, $ticket)";
    ejecutarquery($sql);

?>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Formulario de GASTOS</title>
<style>

body{
  height: 100%; 
  font-family: 'Noto Sans', sans-serif;
  background-color: #ab4493; 
}


.contact_form{  
  width: 460px; 
  height: auto;
  margin: 80px auto;
  border-radius: 10px;  
  padding-top: 30px;
  padding-bottom: 20px;  
  background-color: #fbfbfb; 
  padding-left: 30px; 
}


input{
  background-color: #fbfbfb; 
  width: 408px; 
  height: 40px; 
  border-radius: 5px;  
  border-style: solid; 
  border-width: 1px; 
  border-color: #ab4493; 
  margin-top: 10px;  
  padding-left: 10px;
  margin-bottom: 20px; 
}


textarea{
  background-color: #fbfbfb; 
  width: 405px; 
  height: 150px; 
  border-radius: 5px;  
  border-style: solid; 
  border-width: 1px; 
  border-color: #ab4493; 
  margin-top: 10px;  
  padding-left: 10px;
  margin-bottom: 20px; 
  padding-top: 15px; 
}


label{
  display: block; 
  float: center;  
}


button{
  height: 45px; 
  padding-left: 5px;
  padding-right: 5px;   
  margin-bottom: 20px; 
  margin-top: 10px;   
  text-transform: uppercase;
  background-color: #ab4493; 
  border-color: #ab4493; 
  border-style: solid; 
  border-radius: 10px;  
  width: 420px;   
  cursor: pointer;
}


button p{
  color: #fff; 
}


span{
  color: #ab4493; 
}


.aviso{
  font-size: 13px;  
  color: #0e0e0e;  
}


h1{
  font-size: 39px;  
  text-align: letf; 
  padding-bottom: 20px; 
  color: #ab4493;
}


h3{
  font-size: 16px; 
  padding-bottom: 30px;
  color: #0e0e0e;   
}


p{
  font-size: 14px; 
  color: #0e0e0e; 
}


::-webkit-input-placeholder {
 color: #a8a8a8;
}


::-webkit-textarea-placeholder {
 color: #a8a8a8;
}


.formulario input:focus{
  outline:0;
  border: 1px solid #97d848;
}


.formulario textarea:focus{
  outline:0;
  border: 1px solid #97d848;
}

</style>
  
  </head>


<body>  
  
  <!-- formulario de contacto en html y css -->  

  <div class="contact_form">

    <div class="formulario">      
      <h1>Formulario de Gastos</h1>
        <h3>Añadir solo la informacion necesaria</h3>


        <form action="#" name="form">       
   
              
          <p>
            <label for="fecha" class="fecha">Fecha
              <span class="obligatorio">*</span>
            </label>
              <input type="date" name="fecha" id="fecha" required="obligatorio" placeholder="Fecha actual">
          </p>    
        
          <p>
            <label for="Proyecto" class="proyecto">Proyecto
              <span class="obligatorio">*</span>
            </label>
              <input type="text" name="proyecto" id="Proyecto" required="obligatorio" placeholder="Proyecto">
          </p>
          
          <p>
          <label for="Importe" class="importe">Importe
            <span class="obligatorio">*</span>
          </label>
            <input type="number" name="importe" id="Importe" required="obligatorio" placeholder="Importe">
        </p>
        
          <p>
          <label for="Divisa" class="divisa">Divisa
            <span class="obligatorio">*</span>
          </label>
            <input type="text" name="divisa" id="Divisa" required="obligatorio" placeholder="Divisa">
        </p>    

        <p>
          <label for="Pais" class="pais">Pais
            <span class="obligatorio">*</span>
          </label>
            <input type="text" name="pais" id="Pais" required="obligatorio" placeholder="Pais">
        </p>  

          <p>
            <label for="Descripcion" class="descripcion">Descripcion
              <span class="obligatorio">*</span>
            </label>                     
                              <textarea name="descripcion" class="Descripcion" id="Descripcion" required="obligatorio" placeholder="Descripcion de la donacion..."></textarea> 
                          </p>             
            
                          <p>
          <label for="ticket" class="colocar_ticket">Ticket
          </label>
            <input type="text" name="ticket" id="ticket" placeholder="ticket">
        </p> 
        
          <button type="submit" name="enviar_formulario" id="enviar"><p>Enviar</p></button>

          <p class="aviso">
            <span class="obligatorio"> * </span>los campos son obligatorios.
          </p>          
      
    </form>
</div>  
</div>

</html>


