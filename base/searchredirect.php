<?php 
	if(isset($_GET['s']) && $_GET['s'] != '') {
		header('Location: https://www.sunfrog.com/search/?56846&search='.$_GET["s"].'&innotshirt.com');
	}
?>