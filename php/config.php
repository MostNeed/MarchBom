<?php
	$db_con = mysqli_connect("localhost", "ds6546", "vpswkf72!!");
	$db_select = mysqli_select_db($db_con,"ds6546");
	mysqli_query($db_con,"set names utf8");

	function db_close()
	{
		$db_close = mysqli_close($db_con);
	}
?>