<div class=" row" style="padding:1% 0;">
	<div class="col-md-11">
	
		<a class="btn btn-primary pull-right"  href="<?php echo site_url('site/createpost'); ?>"><i class="icon-plus"></i>Create </a> &nbsp; 
	</div>
	
</div>
<div class="row">
	<div class="col-lg-12">
		<section class="panel">
			<header class="panel-heading">
                Post Details
            </header>
			<table class="table table-striped table-hover fpTable lcnp" cellpdesignering="0" cellspacing="0" width="100%">
			<thead>
				<tr>
					<!--<th>Id</th>-->
					<th>User</th>
					<th>Text</th>
<!--					<th>Type</th>-->
					<th>Total Share</th>
					<th>Designer</th>
					<th>Timestamp</th>
					<th>Image</th>
					<th> Actions </th>
				</tr>
			</thead>
			<tbody>
			   <?php foreach($table as $row) { ?>
					<tr>
						<!--<td><?php echo $row->id;?></td>-->
						<td><?php echo $row->firstname." ".$row->lastname;?></td>
						<td><?php echo $row->text;?></td>
<!--						<td><?php echo $row->type;?></td>-->
						<td><?php echo $row->totalshare;?></td>
						<td><?php echo $row->designername;?></td>
						<td><?php echo $row->timestamp;?></td>
						<td><img src="<?php echo base_url('uploads')."/".$row->image; ?>" width="70px" height="auto"></td>
						
						
						<td>
						<a href="<?php echo site_url("site/changepostapprove?id=$row->id&change=");
                           if($row->approve=='1')
                           {
                               echo 0;
                           }
                           else
                           {
                               echo 1;
                           }
                    ?>"  class="btn <?php
                                if($row->approve=='1')
                                {
                                    echo "btn-success";
                                }
                                              else
                                              {
                                                  echo "btn-danger";
                                              }
                                ?>">
                                <?php
                                if($row->approve=='1')
                                {
                                    echo "Approved";
                                }
                                              else
                                              {
                                                  echo "Need Approval";
                                              }
                                ?>
                                
                                </a>
							<a href="<?php echo site_url('site/editpost?id=').$row->id;?>" class="btn btn-primary btn-xs">
								<i class="icon-pencil"></i>
							</a>
							<a href="<?php echo site_url('site/deletepost?id=').$row->id; ?>" class="btn btn-danger btn-xs" onclick="return confirm('Are you sure you want to delete this item?');">
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