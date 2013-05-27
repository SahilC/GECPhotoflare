<?php
	$db=mysql_connect("localhost","gecphoto_su","awesomeness") or die("Unable to connect");
	echo "connected<br/>";	
	mysql_select_db("gecphoto_work",$db) or die("error");
	$result=mysql_query("select * from test");
	while($row=mysql_fetch_array($result))
	{
		echo $row['id'].'<br/>';
	}
?>