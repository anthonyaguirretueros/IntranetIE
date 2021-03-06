<?php $this->load->view('templates/header.php'); ?>

<div id="wrapper">
    <?php $this->load->view('templates/navbar.php'); ?>
    <?php $this->load->view('templates/slider.php'); ?>
    <!-- /. NAV SIDE  -->
    <div id="page-wrapper" >
        <div id="page-inner">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Bienvenido Administrador</h2>   
                </div>
            </div>              
            <hr />
            <div class="row text-center pad-top">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-6">
                    <div class="div-square">
                        <a href="profesor" >
                            <i class="fa fa-users fa-5x"></i>
                            <h4>Gestion de Profesores</h4>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-6">
                    <div class="div-square">
                        <a href="alumno" >
                            <i class="fa fa-user fa-5x"></i>
                            <h4>Gestión de Alumnos</h4>
                        </a>
                    </div>
                </div>  

                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-6">
                    <div class="div-square">
                        <a href="<?= site_url('Alumno/SubirArchivos'); ?>" >
                            <i class="fa fa-clipboard fa-5x"></i>
                            <h4>Subida de archivos</h4>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row text-center pad-top">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-6">
                    <div class="div-square">
                        <a href="#">
                            <i class="fa fa-lightbulb-o fa-5x"></i>
                            <h4>New Issues</h4>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /. PAGE INNER  -->
    </div>
    <!-- /. PAGE WRAPPER  -->
</div>