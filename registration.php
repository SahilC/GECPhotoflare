<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="robots" content="index, follow" />
		<meta name="keywords" content="photoflare,&quot;photoflare2013&quot;,pcgec,photography,click,goa,engineering,college,festival,competition,event,fest,&quot;college festival&quot;,engicos,ponda,gec" />
		<meta name="language" content="en-GB" />
		<meta name="description" content="Photoflare is an annual photography festival organised by the Photography Club of GEC,Goa Engineering College, Ponda, Goa. Photoflare 2013 will be held on 21st-22nd April 2013 at Sunaparanta Goa Centre for The Arts, Altinho, Panaji, Goa. " />
  
		<title>Photoflare 2013 | The International Photography Festival</title>
		<link rel="shortcut icon" href="favicon.ico">
		<link rel="stylesheet" href="css/style2.css" type="text/css" media="screen" title="no title" charset="utf-8" />
		<link rel="stylesheet" href="assets/css/styles.css" />
		<script src="js/jquery.js"></script>
		<script src="js/lightbox.js"></script>
		<script src="js/jquery-ui-1.8.18.custom.min.js" type="text/javascript" charset="utf-8"></script>
		<style type="text/css">
#header {
    height:100%;
    background-color: #fff;
}
#header2 {
    height:70%;
}
#floating{
	width:100%;
    height:8%;
    background:#fff;
    position:fixed;
    top:0;
    z-index:10;
    -webkit-box-shadow: 0px 0px 5px 2px rgba(0,0,0,0.5);
    -moz-box-shadow: 0px 0px 5px 2px rgba(0,0,0,0.5);
    box-shadow: 0px 0px 5px 2px rgba(0,0,0,0.5);
}
#floating1 {
	width:100%;
    height:10%;
    background:#fff;
    position:fixed;
    top:0;
    z-index:10;
    font-size: 78%;
	-webkit-box-shadow: 0px 0px 5px 2px rgba(0,0,0,0.5);
    -moz-box-shadow: 0px 0px 5px 2px rgba(0,0,0,0.5);
    box-shadow: 0px 0px 5px 2px rgba(0,0,0,0.5);
}
#floating1 img{
	width:6.5%;
	height:145%;
	position: absolute;
	left:46%;
	top:-10%;
}

#floating1 ul li{
	display:inline;
	text-align: left;
    float: left;
    list-style: none;
    padding: 1% 2% 1% 2%;
}

