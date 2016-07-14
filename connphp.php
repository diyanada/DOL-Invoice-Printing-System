<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

$db="invoice";
$user="diyanada";
$password="owshangi";
$host="localhost";
$conn1=mysql_connect($host, $user, $password) or die("couldnt connect to db");
mysql_select_db($db) or die("couldnt select db");




?>
