<?php
$con = mysql_connect('localhost','root','Qw3rty54e21');
if ( ! $con) {
    die('Could not connect: ' . mysql_error());
}
mysql_select_db("appDatabase", $con);

$sql = "INSERT INTO accounts (email, password)
        VALUES ('$_POST[email]','$_POST[password]')";

if ( ! mysql_query($sql, $con)) {
    die('Error: ' . mysql_error());
}
mysql_close($con)
?>
