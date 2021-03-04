
<?php
include "publicheader.php";
?>

 <div class="container navWidth">
 
 
 <?php echo form_open('login/adminlogin');
 //form_open(controller_name/function_name );
  ?>
    <div class="form-group">
      <label for="usr">Name:</label>
    <!--  <input type="text" class="form-control" id="name" name="name"  placeholder="Enter Your Name"required> -->
    <?php echo form_input(['type'=>'text','name'=>'uname', 'class'=>'form-control','placeholder'=>'enter your name']); ?>
    </div>
   

 <div class="form-group">
      <label for="usr">Email:</label>

  <!--  <input type="email" class="form-control" id="email" name="email"  placeholder="Enter Your Email"required> -->
     <?php echo form_input(['type'=>'email','name'=>'email', 'class'=>'form-control','placeholder'=>'enter your email']); ?>
  
    </div>
<div class="form-group">
      <label for="usr">Age:</label>
     <!-- <input type="text" class="form-control" id="age" name="age" placeholder="Enter Your Age" required>-->
      <?php echo form_input(['type'=>'text','name'=>'age', 'class'=>'form-control','placeholder'=>'enter your age']); ?>
  
    </div>
<div class="form-group">
      <label for="usr">Password:</label>
    <!--  <input type="password" class="form-control" id="pass" name="pass"  placeholder="Enter Your Password"required>
    -->
     <?php echo form_input(['type'=>'password','name'=>'password', 'class'=>'form-control','placeholder'=>'enter your password']); ?>
  
    </div>
   

<!-- <center> <button type="submit" class="btn btn-info btn-block" name="submit" >Submit</button></center>-->
 <!--<center> <button type="reset" class="btn btn-info btn-block ab" name="submit" >Cancel</button></center> -->
<?php echo form_submit(['name'=>'submit' , 'value'=>'Login' , 'class'=>'btn btn-info btn-block']) ; ?>

<?php echo form_reset(['name'=>'reset' , 'value'=>'Cancel' , 'class'=>'btn btn-info btn-block ab']) ; ?>

</form>
</div>

<?php 
include "publicfooter.php";
?>