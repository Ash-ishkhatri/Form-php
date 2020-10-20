<form class="form-box" action = "update.php" method="post"> 
     
     <div class="logo"><div class="innerlogo"><div class="innermost"></div></div></div>
     <div class="title">BLACK DOT</div>
     <div class="sub-title">FORM</div>
    
     <div class="fields">
     <label class="topics">Full Name</label><span class="astrix">*</span>
        
        
         <div class="name">
             <div >
                 <input type="text"  class="fname" name="fname" placeholder="Ram" value = "<?php echo $ofname; ?>">
                 <label>First name</label>
             </div>
             <div >
                 
                 <input type="text"  class="middle_name" name="mname" placeholder="Singh"value = "<?php echo $omname; ?>">
                 <label>Middle name</label>
             </div>
             <div>
                 
                 <input type="text"  class="lname" name="lname" placeholder="Thakur" value = "<?php echo $olname; ?>">
                 <label>Last name</label>
             </div>
         </div>


         
       <br><br>
         <label class="topics">Address<span class="astrix">*</span></label>
             <div class="address">
           
                  <div>
                 <input type="text"  id="Province" name="province" placeholder="5" value = "<?php echo $oprovince; ?>" >
                 <label>Province no</label>
                 </div>

                 <div>
                 <input type="text"  id="District" name="district" placeholder="Rupandehi" value = "<?php echo $odistrict; ?>">
                 <label>District</label>   
                 </div>

                 <div>
                 <input type="text"  id="city" name="city" placeholder="Butwal" value = "<?php echo $ocity; ?>">
                 <label>City</label>   
                 </div>
                
                 <div>
                 <input type="text"  id="Chowk" name="chowk" placeholder="Nayagaun" value = "<?php echo $ochowk; ?>">
                 <label>Chowk</label>
                 </div>
                
                 <div>
                 <input type="text"  id="street" name="street" placeholder="Lakhan path" value = "<?php echo $ostreet; ?>">
                 <label>street name</label>
                 </div>
             </div>



             <br><br>
         <label class="topics">Others<span class="astrix">*</span></label>
            
             <div class="phone_number">
                 <div>
                     <input type="text"  id="code" name="code" placeholder="977" value = "<?php echo $ocode; ?>">
                     <label > Code</label>
                 </div>
                 <div>
                     <input type="text"  id="phone" name="phone" placeholder="9861234585" value = "<?php echo $ophone; ?>">
                     <label>Phone number</label>
                 </div>

                 <div>
                     <input type="text"  id="mail" name="email" placeholder="example@gmail.com" value = "<?php echo $omail; ?>">
                     <label>Email</label>
                 </div>
                 
            
             </div>
             <input type="hidden"   name="id"  value = "<?php echo $update_id; ?>">
         
     </div>
     
    <input class="submit-button" type="submit" name= "update" value="Update">
 </form>