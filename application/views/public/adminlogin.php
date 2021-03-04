
<?php
include "publicheader.php";
?>

 <div class="container-fluid navWidth">
 <?php echo form_open('login/adminlogin');
 //form_open(controller_name/function_name );
  ?>
    
  <?php if($error=$this->session->flashdata('login_failed')):?>
    <div class="col-lg-6">
        <div class="alert alert-dismissible alert-danger">
          <?= $error ?>
        </div>
        <?php endif; ?>
  <div class='row'>
    <div class="col-lg-6">
    <div class="form-group">
      <label for="usr">Name:</label>
    <!--  <input type="text" class="form-control" id="name" name="name"  placeholder="Enter Your Name"required> -->
    <?php echo form_input(['type'=>'text','name'=>'uname', 'class'=>'form-control','placeholder'=>'enter your name' , 'value'=>set_value('uname')]); ?>
    </div>
   </div>
   <div class="col-lg-6">
    <?php
    echo form_error('uname');
    ?>
    </div>

 </div>
 <div class='row'>
    <div class="col-lg-6">

<div class="form-group">
      <label for="usr">Password:</label>
    <!--  <input type="password" class="form-control" id="pass" name="pass"  placeholder="Enter Your Password"required>
    -->
     <?php echo form_input(['type'=>'password','name'=>'upass', 'class'=>'form-control','placeholder'=>'enter your password' ]); ?>
  
    </div>
  </div>
  <div class="col-lg-6">
 
    <?php
    echo form_error('upass','<p class="tt">','</p>');
    ?> </div>
  
 
    <div class="col-lg-6 div1">
  <!--<center> <button type="reset" class="btn btn-info btn-block ab" name="submit" >Cancel</button></center> -->
<?php echo form_submit(['name'=>'submit' , 'value'=>'Login' , 'class'=>'btn btn-info ']) ; ?>

<?php echo form_reset(['name'=>'reset' , 'value'=>'Cancel' , 'class'=>'btn btn-info  ab']) ; ?>

</div>
</center>
</form>
</div>
<?php
//echo validation_errors();
?>
<div>
<?php 
include "publicfooter.php";
?>
</div>


