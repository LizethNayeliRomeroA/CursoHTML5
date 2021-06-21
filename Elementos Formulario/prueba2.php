<?php
   $user = $_GET["user"];
   $clave = $_GET["clave"];

   $pagina = "<h1 style='background:blue;color:white;'>Dato enviado desde el formulario</h1>
               <h2 style='border-style:solid;'>Tu selección ha sido:</h2>
               <p style='background:green;color:red;font-size:100px;'>$user</p>
               <h3 style='border-style:solid;'>y la clave es:</h3>
               <p style='background:green;color:red;font-size:100px;'>$clave</p>";
    echo $pagina;            
?>