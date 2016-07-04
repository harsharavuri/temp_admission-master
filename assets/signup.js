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
	formData += "&ImageName=" + $("#ImageName").val();
	$.ajax({
        url : "./register_personal_info",
        type: "POST",
        data : formData,
        success: function(data, textStatus, jqXHR)
        {
            data = JSON.parse(data);
            console.log(data);
            if (data.status === "success") {
			    alert('success');
				register_success(data.url);		
				$("#status").removeClass().addClass("alert alert-success").html(data.message);
                //window.location = window.location;
            } else {
				alert(data.message);
			    //$("#status").removeClass().addClass("alert alert-danger").html(data.message);
            }
			
        },
        error: function (jqXHR, textStatus, errorThrown)
        {	alert(error);
            //$("#status").removeClass().addClass("alert alert-danger").html("Account is already created. Please login with your email and password");
        }
    });
    return false;
});

$(document).ready(function(){
	//document.getElementById('omaha').click();
	//document.getElementById('enrollmentslip').click();

	
	$(".drop_down_personal").on('click', function(e){
		e.preventDefault();
		var formData = "";
			formData += "StudentID="+event.target.getAttribute('value');
		$.ajax({
			url : "./registration/get_personal_values",
			type: "POST",
			data : formData,
			success: function(data, textStatus, jqXHR)
			{	console.log(data);
				data = JSON.parse(data);
				if (data['StudentID']) {
					$("#signup-inputID").val(data.StudentID);
					$("#signup-inputFirstName").val(data.FirstName);
					$("#signup-inputMiddleName").val(data.MiddleName);
					$("#signup-inputLastName").val(data.LastName);
					$("#signup-inputFullName").val(data.FullName);
					$("#signup-inputFatherName").val(data.FatherName);
					$("#signup-inputMotherName").val(data.MotherName);
					$("#signup-inputStudentEmail").val(data.StudentEmail);
					$("#signup-inputParentEmail").val(data.ParentEmail);
					$("#signup-inputAddress").val(data.Address);
					$("#signup-inputDisability").val(data.Disability);
					$("#signup-inputHeight").val(data.Height);
					$("#signup-inputWeight").val(data.Weight);
					$("#signup-inputIdentificationMarks").val(data.IdentificationMarks);
					$("#signup-inputStudentMobile").val(data.StudentMobile);
					$("#signup-inputParentMobile").val(data.ParentMobile);
					$("#signup-inputFatherOccupation").val(data.FatherOccupation);
					$("#signup-inputMotherOccupation").val(data.MotherOccupation);
					setDropDown(document.getElementById("signup-inputDisabilityType"),data.DisabilityType);//$("#signup-inputDisabilityType").val(data.DisabilityType);
					setDropDown(document.getElementById("signup-inputGender"), data.Gender);//$("#signup-inputGender").val(data.Gender);
					setDropDown(document.getElementById("signup-inputCaste"), data.Caste);//$("#signup-inputCaste").val(data.Caste);
					setDropDown(document.getElementById("signup-inputCountry"), data.Country);//$("#signup-inputCountry").val(data.Country);
					$("#signup-inputBirthDate").val(data.BirthDate);
					$("#ImageName").val(data.ImageName);
					alert('success');
					
				} else {
					alert('Error');
				}
			},
			error: function (jqXHR, textStatus, errorThrown)
			{	
				alert(errorThrown);
			}
		});
	});

	$(".drop_down_educational").on('click', function(e){
		e.preventDefault();
		var formData = "";
			formData += "StudentID="+event.target.getAttribute('value');
		$.ajax({
			url : "./get_educational_values",
			type: "POST",
			data : formData,
			success: function(data, textStatus, jqXHR)
			{	console.log(data);
				data = JSON.parse(data);
				if (data['StudentID']) {
					alert('success');
					    $("#signup-inputID").val(data.StudentID);
						$("#signup-inputRegNo").val(data.RegNo);
						$("#signup-inputRollNo").val(data.RollNo);
						$("#signup-inputSection").val(data.Section);
						setDropDown(document.getElementById("signup-inputAdmissionQuota"),data.AdmissionQuota);//$("#signup-inputAdmissionQuota").val(data.AdmissionQuota);
						$("#signup-inputMainsRank").val(data.MainsRank);
						$("#signup-inputSatScore").val(data.SatScore);
						setDropDown(document.getElementById("signup-inputYearOfAdmission"),data.YearOfAdmission);//$("#signup-inputYearOfAdmission").val(data.YearOfAdmission);
						setDropDown(document.getElementById("signup-inputYearOfStudy"),data.YearOfStudy);//$("#signup-inputYearOfStudy").val(data.YearOfStudy);
						$("#signup-inputAdmissionBatch").val(data.AdmissionBatch);
						setDropDown(document.getElementById("signup-inputSemester"),data.Semester);//$("#signup-inputSemester").val(data.Semester);
						setDropDown(document.getElementById("signup-inputStatus"),data.Status);//$("#signup-inputStatus").val(data.Status);
						$("#signup-inputClass10Percentage").val(data.Class10Percentage);
						$("#signup-inputClass12Percentage").val(data.Class12Percentage);
					
				} else {
					alert('Error');
					console.log(data);
				}
			},
			error: function (jqXHR, textStatus, errorThrown)
			{	
				alert(errorThrown);
			}
		});
	});
	
	
	$(".drop_down_payment").on('click', function(e){
		e.preventDefault();
		var formData = "";
			formData += "StudentID="+event.target.getAttribute('value');
			
		$.ajax({
			url : "./get_payment_values",
			type: "POST",
			data : formData,
			success: function(data, textStatus, jqXHR)
			{	console.log(data);
				data = JSON.parse(data);
				if (data['StudentID']) {
					alert('success');
					$("#signup-inputStudentID").val(data.StudentID);
					setDropDown(document.getElementById("signup-inputPaymentMode"),data.PaymentMode);//$("#signup-inputPaymentMode").val(data.PaymentMode);
					$("#signup-inputAmount").val(data.Amount);
					$("#signup-inputDDUTRNumber").val(data.DDUtrNumber);
					$("#signup-inputStudentAccNumber").val(data.StudentAccNumber);
					setDropDown(document.getElementById("signup-inputHostelerDS"),data.HostelerDS);//$("#signup-inputHostelerDS").val(data.HostelerDS);
								} else {
					alert('Error');
				}
			},
			error: function (jqXHR, textStatus, errorThrown)
			{	
				alert(errorThrown);
			}
		});
	});
	

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
                alert('success');
				register_success(data.url);		
				//$("#status").removeClass().addClass("alert alert-success").html(data.message);
                //window.location = window.location;
            } else {
                alert(data.message);
				//$("#status").removeClass().addClass("alert alert-danger").html(data.message);
            }
        },
        error: function (jqXHR, textStatus, errorThrown)
        {	console.log(errorThrown);
			alert("Account is already created. Please login with your email and password");
			//$("#status").removeClass().addClass("alert alert-danger").html("Account is already created. Please login with your email and password");
        }
    });
    return false;
});


