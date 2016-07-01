$("#register_personal_info").submit(function(e) {
    // e.preventDefault();
    var formData = "";
    formData += "&StudentID=" + $("#signup-inputID").val();
    formData += "&FirstName=" + $("#signup-inputFirstName").val();
    formData += "&MiddleName=" + $("#signup-inputMiddleName").val();
    formData += "&LastName=" + $("#signup-inputLastName").val();
    formData += "&FullName=" + $("#signup-inputFullName").val();
	formData += "&FatherName=" + $("#signup-inputFatherName").val();
	formData += "&MotherName=" + $("#signup-inputMotherName").val();
	formData += "&StudentEmail=" + $("#signup-inputStudentEmail").val();
	formData += "&ParentEmail=" + $("#signup-inputParentEmail").val();
	formData += "&Address=" + $("#signup-inputAddress").val();
	formData += "&Disability=" + $("#signup-inputDisability").val();
	formData += "&Height=" + $("#signup-inputHeight").val();
	formData += "&Weight=" + $("#signup-inputWeight").val();
	formData += "&IdentificationMarks=" + $("#signup-inputIdentificationMarks").val();
	formData += "&StudentMobile=" + $("#signup-inputStudentMobile").val();
	formData += "&ParentMobile=" + $("#signup-inputParentMobile").val();
	formData += "&FatherOccupation=" + $("#signup-inputFatherOccupation").val();
	formData += "&MotherOccupation=" + $("#signup-inputMotherOccupation").val();
	formData += "&DisabilityType=" + $("#signup-inputDisabilityType").val();
	formData += "&Gender=" + $("#signup-inputGender").val();
	formData += "&Caste=" + $("#signup-inputCaste").val();
	formData += "&Country=" + $("#signup-inputCountry").val();
	formData += "&BirthDate=" + $("#signup-inputBirthDate").val();
	$.ajax({
        url : "./register_personal_info",
        type: "POST",
        data : formData,
        success: function(data, textStatus, jqXHR)
        {
            data = JSON.parse(data);
            console.log(data);
            if (data.status === "success") {
			    register_success(data.url);		
				$("#status").removeClass().addClass("alert alert-success").html(data.message);
                //window.location = window.location;
            } else {
			    $("#status").removeClass().addClass("alert alert-danger").html(data.message);
            }
			
        },
        error: function (jqXHR, textStatus, errorThrown)
        {	console.log(error);
            $("#status").removeClass().addClass("alert alert-danger").html("Account is already created. Please login with your email and password");
        }
    });
    return false;
});


$("#register_educational_info").submit(function(e) {
    // e.preventDefault();
    var formData = "";
    formData += "StudentID=" + $("#signup-inputID").val();
    formData += "&RegNo=" + $("#signup-inputRegNo").val();
    formData += "&RollNo=" + $("#signup-inputRollNo").val();
    formData += "&Section=" + $("#signup-inputSection").val();
	formData += "&AdmissionQuota=" + $("#signup-inputAdmissionQuota").val();
	formData += "&MainsRank=" + $("#signup-inputMainsRank").val();
	formData += "&SatScore=" + $("#signup-inputSatScore").val();
	formData += "&YearOfAdmission=" + $("#signup-inputYearOfAdmission").val();
	formData += "&YearOfStudy=" + $("#signup-inputYearOfStudy").val();
	formData += "&AdmissionBatch=" + $("#signup-inputAdmissionBatch").val();
	formData += "&Semester=" + $("#signup-inputSemester").val();
	formData += "&Status=" + $("#signup-inputStatus").val();
	formData += "&Class10Percentage=" + $("#signup-inputClass10Percentage").val();
	formData += "&Class12Percentage=" + $("#signup-inputClass12Percentage").val();
	$.ajax({
        url : "./register_educational_info",
        type: "POST",
        data : formData,
        success: function(data, textStatus, jqXHR)
        {	console.log(data);
            data = JSON.parse(data);
            console.log(data);
            if (data.status === "success") {
                register_success(data.url);		
				$("#status").removeClass().addClass("alert alert-success").html(data.message);
                //window.location = window.location;
            } else {
                
				$("#status").removeClass().addClass("alert alert-danger").html(data.message);
            }
        },
        error: function (jqXHR, textStatus, errorThrown)
        {	//console.log(errorThrown);
			$("#status").removeClass().addClass("alert alert-danger").html("Account is already created. Please login with your email and password");
        }
    });
    return false;
});


