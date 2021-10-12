<?php
	$conn = mysqli_connect('localhost','root','');
	$banco = mysqli_select_db($conn,'livraria');
	mysqli_set_charset($conn,'utf8');
?>