<div class="content-wrapper">
	<div class="page-container">
		<div class="box">
			<h3>Category <a href="javascript::" class="btn btn-primary pull-right" data-toggle="modal" data-target="#myModal">Add new Category</a></h3>
			<div class="table-responsive">
				<table class="table table-striped table-bordered table-hover example">
					<thead>
					<tr>
						<th>#</th>
						<th>Name</th>
						<th>Status</th>
						<th>Action</th>
					</tr>
					</thead>
					<tbody>
					<tr class="odd gradeX">
						<td>1</td>
						<td>Medium</td>
						<td><input type="checkbox" name="status"></td>
						<td class="align-center">
							<a href="javascript::" class="btn btn-danger"> Delete</a>
							<a href="javascript::" class="btn btn-warning"> Edit</a>
						</td>
					</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
	<div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Add New Category</h4>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<div class="modal-body">
				<form action="<?php echo base_url().'index.php/school/category'?>" id="add_category">
					<div class="form-group">
						<label >Enter category Name</label>
						<input type="text" name="Name" required="required" class="form-control" id="category" placeholder="Enter Category Name">
					</div>
					<button type="submit" class="btn btn-primary">Submit</button>
				</form>
			</div>
			<div class="modal-footer">
			</div>
		</div>

	</div>
</div
