<?
$link=mysqli_connect('localhost','root','','car');
if (!$link) {
	echo "ERROR DATABASE!!! ".mysql_connect_errorno();
	exit(); 
}

?>