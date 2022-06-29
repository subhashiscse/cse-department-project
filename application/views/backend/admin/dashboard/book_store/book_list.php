<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script>  
     $(document).ready(function(){  
          $('#listing').DataTable();  
    });  
	</script>
	<style>
	</style>
</head>
<body>	
	<div class="panel panel-flat">
		<div class="panel-heading">
			<h5 class="panel-title badge badge-info">Book List</h5>
			<?php echo $this->session->flashdata('msg'); ?>
			<a style="margin-left: 90%" href="<?php echo base_url('dashboard_admin/addBook') ?>" class="btn btn-primary"><span>Add New Book</span></a>
			<br>
		</div>
		<div class="panel-body">
			<table id="listing" class="table table-bordered table-dark">
				<thead>
					<tr>
						<th>Serial</th>
						<th>Book Name</th>
						<th>Book Writer Name</th>
						<th>Total Copy</th>
						<th>Remaining Copy</th>
						<th style="text-align: center;">Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
	                if($book_list){
	                	$Serial=0;
	                	foreach ($book_list->result() as $row) { $Serial++; ?>
    					<tr>
    						<td><?=$Serial?></td>
    						<td><?=$row->BookName ?></td>
    						<td><?=$row->BookWriterName ?></td>
    						<td><?=$row->NumberOfTotalCopy ?></td>
    						<td><?=$row->NumberOfRemainingCopy ?></td>
    						<td class="text-center">
    							<ul class="icons-list" >
    								<li class="dropdown">
    									<a href="#" class="dropdown-toggle" data-toggle="dropdown">
    										<i class="icon-menu9"></i>
    									</a>
    									<ul class="dropdown-menu dropdown-menu-right">
    										<li><a href="<?php echo base_url('dashboard_admin/editBook/'.$row->BookId); ?>"><i class="icon-file-excel"></i> Edit</a></li>
											<?php if($row->NumberOfRemainingCopy){ ?>
												<li><a href="<?php echo base_url('dashboard_admin/assignBook/'.$row->BookId); ?>"><i class="icon-file-excel"></i> Assign Book</a></li>
											<?php } ?>
											<?php if($row->NumberOfTotalCopy == $row->NumberOfRemainingCopy){ ?>
												<li><a onclick="return confirm('Are you sure you want to delete this ?');" href="<?php echo base_url('dashboard_admin/deleteBook/'.$row->BookId); ?>"><i class="icon-file-pdf"></i> Delete</a></li>
											<?php } ?>
    									</ul>
    								</li>
    							</ul>
    						</td>
    					</tr>
    				 <?php } 
	                }
	                else{
	                }
	                ?>			
				</tbody>
			</table>				
        </div>
    </div>
</body>
</html>