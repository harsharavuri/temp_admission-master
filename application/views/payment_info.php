<div class="container-fluid" style="overflow:hidden;padding:15px;">
 <div class="row">
    <div class="page-header" style="text-align:center">
      <h1>Educational Information Form</h1>
    </div>
 </div>
 <div class="row">
 	<div class="tab-pane form-panel" id="signup">
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <strong id="status">Error:</strong>
        </div>
            <form id="signup-form" action="http://localhost/temp_admission-master/registration/verify_payment_info" class="form-horizontal" role="form" method="post">
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <div class="form-group">
                        <label for="signup-inputID" class="col-sm-3 col-md-3 col-lg-3 control-label">Student ID</label>
                        <div class="col-sm-9 col-lg-9 col-md-9">
                            <input required type="number" name="StudentID" class="form-control" id="signup-inputStudentID" placeholder="" value="<?php if($StudentID)echo $StudentID; ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="signup-inputPaymentMode" class="col-sm-3 col-lg-3 col-md-3 control-label">Payment Mode</label>
                        <div class="col-sm-9 col-lg-9 col-md-9">
                            <select required type="number" name="PaymentMode" class="form-control" id="signup-inputPaymentMode" placeholder="" value="<?php if($PaymentMode)echo $PaymentMode; ?>">
                                <option value="NEFT">NEFT</option>
                                <option value="DD">Demand Draft</option>
                            </select>
                        </div>
                    </div>
    				<div class="form-group">
                        <label for="signup-inputAmount" class="col-sm-3 col-lg-3 col-md-3 control-label">Amount(Rs.)</label>
                        <div class="col-sm-9 col-lg-9 col-md-9">
                            <input required type="number" name="Amount" class="form-control" id="signup-inputAmount" placeholder="" value="<?php if($Amount)echo $Amount; ?>">
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
    				<div class="form-group">
                        <label for="signup-inputDDUTRNumber" class="col-sm-3 col-lg-3 col-md-3 control-label">DD/UTR Number</label>
                        <div class="col-sm-9 col-lg-9 col-md-9">
                            <input type="number" name="DDUTRNumber" class="form-control" id="signup-inputDDUTRNumber" placeholder="" value="<?php if($DDUTRNumber) echo $DDUTRNumber; ?>">
                        </div>
                    </div>
    				<div class="form-group">
                        <label for="signup-inputStudentAccNumber" class="col-sm-3 col-lg-3 col-md-3 control-label">Student Account Number</label>
                        <div class="col-sm-9 col-lg-9 col-md-9">
                            <input type="number" name="StudentAccNumber" class="form-control" id="signup-inputStudentAccNumber" placeholder="" value="<?php if($StudentAccNumber) echo $StudentAccNumber; ?>">
                        </div>
                    </div>
    				
    				<div class="form-group">
                        <label for="signup-inputHosteler" class="col-sm-3 col-lg-3 col-md-3 control-label">Hosteler/ Day Scholar</label>
                        <div class="col-sm-9 col-lg-9 col-md-9">
                            <select name="HostelerDS" class="form-control" id="signup-inputHostelerDS" value="<?php if($HostelerDS)echo $HostelerDS ?>">
                                <option value="1">Hosteler</option>
                                <option value="2">Day Scholar</option>
                            </select>
                        </div>
                    </div>
				</div>
				<div class="form-group">
                    <div class="col-sm-8 col-lg-8" style="margin-top:50px;">
                       <button type="submit" class="btn btn-danger btn-block" id="signup-button">Sign Up</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
<div>
