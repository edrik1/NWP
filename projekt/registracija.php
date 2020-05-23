<?php 
	print '	
	<div class="container" style=" padding: 16px; background-color: white;">	
		<h1>Registracija korisnika</h1>
		<p>Molimo Vas da popunite obrazac za registraciju korisnika.</p>
		<hr>
	<div class="row">
		<div class="col-sm-8">
	<div>';
	
	if ($_POST['_action_'] == FALSE) {
		print '
		<div class="registracija">
		<form action="" id="registration_form" name="registration_form" method="POST">
			<input type="hidden" id="_action_" name="_action_" value="TRUE">
		<div>			
			<label for="fname">Ime *</label>
			<i class="fa fa-user icon"></i>
			<input type="text" id="fname" name="firstname" placeholder="Vaše ime.." required>
		</div>
		<div>
			<label for="lname">Prezime *</label>
			<i class="fa fa-user icon"></i>
			<input type="text" id="lname" name="lastname" placeholder="Vaše prezime.." required>
		</div>	
		<div>	
			<label for="email">Email *</label>
			<i class="fa fa-envelope icon"></i>
			<input type="text" id="email" name="email" placeholder="Vaš email.." required>
		</div>		
		<div>
			<label for="username">Korisničko ime:* <small>(Korisničko ime mora imati minimalno 5 and maksimalno 10 karaktera)</small></label>
			<input type="username" id="username" name="username" pattern=".{5,10}" placeholder="Korisničko ime.." required><br>
		</div>		
		<div>					
			<label for="password">Lozinka:* <small>(Password must have min 4 char)</small></label>
			<input type="password" id="password" name="password" placeholder="Lozinka.." pattern=".{4,}" required>
		</div>
		<div>
			<label for="country">Država:</label>
			<select name="country" id="country">
				<option value="">molimo odaberite</option>';
				#Select all countries from database webprog, table countries
				$query  = "SELECT * FROM countries";
				$result = @mysqli_query($MySQL, $query);
				while($row = @mysqli_fetch_array($result)) {
					print '<option value="' . $row['country_code'] . '">' . $row['country_name'] . '</option>';
				}
			print '
			</select>
			<hr>
			<div>
			<button type="submit" class="registerbtn">Registriraj</button>
		</div>
		</form>
	</div>
	</div>
	</div>';
	}
	else if ($_POST['_action_'] == TRUE) {
		
		$query  = "SELECT * FROM users";
		$query .= " WHERE email='" .  $_POST['email'] . "'";
		$query .= " OR username='" .  $_POST['username'] . "'";
		$result = @mysqli_query($MySQL, $query);
		$row = @mysqli_fetch_array($result, MYSQLI_ASSOC);
		
		if ($row['email'] == '' || $row['username'] == '') {
			# password_hash https://secure.php.net/manual/en/function.password-hash.php
			# password_hash() creates a new password hash using a strong one-way hashing algorithm
			$pass_hash = password_hash($_POST['password'], PASSWORD_DEFAULT, ['cost' => 12]);
			
			$query  = "INSERT INTO users (firstname, lastname, email, username, password, country)";
			$query .= " VALUES ('" . $_POST['firstname'] . "', '" . $_POST['lastname'] . "', '" . $_POST['email'] . "', '" . $_POST['username'] . "', '" . $pass_hash . "', '" . $_POST['country'] . "')";
			$result = @mysqli_query($MySQL, $query);
			
			# ucfirst() — Make a string's first character uppercase
			# strtolower() - Make a string lowercase
			echo '<p>' . ucfirst(strtolower($_POST['firstname'])) . ' ' .  ucfirst(strtolower($_POST['lastname'])) . ', hvala što Ste se registrirali! </p>
			<hr>';
		}
		else {
			echo '<p>Korisnik s takvi korisničkim imenom i email-om već postoji!</p>';
		}
	}
	print '
	</div>
	</div>
	</div>';
?>