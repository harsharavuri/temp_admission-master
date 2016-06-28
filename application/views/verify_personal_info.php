
	
<?php ?>
		<!-- <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <strong id="status">Error:</strong>
        </div> -->
        <h3 class="text-center">Please Verify Students Presonal Details</h3>
        <hr>
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
			<td><span class="verify_text_table">First Name</span></td><td><span class="verify_text_table"><?php echo $FirstName ?></span></td>
			</tr>
			<tr>
			<td><span class="verify_text_table">Middle Name</span></td><td><span class="verify_text_table"><?php echo $MiddleName ?></span></td>
			</tr>
			<tr>
			<td><span class="verify_text_table">Last Name</span></td><td><span class="verify_text_table"><?php echo $LastName ?> </span></td>
			</tr>
			<tr>
			<td><span class="verify_text_table">Full Name</span></td><td><span class="verify_text_table"><?php echo $FullName ?></span></td>
			</tr>
			<tr>
			<td><span class="verify_text_table">Father Name</span></td><td><span class="verify_text_table"><?php echo $FatherName ?></span></td>
			</tr>
			<tr>
			<td><span class="verify_text_table">Mother Name</span></td><td><span class="verify_text_table"><?php echo $MotherName ?></span></td>
			</tr>
			<tr>
			<td><span class="verify_text_table">Student Email</span></td><td><span class="verify_text_table"><?php echo $StudentEmail ?></span></td>
			</tr>
			<tr>
			<td><span class="verify_text_table">Parent Email</span></td><td><span class="verify_text_table"><?php echo $ParentEmail ?></span></td>
			</tr>
			<tr>
			<td><span class="verify_text_table">Address</span></td><td><span class="verify_text_table"><?php echo $Address ?></span></td>
			</tr>
			<tr>
			<td><span class="verify_text_table">Disability</span></td><td><span class="verify_text_table"><?php echo $Disability ?></span></td>
			</tr>
			<tr>
			<td><span class="verify_text_table">Height</span></td><td><span class="verify_text_table"><?php echo $Height ?></span></td>
			</tr>
			<tr>
			<td><span class="verify_text_table">Weight</span></td><td><span class="verify_text_table"><?php echo $Weight ?></span></td>
			</tr>
			<tr>
			<td><span class="verify_text_table">Identification Marks</span></td><td><span class="verify_text_table"><?php echo $IdentificationMarks ?></span></td>
			</tr>
			<tr>
			<td><span class="verify_text_table">Student Mobile</span></td><td><span class="verify_text_table"><?php echo $StudentMobile ?></span></td>
			</tr>
			<tr>
			<td><span class="verify_text_table">Parent Mobile</span></td><td><span class="verify_text_table"><?php echo $ParentMobile ?></span></td>
			</tr>
			<tr>
			<td><span class="verify_text_table">Father Occupation</span></td><td><span class="verify_text_table"><?php echo $FatherOccupation ?></span></td>
			</tr>
			<tr>
			<td><span class="verify_text_table">Mother Occupation</span></td><td><span class="verify_text_table"><?php echo $MotherOccupation ?></span></td>
			</tr>
			<tr>
			<td><span class="verify_text_table">Disability Type</span></td><td><span class="verify_text_table"><?php echo $DisabilityType ?></span></td>
			</tr>
			<tr>
			<td><span class="verify_text_table">Gender</span></td><td><span class="verify_text_table"><?php echo $Gender ?></span></td>
			</tr>
			<tr>
			<td><span class="verify_text_table">Caste</span></td><td><span class="verify_text_table"><?php echo $Caste ?></span></td>
			</tr>
			<tr>
			<td><span class="verify_text_table">Country</span></td><td><span class="verify_text_table"><?php echo $Country ?></span></td>
			</tr>
			<tr>
			<td><span class="verify_text_table">Birth Date</span></td><td><span class="verify_text_table"><?php echo $BirthDate ?>	</span></td>
			</tr>
		</tbody>
	</table>
			
				
			<form action="<?php echo base_url() ?>" method="post">
				<input type="hidden" name="StudentID" value="<?php if($StudentID)echo $StudentID; ?>">
				<input type="hidden" name="FirstName" value="<?php if($FirstName)echo $FirstName; ?>">
				<input type="hidden" name="MiddleName" value="<?php if($MiddleName)echo $MiddleName; ?>">
				<input type="hidden" name="LastName" value="<?php if($LastName)echo $LastName; ?>">
				<input type="hidden" name="FullName" value="<?php if($FullName)echo $FullName; ?>">
				<input type="hidden" name="FatherName" value="<?php if($FatherName)echo $FatherName; ?>">
				<input type="hidden" name="MotherName" value="<?php if($MotherName)echo $MotherName; ?>">
				<input type="hidden" name="StudentEmail" value="<?php if($StudentEmail)echo $StudentEmail; ?>">
				<input type="hidden" name="ParentEmail" value="<?php if($ParentEmail)echo $ParentEmail; ?>">
				<input type="hidden" name="Address" value="<?php if($Address)echo $Address; ?>">
				<input type="hidden" name="Disability" value="<?php if($Disability)echo $Disability; ?>">
				<input type="hidden" name="Height" value="<?php if($Height)echo $Height; ?>">
				<input type="hidden" name="Weight" value="<?php if($Weight)echo $Weight; ?>">
				<input type="hidden" name="IdentificationMarks" value="<?php if($IdentificationMarks)echo $IdentificationMarks;?>">
				<input type="hidden" name="StudentMobile" value="<?php if($StudentMobile)echo $StudentMobile; ?>">
				<input type="hidden" name="ParentMobile" value="<?php if($ParentMobile)echo $ParentMobile; ?>">
				<input type="hidden" name="FatherOccupation" value="<?php if($FatherOccupation)echo $FatherOccupation; ?>">
				<input type="hidden" name="MotherOccupation" value="<?php if($MotherOccupation)echo $MotherOccupation; ?>">
				<input type="hidden" name="DisabilityType" value="<?php if($DisabilityType)echo $DisabilityType; ?>">
				<input type="hidden" name="Gender" value="<?php if($Gender)echo $Gender; ?>">
				<input type="hidden" name="Caste" value="<?php if($Caste)echo $Caste; ?>">
				<input type="hidden" name="Country" value="<?php if($Country)echo $Country; ?>">
				<input type="hidden" name="BirthDate" value="<?php if($BirthDate)echo $BirthDate; ?>">
				<div class="form-group">
                    <div class="col-sm-6 col-md-4 col-lg-4 verify_button">
                        <button type="submit" class="btn btn-default btn-block ">
                        	Edit
                        </button>
                    </div>
                </div>
			</form>
	
			<form id="register_personal_info" action="educational_info" method="post">
				<input type="hidden" name="StudentID" id="signup-inputID" value="<?php if($StudentID)echo $StudentID; ?>">
				<input type="hidden" name="FirstName" id="signup-inputFirstName" value="<?php if($FirstName)echo $FirstName; ?>">
				<input type="hidden" name="MiddleName" id="signup-inputMiddleName" value="<?php if($MiddleName)echo $MiddleName; ?>">
				<input type="hidden" name="LastName" id="signup-inputLastName" value="<?php if($LastName)echo $LastName; ?>">
				<input type="hidden" name="FullName" id="signup-inputFullName" value="<?php if($FullName)echo $FullName; ?>">
				<input type="hidden" name="FatherName" id="signup-inputFatherName" value="<?php if($FatherName)echo $FatherName; ?>">
				<input type="hidden" name="MotherName" id="signup-inputMotherName" value="<?php if($MotherName)echo $MotherName; ?>">
				<input type="hidden" name="StudentEmail" id="signup-inputStudentEmail" value="<?php if($StudentEmail)echo $StudentEmail; ?>">
				<input type="hidden" name="ParentEmail" id="signup-inputParentEmail" value="<?php if($ParentEmail)echo $ParentEmail; ?>">
				<input type="hidden" name="Disability" id="signup-inputDisability" value="<?php if($Disability)echo $Disability; ?>">
				<input type="hidden" name="Height" id="signup-inputHeight" value="<?php if($Height)echo $Height; ?>">
				<input type="hidden" name="Weight" id="signup-inputWeight" value="<?php if($Weight)echo $Weight; ?>">
				<input type="hidden" name="IdentificationMarks" id="signup-inputIdentificationMarks" value="<?php if($IdentificationMarks)echo $IdentificationMarks;?>">
				<input type="hidden" name="StudentMobile" id="signup-inputStudentMobile" value="<?php if($StudentMobile)echo $StudentMobile; ?>">
				<input type="hidden" name="ParentMobile" id="signup-inputParentMobile" value="<?php if($ParentMobile)echo $ParentMobile; ?>">
				<input type="hidden" name="FatherOccupation" id="signup-inputFatherOccupation" value="<?php if($FatherOccupation)echo $FatherOccupation; ?>">
				<input type="hidden" name="MotherOccupation" id="signup-inputMotherOccupation" value="<?php if($MotherOccupation)echo $MotherOccupation; ?>">
				<input type="hidden" name="DisabilityType" id="signup-inputDisabilityType" value="<?php if($DisabilityType)echo $DisabilityType; ?>">
				<input type="hidden" name="Gender" id="signup-inputGender" value="<?php if($Gender)echo $Gender; ?>">
				<input type="hidden" name="Caste" id="signup-inputCaste" value="<?php if($Caste)echo $Caste; ?>">
				<input type="hidden" name="Country" id="signup-inputCountry" value="<?php if($Country)echo $Country; ?>">
				<input type="hidden" name="BirthDate" id="signup-inputBirthDate" value="<?php if($BirthDate)echo $BirthDate; ?>">
				<div class="form-group">
                    <div class="col-sm-6 col-md-4 col-lg-4 verify_button">
                        <button type="submit" class="btn btn-danger btn-block" >Submit</button>
                    </div>
                </div>
			</form>
		
