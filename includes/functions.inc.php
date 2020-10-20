<?php




function emptyFields($fname , $mname , $lname , $province , $district , $city , $chowk ,
$street , $code , $phone , $email){

    $result;
    if(empty($fname) || empty($mname) || empty($lname) || empty($province) || empty($district) || empty($city) ||empty($chowk) || empty($street) || empty($code) || empty($phone) ||empty($email) )
    {
        $result=true;
    }
    else{
        $result = false;
    }
    return $result;

}

