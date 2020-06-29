<!DOCTYPE html>
<html lang="ru">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=3.0, user-scalable=yes"/>
	<meta name="HandheldFriendly" content="true"/>
	<meta name="apple-mobile-web-app-capable" content="YES"/>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/style.css">
</head>

<body>
	<?php // Заготовка ?>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
			</div>
		</div>
	</div>

	<?php // Меню ?>
	<div class="container-fluid">
		<div class="row menu-desktop">
			<div class="col-md-2">
				<div id="logo" class="menu-button">
					<a href="#logo">1<span>24</span><span>С</span></a>
				</div>
			</div>
			<div class="col-md-2">
				<div id="services" class="menu-button">
					<a href="#services">Услуги</a>
				</div>
			</div>
			<div class="col-md-2">
				<div id="services-calculator" class="menu-button">
					<a href="#services-calculator">Калькулятор&nbsp;услуг</a>
				</div>
			</div>
			<div class="col-md-2">
				<div id="computer-programs-1c" class="menu-button">
					<a href="#computer-programs-1c">Программы&nbsp;1С</a>
				</div>
			</div>
			<div class="col-md-2">
				<div id="contacts" class="menu-button">
					<a href="#contacts">Контакты</a>
				</div>
			</div>
			<div class="col-md-2">
				<div id="publication" class="menu-button">
					<a href="#publication">Публикации</a>
				</div>
			</div>
		</div>
	</div>

	<?php // Хлебные крошки ?>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="#">Главная</a>
						</li>
						<li class="breadcrumb-item"><a href="#">Программы</a>
						</li>
						<li class="breadcrumb-item active" aria-current="page">Текущая страница</li>
					</ol>
				</nav>
			</div>
		</div>
	</div>
	
	<?php // Слайдер ?>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-interval="20000">
					<div class="carousel-inner">
						<div class="carousel-item active">
							<div class="row">				
								<div class="offset-xl-3 col-xl-6 offset-lg-2 col-lg-8 offset-md-1 col-md-10 col-sm-12">
									<div class="slider-text">
										<p>„Информация в чистом виде ‒ это не знание.</br> Настоящий источник знания ‒ это опыт.“</p>	
										<p><cite>—  Альберт Эйнштейн</cite></p>
									</div>
								</div>
							</div>						
						</div>
						<div class="carousel-item">
							<div class="row">				
								<div class="offset-xl-3 col-xl-6 offset-lg-2 col-lg-8 offset-md-1 col-md-10 col-sm-12">
									<div class="slider-text">
										<p>„Теория — это когда все известно, но ничего не работает.</br> 
	Практика — это когда все работает, но никто не знает почему.</br> 
	Мы же объединяем теорию и практику: ничего не работает… и никто не знает почему!“ </p>
										<p><cite>—  Альберт Эйнштейн</cite></p>
									</div>
								</div>
							</div>														
						</div>
						<div class="carousel-item">
							<div class="row">
								<div class="offset-xl-3 col-xl-6 offset-lg-2 col-lg-8 offset-md-1 col-md-10 col-sm-12">
									<div class="slider-text">
										<p>„Совершенные средства при неясных целях</br> — характерный признак нашего времени.“</p>
										<p><cite>—  Альберт Эйнштейн</cite></p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	  </a>
					<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	  </a>
				</div>
			</div>
		</div>
	</div>

	<?php // Слоган 1 ?>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6">
				<div class="slogan-text">
					<p>Высочайшие стандарты качества 
облуживания в сфере информационного 
обеспечения бизнеса - наш приоритет</p>
				</div>	
			</div>
			<div class="col-md-6">
				<div class="slogan-img">
					<img class="w-100" src="img/slogan1.jpg" alt="">
				</div>				
			</div>
		</div>
	</div>

	<?php // Слоган 2 ?>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6">
				<div class="slogan-img">
					<img class="w-100" src="img/slogan3.jpg" alt="">
				</div>				
			</div>
			<div class="col-md-6">
				<div class="slogan-text">
					<p>Кропотливый анализ объекта 
автоматизации и выверенное решение 
проблем - залог успеха </p>
				</div>	
			</div>			
		</div>
	</div>
	
	<?php // Схема работы ?>
	<div class="container-fluid">
		<div class="row">
			<div class="offset-xl-3 col-xl-6 offset-lg-2 col-lg-8 offset-md-1 col-md-10 col-sm-12">
			<div class="work-plan"><h1>Схема работы</h1></div> 
			<ul id="work-plan-list">
				<li class="work-plan">Заявка</li>
				<li class="work-plan">Обработка заявки</li>
				<li class="work-plan">Согласование сроков и стоимости работ</li>
				<li class="work-plan">Выработка  решения</li>
				<li class="work-plan">Демонстрация прототипа</li>
				<li class="work-plan">Обсуждение и согласование прототипа с реальной задачей автоматизации</li>
				<li class="work-plan">Доработка прототипа с учетом всех замечаний и пожеланий заказчика</li>
				<li class="work-plan">Демонстрация финального прототипа</li>
				<li class="work-plan">Оплата работ и внедрение программного комплекса</li>
				<li class="work-plan">Опытная эксплуатация и гарантийная поддержка</li>
			</ul>
			</div>
		</div>
	</div>

	
	<?php // Заготовка ?>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="article-preview"><h2>Анонс публикаций</h2> <span> (<a href="#article-preview">все публикации</a>)</span></div> 	
			</div>
		</div>
		<div class="row">
			<div class="offset-xl-3 col-xl-6 offset-lg-2 col-lg-8 offset-md-1 col-md-10 col-sm-12">
				<div class="container-fluid">
					<div class="row article-preview-line">			
							<div class="col-md-2">
			
								<img src="img/article-preview-its.png" class="w-100" alt="1c-its" class="article-preview">
							</div>
							<div class="offset-md-1 col-md-9">
								<h3 class="article-preview">
									ИТС
								</h3>
							</div>
					
					</div>
				</div>		
			</div>
		</div>
		<div class="row">
			<div class="offset-xl-3 col-xl-6 offset-lg-2 col-lg-8 offset-md-1 col-md-10 col-sm-12">
				<div class="container-fluid">
					<div class="row article-preview-line">
						
							<div class="col-md-2">
								<img src="img/article-preview-1c-site.png" class="w-100" alt="1c-site" class="article-preview">
							</div>
							<div class="offset-md-1 col-md-9">
								<h3 class="article-preview">
									Официальный сайт 1С
								</h3>
							</div>
						
					</div>
				</div>		
			</div>
		</div>
		<div class="row">
			<div class="offset-xl-3 col-xl-6 offset-lg-2 col-lg-8 offset-md-1 col-md-10 col-sm-12">
				<div class="container-fluid">
					<div class="row article-preview-line">
						
							<div class="col-md-2">
								<img src="img/article-preview-update.png" class="w-100" alt="update 1с" class="article-preview">
							</div>
							<div class="offset-md-1 col-md-9">
								<h3 class="article-preview">
									Обновления 1С
								</h3>
							</div>
					
					</div>
				</div>		
			</div>
		</div>
	</div>


	<header>
	</header>

	<main>
	</main>

	<footer>
	</footer>
	<script src="js/jquery-3.5.1.slim.min.js"></script>	
	<script src="js/bootstrap.min.js"></script>
	<script src="js/popper.min.js"></script>
</body>
</html>