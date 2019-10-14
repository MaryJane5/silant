<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Силант Сервис</title>

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-WKG44XL');</script>
    <!-- End Google Tag Manager -->
</head>
<body>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WKG44XL"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

	<section class="call">
		<div class="container">
			<div class="row">





<div class="col-xs-6 col-sm-4 col-md-1 col-lg-1">

          <div class="phone_number">
          <span>08:30-23:00</span>
              <br>
              <span>Ежедневно</span>

          </div>



        </div>
        <?php

          $phone_numbers = [
              'day' => [
                  'ks' => '+38 (068) 366-22-49',
                  'mts' => '+38 (099) 664-93-94',
                  'life' => '+38 (063) 351-97-62',
              ],
              'night' => [
                 'ks' => '+38 (068) 366-22-49',
                  'mts' => '+38 (099) 664-93-94',
                  'life' => '+38 (063) 351-97-62',
              ],
          ];

          //$key = 'day';
          $key = date('H') >= 19 || date('H') < 10 ? 'night' : 'day';
          $key = date('w') == 6 ? 'day' : (date('w') == 0 ? 'night' : $key);
        
        ?>
        <div class="col-xs-6 col-sm-4 col-md-2 col-lg-2">
          <div class="phone_number">
             <span title="Київстар" class="mobo-kyivstar-16">&nbsp;<a href="tel:<?php echo $phone_numbers[$key]['ks']; ?>"><?php echo $phone_numbers[$key]['ks']; ?></a></span><br>
             <span title="Lifecell" class="mobo-lifecell-16">&nbsp;<a href="tel:<?php echo $phone_numbers[$key]['life']; ?>"><?php echo $phone_numbers[$key]['life']; ?></a></span>

          </div>

        </div>



    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 col-lg-push-2">
          <div class="phone_number" id="text_head">
          <span>АКЦИЯ!ПРИ ЗАКАЗЕ 3х МОСКИТНЫХ СЕТОК - ЗАМЕР И УСТАНОВКА БЕСПЛАТНО!</span>
              <br>
              <span>Бесплатный выезд мастера и диагностика!</span>

          </div>

    </div>

    <div class="col-xs-6 col-sm-4 col-md-2 col-lg-2 col-lg-pull-3">
          <div class="phone_number vodafone">
          <span title="Vodafone" class="mobo-vodafone-16">&nbsp;<a href="tel:<?php echo $phone_numbers[$key]['mts']; ?>"><?php echo $phone_numbers[$key]['mts']; ?></a></span>
              <!--<br>-->
              <!--<span title="Cтационарный" class="mobo-home-16">&nbsp;<a href="tel:0577823178">(057) 78-23-178</a></span>-->

          </div>

    </div>



