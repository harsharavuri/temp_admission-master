$("#register_personal_info").submit(function(e) {
    // e.preventDefault();
    var formData = "";
    formData += "StudentID=" + $("#signup-inputID").val();
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
            if (data.status === "success") {
				register_success(data.url);		
				$("#status").removeClass().addClass("alert alert-success").html(data.message);
                //window.location = window.location;
            } else {
				console.log(data.url);
                
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

function register_success(url){
	console.log(url);
	window.location.replace(url);
}