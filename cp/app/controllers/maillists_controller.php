<?php
class  MaillistsController extends AppController
{
   var $name = 'Maillists';
   

  function index()
  {
	$this->layout = 'formlayout';
  }

  function  register()
  {
    if (!empty($this->params['form']))
    {
	$this->layout = 'formlayout';
      if ($this->Maillist->save($this->params['form']))
      {
        $this->flash('Thank you!', 
'/maillists/register');
      } else {
        $this->flash('There was a problem with your registration', 
'/maillists/register');
      }
    }
  }
}
?>

