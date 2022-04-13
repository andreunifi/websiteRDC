<!DOCTYPE html>
<html>
<script src="JavaScript.js">
</script>
<?php require 'menu.php';

require 'Database_conn.php'; 

$Partenza=$_REQUEST['Partenza'];
$Arrivo=$_REQUEST['Arrivo'];
$DataPartenza=$_REQUEST['Check_in_Data'];


function generateFlyResults($result){
 if ($result->num_rows > 0)
    while($row = $result->fetch_assoc()){
		$price= rand(0,1500);
		$imageindex= rand(1,6);
		$image="foto/".$imageindex.".jpg";
		echo "
		<li>
		<section class=\"product\">
		<div class=\"product__photo\">
				<img class=\"photo-main\" src=\"".$image ."\" width=\"inherit\" 
     height=\"inherit\">
			</div>
	<div class=\"product__info\">
		<div class=\"title\">
			<h1>Volo da ".$row['LuogoPartenza']." a ". $row['LuogoArrivo']." </h1>
			<span>Codice volo ".$row['IdVolo']. "</span>
		</div>
		<div class=\"price\">
			 <span>".$price." $</span>
		</div>
		<div class=\"description\">
			<h3>Informazioni</h3>
			<ul>
				<li><strong>". $row['PostiDisponibili']."</strong> Posti disponibili</li>
				<li>Data di Partenza: <strong>".$row['DataOraPartenza'] ."</strong></li>
				<li>Data di Ritorno: <strong>". $row['DataOraArrivo'] ."</strong></li>
				<li>Presentarsi al gate con almeno 2 ore di anticipo</li>
			</ul>
		</div>
		<button type=\"submit\" onclick=\"myForm.submit();\" name=\"FlyResults\" value=".$row['IdVolo']." class=\"buy--btn\" style=\"padding-left:15px\">Prenota</button>
	</div>
</section>





</li>

";
		
		
	}
	else
		echo "No data";
	
    
}


 ?>


<style>
* {margin: 0; padding: 0;}
 
.divclass {
  margin: 20px;
}

 
h3 {
  font: bold 20px/1.5 Helvetica, Verdana, sans-serif;
}
 

 


.logo{
border:0px;
padding-left: 20px;
padding-top:5px;
color: #f78536;
}
.grid-container {
border:0px;
  display: grid;
  grid-template-columns: auto auto auto;
	height:90px;
  gap: 1px;
  background-color: #ffffff;
  outline: none;
  }
  
.test{
margin:0;
border:0px;
padding: 0px;
background-color: #f89d5e;
box-sizing: border-box;
}




.backgroundimage{
opacity: 0.5;
z-index:100;
height:inherit;

}

.topnav {
  background-color: #ffffff;
  overflow: hidden;
}

.topnav a {
  width:23%;
  height:inherit;
  float: left;
  display: block;
  color: #f78536;
  text-align: center;
  padding: 14px 16px;
  padding-top:16px;
  text-decoration: none;
  font-size: 19px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #f78536;
  color: white;
}

.styleElement{
font-size:15.5px;
display:block;
padding-top:15px;vertical-align:top;padding-left:8px;
font-family:Noto Sans;
          font:sans-serif;
}

.selectStyle{
    float:left;
          font-size: 14px;
          font-family:Noto Sans;
          font:sans-serif;
          min-width:100%
          width:170px;
          height:32px;
          margin: 10px;
          background: #ddd;
          color: #f78536;
          border-color:transparent;
}

.gridClass{
display: block;
gap: 30px 10px;
grid-template-columns: repeat(2,1fr);
}


.navbar a {
  width:23%;
  height:60%;
  float: left;
  display: block;
  color: #ddd;
  text-align: center;
  padding: 30px 16px;
  text-decoration: none;
  font-size: 19px;
}

.navbar a:hover {
  background-color: #ddd;
  color: black;
}

.navbar a.active {
  color: #f78536;
}

$color-primary: #4c4c4c;
$color-secondary: #a6a6a6;
$color-highlight: #ff3f40;

/* ----- Global ----- */
* {
	box-sizing: border-box;
}

html,
body {
	height: 100%;
}

body {
	display: grid;
	grid-template-rows: 1fr;
	font-family: "Raleway", sans-serif;
	background-color: #01e37f;
}

h3 {
	font-size: 0.7em;
	letter-spacing: 1.2px;
	color: $color-secondary;
}

img {
			max-width: 100%;
			filter: drop-shadow(1px 1px 3px $color-secondary);
		}

/* ----- Product Section ----- */
.product {
	display: grid;
	grid-template-columns: 0.9fr 1fr;
	margin: auto;
	padding: 1.5em ;
	min-width: 600px;
	background-color: white;
	border-radius: 5px;
}

/* ----- Photo Section ----- */
.product__photo {
	position: relative;
}

