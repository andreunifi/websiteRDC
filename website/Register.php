<!DOCTYPE html>
<html>
<script src="JavaScript.js"></script>
<?php require 'menu.php'; 
require 'Destinations.php'
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
  padding: 14Rpx 16px;
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
          padding-left:10px;
          width:155px;
          height:32px;
          margin: 10px;
          background: #ddd;
          color: #f78536;
          border-radius:5px;
          border-color:transparent;
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


 </style>
<body class="test">



<div class="grid-container">
  <p class="logo" ><?php  
  if(isset($_SESSION['username']))
      echo "Benvenuto, ".$_SESSION['username'];
  else
      echo "Welcome";
  
  ?>.</p>  
  <div class="navbar" id="navbar" style="height:52px;padding-left:730px">
  <a href="final.php" >Home</a>
  <a href="Login.php">Login</a>
  <a href=""class="active">Register</a>
</div>
 
</div>
<div style="position:relative">


<div style="background-color:#ffffff; position: absolute; display: block; height:481px; width:448px; z-index:300; top:120px; left:400px" >

<div class="topnav" id="myTopnav" style="height:52px">
	<a href="Register.php" class="active">Register</a>
  <a href="LogIn.php" >Login</a>
  
</div>

<form class="" action="RegisterHandler.php" method="post"  style="padding-top:10px;width:inherit">

<table>
<tr><td><div style="" class="gridItemClass">
<label for="partenza"class="styleElement" style="">Nome</label><input type="text" class="selectStyle" name="nameRegister">
</div>  
</td> <td><div style="" class="gridItemClass">
<label for="partenza"class="styleElement" style="">Cognome</label><input type="text" class="selectStyle" name="cognomeRegister">
</div></td>
</tr>
<tr style="padding-top:10px"> <td colspan="2">
<div style="" class="gridItemClass">
<label for="mail"class="styleElement" style="">Email</label><input type="text"  style="width:363px" class="selectStyle" name="mailRegister">
</div></td>        
</tr> 

<tr>
<td colspan="2"><div style="" class="gridItemClass"><label for="password" class="styleElement" style="">Password</label><input type="text"  style="width:363px" class="selectStyle" name="passwordRegister">
</div></td>        
</tr> 




</table>

<div style="padding-left:55px;padding-top:30px"><input type="submit" value="Register" action="" class="submitButton" style="padding-left:15px"></div>







</form>

</div> 

<div style="position:absolute;z-index:200">
</div>

<img class="backgroundimage" src="foto/Maldive-Islands-Resort-1920x1200.jpg" alt="Girl in a jacket" width="1263px" height="605px">


</div>




</body>
</html>