<!--     <div class="col-xs-6 col-sm-4 col-md-2 col-lg-2">
          <div class="call_me">
            <button class="btn btn-default" type="submit" data-toggle="modal" data-target="#leave-request">Оставить заявку</button>

          </div>

    </div> -->
    <div class="col-xs-12 col-sm-8 col-md-4 col-lg-4">
          <div class="call_me">
            <button class="btn btn-default" type="submit" data-toggle="modal" data-target="#modal-callback">Перезвоните мне</button>

          </div>

        </div>


		</div>

      <!-- <div class="row">
        <div class="col-md-12">
          <div class="call" id="call_every_day">
            Звоните ежедневно с 09:00 до 21:00
          </div>
          <div id="free_diag">
            Бесплатная диагностика!
          </div>

      </div>

		</div> -->

	</section>


	<header class="header" id="home">
			<div class="container-fluid">
				<div class="header_outer">
					<div class="header_iner ">
						<div class="top_text">
							<h1>РЕМОНТ<br>МЕТАЛЛОПЛАСТИКОВЫХ ОКОН И ДВЕРЕЙ В КИЕВЕ</h1>
              <script>
                if(document.location.href.indexOf('utm_term')>0) {
                    var utmTerms = decodeURI(document.location.href.split('&utm_term=')[1].split('&')[0]);
                    document.getElementsByTagName("h1")[0].innerHTML = utmTerms.replace(/[^А-Яа-яЁё\s]/gi,'').toUpperCase();
                }
              </script>
						</div>
						<div class="bott_text">
							<p>КОМПАНИЯ «СЕРВИС»</p>
						</div>
						<div class="start" data-href="services">
							<button class="btn btn-default" type="submit">СТАРТ</button>
						</div>
            <div id="scroll">
               <a href="#services"><i class="fa fa-angle-down"></i></a>
            </div>
					</div>
				</div>

			</div>
	</header>

	<section class="nav_bar">
		<div class="container">
			<nav class="navbar navbar-default navbar-static-top" role="navigation" >
			  <div class="container-fluid">
			    <!-- Brand and toggle get grouped for better mobile display -->
			    <div class="navbar-header">
			      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
			            <span class="sr-only">Toggle navigation</span>
			            <span class="icon-bar"></span>
			            <span class="icon-bar"></span>
			            <span class="icon-bar"></span>
			          </button>
			      <a class="navbar-brand" href="index.php"><h3>Компания «Силант Сервис»</h3></a>
			    </div>

			    <!-- Collect the nav links, forms, and other content for toggling -->
			    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">


			      <ul class="nav navbar-nav navbar-right" id="menu">
            <li><a href="#table-pricing" id="color">ПРАЙС</a></li>
			        <li><a href="" data-href="#callback-btn-header" id="color" class="hypercomments">ОТЗЫВЫ</a></li>
			        <li><a href="#services" id="color">СЕРВИС</a></li>
			        <li><a href="#pricing" id="color">НАШИ ПРЕИМУЩЕСТВА</a></li>
			        <li><a data-toggle="modal" href="#leave-request" id="color">ОСТАВИТЬ ЗАЯВКУ</a></li>

			      </ul>
			    </div><!-- /.navbar-collapse -->
			  </div><!-- /.container-fluid -->
			</nav>
		</div>

	</section>


	 <section class="services" id="services">
    <div class="container">
      <div class="heading wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
        <div class="row">
          <div class="col-md-12">
            <div class="text_services">
            <button class="btn btn-default" type="submit" data-toggle="modal" data-target="#leave-request">Закажите бесплатную диагностику прямо сейчас!</button>
            	<h2>Обслуживаем физлица и организации, наличный и безналичный расчет!</h2>
				<p>Компания «Силант Сервис» предлагает профессиональное сервисное обслуживание и<br> ремонт пластиковых окон и дверей:</p>
            </div>
          </div>
        </div>
      </div>
      <div class="text-center our-services" id="our-services">
        <div class="row">
          <div class="col-xs-6 col-sm-4 col-md-4 wow fadeInDown padding-none" data-wow-duration="1000ms" data-wow-delay="300ms">
         <div class="services_outer">
         	   <div class="service-icon" id="wrench">
         	  <i class="fa fa-wrench"></i>
         	</div>
         	<div class="service-info">
         		<h3>Замена уплотнителя </h3>
         	</div>
         </div>
          </div>



          <div class="col-xs-6 col-sm-4 col-md-4 wow fadeInDown padding-none" data-wow-duration="1000ms" data-wow-delay="450ms ">
            <div class="services_outer sv_border">
            	<div class="service-icon" id="cog">
            	  <i class="fa fa-cog"></i>
            	</div>
            	<div class="service-info">
            		<h3>Регулировка окон и дверей</h3>
            	</div>
             </div>
           </div>



          <div class="col-xs-6 col-sm-4 col-md-4 wow fadeInDown padding-none" data-wow-duration="1000ms" data-wow-delay="550ms">
            <div class="services_outer">
            	<div class="service-icon" id="brush">
            	  <i class="fa fa-paint-brush"></i>
            	</div>
            	<div class="service-info">
            	  <h3>Чистка и смазка фурнитуры</h3>
            	</div>
            </div>
          </div>



          <div class="col-xs-6 col-sm-4 col-md-4 wow fadeInUp padding-none" data-wow-duration="1000ms" data-wow-delay="650ms">
            <div class="services_outer_1">
            	<div class="service-icon" id="gavel">
            	  <i class="fa fa-gavel"></i>
            	</div>
            	<div class="service-info">
            	  <h3>Ремонт: фурнитуры окон, дверей, замена замков</h3>
            	</div>
            </div>
          </div>



          <div class="col-xs-6 col-sm-4 col-md-4 wow fadeInUp padding-none" data-wow-duration="1000ms" data-wow-delay="750ms">
           <div class="services_outer_1 sv_border">
           	 <div class="service-icon" id="snowflake">
           	  <i class="fa fa-snowflake-o"></i>
           	</div>
           	<div class="service-info">
				<h3>Заделка щелей силиконом, устранение продуваний</h3>
           	</div>
           </div>
          </div>



          <div class="col-xs-6 col-sm-4 col-md-4 wow fadeInUp padding-none" data-wow-duration="1000ms" data-wow-delay="850ms">
            <div class="services_outer_1">
            	<div class="service-icon" id="calendar">
            	  <i class="fa fa-calendar"></i>
            	</div>
            	<div class="service-info">
            	  <h3>Установка москитных сеток,замена стеклопакетов  </h3>
            	</div>
            </div>
          </div>



          </div>


        </div>
      </div>
    </div>
  </section><!--/#services-->

    <div id="team">
  <section id="pricing">
    <div class="container">
      <div class="row">
        <div class="col-md-12 wow fadeInUp " data-wow-duration="1200ms" data-wow-delay="300ms">
            <div class="pricing_iner">
        <h2>Наши преимущества:</h2>
              <p> Обращаясь к нам, Вы можете быть уверены, что работаете с профессионалами!</p>
            </div>
        </div>
      </div>


      <div class="pricing-table">

        <div class="row">
          <div class="col-xs-12 col-sm-6 col-md-3 ">
            <div class="single-table wow flipInY pricing_outer" data-wow-duration="1000ms" data-wow-delay="300ms">
             <div class="pricing_text_top">
               <h3>Преимущество №1</h3>
             </div>
             <hr>

              <div class="price">
                <p>Высоквалифицированные мастера</p>
              </div>
            </div>
          </div>


          <div class="col-xs-12 col-sm-6 col-md-3 ">
            <div class="single-table wow flipInY pricing_outer" data-wow-duration="1000ms" data-wow-delay="500ms">
             <div class="pricing_text_top">
               <h3>Преимущество №2</h3>
             </div>
             <hr>

              <div class="price">
                <p>Гарантия на работы - 2 года, предоставляем квитанцию и акт выполненных работ, с печатью</p>
              </div>
            </div>
          </div>



          <div class="col-xs-12 col-sm-6 col-md-3">
            <div class="single-table wow flipInY pricing_outer" data-wow-duration="1000ms" data-wow-delay="800ms">
              <div class="pricing_text_top">
                <h3>Преимущество №3</h3>
              </div>
              <hr>

              <div class="price">
                <p>Выезд в течении 40 минут  </p>
              </div>

            </div>
          </div>



          <div class="col-xs-12 col-sm-6 col-md-3 ">
            <div class="single-table wow flipInY pricing_outer" data-wow-duration="1000ms" data-wow-delay="1100ms">
              <div class="pricing_text_top">
                <h3>Преимущество №4</h3>
              </div>
              <hr>

              <div class="price">
                <p>Бесплатная диагностика </p>
              </div>
            </div>
          </div>
        </div>



        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12">
           <div class="free-visit">
             <h2 >По городу, выезд мастера и диагностика – бесплатно!</h2>
           </div>
           <hr>
          </div>
        </div>

    </div>
  </section><!--/#pricing-->
