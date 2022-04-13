<!Doctype HTML>
<?php 

session_start();



function initializeConnection(){
$database="websitedatabase";
$username="root";
$dbpass="";
$dbhost="127.0.0.1:3306";
	$conn=mysqli_connect($dbhost,$username,$dbpass,$database);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
return $conn;
	
}



function getVoli($table,$LuogoPartenza,$LuogoArrivo,$DataPartenza,$DataArrivo){
	$conn=initializeConnection();
	
	//&& CAST(DataOraPartenza AS date) = '$finaldate'
	$query="SELECT * FROM `$table` WHERE LuogoPartenza='$LuogoPartenza' && LuogoArrivo='$LuogoArrivo' && CAST(DataOraPartenza AS date) >= '$DataPartenza' && PostiDisponibili>0";
	 $result = $conn->query($query);
$conn->close();
return $result;
}




function populateWithRandomFlightData(){ //DEBUG! USARE SOLO PER INIZIALIZZARE I DATABASE
	$connessione=initializeConnection();
	$start = strtotime("2022-03-08");
	$end = strtotime("2022-10-5");
	$listaCitta=['Hong Kong','Bangkok','London','Singapore','Paris','Siena','Rome','Rejavik'];
	for($i=0;$i<300;$i++){
		$randomstartingplace=$listaCitta[rand(0,count($listaCitta)-1)];
		$randomlandingplace=$listaCitta[rand(0,count($listaCitta)-1)];
		$idVolo=rand(0,255);
		$postiId=rand(1,32);
		$randomLandingDate=date("Y-m-d H::i",mt_rand($start, $end));
		$randomStartingDate=date("Y-m-d H::i",mt_rand($start, $end));
		//echo "$randomstartingplace $randomlandingplace $idVolo $postiId $randomStartingDate $randomLandingDate"; DEBUG
		
		if($randomstartingplace!=$randomlandingplace && $randomLandingDate!=$randomStartingDate && $randomStartingDate<=$randomLandingDate ){
			
			$value= "\"$randomstartingplace\",\"$randomlandingplace\",'$randomStartingDate','$randomLandingDate',$idVolo,$postiId";
			$query= "INSERT INTO `voli`(`LuogoPartenza`, `LuogoArrivo`, `DataOraPartenza`, `DataOraArrivo`, `IdVolo`, `PostiDisponibili`) VALUES ($value)";
		$connessione->query($query);
		
		}
		
	}
	$connessione->close();
}





function Login($mail,$password){
	    if(!empty($mail) && !empty($password)){
		$sql = "SELECT * FROM utenti WHERE mail='$mail' AND password='$password'";
		$connection=initializeConnection();
		$result=$connection->query($sql);
	
        
			switch(@mysqli_num_rows($result)){
				
				case 1:
				$row = mysqli_fetch_assoc($result);

				if ($row['mail'] === $mail && $row['password'] === $password){
					$_SESSION['utente'] = true;
					// query per recuperare username
					//set variabile di sessione con username
					$_SESSION['username']=$row['username'];
					echo "Welcome ".$row['username']." ,sarai reindirizzato tra 3 secondi" ;
					header( "refresh:3;url=Final.php" );
					
				} 	 
				break;
				
				
				case 0:
					echo "Nessun utente con questa combinazione mail/password    ";
					 echo "<a href=\"Register.php\">Registrati</a>";
					
				break;
				
				
				default:
				echo "error";
				
				break;
			}

        
    }
	$connection->close();
}


function checkIfUserAlreadyExists($mail,$password){
	$userExists;
	 if(!empty($mail) && !empty($password)){
		$sql = "SELECT * FROM utenti WHERE mail='$mail' AND password='$password'";
		$connection=initializeConnection();
		$result=$connection->query($sql);
	
        
			switch(@mysqli_num_rows($result)){
				
				case 1:
				$row = mysqli_fetch_assoc($result);

				if ($row['mail'] === $mail && $row['password'] === $password){
					$userExists=true;
					
				} 	 
				break;
				
				
				case 0:
					$userExists=false;
					
				break;
				
				
				default:
				echo "error";
				$userExists=false;
				
				break;
			}

        
    }
	$connection->close();
	return $userExists;
	
}


function Register($nome,$cognome,$mail,$password,$username){
	$conn=initializeConnection();
	$sql="INSERT INTO `utenti`(`Nome`, `Cognome`, `mail`, `username`, `password`) VALUES ('$nome','$cognome','$mail','$username','$password')";
	$conn->query($sql);
	$conn->close();
	header( "refresh:3;url=Login.php" );
}

function notifySelectedFlightToDatabse($flightValue, $username){
	$conn=initializeConnection(); 
	$sql="SELECT `PostiDisponibili` FROM `voli` WHERE `IdVolo`= '$flightValue'";
	
	$result=$conn->query($sql);
	if($result->num_rows > 0){
		$row=$result->fetch_assoc();
		if($row>0){
			$sql2="UPDATE `voli` SET `PostiDisponibili`=`PostiDisponibili`-1  WHERE `IdVolo`= '$flightValue'";
			$conn->query($sql2);
		}
	}
	
	$conn->close();
	
	
	
	
}
?>




