<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php echo $title_for_layout?></title>
<?php
echo $this->Html->css('adlet');
echo $this->Html->css('main');
?>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<!-- Include external files and scripts here (See HTML helper for more info.) -->
<?php echo $scripts_for_layout ?>

<script src="glow/1.5.1/core/core.js" type="text/javascript"></script>

</head>
<body>

<!-- If you'd like some sort of menu to 
show up on all of your views, include it here -->
<!-- my stuff -->
<div id = "topbar">
			<ul class="list">
					<li class="selecttab">
						<a href="index.html" title="Home Page">Home</a>
					</li>
					<li class="unselecttab">
						<a style="color: #FFFFFF;" href="about.html" title="About Page">About</a>
					</li>
					<li class="unselecttab">
						<a style="color: #FFFFFF;" href="contacts.html" title="Contact Us Page">Contacts</a>
					</li>
			</ul>
			<h1 id = "logo">pesulu</h1><h2 class="caption">ads that don't suck</h2>
</div>
<!-- end my stuff-->

    <div id="menu"></div>
</div>

<!-- Here's where I want my views to be displayed -->
<?php echo $content_for_layout ?>

<!-- Add a footer to each displayed page -->
<div id="footer"></div>

</body>
</html>

