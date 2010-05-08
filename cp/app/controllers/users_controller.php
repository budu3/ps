<?php 
class UsersController extends AppController
{
	var $name = "Users";
	var $helpers = array('Html', 'Form');

	function index()
	{
		
	}
	
	function beforeFilter()
	{
		$this->layout = 'pesululayout';

		 $this->__validateLoginStatus(); 
	}
	
	function login()
	{
		if(empty($this->data) == false)
		{
			if(($user = $this->User->validateLogin($this->data['User'])) == true)
			{
				$this->Session->write('User', $user);
				$this->Session->setFlash('You\'ve successfully logged in.');
				$this->redirect('index');
				exit();
			}
			else
			{
				$this->flash('There was a problem with your registration','/users/login');
				$this->Session->setFlash('Sorry, the information you\'ve entered is incorrect.');

				//exit();
			}
		}
	}
	
	
	function logout()
	{
		$this->Session->destroy('user');
		$this->Session->setFlash('You\'ve successfully logged out.');
		$this->redirect('login');
	}

	function register(){
		$this->data['User']['password'] = md5($this->data['User']['password']);
            	$this->User->create();
            	if ($this->User->save($this->data)) {
                	$this->Session->write('User', $this->User->findByUsername($this->data['User']['username']));
                	$this->Session->setFlash('Thank you for registering.');
                	$this->redirect('/');
            	} else {
                	$this->Session->setFlash('The User could not be saved. Please, try again.');
            	} 
	}
		
	function __validateLoginStatus()
	{
		if($this->action != 'login' && $this->action != 'logout' /*&& $this->action != 'register'*/) //todo: fix register()
		{
			if($this->Session->check('User') == false)
			{
				$this->redirect('login');
				$this->Session->setFlash('The URL you\'ve followed requires you login.');
			}
		}
	}
	
}

?>
