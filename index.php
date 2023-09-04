<?php

    include "connect.php";
    include "Includes/templates/header.php";
    include "Includes/templates/navbar.php";

?>
    <section class="home-section" id="home-section">
	    <div class="home-section-content">
		    <div id="home-section-carousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#home-section-carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#home-section-carousel" data-slide-to="1"></li>
                    <li data-target="#home-section-carousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100"  src="Design/images/beauty_salon_image_1.png" alt="First slide">
                        <div class="carousel-caption d-md-block">
                            <h3>Перукарня «Тавричанка» — це простір краси та стилю! </h3>
                            <p>
                              Наша перукарня – це територія, створена виключно для тих, хто цінує
                                <br>
                                 найвищу якість, час і бездоганний вигляд.
                            </p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100"  src="Design/images/beauty_salon_image_2.png" alt="Second slide">
                        <div class="carousel-caption d-md-block">
                            <h3>Перукарня «Тавричанка» — це простір краси та стилю! </h3>
                            <p>
                              Наша перукарня – це територія, створена виключно для тих, хто цінує
                                <br>
                                 найвищу якість, час і бездоганний вигляд.
                            </p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" аsrc="Design/images/beauty_salon_image_3.png" alt="Third slide">
                        <div class="carousel-caption d-md-block">
                            <h3>Перукарня «Тавричанка» — це простір краси та стилю! </h3>
                            <p>
                              Наша перукарня – це територія, створена виключно для тих, хто цінує
                                <br>
                                 найвищу якість, час і бездоганний вигляд.
                            </p>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#home-section-carousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#home-section-carousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Далі</span>
                </a>
            </div>
		</div>
	</section>

    <section id="about" class="about_section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="about_content" style="text-align: center;">
                        <h3>Про нас</h3>
                        <h2>Перукарня <br>"Тавричанка"</h2>

                        <p style="color: #777">
                            Наше кредо: створити унікальну атмосферу для кожного клієнта з повагою, по-справжньому індивідуальним підходом та професіоналізмом. Наші майстри допоможуть вам завжди виглядати чарівно, сміливо експериментувати з новими образами, підтримувати і довго зберігати природну красу. Ми завжди раді бачити вас у нашому затишному залі, де вашою зовнішністю займуться справжні професіонали своєї справи.
                        </p>
                        <a href="#" class="default_btn" style="opacity: 1;">Більше про нас</a>
                    </div>
                </div>
                <div class="col-md-6  d-none d-md-block">
                    <div class="about_img" style = "overflow:hidden">
                        <img class="about_img_1" src="Design/images/about-1.png" alt="about-1">
                        <img class="about_img_2" src="Design/images/about-2.png" alt="about-2">
                        <img class="about_img_3" src="Design/images/about-3.png" alt="about-3">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="services_section" id="services">
        <div class="container">
            <div class="section_heading">
                <h3>Модна перукарня</h3>
                <h2>Наші послуги</h2>
                <div class="heading-line"></div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 padd_col_res">
                    <div class="service_box">
                        <i class="bs bs-scissors-1"></i>
                        <h3>Стрижка та Укладка</h3>
                        <p>Стрижки будь-якої складності та для будь-якої довжини волосся.
Укладання та зачіски на кожен день та для особливого випадку.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 padd_col_res">
                    <div class="service_box">
                        <i class="bs bs-razor-2"></i>
                        <h3>Фарбування Волосся</h3>
                        <p>У палітру входить понад 54 відтінки, за допомогою
яких Ви легко створите індивідуальний образ.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 padd_col_res" >
                    <div class="service_box">
                        <i class="bs bs-brush"></i>
                        <h3>Відновлення Волосся</h3>
                        <p>Комплекс доглядових процедур, що дозволяє покращити стан волосся.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 padd_col_res">
                    <div class="service_box">
                        <i class="bs bs-hairbrush-1"></i>
                        <h3>Послуги для чоловіків</h3>
                        <p>Стрижку фарбування та укладання волосся.