#right{
	position: relative;
	left:31%;
	top:16%;
	width:auto;
}
#left{
	position: relative;
	left:15%;
	top:16%;
	width:auto;
}
		</style>
		<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>-->
		<script type="text/javascript">
		$( document ).ready( function() {
            var $body = $('body'); //Cache this for performance

            var setBodyScale = function() {
                var scaleSource = $body.width(),
                    scaleFactor = 0.10,                     
                    maxScale = 600,
                    minScale = 30; //Tweak these values to taste

                var fontSize = scaleSource * scaleFactor; //Multiply the width of the body by the scaling factor:

                if (fontSize > maxScale) fontSize = maxScale;
                if (fontSize < minScale) fontSize = minScale; //Enforce the minimum and maximums

                $('body').css('font-size', fontSize + '%');
            }

            $(window).resize(function(){
                setBodyScale();
            });

            //Fire it when the page first loads:
            setBodyScale();
        });
        </script>
	</head>
	<body>
		<div id="floating1">
  			<div id="left">
				<ul>
					<li class="list"><a href="index.html#home">home</a></li>
					<li class="list"><a href="index.html#competition">competition</a></li>
					<li><a href="index.html#expo">expo</a></li>
				</ul>
			</div>
			<img src="images/pflare_small.png"/>
			<div id="right">
				<ul>
					<li class="list"><a href="index.html#sponsors">sponsors</a></li>
					<li class="list"><a href="index.html#about">about</a></li>
					<li><a href="index.html#contacts">contacts</a></li>
				</ul>
			</div>
  		</div>
		<div>
  			<div id='reg' class="page">
  				<div class="content">
  				<h1 id="comp">registration</h1>
				<span style="position:absolute;top:12%;left:24%;color:#bbb;font-size:80%">Before submitting your entries, have a look at the <a href="media/rulebook.pdf">Rulebook</a></span>
				<div id="form">
					<form method="post" style="color:#aaa" enctype="multipart/form-data">
						<span class="hea">Name</span>
						<input type="text" name="name" id='name' value="" onfocus="clearR(this)" onblur="chck(this)"/><br/>
						<span class="hea">Email</span>
						<input type="text" name="email" id='email' value="" onfocus="clearR(this)" onblur="chck(this)"/><br/>
						<span class="hea">Address</span>
						<input type="text" name="address" id='add' value="" onfocus="clearR(this)" onblur="chck(this)"/><br/>
						<span class="hea">Phone</span>
						<input type="text" name="phone" id='phone' value="" onfocus="cle(this)" onblur="chck(this)"/><br/>
						
						
						Where did you hear about us?<br/>
						<select name="whr" onchange="if (this.selectedIndex==4){this.form['box'].style.visibility='visible'}else {this.form['box'].style.visibility='hidden'};">
							<option value="twtr">Twitter</option>
							<option value="fb">Facebook</option>
							<option value="gplus">Google+</option>
							<option value="posters">Posters</option>
							<option value="other">Others</option>
						</select><br/>
						<input style="visibility:hidden;" type="text" name="box"><br/>
						Theme<br/>
						<select id="zyx" name="theme" >
							<option value="dreams">in my dreams</option>
							<option value="forgotten">forgotten</option>
							<option value="noise">noise</option>
						</select><br/>
						<p id="xyz" style="display:none;position:relative;top:10%">Mail entry details along with a link to video, and images of making of the video to submit@gecphotoflare.org</p>
						<div id="dropbox">
							<span class="message">Drop images here to upload. <br /></span>
						</div>
						<input type="submit" name="submit" value="submit" onclick="javascript:xyz()"/><br/>
						<input style="visibility:hidden;" type="text" id="image0" name="image0" value=""/><br/>
						<input style="visibility:hidden;" type="text" id="image1" name="image1" value=""/><br/>
						<input style="visibility:hidden;" type="text" id="image2" name="image2" value=""/><br/>
						<input style="visibility:hidden;" type="text" id="image3" name="image3" value=""/><br/>
						<input style="visibility:hidden;" type="text" id="image4" name="image4" value=""/><br/>
					</form>
					<span style="position:absolute;top:71%;left:24%;color:#bbb;font-size:70%">If you have any queries, feel free to contact us at <span style="color:#aaa">photographygec@gmail.com</span></span>
</div>
</div>
</div>
 </div>
</body>
</html>
<script type="text/javascript">
    function clearR(target){
	target.style.border="1px solid #acf";
        target.value= "";
    }
    function cle(target){
	target.style.border="1px solid #acf";
    }
    function xyz()
    {
	if(document.getElementById('name').value==''||document.getElementById('add').value==''||document.getElementById('email').value==''||document.getElementById('phone').value=='')
		{
			alert('Error in form exist. Please correct them, and try again');
		}
		else
		{
			alert("Entry Received!!");
		}
    }
    function chck(tar){
	if(tar.value==""||tar.value==null){
		tar.style.border='1px solid red';
		alert(tar.name+' field cannot be left empty!!');
		}
	if(tar.name=="email")
	{
		var x=tar.value;
		var atpos=x.indexOf("@");
		var dotpos=x.lastIndexOf(".");
		if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
		{
			alert("Invalid e-mail address entered.");
			tar.style.border='1px solid red';
			return false;
		}
	}
	if(tar.name=="phone")
	{
		var phoneno = tar.value;  
		if(isNaN(phoneno) || phoneno.indexOf(" ")!=-1)  
		{    
			alert("Invalid phone number entered.");
			tar.style.border='1px solid red';	
			return false;
		}    
	}
    }
</script>
<script src="assets/js/jquery.filedrop.js"></script>
<script src="assets/js/script.js"></script>
<?php
	if(isset($_POST['name'])&&isset($_POST['email'])&&isset($_POST['address'])&&isset($_POST['phone']))
	{
		$db=mysql_connect('localhost','gecphoto_su','awesomeness');
		mysql_select_db('gecphoto_work',$db);
		mysql_query('insert into details(`name`,`address`,`phone`,`email`,`where`) values("'.$_POST['name'].'","'.$_POST['address'].'","'.$_POST['phone'].'","'.$_POST['email'].'","'.$_POST['whr'].'")');	
		$i=0;
		while(isset($_POST['image'.$i])){
		if(strcmp($_POST['image'.$i],"")!=0)
		mysql_query('insert into entries(`name`,`theme`,`image`) values("'.$_POST['name'].'","'.$_POST['theme'].'","'.$_POST['image'.$i].'")');
		$i=$i+1;
		}		
	}
?>