</div>


  <section class="table_outer">
     <div class="container">
        <div class="row">
              <div class="col-md-12">
                 <div class="table-responsive table_padding">
                   <table id="table-pricing" border="table table-bordered">
                     <caption>Прайс-лист технического обслуживания и ремонта металлопластиковых оконных систем</caption>
                     <tr>
                      <th class="name">Наименование<br>(материал + работа)</th>
                      <th class="name ">Единица<br> измерения</th>
                      <th class="name ">Цена грн.</th>
                      <th class="name ">Опция</th>
                     </tr><tr><td>Установка москитной сетки</td><td class="center">шт</td><td class="center"> от 350</td><td class="center"><button class="btn btn-default" type="submit" data-toggle="modal" data-target="#leave-request">Заказать</button></td></tr>
                     <tr><td>Регулировка окна</td><td class="center">створка</td><td class="center">150</td><td class="center"><button class="btn btn-default" type="submit" data-toggle="modal" data-target="#leave-request">Заказать</button></td></tr>
                     <tr><td>Регулировка балконной двери</td><td class="center">дверь</td><td class="center">200</td><td class="center"><button class="btn btn-default" type="submit" data-toggle="modal" data-target="#leave-request">Заказать</button></td></tr>
					 <tr><td>Регулировка входной пластиковой/алюминиевой двери</td><td class="center">дверь</td><td class="center">300</td><td class="center"><button class="btn btn-default" type="submit" data-toggle="modal" data-target="#leave-request">Заказать</button></td></tr>
					 <tr><td>Сложная регулировка окна</td><td class="center">створка</td><td class="center">200</td><td class="center"><button class="btn btn-default" type="submit" data-toggle="modal" data-target="#leave-request">Заказать</button></td></tr>
					 <tr><td>Сложная регулировка балконной двери</td><td class="center">дверь</td><td class="center">250</td><td class="center"><button class="btn btn-default" type="submit" data-toggle="modal" data-target="#leave-request">Заказать</button></td></tr>
					 <tr><td>Сложная регулировка входной пластиковой/алюминиевой двери</td><td class="center">дверь</td><td class="center">400</td><td class="center"><button class="btn btn-default" type="submit" data-toggle="modal" data-target="#leave-request">Заказать</button></td></tr>
					 <tr><td>Чистка и смазка фурнитуры окна/балконной двери/входной двери</td><td class="center">створка/дверь</td><td class="center">100</td><td class="center"><button class="btn btn-default" type="submit" data-toggle="modal" data-target="#leave-request">Заказать</button></td></tr>
					 <tr><td>Разблокировка заклинившей створки/балконной двери</td><td class="center">створка/дверь</td><td class="center">100</td><td class="center"><button class="btn btn-default" type="submit" data-toggle="modal" data-target="#leave-request">Заказать</button></td></tr>
					 <tr><td>Разблокировка входной пластиковой/алюминиевой двери</td><td class="center">дверь</td><td class="center"> 300-400</td><td class="center"><button class="btn btn-default" type="submit" data-toggle="modal" data-target="#leave-request">Заказать</button></td></tr>
					 <tr><td>Замена уплотнителя (указана только стоимость работ)</td><td class="center">м.п</td><td class="center">15</td><td class="center"><button class="btn btn-default" type="submit" data-toggle="modal" data-target="#leave-request">Заказать</button></td></tr>
                     <tr><td>Уплотнитель резина (стоимость материала)</td><td class="center">м.п</td><td class="center">25</td><td class="center"><button class="btn btn-default" type="submit" data-toggle="modal" data-target="#leave-request">Заказать</button></td></tr>
                     <tr><td>Уплотнитель пенополиуретан Германия (стоимость материала)</td><td class="center">м.п.</td><td class="center">45</td><td class="center"><button class="btn btn-default" type="submit" data-toggle="modal" data-target="#leave-request">Заказать</button></td></tr>
					 <tr><td>Профилактическая чистка и смазка резинового уплотнителя</td><td class="center">створка</td><td class="center">50-70</td><td class="center"><button class="btn btn-default" type="submit" data-toggle="modal" data-target="#leave-request">Заказать</button></td></tr>
					   <tr><td>Регулировка доводчика</td><td class="center">шт</td><td class="center">300</td><td class="center"><button class="btn btn-default" type="submit" data-toggle="modal" data-target="#leave-request">Заказать</button></td></tr>
					 <tr><td>Ремонт фурнитуры окна/двери (указана только стоимость работ)</td><td class="center">створка/дверь</td><td class="center">от 200</td><td class="center"><button class="btn btn-default" type="submit" data-toggle="modal" data-target="#leave-request">Заказать</button></td></tr>
					 <tr><td>Переделывание фурнитуры окна на поворотно-откидную (указана только стоимость работ)</td><td class="center">створка</td><td class="center">450</td><td class="center"><button class="btn btn-default" type="submit" data-toggle="modal" data-target="#leave-request">Заказать</button></td></tr>
					 <tr><td>Переделывание фурнитуры балконной двери на поворотно-откидную (указана только стоимость работ)</td><td class="center">дверь</td><td class="center">550</td><td class="center"><button class="btn btn-default" type="submit" data-toggle="modal" data-target="#leave-request">Заказать</button></td></tr>
					    <tr><td>Полная замена фурнитуры,(механизма окна)(изделие+работа в зависимости от марки и размера) </td><td class="center">шт.</td><td class="center">1300-1900</td><td class="center"><button class="btn btn-default" type="submit" data-toggle="modal" data-target="#leave-request">Заказать</button></td></tr>
					   <tr><td>Полная замена фурнитуры,(механизма окна) на противовзломную "Maco" Австрия, 2,4,6 точек противовзломности (изделие+работа, в зависимости от размера и колличества противовзломных замков) </td><td class="center">шт.</td><td class="center">1400-2000</td><td class="center"><button class="btn btn-default" type="submit" data-toggle="modal" data-target="#leave-request">Заказать</button></td></tr>
