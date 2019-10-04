<?php
session_start();

if (empty($_SESSION['some_id'])){
	$_SESSION['some_id'] = rand(0,1000);
}

var_dump($_SESSION);
?>
<h3>Version 2</h3>
