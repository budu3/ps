<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php echo $title_for_layout?></title>
<?php
echo $this->Html->css('adlet');
echo $this->Html->css('main');
echo $this->Html->script('raphael');
echo $this->Html->script('g.raphael-min');
echo $this->Html->script('g.pie-min');
?>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<!-- Include external files and scripts here (See HTML helper for more info.) -->
<?php echo $scripts_for_layout ?>
<script type="text/javascript" charset="utf-8"> 
            window.onload = function () {
                var r = Raphael("holder");
                r.g.txtattr.font = "12px 'Fontin Sans', Fontin-Sans, sans-serif";
                
                r.g.text(320, 100, "CTR").attr({"font-size": 20});
                
                var pie = r.g.piechart(320, 240, 100, [55, 20, 13, 32, 5, 1, 2, 10], {legend: ["%%.%% – Enterprise Users", "IE Users"], legendpos: "west", href: ["http://raphaeljs.com", "http://g.raphaeljs.com"]});
                pie.hover(function () {
                    this.sector.stop();
                    this.sector.scale(1.1, 1.1, this.cx, this.cy);
                    if (this.label) {
                        this.label[0].stop();
                        this.label[0].scale(1.5);
                        this.label[1].attr({"font-weight": 800});
                    }
                }, function () {
                    this.sector.animate({scale: [1, 1, this.cx, this.cy]}, 500, "bounce");
                    if (this.label) {
                        this.label[0].animate({scale: 1}, 500, "bounce");
                        this.label[1].attr({"font-weight": 400});
                    }
                });
                
            };
        </script> 


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


<!-- Here's where I want my views to be displayed -->
<?php echo $content_for_layout ?>

<!-- Add a footer to each displayed page -->
<div id="footer"></div>

</body>
</html>

