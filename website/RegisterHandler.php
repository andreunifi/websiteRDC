<html>
<?php
 require 'Database_conn.php';
 
 $nome=$_REQUEST['nameRegister'];
 
	$cognome=$_REQUEST['cognomeRegister'];
  
  $mail = $_REQUEST['mailRegister'];

  $pass = $_REQUEST['passwordRegister'];
  if(checkIfUserAlreadyExists($mail,$pass)){
	  echo" Sei già registrato!";
	  header( "refresh:1;url=LogIn.php" );
  }else{
	  echo"Sto effettuando la registrazione...";
	  Register($nome,$cognome,$mail,$pass,$nome);
  }

?>

</html>