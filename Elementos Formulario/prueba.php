<?php
   $valor = $_POST["message"];
   
   
   $pagina = "<h1 style='background:blue;color:white;'>Dato enviado desde el formulario</h1>
               <h2 style='border-style:solid;'>Tu selección ha sido:</h2>
               <p style='background:green;color:red;font-size:100px;'>$valor</p>";
    echo $pagina;           
?>