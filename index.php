<?php
    $res = null;
	if(!empty($_POST['youName']) && !empty($_POST['tel']) ):
//		$youName = htmlspecialchars($_POST['youName']);
//		$tel = htmlspecialchars($_POST['tel']);
//		$message = ('Name: '.$youName.'<br /> text: ');
//		$res = mail( $smof_data['TurenkoSlava@gmail.com'], $message, "From: $youName \nReply-to: \r\nContent-type: text/html; charset=utf-8");
  
                $tel = htmlspecialchars($_POST['tel']);
                $Name = htmlspecialchars($_POST['youName']); //senders name 
                $email = "info@adress.com"; //senders e-mail adress 
                $recipient = "TurenkoSlava@gmail.com"; //recipient 
                $mail_body = "Отправитель: {$Name} <br>Тел {$tel} <br>Перезвоните мне! Сообщение отправленно с сайта buketikonfet.com.ua"; //mail body 
                $subject = "Subject for reviever"; //subject 
                $header = "From: ". $Name . " <" . $email . ">\r\nReply-to: \r\nContent-type: text/html; charset=utf-8"; //заголовки
                $res = mail($recipient, $subject, $mail_body, $header); //mail command :) 
	endif;
?>
<!doctype html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--><html class="no-js"><!--<![endif]-->
<!--[if lt IE 9]> 
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script> 
<![endif]-->

<head lang="ru-RU">
	<title>BUKETIKONFET</title>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="follow, index" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<!--[if lte IE 9]>
	<link rel="stylesheet" type="text/css" href="css/ie8.css" />
	<![endif]-->
