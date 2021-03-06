<?php
class WidgetsController extends AppController{
	var $name = 'Widgets';
	var $uses = array('Widget','Site'); //Nasty hack. Widget method is only found when I include this line. I donno why it ignores the above line. 
	var $scaffold;

	function index(){

	}

	function beforeFilter()
	{
		 $this->__validateLoginStatus(); 
	}

	function display(){
		if (!empty($this->data))
		{
			if ($this->Widget->save($this->data))
			{
				$this->__saveSitewidget();
				$this->flash('Thank you!','/maillists/register');
		      	} else {
				$this->flash('There was a problem with your registration','/maillists/register');
			}
		}else{
			//$this->flash('Thank you!','/maillists/register');
		}
		
	}

	function __saveSitewidget(){
		//$this->Sitewidget->find('first', array('conditions' => array('Article.id' => 1)));
		$user_id = $this->Session->read('User.id');
		print_r($user_id);
		$this->Widget->set(array('user_id' => $user_id));
		
		//get user's site id
		$site_id = $this->Site->find('all', array('conditions' => array('Site.user_id' => $user_id))); 
		print_r($site_id);
	}

	function __validateLoginStatus()
	{
			if($this->Session->check('User') == false)
			{
				$this->redirect('../users/login');
				$this->Session->setFlash('The URL you\'ve followed requires you login.');
			}
	}
}
?>
