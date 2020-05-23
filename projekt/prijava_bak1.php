<?php 
	print '
	<div class="container" style=" padding: 16px; background-color: white;">
		<h1>Prijava korisnika</h1>
		<p>Molimo Vas da popunite obrazac za prijavu korisnika.</p>
		<hr>

		<div class="row">			
			<div class="col-sm-6">';
	
	if ($_POST['_action_'] == FALSE) {
		print '
		<div class="prijava">
		<form action="" name="myForm" id="myForm" method="POST">
			<input type="hidden" id="_action_" name="_action_" value="TRUE">
			<div>
			<label for="username">Korisničko ime:*</label>
			<input type="username" id="username" name="username" value="earnaut1" pattern=".{5,10}" required>
		</div>
		<div>				
			<label for="password">Lozinka:*</label>
			<input type="password" id="password" name="password" value="" pattern=".{4,}" required>
			</div>
		<div>			
			</div>  
			<hr>
		  
			  <div>
				<button type="submit" class="signupbtn">Prijava</button>
			  </div>
			</div>
									

		</form>
	</div>
</div>';
	}
	else if ($_POST['_action_'] == TRUE) {
		
		$query  = "SELECT * FROM users";
		$query .= " WHERE username='" .  $_POST['username'] . "'";
		$result = @mysqli_query($MySQL, $query);
		$row = @mysqli_fetch_array($result, MYSQLI_ASSOC);
		#$row1 = "lozinka";
		#$hash = 'test';
		
		#if (password_verify($_POST['password'], $hash)) {
		if (password_verify($_POST['password'], $row)) {
			#password_verify https://secure.php.net/manual/en/function.password-verify.php
			$_SESSION['user']['valid'] = 'true';
			$_SESSION['user']['id'] = $row['id'];
			$_SESSION['user']['firstname'] = $row['firstname'];
			$_SESSION['user']['lastname'] = $row['lastname'];
			$_SESSION['message'] = '<p>Dobrodošli, ' . $_SESSION['user']['firstname'] . ' ' . $_SESSION['user']['lastname'] . '</p>';
			# Redirect to admin website
			$myMessage = "Prijavljeni ste!";
			echo 'Password is valid!';
			header("Location: index.php?menu=7");
		}
		
		# Bad username or password
		else {
			unset($_SESSION['user']);
			$_SESSION['message'] = '<p>You entered wrong email or password!</p>';
			echo '<p>You entered wrong email or password!</p>';
			$myMessage1 = "Niste prijavljeni!";
			header("Location: index.php?menu=1");
		}
	}
	print '
	
	
	</div>';
?>