</head>
<body>
	<div class="md-modal md-effect-8" id="modal-8">
		<div class="md-content">
                    <?php if($res === null): ?>
			<h3>Заказать звонок</h3>
			<div>
				<div class="form-callback">
						<form class="form-horizontal" method="post">
							<label for="inputName">ваше имя</label>
							<input type="text" id="inputName" name="youName" placeholder="Введите ваше имя..." required /><br>
							<label for="inputTel">ваш телефон</label>
							<input type="tel" id="inputTel" name="tel" placeholder="Введите Ваш телефон..." pattern="[0-9]{5,10}" title="ТОЛЬКО ЦИФРЫ" required />
							<input type="submit" value="Отправить">
						</form>
					</div>
				<button class="md-close">Закрыть окно</button>
			</div>
                    <?php elseif($res == 1): ?>
                        <h3>Ваше письмо отправлено</h3>
                    <?php else: ?>
                        <h3 style="color:red;">ошибка при отправке</h3>
                    <?php endif; ?>
		</div>
	</div>
	<div class="md-overlay"></div><!-- the overlay element -->
	<div class="wrapper-top">
		<div class="wrap clearfix">
			<header class="menu"><!--=========HEADER========= -->
				<div class="logo"><a href="index.html"><span>buketikonfet</span><br>.com.ua</a></div>
				<nav>
					<ul class="top-menu">
						<li id="top1"><a href="#">каталог</a></li>
						<li id="top2"><a href="#">как мы работаем</a></li>
						<li id="top3"><a href="#">доставка и оплата</a></li>
						<li id="top4"><a href="#">наши отзывы</a></li>
						<li id="top5"><a href="#">оптовым покупателям</a></li>
					</ul>
				</nav>
				<!--=================END HEADER===============-->
			</header>
			<div class="block1-bottom clearfix">
				<div class="block1-left">
					<div class="banner-top"></div>
					<div id="carousel">
						<a href="#"><img src="images/item11.jpg" id="item-1" alt="товар 1" /></a>
						<a href="#"><img src="images/item22.jpg" id="item-2" alt="товар 2" /></a>
						<a href="#"><img src="images/item33.jpg" id="item-3" alt="товар 3" /></a>
					</div>
				</div>
				<div class="block1-right">
					<div class="tel-top">
						<span>+ 38 (099)-30-40-099</span>
						<button class="md-trigger trigger-top" data-modal="modal-8">заказать звонок</button>
					</div>
					<div class="info-top">
						<span><img src="images/info-top.png" alt="букет конфет"><br>&ndash; Не знаешь что подарить,<br> а денег хватает только на обычный букет?</span>
						<h2>так закажи сладкий букет по цене обычного<br>и получи бесплатную доставку в подарок!</h2>
					</div>
					<div class="end-action">
						<p class="countdown-text-black">до конца акции:</p>
						<div id="countdown"></div>
					</div>
					<div class="form-callback">
						<form class="form-horizontal">
							<label for="inputName2">ваше имя</label>
							<input type="text" id="inputName2" placeholder="Введите ваше имя..." required /><br>
							<label for="inputTel2">ваш телефон</label>
							<input type="tel" id="inputTel2" placeholder="Ваш Ваш телефон..." pattern="[0-9]{5,10}" title="ТОЛЬКО ЦИФРЫ" required />
							<label for="inputMail">ваш телефон</label>
							<input type="email" id="inputMail" name="tel" placeholder="Введите Ваш email" required />
							<input type="submit" value="Отправить">
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="top-line-middle"></div>
	<div class="wrap">
		<div class="banner-middle1"><h2>наши сладкие букеты</h2></div>
		<ul class="middle-item clearfix">
			<li>
				<img src="images/item1.jpg" alt="букет 1">
				<span class="new-price">279 <small>грн</small></span>
				<span class="old-price">349 грн</span>
				<button class="md-trigger trigger-sale" data-modal="modal-8">заказать</button>
			</li>
			<li>
				<img src="images/item2.jpg" alt="букет 2">
				<span class="new-price">279 <small>грн</small></span>
				<span class="old-price">349 грн</span>
				<button class="md-trigger trigger-sale" data-modal="modal-8">заказать</button>
			</li>
			<li>
				<img src="images/item3.jpg" alt="букет 3">
				<span class="new-price">279 <small>грн</small></span>
				<span class="old-price">349 грн</span>
				<button class="md-trigger trigger-sale" data-modal="modal-8">заказать</button>
			</li>
		</ul>
		<div class="banner-middle2"><h2>чем букет конфет лучше обычного</h2></div>
		<div class="wrap-content-middle clearfix">
			<span class="position-plus1"></span>
			<span class="position-plus2"></span>
			<span class="position-plus3"></span>
			<ul class="content-middle">
				<li>&plus; Выгодно и ориганfльно совмещает в себе 2 подарка: букет и конфеты</li>
				<li>&plus; Не нужно переживать что букет завянет сразу после вручения</li>
				<li>&plus; Не нужно держать в воде, свобода при транспортировке</li>
				<li>&plus; У вас всегда останется отличная чашка</li>
				<li>&plus; У вас всегда останется отличная чашка</li>
			</ul>
			<ul class="content-middle">
				<li>&plus; Все женщины любят сладкое</li>
				<li>&plus; ЕЕ Каждое утро будет наполнено ярким вкусом</li>
				<li>&plus; Можно перевозить даже в багажнике и это не повредит конструкцию</li>
				<li>&plus; Чашку можно использовать как емкость для пива</li>
				<li>&plus; Не вызывает алергии на пыльцу</li>
			</ul>
		</div>
		<div class="banner-middle3"><h2>как мы работаем</h2></div>
		<div class="how-we-work">&nbsp;</div>
	</div>
	<div class="wrapper-footer clearfix">
		<div class="wrap">
			<div class="cont-footer-left">
				<p>будь оригинальнее,<br> закажи букет конфет!</p>
			</div>
			<div class="cont-footer-right">
				<div class="end-action">
					<p class="countdown-text-white">до конца акции:</p>
					<div id="countdown1"></div>
				</div>
				<div class="form-callback1">
					<form class="form-horizontal">
						<label for="inputName3">ваше имя</label>
						<input type="text" id="inputName3" placeholder="Введите ваше имя..." required /><br>
						<label for="inputTel3">ваш телефон</label>
						<input type="text" id="inputTel3" placeholder="Ваш Ваш телефон..." pattern="[0-9]{5,10}" title="ТОЛЬКО ЦИФРЫ" required />
						<input type="submit" value="Отправить">
					</form>
				</div>
			</div>
		</div>
	</div>
	<div class="wrap">
		<div class="wrap-cont clearfix">
			<div class="banner-middle4"><h2>как работает наша доставка</h2></div>
			<div class="cont-new-post clearfix">
				<div class="cont-new-post-left">
					<img src="images/img-new-post.jpg" width="185" height="249" alt="новая почта">
				</div>
				<div class="cont-new-post-right clearfix">
					<span class="logo-new-post"></span>
					<ul>
						<li>&plus; высокий сервис обслуживания</li>
						<li>&plus; доставка новой почтой по украине - 1 день</li>
						<li>&plus; оплата только после проверки получения</li>
					</ul>
				</div>
			</div>
			<p>наш менеджер подскажет ближайшее отделение новой почты в вашем населенном пункте и время доставки</p>
		</div>
		<div class="wrap-cont clearfix">
			<div class="banner-middle4"><h2>мы гарантируем</h2></div>
			<ul class="warranty">
				<li>
					<img src="images/warranty1.jpg" width="151" height="150" alt="доставка">
					<span>Оперативную доставку в любой регион Украины</span>
				</li>
				<li>
					<img src="images/warranty2.jpg" width="151" height="150" alt="обслуживание">
					<span>Быстрое обслуживание и квалифицированную консультацию</span>
				</li>
				<li>
					<img src="images/warranty3.jpg" width="151" height="150" alt="качество">
					<span>100 % качество товара</span>
				</li>
				<li>
					<img src="images/warranty4.jpg" width="151" height="150" alt="надежность">
					<span>100% надежность конструкции</span>
				</li>
			</ul>
		</div>
		<div class="wrap-cont clearfix">
			<div class="banner-middle4"><h2>наши отзывы</h2></div>
			<div class="review">
				<ul>
					<li>
						<div class="review-left"><img src="images/client1.jpg" width="100" height="100" alt="Клиент 1"><a href="http://www.vk.com/a.korovay" class="vk-adress" target="_blank">vk.com/a.korovay</a></div>
						<div class="review-right"><span class="name">Александр Коровай:</span><span class="comment">- Спасибо за оригинальный Хенд Мейд.<br> Моя Машка была в восторге!</span></div>
					</li>
					<li>
						<div class="review-left"><img src="images/client2.jpg" width="100" height="100" alt="Клиент 2"><a href="http://www.vk.com/impression_exe" class="vk-adress" target="_blank">vk.com/impression_exe</a></div>
						<div class="review-right"><span class="name">Владислав Лисовой:</span><span class="comment">- Ребята, респект и уважуха, зашел на ваш сайт, не думая что мне нужен букет - заказал, подарил, вот 3-й день подругам рассказывает какой я оригинальный подарок сделал.</span></div>
					</li>
					<li>
						<div class="review-left"><img src="images/client3.jpg" width="100" height="100" alt="Клиент 3"><a href="http://www.vk.com/viktor_mitrohin" class="vk-adress" target="_blank">vk.com/viktor_mitrohin</a></div>
						<div class="review-right"><span class="name">Виктор Митрохин:</span><span class="comment">- Заказали букетов на весь офис, все оперативно доставили в целости и сохранности. Спасибо от всего нашего мужского колектива!</span></div>
					</li>
					<li>
						<div class="review-left"><img src="images/client4.jpg" width="100" height="100" alt="Клиент 4"><a href="http://www.vk.com/g0xff" class="vk-adress" target="_blank">vk.com/g0xff</a></div>
						<div class="review-right"><span class="name">Виталий Рабош:</span><span class="comment">- Это впервую очередь букет эмоций, а потом уже наверное конфет. Спасибо!</span></div>
					</li>
					<li>
						<div class="review-left"><img src="images/client5.jpg" width="100" height="100" alt="Клиент 5"><a href="http://www.vk.com/g0xff" class="vk-adress" target="_blank">vk.com/yegormarkeloff</a></div>
						<div class="review-right"><span class="name">Егор Маркелов:</span><span class="comment">- Думал какой букет цветов  ей  подарить, ваш оказался самым оригинальным.</span></div>
					</li>
					<li>
						<div class="review-left"><img src="images/client6.jpg" width="100" height="100" alt="Клиент 6"><a href="http://www.vk.com/id89981078" class="vk-adress" target="_blank">vk.com/id89981078</a></div>
						<div class="review-right"><span class="name">Руслан Шпиля:</span><span class="comment">- Переживал за конструкцию, думал ко мне не доедет. Получил и понял что после сьедания конфет - можно еще использовать как молоток))</span></div>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="wrapper-footer clearfix">
		<div class="wrap">
			<div class="cont-footer-left1">
				<p>все еще не знаешь что подарить?</p>
				<h3>будь мужиком</h3>
				<span>- закажи прямо сейчас <br>и не плати за доставку</span>
			</div>
			<div class="cont-footer-right">
				<div class="end-action">
						<p class="countdown-text-white">до конца акции:</p>
						<div id="countdown2"></div>
					</div>
				<div class="form-callback1">
					<form class="form-horizontal">
						<label for="inputName4">ваше имя</label>
						<input type="text" id="inputName4" placeholder="Введите ваше имя..." required /><br>
						<label for="inputTel4">ваш телефон</label>
						<input type="text" id="inputTel4" placeholder="Ваш Ваш телефон..." pattern="[0-9]{5,10}" title="ТОЛЬКО ЦИФРЫ" required />
						<input type="submit" value="Отправить">
					</form>
				</div>
			</div>
		</div>
	</div>
	<div class="wrap">
		<div class="wrap-cont clearfix">
			<div class="banner-middle2"><h2>конструкция букета в деталях</h2></div>
			<div class="construction"></div>
		</div>
	</div>
	<div class="wrap">
		<div class="wrap-cont clearfix">
			<div class="banner-middle2"><h2>для оптовых покупателей</h2></div>
			<div class="manu-buy">
				<div class="manu-buy-left"><img src="images/our-team.jpg" width="425" height="282" alt="Праздник"></div>
				<div class="manu-bay-right">
					<ul>
						<li>- У вас корпоративный праздник?</li>
						<li>- Желаете украсить зал свадебной церемонии?</li>
						<li>- Хотите поздравить свою сотрудницу по работе?</li>
					</ul>
					<h2>Вам нужно много букетов конфет?</h2>
					<span>Получите доступ к оптовым ценам прямо сейчас!</span>
					<div class="form-callback">
						<form class="form-horizontal">
							<label for="inputName5">ваше имя</label>
							<input type="text" id="inputName5" placeholder="Введите ваше имя..." required /><br>
							<label for="inputTel5">ваш телефон</label>
							<input type="text" id="inputTel5" placeholder="Ваш Ваш телефон..." pattern="[0-9]{5,10}" title="ТОЛЬКО ЦИФРЫ" required />
							<input type="submit" value="Отправить">
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="wrap">
		<div class="wrap-cont clearfix">
			<div class="banner-middle2"><h2>с кем мы уже работаем</h2></div>
			<div class="our-clients">
				<ul>
					<li><img src="images/our-clients1.jpg" width="90" height="90" alt="Клиент1 "><span>Владельцы розничных магазинов</span></li>
					<li><img src="images/our-clients2.jpg" width="90" height="90" alt="Клиент2"><span>Интернет-магазины</span></li>
					<li><img src="images/our-clients3.jpg" width="90" height="90" alt="Клиент3"><span>личные продажи</span></li>
					<li><img src="images/our-clients4.jpg" width="90" height="90" alt="Клиент4"><span>свадебные салоны, магазины подарков</span></li>
					<li><img src="images/our-clients5.jpg" width="90" height="90" alt="Клиент5"><span>бизнесы смежных тематик</span></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="wrap">
		<div class="wrap-cont clearfix">
			<div class="footer-slogan">
				<h1>Изготовление сладких букетов с доставкой по всей Украине &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; + 38 099-30-40-099</h1>
			</div>
		</div>
	</div>
	<div class="wrapper-footer clearfix">
		<div class="wrap">
			<div class="cont-footer-left">
				<h2>Закажите букеты конфет</h2>
				<span>для ваших любимых и близких,<br>и получите бесплатную доставку</span>
				<p>прямо сейчас</p>
			</div>
			<div class="cont-footer-right">
				<div class="end-action">
						<p class="countdown-text-white">до конца акции:</p>
						<div id="countdown3"></div>
				</div>
				<div class="form-callback1">
					<form class="form-horizontal">
						<label for="inputName6">ваше имя</label>
						<input type="text" id="inputName6" placeholder="Введите ваше имя..." required /><br>
						<label for="inputTel">ваш телефон</label>
						<input type="text" id="inputTel6" placeholder="Ваш Ваш телефон..." pattern="[0-9]{5,10}" title="ТОЛЬКО ЦИФРЫ" required />
						<input type="submit" value="Отправить">
					</form>
				</div>
			</div>
		</div>
	</div>


<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js"></script>
<script type="text/javascript" src="js/jquery.waterwheelCarousel.min.js"></script>
<script type="text/javascript" src="js/jquery.countdown.js"></script>
<script src="js/classie.js"></script>
<script src="js/modalEffects.js"></script>

<!-- for the blur effect -->
<!-- by @derSchepp https://github.com/Schepp/CSS-Filters-Polyfill -->
<script>
	// this is important for IEs
	var polyfilter_scriptpath = '/js/';
</script>
<?php if($res !== null): ?>
<script>
    $('.tel-top button').click();
</script>
<?php endif; ?>
<script src="js/cssParser.js"></script>
<script src="js/css-filters-polyfill.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
</body>
</html>