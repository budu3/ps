<?php
class  UsersController extends AppController
{
   	var $name = 'Groups';
   

  	function index(){
	
  	}

	function beforeFilter() {
    		parent::beforeFilter(); 
    		$this->Auth->allowedActions = array('*');
	}

}

?>

