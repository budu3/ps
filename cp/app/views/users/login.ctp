<!-- File: /app/views/posts/login.ctp -->	
	
<h1>Login</h1>
<?php
echo $form->create('User',array('action' => 'login'));
echo $form->input('username');
echo $form->label('Password');
echo $form->password('password');
//echo $form->input('body', array('rows' => '3'));
echo $form->end('login');
?>
