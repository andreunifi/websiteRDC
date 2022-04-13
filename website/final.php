<!DOCTYPE html>
<html>
<script src="JavaScript.js"></script>
<?php require 'menu.php'; 
session_start();
$_SESSION['utente']=false;

   //Variabile per verificare che l'utente sia loggato in un secondo momento


$destinazione=['Hong Kong','Bangkok','London','Singapore','Paris','Siena','Rome','Rejavik']; //lista possibili voli e destinazioni
$classe=["Economica","Lusso"];
 ?>

<style>
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



.menuitem{
padding-top:5px;
}


.backgroundimage{
opacity: 0.5;
z-index:100;

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
          border-radius:5px;
}

.gridClass{
display: block;
gap: 30px 10px;
grid-template-columns: repeat(2,1fr);
}

.gridItemClass{
padding-left:15px;
padding-top:5px;


}
.submitButton{
        -webkit-appearance: none;
    -moz-appearance: none;                //disabilitano la visualizzazione default  browser
float:center;
width:330px;
height:50px;
border-color:transparent;
background-color:#f78536;
font-size:25px;
color:white;
border-radius:5px;
}

.navbar a {
  width:23%;
  height:60%;
  float: left;
  display: block;
  color: #ddd;
  text-align: center;
  padding: 30px 15px;
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

select{
    border-radius:5px;
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
  <a href="" class="active">Home</a>
  <a href="Login.php">Login</a>
  <a href="Register.php">Register</a>
</div>
 
</div>
<div style="position:relative">


<div style="background-color:#ffffff; position: absolute; display: block; height:451px; width:448px; z-index:300; top:120px; left:50px" >

<div class="topnav" id="myTopnav" style="height:52px">
  <a href="#home" class="active">Voli</a>
  <a href="#news">Hotel</a>
</div>

<form class="" action="flightfinalresults.php"  style="padding-top:10px;width:inherit">

<table>
<tr><td><div style="" class="gridItemClass">
<label for="partenza"class="styleElement" style="">Partenza</label> <?php generaMenu("Partenza",$destinazione,false)?>
</div>
</td> <td><div style="" class="gridItemClass">
<label for="partenza"class="styleElement" style="">Arrivo</label><?php generaMenu("Arrivo",$destinazione,false)?>
</div></td>
</tr>
<tr style="padding-top:10px"> <td>
<div style="" class="gridItemClass">
<label for="partenza"class="styleElement" style="">Check-in</label><input class="selectStyle" type="date" name="Check_in_Data"></input>
</div></td> <td>
<div style="" class="gridItemClass">
<label for="partenza"class="styleElement" style="">Check-out</label><input class="selectStyle" type="date" name="Check_out_Date"></input>
</div>         
</td> 

<tr>
<td colspan="2">
<div style="" class="gridItemClass">
<label for="partenza"class="styleElement" style="">Classe</label><?php generaMenu("Classe",$classe,false)?>
</div>    </td>

</tr>



</table>
<div style="padding-left:55px;padding-top:17px"><input type="submit" value="Search" class="submitButton" style="padding-left:15px"></div>







</form>

</div> 

<div style="position:absolute;z-index:200;padding-left:550px;padding-top:180px;font-size:25px;color:white;font-family:Noto Sans;font:sans-serif"><p>Why wait?<br></p><h2>Fly away with the wind, gone you are</h2><h3>Fly to Bradislostock for <br></h3><p><b>$250</b><br></p>
</div>

<img class="backgroundimage" src="foto/Maldive-Islands-Resort-1920x1200.jpg"  width="1263px" height="605px">


</div>




</body>
</html>