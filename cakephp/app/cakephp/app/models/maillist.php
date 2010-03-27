<?php
class Maillist extends AppModel
{
        var $name = 'Maillist';
	var $validate = array(
    		'usertype' => VALID_NOT_EMPTY,
   		 'email' => VALID_EMAIL
  	);

}
?>
