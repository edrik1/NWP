<?php 
	
	if ($_SESSION['user']['valid'] == 'true') {
		if (!isset($action)) { $action = 1; }
		
		print '
		<div class="container" style=" padding: 16px; background-color: white;">
		<div class="row">
		<div class="col-sm-6">
		<h1>Administracija korisnika</h1>
		<div id="admin">
			<ul>
				<li><a href="index.php?menu=7&amp;action=1">Korisnici</a></li>
				<li><a href="index.php?menu=7&amp;action=2">News</a></li>
			</ul>';
			# Admin Users
			if ($action == 1) { include("admin/users.php"); }
			
			# Admin News
			else if ($action == 2) { include("admin/news.php"); }
		print '
		</div>
		</div>
		</div>
		</div>';
	}
	else {
		$_SESSION['message'] = '<p>Molom Vas da se registrirate ili prijavite s Vašim podacima!</p>';
		header("Location: index.php?menu=6");
	}
?>