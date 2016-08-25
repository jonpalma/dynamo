<?php get_header(); ?>
<div class="wrapper" id="wrapper">
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* BANNER  */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div id="carousel-banner" class="carousel slide banner" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-banner" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-banner" data-slide-to="1"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="<?php echo bloginfo('template_url') . '/'; ?>img/background/banner.jpg" alt="Banner">
                <div class="carousel-caption relative-align">
                    <div class="container">
                        <div class="col-lg-8 col-md-9">
                            <h1>“LLEGAMOS EN PUNTO”</h1>
                            <div class="divider divider-white"></div>
                            <h2>Ofrecemos la mejor alternativa del mercado en transporte de mercancías, maximizando los beneficios para nuestros clientes.</h2>
                            <a href="#modal-cotiza" data-toggle="modal" data-target="#modal-cotiza" class="btn white-btn">COTIZA</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="<?php echo bloginfo('template_url') . '/'; ?>img/background/banner2.jpg" alt="Banner">
                <div class="carousel-caption relative-align">
                    <div class="carousel-caption relative-align">
                        <div class="container">
                            <div class="col-lg-8 col-md-9">
                                <h1>“LLEGAMOS EN PUNTO”</h1>
                                <div class="divider divider-white"></div>
                                <h2>Todos los procesos de Dynamo están alineados a cumplir con los requerimientos de nuestros clientes, mismos que tenemos bajo un sistema de gestión de calidad y seguridad, el cual nos permite trabajar bajo un esquema de medición y mejora continua.</h2>
                                <a href="por-que" class="btn white-btn">¿POR QUÉ ELEGIR DYNAMO?</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-banner" role="button" data-slide="prev">
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-banner" role="button" data-slide="next">
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="modal fade contacto modal-cotiza" id="modal-cotiza" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h3 class="text-center">Solicita una cotización y te la enviaremos en breve</h3>
                </div>
                <div class="modal-body">
                    <?php echo do_shortcode('[contact-form-7 id="16" title="Formulario Cotizar"]'); ?>
                </div>
            </div>
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* DYNAMO  */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <section class="dynamo spacing" id="dynamo">
        <div class="container">
            <div class="col-sm-7">
                <h1 class="heading black">DYNAMO</h1>
                <div class="divider divider-green"></div>
                <p class="text">
                    Con mas de 20 años de experiencia en el mercado proporcionamos a nuestros clientes el servicio de auto-transporte de mercancías tanto en el mercado internacional como en el domestico. Ofrecemos excelentes alternativas en logística y contactos con diferentes líneas Estadunidenses para garantizar la mejor tarifa a cualquier destino.
                </p>
                <a href="por-que" class="btn blue-btn">¿Por qué elegir Dynamo?</a>
            </div>
            <img src="<?php echo bloginfo('template_url') . '/'; ?>img/dynamo/truck.jpg" class="decoration hidden-xs">
        </div>
    </section>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* RASTREO  */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <section class="parallax-container rastreo" id="rastreo">
        <div class="parallax"><img src="<?php echo bloginfo('template_url') . '/'; ?>img/background/parallax-1.jpg"></div>
        <div class="container light-spacing text-right">
            <div class="col-md-5 col-sm-4"></div>
            <div class="col-md-7 col-sm-8">
                <h1 class="heading white">RASTREO DE EQUIPO</h1>
                <div class="divider divider-white pull-right"></div>
                <div class="clearfix"></div>
                <p class="text white">
                    Todas nuestras unidades están equipadas con GPS, este transmite cada 3 minutos dando la localización en tiempo real del embarque.
                </p>
                <a href="#modal-rastreo" data-toggle="modal" class="btn white-btn pull-right" data-target="#modal-rastreo">RASTREA</a>
                <div class="clearfix"></div>
            </div>
        </div>
    </section>
    <div class="modal fade modal-rastreo" id="modal-rastreo" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="loader"></div>
                    <iframe id="rastreo-iframe" frameborder="0"></iframe>
                    <div class="text-ceter">
                        <button type="button" class="close-dialog btn blue-btn horizontal-align" data-dismiss="modal" aria-label="Close">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* SERVICIOS  */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <section class="servicios light-spacing" id="servicios">
        <div class="container">
            <div class="col-sm-7">
                <h1 class="heading black">SERVICIOS</h1>
                <div class="divider divider-green"></div>
                <p class="text">
                    Nuestra flotilla está compuesta de: 
                    <br><br>
                    - Tracto camiones Volvo.<br>
                    - Cajas secas de 53" con suspensión de aire.<br>
                    - Plataformas.<br>
                    - Tractores de Patio.<br>
                    - Camiones Rabones.
                    <br><br>
                    Ofrecemos servicios de importación, exportación, movimientos locales, renta de equipo y movimientos dentro de la república. 
                </p>
            </div>
            <div class="col-sm-5 text-right">
                <div class="map">
                    <p class="text blue">
                        Actualmente contamos con las siguientes rutas
                    </p>
                    <a href="rutas" class="btn blue-btn pull-right">VER RUTAS</a>
                    <div class="clearfix"></div>
                </div>
                <img class="img-responsive" src="<?php echo bloginfo('template_url') . '/'; ?>img/servicios/mapa.jpg" alt="Mapa">
            </div>
        </div>
    </section>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* BOLSA DE TRABAJO  */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <section class="parallax-container bolsa" id="bolsa">
        <div class="parallax"><img src="<?php echo bloginfo('template_url') . '/'; ?>img/background/parallax-2.jpg"></div>
        <div class="container light-spacing">
            <div class="col-md-7 col-sm-8">
                <h1 class="heading white">BOLSA DE TRABAJO</h1>
                <div class="divider divider-white"></div>
                <p class="text white">
                    Dynamo siempre busca nuevos operadores para que formen parte de nuestro equipo. Llena tu solicitud y nos pondremos en contacto contigo.
                </p>
                <a href="#modal-bolsa" data-toggle="modal" data-target="#modal-bolsa" class="btn white-btn ">FORMULARIO</a>
            </div>
            <div class="col-md-5 col-sm-4"></div>
        </div>
    </section>
    <div class="modal fade contacto modal-bolsa" id="modal-bolsa" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h3 class="text-center">Únete a nuestro equipo de trabajo.</h3>
                </div>
                <div class="modal-body">
                    <?php echo do_shortcode('[contact-form-7 id="15" title="Bolsa de Trabajo"]'); ?>
                </div>
            </div>
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* BOLSA DE TRABAJO  */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <section class="contacto light-spacing" id="contacto">
        <div class="container">
            <div class="col-sm-6">
                <h1 class="heading black">CONTACTO</h1>
                <div class="divider divider-green"></div>
                <div class="row no-margin">
                    <button class="btn blue-btn" onclick="moveToChihuahua()">Chihuahua</button>
                    <button class="btn blue-btn" onclick="moveToJuarez()">Juárez</button>
                </div>
                <h2 class="black">¿CÓMO PODEMOS AYUDARTE?</h2>
                <?php echo do_shortcode('[contact-form-7 id="4" title="Formulario de Contacto"]'); ?>
            </div>
            <div class="googleMap" id="googleMap" position="dynamo"></div>
        </div>
    </section>
</div>
<?php wp_footer(); ?>
<?php get_footer(); ?>