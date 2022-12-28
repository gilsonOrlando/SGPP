<link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/default.css">
<link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/dashboard.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>



<div id="header">
    <ul>
    <li><a href="<?php echo constant('URL'); ?>dashboard"><ion-icon name="grid-outline"></ion-icon> Inicio</a>
        <li><ion-icon name="receipt-outline"></ion-icon><a href="<?php echo constant('URL') . 'expenses'; ?>">Historial Gastos</a></li>
        <li><ion-icon name="power-outline"></ion-icon><a href="<?php echo constant('URL'); ?>logout">Cerrar sesion</a></li>
    </ul>

    <div id="profile-container">
    <ion-icon name="person-outline"></ion-icon>
        <a href="<?php echo constant('URL'); ?>user">
            <div class="name"><?php echo $user->getName(); ?></div>
            <div class="photo">
                <?php if ($user->getPhoto() == '') { ?>
                    <i class="material-icons">account_circle</i>
                <?php } else { ?>
                    <img src="<?php echo constant('URL'); ?>public/img/photos/<?php echo $user->getPhoto() ?>" />
                <?php }  ?>
            </div>
        </a>
        <div id="submenu">
            <ul>
                <li><a href="<?php echo constant('URL'); ?>user">Ver perfil</a></li>
                <li class='divisor'></li>
                <li><a href="<?php echo constant('URL'); ?>logout">Cerrar sesión</a></li>
            </ul>
        </div>
    </div>
</div>