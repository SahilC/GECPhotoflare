<?php 
 $target = "upload";
 $target = $target ."/".$_POST['name']."/";
 mkdir($target,0777) ; 
 $target = $target . basename( $_FILES['file']['name']) ; 
 $ok=1; 
 if(move_uploaded_file($_FILES['file']['tmp_name'], $target)) 
 {
 echo "The file ". basename( $_FILES['file']['name']). " has been uploaded to ".$target;
 } 
 else {
 echo "Sorry, there was a problem uploading your file.";
 }
 ?> 