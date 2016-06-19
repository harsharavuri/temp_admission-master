<div class="verify_div  col-sm-12 col-lg-6 col-md-8" id="verify_columns">
            <div class="verify_text_block">
			<p class="verify_text">Student ID</p><p class="verify_text"><?php echo $StudentID ?></p>
			</div>
			<div class="verify_text_block">
			<p class="verify_text">Registration Number</p><p class="verify_text"><?php echo $RegNo ?></p>
			</div>
			<div class="verify_text_block">
			<p class="verify_text">Roll Number</p><p class="verify_text"><?php echo $RollNo ?></p>
			</div>
			<div class="verify_text_block">
			<p class="verify_text">Section</p><p class="verify_text"><?php echo $Section ?> </p>
			</div>
			<div class="verify_text_block">
			<p class="verify_text">Admission Quota</p><p class="verify_text"><?php echo $AdmissionQuota ?></p>
			</div>
			<div class="verify_text_block">
			<p class="verify_text">Mains Rank</p><p class="verify_text"><?php echo $MainsRank ?></p>
			</div>
			<div class="verify_text_block">
			<p class="verify_text">Sat Score</p><p class="verify_text"><?php echo $SatScore ?></p>
			</div>
			<div class="verify_text_block">
			<p class="verify_text">Year Of Admission</p><p class="verify_text"><?php echo $YearOfAdmission ?></p>
			</div>
			<div class="verify_text_block">
			<p class="verify_text">Year of Study</p><p class="verify_text"><?php echo $YearOfStudy ?></p>
			</div>
			<div class="verify_text_block">
			<p class="verify_text">Admission Batch</p><p class="verify_text"><?php echo $AdmissionBatch ?></p>
			</div>
			<div class="verify_text_block">
			<p class="verify_text">Semester</p><p class="verify_text"><?php echo $Semester ?></p>
			</div>
			<div class="verify_text_block">
			<p class="verify_text">Status</p><p class="verify_text"><?php echo $Status ?></p>
			</div>
			<div class="verify_text_block">
			<p class="verify_text">Class 10 Percentage</p><p class="verify_text"><?php echo $Class10Percentage ?></p>
			</div>
			<div class="verify_text_block">
			<p class="verify_text">Class 12 Percentage</p><p class="verify_text"><?php echo $Class12Percentage ?></p>
			</div>
	</div>
	
		
			<form action="http://localhost/nitap/registration/educational_info" method="post">
				<input type="hidden" name="StudentID" value="<?php if($StudentID)echo $StudentID; ?>">
				<input type="hidden" name="RegNo" value="<?php if($RegNo)echo $RegNo; ?>">
				<input type="hidden" name="RollNo" value="<?php if($RollNo)echo $RollNo; ?>">
				<input type="hidden" name="Section" value="<?php if($Section)echo $Section; ?>">
				<input type="hidden" name="AdmissionQuota" value="<?php if($AdmissionQuota)echo $AdmissionQuota; ?>">
				<input type="hidden" name="MainsRank" value="<?php if($MainsRank)echo $MainsRank; ?>">
				<input type="hidden" name="SatScore" value="<?php if($SatScore)echo $SatScore; ?>">
				<input type="hidden" name="YearOfAdmission" value="<?php if($YearOfAdmission)echo $YearOfAdmission; ?>">
				<input type="hidden" name="YearOfStudy" value="<?php if($YearOfStudy)echo $YearOfStudy; ?>">
				<input type="hidden" name="AdmissionBatch" value="<?php if($AdmissionBatch)echo $AdmissionBatch; ?>">
				<input type="hidden" name="Semester" value="<?php if($Semester)echo $Semester; ?>">
				<input type="hidden" name="Status" value="<?php if($Status)echo $Status; ?>">
				<input type="hidden" name="Class10Percentage" value="<?php if($Class10Percentage)echo $Class10Percentage; ?>">
				<input type="hidden" name="Class12Percentage" value="<?php if($Class12Percentage)echo $Class12Percentage; ?>">
				<div class="form-group">
                    <div class="col-sm-6 col-md-4 col-lg-4 verify_button">
                        <button type="submit" class="btn btn-primary btn-block ">Edit</button>
                    </div>
                </div>
			</form>
	
			<form id="register_educational_info" action="http://localhost/temp_admission-master/registration/payment_info" method="post">
				<input type="hidden" name="StudentID" id="signup-inputID" value="<?php if($StudentID)echo $StudentID; ?>">
				<input type="hidden" name="RegNo" id="signup-inputRegNo" value="<?php if($RegNo)echo $RegNo; ?>">
				<input type="hidden" name="RollNo" id="signup-inputRollNo" value="<?php if($RollNo)echo $RollNo; ?>">
				<input type="hidden" name="Section" id="signup-inputSection" value="<?php if($Section)echo $Section; ?>">
				<input type="hidden" name="AdmissionQuota" id="signup-inputAdmissionQuota" value="<?php if($AdmissionQuota)echo $AdmissionQuota; ?>">
				<input type="hidden" name="MainsRank" id="signup-inputMainsRank" value="<?php if($MainsRank)echo $MainsRank; ?>">
				<input type="hidden" name="SatScore" id="signup-inputSatScore" value="<?php if($SatScore)echo $SatScore; ?>">
				<input type="hidden" name="YearOfAdmission" id="signup-inputYearOfAdmission" value="<?php if($YearOfAdmission)echo $YearOfAdmission; ?>">
				<input type="hidden" name="YearOfStudy" id="signup-inputYearOfStudy" value="<?php if($YearOfStudy)echo $YearOfStudy; ?>">
				<input type="hidden" name="AdmissionBatch" id="signup-inputAdmissionBatch" value="<?php if($AdmissionBatch)echo $AdmissionBatch; ?>">
				<input type="hidden" name="Semester" id="signup-inputSemester" value="<?php if($Semester)echo $Semester; ?>">
				<input type="hidden" name="Status" id="signup-inputStatus" value="<?php if($Status)echo $Status; ?>">
				<input type="hidden" name="Class10Percentage" id="signup-inputClass10Percentage" value="<?php if($Class10Percentage)echo $Class10Percentage; ?>">
				<input type="hidden" name="Class12Percentage" id="signup-inputClass12Percentage" value="<?php if($Class12Percentage)echo $Class12Percentage; ?>">
				    <div class="col-sm-6 col-md-4 col-lg-4 verify_button">
                        <button type="submit" class="btn btn-primary btn-block" >Submit</button>
                    </div>
                </div>
			</form>