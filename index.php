<!DOCTYPE HTML>
<!--
	Miniport by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>香港良心GUIDE</title>
		<meta charset="utf-8" />
		<meta name="description" content="香港良心guide 正式網頁版,無論係查良心企業地圖定見到好店想報料,只要一個網站就搞掂哂。">
		<meta name="keywords" content="leungsumshops,leungsum,罷工,良心食店名單,良心小店,良心食店地圖,良心食肆,良心企業">
		<meta name="author" content="Jas0n,香港良心Guide">
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<style>
		  /* Always set the map height explicitly to define the size of the div
		   * element that contains the map. */
		  #map {
			height: 500px;
			width: 1000%;
		  }
		  #table {
			height: 700px;
			width: 100%;
		  }
		table {border-collapse: collapse; width: 100%;}
		th, td {border: #f1c232; padding: 3px;}
		tr.head th, tr.head td {background-color: # #f1c232; border-bottom: 4px double black;}
		</style>
		
		<link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png">
		<link rel="icon" type="image/png" sizes="192x192"  href="favicon/android-icon-192x192.png">
		<link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
		<link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
		<link rel="manifest" href="/manifest.json">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
		<meta name="theme-color" content="#ffffff">

		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="assets/css/table.css" />
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-147381749-1"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());
		
		  gtag('config', 'UA-147381749-1');
		</script>
	</head>
	<body class="is-preload">

		<!-- Nav -->
			<nav id="nav">
				<ul class="container">
					<li><a href="#top">首頁</a></li>
					<li><a href="#news">最新</a></li>
					<li><a href="#search">地區</a></li>
					<li><a href="#find">地圖</a></li>
					<li><a href="#contact">報料</a></li>
					<li><a href="#contact2">關於</a></li>
				</ul>
			</nav>

		<!-- Home -->
			<article id="top" class="wrapper style1">
				<div class="container">
					<div class="row">
						<!--<div class="col-4 col-5-large col-12-medium">
							<span class="image fit"><img src="images/pic00.jpg" alt="" /></span>
						</div>-->
						<div class="col-8 col-7-large col-12-medium">
							<header>
								<h1><strong>香港良心Guide</strong></h1>
							</header>
							<p> </p>
							<!--<a href="#work" class="button large scrolly">Learn about what I do</a>-->
						</div>
					</div>
				</div>
			</article>

		<!-- Portfolio -->
			<article id="news" class="wrapper style3">
				<div class="container">
					<header>
						<img width="100%" src="/images/topbg.JPG">
						<h2></h2>
						<p> </p>
					</header>
					<div class="row">
						<?php/*
						$typearray = array("飲食","零售","旅遊");
						$picarray = array("topbg.JPG","pic02.jpg","pic03.jpg");
						foreach ($typearray as $key => $type) {
						echo '<div class="col-4 col-6-medium col-12-small">
							<article class="box style2">
								<a href="#" class="image featured"><img height="300px" src="images/'.$picarray[$key].'" alt="" /></a>
								<h3><a href="#">'.$type.'</a></h3>
								<p> </p>
							</article>
						</div>';
						}
						*/?>
					</div>
					<footer>
						<p>我哋會陸續介紹唔同地區嘅良心店鋪，記得follow我哋Instagram同Telegram<a href='https://t.me/hkgoodfirms812'>香港良心Guide頻道</a>啦
						<br>
						<br>
						<a href="#contact" class="button large scrolly">香港良心Guide報料</a>
					</footer>
				</div>
			</article>
			
		<!-- search -->
			<article id="search" class="wrapper style2">
				<div class="container">
					<header>
						<h2>搜尋良心店鋪</h2>
					</header>
					<div class="row aln-center">
						<!--table-->
						<!--<script type="text/javascript" src="scripts/table.js"></script>-->
						<iframe src="/table-page/index.php"  id="table"></iframe>
						<!--table-->
					</div>
				</div>
			</article>

		<!-- Find -->
			<article id="find" class="wrapper style2">
				<div class="container">
					<header>
						<h2>良心店鋪地圖</h2>
					</header>
					<div class="row aln-center">
						<iframe src="https://www.google.com/maps/d/embed?mid=1AG_1A0f8DvvfaHTLiPsU3qzZfzaJqc20&shorturl=1&ll=22.364835236068927%2C114.09591165000006&z=11" width="100%" height="600"></iframe>
						<!--map-->
						<!--<div id="map"></div>
						<script type="text/javascript" src="scripts/map.js"></script>
						<script src="https://cdnjs.cloudflare.com/ajax/libs/PapaParse/5.0.2/papaparse.min.js" integrity="sha256-SU1Ep4Z1qETBgIsTRa5WlmPq9oHzkzR83Fia3jeXHp4=" crossorigin="anonymous"></script>
						<!--<script type="text/javascript" src="scripts/index.js"></script>
						<script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js">
						</script>-->
						<!--<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCj7qdnaXb6l1WXnkLnphUPpX9-FqeW55E&callback=initMap">	
						</script>
							<!--AIzaSyChEMn4cC74ENoYa870PqThqwyUHzH56bs-->
							<!--reimagine: AIzaSyCuNdeElO1R_URlH3e3AD2umebdoukISdA -->
						<!--map-->
						
					</div>
				</div>
			</article>

		<!-- Portfolio -->
			<!-- <article id="portfolio" class="wrapper style3">
				<div class="container">
					<header>
						<h2>find by category</h2>
						<p>Proin odio consequat  sapien vestibulum consequat lorem dolore feugiat.</p>
					</header>
					<div class="row">
						<?php
						/*$typearray = array("drink","food","clinic","cloths");
						foreach ($typearray as $type) {
						echo '<div class="col-4 col-6-medium col-12-small">
							<article class="box style2">
								<a href="#" class="image featured"><img src="images/pic01.jpg" alt="" /></a>
								<h3><a href="#">'.$type.'</a></h3>
								<p> </p>
							</article>
						</div>';
						}*/
						?>
					</div>
					<footer>
						<p>Lorem ipsum dolor sit sapien vestibulum ipsum primis?</p>
						<a href="#contact" class="button large scrolly">share more shop</a>
					</footer>
				</div>
			</article>-->

		<!-- Contact -->
			<article id="contact" class="wrapper style4">
				<div class="container medium">
					<header>
						<h2>報料俾我哋</h2>
						<p> </p>
						📝報料須知
						<p> </p>
						📌報料時請務必附上商鋪的良心行動連結/圖片
						<p> </p>
						（圖片可以於Telegram頻道/instagram DM@hkshoplist俾我哋)
						<p> </p>
						📌報料前請先查閱我們的網站，避免重覆報料，謝謝🙏。
						<p> </p>
						
					</header>
					<div class="row">
						<div class="col-12">
							<!--submit to googlesheet https://github.com/jamiewilson/form-to-google-sheets -->
							<form name="submit-to-google-sheet">
								<div class="row">
									<div class="col-6 col-12-small">
										<input type="text" name="name" id="name" placeholder="商鋪名稱" />
									</div>
									<div class="col-6 col-12-small">
										<input type="text" name="category" id="category" placeholder="類型" />
									</div>
									<div class="col-12">
										<input type="text" name="address" id="address" placeholder="地址" />
									</div>
									<div class="col-12">
										<input type="text" name="link" id="link" placeholder="良心行動連結" />
									</div>
									<div class="col-12">
										<textarea name="message" id="message" placeholder="良心行動"></textarea>
									</div>
									<div class="col-12" id="submit">
										<ul class="actions">
											<li><button type="submit">提交</button></li>
											<!--<li><input type="reset" value="重設" class="重設" /></li>-->
										</ul>
									</div>
								</div>
							</form>
							<div id="Thanks" style="display:none">
							  <br>收到，多謝你嘅報料！<br>
							</div>
							<script>
							  const scriptURL = 'https://script.google.com/macros/s/AKfycbxOpq0s7T8plrFE1d7yRon9CUZMN3AAT8YyxxYzu1BWbpYm51c/exec'
							  const form = document.forms['submit-to-google-sheet']
							  form.addEventListener('submit', e => {
							    e.preventDefault()
							    fetch(scriptURL, { method: 'POST', body: new FormData(form)})
							      .then(response => console.log('Success!', response), document.getElementById("Thanks").style.display = "block", document.getElementById("submit").style.display = "none")
							      .catch(error => console.error('Error!', error.message))
							  })
							</script>
						</div>
						<div  id="contact2" class="col-12">
							<hr />
							<h3>聯絡我們</h3>
							<ul class="social">
								<li><a href="https://t.me/hkgoodfirms812" class="icon brands fa-tumblr"><span class="label">Telegram</span></a></li>
								<li><a href="https://www.instagram.com/hkshoplist/" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
								<li><a href="https://goo.gl/maps/43jwMgvJm4eq4qE16" class="icon brands fa-google-plus"><span class="label">Google+</span></a></li>
								<!--
								<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
								<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
								<li><a href="#" class="icon brands fa-dribbble"><span class="label">Dribbble</span></a></li>
								<li><a href="#" class="icon brands fa-linkedin-in"><span class="label">LinkedIn</span></a></li>
								<li><a href="#" class="icon brands fa-github"><span class="label">Github</span></a></li>
								<li><a href="#" class="icon solid fa-rss"><span>RSS</span></a></li>
								<li><a href="#" class="icon brands fa-foursquare"><span>Foursquare</span></a></li>
								<li><a href="#" class="icon brands fa-skype"><span>Skype</span></a></li>
								<li><a href="#" class="icon brands fa-soundcloud"><span>Soundcloud</span></a></li>
								<li><a href="#" class="icon brands fa-youtube"><span>YouTube</span></a></li>
								<li><a href="#" class="icon brands fa-blogger"><span>Blogger</span></a></li>
								<li><a href="#" class="icon brands fa-flickr"><span>Flickr</span></a></li>
								<li><a href="#" class="icon brands fa-vimeo"><span>Vimeo</span></a></li>
								-->
							</ul>
							<hr />
						</div>
					</div>
					<footer>
						<ul id="copyright">
							<li>&copy; Untitled. All rights reserved.</li><li>BuiltBy: Jas0n | Design: <a href="http://html5up.net">HTML5 UP</a></li>
						</ul>
					</footer>
				</div>
			</article>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
	</body>
</html>