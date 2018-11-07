
<div class="navbar navbar-inverse navbar-fixed-top">
    <!--<div class="adjust-nav">-->

    <span class="logout-spn" >
        <?php if ($this->session->userdata('username')): ?>
            <a class="navbar-brand" href="<?= site_url('login/logout') ?>">Desconectarse</a>
        <?php else : ?>
            <a class="navbar-brand" href="<?= site_url('login') ?>">Cambio de Usuario</a>
        <?php endif; ?>
        <!--<a href="#" style="color:#fff;">LOGOUT</a>-->  
    </span>
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
    </div>
</div>