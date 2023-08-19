<?php
session_start();
//$a=$_SESSION['path'];

include_once("connect.php");
//include("authorisation1.php");
$b=$_REQUEST['id'];
//echo $b;
//$query=mysql_query("select pcode from newsong where pcode=$b");
//$row=mysql_fetch_array($query);
//if($_SERVER['REQUEST_METHOD']=='POST')
//{
$file="images/".$b;
//echo $file;

if (file_exists($file)) 
  {
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename='.basename($file));
    header('Content-Transfer-Encoding: binary');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));
    ob_clean();
    flush();
    readfile($file);
    exit;
}
//}
?>