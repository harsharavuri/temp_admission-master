<!--<div class="alert alert-danger">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
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
			<td><span class="verify_text_table">Student ID</span><td><span class="verify_text_table"><?php echo $StudentID ?></span>
			</tr>
			<tr>
			<td><span class="verify_text_table">Registration Number</span><td><span class="verify_text_table"><?php echo $RegNo ?></span>
			</tr>
			<tr>
			<td><span class="verify_text_table">Roll Number</span><td><span class="verify_text_table"><?php echo $RollNo ?></span>
			</tr>
			<tr>
			<td><span class="verify_text_table">Section</span><td><span class="verify_text_table"><?php echo $Section ?> </span>
			</tr>
			<tr>
			<td><span class="verify_text_table">Admission Quota</span><td><span class="verify_text_table"><?php echo $AdmissionQuota ?></span>
			</tr>
			<tr>
			<td><span class="verify_text_table">Mains Rank</span><td><span class="verify_text_table"><?php echo $MainsRank ?></span>
			</tr>
			<tr>
			<td><span class="verify_text_table">Sat Score</span><td><span class="verify_text_table"><?php echo $SatScore ?></span>
			</tr>
			<tr>
			<td><span class="verify_text_table">Year Of Admission</span><td><span class="verify_text_table"><?php echo $YearOfAdmission ?></span>
			</tr>
			<tr>
			<td><span class="verify_text_table">Year of Study</span><td><span class="verify_text_table"><?php echo $YearOfStudy ?></span>
			</tr>
			<tr>
			<td><span class="verify_text_table">Admission Batch</span><td><span class="verify_text_table"><?php echo $AdmissionBatch ?></span>
			</tr>
			<tr>
			<td><span class="verify_text_table">Semester</span><td><span class="verify_text_table"><?php echo $Semester ?></span>
			</tr>
			<tr>
			<td><span class="verify_text_table">Status</span><td><span class="verify_text_table"><?php echo $Status ?></span>
			</tr>
			<tr>
			<td><span class="verify_text_table">Class 10 Percentage</span><td><span class="verify_text_table"><?php echo $Class10Percentage ?></span>
			</tr>
			<tr>
			<td><span class="verify_text_table">Class 12 Percentage</span><td><span class="verify_text_table"><?php echo $Class12Percentage ?></span>
			</tr>
			</body>
	</table>
	
		
			<form action="<?php echo base_url() ?>registration/educational_info" method="post">
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
                        <button type="submit" class="btn btn-default btn-block ">Edit</button>
                    </div>
                </div>
			</form>
	
			<form id="register_educational_info" action="payment_info" method="post">
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
                        <button type="submit" class="btn btn-danger btn-block" >Submit</button>
                    </div>
                </div>
			</form>