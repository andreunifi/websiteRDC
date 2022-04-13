<html>



<style>
@import url("https://fonts.googleapis.com/css?family=Raleway:300,400,700");

$gradient: linear-gradient(
	135deg,
	rgba(91, 36, 122, 0.45) 0%,
	rgba(27, 206, 223, 0.55) 100%
);
$shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.22);
$primary: #4183d7;
$secondary: #66cc99;

html,
body {
	width: 100%;
	height: 100%;
	margin: 0;
	padding: 0;
}

body {
	display: flex;
	flex-flow: row nowrap;
	align-items: center;
	justify-content: center;

	background: linear-gradient(#e6e6e6, #bbbbbb);

	font-family: "Raleway", sans-serif;
}

#main {
	position: relative;
	width: 550px;
	height: 330px;

	left: 30px;

	border-radius: 10px;
	box-shadow: $shadow;

	background-color: white;
}

#left {
	position: relative;
	background: $gradient;
	 background-image: url("foto/plane.jpg");
	   border-radius: 10px;
		
	background-size: cover;
	background-position: center;

	height: calc(100% + 50px);
	width: 40%;
	top: -35px;
	left: -50px;
	padding: 10px 25px;

	box-shadow: $shadow;

	color: white;

	display: flex;
	flex-flow: column nowrap;
	justify-content: space-between;
}

#left #head {
	opacity: 0.95;
}

#right {
	position: absolute;
	width: calc(60% - 40px);
	height: 100%;
	top: 0;
	left: 40%;

	display: flex;
	flex-flow: column nowrap;

	padding-left: 20px;
}

#right form {
	display: flex;
	flex-flow: column nowrap;

	width: 100%;
}

#right form input,
#right form select {
	-moz-appearance:none; /* Firefox */
	-webkit-appearance:none; /* Safari and Chrome */
	appearance:none;
	border: none;
	border-bottom: 1.5px solid #ccc;
	
	padding: 5px;
	margin-top: 2.5px;
	position: relative;
}

#right form .form-field {
	display: flex;
	flex-flow: column nowrap;
	justify-content: center;
	
	margin-bottom: 12.5px;
}

#right form #date-val {
	display: flex;
	justify-content: space-between;
}

#right form #date-val select {
	width: 45%;
}

#right form button[type="submit"] {
	background: linear-gradient(
								135deg,
								$primary 0%,
								$secondary 100%
							);
	padding: 5px;
	border: none;
	border-radius: 50px;
	color: white;
	font-weight: 400;
	font-size: 12pt;
	margin-top: 10px;
}

#right form button[type="submit"]:hover {
	background: transparent;
	box-shadow: 0 0 0 3px $primary;
	color: $primary;
}

</style>

<script type="text/javascript">
    alert('GeeksforGeeks!');
</script>
<main id="main">
	<section id="left">
		<div id="head">
			<h1>Life has great moments</h1>
			<p>Enjoy them with music!</p>
		</div>
		<h3>Only 9.99$</h3>
	</section>
	<section id="right">
		<h1>Purchase</h1>
		<form action="#">
			<div id="form-card" class="form-field">
				<label for="cc-number">Card number:</label>
				<input id="cc-number" maxlength="19" placeholder="1111 2222 3333 4444" required>
			</div>

			<div id="form-date" class="form-field">
				<label for="expiry-month">Expiry date:</label>
				<div id="date-val">
					<select id="expiry-month" required>
															<option id="trans-label_month" value="" default="default" selected="selected">Month</option>
														
													</select>
					<select id="expiry-year" required>
															<option id="trans-label_year" value="" default="" selected="selected">Year</option>
				</div>
			</div>
			
			<div id="form-sec-code" class="form-field">
				<label for="sec-code">Security code:</label>
				<input type="password" maxlength="3" placeholder="123" required>
			</div>
			
			<button type="submit">Purchase Premium</button>
		</form>
	</section>
</main>