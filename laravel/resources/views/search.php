<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Pencarian | Devours.org</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

	<link rel="stylesheet" href="<?php echo url('/css/swiper.min.css'); ?>">
	<link rel="stylesheet" href="<?php echo url('/css/styles.css') ?>">
	<script src="<?php echo url('/js/jquery-3.1.1.min.js'); ?>"></script>
	<script src="<?php echo url('/js/script.js'); ?>"></script>

</head>
<body>
	<div class="wrapper">

		<header class="header">
			<figure class="logo"><a href="<?php echo url('/') ?>"><img src="<?php echo url('/img/logo.gif') ?>" alt="Logo"></figure></a>
			<nav class="menu">
				<ul>
					<li><a href="<?php echo url('/') ?>">Home</a></li>
					<li><a>Drama</a>
						<ul>
							<li><a href="<?php echo url('/search?drama=china') ?>">China</a></li>
							<li><a href="<?php echo url('/search?drama=jepang') ?>">Jepang</a></li>
							<li><a href="<?php echo url('/search?drama=k-drama') ?>">Korea</a></li>	
							<li><a href="<?php echo url('/search?drama=taiwan') ?>">Taiwan</a></li>
							<li><a href="<?php echo url('/search?drama=thailand') ?>">Thailand</a></li>
						</ul>
					</li>
					<li><a>Genres</a>
						<ul>
							<li><a href="<?php echo url('/search?genre=action') ?>">Action</a></li>
							<li><a href="<?php echo url('/search?genre=comady') ?>">Comedy</a></li>
							<li><a href="<?php echo url('/search?genre=fantasy') ?>">Fantasy</a></li>
							<li><a href="<?php echo url('/search?genre=history') ?>">History</a></li>
							<li><a href="<?php echo url('/search?genre=horror') ?>">Horror</a></li>
							<li><a href="<?php echo url('/search?genre=romance') ?>">Romance</a></li>
							<li><a href="<?php echo url('/search?genre=action') ?>">School</a></li>							
						</ul>
					</li>
					<li><a href="<?php echo url('/search?ongoing') ?>">Ongoing Drama</a></li>
					<!-- <li><a href="variety_show.html">Variety Show</a></li> -->
					<li><a>Year</a>
						<ul>
							<li><a href="<?php echo url('/search?year=2020') ?>">2020</a></li>
							<li><a href="<?php echo url('/search?year=2019') ?>">2019</a></li>
							<li><a href="<?php echo url('/search?year=2018') ?>">2018</a></li>
							<li><a href="<?php echo url('/search?year=2017') ?>">2017</a></li>
						</ul>
					</li>
					<li class="mobsearch">
						<form class="mobform" method="get" action="<?php echo url('/search') ?>">
							<input type="text" name="s" class="mobsearchfield" placeholder="Search...">
							<button name="submit" class="mobsearchsubmit">Cari</button>
						</form>
					</li>
				</ul>
			</nav>
			<form class="search" method="get" action="<?php echo url('/search') ?>">
				<input type="text" name="s" class="searchfield" placeholder="Search...">
				<button class="searchsubmit" name="submit"></button>
			</form>

			<div class="toggle"><img src="<?php echo url('/img/menu.svg') ?>"></div>
		</header>
		
		<main class="content">
			<section class="centered">
				<h3>Result</h3>
				<div class="movies">
					<?php if(isset($search)){ ?>
						<?php foreach($search as $data_search){ ?>
							<div class="mov">
								<a href="<?php echo url('/search'); ?>?iq=<?php echo $data_search->id; ?>&name=<?php echo $data_search->judul; ?>">
									<img src="<?php echo $data_search->icon; ?>">
									<h2 class="movietitle"><?php echo $data_search->judul; ?></h2>
								</a>
							</div>
						<?php } ?>
					<?php } ?>
				</div>
			</section>

		</main>

		<footer class="footer">
			<div class="copyright"><p>Copyrigt 2020 by Devours.org</p></div>
			<div class="footermenu">
				<ul>
					<li><a href="<?php echo url('/') ?>">Home</a></li>
					<li><a href="<?php echo url('/contact') ?>">Contact</a></li>
					<li><a href="<?php echo url('/tos') ?>">Terms and conditions</a></li>
				</ul>
			</div>
			<div class="tags">
				<ul>
					<li>Download Free Drama</li>
					<li>Indonesia Subtitled Drama</li>
					<li>Latest Drama</li>
					<li>New Drama</li>

				</ul>
			</div>

		</footer>

		

	</div>
</body>
</html>