Оформлення вусів та бороди, що виявить Ваш власний, неповторний стиль.
</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="book_section" id="booking">
        <div class="book_bg"></div>
        <div class="map_pattern"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-6">
                    <form action="appointment.php" method="post" id="appointment_form" class="form-horizontal appointment_form">
                        <div class="book_content">
                            <h2 style="color: white;">Створити онлайн-запис</h2>
                            <p style="color: #999;">
                              Не відкладайте візит у перукарню. Необхідно тільки вибрати час та послугу. <br>Дійте!
                            </p>
                        </div>

                        <button id="app_submit" class="default_btn" type="submit">
                            Онлайн-запис
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="gallery-section" id="gallery">
        <div class="section_heading">
            <h3>Модна перукарня</h3>
            <h2>Фотогалерея</h2>
            <div class="heading-line"></div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 gallery-column">
                    <div style="height: 230px">
                        <div class="gallery-img" style="background-image: url('Design/images/portfolio-1.jpg');">    </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 gallery-column">
                    <div style="height: 230px">
                        <div class="gallery-img" style="background-image: url('Design/images/portfolio-2.jpg');"></div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 gallery-column">
                    <div style="height: 230px">
                        <div class="gallery-img" style="background-image: url('Design/images/portfolio-3.jpg');"></div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 gallery-column">
                    <div style="height: 230px">
                        <div class="gallery-img" style="background-image: url('Design/images/portfolio-4.jpg');"></div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 gallery-column">
                    <div style="height: 230px">
                        <div class="gallery-img" style="background-image: url('Design/images/portfolio-5.jpg');"></div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 gallery-column">
                    <div style="height: 230px">
                        <div class="gallery-img" style="background-image: url('Design/images/portfolio-6.jpg');"></div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 gallery-column">
                    <div style="height: 230px">
                        <div class="gallery-img" style="background-image: url('Design/images/portfolio-7.jpg');"></div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 gallery-column">
                    <div style="height: 230px">
                        <div class="gallery-img" style="background-image: url('Design/images/portfolio-8.jpg');"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="team" class="team_section">
        <div class="container">
            <div class="section_heading ">
                <h3>Модна перукарня</h3>
                <h2>Наші майстри</h2>
                <div class="heading-line"></div>
            </div>
            <ul class="team_members row">
                <li class="col-lg-3 col-md-6 padd_col_res">
                    <div class="team_member">
                        <img src="Design/images/team-1.jpg" alt="Team Member">
                    </div>
                </li>
                <li class="col-lg-3 col-md-6 padd_col_res">
                    <div class="team_member">
                        <img src="Design/images/team-2.jpg" alt="Team Member">
                    </div>
                </li>
                <li class="col-lg-3 col-md-6 padd_col_res">
                    <div class="team_member">
                        <img src="Design/images/team-3.jpg" alt="Team Member">
                    </div>
                </li>
                <li class="col-lg-3 col-md-6 padd_col_res">
                    <div class="team_member">
                        <img src="Design/images/team-4.jpg" alt="Team Member">
                    </div>
                </li>
            </ul>
        </div>
    </section>

    <section id="reviews" class="testimonial_section">
        <div class="container">
            <div id="reviews-carousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#reviews-carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#reviews-carousel" data-slide-to="1"></li>
                    <li data-target="#reviews-carousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <!-- REVIEW 1 -->
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="Design/images/beauty_salon_image_1.jpg" alt="First slide" style="visibility: hidden;">
                        <div class="carousel-caption d-md-block">
                            <h3>"                              Супер! Дуже подобається салон! Прекрасні майстри. Приємні в обслуговування, добре консультують, дуже задоволена роботою. Дуже подобається якість їхньої роботи: ходили і на стрижку, і на фарбування – залишилися задоволеними якістю всіх послуг. Спасибі.
"</h3>
                            <p>

Ірина Грабова
                            </p>
                        </div>
                    </div>
                    <!-- REVIEW 2 -->
                    <div class="carousel-item">
                        <img class="d-block w-100" src="Design/images/beauty_salon_image_1.jpg" alt="First slide"  style="visibility: hidden;">
                        <div class="carousel-caption d-md-block">
                            <h3>"Чудова перукарня, затишна атмосфера, золоті руки спеціалістів. Велике спасибі мастеру Каракуці Юлії, за чудове фарбування та стрижку, волосся виглядає неймовірно."</h3>
                            <p>
