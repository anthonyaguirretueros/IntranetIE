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
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                    <div class="div-square">
                        <a href="alumno" >
                            <i class="fa fa-user fa-5x"></i>
                            <h4>Registro Alumnos</h4>
                        </a>
                    </div>
                </div>  

                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                    <div class="div-square">
                        <a href="#" >
                            <i class="fa fa-envelope-o fa-5x"></i>
                            <h4>Mail Box</h4>
                        </a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                    <div class="div-square">
                        <a href="#">
                            <i class="fa fa-lightbulb-o fa-5x"></i>
                            <h4>New Issues</h4>
                        </a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                    <div class="div-square">
                        <a href="#" >
                            <i class="fa fa-users fa-5x"></i>
                            <h4>See Users</h4>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /. PAGE INNER  -->
    </div>
    <!-- /. PAGE WRAPPER  -->
</div>
<div class="footer">
    <div class="row">
        <div class="col-lg-12" >
            &copy;  2014 yourdomain.com | Design by: <a href="http://binarytheme.com" style="color:#fff;" target="_blank">www.binarytheme.com</a>
        </div>
    </div>
</div>
<?php $this->load->view('templates/footer.php'); ?>