<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Blog Alex Rubio - Post</title>
    <?php require_once('../Main/mainheadpanel.php'); ?>
</head>

<body>



    <?php
    require_once('../Main/preloader.php');
    require_once('../Main/headpanel.php');
    ?>


    <!-- *****************************************************************
    ** Section ***********************************************************
    ****************************************************************** -->

    <section class="masterpb-container content-posts" style="margin-top: 15px !important;">

        <!-- INSTAGRAM -->
        <div class="widget widget-gallery">
            
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
                            <img src="../../assets/img/1slider.jpg" class="d-block w-100 banner " alt="image gallery 1">
                        </div>
                        <div class="carousel-item">
                            <img src="../../assets/img/2slider.jpg" class="d-block w-100 banner" alt="image gallery 2">
                        </div>
                        <div class="carousel-item">
                            <img src="../../assets/img/3slider.jpg" class="d-block w-100 banner" alt="image gallery 3">
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
        <div class="content post-full-width col-xs-12">

            <div class="container-post">

                <!-- ARTICLE 1 -->
                <article>
                    <h2><a href="javascript:(0)" id="title_post">MAECENAS CONSECTETUR</a></h2>
                    <div class="post-image">
                        <img  id="img_post" src="../../public/img/img_post_full_width/img_big.jpg" alt="post image 1">
                    </div>
                    <div class="box-data-info">
                        <span class="date info" id="date_post">07 JUNE 2016 - IMG - STYLE</span>
                    </div>
                    <div class="post-text">
                        <p class="text" id="text_post">Sed ut massa tristique, vehicula tellus in, fringilla ligula. Phasellus dignissim est sed egestas fringilla. Vivamus egestas nec dolor vitae egestas. Nulla a ante odio. Vestibulum lobortis tincidunt nulla non varius. Fusce ornare, ante nec ullamcorper scelerisque, nisl erat sollicitudin lacus, ac sodales ligula sem eu risus. Fusce laoreet interdum eros, nec finibus mi rutrum eu.
                        </p>

                        <!-- <div class="gallery">
                            <div class="item-gallery-left">
                                <img src="../../public/img/img_post_full_width/img-plus-1.jpg">
                                <img src="../../public/img/img_post_full_width/img-plus-2.jpg">
                            </div>
                            <div class="item-gallery-center">
                                <img src="../../public/img/img_post_full_width/img-plus-big.jpg">
                            </div>
                            <div class="item-gallery-right">
                                <img src="../../public/img/img_post_full_width/img-plus-3.jpg">
                                <img src="../../public/img/img_post_full_width/img-plus-4.jpg">
                            </div>
                            <div class="clearfix"></div>
                        </div> -->

                        <!-- <div class="box-text">
                            <p class="text first-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                            <p class="text second-text">Integer lorem quam, interdum id nulla vel, varius lacinia metus</p>
                            <p class="text second-text">Nunc quis elit scelerisque, dapibus sem et, venenatis nunc</p>
                            <p class="text third-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                        </div> -->

                        <!-- <p class="text">Nullam tristique massa faucibus, sodales sapien ac, tincidunt dolor. Quisque ut lobortis lectus, non suscipit ante. Duis lectus metus, consequat vitae ante et, ullamcorper scelerisque nisl.<br>
                            Nullam tristique massa faucibus, sodales sapien ac, tincidunt dolor. Quisque ut lobortis lectus, non suscipit ante. Phasellus et aliquet velit. Donec in dui vitae tellus sodales dapibus non quis libero. Quisque nec tortor ac ligula sagittis rutrum in a felis.</p>

                        <quote class="text">“ Vestibulum at justo ante. Fusce finibus pretium aliquam. Sed pharetra purus at augue faucibus sagittis. Interdum et malesuada fames ac ante ipsum primis in faucibus. ”</quote>

                        <p class="text">Quisque euismod sapien vel neque tincidunt vulputate. Duis nulla elit, mollis eu fringilla euinterdum vel libero. Phasellus quis felis tempor, vulputate juquis, ullamcorper nisi.</p> -->

                        <div class="social-post">
                            <a href="#"><i class="icon-facebook5"></i></a>
                            <a href="#"><i class="icon-twitter4"></i></a>
                            <a href="#"><i class="icon-google-plus"></i></a>
                            <a href="#"><i class="icon-vimeo4"></i></a>
                            <a href="#"><i class="icon-linkedin2"></i></a>
                        </div>

                    </div>

                </article>

                <!-- NAVIGATION POST -->
                <!-- <div class="navigation-post">
                    <div class="prev-post">
                        <img src="../../public/img/all-img/prev-post.jpg">
                        <a href="#" class="prev">
                            Previous Posts
                            <span class="name-post">DUIS FACILISIS AUGUE VITAE</span>
                            <i class="icon-arrow-left8"></i>
                        </a>
                        <div class="clearfix"></div>
                    </div>
                    <div class="next-post">
                        <a href="#" class="next">
                            Next Posts <i class="icon-arrow-right8"></i>
                            <span class="name-post">FINIBUS LACUSB UT ULTRICES</span>
                        </a>
                        <img src="../../public/img/all-img/next-post.jpg">
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div> -->


                <!-- AUTHOR POST -->
                <!-- <div class="author-post-container">
                    <div class="author-post">
                        <div class="author-image">
                            <img src="../../public/img/all-img/img-author.jpg">
                        </div>
                        <div class="author-info">
                            <span class="author-name">LUCAS NEWAR</span>
                            <span class="author-description text">Morbi gravida, sem non egestas ullamcorper, tellus ante laoreet nisl, id iaculis urna eros vel turpis curabitur tristique mauris eget lacus rutrum lobortis. Ut id elementum purus, sodales hendrerit turpis.</span>
                            <span class="author-social">
                                <a href="#"><i class="icon-facebook5"></i></a>
                                <a href="#"><i class="icon-twitter4"></i></a>
                                <a href="#"><i class="icon-google-plus"></i></a>
                            </span>
                        </div>
                        <div class="clearfix"></div>
                    </div>

                </div> -->


                <!-- RELATED POSTS -->
                <!-- <div class="related-posts">
                    <h2>Related Article</h2>
                    <div class="related-item-container">



                        <div class="container-post col-xs-4">

                            <article>
                                <h3><a href="#">TELLUS QUIS IPSUM</a></h3>
                                <div class="post-image">
                                    <img src="../../public/img/post_2_columns+sidebar/img-post-7.jpg" alt="post image 1">
                                </div>
                                <div class="post-text">
                                    <span class="date info">02 JUNE 2016 - TRAVEL</span>
                                    <p class="text">Nam tincidunt dui vel nisi efficitur, eu venenatis orci dictum.</p>
                                </div>
                                <div class="post-info">
                                    <div class="post-by">Post By <a href="#">AD-Theme</a></div>
                                    <div class="clearfix"></div>
                                </div>
                            </article>

                        </div>


                        <div class="container-post col-xs-4">

                            <article>
                                <h3><a href="#">SED FINIBUS LACUS</a></h3>
                                <div class="post-image">
                                    <img src="../../public/img/post_2_columns+sidebar/img-post-8.jpg" alt="post image 1">
                                </div>
                                <div class="post-text">
                                    <span class="date info">02 JUNE 2016 - STYLE</span>
                                    <p class="text">Nam tincidunt dui vel nisi efficitur, eu venenatis orci dictum.</p>
                                </div>
                                <div class="post-info">
                                    <div class="post-by">Post By <a href="#">AD-Theme</a></div>
                                    <div class="clearfix"></div>
                                </div>
                            </article>

                        </div>


                        <div class="container-post col-xs-4">
                            <article>
                                <h3><a href="#">CRAS IN NIBH NEC SAPIEN</a></h3>
                                <div class="post-image">
                                    <img src="../../public/img/post_2_columns+sidebar/img-post-9.jpg" alt="post image 1">
                                </div>
                                <div class="post-text">
                                    <span class="date info">01 JUNE 2016 - FOOD</span>
                                    <p class="text">Nam tincidunt dui vel nisi efficitur, eu venenatis orci dictum.</p>
                                </div>
                                <div class="post-info">
                                    <div class="post-by">Post By <a href="#">AD-Theme</a></div>
                                    <div class="clearfix"></div>
                                </div>
                            </article>

                        </div>

                        <div class="clearfix"></div>

                    </div>
                </div> -->



                <!-- COMMENTS -->
                <!-- <div class="comments">
                    <h2>3 Comments</h2>
                    <div class="comments-list">
                        <div class="main-comment">
                            <div class="comment-image-author">
                                <img src="../../public/img/all-img/img-profile-1.jpg">
                            </div>
                            <div class="comment-info">
                                <div class="comment-name-date"><span class="comment-name">LUCAS NEWAR</span><span class="comment-date">June 2, 2016</span>
                                    <div class="clearfix"></div>
                                </div>
                                <span class="comment-description">Morbi gravida, sem non egestas ullamcorper, tellus ante laoreet nisl, id iaculis urna eros vel turpis curabitur. Donec in dui vitae tellus sodales dapibus non quis libero. <i class="icon-arrow-right2"></i></span>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="reply-comment">
                            <span class="reply-line"></span>
                            <div class="comment-image-author">
                                <img src="../../public/img/all-img/img-profile-2.jpg">
                            </div>
                            <div class="comment-info">
                                <div class="comment-name-date"><span class="comment-name">LUCAS NEWAR</span><span class="comment-date">June 2, 2016</span>
                                    <div class="clearfix"></div>
                                </div>
                                <span class="comment-description">Morbi gravida, sem non egestas ullamcorper, tellus ante laoreet nisl, id iaculis urna eros vel turpis curabitur. Donec in dui vitae tellus sodales dapibus non quis libero.<i class="icon-arrow-right2"></i></span>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>

                    <div class="comments-list">
                        <div class="main-comment">
                            <div class="comment-image-author">
                                <img src="../../public/img/all-img/img-profile-1.jpg">
                            </div>
                            <div class="comment-info">
                                <div class="comment-name-date"><span class="comment-name">LUCAS NEWAR</span><span class="comment-date">June 2, 2016</span>
                                    <div class="clearfix"></div>
                                </div>
                                <span class="comment-description">Morbi gravida, sem non egestas ullamcorper, tellus ante laoreet nisl, id iaculis urna eros vel turpis curabitur. Donec in dui vitae tellus sodales dapibus non quis libero. <i class="icon-arrow-right2"></i></span>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>

                </div> -->


                <!-- COMMENT FORM -->
                <!-- <div class="comment-form">
                    <h2>Leavy a Reply</h2>
                    <span class="field-name">Your Name (required)</span>
                    <input type="text" class="name">
                    <span class="field-name">Your Name (required)</span>
                    <input type="text" class="email">
                    <span class="field-name">Your Message</span>
                    <textarea class="message"></textarea>

                    <button type="submit">Send Comment</button>

                </div> -->


            </div><!-- POST-CONTAINER -->


        </div>

         <!-- NAVIGATION -->
         <div class="navigation">
            <a  id="btnAnterior" href="../Inicio/" class="prev"><i class="icon-arrow-left8"></i> Regresar</a>
            <div class="clearfix"></div>
        </div>

        <div class="clearfix"></div>

       


    </section>


    <?php 
        require_once('../Main/footer.php'); 
        require_once('../Main/mainjs.php'); 
    ?>

    <script src="./articulo.js"></script>

</body>

</html>