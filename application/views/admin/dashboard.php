
	<?php 
include_once "adminheader.php";
?>
<div class="container" style="padding-top: 70px;">
	<div class="row "><div class="col-lg-3  ">
		
<?= anchor('admin/store_article','Add Article',['class'=>'btn btn-lg btn-primary']) ?>
		</div>
  <?php if($error=$this->session->flashdata('feedback')):?>
    <div class="col-lg-4 col-lg-offset">
        <div class="alert alert-dismissible alert-danger">
        <center>  <?= $error ?> </center>
        </div>
        <?php endif; ?>
 
</div>

	<table class="table">
		<thead><tr>
			

			<th>Sr.no.</th>
			<th>Title</th>
			<th>Action</th>
		</tr>
			
		</thead>
		<tbody>
			<?php   if( count($article) ): 

			$count=$this->uri->segment(3,0);
			 	foreach ($article as $art): ?>
				
			<tr>
				<td><?php echo ++$count ?></td>
						<td><?= $art->title; ?></td>
								<td><a href='editarticles? id=<?php echo $art->id; ?>' class="btn btn-primary">Edit</a>|<a href="deletearticles? id=<?php echo $art->id; ?>" class="btn btn-danger">Delete</a> </td><td><?php echo $art->id; ?></td>
				
			</tr>
			<?php  endforeach; ?>
	<?php else: ?>
		<tr><td colspan="3">No record found</td></tr>
	<?php endif; ?>

		</tbody>
	</table>
	<?= $this->pagination->create_links() ?>
</div>


<?php 
include_once "adminfooter.php";
?>
