 
 <html>
 <?php 
 require 'Database_conn.php';
  
  $mail = $_REQUEST['mailLogin'];

    $pass = $_REQUEST['passwordLogin'];

	Login($mail,$pass);

?>

</html>