<?php require("includes/topvars.inc.php");?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $pageTitle; ?></title>
	<?php require("includes/stylesheets.inc.php");?>
</head>

<body>
	<h1><?php echo $pageTitle; ?></h1>
	<nav>
	<?php require_once("includes/nav.inc.php");?>
		<div class="animation start-home"></div>
	</nav>
	<div class="main-text">
		Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.<br /><br />It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
 	</div>
	 <p class="main-page-footer">
	 	<?php include("includes/foot.inc.php");?>
	 </p>
</body>
</html>