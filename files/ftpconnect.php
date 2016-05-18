<?php
	$ftp_server = "ftp.mckenzieitinnovations.com";
	$ftp_username = "imageslide@mckenzieitinnovations.com";
	$ftp_userpass = "ImageSlide1#@!"
	$ftp_conn = ftp_connect($ftp_server) or die("Could not connect to $ftp_server");
	$login = ftp_login($ftp_conn, $ftp_username, $ftp_userpass);
?>