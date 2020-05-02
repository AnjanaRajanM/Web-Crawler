<?php     
    include 'config.php';
    $name = $_POST['name'];
	$email = $_POST['email'];
	$psw = $_POST['psw'];
    $result = mysqli_num_rows(mysqli_query($bd,"SELECT * FROM user WHERE email = '$email'"));
    if($result == 1)
    {        echo "The player already exists!";
    }
     else
    {      mysqli_query($bd,"INSERT INTO user VALUES ('$name','$email','$psw',0)");
            }
  header( 'Location:index.html' ) ;
 ?>