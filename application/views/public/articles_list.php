<?php
include "publicheader.php";
?>
<div class="container">


<table class="table table-stript table-hover tbl" >
	<thead >
		<tr>
			<th>
				Sr_no
			</th>

			<th>
				Articles-title
			</th>
		
		<th>
				Articles
			</th>
		
		</tr>
	</thead>
<?php
//$sr = 1;
$srno='';
 if(count($article) > 0){
   $srno=$this->uri->segment(3,0);
       foreach ($article as $art) {
         //$sr=1;
       	?>
    <tr>
    <td><?php echo ++$srno ; ?></td>
	
 <td><?php echo $art->title; ?></td>
<td><?php echo $art->body; ?></td>

    </tr>
 	  
       	<?php
       	# code...
 //	$sr=$sr+1;
      

       }
 //	$sr=$sr+1;
      
       	
} 
else{

	echo "no data found";
}?>
	
</table>

 <?php echo $this->pagination->create_links(); ?>

	<div >

<?php 
include "publicfooter.php";
?>