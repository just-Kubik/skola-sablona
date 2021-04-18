<?php
$dsn = "mysql:host=127.0.0.1;dbname=znamky";
$connection = new PDO($dsn, "root", "");
$sql = "SELECT predmety.name as 'Predmet', znamky.znamka as 'Znamka', znamky.datum as 'datum' FROM znamky,predmety WHERE znamky.predmety_id = predmety.id";
$znamky = $connection->prepare($sql);
$znamky->execute();
$znamky = $znamky->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE HTML>
<!--
	Forty by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<head>
	<title>Elements - Forty by HTML5 UP</title>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
	<link rel="stylesheet" href="assets/css/main.css?v=<?= time() ?>"/>
	<noscript>
		<link rel="stylesheet" href="assets/css/noscript.css"/>
	</noscript>
</head>
<body class="is-preload">

<!-- Wrapper -->
<div id="wrapper">

	<!-- Header -->
	<header id="header">
		<a href="index.php" class="logo"><strong>Jakub Brandejs</strong> <span>photography</span></a>
		<nav>
			<a href="#menu">Menu</a>
		</nav>
	</header>

	<!-- Menu -->
	<nav id="menu">
		<ul class="links">
            <?php include_once "nav.php"?>
		</ul>
		<ul class="actions stacked">
			<li><a href="#" class="button primary fit">Get Started</a></li>
			<li><a href="#" class="button fit">Log In</a></li>
		</ul>
	</nav>

	<!-- Main -->
	<div id="main" class="alt">
		<table>
			<thead>
			<tr>
				<th>Předmět</th>
				<th>Známka</th>
				<th>Datum</th>
			</tr>
			</thead>
			<tbody>
            <?php foreach ($znamky as $znamka): ?>
				<tr>
					<td><?= $znamka["datum"] ?></td>
					<td><?= $znamka["Predmet"] ?></td>
					<td><?= $znamka["Znamka"] ?></td>
				</tr>
            <?php endforeach; ?>
			</tbody>
		</table>
	</div>

	<!-- Contact -->
	<section id="contact">
		<div class="inner">
			<section>
				<form method="post" action="#">
					<div class="fields">
						<div class="field half">
							<label for="name">Name</label>
							<input type="text" name="name" id="name"/>
						</div>
						<div class="field half">
							<label for="email">Email</label>
							<input type="text" name="email" id="email"/>
						</div>
						<div class="field">
							<label for="message">Message</label>
							<textarea name="message" id="message" rows="6"></textarea>
						</div>
					</div>
					<ul class="actions">
						<li><input type="submit" value="Send Message" class="primary"/></li>
						<li><input type="reset" value="Clear"/></li>
					</ul>
				</form>
			</section>
			<section class="split">
				<section>
					<div class="contact-method">
						<span class="icon solid alt fa-envelope"></span>
						<h3>Email</h3>
						<a href="#">information@untitled.tld</a>
					</div>
				</section>
				<section>
					<div class="contact-method">
						<span class="icon solid alt fa-phone"></span>
						<h3>Phone</h3>
						<span>(000) 000-0000 x12387</span>
					</div>
				</section>
				<section>
					<div class="contact-method">
						<span class="icon solid alt fa-home"></span>
						<h3>Address</h3>
						<span>1234 Somewhere Road #5432<br/>
										Nashville, TN 00000<br/>
										United States of America</span>
					</div>
				</section>
			</section>
		</div>
	</section>

	<!-- Footer -->
	<footer id="footer">
		<div class="inner">
			<ul class="icons">
				<li><a href="#" class="icon brands alt fa-twitter"><span class="label">Twitter</span></a></li>
				<li><a href="#" class="icon brands alt fa-facebook-f"><span class="label">Facebook</span></a></li>
				<li><a href="#" class="icon brands alt fa-instagram"><span class="label">Instagram</span></a></li>
				<li><a href="#" class="icon brands alt fa-github"><span class="label">GitHub</span></a></li>
				<li><a href="#" class="icon brands alt fa-linkedin-in"><span class="label">LinkedIn</span></a></li>
			</ul>
			<ul class="copyright">
				<li>&copy; Untitled</li>
				<li>Design: <a href="https://html5up.net">HTML5 UP</a></li>
			</ul>
		</div>
	</footer>

</div>

<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery.scrolly.min.js"></script>
<script src="assets/js/jquery.scrollex.min.js"></script>
<script src="assets/js/browser.min.js"></script>
<script src="assets/js/breakpoints.min.js"></script>
<script src="assets/js/util.js"></script>
<script src="assets/js/main.js"></script>

</body>
</html>