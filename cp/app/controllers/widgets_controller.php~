<?php
class WidgetsController extends AppController{
	var $name = 'Widgets';
	var $uses = array('Widget','Site'); //Nasty hack. Widget method is only found when I include this line. I donno why it ignores the above line. 
	var $scaffold;
	var $layout = 'pesululayout';

	function index(){

	}

	function beforeFilter()
	{
		 $this->__validateLoginStatus(); 
		 //$this->layout = 'pesululayout';
	}

	//TODO: this function might be redundant
	function display(){
		 //$this->layout = 'pesululayout';
		if (!empty($this->data))
		{
			//print_r($this->data);
			//$this->Widget->set(array('user_id' => $user_id));
			if ($this->Widget->save($this->data))
			{
				$this->__saveSitewidget();
				$this->flash('View demo','../../widgetdemo.html');
		      	} else {
				$this->flash('There was a problem with your registration','/maillists/register');
			}
		}else{
			//$this->flash('Thank you!','/maillists/register');
		}
		
	}

	function add(){

		$user_id = $this->Session->read('User.id');
		$this->set('user_id',$user_id);

		if (!empty($this->data))
		{
			$this->data[Widget][user_id] = $user_id; //another hack
			if ($this->Widget->save($this->data))
			{
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
		//print_r($user_id);
		$this->Widget->set(array('user_id' => $user_id));
		
		//get user's site id
		$site_id = $this->Site->find('all', array('conditions' => array('Site.user_id' => $user_id))); 
		//print_r($site_id);
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
