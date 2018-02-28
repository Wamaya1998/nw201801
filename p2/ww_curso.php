<?php
  require_once("dao.php");

  $mode = "";
  $codigo_curso = "";
  $desc_curso = "";
  $estado_curso = "ACT";
  $modeDescription = array(
    "INS" => "Crear Nuevo Curso",
    "UPD" => "Actualizar Curso",
    "DEL" => "Eliminar Curso",
    "DSP" => "Ver Curso"
   );
  function getCodigoParam(){
    if(isset($_GET["cod"])){
      return $_GET["cod"];
    }
    return false;
  }
  function redigir(){
    header("location:ww_cursos.php"); // redigir a otra página
    die();
  }
  function redigirConMensaje($msg){
    echo "<script>alert('".$msg."');window.location='ww_cursos.php'</script>";
    die();
  }
  function getCurso($cod){
    $curso = array();
    $curso = obtenerUnRegistro(sprintf("select * from cursos where codigo_curso='%s';",$cod));
    return $curso;
  }
  if(isset($_GET["mode"])){
      $mode = $_GET["mode"];
      switch ($_GET["mode"]) {
        case 'INS':
          # code...
          break;
        case 'UPD':
            if($codigo_curso=getCodigoParam()){
                $currentCurso = getCurso($codigo_curso);
                $codigo_curso = $currentCurso["codigo_curso"];
                $desc_curso = $currentCurso["desc_curso"];
                $estado_curso = $currentCurso["estado_curso"];
            }else{
              redirigir();
            }
            break;
        case 'DEL':
            if($codigo_curso=getCodigoParam()){
                $currentCurso = getCurso($codigo_curso);
                $codigo_curso = $currentCurso["codigo_curso"];
                $desc_curso = $currentCurso["desc_curso"];
                $estado_curso = $currentCurso["estado_curso"];
            }else{
              redirigir();
            }
            break;
        case 'DSP':
              if($codigo_curso=getCodigoParam()){
                  $currentCurso = getCurso($codigo_curso);
                  $codigo_curso = $currentCurso["codigo_curso"];
                  $desc_curso = $currentCurso["desc_curso"];
                  $estado_curso = $currentCurso["estado_curso"];
              }else{
                redirigir();
              }
          break;
        default:
          redirigir();
          break;
      }
  }else{
    redirigir();
  }

  if(isset($_POST["btnGuardar"])){
    $codigo_curso = $_POST["codigo_curso"];
    $desc_curso = $_POST["desc_curso"];
    $estado_curso = $_POST["estado_curso"];
    switch ($mode) {
      case 'INS':
        $insSqlstr = "Insert into cursos (codigo_curso,desc_curso,estado_curso) values ('%s','%s','%s');";
        if(ejecuteNonQuery(sprintf($insSqlstr,$codigo_curso,$desc_curso,$estado_curso))){
            redigirConMensaje("Curso creado Satisfactoriamente");
        }

        break;
      case 'UPD':
      $updSqlstr = "update cursos set desc_curso = '%s', estado_curso ='%s' where codigo_curso='%s';";
      if(ejecuteNonQuery(sprintf($updSqlstr,$desc_curso,$estado_curso,$codigo_curso))){
          redigirConMensaje("Curso Actualizado Satisfactoriamente");
      }
        break;
      case 'DEL':
      $delSqlstr = "delete from cursos where codigo_curso='%s';";
      if(ejecuteNonQuery(sprintf($delSqlstr,$codigo_curso))){
          redigirConMensaje("Curso Eliminado Satisfactoriamente");
      }
        break;
      default:
        # code...
        break;
    }
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Mantenimiento de Curso</title>
  </head>
  <body>
    <h1><?php echo $modeDescription[$mode];?></h1>
    <?php if($mode == "INS"){ ?>
      <form action="ww_curso.php?mode=<?php echo $mode;?>" method="post">
    <?php }else{ ?>
      <form action="ww_curso.php?mode=<?php echo $mode;?>&cod=<?php echo $codigo_curso;?>" method="post">
    <?php } ?>
      <label for="codigo_curso">Código</label>
      <input type="text" name="codigo_curso" id="codigo_curso"
        value="<?php echo $codigo_curso; ?>" placeholder="Código del Curso"
        <?php echo ($mode=="INS"?" ":"disabled ")?>
         maxlength="7" />
         <?php if ($mode!="INS"){ ?>
           <input type="hidden" name="codigo_curso"
             value="<?php echo $codigo_curso; ?>"  />
         <?php }?>
        <br/>
        <label for="desc_curso">Nombre</label>
        <input type="text" name="desc_curso" id="desc_curso"
          value="<?php echo $desc_curso; ?>" placeholder="Nombre del Curso"
          maxlength="40" />
          <br/>
          <label for="estado_curso">Estado</label>
          <select name="estado_curso" id="estado_curso">
            <option value="ACT" <?php echo ($estado_curso == "ACT")?"selected":""; ?> >Activo</option>
            <option value="INA" <?php echo ($estado_curso == "INA")?"selected":""; ?>>Inactivo</option>
          </select>
          <br/>
          <?php if($mode!="DSP"){ ?>
            <input type="submit" value="Guardar" name="btnGuardar"  />
            &nbsp;
          <?php }?>
          <input type="button" value="Cancelar" onclick="window.location='ww_cursos.php'" />
    </form>
  </body>
</html>
