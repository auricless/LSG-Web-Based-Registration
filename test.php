<?php
require_once("classes/page.php");

$page = new Page("My Test Page");
$page->addStylesheet("assets/css/myCss.css");
$page->addStylesheet("vendor/bootstrap/css/bootstrap.min.css");
$page->addJavascript("vendor/jquery/jquery-3.2.1.min.js");
$page->addJavascript("vendor/bootstrap/js/bootstrap.min.js");

//TODO: Finish navlink classes

$navLinkHeader["link"] = "Index.php";
$navLinkHeader["linkicon"] = "fa fa-home";
$navLinkHeader["linktitle"] = "Home";

$navLinkHeader["link"] = "Index.php";
$navLinkHeader["linkicon"] = "fa fa-home";
$navLinkHeader["linktitle"] = "Home";

$navLinkHeader["link"] = "Index.php";
$navLinkHeader["linkicon"] = "fa fa-home";
$navLinkHeader["linktitle"] = "Home";

$page->addNavlink(navLinkHeader);

?>

<!DOCTYPE html>
<html>
<head>
	<?php echo $page->renderHeader(); ?>
</head>
<body>
	<?php echo $page->renderLoader(); ?>

	<h1>TEST PAGE</h1>

	<?php echo $page->renderFooter(); ?>
</body>
</html>