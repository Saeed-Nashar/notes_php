<?php
include "../connect.php";

$id_note=functionRequest("id");
$imagename=functionRequest('imagename');
$stmt=$con->prepare(
    "DELETE FROM  `notes` WHERE notes_id=? ");
 $stmt->execute(array($id_note));
 $count=$stmt->rowCount();

 if($count>0){
   deleteFile('../upload',$imagename);
    echo json_encode(array("status"=>"success"));
 }else{
    echo json_encode(array("status"=>"fail"));
 }
?>