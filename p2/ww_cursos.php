<?php
  require_once("dao.php");
  // DAO - > Data Access Objects
  $sqlstr = "Select * from cursos;";
  $cursos = obtenerRegistros($sqlstr);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Trabajar con Cursos</title>
  </head>
  <body>
    <h1>Trabajar con Cursos</h1>
    <section>
      <div>
        Filtros
      </div>
    </section>
    <section>
        <table>
          <tr>
            <th>
              Código
            </th>
            <th>
              Curso
            </th>
            <th>
              Estado
            </th>
            <th>
              Acciones
            </th>
          </tr>
          <?php foreach($cursos as $curso){ ?>
          <tr>
            <td><?php echo $curso["codigo_curso"]; ?></td>
            <td><?php echo $curso["desc_curso"]; ?></td>
            <td><?php echo $curso["estado_curso"]; ?></td>
            <td>
              <a href="ww_curso.php?mode=UPD&cod=<?php echo $curso["codigo_curso"]; ?>">Actualizar</a><br />
              <a href="ww_curso.php?mode=DEL&cod=<?php echo $curso["codigo_curso"]; ?>">Eliminar</a>
            </td>
          </tr>
        <?php } //end foreach cursos  ?>
        </table>
    </section>
  </body>
</html>
