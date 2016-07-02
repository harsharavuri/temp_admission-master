
	
<?php ?>
		<!--<div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <strong id="status">Error:</strong>
        </div>-->
	<table class="verify_div table table-striped table-bordered" id="verify_columns">
		<thead>
			<tr>
				<td class="text-center" style="background-color:coral;color:white"><big><b>Field</b></big></td>
				<td class="text-center" style="background-color:coral;color:white"><big><b>Value</b></big> </td>
			</tr>
		</thead>
		<tbody>
            <tr>
			<td><span class="verify_text_table">Student ID</span></td><td><span class="verify_text_table"><?php echo $StudentID ?></span></td>
			</tr>
			<tr>
			<td><span class="verify_text_table">Payment Mode</span></td><td><span class="verify_text_table"><?php echo $PaymentMode ?></span></td>
			</tr>
			<tr>
			<td><span class="verify_text_table">Amount</span></td><td><span class="verify_text_table"><?php echo $Amount ?></span></td>
			</tr>
			<tr>
			<td><span class="verify_text_table">DD/UTR Number</span></td><td><span class="verify_text_table"><?php echo $DDUTRNumber ?> </span></td>
			</tr>
			<tr>
			<td><span class="verify_text_table">Student Account Number</span></td><td><span class="verify_text_table"><?php echo $StudentAccNumber ?></span></td>
			</tr>
			<tr>
			<td><span class="verify_text_table">Hosteler/DS</span></td><td><span class="verify_text_table"><?php echo $HostelerDS ?></span></td>
			</tr>
		</tbody>
	</table>
			
				
			<form action="payment_info" method="post">
				<input type="hidden" name="StudentID" value="<?php if($StudentID)echo $StudentID; ?>">
				<input type="hidden" name="PaymentMode" value="<?php if($PaymentMode)echo $PaymentMode; ?>">
				<input type="hidden" name="Amount" value="<?php if($Amount)echo $Amount; ?>">
				<input type="hidden" name="DDUTRNumber" value="<?php if($DDUTRNumber)echo $DDUTRNumber; ?>">
				<input type="hidden" name="StudentAccNumber" value="<?php if($StudentAccNumber)echo $StudentAccNumber; ?>">
				<input type="hidden" name="HostelerDS" value="<?php if($HostelerDS)echo $HostelerDS; ?>">
				<div class="form-group">
                    <div class="col-sm-6 col-md-4 col-lg-4 verify_button">
                        <button type="submit" class="btn btn-defult btn-block ">Edit</button>
                    </div>
                </div>
			</form>
	
			<form action="" id="register_payment_info"  method="post">
				<input type="hidden" name="StudentID" id="signup-inputID" value="<?php if($StudentID)echo $StudentID; ?>">
				<input type="hidden" name="PaymentMode" id="signup-inputPaymentMode" value="<?php if($PaymentMode)echo $PaymentMode; ?>">
				<input type="hidden" name="Amount" id="signup-inputAmount" value="<?php if($Amount)echo $Amount; ?>">
				<input type="hidden" name="DDUTRNumber" id="signup-inputDDUTRNumber" value="<?php if($DDUTRNumber)echo $DDUTRNumber; ?>">
				<input type="hidden" name="StudentAccNumber" id="signup-inputStudentAccNumber" value="<?php if($StudentAccNumber)echo $StudentAccNumber; ?>">
				<input type="hidden" name="HostelerDS" id="signup-inputHostelerDS" value="<?php if($HostelerDS)echo $HostelerDS; ?>">
				<div class="form-group">
                    <div class="col-sm-6 col-md-4 col-lg-4 verify_button">
                        <button type="submit" class="btn btn-danger btn-block" >Submit</button>
                    </div>
                </div>
			</form>
			
<script>
	alert('Please enable pop ups for your e-receipts');
</script>
				
		
