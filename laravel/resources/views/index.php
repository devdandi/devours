<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Streaming Drama | Devours.org</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<link rel="shortcut icon" href="<?php echo url('/img/logo.gif') ?>"/>
	<!-- Link Swiper's CSS -->
	<link rel="stylesheet" href="<?php echo url('/css/swiper.min.css'); ?>">
	<link rel="stylesheet" href="<?php echo url('/css/styles.css') ?>">
	<script src="<?php echo url('/js/jquery-3.1.1.min.js'); ?>"></script>
	<script src="<?php echo url('/js/script.js'); ?>"></script>
	
	<script data-ad-client="ca-pub-5031445223718016" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	
	<script type='text/javascript' src='//pl15363990.passtechusa.com/67/fd/f5/67fdf5ad3bf0e90bcf7e94f86e8ede0a.js'></script>
	
	<style type="text/css">
	.preloader {
	  position: fixed;
	  top: 0;
	  left: 0;
	  width: 100%;
	  height: 100%;
	  z-index: 9999;
	  background-color: #fff;
	}
	.preloader .loading {
	  position: absolute;
	  left: 50%;
	  top: 50%;
	  transform: translate(-50%,-50%);
	  font: 14px arial;
	}
	</style>
	
</head>
<body>
	<div class="preloader">
	  <div class="loading">
	    <img src="<?php echo url('/img/loading.svg') ?>" width="80">
	    <p>Harap Tunggu</p>
	  </div>
	</div>
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
		<!-- <iframe class="embed-responsive-item" id="embed" allowfullscreen="" src=""></iframe> -->
		<!-- Swiper -->
		<div class="homeslider">
			<div class="swiper-container">

				<div class="swiper-wrapper">
					<?php foreach($index_page as $index_page_data): ?>
					<div class="swiper-slide">
						<img src="<?php echo $index_page_data->icon; ?>">
						<div class="caption">
							<div class="captioninside">
								<h3><?php 	echo  $index_page_data->judul; ?> Season <?php echo $index_page_data->season; ?> Episode <?php echo $index_page_data->episode; ?></h3>
								<!-- <p>Subtitle <a style="color: white;" href="<?php echo $index_page_data->subtile; ?>">Disini</a></p> -->
								<a href="<?php echo url('/reviews'); ?>/?iq=<?php echo $index_page_data->id; ?>&name=<?php echo $index_page_data->judul; ?>&hash=<?php echo "ALeKk01A0ALkX1cKUuOK2NI5bUZS4IpKIg%3A1585462416536&source=hp&ei=kDyAXpfbHsWm9QOU_73oDg&q=dsada&oq=dsada&gs_lcp=CgZwc3ktYWIQA1AAWABgFWgAcAB4AIABAIgBAJIBAJgBAKoBB2d3cy13aXo&sclient=psy-ab&ved=0ahUKEwiX44_hg7_oAhVFU30KHZR_D-0Q4dUDCAU&uact=5"; ?>" class="playbutton">Tonton sekarang !</a>
								<a href="#" id="subscribe" onclick="subs()" class="playbutton">Subscribe</a>
							</div>
						</div>
					</div>
					<?php endforeach; ?>
				</div>
				<!-- Add Pagination -->
				<div class="swiper-pagination"></div>
			</div>
		</div>

		<section>
		<main class="content">
			<section class="panel">
				<h2>Rekomendasi</h2>
				<div class="recentslider">
					<div class="swiper-container">
						<div class="swiper-wrapper">

							<?php foreach($rekomendasi as $num => $rekomendasi2){ ?>
								<div class="swiper-slide"><a href="<?php echo url('/reviews'); ?>/?iq=<?php echo $rekomendasi2->id; ?>&name=<?php echo $rekomendasi2->judul; ?>&hash=<?php echo "ALeKk01A0ALkX1cKUuOK2NI5bUZS4IpKIg%3A1585462416536&source=hp&ei=kDyAXpfbHsWm9QOU_73oDg&q=dsada&oq=dsada&gs_lcp=CgZwc3ktYWIQA1AAWABgFWgAcAB4AIABAIgBAJIBAJgBAKoBB2d3cy13aXo&sclient=psy-ab&ved=0ahUKEwiX44_hg7_oAhVFU30KHZR_D-0Q4dUDCAU&uact=5"; ?>"><img src="<?php echo $rekomendasi2->icon; ?>"><h3 class="hometitle"><?php echo $rekomendasi2->judul; ?></h3></a></div>
							<?php } ?>

							<div class="swiper-slide"><a href="/"><img src="<?php echo url('/img/others.png'); ?>"></a></div>
						</div>
						<div class="nextdirection recent-next"><img src="<?php echo url('/img/right-arrow.svg'); ?>"> </div>
						<div class="leftdirection recent-prev"><img src="<?php echo url('/img/left-arrow.svg'); ?>"> </div>
					</div>
				</div>
			</section>
			<style type="text/css">
