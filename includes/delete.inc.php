<?php

include_once 'dbh.inc.php';


$id = $_GET['delete_id'];

$sql = "DELETE FROM form WHERE id = '$id' ;";
$result = mysqli_query($connection , $sql);
if(!$result){
    header("location: ../index.php?error=FailedDeletion");
    exit();
}
else{
    header("location: ../add.php?error=SuccessDeletion");

}


