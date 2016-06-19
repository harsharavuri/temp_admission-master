
	
<?php ?>
	<div class="verify_div  col-sm-12 col-lg-6 col-md-8" id="verify_columns">
            <div class="verify_text_block">
			<p class="verify_text">Student ID</p><p class="verify_text"><?php echo $StudentID ?></p>
			</div>
			<div class="verify_text_block">
			<p class="verify_text">First Name</p><p class="verify_text"><?php echo $FirstName ?></p>
			</div>
			<div class="verify_text_block">
			<p class="verify_text">Middle Name</p><p class="verify_text"><?php echo $MiddleName ?></p>
			</div>
			<div class="verify_text_block">
			<p class="verify_text">Last Name</p><p class="verify_text"><?php echo $LastName ?> </p>
			</div>
			<div class="verify_text_block">
			<p class="verify_text">Full Name</p><p class="verify_text"><?php echo $FullName ?></p>
			</div>
			<div class="verify_text_block">
			<p class="verify_text">Father Name</p><p class="verify_text"><?php echo $FatherName ?></p>
			</div>
			<div class="verify_text_block">
			<p class="verify_text">Mother Name</p><p class="verify_text"><?php echo $MotherName ?></p>
			</div>
			<div class="verify_text_block">
			<p class="verify_text">Student Email</p><p class="verify_text"><?php echo $StudentEmail ?></p>
			</div>
			<div class="verify_text_block">
			<p class="verify_text">Parent Email</p><p class="verify_text"><?php echo $ParentEmail ?></p>
			</div>
			<div class="verify_text_block">
			<p class="verify_text">Address</p><p class="verify_text"><?php echo $Address ?></p>
			</div>
			<div class="verify_text_block">
			<p class="verify_text">Disability</p><p class="verify_text"><?php echo $Disability ?></p>
			</div>
			<div class="verify_text_block">
			<p class="verify_text">Height</p><p class="verify_text"><?php echo $Height ?></p>
			</div>
			<div class="verify_text_block">
			<p class="verify_text">Weight</p><p class="verify_text"><?php echo $Weight ?></p>
			</div>
			<div class="verify_text_block">
			<p class="verify_text">Identification Marks</p><p class="verify_text"><?php echo $IdentificationMarks ?></p>
			</div>
			<div class="verify_text_block">
			<p class="verify_text">Student Mobile</p><p class="verify_text"><?php echo $StudentMobile ?></p>
			</div>
			<div class="verify_text_block">
			<p class="verify_text">Parent Mobile</p><p class="verify_text"><?php echo $ParentMobile ?></p>
			</div>
			<div class="verify_text_block">
			<p class="verify_text">Father Occupation</p><p class="verify_text"><?php echo $FatherOccupation ?></p>
			</div>
			<div class="verify_text_block">
			<p class="verify_text">Mother Occupation</p><p class="verify_text"><?php echo $MotherOccupation ?></p>
			</div>
			<div class="verify_text_block">
			<p class="verify_text">Disability Type</p><p class="verify_text"><?php echo $DisabilityType ?></p>
			</div>
			<div class="verify_text_block">
			<p class="verify_text">Gender</p><p class="verify_text"><?php echo $Gender ?></p>
			</div>
			<div class="verify_text_block">
			<p class="verify_text">Caste</p><p class="verify_text"><?php echo $Caste ?></p>
			</div>
			<div class="verify_text_block">
			<p class="verify_text">Country</p><p class="verify_text"><?php echo $Country ?></p>
			</div>
			<div class="verify_text_block">
			<p class="verify_text">Birth Date</p><p class="verify_text"><?php echo $BirthDate ?>	</p>
			</div>
	</div>
			
				
			<form action="http://localhost/temp_admission-master/registration/" method="post">
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
                        <button type="submit" class="btn btn-primary btn-block ">Edit</button>
                    </div>
                </div>
			</form>
	
			<form id="register_personal_info" action="http://localhost/temp_admission-master/registration/educational_info" method="post">
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
                        <button type="submit" class="btn btn-primary btn-block" >Submit</button>
                    </div>
                </div>
			</form>
		