#SC_TBlock_736611 img{object-fit: cover !important;
  max-height: 115px; !important;}
</style>
<!-- <div id="SC_TBlock_736611" class="SC_TBlock">loading...</div> -->
			<section class="panel">
				<h2>Paling banyak ditonton</h2>
				<div class="mostslider">
					<div class="swiper-container">
						<div class="swiper-wrapper">
							<?php foreach($popular as $nums => $popular_data): ?>
								<div class="swiper-slide"><a href="<?php echo url('/reviews'); ?>/?iq=<?php echo $popular_data->id; ?>&name=<?php echo $popular_data->judul; ?>"><img src="<?php echo $popular_data->icon; ?>"><h3 class="hometitle"><?php echo $popular_data->judul; ?></h3></a></div>
							<?php endforeach; ?>

							<div class="swiper-slide"><a href="/"><img src="<?php echo url('/img/others.png') ?>"></a></div>
						</div>
						<div class="nextdirection most-next"><img src="<?php echo url('/img/right-arrow.svg'); ?>"> </div>
						<div class="leftdirection most-prev"><img src="<?php echo url('/img/left-arrow.svg'); ?>"> </div>
						<!-- Add Pagination -->
					</div>
				</div>
				
<!-- 				<script type="text/javascript">
	atOptions = {
		'key' : '4c19e4130a032d5710143f73255d25da',
		'format' : 'iframe',
		'height' : 90,
		'width' : 728,
		'params' : {}
	};
	document.write('<scr' + 'ipt type="text/javascript" src="http' + (location.protocol === 'https:' ? 's' : '') + '://www.hiprofitnetworks.com/4c19e4130a032d5710143f73255d25da/invoke.js"></scr' + 'ipt>');
</script> -->
				
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
		<!-- Swiper JS -->
		<script src="<?php echo url('/js/swiper.min.js'); ?>"></script>
		<!-- Initialize Swiper -->
		<script>
			$(document).ready(function(){
				var swiper = new Swiper('.homeslider > .swiper-container', {
					pagination: '.swiper-pagination',
					paginationClickable: true,
					preventClicks:false,
					preventClicksPropagation:false,
					effect:'fade',
					breakpoints: {
						320: {
							height:200
						},
						480: {
							height:300
						},
						768: {
							height:400
						},
						1024: {
							height:500
						}
					}
				});
				$(".preloader").fadeOut();
				var recentswiper = new Swiper('.recentslider > .swiper-container', {
					nextButton: '.recent-next',
					prevButton: '.recent-prev',
					slidesPerView: 8,
					paginationClickable: true,
					preventClicks:false,
					preventClicksPropagation:false,
					spaceBetween: 10,
					breakpoints: {
						320: {
							slidesPerView: 3,
							spaceBetween: 5
						},
						480: {
							slidesPerView: 3,
							spaceBetween: 5
						},

						768: {
							slidesPerView: 5,
							spaceBetween: 5
						},
						1024: {
							slidesPerView: 6,
							spaceBetween: 10
						}
					}
				});
				var mostswiper = new Swiper('.mostslider > .swiper-container', {
					nextButton: '.most-next',
					prevButton: '.most-prev',
					slidesPerView: 8,
					paginationClickable: true,
					preventClicks:false,
					preventClicksPropagation:false,
					spaceBetween: 10,
					breakpoints: {
						320: {
							slidesPerView: 3,
							spaceBetween: 5
						},
						480: {
							slidesPerView: 3,
							spaceBetween: 5
						},
						768: {
							slidesPerView: 5,
							spaceBetween: 5
						},
						1024: {
							slidesPerView: 6,
							spaceBetween: 10
						}
					}
				});
				var topswiper = new Swiper('.topslider > .swiper-container', {
					nextButton: '.top-next',
					prevButton: '.top-prev',
					slidesPerView: 8,
					paginationClickable: true,
					preventClicks:false,
					preventClicksPropagation:false,
					spaceBetween: 10,
					breakpoints: {
						320: {
							slidesPerView: 3,
							spaceBetween: 5
						},
						480: {
							slidesPerView: 3,
							spaceBetween: 5
						},
						768: {
							slidesPerView: 5,
							spaceBetween: 5
						},
						1024: {
							slidesPerView: 6,
							spaceBetween: 10
						}
					}
				});
			});
		</script>

<script type="text/javascript">
  (sc_adv_out = window.sc_adv_out || []).push({
    id : "736611",
    domain : "n.ads1-adnow.com"
  });
</script>
<script type="text/javascript" src="//st-n.ads1-adnow.com/js/a.js"></script>

<script type="text/javascript">
	function subs()
	{
		let nama = prompt("Nama : ")
		let email = prompt("Email: ")
		if (nama && email != null) {
			window.location.href="<?php echo url('/subs') ?>?nama="+nama+"&email="+email
		}
	}
</script>
	</div>
</body>
</html>