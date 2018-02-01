<?php
  $txtToAnalize = "";
  $palabrasAnalizadas = "";
  $palabraMayorFrecuencia = "";

  if(isset($_POST["btnProcesar"])){
    $txtToAnalize = $_POST["txtToAnalize"];
    $palabras = explode(" ",$txtToAnalize);
    $palabrasAnalizadas = count($palabras);
    $palabrasProcesadas = array();
    foreach($palabras as $palabra){
      if(isset($palabrasProcesadas[$palabra])){
        $palabrasProcesadas[$palabra] ++;
      }else{
        $palabrasProcesadas[$palabra] = 1;
      }
    } //foreach
    arsort($palabrasProcesadas);
    foreach($palabrasProcesadas as $llave=>$valor){
      $palabraMayorFrecuencia = $llave . " con " . $valor . " instancias";
      break;
    }// foreach
  }

 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>Analizador Smeantico</title>
   </head>
   <body>
     <form action="php_p1_analizador_semantico.php" method="post">
       <label>Texto a Analizar</label>
       <textarea name="txtToAnalize" id="txtToAnalize"
              value="<?php echo $txtToAnalize; ?>">
            </textarea>
            <br />
            <input type="submit" value="Procesar" name="btnProcesar"  />
     </form>
     <div>

       <table>
         <tr>
           <th>
             Palabras analizadas
           </th>
           <td>
             <?php echo $palabrasAnalizadas; ?>
           </td>
         </tr>
         <tr>
           <th>
             Palabras con Mayor Frecuencia
           </th>
           <td>
             <?php echo $palabraMayorFrecuencia; ?>
           </td>
         </tr>
       </table>
       <?php
        if(isset($palabrasProcesadas)){
          echo "<ul>";
          foreach($palabrasProcesadas as $llave=>$valor){
            echo '<li>'.$llave.' - '. $valor.'</li>';
          }
          echo "</ul>";
        }
       ?>
     </div>
   </body>
 </html>
