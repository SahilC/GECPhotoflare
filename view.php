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
		$id=$_GET['name'];
		$result=mysql_query("select name from details where id = ".$id);
		$i=0;
		while($row=mysql_fetch_array($result))
		{
			echo 'Name:'.$row['name'].'<br/>';
			$res=mysql_query("select * from entries where name like '".$row['name']."'");
			while($r=mysql_fetch_array($res))
			{
				echo 'Image:'.$r['image'].'<br/>';
				echo 'Theme:'.$r['theme'].'<br/>';
				echo '<img src="uploads/'.$r['image'].'" style="width:50%;height:50%"/><br/>';
			}
		}
	?>
</body>
</html>