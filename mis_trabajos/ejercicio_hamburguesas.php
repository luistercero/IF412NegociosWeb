<?php

    //El uso de una ps eudo-matriz (arreglo de arreglos)

    $arrHamburguesas = array();
    $arrRefrescos = array();
    $resultado = "";




    $arrHamburguesas[] = Array(
      "codigo"=>"1",
      "Nombre"=>"Hamburguesa de pollo",
      "precio"=>100,
      "impuesto"=>0
    );

    $arrHamburguesas[] = Array(
      "codigo"=>"2",
      "Nombre"=>"Hamburguesa de Res",
      "precio"=>200,
      "impuesto"=>0
    );

    $arrHamburguesas[] = Array(
      "codigo"=>"3",
      "Nombre"=>"Hamburguesa de hongos",
      "precio"=>300,
      "impuesto"=>0
    );
//////////////////////////////////////////////////////////////////////////////////////////////

    $arrRefrescos[] = Array(
      "codigo"=>"1",
      "Nombre"=>"soda",
      "precio"=>30,
      "impuesto"=>0
    );

    $arrRefrescos[] = Array(
      "codigo"=>"2",
      "Nombre"=>"natural",
      "precio"=>25,
      "impuesto"=>0
    );

    $arrRefrescos[] = Array(
      "codigo"=>"3",
      "Nombre"=>"agua",
      "precio"=>20,
      "impuesto"=>0
    );

/////////////////////////////////////////////////////////////////////////////////////////////


    echo '<br/> <select id="cmbHamburguesas" name="cmbHamburguesas">';
    foreach($arrHamburguesas as $Hamburguesas){
      echo '<option value="'.$Hamburguesas["codigo"].'">'.$Hamburguesas["Nombre"]." | ".$Hamburguesas["precio"].'</option>';
      ;
    }
    echo '</select>';

    echo "<br/>";
/////////////////////////////////////////////////////////////////////////////////////////////
    echo '<br/> <select id="cmbRefrescos" name="cmbRefrescos">';
    foreach($arrRefrescos as $Refrescos){
      echo '<option value="'.$Refrescos["codigo"].'">'.$Refrescos["Nombre"]." | ".$Refrescos["precio"].'</option>'
      ;
    }
    echo '</select>';
    /////////////////////////////////////////////////////////////////////////////////////////////
    if(isset($_POST["btnenviar"])){

      }
 ?>

 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>RUMBA BURGUER</title>
   </head>
   <body>
      <form action="ejercicio_hamburguesas.php" method="post">
        <br>
        <input type="submit" value="ENVIAR"
         name="btnenviar" id="btnenviar"/>
         &nbsp;
      </form>
      <hr />
      <div>
        <?php echo $resultado; ?>
      </div>
</body>
 </html>
