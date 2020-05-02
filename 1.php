<?php         include 'config.php';
    $name = $_POST['name'];
    $psw = $_POST['psw'];
$result = mysqli_num_rows(mysqli_query($bd,"SELECT * FROM user WHERE name = '$name'and password = '$psw'"));
if($result == 1)
{
	header( 'Location: signin1.html' ) ;
 }
else
{ echo "details dont match";
}
?>