Лілія Парак                            </p>
                        </div>
                    </div>
                    <!-- REVIEW 3 -->
                    <div class="carousel-item">
                        <img class="d-block w-100" src="Design/images/beauty_salon_image_1.jpg" alt="First slide"  style="visibility: hidden;">
                        <div class="carousel-caption d-md-block">
                            <h3>«Був вражений, що за ціни в середньому на половину дешевші ніж в інших перукарнях, тебе можуть гарно підстригти. При цьому одразу відчуваєш, як дбайливо відносяться до тебе починаючи ще з адміністратора при вході. Приємно все : загальна обстановка, дизайн приміщення, професіоналізм майстрів, ну і ціни звичайно.»</h3>
                            <p>
                                Андрій Граур
                            </p>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#reviews-carousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#reviews-carousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Далі</span>
                </a>
            </div>
        </div>
    </section>

    <section class="pricing_section" id="pricing">

            <?php

                $stmt = $con->prepare("Select * from service_categories");
                $stmt->execute();
                $categories = $stmt->fetchAll();

            ?>

        <div class="container">
            <div class="section_heading">
                <h2>Ціни на послуги</h2>
                <div class="heading-line"></div>
            </div>
            <div class="row">
                <?php

                    foreach($categories as $category)
                    {
                        $stmt = $con->prepare("Select * from services where category_id = ?");
                        $stmt->execute(array($category['category_id']));
                        $totalServices =  $stmt->rowCount();
                        $services = $stmt->fetchAll();

                        if($totalServices > 0)
                        {
                        ?>

                            <div class="col-lg-4 col-md-6 sm-padding">
                                <div class="price_wrap">
                                    <h3><?php echo $category['category_name'] ?></h3>
                                    <ul class="price_list">
                                        <?php

                                            foreach($services as $service)
                                            {
                                                ?>

                                                    <li>
                                                        <h4><?php echo $service['service_name'] ?></h4>
                                                        <p><?php echo $service['service_description'] ?></p>
                                                        <span class="price">₴<?php echo $service['service_price'] ?></span>
                                                    </li>

                                                <?php
                                            }

                                        ?>

                                    </ul>
                                </div>
                            </div>

                        <?php
                        }
                    }

                ?>

            </div>
        </div>
    </section>

    <section class="contact-section" id="contact-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 sm-padding">
                    <div class="contact-info">
                        <h2>
                          Зв'яжіться з нами і
                            <br>надішліть нам повідомлення сьогодні!
                        </h2>

                        <h3>

вулиця Потьомкінська, 43а
                            <br>
                            Херсон, Херсонська область, 730000
                        </h3>
                        <h4>
                            <span style = "font-weight: bold">Email:</span>
                          tavrichankahair@gmail.com
                            <br>
                            <span style = "font-weight: bold">Контактні телефони:</span>
                            <br>
                            +38 (099) 00 46 511
                            <br>
                            +38 (063) 20 29 947
                        </h4>
                    </div>
                </div>
                <div class="col-lg-6 sm-padding">
                    <div class="contact-form">
                        <div id="contact_ajax_form" class="contactForm">
                            <div class="form-group colum-row row">
                                <div class="col-sm-6">
                                    <input type="text" id="contact_name" name="name" class="form-control" placeholder="Ім'я">
                                </div>
                                <div class="col-sm-6">
                                    <input type="email" id="contact_email" name="email" class="form-control" placeholder="Email">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <input type="text" id="contact_subject" name="subject" class="form-control" placeholder="Тема повідомлення">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <textarea id="contact_message" name="message" cols="30" rows="5" class="form-control message" placeholder="Повідомлення"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <button id="contact_send" class="default_btn">Надіслати повідомлення</button>
                                </div>
                            </div>
                            <img src="Design/images/ajax_loader_gif.gif" id = "contact_ajax_loader" style="display: none">
                            <div id="contact_status_message"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="widget_section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="footer_widget">
                        <img src="Design/images/salon_logo.png" alt="Brand">

                        <ul class="widget_social">
                            <li><a href="#" data-toggle="tooltip" title="Facebook"><i class="fab fa-facebook-f fa-2x"></i></a></li>
                            <li><a href="#" data-toggle="tooltip" title="Twitter"><i class="fab fa-twitter fa-2x"></i></a></li>
                            <li><a href="#" data-toggle="tooltip" title="Instagram"><i class="fab fa-instagram fa-2x"></i></a></li>
                            <li><a href="#" data-toggle="tooltip" title="LinkedIn"><i class="fab fa-linkedin fa-2x"></i></a></li>
                            <li><a href="#" data-toggle="tooltip" title="Google+"><i class="fab fa-google-plus-g fa-2x"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                     <div class="footer_widget">
                        <h3>Контактні дані</h3>
                        <p>
                          вулиця Потьомкінська, 43а, Херсон, Херсонська область, 730000                        </p>
                        <p>
                            tavrichankahair@gmail.com
<p>                            +38 (099) 00 46 511
                            <br>
                            +38 (063) 20 29 947
                        </p>
                     </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer_widget">
                        <h3>
                           Час роботи
                        </h3>
                        <ul class="opening_time">
                            <li>Понеділок - П'ятниця 09:00 - 20:00</li>
                            <li>Субота - Неділя 09:30 - 18:00</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer_widget">
                        <h3>Підпишись на наші новини</h3>
                        <div class="subscribe_form">
                            <form action="#" class="subscribe_form" novalidate="true">
                                <input type="email" name="EMAIL" id="subs-email" class="form_input" placeholder="Email">
                                <button type="submit" class="submit">Підписатись</button>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include "Includes/templates/footer.php"; ?>
