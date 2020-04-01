<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php echo $_GET['name']; ?> | Devours.org</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<link rel="shortcut icon" href="<?php echo url('/img/logo.gif') ?>"/>


	<!-- Link Swiper's CSS -->
	<link rel="stylesheet" href="<?php echo url('/css/swiper.min.css'); ?>">
	<link rel="stylesheet" href="<?php echo url('/css/styles.css') ?>">
	<script src="<?php echo url('/js/jquery-3.1.1.min.js'); ?>"></script>
	<script src="<?php echo url('/js/script.js'); ?>"></script>
	<link href="<?php echo url('/css/video-js.css') ?>" rel="stylesheet" />
	<script src="https://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script>

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
			<div class="single">

				<section class="trailer">
					<h3>Streaming <?php echo $_GET['name']; ?></h3>
					<div class="trailer_frame">
					  <!--<iframe id="my-video" class="video-js" controls="" preload="auto"  poster="<?php echo $data_movie[0]->icon; ?>" data-setup="{}">-->
					  <!--  <source src="<?php echo $data_movie[0]->link; ?>" type="video/mp4" />-->
					  <!--  <track kind="captions" src="<?php echo $data_movie[0]->subtile; ?>" srclang="id" label="Indonesia" default>-->
					  <!--</iframe>-->
					  <iframe width="560" height="315" src="<?php echo $data_movie[0]->link; ?>" frameborder="0" allowfullscreen></iframe>
					</div>
				</section>

				<section class="movie">
					<img width="200" height="300" src="<?php echo $data_movie[0]->icon; ?>">
					<ul>
						<li><?php echo $_GET['name']; ?> Season <?php echo $data_movie[0]->season; ?> Episode <?php echo $data_movie[0]->episode; ?></li>
						<li><?php echo $data_movie[0]->deskripsi; ?></li>
						<!-- <li><a href="genre/action.html">Action</a>, <a href="genre/history.html">History</a>, <a href="genre/fantasy.html">Fantasy</a></li> -->
						<?php $pecah = explode(",", $data_movie[0]->kategori); $i = 0; ?>
						
						<?php while($i < count($pecah)) { ?>
							<li><a href="/search/?genre=<?php echo $pecah[$i]; ?>"><?php echo $pecah[$i]; ?></a></li>
							<?php $i++; ?>
						<?php } ?>
					
						<li><?php echo $data_movie[0]->views; ?> views</li>

					</ul>
				</section>
				<section class="links">
					<h3>Episode</h3>
					<ul class="dlinks">
						<?php foreach($episode as $data_episode): ?>
							<li><a href="<?php echo url('/reviews') ?>?iq=<?php echo $data_episode->id ?>&name=<?php echo $data_episode->judul ?>&episode=<?php echo $data_episode->episode ?>"><?php echo $data_episode->episode; ?></a></li>
						<?php endforeach; ?>
					</ul>
					<h3><a href="<?php echo url('/lapor') ?>?iq=<?php echo $_GET['iq'] ?>&name=<?php echo $_GET['name'] ?>">Lapor Video Error</a></h3>
				</section>

				<section class="links">
					<h3>Download</h3>
					<i><p style="color: red">Website ini sedang dalam pengembangan. Mungkin beberapa fitur belum bisa digunakan secara maksimal</p></i>
					<ul class="dlinks">
						<li><a>Download</a></li>
						<li><a href="#">Link1</a></li>
						<li><a href="#">Link2</a></li>
						<li><a href="#">Link3</a></li>
					</ul>
					<ul class="dlinks">
						<li><a>Episode 2</a></li>
						<li><a href="#">Link1</a></li>
						<li><a href="#">Link2</a></li>
						<li><a href="#">Link3</a></li>
					</ul>
				</section>


				<section class="comments">
					<h3>Comments</h3>
					<h3>Fitur Komentar Belum Tersedia</h3>
				</section>
			</div>
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
		<script src="<?php echo url('/js/video.js') ?>"></script>
</body>
</html>