.photo-container {
	position: absolute;
	left: -1.4em;
	display: grid;
	grid-template-rows: 1fr;
	width: 100%;
	height: 100%;
	border-radius: 6px;
	box-shadow: 4px 4px 25px -2px rgba(0, 0, 0, 0.3);
}

.photo-main {
	position: absolute;
	left: -1.4em;
	display: grid;
	grid-template-rows: 1fr;
	width: 100%;
	height: 100%;
	box-shadow: 4px 4px 25px -2px rgba(0, 0, 0, 0.3);
	border-radius: 6px 6px 6px 6px;
	padding-left:2px;
	

	.controls {
		display: flex;
		justify-content: space-between;
		padding: 0.8em;
		color: #fff;

		i {
			cursor: pointer;
		}
	}

	img {
		position: absolute;
		left: -3.5em;
		top: 2em;
		max-width: 110%;
		filter: saturate(150%) contrast(120%) hue-rotate(10deg)
			drop-shadow(1px 20px 10px rgba(0, 0, 0, 0.3));
	}
}



/* ----- Informations Section ----- */
.product__info {
	padding: 0.8em 0;
}

.title {
	h1 {
		margin-bottom: 0.1em;
		color: $color-primary;
		font-size: 1.5em;
		font-weight: 900;
	}

	span {
		font-size: 0.7em;
		color: $color-secondary;
	}
}

.price {
	margin: 1.5em 0;
	color: #405cf5;
	font-size: 1.8em;

	span {
		
		padding-left: 0.15em;
		font-size: 2.9em;
	}
}

.variant {
	overflow: auto;

	h3 {
		margin-bottom: 1.1em;
	}

	li {
		float: left;
		width: 35px;
		height: 35px;
		padding: 3px;
		
		border: 1px solid transparent;
		border-radius: 3px;
		cursor: pointer;

		&:first-child,
		&:hover {
			border: 1px solid $color-secondary;
		}
	}

	li:not(:first-child) {
		margin-left: 0.1em;
	}
}

.description {
	clear: left;
	margin: 2em 0;

	h3 {
		margin-bottom: 1em;
	}

	ul {
		font-size: 0.8em;
		list-style: disc;
		margin-left: 1em;
	}

	li {
		text-indent: -0.6em;
		margin-bottom: 0.5em;
	}
}

.buy--btn {
	padding: 1.5em 3.1em;
	border: none;
	border-radius: 7px;
	font-size: 0.8em;
	font-weight: 700;
	letter-spacing: 1.3px;
	color: #fff;
	background-color: $color-highlight;
	box-shadow: 2px 2px 25px -7px $color-primary;
	cursor: pointer;
	 backface-visibility: hidden;
  background-color: #405cf5;
  border-radius: 6px;
  border-width: 0;
  box-shadow: rgba(50, 50, 93, .1) 0 0 0 1px inset,rgba(50, 50, 93, .1) 0 2px 5px 0,rgba(0, 0, 0, .07) 0 1px 1px 0;
  box-sizing: border-box;
  color: #fff;
  cursor: pointer;
  font-family: -apple-system,system-ui,"Segoe UI",Roboto,"Helvetica Neue",Ubuntu,sans-serif;
  font-size: 100%;
  height: 44px;
  line-height: 1.15;
  margin: 12px 0 0;
  outline: none;
  overflow: hidden;
  padding: 0 25px;
  position: relative;
  text-align: center;
  text-transform: none;
  transform: translateZ(0);
  transition: all .2s,box-shadow .08s ease-in;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  width: 100%;
	&:active {
		
	}
	
}
.buy--btn:hover{
		color:#fff;
		background-color: #f78536;
		transform: scale(1.05);
	}
	



 </style>
<body class="test" >


<div class="grid-container">
  <p class="logo" ><?php  
  if(isset($_SESSION['username']))
      echo "Benvenuto, ".$_SESSION['username'];
  else
      echo "Welcome";
  
  ?></p>  
  <div class="navbar" id="navbar" style="height:52px;padding-left:730px">
   <a href="final.php">Home</a>
  <a href="Login.php">Login</a>
  <a href="Register.php">Register</a>
</div>
 
</div>
<div style="position:relative">



<div style="background-color:#ffffff; position: absolute; display: block; height:651px; width:1048px; z-index:300; top:100px; left:100px"  >
<form id="myForm" style="height:inherit" action="Selected_Flight.php" method="post" >
<ol style="overflow:hidden; overflow-y:scroll;margin:0px;height:inherit">
<?php generateFlyResults(getVoli("voli",$Partenza,$Arrivo,$DataPartenza,""));?>
</ol>
</form>

</div>

<div>
<img class="backgroundimage" src="foto/Maldive-Islands-Resort-1920x1200.jpg" alt="Girl in a jacket">


</div>




</body>
</html>