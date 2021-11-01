<html>
<head>
    <title>login form </title>
    <link rel="stylesheet" href="style.css">
    </head>
    <body>
      <div class="wrapper">
	<div class="registration_form">
		<div class="title">
		Login Form
		</div>
    <form  action="login.php" method="POST">
        <div class="form_wrap">
				  <div class="input_wrap">
					<label for="name">Name</label>
					<input type="text" id="name" name="name" placeholder="enter your name">
				</div>				
       <div class="input_wrap">
					<label for="email">Email </label>
					<input type="text" id="email" name="email" placeholder="enter your email">
				</div>
                    <div class="input_wrap">
					<label for="phone">Phone Number</label>
					<input type="text" id="phone" name="mob" placeholder="enter your phone number">
				</div>
               <div class="input_wrap">
					<label for="job">Job</label>
					<input type="text" id="job" name="job" placeholder="enter your job">
                </div>
                    <div class="input_wrap">
					<label for="pass">Password</label>
					<input type="text" id="pass" name="pass" placeholder="enter your password">
				</div>
      	<div class="input_wrap">
					<input type="submit" value="Login" class="submit_btn">
				</div>
			</div>
		</form>
	</div>
</div>
       
    </body>
    
</html>