<tr><td>Замена стеклопакета (указана только стоимость работ, в зависимости от размера)</td><td class="center">шт.</td><td class="center">100-200</td><td class="center"><button class="btn btn-default" type="submit" data-toggle="modal" data-target="#leave-request">Заказать</button></td></tr>
					   <tr><td>Доставка стеклопакета (указана только стоимость работ, в зависимости от размера)</td><td class="center">шт.</td><td class="center">400-500</td><td class="center"><button class="btn btn-default" type="submit" data-toggle="modal" data-target="#leave-request">Заказать</button></td></tr>
					   <tr><td>Демонтаж сильно разбитого стеклопакета (указана только стоимость работ)</td><td class="center">шт.</td><td class="center">300 </td><td class="center"><button class="btn btn-default" type="submit" data-toggle="modal" data-target="#leave-request">Заказать</button></td></tr>
					 <tr><td>Стеклопакет однокамерный (2 стекла, указана только стоимость изделия)</td><td class="center">м.кв</td><td class="center">600-800</td><td class="center"><button class="btn btn-default" type="submit" data-toggle="modal" data-target="#leave-request">Заказать</button></td></tr>
					 <tr><td>Стеклопакет двухкамерный (3 стекла, указана только стоимость изделия)</td><td class="center">м.кв</td><td class="center">800-950</td><td class="center"><button class="btn btn-default" type="submit" data-toggle="modal" data-target="#leave-request">Заказать</button></td></tr>
        <tr><td>Замена поворотной ручки односторонней Hoppe Германия (изделие+работа) </td><td class="center">шт.</td><td class="center">180-200</td><td class="center"><button class="btn btn-default" type="submit" data-toggle="modal" data-target="#leave-request">Заказать</button></td></tr>
					 <tr><td>Замена поворотной ручки двухсторонней Hoppe Германия (изделие+работа) </td><td class="center">шт.</td><td class="center">600</td><td class="center"><button class="btn btn-default" type="submit" data-toggle="modal" data-target="#leave-request">Заказать</button></td></tr>
					   <tr><td>Замена дверного гарнитура (изделие+работа) </td><td class="center">шт.</td><td class="center">500</td><td class="center"><button class="btn btn-default" type="submit" data-toggle="modal" data-target="#leave-request">Заказать</button></td></tr>
					   <tr><td>Замена секрета замка в пластиковой/алюминиевой двери (изделие+работа) </td><td class="center">шт.</td><td class="center">400</td><td class="center"><button class="btn btn-default" type="submit" data-toggle="modal" data-target="#leave-request">Заказать</button></td></tr>
					   <tr><td>Замена замка в пластиковой/алюминиевой двери (изделие+работа) </td><td class="center">шт.</td><td class="center">500-700</td><td class="center"><button class="btn btn-default" type="submit" data-toggle="modal" data-target="#leave-request">Заказать</button></td></tr>
					   <tr><td>Установка приточно-вентиляционного клапана Maco (изделие+работа)</td><td class="center">шт.</td><td class="center">320-420</td><td class="center"><button class="btn btn-default" type="submit" data-toggle="modal" data-target="#leave-request">Заказать</button></td></tr>
                     <tr><td>Установка детского замка «оконной няни» (изделие+работа)</td><td class="center">шт.</td><td class="center">250</td><td class="center"><button class="btn btn-default" type="submit" data-toggle="modal" data-target="#leave-request">Заказать</button></td></tr>
                     <tr><td>Установка ручки курильщика + защелка (изделие+работа)</td><td class="center">шт.</td><td class="center">150</td><td class="center"><button class="btn btn-default" type="submit" data-toggle="modal" data-target="#leave-request">Заказать</button></td></tr>
					 <tr><td>Замена ручки курильщика (изделие+работа)</td><td class="center">шт.</td><td class="center">60</td><td class="center"><button class="btn btn-default" type="submit" data-toggle="modal" data-target="#leave-request">Заказать</button></td></tr>
                     <tr><td>Заделка щелей жидким пластиком</td><td class="center">м.п</td><td class="center">70</td><td class="center"><button class="btn btn-default" type="submit" data-toggle="modal" data-target="#leave-request">Заказать</button></td></tr>
                     <tr><td>Заделка крупных щелей пеной</td><td class="center">м.п</td><td class="center">100</td><td class="center"><button class="btn btn-default" type="submit" data-toggle="modal" data-target="#leave-request">Заказать</button></td></tr>
					 <tr><td>Подпенивание отлива</td><td class="center">м.п</td><td class="center">70</td><td class="center"><button class="btn btn-default" type="submit" data-toggle="modal" data-target="#leave-request">Заказать</button></td></tr>
					 <tr><td>Чистка оконного профиля средством COSMOFEN</td><td class="center">створка</td><td class="center">100</td><td class="center"><button class="btn btn-default" type="submit" data-toggle="modal" data-target="#leave-request">Заказать</button></td></tr>
                     <tr><td>Замена пластиковых декоративных частей</td><td class="center">комплект</td><td class="center">35</td><td class="center"><button class="btn btn-default" type="submit" data-toggle="modal" data-target="#leave-request">Заказать</button></td></tr>
					   <tr><td>Установка доводчика Германия ТS1500 (указана стоимость работ + изделие) </td><td class="center">шт</td><td class="center">1400</td><td class="center"><button class="btn btn-default" type="submit" data-toggle="modal" data-target="#leave-request">Заказать</button></td></tr>
					   <tr><td>Установка доводчика Германия ТS2000 уличный (указана стоимость работ + изделие) </td><td class="center">шт</td><td class="center">1900</td><td class="center"><button class="btn btn-default" type="submit" data-toggle="modal" data-target="#leave-request">Заказать</button></td></tr>
					   <tr><td>Замена ламели защитных ролет  (указана стоимость работ + материал)</td><td class="center">м.п</td><td class="center">75</td><td class="center"><button class="btn btn-default" type="submit" data-toggle="modal" data-target="#leave-request">Заказать</button></td></tr>
					   <tr><td>Замена замка в защитных ролетах (указана стоимость работ + материал)</td><td class="center">шт.</td><td class="center">650-700</td><td class="center"><button class="btn btn-default" type="submit" data-toggle="modal" data-target="#leave-request">Заказать</button></td></tr>
					   <tr><td>Замена элементов скольжения в ролетах (указана стоимость работ + материал)</td><td class="center">шт.</td><td class="center">200</td><td class="center"><button class="btn btn-default" type="submit" data-toggle="modal" data-target="#leave-request">Заказать</button></td></tr>
					   <tr><td>Замена шнура в защитных ролетах (указана стоимость работ + материал)</td><td class="center">шт.</td><td class="center">400-500</td><td class="center"><button class="btn btn-default" type="submit" data-toggle="modal" data-target="#leave-request">Заказать</button></td></tr>
					   <tr><td>Замена подъемной пружины в защитных ролетах (указана стоимость работ + материал)</td><td class="center">шт.</td><td class="center">700-950</td><td class="center"><button class="btn btn-default" type="submit" data-toggle="modal" data-target="#leave-request">Заказать</button></td></tr>
                   </table>
                 </div>

                 <div class="text_table">
                   <p>* По ремонту и замене фурнитуры (механизма) указаны приблизительные цены, более точную информацию мастер сможет предоставить на месте после диагностики.</p>
                 </div>

             </div>
     </div>
  </section>


