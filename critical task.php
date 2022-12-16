<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<style type="text/css">
		.form1{
			margin-left: 30%;
			height: 730px;
			width: 500px;
			background-color: whitesmoke;
			border:2px solid black;
		}
		body{
			background-color: pink;
			background-size:cover ;
		}
		h1{
			font-family: garet;
		}
		label{
			margin-left: 20px;
			font-family: Barlow medium;
			font-size: 20px;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="form1">
		<div class="row"><center><h1><b>Registration form</b></h1></center></div><hr>
		<form name="form_name" onsubmit="return validations()" onkeypress="return valid()">
			<div class="row">
					<label>Name:</label>
					<input type="text" name="username" id="user"><br>
					<span id="user_id" style="color:red;"></span><br>
			</div>
			<div class="row">
			    	<label>Pin NO:</label>
			    	<input type="number" name="number" id="pin"><br>
			        <span id="pin_id" style="color:red;"></span><br>
			</div>
			<div class="row">
					<label>college:</label>
			        <select id="college" name="colleges">
				        <option>AEC</option>
		    			<option>ADTP</option>
		    			<option>ACET</option>
		    		</select><br><br>
			</div>
			<div class="row">
					<label>Branch:</label>
					<input type="text" name="branch" id="department"><br>
					<span id="department_id" style="color:red;"></span><br>
				</div>
			<div class="row">
					<label>Phone number:</label>
					<input type="tel" name="telephone" id="telephone"><br>
					<span id="telephone_id" style="color:red;"></span><br>
			</div>
			<div class="row">
					<label>Gender:
					<input type="radio"name="gender" id="genders">Male
    				<input type="radio"name="gender" id="genders">female</label><br><br>
			</div>
			<div class="row">
					<label>D.O.B:</label>
					<input type="date" name="birth" id="born"><br> 
					<span id="born_id" style="color:red;"></span><br>
			</div>
			<div class="row">
					<label>Email:</label>
					<input type="email" name="email" id="email"><br>
					<span id="email_id" style="color:red;"></span><br>
			</div>
			<div class="row">
					<label>Address:</label>
					<textarea name="address" id="address"></textarea><br>
					<span id="address_id" style="color:red;"></span><br>
			</div>
			<div class="row">
					<label><em>The above information is correct:</em></label>
					<input type="checkbox"><br><br>
					<label>
					<input type="Reset" name="clear" id="name">
					<input type="submit"></label>
			</div>
		</form>
	</div>
	</div>
	<script type="text/javascript">
		function validations(){
			var username=document.getElementById('user').value;
			var number=document.getElementById('pin').value;
			var colleges=document.getElementById('college').value;
			var branch=document.getElementById('department').value;
			var telephone=document.getElementById('telephone').value;
			var gender=document.getElementById('genders').value;
			var birth=document.getElementById('born').value;
			var email=document.getElementById('email').value;
			var address=document.getElementById('address').value;
			if(username==""){
				document.getElementById('user_id').innerText="Please Enter Your Name";
				return false;
			}
			if(number==""){
				document.getElementById('pin_id').innerText="Please Enter Your Pin Number";
				return false;
			}
			if(branch==""){
				document.getElementById('department_id').innerText="Please Enter Your department";
				return false;
			}
			if(telephone==""){
				document.getElementById('telephone_id').innerText="Please Enter Your Phone Number";
				return false;
			}
			if(email==""){
				document.getElementById('email_id').innerText="Please Enter Your Email";
				return false;
			}
			if(address==""){
				document.getElementById('address_id').innerText="Please Enter Your Address";
				return false;
			}
		}
		function valid(){
			document.getElementById('user_id').innerText=''
		 	document.getElementById('pin_id').innerText=''
		 	document.getElementById('department_id').innerText=''
		 	document.getElementById('telephone_id').innerText=''
		 	document.getElementById('email_id').innerText=''
		 	document.getElementById('address_id').innerText=''
	 }
	</script>
	</div>
	
</body>

</html>