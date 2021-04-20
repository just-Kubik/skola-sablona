<?php
$dsn = "mysql:host=localhost;dbname=znamkyyy";
$connection = new PDO($dsn, "kubik12385", "xHeslo123");
$sql = "INSERT INTO znamky(znamka, predmety_id, datum) VALUES (?,?,CURRENT_TIMESTAMP)";
$stmt = $connection->prepare($sql);

if (isset($_POST)) {
    if (isset($_POST["znamka"]) && isset($_POST["predmet"])) {
		$stmt->execute([$_POST["znamka"],$_POST["predmet"]]);
    }
}

?>
<!DOCTYPE HTML>

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
            <?php include_once "nav.php" ?>
		</ul>
		<ul class="actions stacked">
		</ul>
	</nav>

	<!-- Main -->
	<div id="main" class="alt">
		<form action="" method="post">
			<label for="predmet">Předmět</label>
			<select name="predmet" id="predmet">
				<option value="1">PIS</option>
				<option value="2">MA2</option>
				<option value="3">FY2</option>
				<option value="4">ESOT</option>
			</select>
			<label for="znamka">Známka</label>
			<select name="znamka" id="znamka">
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
			</select>
			<input type="submit">
		</form>
	</div>

	<!-- Contact -->
    <section id="contact">
        <div class="inner">
            <section>
                <span class="image">
                    <img src="images/logo2.png" alt="" style="height:300px;weight:300px" />
                </span>
            </section>
            <section class="split">
                <section>
                    <div class="contact-method">
                        <span class="icon solid alt fa-envelope"></span>
                        <h3>Email</h3>
                        <span>Prostemail</span>
                    </div>
                </section>
                <section>
                    <div class="contact-method">
                        <span class="icon solid alt fa-phone"></span>
                        <h3>Telefon</h3>
                        <span>Prostetelefon</span>
                    </div>
                </section>
            </section>
        </div>
    </section>
	<!-- Footer -->
	<footer id="footer">
		<div class="inner">
			<ul class="icons">
                <li><a href="https://www.facebook.com/j4kub.Brandejs" class="icon brands alt fa-facebook-f"><span class="label">Facebook</span></a></li>
                <li><a href="https://www.instagram.com/jakub_brandejs/?hl=cs" class="icon brands alt fa-instagram"><span class="label">Instagram</span></a></li>
                <li><a href="https://open.spotify.com/user/21g4e7i62qhfdkuat44r72hma?si=f23fb3bb454149b5" class="icon brands alt fa-spotify"><span class="label">Spotify</span></a></li>
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