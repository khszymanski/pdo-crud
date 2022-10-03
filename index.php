<?php

require_once('includes/dhb.php');
require_once('includes/user.php');

// CREATE NEW CLASS AND CALL METHOD getAllUsers
$obj = new User;
echo $obj->getAllUsers();

?>