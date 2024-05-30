<?php
  session_start();
	unset($_SESSION['email']);
	unset($_SESSION['user']);
	unset($_SESSION['admin']);
	header('Location:../');
?>