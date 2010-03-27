<?php
echo $html->link('Logout', array('controller' => 'Users', 'action' => 'logout'));
echo "<br/><br/>";
?>
<h1>Site</h1>
<?php
echo $form->create('Site',array('action' => 'display'));
echo $form->input('sitename');
echo $form->input('url');
echo $form->input('keywords');
echo "<h2>Site Demograhic</h2>";
echo $form->input('country');
echo $form->input('city');
echo $form->label('gender');
$options=array('Male'=>'Male','Female'=>'Female');
echo $form->select('gender',$options);
echo $form->input('startage');
echo $form->input('endage');
echo $form->input('householdincome');
echo $form->end('save');
?>
