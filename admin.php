<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="robots" content="index, follow" />
		<meta name="keywords" content="photoflare,&quot;photoflare2013&quot;,pcgec,photography,click,goa,engineering,college,festival,competition,event,fest,&quot;college festival&quot;,engicos,ponda,gec" />
		<meta name="language" content="en-GB" />
		<meta name="description" content="PhotoFlare is an annual photography festival organised by the Photography Club of GEC,Goa Engineering College, Ponda, Goa. PhotoFlare 2013 will be held on 10th-11th May 2013 at Kala Academy, Panaji, Goa. " />
  
		<title>PhotoFlare 2013 | The International Photography Festival</title>
		<link rel="shortcut icon" href="favicon.ico">
</head>
<body>
	<?php
		$db=mysql_connect("localhost","gecphoto_su","awesomeness") or die("Unable to connect");	
		mysql_select_db("gecphoto_work",$db) or die("error");
		$result=mysql_query("select * from details");
		$i=0;
		while($row=mysql_fetch_array($result))
		{
			echo '<a style="text-decoration:none" href="view.php?name='.$row['id'].'">'.$row['name'].'               '.$row['email'].'               '.$row['phone'].'</a><br/>';
			$i=$i+1;
		}
		echo 'Number of entries received:'.$i.'<br/>';
	?>
</body>
</html>