<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php bloginfo('name'); ?></title>
	<meta charset="<?php bloginfo('charset'); ?>">
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri() ?>/images/favicon.png">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Noto+Kufi+Arabic:wght@400;500;600;700;800&display=swap" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body>
	<?php wp_body_open(); ?>

	<!-- Header -->
	<header>
		<nav class=" navbar navbar-expand-lg">
			<div class="container">
				<div class="navbar-brand">
					<?php the_custom_logo(); ?>
				</div>

				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav mx-auto mb-2 mb-lg-0">
						<li class="nav-item">
							<a class="nav-link active" aria-current="page" href="#">الرئيسية</a>
						</li>

						<li class="nav-item">
							<a class="nav-link" href="#about">من نحن</a>
						</li>

						<li class="nav-item">
							<a class="nav-link" href="#services">الدورات</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#packages">الباقات</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?php echo get_permalink(108) ?>">المدونة</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#contact">تواصل معنا</a>
						</li>
					</ul>

					<a class="btn subscribe-btn" href="#packages">اشترك الأن</a>
				</div>
			</div>
		</nav>
	</header>
	<!-- Header -->