<section id="contact">
    <!-- <div id="google-map" class="wow fadeIn" data-latitude="49.988465" data-longitude="36.233054" data-wow-duration="1000ms" data-wow-delay="400ms"></div> -->


    <div id="contact-us" class="parallax">

      <div class="container" id="contacts">
        <div id="tags">
            теги: замена резинок на пластиковых окнах
            замена уплотнителя на окнах
            уплотнители для пластиковых окон
            противовзломная фурнитура для пластиковых окон
            установка противовзломной фурнитуры
            замена фурнитуры на противовзломную
            монтаж противовзломной фурнитуры
            замена фурнитуры на противовзломную
            монтаж противовзломной фурнитуры
            регулировка окон
            ремонт окон
            ремонт пластиковых окон
            ремонт окон пвх
            регулировка окон пвх
            ремонт пластиковых окон недорого
            срочный ремонт пластиковых окон
            ремонт окон пвх цены
            ремонт металопластиковых окон
            ремонт окна мастер
            замена фурнитуры пластиковых окон
            ремонт фурнитуры пластиковых окон
            регулировка оконной фурнитуры
        </div>
        <div class="row">
          <div class= "col-sm-12 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="contacts_head_text">
            	<h2>Обратная связь</h2>
            	<p>Если у Вас возникли вопросы или пожелания - Вы всегда можете связаться с нами по телефонам, указанным<br> ниже или написав нам на e-mail</p>
            	<hr>
            </div>
           </div>
        </div>


        <div class="contact-form wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">

          <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6">

              <form id="main-contact-form" name="contact-form" class="footer_form">
                <!-- <div class="row  wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms"> -->
                  <!-- <div class="col-sm-6"> -->
                    <div class="form-group">
                      <input type="text" name="name" class="form-control" placeholder="Имя">
                      <input type="hidden" name="form" class="form-control" value="Обратная связь">
                    </div>
                 <!--  </div> -->
                  <!-- <div class="col-sm-6">
                    <div class="form-group">
                      <input type="email" name="email" class="form-control" placeholder="Email">
                    </div>
                  </div> -->
               <!--  </div> -->
                <div class="form-group">
                  <input type="text" name="phone" class="form-control" placeholder="Телефон">
                </div>
                <div class="form-group">
                  <input type="text" name="subject" class="form-control" placeholder="Тема">
                </div>
                <div class="form-group">
                  <textarea name="message" id="message" class="form-control" rows="4" maxlength="200" placeholder="Введите текст заявки"></textarea>
                </div>
                <div class="form-group">
                  <button type="submit" class="btn-submit">Отправить заявку</button>
                </div>
              </form>
            </div>


            <div class="col-xs-12 col-sm-6 col-md-6">
              <div class="contact-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                <ul class="address">
                  <p class="footer-p" style="font-size: 20px; font-weight:bold;">Силант Сервис Харьков</p>
                <p class="footer-p">переулок Донецкий 18 (м.Проспект Гагарина,торговый павильон окна "Новая Эра");
				  <p class="footer-p"> ул. Мира 8;
				  <p class="footer-p"> ул. Героев труда 30 </p>
				  <p class="footer-p" style="font-size: 20px; font-weight:bold;">Силант Сервис Киев</p>
				  <p class="footer-p"> Бульвар Верховного Совета 27
				  <p class="footer-p"> ул.Тарасовская 15а
				  <p class="footer-p"> ул.Вадима Гетьмана 17
					  <p class="footer-p" style="font-size: 20px; font-weight:bold;">Силант Сервис Одесса</p>
					<p class="footer-p"> ул. Троицкая 31
                  <li><span title="Vodafone" class="mobo-vodafone-16">&nbsp;<a href="tel:<?php echo $phone_numbers[$key]['mts']; ?>"><?php echo $phone_numbers[$key]['mts']; ?></a></span></li>
                  <li><span title="Lifecell" class="mobo-lifecell-16">&nbsp;<a href="tel:<?php echo $phone_numbers[$key]['life']; ?>"><?php echo $phone_numbers[$key]['life']; ?></a></span></li>
                  <li><span title="Київстар" class="mobo-kyivstar-16">&nbsp;<a href="tel:<?php echo $phone_numbers[$key]['ks']; ?>"><?php echo $phone_numbers[$key]['ks']; ?></a></span></li>
                  <li><i class="fa fa-envelope"></i> <span> Email:</span><a href="mailto:380996649394sealant@gmail.com"> 380996649394sealant@gmail.com</a></li>
                </ul>
              </div>
            </div>


          </div>
        </div>

      </div>

    </div>



    
      <!--<div id="phone_img" data-toggle="modal" data-target="#modal-callback">-->
          <!--<img src="img/callback.gif" border="0">-->
      <!--</div>-->
  </section><!--/#contact-->



                        <div class="btn btn--sm btn--square border-bl01" id="callback-btn-header">
                               <!--  <span class="btn__text" data-toggle="modal" data-target="#modal-callback">Перезвоните мне<br></span>
 -->
                                <div id="modal-callback" class="modal fade" role="dialog">
                                      <div class="modal-dialog">

                                        <!-- Modal content-->
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h5 class="modal-title">Оставьте Ваш номер телефона, мы свяжемся с Вами и ответим на все вопросы!</h5>
                                          </div>
                                          <div class="modal-body">
                                            <p>
                                              <form class="modal-form">
                                                <div class="input-with-icon">
                                                    <label for="fieldPhone">Введите ваш номер телефона</label><br>
                                                    <i class="icon icon-Phone thirstphone"></i>
                                                    <input name="form" type="hidden" value="Перезвоните мне">
                                                    <input id="fieldPhone" name="phone" type="text">
                                                  </div>

                                                  <button type="submit" class="btn formSub">Отправить</button>

                                              </form>
                                            </p>
                                          </div>
                                        </div>

                                      </div>
                                </div>

                                <div id="leave-request" class="modal fade" role="dialog">
                                      <div class="modal-dialog">

                                        <!-- Modal content-->
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h5 class="modal-title">Оставьте Ваши данные, мы свяжемся с Вами и ответим на все вопросы!</h5>
                                          </div>
                                          <div class="modal-body">
                                            <p>
                                              <form class="modal-form">

                                                <div class="input-with-icon">
                                                    <label for="fieldName">Введите ваше имя</label><br>
                                                    <input id="fieldName" name="name" type="text">
                                                </div>

                                                <div class="input-with-icon">

                                                    <label for="fieldPhone">Введите ваш номер телефона</label><br>
                                                    <i class="icon icon-Phone thirstphone"></i>
                                                    <input name="form" type="hidden" value="Оставить заявку">
                                                    <input id="fieldPhone" name="phone" type="text">

                                                </div>

                                               <!--  <div class="input-with-icon subject">
                                                    <label for="fieldTheme">Введите тему заявки</label><br>
                                                    <input id="fieldTheme" name="subject" type="text">
                                                </div>

                                                <div class="input-with-icon message">
                                                    <label for="fieldText">Введите текст заявки</label><br>
                                                    <textarea id="fieldText" name="message" cols="40"></textarea>
                                                </div> -->



                                                  <button type="submit" class="btn formSub">Отправить</button>

                                              </form>
                                            </p>
                                          </div>
                                        </div>

                                      </div>
                                </div>

                                 <div id="service-dialog" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                      <div class="modal-dialog" role="document">

                                        <!-- Modal content-->
                                        <div class="modal-content">
                                          <div class="modal-header">

                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h5 class="modal-title wrench" id="exampleModalLongTitle">Замена уплотнителей</h5>
                                            <h5 class="modal-title cog" id="exampleModalLongTitle">Регулировка окон и дверей</h5>
                                            <h5 class="modal-title brush" id="exampleModalLongTitle">Чистка и смазка фурнитуры</h5>
                                            <h5 class="modal-title gavel" id="exampleModalLongTitle">Ремонт фурнитуры</h5>
                                            <h5 class="modal-title snowflake" id="exampleModalLongTitle">Заделка щелей жидким пластиком</h5>
                                            <h5 class="modal-title calendar" id="exampleModalLongTitle">Замена стеклопакетов</h5>
                                          </div>

                                          <div class="modal-body wrench">
                                            <p>Если Вы заметили, что из окон дует, то первое на что необходимо обратить внимание - это состояние уплотнителей,т.к они являются расходным материалом. Как правило спустя 5-7 лет они пересыхают,в следствии чего деформируются, теряют эластичность и перестают выполнять свою функцию. Для того чтобы устранить продувания - необходимо заменить уплотнители на створке и на раме, а также отрегулировать правильный прижим створки к окну. Мастер компании "Силант Сервис" сможет заменить старые уплотнители на новые, из высококачественного материала, которые служат 10-15 лет, без дополнительного ухода, отрегулировать правильный прижим створки, и тем самым сохранить тепло и уют в Вашем доме на долгие годы.

                                          </div>
                                          <div class="modal-body cog">
                                            <p>Со временем створки металлопластиковых окон и дверей провисают, от тяжести, вследствии чего окна начинают плохо закрываться. Первым признаком является затирание створки о раму внизу,а так же то,что ручка не поворачивается до конца, во время закрывания-открывания.Для того чтобы избежать износа и поломки механизма рекомендуем вовремя проводить регулировку фурнитуры окна. Наши высококвалифицированные мастера имеют все необходимые инструменты, для того чтобы выставить створку по правильной геометрии и тем самым избавить Вас от неудобств при эксплуатации, и лишних трат на ремонт фурнитуры.</p>

                                          </div>
                                          <div class="modal-body brush">
                                            <p>Во время эксплуатации металлопластиковых окон и дверей в фурнитуре скапливается пыль и грязь, особенно после ремонта, которая смешивается с заводской смазкой, при этом образуя абразивную пасту, разрушающую механизм. Для того чтобы не допустить поломок, рекомендуем проводить механическую и химическую чистку замков оконной фурнитуры, а так же ее смазку. Наш мастер промывает все замки специальным растворителем, которое удаляет грязь и старую смазку, далее механическим путем удаляет абразивные частички, после этого проводится смазка механизма двумя видами проникающей смазки.</p>

                                          </div>
                                          <div class="modal-body gavel">
											  <p>Ремонт фурнитуры:<p>Если в окне прокручивается ручка, или отпала какая то часть механизма и из-за этого окно не может нормально закрываться - мы рекомендуем вызвать мастера для диагностики. Как правило попытки самостоятельно ремонта только усугубляют ситуацию. Наши мастера могут подобрать абсолютно любую фурнитуру, даже если Ваши окнам более 20ти лет.Не спешите менять окно - даже полная замена фурнитуры в 3-4 раза дешевле, чем новое окно.<p>Поможем подобрать подходящий замок и гарнитур, установить, или заменить на новый в дверях из алюминия и пластика.


                                          </div>
                                          <div class="modal-body snowflake">
                                            <p>После установки между подоконником и окном часто образуется щель, из которой дует холодный воздух + в ней заводится черный грибок, из-за того что в щели образуется водяной конденсат. Для того чтобы сохранить тепло в Вашем доме и уберечь Вас от вредоносных спор - наш мастер с радостью аккуратно заделает специальным герметиком, если у Вас алергия, или в доме маленькие дети - у нас имеется герметик без запаха фирмы RAVAK.</p>

                                          </div>
                                          <div class="modal-body calendar">
                                            <p>Устранение запотевания:<p>На запотевание стекол влияют 2 фактора - это температура стекла, и % влажности в помещении. Для того чтобы сместить точку росы нужно утеплить конструкцию (замена уплотнителей на створке, замена стеклопакетов на энергосберегающие с теплой дистанцией и аргоном) а так же уменьшить % влажности в помещении (установка приточно-вентиляционных клапанов на окна). Наш специалист может определить точку росы в Вашем доме, с помощью специальных приборов, правильно подобрать необходимый комплекс работ, и устранить образование нежелательного конденсата. <p>Замена стеклопакетов:<p>Замена разбитых, треснувших стеклопакетов, под ключ. Замена однокамерных стеклопакетов на двухкамерные,без замены штапиков. Возможность добавить энергосберегающее напыление, теплую дистанцию, аргон, криптон.</p>
                                            <p></p>

                                          </div>
                                          <button class="btn formSub" type="submit" data-dismiss="modal" data-toggle="modal" data-target="#leave-request">Заказать</button>
                                        </div>

                                      </div>

                                </div>


                                <div id="free-diagnostic" class="" role="dialog">
                                      <div>

                                        <!-- Modal content-->
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h5 class="modal-title">Оформите заявку на бесплатную диагностику</h5>
                                          </div>
                                          <div class="modal-body">
                                            <p>
                                              <form class="modal-form">

                                                <div class="input-with-icon">

                                                    <label for="phone-field">Оставьте номер телефона и наш менеджер свяжется с Вами</label><br>
                                                    <i class="icon icon-Phone thirstphone"></i>
                                                    <input type="hidden" name="form" class="form-control" value="Поп-ап: Заявка на бесплатную диагностику">
                                                    <input id="phone-field" name="phone" type="text" placeholder="Телефон">

                                                </div>

                                                <button type="submit" class="btn diagnosticSub">Оформить заявку</button>

                                              </form>
                                            </p>
                                          </div>
                                        </div>

                                      </div>
                                </div>


                            </div>

