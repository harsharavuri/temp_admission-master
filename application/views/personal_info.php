
<div class="container-fluid" style="overflow:hidden;text-align: center;">
    <div class="row">
            <div class="page-header">
              <h1>Personal Information Form</h1>
            </div>
    </div>    
    <div class="row">    
    	<div class="tab-pane form-panel" id="signup">
            <form id="signup-form" method="post" action="registration/verify_personal_info" class="form-horizontal" role="form">
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    
                
                    <div class="form-group">
                        <label for="signup-inputID" class="col-sm-3 col-md-3 col-lg-3 control-label">Student ID</label>
                        <div class="col-sm-9 col-lg-8 col-md-8">
                            <input required type="number" name="StudentID" class="form-control" value="<?php if($StudentID)echo $StudentID ; ?>" id="signup-inputID" placeholder="51829102"  >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="signup-inputFirstName" class="col-sm-3 col-lg-3 col-md-3 control-label">First Name</label>
                        <div class="col-sm-9 col-lg-8 col-md-8">
                            <input required type="text" name="FirstName" class="form-control" value="<?php if($FirstName)echo $FirstName ; ?>" id="signup-inputFirstName" placeholder="First Name"  >
                        </div>
                    </div>
    				<div class="form-group">
                        <label for="signup-inputFirstName" class="col-sm-3 col-lg-3 col-md-3 control-label">Middle Name</label>
                        <div class="col-sm-9 col-lg-8 col-md-8">
                            <input type="text" name="MiddleName" class="form-control" value="<?php if($MiddleName)echo $MiddleName ; ?>" id="signup-inputMiddleName" placeholder="Middle Name"  >
                        </div>
                    </div>
    				<div class="form-group">
                        <label for="signup-inputLastName" class="col-sm-3 col-lg-3 col-md-3 control-label">Last Name</label>
                        <div class="col-sm-9 col-lg-8 col-md-8">
                            <input required type="text" name="LastName" class="form-control" value="<?php if($LastName)echo $LastName ; ?>" id="signup-inputLastName" placeholder="Last Name"  >
                        </div>
                    </div>
    				<div class="form-group">
                        <label for="signup-inputFullName" class="col-sm-3 col-lg-3 col-md-3 control-label">Full Name</label>
                        <div class="col-sm-9 col-lg-8 col-md-8">
                            <input required type="text" name="FullName" class="form-control" value="<?php if($FullName)echo $FullName ; ?>" id="signup-inputFullName" placeholder="Full Name"  >
                        </div>
                    </div>
    				<div class="form-group">
                        <label for="signup-inputFatherName" class="col-sm-3 col-lg-3 col-md-3 control-label">Father Name</label>
                        <div class="col-sm-9 col-lg-8 col-md-8">
                            <input required type="text" name="FatherName" class="form-control" value="<?php if($FatherName)echo $FatherName ; ?>" id="signup-inputFatherName" placeholder="Father Name"  >
                        </div>
                    </div>
    				<div class="form-group">
                        <label for="signup-inputMotherName" class="col-sm-3 col-lg-3 col-md-3 control-label">Mother Name</label>
                        <div class="col-sm-9 col-lg-8 col-md-8">
                            <input required type="text" name="MotherName" class="form-control" value="<?php if($MotherName)echo $MotherName ; ?>" id="signup-inputMotherName" placeholder="Mother Name"  >
                        </div>
                    </div>
    				<div class="form-group">
                        <label for="signup-inputStudentEmail" class="col-sm-3 col-lg-3 col-md-3 control-label">Student Email</label>
                        <div class="col-sm-9 col-lg-8 col-md-8">
                            <input required type="email" name="StudentEmail" class="form-control" value="<?php if($StudentEmail)echo $StudentEmail ; ?>" id="signup-inputStudentEmail" placeholder="Student Email"  >
                        </div>
                    </div>
    				<div class="form-group">
                        <label for="signup-inputParentEmail" class="col-sm-3 col-lg-3 col-md-3 control-label">Parent Email</label>
                        <div class="col-sm-9 col-lg-8 col-md-8">
                            <input type="email" name="ParentEmail" class="form-control" value="<?php if($ParentEmail)echo $ParentEmail ; ?>" id="signup-inputParentEmail" placeholder="Parent Email"  >
                        </div>
                    </div>
    				<div class="form-group">
                        <label for="signup-inputAddress" class="col-sm-3 col-lg-3 col-md-3 control-label">Address</label>
                        <div class="col-sm-9 col-lg-8 col-md-8">
                            <input required type="text" name="Address" class="form-control" value="<?php if($Address)echo $Address ; ?>" id="signup-inputAddress" placeholder="Address"  >
                        </div>
                    </div>
    				<div class="form-group">
                        <label for="signup-inputDisability" class="col-sm-3 col-lg-3 col-md-3 control-label">Disability</label>
                        <div class="col-sm-9 col-lg-8 col-md-8">
                            <input required type="text" name="Disability" class="form-control" value="<?php if($Disability)echo $Disability ; ?>" id="signup-inputDisability" placeholder="Disability"  >
                        </div>
                    </div>
    				<div class="form-group">
                        <label for="signup-inputHeight" class="col-sm-3 col-lg-3 col-md-3 control-label">Height (in cm )</label>
                        <div class="col-sm-9 col-lg-8 col-md-8">
                            <input type="number" name="Height" class="form-control" value="<?php if($Height)echo $Height ; ?>" id="signup-inputHeight" placeholder="175"  >
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
    				<div class="form-group">
                        <label for="signup-inputWeight" class="col-sm-3 col-lg-3 col-md-3 control-label">Weight (in kg )</label>
                        <div class="col-sm-9 col-lg-8 col-md-8">
                            <input type="number" name="Weight" class="form-control" value="<?php if($Weight)echo $Weight ; ?>" id="signup-inputWeight" placeholder="70"  >
                        </div>
                    </div>
    				<div class="form-group">
                        <label for="signup-inputIdentificationMarks" class="col-sm-3 col-lg-3 col-md-3 control-label">Identification Marks</label>
                        <div class="col-sm-9 col-lg-8 col-md-8">
                            <input required type="text" name="IdentificationMarks" class="form-control" value="<?php if($IdentificationMarks)echo $IdentificationMarks ; ?>" id="signup-inputIdentificationMarks" placeholder="Identification Marks"  >
                        </div>
                    </div>
    				<div class="form-group">
                        <label for="signup-inputStudentMobile" class="col-sm-3 col-lg-3 col-md-3 control-label">Student Mobile</label>
                        <div class="col-sm-9 col-lg-8 col-md-8">
                            <input required type="number" name="StudentMobile" class="form-control" value="<?php if($StudentMobile)echo $StudentMobile ; ?>" id="signup-inputStudentMobile" placeholder="9999999999"  >
                        </div>
                    </div>
    				<div class="form-group">
                        <label for="signup-inputParentMobile" class="col-sm-3 col-lg-3 col-md-3 control-label">Parent Mobile</label>
                        <div class="col-sm-9 col-lg-8 col-md-8">
                            <input required type="number" name="ParentMobile" class="form-control" value="<?php if($ParentMobile)echo $ParentMobile ; ?>" id="signup-inputParentMobile" placeholder="9999999999"  >
                        </div>
                    </div>
    				<div class="form-group">
                        <label for="signup-inputFatherOccupation" class="col-sm-3 col-lg-3 col-md-3 control-label">Father Occupation</label>
                        <div class="col-sm-9 col-lg-8 col-md-8">
                            <input required type="text" name="FatherOccupation" class="form-control" value="<?php if($FatherOccupation)echo $FatherOccupation ; ?>" id="signup-inputFatherOccupation" placeholder="Father's Occupation"  >
                        </div>
                    </div>
    				<div class="form-group">
                        <label for="signup-inputMotherOccupation" class="col-sm-3 col-lg-3 col-md-3 control-label">Mother Occupation</label>
                        <div class="col-sm-9 col-lg-8 col-md-8">
                            <input required type="text" name="MotherOccupation" class="form-control" value="<?php if($MotherOccupation)echo $MotherOccupation ; ?>" id="signup-inputMotherOccupation" placeholder="Mother's Occupation"  >
                        </div>
                    </div>
    				<div class="form-group">
                        <label for="signup-inputDisabilityType" class="col-sm-3 col-lg-3 col-md-3 control-label">Disability Type</label>
                        <div class="col-sm-9 col-lg-8 col-md-8">
                            <input type="text" name="DisabilityType" class="form-control" value="<?php if($DisabilityType)echo $DisabilityType ; ?>" id="signup-inputDisabilityType" placeholder="Disability Type"  >
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="signup-inputGender" class="col-sm-3 col-lg-3 col-md-3 control-label">Gender</label>
                        <div class="col-sm-9 col-lg-8 col-md-8">
                            <select name="Gender" class="form-control" value="<?php if($Gender)echo $Gender ; ?>" id="signup-inputGender">
                                <option value="M">Male</option>
                                <option value="F">Female</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="signup-inputCaste" class="col-sm-3 col-lg-3 col-md-3 control-label">Caste</label>
                        <div class="col-sm-9 col-lg-8 col-md-8">
                            <select required type="text" name="Caste" class="form-control" value="<?php if($Caste)echo $Caste ; ?>" id="signup-inputCaste" placeholder=""  >
                                <option value="OBC">General</option>
                                <option value="OBC">OBC</option>
                                <option value="SC">SC</option>
                                <option value="ST">ST</option>
                            </select>
                        </div>
                    </div>
    				<div class="form-group">
                        <label for="signup-inputCountry" class="col-sm-3 col-lg-3 col-md-3 control-label">Country</label>
                        <div class="col-sm-9 col-lg-8 col-md-8">
                            <select required type="text" name="Country" class="form-control" value="<?php if($Country)echo $Country ; ?>" id="signup-inputCountry" placeholder="" >
                                <option value="4">Afghanistan</option>
                                <option value="248">Åland Islands</option>
                                <option value="8">Albania</option>
                                <option value="12">Algeria</option>
                                <option value="16">American Samoa</option>
                                <option value="20">Andorra</option>
                                <option value="24">Angola</option>
                                <option value="660">Anguilla</option>
                                <option value="10">Antarctica</option>
                                <option value="28">Antigua and Barbuda</option>
                                <option value="32">Argentina</option>
                                <option value="51">Armenia</option>
                                <option value="533">Aruba</option>
                                <option value="36">Australia</option>
                                <option value="40">Austria</option>
                                <option value="31">Azerbaijan</option>
                                <option value="44">Bahamas</option>
                                <option value="48">Bahrain</option>
                                <option value="50">Bangladesh</option>
                                <option value="52">Barbados</option>
                                <option value="112">Belarus</option>
                                <option value="56">Belgium</option>
                                <option value="84">Belize</option>
                                <option value="204">Benin</option>
                                <option value="60">Bermuda</option>
                                <option value="64">Bhutan</option>
                                <option value="68">Bolivia, Plurinational State of</option>
                                <option value="535">Bonaire, Sint Eustatius and Saba</option>
                                <option value="70">Bosnia and Herzegovina</option>
                                <option value="72">Botswana</option>
                                <option value="74">Bouvet Island</option>
                                <option value="76">Brazil</option>
                                <option value="86">British Indian Ocean Territory</option>
                                <option value="96">Brunei Darussalam</option>
                                <option value="100">Bulgaria</option>
                                <option value="854">Burkina Faso</option>
                                <option value="108">Burundi</option>
                                <option value="116">Cambodia</option>
                                <option value="120">Cameroon</option>
                                <option value="124">Canada</option>
                                <option value="132">Cape Verde</option>
                                <option value="136">Cayman Islands</option>
                                <option value="140">Central African Republic</option>
                                <option value="148">Chad</option>
                                <option value="152">Chile</option>
                                <option value="156">China</option>
                                <option value="162">Christmas Island</option>
                                <option value="166">Cocos (Keeling) Islands</option>
                                <option value="170">Colombia</option>
                                <option value="174">Comoros</option>
                                <option value="178">Congo</option>
                                <option value="180">Congo, the Democratic Republic of the</option>
                                <option value="184">Cook Islands</option>
                                <option value="188">Costa Rica</option>
                                <option value="384">Côte d'Ivoire</option>
                                <option value="191">Croatia</option>
                                <option value="192">Cuba</option>
                                <option value="531">Curaçao</option>
                                <option value="196">Cyprus</option>
                                <option value="203">Czech Republic</option>
                                <option value="208">Denmark</option>
                                <option value="262">Djibouti</option>
                                <option value="212">Dominica</option>
                                <option value="214">Dominican Republic</option>
                                <option value="218">Ecuador</option>
                                <option value="818">Egypt</option>
                                <option value="222">El Salvador</option>
                                <option value="226">Equatorial Guinea</option>
                                <option value="232">Eritrea</option>
                                <option value="233">Estonia</option>
                                <option value="231">Ethiopia</option>
                                <option value="238">Falkland Islands (Malvinas)</option>
                                <option value="234">Faroe Islands</option>
                                <option value="242">Fiji</option>
                                <option value="246">Finland</option>
                                <option value="250">France</option>
                                <option value="254">French Guiana</option>
                                <option value="258">French Polynesia</option>
                                <option value="260">French Southern Territories</option>
                                <option value="266">Gabon</option>
                                <option value="270">Gambia</option>
                                <option value="268">Georgia</option>
                                <option value="276">Germany</option>
                                <option value="288">Ghana</option>
                                <option value="292">Gibraltar</option>
                                <option value="300">Greece</option>
                                <option value="304">Greenland</option>
                                <option value="308">Grenada</option>
                                <option value="312">Guadeloupe</option>
                                <option value="316">Guam</option>
                                <option value="320">Guatemala</option>
                                <option value="831">Guernsey</option>
                                <option value="324">Guinea</option>
                                <option value="624">Guinea-Bissau</option>
                                <option value="328">Guyana</option>
                                <option value="332">Haiti</option>
                                <option value="334">Heard Island and McDonald Islands</option>
                                <option value="336">Holy See (Vatican City State)</option>
                                <option value="340">Honduras</option>
                                <option value="344">Hong Kong</option>
                                <option value="348">Hungary</option>
                                <option value="352">Iceland</option>
                                <option value="356">India</option>
                                <option value="360">Indonesia</option>
                                <option value="364">Iran, Islamic Republic of</option>
                                <option value="368">Iraq</option>
                                <option value="372">Ireland</option>
                                <option value="833">Isle of Man</option>
                                <option value="376">Israel</option>
                                <option value="380">Italy</option>
                                <option value="388">Jamaica</option>
                                <option value="392">Japan</option>
                                <option value="832">Jersey</option>
                                <option value="400">Jordan</option>
                                <option value="398">Kazakhstan</option>
                                <option value="404">Kenya</option>
                                <option value="296">Kiribati</option>
                                <option value="408">Korea, Democratic People's Republic of</option>
                                <option value="410">Korea, Republic of</option>
                                <option value="414">Kuwait</option>
                                <option value="417">Kyrgyzstan</option>
                                <option value="418">Lao People's Democratic Republic</option>
                                <option value="428">Latvia</option>
                                <option value="422">Lebanon</option>
                                <option value="426">Lesotho</option>
                                <option value="430">Liberia</option>
                                <option value="434">Libya</option>
                                <option value="438">Liechtenstein</option>
                                <option value="440">Lithuania</option>
                                <option value="442">Luxembourg</option>
                                <option value="446">Macao</option>
                                <option value="807">Macedonia, the former Yugoslav Republic of</option>
                                <option value="450">Madagascar</option>
                                <option value="454">Malawi</option>
                                <option value="458">Malaysia</option>
                                <option value="462">Maldives</option>
                                <option value="466">Mali</option>
                                <option value="470">Malta</option>
                                <option value="584">Marshall Islands</option>
                                <option value="474">Martinique</option>
                                <option value="478">Mauritania</option>
                                <option value="480">Mauritius</option>
                                <option value="175">Mayotte</option>
                                <option value="484">Mexico</option>
                                <option value="583">Micronesia, Federated States of</option>
                                <option value="498">Moldova, Republic of</option>
                                <option value="492">Monaco</option>
                                <option value="496">Mongolia</option>
                                <option value="499">Montenegro</option>
                                <option value="500">Montserrat</option>
                                <option value="504">Morocco</option>
                                <option value="508">Mozambique</option>
                                <option value="104">Myanmar</option>
                                <option value="516">Namibia</option>
                                <option value="520">Nauru</option>
                                <option value="524">Nepal</option>
                                <option value="528">Netherlands</option>
                                <option value="540">New Caledonia</option>
                                <option value="554">New Zealand</option>
                                <option value="558">Nicaragua</option>
                                <option value="562">Niger</option>
                                <option value="566">Nigeria</option>
                                <option value="570">Niue</option>
                                <option value="574">Norfolk Island</option>
                                <option value="580">Northern Mariana Islands</option>
                                <option value="578">Norway</option>
                                <option value="512">Oman</option>
                                <option value="586">Pakistan</option>
                                <option value="585">Palau</option>
                                <option value="275">Palestinian Territory, Occupied</option>
                                <option value="591">Panama</option>
                                <option value="598">Papua New Guinea</option>
                                <option value="600">Paraguay</option>
                                <option value="604">Peru</option>
                                <option value="608">Philippines</option>
                                <option value="612">Pitcairn</option>
                                <option value="616">Poland</option>
                                <option value="620">Portugal</option>
                                <option value="630">Puerto Rico</option>
                                <option value="634">Qatar</option>
                                <option value="638">Réunion</option>
                                <option value="642">Romania</option>
                                <option value="643">Russian Federation</option>
                                <option value="646">Rwanda</option>
                                <option value="652">Saint Barthélemy</option>
                                <option value="654">Saint Helena, Ascension and Tristan da Cunha</option>
                                <option value="659">Saint Kitts and Nevis</option>
                                <option value="662">Saint Lucia</option>
                                <option value="663">Saint Martin (French part)</option>
                                <option value="666">Saint Pierre and Miquelon</option>
                                <option value="670">Saint Vincent and the Grenadines</option>
                                <option value="882">Samoa</option>
                                <option value="674">San Marino</option>
                                <option value="678">Sao Tome and Principe</option>
                                <option value="682">Saudi Arabia</option>
                                <option value="686">Senegal</option>
                                <option value="688">Serbia</option>
                                <option value="690">Seychelles</option>
                                <option value="694">Sierra Leone</option>
                                <option value="702">Singapore</option>
                                <option value="534">Sint Maarten (Dutch part)</option>
                                <option value="703">Slovakia</option>
                                <option value="705">Slovenia</option>
                                <option value="90">Solomon Islands</option>
                                <option value="706">Somalia</option>
                                <option value="710">South Africa</option>
                                <option value="239">South Georgia and the South Sandwich Islands</option>
                                <option value="728">South Sudan</option>
                                <option value="724">Spain</option>
                                <option value="144">Sri Lanka</option>
                                <option value="729">Sudan</option>
                                <option value="740">Suriname</option>
                                <option value="744">Svalbard and Jan Mayen</option>
                                <option value="748">Swaziland</option>
                                <option value="752">Sweden</option>
                                <option value="756">Switzerland</option>
                                <option value="760">Syrian Arab Republic</option>
                                <option value="158">Taiwan, Province of China</option>
                                <option value="762">Tajikistan</option>
                                <option value="834">Tanzania, United Republic of</option>
                                <option value="764">Thailand</option>
                                <option value="626">Timor-Leste</option>
                                <option value="768">Togo</option>
                                <option value="772">Tokelau</option>
                                <option value="776">Tonga</option>
                                <option value="780">Trinidad and Tobago</option>
                                <option value="788">Tunisia</option>
                                <option value="792">Turkey</option>
                                <option value="795">Turkmenistan</option>
                                <option value="796">Turks and Caicos Islands</option>
                                <option value="798">Tuvalu</option>
                                <option value="800">Uganda</option>
                                <option value="804">Ukraine</option>
                                <option value="784">United Arab Emirates</option>
                                <option value="826">United Kingdom</option>
                                <option value="840">United States</option>
                                <option value="581">United States Minor Outlying Islands</option>
                                <option value="858">Uruguay</option>
                                <option value="860">Uzbekistan</option>
                                <option value="548">Vanuatu</option>
                                <option value="862">Venezuela, Bolivarian Republic of</option>
                                <option value="704">Viet Nam</option>
                                <option value="92">Virgin Islands, British</option>
                                <option value="850">Virgin Islands, U.S.</option>
                                <option value="876">Wallis and Futuna</option>
                                <option value="732">Western Sahara</option>
                                <option value="887">Yemen</option>
                                <option value="894">Zambia</option>
                                <option value="716">Zimbabwe</option>
                            </select>
                        </div>
                    </div>
                    
                   <div class="form-group">
                        <label for="signup-inputBirthDate" class="col-sm-3 col-lg-3 col-md-3 control-label">Birth Date</label>
                        <div class="col-sm-9 col-lg-8 col-md-8">
                            <input required type="date" name="BirthDate" class="form-control" value="<?php if($BirthDate)echo $BirthDate ; ?>" id="signup-inputBirthDate" placeholder="06/10/1998"  >
                        </div>
                    </div>
    				<div class="form-group">
                        <div class=" col-sm-9 col-lg-9">
                            <button type="submit" class="btn btn-primary btn-block" id="signup-button">Sign Up</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
        <!-- <div class="form-group">
            <label for="signup-inputCountry" class="col-sm-3 col-lg-3 col-md-3 control-label">Country</label>
            <div class="col-sm-9 col-lg-8 col-md-8">
                <input required type="text" name="Country" class="form-control" value="" id="signup-inputCountry" placeholder=""  >
            </div>
        </div> -->