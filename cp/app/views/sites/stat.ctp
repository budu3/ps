
        
<h2>Dashboard</h2>

<h3>Campaign Statistics</h3>

<?php
	//echo print_r($rows);
	foreach ($rows as $index=>$value){

		echo "<b>ID:&nbsp</b>"; echo $value['Widgets']['id']; echo "<br/>";
		echo "<b>Site name:&nbsp</b>"; echo $value['Widgets']['sitename']; echo "<br/>";
		echo "<b>Message:&nbsp;</b>"; echo $value['Widgets']['message']; echo "<br/>";
		echo "<b>Landing page:&nbsp</b>"; echo $value['Widgets']['landingpage']; echo "<br/>";
		echo "<b>Display Url:&nbsp</b>"; echo $value['Widgets']['displayurl']; echo "<br/>";
		echo "<b>Keywords:&nbsp</b>"; echo $value['Widgets']['keywords']; echo "<br/>";
		echo "<b>Country:&nbsp</b>"; echo $value['Widgets']['country']; echo "<br/>";
		echo "<b>City:&nbsp</b>"; echo $value['Widgets']['city']; echo "<br/>";
		echo "<b>Gender:&nbsp</b>"; echo $value['Widgets']['gender']; echo "<br/>";
		echo "<b>Age group:&nbsp</b>"; echo $value['Widgets']['startage']; echo '&nbsp;-&nbsp;'; echo $value['Widgets']['endage']; echo "<br/>";
		echo "<b>Date Created:&nbsp</b>"; echo $value['Widgets']['created']; echo "<br/>";echo "<br/> <br/>";

	}

?>

<div id="holder"></div> 
