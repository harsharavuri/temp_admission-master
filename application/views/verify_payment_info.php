
	
<?php ?>
		<div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <strong id="status">Error:</strong>
        </div>
	<div class="verify_div  col-sm-12 col-lg-6 col-md-8" id="verify_columns">
            <div class="verify_text_block">
			<p class="verify_text">Student ID</p><p class="verify_text"><?php echo $StudentID ?></p>
			</div>
			<div class="verify_text_block">
			<p class="verify_text">Payment Mode</p><p class="verify_text"><?php echo $PaymentMode ?></p>
			</div>
			<div class="verify_text_block">
			<p class="verify_text">Amount</p><p class="verify_text"><?php echo $Amount ?></p>
			</div>
			<div class="verify_text_block">
			<p class="verify_text">DD/UTR Number</p><p class="verify_text"><?php echo $DDUTRNumber ?> </p>
			</div>
			<div class="verify_text_block">
			<p class="verify_text">Student Account Number</p><p class="verify_text"><?php echo $StudentAccNumber ?></p>
			</div>
			<div class="verify_text_block">
			<p class="verify_text">Hosteler/DS</p><p class="verify_text"><?php echo $HostelerDS ?></p>
			</div>
			
	</div>
			
				
			<form action="http://localhost/temp_admission-master/registration/payment_info" method="post">
				<input type="hidden" name="StudentID" value="<?php if($StudentID)echo $StudentID; ?>">
				<input type="hidden" name="PaymentMode" value="<?php if($PaymentMode)echo $PaymentMode; ?>">
				<input type="hidden" name="Amount" value="<?php if($Amount)echo $Amount; ?>">
				<input type="hidden" name="DDUTRNumber" value="<?php if($DDUTRNumber)echo $DDUTRNumber; ?>">
				<input type="hidden" name="StudentAccNumber" value="<?php if($StudentAccNumber)echo $StudentAccNumber; ?>">
				<input type="hidden" name="HostelerDS" value="<?php if($HostelerDS)echo $HostelerDS; ?>">
				<div class="form-group">
                    <div class="col-sm-6 col-md-4 col-lg-4 verify_button">
                        <button type="submit" class="btn btn-primary btn-block ">Edit</button>
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
                        <button type="submit" class="btn btn-primary btn-block" >Submit</button>
                    </div>
                </div>
			</form>
			
				
		
