<form class="form-box" action = "add.php" method="post"> 
     
     <div class="logo"><div class="innerlogo"><div class="innermost"></div></div></div>
     <div class="title">BLACK DOT</div>
     <div class="sub-title">FORM</div>
    
     <div class="fields">
     <label class="topics">Full Name</label><span class="astrix">*</span>
        
        
         <div class="name">
             <div >
                 <input type="text"  class="fname" name="fname" placeholder="Ram" >
                 <label>First name</label>
             </div>
             <div >
                 
                 <input type="text"  class="middle_name" name="mname" placeholder="Singh">
                 <label>Middle name</label>
             </div>
             <div>
                 
                 <input type="text"  class="lname" name="lname" placeholder="Thakur">
                 <label>Last name</label>
             </div>
         </div>


         
       <br><br>
         <label class="topics">Address<span class="astrix">*</span></label>
             <div class="address">
           
                  <div>
                 <input type="text"  id="Province" name="province" placeholder="5">
                 <label>Province no</label>
                 </div>

                 <div>
                 <input type="text"  id="District" name="district" placeholder="Rupandehi">
                 <label>District</label>   
                 </div>

                 <div>
                 <input type="text"  id="city" name="city" placeholder="Butwal">
                 <label>City</label>   
                 </div>
                
                 <div>
                 <input type="text"  id="Chowk" name="chowk" placeholder="Nayagaun">
                 <label>Chowk</label>
                 </div>
                
                 <div>
                 <input type="text"  id="street" name="street" placeholder="Lakhan path">
                 <label>street name</label>
                 </div>
             </div>



             <br><br>
         <label class="topics">Others<span class="astrix">*</span></label>
            
             <div class="phone_number">
                 <div>
                     <input type="text"  id="code" name="code" placeholder="977">
                     <label > Code</label>
                 </div>
                 <div>
                     <input type="text"  id="phone" name="phone" placeholder="9861234585">
                     <label>Phone number</label>
                 </div>

                 <div>
                     <input type="text"  id="mail" name="email" placeholder="example@gmail.com">
                     <label>Email</label>
                 </div>
            
             </div>
     
         
     </div>
     
    <input class="submit-button" type="submit" name= "add" value="Submit">
 </form>