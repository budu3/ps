<?php echo $html->link('Logout', array('controller' => 'Users', 'action' => 'logout')); ?>
<br/><br/>
Welcome. Are you a(an)
<br/><br/>
<?php echo $html->link('Advertiser', array('controller' => 'Widgets', 'action' => 'display')); ?>
<br/><br/>
<?php echo $html->link('Site Owner', array('controller' => 'Sites', 'action' => 'display')); ?>
<br/><br/>
<?php echo $html->link('Personal Settings', array('controller' => 'Sites', 'action' => 'personalsetting')); ?>
<br/><br/>
<?php echo $html->link('Code', array('controller' => 'Sites', 'action' => 'code')); ?>
<br/><br/>
<?php echo $html->link('Statistics', array('controller' => 'Sites', 'action' => 'stat')); ?>
<br/><br/>
