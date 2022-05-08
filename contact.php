<?php require("includes/topvars.inc.php");?>
<!DOCTYPE html>
<html>
<head>
<title><?php echo $pageTitle; ?></title>
<?php require("includes/stylesheets.inc.php"); ?>
</head>

<body>
	<h1 class="headline"><?php echo $pageTitle; ?></h1>
	<nav>
		<?php require_once("includes/nav.inc.php");?>
		<div class="animation start-contact"></div>
	</nav>
	<div class="main-text">
		<form method="POST" action="send-it">
			<?php 
				if (isset($_GET['whatnow']) && $_GET['whatnow'] == "tack") {
						echo "<h2 class=\"tnx\">Se där ja. Då hörs vi av! :)</h2>\n";
				} else {
					echo "<h2>Hör av dig!</h2>\n";
				}
			?>
			<div><input type="text" name="name" placeholder="Ditt namn" /></div>
			<div>
				<input type="text" name="email" placeholder="Din e-post" />
			</div>

			<div>
				<input type="text" name="subject" placeholder="Ditt ärende" />
			</div>

			<div>
				<textarea name="message" placeholder="Skriv något rart..."></textarea>
			</div>

			<div>
				<input type="submit" value="Skicka" />
			</div>
		</form>
	</div>
</div>
</div>
	<p class="main-page-footer">
		<?php include("includes/foot.inc.php");?>
	</p>
</body>
</html>