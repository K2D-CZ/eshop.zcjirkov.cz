<!DOCTYPE html>
<html lang="cs">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="robots" content="index, follow">

	<title>E-shop - ZC Jirkov</title>

	<link rel="apple-touch-icon" sizes="180x180" href="dist/favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="dist/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="dist/favicon/favicon-16x16.png">
	<link rel="manifest" href="dist/favicon/site.webmanifest">
	<link rel="mask-icon" href="dist/favicon/safari-pinned-tab.svg" color="#ed68a0">
	<link rel="shortcut icon" href="dist/favicon/favicon.ico">
	<meta name="msapplication-TileColor" content="#ed68a0">
	<meta name="msapplication-config" content="dist/favicon/browserconfig.xml">
	<meta name="theme-color" content="#ed68a0">

	<link rel="stylesheet" href="dist/front.bundle.css" type="text/css">
</head>
<body>
<nav class="main-bar navbar navbar-expand-lg navbar-light bg-white">
	<div class="container">
		<a class="navbar-brand" href="index.php">
			<img src="dist/img/logo.svg" alt="Logo">
		</a>

		<!-- Tlačítka pro mobilní zobrazení -->
		<div class="d-lg-none">
			<a href="cart.php" class="btn btn-primary ml-1">
				<i class="mdi mdi-cart-outline mdi-scale-1-5"></i>
			</a>

			<a href="login.php" class="btn btn-primary">
				<i class="mdi mdi-account mdi-scale-1-5"></i>
			</a>

            <a href="#" class="btn btn-danger">
                <i class="mdi mdi-heart mdi-scale-1-3"></i>
            </a>

			<a href="#main-bar-dropdown" class="btn btn-primary d-lg-none" data-toggle="collapse" aria-controls="main-bar-dropdown" aria-expanded="false" aria-label="Zobrazit menu">
				<i class="mdi mdi-menu mdi-scale-1-5"></i>
			</a>
		</div>

		<div class="collapse navbar-collapse float-left" id="main-bar-dropdown">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item dropdown">
					<a class="nav-link" href="category.php">Kategorie</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link" href="#">Akční zboží</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Blog</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Kontakty</a>
				</li>
			</ul>

			<!-- Vyhledávání pro větší zařízení telefony -->
			<form action="#" class="nav-form-search form-inline my-2 my-lg-0 d-none d-lg-flex">
				<div class="input-group">
					<input type="text" class="form-control" placeholder="Vyhledat produkt / kategorii">
					<div class="input-group-append">
						<button type="submit" name="_submit" class="btn btn-primary">
							<i class="mdi mdi-magnify mdi-scale-1-5"></i>
						</button>
					</div>
				</div>
			</form>

			<div class="w-100 d-lg-none text-center mb-2">
				<a rel="noreferrer noopener" target="_blank" href="#" class="btn btn-circle btn-facebook">
					<i class="mdi mdi-facebook mdi-scale-1-5"></i>
				</a>
				<a rel="noreferrer noopener" target="_blank" href="#" class="btn btn-circle btn-instagram">
					<i class="mdi mdi-instagram mdi-scale-1-5"></i>
				</a>
			</div>
		</div>

		<!-- Tlačítka pro větší zařízení -->
		<div class="d-none d-lg-block">
			<a href="cart.php" class="btn btn-primary ml-1">
				<i class="mdi mdi-cart-outline mdi-scale-1-5 mr-1"></i>
				<span class="d-none d-xl-inline-block">
                    158 Kč
                </span>
			</a>

            <a href="login.php" class="btn btn-primary">
                Patrik Kulíšek
            </a>

            <a href="#" class="btn btn-danger">
                <i class="mdi mdi-heart mdi-scale-1-3 mr-1"></i> 1
            </a>
		</div>

		<!-- Vyhledávání pro mobilní telefony -->
		<div class="w-100 d-lg-none flex-grow-1">
			<form action="#" class="mt-2 my-lg-0">
				<div class="input-group">
					<input type="text" class="form-control" placeholder="Vyhledat produkt / kategorii">
					<div class="input-group-append">
						<button type="submit" name="_submit" class="btn btn-primary">
							<i class="mdi mdi-magnify mdi-scale-1-5"></i>
						</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</nav>