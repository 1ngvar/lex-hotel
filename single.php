<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
    crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <title>LEX TREND HOTEL</title>
  <script src="https://kit.fontawesome.com/b52a799f60.js" crossorigin="anonymous"></script>
</head>
<body>
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top" id="main-nav">
      <div class="container">
          <p><i class="fas fa-phone"></i> +380505476787,  email: <a href = "mailto: info@lex-hotel.com.ua.net">info@lex-hotel.com.ua</a></p>
          <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
              <ul class="navbar-nav ml-auto">
                  <li class="nav-item"><a href="" class="nav-link">Головна</a></li>
                  <li class="nav-item"><a href="" class="nav-link">Номери</a></li>
                  <li class="nav-item"><a href="" class="nav-link">Умови проживання</a></li>
                  <li class="nav-item"><a href="" class="nav-link">Дозвілля</a></li>
                  <li class="nav-item"><a href="" class="nav-link">Фото</a></li>
                  <li class="nav-item"><a href="" class="nav-link">Відгуки</a></li>
                  <li class="nav-item"><a href="" class="nav-link">Контакти</a></li>
              </ul>
          </div>
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


  <!--  RESIDENCE HEADER  -->
  <section id="residence-head-section">
      <div class="container">
          <div class="row">
              <div class="col text-center py-5">
                  <h1 class="display-4">Ласкаво просимо</h1>
                  <p class="lead">Сучасний LEX TREND HOTEL, розташований в центрі квітучого та динамічно розвиваючогося міста Ірпінь – мальовничого передмістя Києва. Телефон для бронювання: +380505476787, email: <a href = "mailto: info@lex-hotel.com.ua">info@lex-hotel.com.ua</a>
                  </p>
                  <!--<a href="#" class="btn btn-outline-secondary">Подробнее</a>-->
              </div>
          </div>
      </div>
  </section>

  <!--  RESIDENCE SECTION  -->
  <section id="residence-section" class="bg-light text-muted py-5">
      <div class="container">
          <div class="row">
              <div class="col-md-6"><img src="<?php echo THEME_URL?>/img/superooms-1.jpg" alt="superoom" class="img-fluid mb-3 rounded-circle"/></div>
              <div class="col-md-6">
                  <h3>Проживання</h3>
                  <p>Готель має 25 номерів від 20 до 40 кв.м</p>
                  <div class="d-flex">
                      <div class="p-2 align-self-start">
                          <i class="fas fa-check fa-2x"></i>
                      </div>
                      <div class="p-2 align-self-end">
                          <h5>Сімейні номери</h5>
                      </div>
                  </div>
                  <div class="d-flex">
                      <div class="p-2 align-self-start">
                          <i class="fas fa-check fa-2x"></i>
                      </div>
                      <div class="p-2 align-self-end">
                          <h5>Кондиціонер</h5>
                      </div>
                  </div>
                  <div class="d-flex">
                      <div class="p-2 align-self-start">
                          <i class="fas fa-check fa-2x"></i>
                      </div>
                      <div class="p-2 align-self-end">
                          <h5>Телевізор Ultra HD 4K Smart TV</h5>
                      </div>
                  </div>
                  <div class="d-flex">
                      <div class="p-2 align-self-start">
                          <i class="fas fa-check fa-2x"></i>
                      </div>
                      <div class="p-2 align-self-end">
                          <h5>Холодильник</h5>
                      </div>
                  </div>
                  <div class="d-flex">
                      <div class="p-2 align-self-start">
                          <i class="fas fa-check fa-2x"></i>
                      </div>
                      <div class="p-2 align-self-end">
                          <h5>Килимове покриття</h5>
                      </div>
                  </div>
                  <div class="d-flex">
                      <div class="p-2 align-self-start">
                          <i class="fas fa-check fa-2x"></i>
                      </div>
                      <div class="p-2 align-self-end">
                          <h5>Ліжка Queen Size, King Size</h5>
                      </div>
                  </div>
                  <div class="d-flex">
                      <div class="p-2 align-self-start">
                          <i class="fas fa-check fa-2x"></i>
                      </div>
                      <div class="p-2 align-self-end">
                          <h5>Додаткові спальні місця</h5>
                      </div>
                  </div>
                  <div class="d-flex">
                      <div class="p-2 align-self-start">
                          <i class="fas fa-check fa-2x"></i>
                      </div>
                      <div class="p-2 align-self-end">
                          <h5>Чайник, чай, кава</h5>
                      </div>
                  </div>
              </div>

          </div>
      </div>
  </section>


  <!--  COMFORT HEADER  -->
  <section id="premium-head-section" class="bg-secondary">
      <div class="container">
          <div class="row">
              <div class="col py-5">
                  <h1 class="display-4 text-center">Послуги та зручності</h1>
                  <div class="facilities d-flex justify-content-around">
                      <ul class="fa-ul">
                          <li><span class="fa-li"><i class="fas fa-wifi"></i></span>Безкоштовний Wi-Fi</li>
                          <li><span class="fa-li"><i class="fas fa-broom"></i></span>Обслуговування номерів</li>
                          <li></li>
                      </ul>
                      <ul class="fa-ul">
                          <li><span class="fa-li"><i class="fas fa-door-open"></i></span>Конс’єрж сервіс</li>
                          <li><span class="fa-li"><i class="fas fa-print"></i></span>Принтер,сканер,копір</li>
                      </ul>
                      <ul class="fa-ul">
                          <li><span class="fa-li"><i class="fas fa-eye"></i></span>Охорона цілодобово</li>
                          <li><span class="fa-li"><i class="fas fa-car"></i></span>Охоронювана парковка</li>
                      </ul>
                  </div>
                      <img src="<?php echo THEME_URL?>/img/tesla-destination-charger.jpg" class="tesla-charger"/> <span>На парковці зарядна станція для електромобілів</span>
              </div>
          </div>
          </div>
  </section>

  <!--  COMFORT SECTION  -->
  <section id="premium-section" class="bg-light text-muted py-5">
      <div class="container">
          <div class="row">
              <div class="col-md-6 order-2">
                  <img src="<?php echo THEME_URL?>/img/superooms-1.jpg" alt="superoom" class="img-fluid mb-3 rounded-circle"/>
              </div>
              <div class="col-md-6">
                  <h5 class="p-4">Комфорт є головним пріоритетом в наших затишних сучасних номерах. У нашому готелі ви повинні спати так само, як і у власному ліжку, а може навіть зручніше. Наші анатомічні ортопедичні матраци класу "ЛЮКС" і постільна білизна з високоякісної бавовни забезпечать вам прекрасний сон і відпочинок. А спеціальні штори "блекаут" ізолюють вас від світла за вікнами та забезпечать затишок і комфорт під час відпочинку після бурхливого насиченого дня. Прекрасні дні починаються з комфортної доброї ночі!
                  </h5>
                  <div class="col">
                      <div class="d-flex">
                          <div class="p-3 align-self-start">
                              <i class="fas fa-check fa-2x"></i>
                          </div>
                          <div class="p-3 align-self-end">
                              <h5>
                                  Окрема ванна кімната
                              </h5>
                          </div>
                      </div>
                      <div class="d-flex">
                          <div class="p-3 align-self-start">
                              <i class="fas fa-check fa-2x"></i>
                          </div>
                          <div class="p-3 align-self-end">
                              <h5>Душ, ванна, туалет, біде</h5>
                          </div>
                      </div>
                      <div class="d-flex">
                          <div class="p-3 align-self-start">
                              <i class="fas fa-check fa-2x"></i>
                          </div>
                          <div class="p-3 align-self-end">
                              <h5>Фен</h5>
                          </div>
                      </div>
                      <div class="d-flex">
                          <div class="p-3 align-self-start">
                              <i class="fas fa-check fa-2x"></i>
                          </div>
                          <div class="p-3 align-self-end">
                              <h5>Капці</h5>
                          </div>
                      </div>
                      <div class="d-flex">
                          <div class="p-3 align-self-start">
                              <i class="fas fa-check fa-2x"></i>
                          </div>
                          <div class="p-3 align-self-end">
                              <h5>Парфумерно-косметичні засоби</h5>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>


  <!--  CITY VIEW  -->
  <img src="<?php echo THEME_URL?>/img/Irpin_Square.jpg" class="w-100" alt="Irpin Central Square">

  <!--  HABITATION CONDITIONS SECTION  -->
  <section id="executive-section" class="bg-light text-muted py-5">
      <div class="container">
          <div class="row">
              <div class="col-md-6"><img src="<?php echo THEME_URL?>/img/superooms-1.jpg" alt="superoom" class="img-fluid mb-3 rounded-circle"/></div>

              <!--  HABITATION CONDITIONS  -->
              <div class="habitation-conditions col-md-6">
                  <h3>Умови поселення</h3>
                  <div class="d-flex">
                      <div class="p-2 align-self-start">
                          <i class="fas fa-angle-right fa-2x"></i>
                      </div>
                      <div class="p-2 align-self-end">
                          <h5>Поселення – ресепшн цілодобово</h5>
                      </div>
                  </div>
                  <div class="d-flex">
                      <div class="p-2 align-self-start">
                          <i class="fas fa-angle-right fa-2x"></i>
                      </div>
                      <div class="p-2 align-self-end">
                          <h5>Розрахунковий час (виїзд) – 12-00</h5>
                      </div>
                  </div>
                  <div class="d-flex">
                      <div class="p-2 align-self-start">
                          <i class="fas fa-angle-right fa-2x"></i>
                      </div>
                      <div class="p-2 align-self-end">
                          <h5>Оплата проживання проводиться при заселенні</h5>
                      </div>
                  </div>
                  <div class="d-flex">
                      <div class="p-2 align-self-start">
                          <i class="fas fa-angle-right fa-2x"></i>
                      </div>
                      <div class="p-2 align-self-end">
                          <h5>Приймаємо оплату готівкою, банківським переказом, всіма банківськими картами</h5>
                      </div>
                  </div>
                  <div class="d-flex">
                      <div class="p-2 align-self-start">
                          <i class="fas fa-angle-right fa-2x"></i>
                      </div>
                      <div class="p-2 align-self-end">
                          <h5>Діти різного віку – ласкаво просимо</h5>
                      </div>
                  </div>
                  <div class="d-flex">
                      <div class="p-2 align-self-start">
                          <i class="fas fa-angle-right fa-2x"></i>
                      </div>
                      <div class="p-2 align-self-end">
                          <h5>Проживання дітей до 6 років в одному номері з батьками без надання додаткового місця - безкоштовно</h5>
                      </div>
                  </div>
                  <div class="d-flex">
                      <div class="p-2 align-self-start">
                          <i class="fas fa-angle-right fa-2x"></i>
                      </div>
                      <div class="p-2 align-self-end">
                          <h5>Діти старше 6 років вважаються дорослими, за надання спального місця стягується плата</h5>
                      </div>
                  </div>
                  <div class="d-flex">
                      <div class="p-2 align-self-start">
                          <i class="fas fa-angle-right fa-2x"></i>
                      </div>
                      <div class="p-2 align-self-end">
                          <h5>Дитячі ліжечка для дітей до 3-х років</h5>
                      </div>
                  </div>
                  <div class="d-flex">
                      <div class="p-2 align-self-start">
                          <i class="fas fa-angle-right fa-2x"></i>
                      </div>
                      <div class="p-2 align-self-end">
                          <h5>Розміщення з домашніми тваринами не допускається</h5>
                      </div>
                  </div>
                  <div class="d-flex">
                      <div class="p-2 align-self-start">
                          <i class="fas fa-angle-right fa-2x"></i>
                      </div>
                      <div class="p-2 align-self-end">
                          <h5>Куріння заборонено!</h5>
                      </div>
                  </div>
              </div>

          </div>
      </div>
  </section>


  <!--  GENERAL INFO SECTION  -->
  <section id="general-info-section">
      <div class="container">
          <div class="row py-4">
                  <div class="col-12 text-center">
                      <h1 class="display-4">Контактна інформація</h1>
                  </div>
              <div class="col-sm-8 col-xs-12">
                  <h6>ВІДСТАНІ</h6>
                  Міжнародний аеропорт "Бориспіль" - 66 км<br>
                  Залізничний вокзал Київ - 26км<br>
                  Залізничний вокзал та автовокзал Ірпінь - 100м<br>
                  Супермаркет - 20 м<br><br>
                  <p>Ми з нетерпінням чекаємо вашого візиту та віримо,<br> що ви будете раді повернутися.</p>
              </div>
              <div class="col-sm-4 col-xs-12">
                  <h6>МІСЦЕ РОЗТАШУВАННЯ</h6>
                  місто Ірпінь<br>
                  вул. Антонова, 3-а<br>
                  <h6>КОНТАКТИ</h6>
                  тел. +380505476787<br>
                  email: info@lex-hotel.com.ua<br><br>
                  <button class="btn btn-outline-light book-online" type="button" data-toggle="modal" data-target="#booking-modal">Забронювати онлайн</button>
              </div>
          </div>
      </div>
  </section>


  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1185.7312733424633!2d30.2474654!3d50.5228941!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x472b322d3da6fca9%3A0xcf8d51055baa0b89!2z0YPQuy4g0JDQvdGC0L7QvdC-0LLQsCwgMywg0JjRgNC_0LXQvdGMLCDQmtC40LXQstGB0LrQsNGPINC-0LHQu9Cw0YHRgtGMLCAwODIwMA!5e1!3m2!1sru!2sua!4v1580747622467!5m2!1sru!2sua" width="100%" height="500" frameborder="0" style="border:0;" allowfullscreen></iframe>


  <!-- FOOTER -->
  <footer id="footer">
      <div class="container">
          <div class="row">
              <div class="copyright col text-center py-3">
                  <img src="<?php echo THEME_URL?>/img/LEX_trend-hotel_gold.png" alt="logo">
                  <p> Copyright &copy; <span id="year"></span><br/>
                      Усі права захищені
                  </p>
              </div>
          </div>
      </div>
  </footer>

  <!--  BOOKING MODAL – Should go into miscellaneous template part -->
  <div class="modal fade text-dark" id="booking-modal">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title">Забронювати онлайн</h5>
                  <button class="close" data-dismiss="modal"></button>
                    <span>&times;</span>
              </div>
              <div class="modal-body">

              </div>
          </div>
      </div>
  </div>
  <!--  BOOKING MODAL -->


  <script src="https://code.jquery.com/jquery-3.4.1.min.js"
          integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
          crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
    crossorigin="anonymous"></script>
  <script>
    // Get the current year for the copyright
    $('#year').text(new Date().getFullYear());
  </script>
</body>

</html>