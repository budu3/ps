<?php
echo $html->link('Logout', array('controller' => 'Users', 'action' => 'logout'));
echo "<br/><br/>";
?>
<h1>Snippet</h1>
<?php
echo "<h2>Copy and Paste the following code snippet into your webpage</h2>";
echo $form->textarea('snippet',array('cols'=>'30','rows'=>'20','value'=>'<!-- pesulu script -->
		<script>
			glow.ready(function() {
    			var p = glow.dom.get("#adletcontainer");
			glow.anim.fadeOut("#adletcontainer",10);
			glow.events.addListener("#close", "click", function(){glow.dom.get("#adletcontainer").css("display","none")});
			glow.events.addListener("#close", "mouseover", function(){glow.dom.get("#close").css("background-color","#B0B0B0")});
			glow.events.addListener("#close", "mouseout", function(){glow.dom.get("#close").css("background-color","#E5EAF1")});

			})
		</script>

		<div id = "frame">
			<div id = "adletcontainer">
				<div id = "adletheader">
					<div  style="float:right; display: inline;">
						<script type="text/javascript" src="http://w.sharethis.com/button/sharethis.js#publisher=01be6838-aec8-4889-b057-fcdde81cb50f&amp;type=website&amp;buttonText=&amp;style=rotate"></script><a id="close" class = "ref" title="close" href="#">X</a>
					</div>
					This page is sponsored by 
				</div>

				<div id = "adletcontent">
					<div id = "adletleftcontent">
						pesulu
					</div>
					<div id = "adletrightcontent">
						Ads that don\'t suck!
					</div>
					<a class = "ref" href="http://www.pesulu.com">www.pesulu.com</a>
				</div>

			</div>
		</div>
	<!-- end pesulu script -->
'));
?>
