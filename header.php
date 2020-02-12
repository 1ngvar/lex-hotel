<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://kit.fontawesome.com/b52a799f60.js" crossorigin="anonymous"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top" id="main-nav">
    <div class="container">
        <p><i class="fas fa-phone"></i> +380505476787,  email: <a href = "mailto: info@lex-hotel.com.ua.net">info@lex-hotel.com.ua</a></p>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

	    <?php
	    $args = array(
		    'menu' => 'main_menu',
		    'menu_class' => 'navbar-nav ml-auto',
		    'menu_id' => 'main-menu',
		    'container_class' => 'collapse navbar-collapse',
		    'container_id' => 'navbarCollapse'
	    );

	    wp_nav_menu( $args );
	    ?>

    </div>
</nav>


<!--  HOME SECTION  -->
<header id="home-section">
    <div class="dark-overlay">

        <!--  CAROUSEL SLIDER -->
        <div id="carousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li class="active" data-target="#carousel" data-slide-to="0"></li>
                <li data-target="#carousel" data-slide-to="1"></li>
                <li data-target="#carousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active"><img src="<?php echo THEME_URL?>/img/carousel/Kyiv_evening_sky.jpg" alt="Kyiv_evening_sky"/></div>
                <div class="carousel-item"><img src="<?php echo THEME_URL?>/img/carousel/council.jpg" alt="council"/></div>
                <div class="carousel-item"><img src="<?php echo THEME_URL?>/img/carousel/promenade.jpg" alt="promenade"/></div>
            </div>
        </div>

        <!--  LOGO AND BOOKING FORM -->
        <div class="home-inner container">
            <div class="row">
                <div class="col-lg-8 d-none d-lg-block">
                    <div class="lex-heading">
                        <img src="<?php echo THEME_URL?>/img/LEX_trend-hotel_gold.png">
                    </div>
                    <div class="d-flex">
                        <div class="p-4 align-self-start">
                            <i class="fas fa-check fa-2x"></i>
                        </div>
                        <div class="p-4 align-self-end">
                            <h4>Новий готель</h4>
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="p-4 align-self-start">
                            <i class="fas fa-check fa-2x"></i>
                        </div>
                        <div class="p-4 align-self-end">
                            <h4>Сучасний дизайн</h4>
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="p-4 align-self-start">
                            <i class="fas fa-check fa-2x"></i>
                        </div>
                        <div class="p-4 align-self-end">
                            <h4>Європейський стиль</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">

                    <!--  BOOKING FORM – Should go into miscellaneous template part -->
                    <div class="card bg-lightslategray text-center card-form">
                        <div class="card-body">
                            <h3>Забронюйте сьогодні</h3>
                            <p>Ми вам зателефонуємо</p>
                            <form action="mailto:info@lex-hotel.com.ua" method="post" enctype="text/plain" accept-charset="Windows-1251" >
                                <div class="form-group">
                                    <input type="text" name="Имя" class="form-control form-control-lg" placeholder="Ваше ім'я" required/>
                                </div>
                                <div class="form-group">
                                    <input type="date" name="Дата бронирования" class="form-control form-control-lg" placeholder="Дата бронювання" required/>
                                </div>
                                <div class="form-group">
                                    <input type="tel" name="Телефон" class="form-control form-control-lg" placeholder="Телефон" required/>
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control form-control-lg" placeholder="email"/>
                                </div>
                                <input type="submit" value="Забронювати" class="btn btn-outline-light btn-block"/>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</header>