$("#register_payment_info").submit(function(e) {
    e.preventDefault();
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
            //console.log(data);
            if (data.status === 'success') {
				
				window.open('http://localhost/temp_admission-master/registration/omaha');
				window.open('http://localhost/temp_admission-master/registration/enrollmentslip');
				
				register_success(data.url);		
				alert('success');
				//$("#status").removeClass().addClass("alert alert-success").html(data.message);
                
            } else {
				//console.log();
                alert(data.msg);
				//$("#status").removeClass().addClass("alert alert-danger").html(data.message);
            }
        },
        error: function (jqXHR, textStatus, errorThrown)
        {	
			console.log(errorThrown);
			alert("Account is already created. Please login with your email and password");
			//$("#status").removeClass().addClass("alert alert-danger").html("Account is already created. Please login with your email and password");
        }
    });
    return false;
});



	$('#signup-upload').click(function(e) {
		
		var formData = new FormData();
		if($('signup-inputID').value==""){
			//alert('Fill your id first');
		}
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
			{	data = JSON.parse(data);
				if(data.status != 'error')
				{	
					window.location="./registration/crop?src="+data.filename+"";
					//console.log('yo');
					var elem = document.getElementById('ImageName');
					
				if(elem.value!=""){
					var formData="";
					formData += 'imgBuffer='+$('#ImageName').val();
					document.getElementById('ImageBuffer').setAttribute('value', elem.value);
					$.ajax({
						url:'./registration/deleteFile/', 
						type: 'POST',
						data:formData,
						success	: function (data, status)
						{	if(data.status == 'success')
							{
								alert('success');
							}else{
								if(data.msg!=undefined)
								alert(data.msg);
							}
							//console.log(data);
							//alert(data.msg);
						}
					});
				}
					document.getElementById('ImageName').setAttribute('value', data.filename);
					window.location="./registration/crop?src="+data.filename+"";
				}else{
					alert(data.msg);
				}
				console.log();
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


function setDropDown(elem, val){
	console.log(elem);
	console.log(val);
	var length = elem.options.length;
	for(var i=0;i<length;i++){
		if(elem.options[i].value == val){
			elem.options[i].setAttribute('selected',true);
		}else{
			elem.options[i].removeAttribute('selected',false);
		}
	}
}


function register_success(url){
	window.location.replace(url);
}