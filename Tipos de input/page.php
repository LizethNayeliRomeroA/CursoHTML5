<?php
  $valor1 = $_POST["dato1"];
  $valor2 = $_POST["dato2"];
  if(empty($valor2)){
       $pagina = "<h1 style='background-color: red; color:white;'>Resultado de envío datos</h1>
                  <p style='background-color: blue; color:white;'>dato del input = $valor1</p>";
       echo $pagina;  
   }else{
   	   $pagina = "<h1 style='background-color: red; color:white;'>Resultado de envío datos</h1>
             <p style='background-color: blue; color:white;'>dato del input = $valor1</p>
              <p style='background-color: blue; color:white;'>dato del input = $valor2</p>";
       echo $pagina;  
   }          

?>