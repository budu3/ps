<?php
class User extends AppModel
{
        var $name = 'User';
	var $hasmany = array('Widget');

	function validateLogin($data)
    	{
        	$user = $this->find(array('username' => $data['username'], 'password' => md5($data['password'])), array('id', 'username'));
        	if(empty($user) == false)
            		return $user['User'];
        	return false;
    	} 
}
?>
