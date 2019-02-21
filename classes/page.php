<?php

class Page
{
	var $pageTitle;
	var $pageType;
	var $stylesheets;
	var $javascripts;
	
	function Page($pageTitle)
	{
		$this->pageTitle = $pageTitle;
		$this->stylesheets = array();
		$this->javascripts = array();
	}
	
	function addJavascript($script)
	{
		array_push($this->javascripts, $script);
	}
	
	function addStylesheet($stylesheet)
	{
		array_push($this->stylesheets, $stylesheet);
	}
	
	function renderHeader()
	{
		$header = "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />";
		$header .= "<title>".$this->pageTitle."</title>";
		for($i = 0, $count = count($this->stylesheets); $i < $count; $i++)
			$header .= "<link href=\"".$this->stylesheets[$i]."\" rel=\"stylesheet\" type=\"text/css\" media=\"screen\"/>";
	}
	
	function renderFooter()
	{

		$footer = '<div class="footer">
				<div class="container">
					<div class="row">
						<div class="col-lg-6">
							<h4>Navigate</h4>
							<p><a href="Index.php">Home</a></p>
							<p><a href="Register.php">Register</a></p>
							<p><a href="AboutUs.php">About Us</a></p>
						</div>
						<div class="col-lg-6">
							<h4>Contact Us</h4>
							<p><i class="fa fa-facebook-square" aria-hidden="true"> facebook.com/LifeSuccessGroup</i></p>
							<p><i class="fa fa-phone-square" aria-hidden="true"> (+63)-939-591-3552</i></p>
						</div>
					</div>
				</div>
			</div>
		
			<div class="to-top">
				<p><a href="#">^ To Top</a></p>
			</div>';

		for($i = 0, $count = count($this->javascripts); $i < $count; $i++)
			$footer .= "<script src=\"".$this->javascripts[$i]."\" type=\"text/javascript\"></script>";

		return $footer;
	}

	function renderLoader(){
		return "<div class=\"loader\" style=\"
			display: none;
		    z-index: 99;
		    position: absolute;
		    left: 0;
		    top: 0;
		    height: 100%;
		    width: 100%;
		    background-color: rgba(0, 0, 0, 0.5);
		    text-align: center;\">
	    	
	    	<img src=\"vendor/resources/ajax-loader.gif\" style=\"
	    		width: 150px;
	    		height: auto;
	    		position: relative;
	    		top: 40%;\"\">

		</div>";
	}

}
?>