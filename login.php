<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Justice of The Peace</title>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/loginpage.css">
    <script src="js/script.js"></script>
	<title>Login</title>
</head>
<body>




<div class="container">


	<div class="container center">


	

		<div class="card border-primary" style="width: 24rem;">
			<div class="card-header text-center">
    <p class="text-primary">Log in to our system</p>
  </div>
			<div class="card-body">
				<form>
				  <div class="form-group ">
				    <label for="exampleInputEmail1">Email address</label>
				    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" onchange="UpdateEmail()" onblur="NoInput()">
				  </div>
				  <div id="error_email" class="alert alert-danger error-hide" role="alert">
  					A simple primary alert—check it out!
				</div>
				  <div class="form-group">
				    <label for="exampleInputPassword1">Password</label>
				    <input type="password" class="form-control" id="exampleInputPassword1" onchange="UpdatePwd()">
				  </div>
				  <div id="error_pwd" class="alert alert-danger error-hide" role="alert">
  					A simple primary alert—check it out!
				</div>
				  <button type="submit" id="submit" class="btn btn-primary btn-lg btn-block" onclick=" return Errorbtn()">Submit</button>

				</div>
				<div class="alert alert-danger error-hide text-wrap" role="alert" id="no-input">
  					<strong>Opps!</strong> It looks like you haven't entered your login information. 
				</div>

				  <div class="card-footer text-muted text-center">
   				 New to JPSearch <a href="#"> Sign Up</a>
  				</div>
				</form>
				
			</div>
		</div>
	</div>
</div>



</body>
</html>