$("#register_payment_info").submit(function(e) {
    // e.preventDefault();
    var formData = "";
	formData += "StudentID=" + $("#signup-inputID").val();
    formData += "&PaymentMode=" + $("#signup-inputPaymentMode").val();
    formData += "&Amount=" + $("#signup-inputAmount").val();
    formData += "&DDUTRNumber=" + $("#signup-inputDDUTRNumber").val();
    formData += "&StudentAccNumber=" + $("#signup-inputStudentAccNumber").val();
	formData += "&HostelerDS=" + $("#signup-inputHostelerDS").val();
	console.log($("#signup-inputPaymentMode").val());
	$.ajax({
        url : "./register_payment_info",
        type: "POST",
        data : formData,
        success: function(data, textStatus, jqXHR)
        {
            data = JSON.parse(data);
            console.log(data);
            if (data.status === 'success') {
				window.open('http://localhost/temp_admission-master/registration/omaha');
				window.open('http://localhost/temp_admission-master/registration/enrollmentslip');
				register_success(data.url);		
				$("#status").removeClass().addClass("alert alert-success").html(data.message);
                
            } else {
				console.log();
                
				$("#status").removeClass().addClass("alert alert-danger").html(data.message);
            }
        },
        error: function (jqXHR, textStatus, errorThrown)
        {	
			$("#status").removeClass().addClass("alert alert-danger").html("Account is already created. Please login with your email and password");
        }
    });
    return false;
});



	$('#signup-upload').click(function(e) {
		
		var formData = new FormData();
		//console.log(formData);
		formData.append('Image',document.getElementById('Image').files[0]);
		e.preventDefault();
		$.ajax({
			url:'./registration/upload_file/', 
			data: formData,
			cache: false,
			contentType: false,
			processData: false,
			type: 'POST',
			
			success	: function (data, status)
			{	if(data.status != 'error')
				{	console.log(document.getElementById('ImageName'));
					// console.log(JSON.parse(data).filename);
					window.location="./registration/crop?src="+JSON.parse(data).filename+"";
				var elem = document.getElementById('ImageName');
				//console.log(elem.value);
				if(elem.value!=""){
					//console.log(elem.value);
					var formData="";
					formData += 'imgBuffer='+$('#ImageBuffer').val();
					console.log(formData);
					document.getElementById('ImageBuffer').setAttribute('value', elem.value);
					$.ajax({
						url:'./registration/deleteFile/', 
						type: 'POST',
						data:formData,
						success	: function (data, status)
						{	if(JSON.parse(data).status == 'success')
							{
								console.log('success');
							}else{
								console.log('failure');
							}
							console.log(data);
							//alert(data.msg);
						}
					});
				}
				document.getElementById('ImageName').setAttribute('value', JSON.parse(data).filename);

				}else{
				}
				//alert(data.msg);
			}
		});
		return false;
	});



$(document).ready(
	function(){if($('#signup-inputAdmissionQuota').find(':selected').val()=='JEE'){
		
		$('#formMainsRank').css('display','block');
		$('#formSatScore').css('display','none');
		$('#signup-inputMainsRank').attr('required',true);
		$('#signup-inputSatScore').attr('required',false);
	}else{
		$('#formMainsRank').css('display','none');
		$('#formSatScore').css('display','block');
		$('#signup-inputMainsRank').attr('required',false);
		$('#signup-inputSatScore').attr('required',true);
	}
	}
);

$('#signup-inputAdmissionQuota').change(function(){
	
	if($('#signup-inputAdmissionQuota').find(':selected').val()=='JEE'){
		
		$('#formMainsRank').css('display','block');
		$('#formSatScore').css('display','none');
		$('#signup-inputMainsRank').attr('required',true);
		$('#signup-inputSatScore').attr('required',false);

		}else{
		$('#formMainsRank').css('display','none');
		$('#formSatScore').css('display','block');
		$('#signup-inputMainsRank').attr('required',false);
		$('#signup-inputSatScore').attr('required',true);
	}
	
});



function register_success(url){
	console.log(url);
	window.location.replace(url);
}