<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php $this->load->view('templates/header.php'); ?>
<?php $this->load->view('templates/navbar.php'); ?>
<?php //$this->load->view('templates/slider.php'); ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
  <table class="table"  style=" font-size: 15px; ">
         <thead class="thead-dark">
                <tr>
                  <th scope="col">Título</th>
                  <th scope="col">Descripcion</th>
                  <th scope="col">Tamaño</th>
                  <th scope="col">Tipo</th>
                  <th scope="col">Nombre</th>
                </tr>
        </thead>
        <?php
        include 'config.inc.php';
        $db=new Conect_MySql();
            $sql = "select  * from tbl_documentos";
            $query = $db->execute($sql);
            while($datos=$db->fetch_row($query)){

               // echo "<pre>";print_r($datos);echo "</pre>";

                ?>

            <tr>

                <td><?php echo $datos['titulo']; ?></td>
                <td><?php echo $datos['descripcion']; ?></td>
                <td><?php echo $datos['tamanio']; ?></td>
                <td><?php echo $datos['tipo']; ?></td>
                <td><a href="<?= site_url('Alumno/VerArchivos') ?>?id=<?php echo $datos['id_documento']?>"><?php echo $datos['nombre_archivo']; ?></a></td>

            </tr>
                
          <?php  } ?>
            
        </table>
    </body>
</html>
