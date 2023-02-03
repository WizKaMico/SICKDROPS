<!-- Edit -->
<div class="modal fade" id="edit_<?php echo $row['cid']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">PAY ORDER : <?PHP echo strtoupper($row['oid']); ?></h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="add.php">
				<input type="hidden" class="form-control" name="user_id" value="<?php echo $row['user_id']; ?>">
				<input type="hidden" class="form-control" name="code" value="<?php echo $row['oid']; ?>">
				<input type="hidden" class="form-control" name="email" value="<?php echo $row['email']; ?>">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">OPTION</label>
					</div>
					<div class="col-sm-10">
						<select class="form-control" name="bank_name"  id='purpose'>
						<option value="BPI">BPI</option>
						<option value="UNIONBANK">UNIONBANK</option>
						<option value="METROBANK">METROBANK</option>
						</select>
					</div>
				</div>

					<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">NAME#</label>
					</div>
					<div class="col-sm-10">
					    <input type="text" name="card_name" class="form-control" required>
					</div>
				</div>


					<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">CARD#</label>
					</div>
					<div class="col-sm-10">
					    <input type="number" name="card_number" class="form-control" required>
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">CVV#</label>
					</div>
					<div class="col-sm-10">
					    <input type="number" name="cvv" class="form-control" required>
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">EXP#</label>
					</div>
					<div class="col-sm-10">
					    <input type="text" name="exp" class="form-control" required>
					</div>
				</div>


			
				
			
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <button type="submit" name="proceed" class="btn btn-success" style="background-color:#421714; border-color:#421714;"><span class="glyphicon glyphicon-check"></span> PROCEED</a>
			</form>
            </div>

        </div>
    </div>
</div>







<!-- Edit -->
<div class="modal fade" id="pay_<?php echo $row['cid']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">PAY ORDER : <?PHP echo strtoupper($row['oid']); ?></h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="update.php">
				<input type="hidden" class="form-control" name="user_id" value="<?php echo $row['user_id']; ?>">
				<input type="hidden" class="form-control" name="code" value="<?php echo $row['oid']; ?>">
				<input type="hidden" class="form-control" name="email" value="<?php echo $row['email']; ?>">
				<input type="hidden" class="form-control" name="final_amount" value="<?php echo $row['final_amount']; ?>">
				


					<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">CODE#</label>
					</div>
					<div class="col-sm-10">
					    <input type="number" name="ecode" class="form-control" required>
					</div>
				</div>



			
				
			
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <button type="submit" name="proceed" class="btn btn-success" style="background-color:#421714; border-color:#421714;"><span class="glyphicon glyphicon-check"></span> CONFIRM</a>
			</form>
            </div>

        </div>
    </div>
</div>