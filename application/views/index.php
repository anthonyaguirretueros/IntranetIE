<?php $this->load->view('templates/header.php'); ?>
<?php $this->load->view('templates/navbar.php'); ?>
<?php // $this->load->view('templates/slider.php'); ?>
<!DOCTYPE html>

<?php
include_once 'config.inc.php';
if (isset($_POST['subir'])) {
     // print_r("entro");
// print_r($_POST);
    
    $nombre = $_FILES['archivo']['name'];
    $tipo = $_FILES['archivo']['type'];
    $tamanio = $_FILES['archivo']['size'];
    $ruta = $_FILES['archivo']['tmp_name'];


    $destino = "archivos/".$nombre;
 //  echo "<pre>"; print_r($destino);echo "</pre>";
   if ($nombre != "") {

        if (copy($ruta, $destino)) {
             //echo "<pre>"; print_r($nombre);echo "</pre>";
            $titulo= $_POST['titulo'];
            $descri= $_POST['descripcion'];
            $db = new Conect_MySql();
            $sql = "INSERT INTO tbl_documentos(titulo,descripcion,tamanio,tipo,nombre_archivo) VALUES('$titulo','$descri','$tamanio','$tipo','$nombre')";
            $query = $db->execute($sql);

              // echo "<pre>"; print_r($sql);echo "</pre>";

            if($query){
                echo "<center>Se guardó correctamente</center>";
            }
        } else {
            echo "Error";
        }
    }
}
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div style="width: 500px;margin: auto;padding: 30px; font-size: 15px;">
            <h4>Subir Archivos</h4>
            <form method="post" action="" enctype="multipart/form-data">
                <table class="table">
                    <tr>
                        <td><label>Titulo</label></td>
                        <td><input type="text" name="titulo" required=""></td>
                    </tr>
                    <tr>
                        <td><label>Descripcion</label></td>
                        <td><textarea name="descripcion"  required=""></textarea></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="file" name="archivo"></td>
                    <tr>
                        <td><input style=" font-size: 15px;" class="btn btn-success"  type="submit" value="subir" name="subir"  required=""></td>
                        <td ><a style=" font-size: 15px;  width: 150px;"  class="btn btn-primary" href="<?= site_url('Alumno/verlista'); ?>">lista</a></td>
                    </tr>
                </table>
            </form>            
        </div>
    </body>
</html>
