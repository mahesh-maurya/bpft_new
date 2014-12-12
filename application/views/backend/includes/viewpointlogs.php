<div class=" row" style="padding:1% 0;">
	<div class="col-md-11">
	
		<a class="btn btn-primary pull-right"  href="<?php echo site_url('site/createpointlogs'); ?>"><i class="icon-plus"></i>Create </a> &nbsp; 
	</div>
	
</div>
<div class="row">
	<div class="col-lg-12">
		<section class="panel">
			<header class="panel-heading">
                Pointlogs Details
            </header>
			<table class="table table-striped table-hover fpTable lcnp" cellpdesignering="0" cellspacing="0" width="100%">
			<thead>
				<tr>
					<!--<th>Id</th>-->
					<th>User</th>
					<th>Point Type</th>
					<th>Timestamp</th>
				</tr>
			</thead>
			<tbody>
			   <?php foreach($table as $row) { ?>
					<tr>
						<!--<td><?php echo $row->id;?></td>-->
						<td><?php echo $row->firstname." ".$row->lastname;?></td>
						<td><?php echo $row->pointtypename;?></td>
						<td><?php echo $row->timestamp;?></td>
						
					</tr>
					<?php } ?>
			</tbody>
			</table>
		</section>
	</div>
</div>