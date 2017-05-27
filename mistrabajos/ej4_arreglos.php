<?php
 $arrayHamburguesa = array();
 $arrayRefresco = array();
 $arrayHamburguesa[] = array(
   "Codigo"=>"1",
   "Descripcion"=>"Hamburguesa con carne wagyu de japon",
   "Precio"=>500,
   "Impuesto"=>.33
 );
 $arrayHamburguesa[] = array(
   "Codigo"=>"2",
   "Descripcion"=>"Hamburguesa vegana",
   "Precio"=>150,
   "Impuesto"=>.15
 );
 $arrayHamburguesa[] = array(
   "Codigo"=>"3",
   "Descripcion"=>"Hamburguesa con tocino",
   "Precio"=>250,
   "Impuesto"=>.15
 );
 $arrayRefresco[] = array(
   "Codigo"=>"1",
   "Descripcion"=>"Cocacola",
   "Precio"=>25,
   "Tipo"=>"Soda",
   "Impuesto"=>.15
 );
 $arrayRefresco[] = array(
   "Codigo"=>"2",
   "Descripcion"=>"Fresca",
   "Precio"=>25,
   "Tipo"=>"Soda",
   "Impuesto"=>.15
 );
 $arrayRefresco[] = array(
   "Codigo"=>"3",
   "Descripcion"=>"Orchana",
   "Precio"=>20,
   "Tipo"=>"Natural",
   "Impuesto"=>0
 );
 $arrayRefresco[] = array(
   "Codigo"=>"4",
   "Descripcion"=>"Nance",
   "Precio"=>20,
   "Tipo"=>"Natural",
   "Impuesto"=>0.00
 );
$total="";
if (isset($_POST["btnFacturar"])) {
  $cmbHamburguesas = intval($_POST["cmbHamburguesas"])-1;
  $total = "Codigo de la hamburguesa:".$arrayHamburguesa[$cmbHamburguesas]["Codigo"]."</br>";
  $total .= $arrayHamburguesa[$cmbHamburguesas]["Descripcion"]."</br>";
  $total .= "Precio Hamburguesa: L".$arrayHamburguesa[$cmbHamburguesas]["Precio"]."</br>";
  $total .= "Impuesto Hamburguesa: L".$arrayHamburguesa[$cmbHamburguesas]["Impuesto"]*$arrayHamburguesa[$cmbHamburguesas]["Precio"]." El Impuesto es del:".$arrayHamburguesa[$cmbHamburguesas]["Impuesto"]*"100"."%</br>";
  $cmbRefresco=intval($_POST["cmbRefresco"])-1;
  $total .= "Codigo Refresco:".$arrayRefresco[$cmbRefresco]["Codigo"]."</br>";
  $total .= "Refresco:".$arrayRefresco[$cmbRefresco]["Descripcion"]."</br>";
  $total .= "Precio Refresco:".$arrayRefresco[$cmbRefresco]["Precio"]."</br>";
  $total .= "Impuesto Refresco:".$arrayRefresco[$cmbRefresco]["Impuesto"]*$arrayRefresco[$cmbRefresco]["Precio"]."</br>";
  $total .= "Tipo Refresco:".$arrayRefresco[$cmbRefresco]["Tipo"]."</br>";
  $total .= "<b></b>TOTAL A PAGAR: L".($arrayRefresco[$cmbRefresco]["Precio"] + $arrayHamburguesa[$cmbHamburguesas]["Precio"])."</b></br>";
}
 /*foreach ($arrayHamburguesa as $venta) {
   echo "<br/>";
   echo $venta["Descripcion"]." |L".$venta["Precio"]."| Impuesto:L".$venta["Precio"]*$venta["Impuesto"];

 } */
 ?>

 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>Rumbaburguer</title>
   </head>
   <body>
     <h1>Menu Rumbaburger</h1>
     <h2>Seleccione una Hamburguesa</h2>
     <br>
     <form class="" action="ej4_arreglos.php" method="post">

     <?php echo '<select id="cmbHamburguesas" name="cmbHamburguesas">';
     foreach ($arrayHamburguesa as $venta) {
       echo '<option value="'.$venta["Codigo"].'">'.$venta["Descripcion"]. " | " .$venta["Precio"].'</option>';
     }
     echo '</select>';?>
     <h2>Seleccione un Refresco</h2>
     <?php echo '<select id="cmbRefresco" name="cmbRefresco">';
     foreach ($arrayRefresco as $venta) {
       echo '<option value="'.$venta["Codigo"].'">'.$venta["Descripcion"]." | ".$venta["Precio"]." | ".$venta["Tipo"].'</option>';
     }
     echo '</select>';?>
     <input type="submit" name="btnFacturar" value="Facturar">
      </form>
      <br>
      <div>
        <fieldset>


        <?php echo $total; ?>
          </fieldset>
      </div>
   </body>
 </html>
