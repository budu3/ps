<?php
class SitesController extends AppController{
	var $name = 'Sites';
	var $uses = array('Users','Widgets');
	var $layout = 'gpesululayout';
	
	function index(){

	}

	function beforeFilter()
	{
		 $this->__validateLoginStatus(); 
	}

	function display(){
		if (!empty($this->data))
		{
			
			if ($this->Site->save($this->data))
			{
				$this->redirect('snippet');
				//$this->flash('Thank you!','/maillists/register');
		      	} else {
				$this->flash('There was a problem with your registration','/maillists/register');
			}
		}else{
			//$this->flash('Thank you!','/maillists/register');
		}	
	}

	function snippet(){

	}


	/**
	/* shows personal settings on dashboard
	**/
	function personalsetting(){
		//print_r($this->Session->read('User.username'));
		$username = $this->Session->read('User.username');
		$email = $this->Users->query("SELECT email
				     FROM cp_users
				     WHERE (username = 'bigpopa')
				    ");
		$data = array('username' => $username, 'email' => $email);
		$this->set('data',$data);
	}
	
	/**
	/* shows code snippet on dashboard
	**/
	function code(){

	}

	/**
	/* shows account/credit balance details on dashboard
	**/
	function account(){

	}

	/**
	/* shows campaign statistics details on dashboard
	**/
	function stat(){
		$user_id = $this->Session->read('User.id'); //might be faster to use global var
		$rows = $this->Widgets->find('all', array('conditions' => array('Widgets.user_id' => $user_id)));
		$this->set('rows',$rows);

	}


	function __validateLoginStatus()
	{
		//if($this->action != 'display' && $this->action != 'logout')
		//{
			if($this->Session->check('User') == false)
			{
				$this->redirect('../users/login');
				$this->Session->setFlash('The URL you\'ve followed requires you login.');
			}
		//}
	}
}
?>
