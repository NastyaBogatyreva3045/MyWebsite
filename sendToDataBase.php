<?php
/*
* Change the value of $password if you have set a password on the root userid
* Change NULL to port number to use DBMS other than the default using port 3306
*
*/
$user = 'id18176150_root';
$password = 'WK6g$^3A(SDKC!/s'; //To be completed if you have set a password to root
$database = 'id18176150_clients'; //To be completed to connect to a database. The database must exist.
$mysqli = new mysqli('localhost', $user, $password, $database);
$mysqli->set_charset("utf8mb4");

$date = htmlspecialchars($_POST['date']);
$name = htmlspecialchars($_POST['name']);
$tel = htmlspecialchars($_POST['phone']);

//echo explode('.', $date);

$y = explode('.', $date)[2];
$m = explode('.', $date)[1];
$d = explode('.', $date)[0];
$date = $y.'-'.$m.'-'.$d.' '.htmlspecialchars($_POST['time']);

//echo $date;
//echo 'insert into queue_registr values ("'.$date.'", "'.$name.'", "'.$tel.'")';

//echo $date.'    ';
//echo $name.'    ';
//echo $tel.'     ';

if("" != trim($date) && "" != trim($name) && "" != trim($tel))
{
    echo 'start';
    $mysqli->query('insert into queue_registr values ("'.$date.'", "'.$name.'", "'.$tel.'")');
    echo 'end';
}
else
{
    echo 'error';
}


$mysqli->close();
?>
