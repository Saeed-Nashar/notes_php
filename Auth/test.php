<?php
//$filename="image.png";
//$str_end_arr=explode('.',$filename);
//$extension=end($str_end_arr);
 //$alloExt=array('jpg' ,'png','gif');
 //if(in_array($extension,$alloExt)){
  //  echo 'yes';
 //}else{
 //   echo 'No';
 //}
   include'../connect.php';
   imageUpload('file');
   $file=$_FILES['file'];
   echo'<pre>';
   print_r($file);
   echo'</pre>';


?>