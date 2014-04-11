<?php
$host="localhost";
$dbuser="kostov_kostov";
$dbpass="ednodvetri1";
$dbname="kostov_db1";

mysql_connect("$host","$dbuser","$dbpass") or die ("Грешка");
mysql_select_db("$dbname") or die ("Грешка");
?>