<!-- <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB9qR0EYm8E2r4xdrQWQ9e9Q_MJH9b8o_g&callback=initMap"
          type="text/javascript"></script> -->
          <!-- <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
 -->
 <!-- <script src="js/mousescroll.js"></script> -->
  <link rel="stylesheet" href="app/css/bundle.min.css?v=1.2">
  <script src='app/js/libs.min.js?v=1.3'></script>
  <script src="app/js/bundle.min.js?v=1.4"></script>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
  <script type="text/javascript">
  (function(d, w, s) {
	var widgetHash = '3y5g3pb5rye5l2r5bfn5', gcw = d.createElement(s); gcw.type = 'text/javascript'; gcw.async = true;
	gcw.src = '//widgets.binotel.com/getcall/widgets/'+ widgetHash +'.js';
	var sn = d.getElementsByTagName(s)[0]; sn.parentNode.insertBefore(gcw, sn);
  })(document, window, 'script');
  </script>
  <script type="text/javascript">
      _hcwp = window._hcwp || [];
      _hcwp.push({widget:"Stream", widget_id: 91643, social: "google, facebook, twitter, tumblr, livejournal"});
      (function() {
          if("HC_LOAD_INIT" in window)return;
          HC_LOAD_INIT = true;
          var lang = (navigator.language || navigator.systemLanguage || navigator.userLanguage || "en").substr(0, 2).toLowerCase();
          var hcc = document.createElement("script"); hcc.type = "text/javascript"; hcc.async = true;
          hcc.src = ("https:" == document.location.protocol ? "https" : "http")+"://w.hypercomments.com/widget/hc/91643/"+lang+"/widget.js";
          var s = document.getElementsByTagName("script")[0];
          s.parentNode.insertBefore(hcc, s.nextSibling);
      })();
  </script>
  <div class="container">
        <div id="hypercomments_widget"></div>
        <a href="http://hypercomments.com" class="hc-link" title="comments widget">comments powered by HyperComments</a>
      </div>
</body>
</html>