<?php 
	print '
<div class="navbar-collapse collapse">
<ul class="nav navbar-nav">
		<li><a href="index.php?menu=1">Home</a></li>
		<li><a href="index.php?menu=2">Vijesti</a></li>
		<li><a href="index.php?menu=3">Kontakt</a></li>
		<li><a href="index.php?menu=4">O nama</a></li>';
		if (!isset($_SESSION['user']['valid']) || $_SESSION['user']['valid'] == 'false') {
			print '
			<li><a href="index.php?menu=5">Registracija</a></li>
			<li><a href="index.php?menu=6">Prijava</a></li>';
		}
		else if ($_SESSION['user']['valid'] == 'true') {
			print '
			<li><a href="index.php?menu=7">Admin</a></li>
			<li><a href="odjava.php">Odjava</a></li>';
		}
		print '
		<li><a href="index.php?menu=10">mojAPI</a></li>
		<li><a href="index.php?menu=11">moj(JSON)</a></li>
		<li><a href="https://www.hnb.hr/hnb-api" target="_blank">API moj (XML)</a></li>
		<li><a href="https://github.com/public-apis/public-apis" target="_blank">Free moj APIs</a></li>
	</ul>
</div>';
?>

