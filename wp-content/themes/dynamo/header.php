<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Con mas de 20 años de experiencia en el mercado proporcionamos a nuestros clientes el servicio de auto-transporte de mercancías tanto en el mercado internacional como en el domestico">
        <meta name="keywords" content="Dynamo,Transporte,Mercancía,Auto-transporte,Internacional,Domestico,Logística,Tarifa,Destino,Rastreo,Rutas,Flotilla,Tracto camiones,Volvo,Tractores,Plataformas,Camiones Rabones">
        <meta name="author" content="Mixen">
        <title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
        <link rel="stylesheet" href="<?php echo bloginfo('template_url') . '/'; ?>css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo bloginfo('stylesheet_url'); ?>">
        <?php wp_head(); ?>
    </head>
    <body>
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand smoothScroll" href="<?php if(!is_front_page()){echo 'inicio';} ?>#wrapper"><img src="<?php echo bloginfo('template_url') . '/'; ?>img/logo.png" alt="DYNAMO"></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-collapse">
                    <ul class="nav navbar-nav pull-right">
                        <li class="active vertical-align"><a href="<?php if(!is_front_page()){echo 'inicio';} ?>#wrapper" class="smoothScroll">INICIO <span class="sr-only">(current)</span></a></li>
                        <li class="vertical-align"><a href="<?php if(!is_front_page()){echo 'inicio';} ?>#dynamo" class="smoothScroll">DYNAMO</a></li>
                        <li class="vertical-align"><a href="<?php if(!is_front_page()){echo 'inicio';} ?>#rastreo" class="smoothScroll">RASTREO</a></li>
                        <li class="vertical-align"><a href="<?php if(!is_front_page()){echo 'inicio';} ?>#servicios" class="smoothScroll">SERVICIOS</a></li>
                        <li class="vertical-align"><a href="<?php if(!is_front_page()){echo 'inicio';} ?>#bolsa" class="smoothScroll">BOLSA DE TRABAJO</a></li>
                        <li class="vertical-align"><a href="<?php if(!is_front_page()){echo 'inicio';} ?>#contacto" class="smoothScroll">CONTACTO</a></li>
                        <li class="inactive vertical-align text-center"><a><img src="<?php echo bloginfo('template_url') . '/'; ?>img/icons/phone.jpg" alt="Teléfono">(614) 543.0309<br><img src="<?php echo bloginfo('template_url') . '/'; ?>img/icons/phone.jpg" alt="Teléfono">01.800.8.DYNAMO</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>