<?php
include "adminheader.php";
?>

 <div class="container ">

 <?php echo form_open('admin/update_article',['class'=>'form-horizontal']);
 //form_open(controller_name/function_name );
  ?>
    <fieldset><legend>Add Articles</legend>    <div class='row'>
       <?php if($error=$this->session->flashdata('feedback')):?>
     <div class="col-lg-6">
        <div class="alert alert-dismissible alert-danger">
          <?=$error
           ?>
        </div>
        <?php endif; ?>

  <?php echo form_input(['type'=>'hidden','name'=>'id', 'class'=>'form-control','placeholder'=>'enter Articles title' , 'value'=>set_value('title', $data->id)]); ?>
   
    <div class="col-lg-6">
    <div class="form-group">
      <label for="Article Title">Article Title:</label>
    <!--  <input type="text" class="form-control" id="name" name="name"  placeholder="Enter Your Name"required> -->
    <?php echo form_input(['type'=>'text','name'=>'title', 'class'=>'form-control','placeholder'=>'enter Articles title' , 'value'=>set_value('title', $data->title)]); ?>
    </div>
   </div>
   <div class="col-lg-6">
    <?php
    echo form_error('title');
    ?>
    </div>

 </div>
 <div class='row'>
    <div class="col-lg-6">

<div class="form-group">
      <label for="usr">Article Body:</label>
    <!--  <input type="password" class="form-control" id="pass" name="pass"  placeholder="Enter Your Password"required>
    -->
     <?php echo form_textarea(['type'=>'text','name'=>'article', 'class'=>'form-control','placeholder'=>'enter article Body' ,'value'=>set_value('article', $data->body) ]); ?>
  
    </div>
  </div>
    <div class="col-lg-6">
 
    <?php
    echo form_error('article');
    ?> </div>
  
 </div>

  
 
    <?php echo form_submit(['name'=>'submit' , 'value'=>'Update_Article' , 'class'=>'btn btn-info ']) ; ?>

<?php echo form_reset(['name'=>'reset' , 'value'=>'Cancel' , 'class'=>'btn btn-info  ab']) ; ?>


</center>
</form>
</div>
<?php
//echo validation_errors();
?>
<div>
<?php 
include "adminfooter.php";
?>



