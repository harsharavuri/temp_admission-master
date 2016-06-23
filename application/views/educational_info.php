<div class="container-fluid" style="overflow:hidden;padding:10px;">
 <div class="row">
    <div class="page-header" style="text-align:center">
      <h1>Educational Information Form</h1>
    </div>
 </div>
 <div class="row">
	<div class="tab-pane form-panel" id="signup">
            <form id="signup-form" action="verify_educational_info" method="post" class="form-horizontal" role="form">
             <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <div class="form-group">
                    <label for="signup-inputID" class="col-sm-3 col-md-3 col-lg-3 control-label">Student ID</label>
                    <div class="col-sm-9 col-lg-8 col-md-8">
                        <input required type="number" name="StudentID" class="form-control" id="signup-inputID" placeholder="51552912" value="<?php if($StudentID)echo $StudentID; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="signup-inputRegNo" class="col-sm-3 col-lg-3 col-md-3 control-label">Registration Number</label>
                    <div class="col-sm-9 col-lg-8 col-md-8">
                        <input required type="number" name="RegNo" class="form-control" id="signup-inputRegNo" placeholder="891728" value="<?php if($RegNo)echo $RegNo; ?>">
                    </div>
                </div>
				<div class="form-group">
                    <label for="signup-inputRollNo" class="col-sm-3 col-lg-3 col-md-3 control-label">Roll Number</label>
                    <div class="col-sm-9 col-lg-8 col-md-8">
                        <input required type="number" name="RollNo" class="form-control" id="signup-inputRollNo" placeholder="891728" value="<?php if($RollNo)echo $RollNo; ?>">
                    </div>
                </div>
				<div class="form-group">
                    <label for="signup-inputSection" class="col-sm-3 col-lg-3 col-md-3 control-label">Section</label>
                    <div class="col-sm-9 col-lg-8 col-md-8">
                        <input type="text" name="Section" class="form-control" id="signup-inputSection" placeholder="A" value="<?php if($Section)echo $Section; ?>">
                    </div>
                </div>
				<div class="form-group">
                    <label for="signup-inputAdmissionQuota" class="col-sm-3 col-lg-3 col-md-3 control-label">AdmissionQuota</label>
                    <div class="col-sm-9 col-lg-8 col-md-8">
						<select class="form-control"  name="AdmissionQuota" id="signup-inputAdmissionQuota">		
						 <option value="JEE" <?php if($AdmissionQuota=='JEE')echo 'selected' ?>>JEE</option>
						 <option value="DASA" <?php if($AdmissionQuota && $AdmissionQuota!='JEE')echo 'selected' ?>>DASA</option>
						</select>
					</div>
				</div>
				<div class="form-group" id="formMainsRank">
                    <label for="signup-inputMainsRank" class="col-sm-3 col-lg-3 col-md-3 control-label">Mains Rank</label>
                    <div class="col-sm-9 col-lg-8 col-md-8">
                        <input type="number" name="MainsRank" class="form-control" id="signup-inputMainsRank" placeholder="725" value="<?php if($MainsRank)echo $MainsRank; ?>">
                    </div>
                </div>
				<div class="form-group" id="formSatScore">
                    <label for="signup-inputSatScore" class="col-sm-3 col-lg-3 col-md-3 control-label">Sat Score</label>
                    <div class="col-sm-9 col-lg-8 col-md-8">
                        <input type="number" name="SatScore" class="form-control" id="signup-inputSatScore" placeholder="2300" value="<?php if($SatScore)echo $SatScore; ?>">
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
				<div class="form-group">
                    <label for="signup-inputYearOfAdmission" class="col-sm-3 col-lg-3 col-md-3 control-label">Year Of Admission</label>
                    <div class="col-sm-9 col-lg-8 col-md-8"> 
                        <input required type="number" name="YearOfAdmission" class="form-control" id="signup-inputYearOfAdmission" placeholder="2016" value="<?php if($YearOfAdmission)echo $YearOfAdmission; ?>">
                    </div>
                </div>
				<div class="form-group">
                    <label for="signup-inputYearOfStudy" class="col-sm-3 col-lg-3 col-md-3 control-label">Year Of Study</label>
                    <div class="col-sm-9 col-lg-8 col-md-8">
                        <input required type="number" name="YearOfStudy" class="form-control" id="signup-inputYearOfStudy" placeholder="1" value="<?php if($YearOfStudy)echo $YearOfStudy; ?>">
                    </div>
                </div>
				<div class="form-group">
                    <label for="signup-inputAdmissionBatch" class="col-sm-3 col-lg-3 col-md-3 control-label">Admission Batch</label>
                    <div class="col-sm-9 col-lg-8 col-md-8">
                        <input type="number" name="AdmissionBatch" class="form-control" id="signup-inputAdmissionBatch" placeholder="2016" value="<?php if($AdmissionBatch)echo $AdmissionBatch; ?>">
                    </div>
                </div>

                <div class="form-group">
                    <label for="signup-inputSemester" class="col-sm-3 col-lg-3 col-md-3 control-label">Semester</label>
                    <div class="col-sm-9 col-lg-8 col-md-8">
                        <input required type="number" name="Semester" class="form-control" id="signup-inputSemester" placeholder="1" value="<?php if($Semester)echo $Semester; ?>">
                    </div>
                </div>
				<div class="form-group">
                    <label for="signup-inputStatus" class="col-sm-3 col-lg-3 col-md-3 control-label">Status</label>
                    <div class="col-sm-9 col-lg-8 col-md-8">
					    <select class="form-control" name="Status" class="form-control" id="signup-inputStatus">		
						 <option value="Yes" <?php if($Status=='Yes')echo 'selected' ?>>Admitted</option>
						 <option value="No" <?php if($Status && $Status!='No')echo 'selected' ?>>Admission Cancelled</option>
						</select>

					</div>
                </div>
                
               <div class="form-group">
                    <label for="signup-inputClass10Percentage" class="col-sm-3 col-lg-3 col-md-3 control-label">Class 10 Percentage</label>
                    <div class="col-sm-9 col-lg-8 col-md-8">
                        <input required type="number" name="Class10Percentage" class="form-control" id="signup-Class 10 Percentage" placeholder="90" value="<?php if($Class10Percentage)echo $Class10Percentage; ?>">
                    </div>
                </div>
				
				<div class="form-group">
                    <label for="signup-inputClass12Percentage" class="col-sm-3 col-lg-3 col-md-3 control-label">Class 12 Percentage</label>
                    <div class="col-sm-9 col-lg-8 col-md-8">
                        <input required type="number" name="Class12Percentage" class="form-control" id="signup-Class12Percentage" placeholder="90" value="<?php if($Class12Percentage)echo $Class12Percentage; ?>">
                    </div>
                </div>
			</div>	
			<div class="form-group">
                <div class="col-sm-9 col-lg-8">
                   <button type="submit" style="margin-top:50px;" class="btn btn-success btn-block" id="signup-button">Sign Up</button>
                </div>
            </div>
              
            </form>
        </div>
    </div>
  </div>    	
</div>