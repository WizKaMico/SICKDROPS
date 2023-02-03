<!-- Edit -->
<div class="modal fade" id="edit_<?php echo $row['oid']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel"> Order</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="edit.php">
				<input type="hidden" class="form-control" name="oid" value="<?php echo $row['oid']; ?>">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Status:</label>
					</div>
					<div class="col-sm-10">
						<select class="form-control" name="status">
							<option value="ACCEPTED">ACCEPTED</option>
							<option value="REJECTED">REJECTED</option>
						</select>
					</div>
				</div>
			
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Final Amount:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="final_amount" required>
					</div>
				</div>
				
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <button type="submit" name="edit" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Update</a>
			</form>
            </div>

        </div>
    </div>
</div>
