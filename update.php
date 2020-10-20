<?php 

include_once 'header.php';
include_once 'includes/dbh.inc.php';
include_once 'includes/functions.inc.php';



if(isset($_POST['update'])){
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $lname = $_POST['lname'];
    $province = $_POST['province'];
    $district = $_POST['district'];
    $city = $_POST['city'];
    $chowk = $_POST['chowk'];
    $street = $_POST['street'];
    $code = $_POST['code'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $id = $_POST['id'];
    if(emptyFields($fname , $mname , $lname , $province , $district , $city , $chowk ,
                    $street , $code , $phone , $email) ){

         header("location: add.php?error=emptyFieldsCannotUpdate");
         exit();               

     } 


    $sql = "UPDATE form SET First_Name = '$fname'     , Middle_Name = '$mname' , Last_Name = '$lname' , Province = '$province'  ,District = '$district' ,City = '$city'
         , Chowk = '$chowk' , Street_Name = '$street'  , Country_Code = '$code' , Phone_Number = '$phone' , Email = '$email' WHERE id = '$id' ;";

         $result = mysqli_query($connection , $sql);

        if(!$result){
            header("location: add.php?error=errorUpdating");
            exit();
        }
        else{
            header("location: add.php?error=successUpdating");
        }
 

    }


$update_id = $_GET['update_id'];
$sql = "SELECT * FROM form WHERE id = $update_id;";

$result = mysqli_query($connection , $sql);
$row = mysqli_fetch_assoc($result);

 $ofname = $row['First_Name'];
 $omname = $row['Middle_Name'];
 $olname = $row['Last_Name'];
 $oprovince = $row['Province'];
 $odistrict = $row['District'];
 $ocity = $row['City'];
 $ochowk = $row['Chowk'];
 $ostreet = $row['Street_Name'];
 $ocode = $row['Country_Code'] ;
 $ophone = $row['Phone_Number'];
 $omail = $row['Email'];

 

    include_once 'form-part-update.php'; 
   
    include_once 'footer.php';

?>





