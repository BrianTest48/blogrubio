<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Blog Alex Rubio</title>
    <?php require_once('../Main/mainheadpanel.php'); ?>

    <style>

        .post-text {
            max-width: 100%; /* Establecer el ancho máximo para el contenedor del extracto */
            white-space: nowrap; /* Evitar el salto de línea */
            overflow: hidden; /* Ocultar el texto que exceda el ancho máximo */
            text-overflow: ellipsis; /* Agregar puntos suspensivos al final del texto truncado */
        }

        .post-image-left{
            width: 100px !important;
            height: 85px !important;
        }
    </style>
</head>

<body>

    <?php
    require_once('../Main/preloader.php');
    require_once('../Main/headpanel.php');
    ?>




    <!-- *****************************************************************
    ** Section ***********************************************************
    ****************************************************************** -->

    <section class="masterpb-container content-posts mt-0">

        <div class="widget widget-gallery">
            <div class="box-widget-title">
                
            </div>
            <div class="image">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <!-- Indicadores -->
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>

                    <!-- Imágenes del slider -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="../../assets/img/1slider.jpg" class="d-block w-100 banner img-fluid" alt="image gallery 1">
                        </div>
                        <div class="carousel-item">
                            <img src="../../assets/img/2slider.jpg" class="d-block w-100 banner img-fluid" alt="image gallery 2">
                        </div>
                        <div class="carousel-item">
                            <img src="../../assets/img/3slider.jpg" class="d-block w-100 banner img-fluid" alt="image gallery 3">
                        </div>
                    </div>

                    <!-- Controles del slider -->
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Anterior</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Siguiente</span>
                    </a>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>


        <!-- CONTENT -->
        <div class="content blog-2-column-with-sidebar col-xs-12">
            <div class="content col-xs-8">

                <div id="articulos">

                </div>

    
                <div class="clearfix"></div>

                <!-- NAVIGATION -->
                <div class="navigation">
                    <a  id="btnAnterior" class="prev"><i class="icon-arrow-left8"></i> Atras</a>
                    <a  id="btnSiguiente" class="next">Siguiente <i class="icon-arrow-right8"></i></a>
                    <div class="clearfix"></div>
                </div>




            </div><!-- CONTENT COL-XS-8 -->



            <!-- SIDEBAR -->
            <div class="sidebar col-xs-4">



                <!-- <div class="widget about-me">
                    <div class="ab-image">
                        <img src="../../public/img/all-img/about-me.jpg" alt="about me">
                    </div>
                    <div class="ad-text">
                        <span class="signing">ad-theme</span>
                        <p>Lorem ipsum dolor sit consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                    </div>
                </div>
 -->

                <!-- LATEST POSTS -->
                <div class="widget latest-posts">
                    <h3>
                        <a class="widget-title" href="#">Ultimos Posts</a>
                    </h3>
                    <div class="posts-container" id="post-container">

                        <!-- <div class="item">
                            <img src="../../public/img/all-img/latest-posts-1.jpg" alt="post 1" class="post-image">
                            <div class="info-post">
                                <h5><a href="#">MAECENAS <br> CONSECTETUR</a></h5>
                                <span class="date">07 JUNE 2016</span>
                            </div>
                            <div class="clearfix"></div>
                        </div>

                        <div class="item">
                            <img src="../../public/img/all-img/latest-posts-2.jpg" alt="post 2" class="post-image">
                            <div class="info-post">
                                <h5><a href="#">MAURIS SIT AMET</a></h5>
                                <span class="date">06 JUNE 2016</span>
                            </div>
                            <div class="clearfix"></div>
                        </div>

                        <div class="item">
                            <img src="../../public/img/all-img/latest-posts-3.jpg" alt="post 3" class="post-image">
                            <div class="info-post">
                                <h5><a href="#">NAM EGET <br> PULVINAR ANT</a></h5>
                                <span class="date">05 JUNE 2016</span>
                            </div>
                            <div class="clearfix"></div>
                        </div>

                        <div class="item">
                            <img src="../../public/img/all-img/latest-posts-4.jpg" alt="post 4" class="post-image">
                            <div class="info-post">
                                <h5><a href="#">VIVAMUS ET TURPIS LACI</a></h5>
                                <span class="date">04 JUNE 2016</span>
                            </div>
                            <div class="clearfix"></div>
                        </div> -->

                        <div class="clearfix"></div>
                    </div>
                </div>


                <!-- FOLLOW US -->
                <div class="widget follow-us">
                    <h3>
                        <a class="widget-title" href="#">Sigueme</a>
                    </h3>
                    <div class="follow-container">
                        <a href="https://www.facebook.com/profile.php?id=100092524513379&mibextid=LQQJ4d" target="_blank"><i class="icon-facebook5"></i></a>
                        <a href="#"><i class="icon-twitter4"></i></a>
                        <a href="#"><i class="icon-google-plus"></i></a>
                        <a href="#"><i class="icon-vimeo4"></i></a>
                        <a href="#"><i class="icon-linkedin2"></i></a>
                    </div>
                    <div class="clearfix"></div>
                </div>


                <!-- TAGS -->
                <div class="widget tags">
                    <h3>
                        <a class="widget-title" href="#">Tags</a>
                    </h3>
                    <div class="tags-container">
                        <a href="#">Audio</a>
                        <a href="#">Viaje</a>
                        <a href="#">Comida</a>
                        <a href="#">Eventos</a>
                        <a href="#">Video</a>
                        <a href="#">Diseño</a>
                        <a href="#">Deporte</a>
                        <a href="#">Blog</a>
                        <a href="#">Post</a>
                        <a href="#">Imagenes</a>
                        <a href="#">Memorias</a>
                    </div>
                    <div class="clearfix"></div>
                </div>


                <!-- ADVERTISING -->
                <div class="widget advertising">
                    <div class="advertising-container">
                        <img src="../../public/img/350x300.png" alt="banner 350x300">
                    </div>
                </div>


                <!-- NEWSLETTER -->
                <div class="widget newsletter">
                    <h3>
                        <a class="widget-title" href="#">BOLETIN</a>
                    </h3>
                    <div class="newsletter-container">
                        <h4>NO TE PIERDAS NUESTRAS NOTICIAS</h4>
                        <p>Regístrate y recibe el <br> ultimas noticias de nuestra empresa</p>
                        <form>
                            <input type="email" class="newsletter-email" placeholder="Su dirección de correo electrónico..">
                            <button type="submit" class="newsletter-btn">Enviar</button>
                        </form>
                    </div>
                    <div class="clearfix"></div>
                </div>

            </div> <!-- #SIDEBAR -->

            <div class="clearfix"></div>


        </div><!-- POST-CONTAINER -->



        </div>

        <div class="clearfix"></div>


    </section>


    <?php 
        require_once('../Main/footer.php');
        require_once('../Main/mainjs.php'); 
    ?>


    

    <script src="./inicio.js"></script>

</body>

</html>