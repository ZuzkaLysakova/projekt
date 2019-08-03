<?php

//nastaveni uzivatele a hosta
$localhost = "localhost:/var/run/mysql/mysql.sock";
$username = "root";
$password = "";
$db_name = "databasebooks";

//pripojeni k databazi
$conecting = mysql_connect($localhost, $username, $password);

if(!mysql_select_db($db_name, $conecting)){
	echo "Chyba při připojení k databázi.";
	exit();
}

?>