<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="<?php echo e(asset('/css/style.css')); ?>">

	<title>AdminHub</title>
</head>

<body>


	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
			<i class='bx bxs-smile'></i>
			<span class="text">BuscaSUS</span>
		</a>
		<ul class="side-menu top">
			<li class="active">
				<a href="/">
					<i class='bx bxs-dashboard'></i>
					<span class="text">Home</span>
				</a>
			</li>
			<li>
				<a href="/analisar">
					<i class='bx bxs-doughnut-chart'></i>
					<span class="text">Analisar</span>
				</a>
			</li>
			<li>
				<a href="/alterar">
					<i class='bx bxs-edit bx-flip-horizontal' style='color:#3f3e3e' ></i>
					<span class="text">Alterar</span>
				</a>
			</li>
			
			<li>
				<a href="/create">
					<i class='bx bxs-plus-circle'></i>
					<span class="text">Criar</span>
				</a>
			</li>
			<li>
				<a href="/menssagem">
					<i class='bx bxs-message-dots'></i>
					<span class="text">Menssagem</span>
				</a>
			</li>
			<li>
				<a href="/time">
					<i class='bx bxs-group'></i>
					<span class="text">Time</span>
				</a>
			</li>
			<li>
				<a href="/delete" class="logoutTrash">
					<i class='bx bxs-trash'></i>				
				</a>
			</li>

		</ul>
		<ul class="side-menu">
			<li>
				<a href="#">
					<i class='bx bxs-cog'></i>
					<span class="text">Settings</span>
				</a>
			</li>
			<li>
				<a href="#" class="logout">
					<i class='bx bxs-log-out-circle'></i>
					<span class="text">Logout</span>
				</a>
			</li>
			
		</ul>
	</section>
	<!-- SIDEBAR -->



	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu'></i>
			<a href="#" class="nav-link">Categories</a>
			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search'></i></button>
				</div>
			</form>
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
			<a href="#" class="notification">
				<i class='bx bxs-bell'></i>
				<span class="num">8</span>
			</a>
			<a href="#" class="profile">
				<img src="img/people.png">
			</a>
		</nav>
		<!-- NAVBAR -->
<?php /**PATH C:\laravel\Admin\resources\views/includes/header.blade.php ENDPATH**/ ?>