<?php
include "../connect.php";

$title=functionRequest("title");
$content=functionRequest("content");
$id_note=functionRequest("id");
$stmt=$con->prepare(
    "UPDATE `notes` SET `notes_title`=?, `notes_content`=?
     WHERE notes_id =?   "
);
 $stmt->execute(array($title,$content,$id_note));
 $count=$stmt->rowCount();

 if($count>0){
    echo json_encode(array("status"=>"success"));
 }else{
    echo json_encode(array("status"=>"fail"));
 }
?>