

<?php 
    $sql = "SELECT * FROM form;";
    $result =  mysqli_query($connection , $sql);

    if(mysqli_num_rows($result)<=0){  ?>
 
       <h3 style="text-align:center; font-family:Arial; color:red; padding-top:10px; opacity:0.6;"> NO DATA ENTERED YET! </h3>
       <br><br><br>
    <?php }
    else {   ?>
       <h3 style="text-align:center; font-family:Arial; color:green; padding-top:10px; opacity:0.6;"> AVAILABLE DATA </h3>

     <table class="table">
     <tr>
         <th>id</th>
         <th>First name</th>
         <th>Middle name</th>
         <th>Last name</th>
         <th>Province</th>
         <th>District</th>
         <th>City</th>
         <th>Chowk</th>
         <th>Street</th>
         <th>country Code</th>
         <th>Phone number</th>
         <th>Email ID</th>
     </tr>
   <?php $i = 1;
    while($row = mysqli_fetch_assoc($result) ){  

        ?>
        <tr>
        <td>  <?php echo  $i ;  ?> </td>
        <td> <?php echo $row['First_Name']; ?> </td>
        <td> <?php echo $row['Middle_Name']; ?> </td>
        <td> <?php echo $row['Last_Name']; ?> </td>
        <td> <?php echo $row['Province']; ?> </td>
        <td> <?php echo $row['District']; ?> </td>
        <td> <?php echo $row['City']; ?> </td>
        <td> <?php echo $row['Chowk']; ?> </td>
        <td> <?php echo $row['Street_Name']; ?> </td>
        <td> <?php echo $row['Country_Code'] ;?> </td>
        <td> <?php echo $row['Phone_Number']; ?> </td>
        <td> <?php echo $row['Email']; ?> </td>
        <td class="button-box"><a href = "update.php?update_id=<?php echo $row['id']; ?>"><button>update</a></button></td>
        <td class="button-box"><a href = "includes/delete.inc.php?delete_id=<?php echo $row['id']; ?>" ><button>delete</a></button></td>
       <?php $i++;  ?>
        </tr>

       

  <?php   }  ?>
  </table>

  <?php } ?>
