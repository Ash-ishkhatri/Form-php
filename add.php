<?php

include_once 'header.php';
include_once 'includes/dbh.inc.php';
include_once 'includes/functions.inc.php';


if(isset($_POST['add'])){
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

    if(emptyFields($fname , $mname , $lname , $province , $district , $city , $chowk ,
 $street , $code ,$phone , $email)){
          
        header("location: add.php?error=emptyFields");
         exit();               

     }

     $sql = "INSERT INTO form(First_Name, Middle_Name , Last_Name, Province  ,District  ,City
                  , Chowk ,Street_Name  , Country_Code , Phone_Number ,Email) VALUES (? , ? ,? , ? ,? , ? ,? , ? ,? , ?,? )";

    $stmt = mysqli_stmt_init($connection);
     
     if(!mysqli_stmt_prepare($stmt , $sql)){
         header("location: index.php?error=stmtFailed");
         exit();
     }

     mysqli_stmt_bind_param($stmt , "ssssssssiss" , $fname , $mname , $lname , $province , $district , $city , $chowk ,
     $street , $code , $phone , $email);

     mysqli_stmt_execute($stmt);
     mysqli_stmt_close($stmt);
     header("location: add.php?error=none");

    }

    
    include_once 'table.php';
?>


<?php 
     $Message = $_GET['error'];
     if($Message == "emptyFields"){  ?>
         <h4 style="text-align:center;  color:red; padding-top:10px; opacity:0.6;"> FAILED TO ADD! </h4>
         <h4 style="text-align:center;  color:red; padding-top:10px; opacity:0.6;"> FILL OUT THE FORM COMPLETELY </h4>
     <?php }

   
    else if($Message == "emptyFieldsCannotUpdate"){  ?>
    <br><br>
         <h2 style="text-align:center;  color:red; padding-top:10px; opacity:0.6;"> FAILED TO Update! </h2>
                 
    <?php }

    else if($Message == "SuccessDeletion"){  ?>
        <h2 style="text-align:center;  color:red; padding-top:10px; opacity:0.6;"> Successfully Deleted! </h2>
        

  <?php   } 
    
    include_once 'form-part.php';
    

?>

<?php

include_once 'footer.php';

?>

   


