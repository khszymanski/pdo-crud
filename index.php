<?php

require_once('includes/dhb.php');
require_once('includes/user.php');

// CREATE NEW CLASS AND CALL METHODS
$obj = new User;
$obj->getAllUsers();

echo '<br>';

echo $obj->getUsersWithCountCheck();

?>