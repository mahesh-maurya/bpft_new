<div class=" row" style="padding:1% 0;">
	<div class="col-md-11">
	
		<a class="btn btn-primary pull-right"  href="<?php echo site_url('site/createuserpostshare'); ?>"><i class="icon-plus"></i>Create </a> &nbsp; 
	</div>
	
</div>
<div class="row">
	<div class="col-lg-12">
		<section class="panel">
			<header class="panel-heading">
                userpostshare Details
            </header>
			<table class="table table-striped table-hover fpTable lcnp" cellpdesignering="0" cellspacing="0" width="100%">
			<thead>
				<tr>
					<!--<th>Id</th>-->
					<th>User</th>
					<th>Post</th>
					<th>Share On</th>
					<th>Timestamp</th>
					<th> Actions </th>
				</tr>
			</thead>
			<tbody>
			   <?php foreach($table as $row) { ?>
					<tr>
						<!--<td><?php echo $row->id;?></td>-->
						<td><?php echo $row->firstname." ".$row->lastname;?></td>
						<td><?php echo $row->post;?></td>
						<td><?php if(($row->shareon)==1){ echo "Facebook";} else{ echo "Twitter";}?></td>
						<td><?php echo $row->timestamp;?></td>
						<td>
							<a href="<?php echo site_url('site/edituserpostshare?id=').$row->id;?>" class="btn btn-primary btn-xs">
								<i class="icon-pencil"></i>
							</a>
							<a href="<?php echo site_url('site/deleteuserpostshare?id=').$row->id; ?>" class="btn btn-danger btn-xs" onclick="return confirm('Are you sure you want to delete this item?');">
								<i class="icon-trash "></i>
							</a> 
						
						</td>
					</tr>
					<?php } ?>
			</tbody>
			</table>
		</section>
	</div>
</div>