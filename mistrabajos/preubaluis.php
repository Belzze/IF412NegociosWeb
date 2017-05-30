
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>minimo comun multiplicador</title>
   </head>
   <body>
      <form action="preubaluis.php" method="post">

       <label for="txtOperador1">primer numero</label>
       <input type="number" max="100" min="-100"
        value="<?php echo $operador1; ?>" name="txtOperador1"
        id="txtOperador1"><br/>

        <label for="txtOperador2">segundo numro</label>
        <input type="number" max="100" min="-100"
         value="<?php echo $operador2;?>" name="txtOperador2"
         id="txtOperador2"><br/>

         <input type="submit" value="llamar"
          name="btnllamar" id="btnllamar"/>
          &nbsp;
        </form>
     <hr />
     <div>
       <?php
       require_once ("funcion.php");
       $a1 = $_POST["txtOperador1"];
       $b1 = $_POST["txtOperador2"];
       $resp2 = mcm($a1,$b1);
       echo "el mcm es: $resp2<br>";
       ?>

     </div>
   </body>
 </html>
