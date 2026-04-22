<?php
$database = 'ete53e_2526ls_02';
$username = 'ete53e_2526ls_02';
$password = '14F.110+09F!33';
$mysqli = new mysqli('localhost',$username,$password,$database);
if ($mysqli->connect_errno) { echo 'Failed to connect to MySQL: '.$mysqli->connect_error; exit(); } else { echo 'Connection to DB is OK.'; }
