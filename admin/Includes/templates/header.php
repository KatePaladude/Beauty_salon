<!DOCTYPE html>
<html lang="en">

	<head>

		<meta charset="utf-8">
	  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	  	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	  	<meta name="description" content="beauty_salon Booking Website">
	  	<meta name="author" content="Onishchenko Katerina">

  		<title><?php echo $pageTitle ?></title>
  		<link href="Design/fonts/css/all.min.css" rel="stylesheet" type="text/css">
  		<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  		<link href="Design/css/sb-admin-2.min.css" rel="stylesheet">
  		<link href="Design/css/main.css" rel="stylesheet">
  		<link rel="stylesheet" type="text/css" href="Design/fonts/css/all.min.css">
  		<link rel="stylesheet" type="text/css" href="Design/css/hairdresser-icons.css">

	</head>

	<body id="page-top">
  		<div id="wrapper">
			<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
		  		<a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
					<div class="sidebar-brand-icon rotate-n-15">
			  			<i class="bs bs-scissors-1"></i>
					</div>
					<div class="sidebar-brand-text mx-3">beauty_salon</div>
		  		</a>
		  		<hr class="sidebar-divider my-0">
			  	<li class="nav-item active">
					<a class="nav-link" href="index.php">
				  		<i class="fas fa-fw fa-tachometer-alt"></i>
				  		<span>Головна панель</span>
				  	</a>
			  	</li>
	  			<hr class="sidebar-divider">
	  			<div class="sidebar-heading">
					Послуги
	  			</div>
	  			<li class="nav-item">
					<a class="nav-link" href="service-categories.php">
		  				<i class="fas fa-list"></i>
		  				<span>Категорії послуг</span>
		  			</a>
	  			</li>
	  			<li class="nav-item">
					<a class="nav-link" href="services.php">
		  				<i class="bs bs-scissors-1"></i>
		  				<span>Послуги</span>
		  			</a>
	  			</li>

	  			<hr class="sidebar-divider">
	  			<div class="sidebar-heading">
					Кліенти та Майстри
	  			</div>
	  			<li class="nav-item">
					<a class="nav-link" href="clients.php">
		  				<i class="far fa-address-card"></i>
		  				<span>Кліенти</span>
		  			</a>
	  			</li>
	  			<li class="nav-item">
					<a class="nav-link" href="employees.php">
		  				<i class="far fa-user"></i>
		  				<span>Майстри</span>
		  			</a>
	  			</li>
	  			<li class="nav-item">
					<a class="nav-link" href="employees-schedule.php">
		  				<i class="fas fa-calendar-week icon-ver"></i>
		  				<span>Графік майстрів</span>
		  			</a>
	  			</li>
	  			<hr class="sidebar-divider d-none d-md-block">
	  			<div class="text-center d-none d-md-inline">
					<button class="rounded-circle border-0" id="sidebarToggle"></button>
	  			</div>
			</ul>
			<div id="content-wrapper" class="d-flex flex-column">
			  	<div id="content">
					<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
					  	<button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
							<i class="fa fa-bars"></i>
					  	</button>
					  	<ul class="navbar-nav ml-auto">
							<li class="nav-item">
		              			<a class="nav-link" href="../" target="_blank">
		              				<i class="far fa-eye"></i>
		                			<span style="margin-left: 5px;">Показати головну сторінку </span>
		              			</a>
		          			</li>
							<div class="topbar-divider d-none d-sm-block"></div>
							<li class="nav-item dropdown no-arrow">
					  			<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<span class="mr-2 d-none d-lg-inline text-gray-600 small">
										<?php echo $_SESSION['username_beauty_salon_Xw211qAAsq4']; ?>
									</span>
									<i class="fas fa-caret-down"></i>
								</a>
							  	<div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">

									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
								  		<i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
								  		Вийти
									</a>
							  	</div>
							</li>
				  		</ul>
					</nav>
