<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Registration extends CI_Controller {


	function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->library('session');
		
		$this->load->helper('url');

		$this->load->database();
			
		$this->load->helper('language');
		$this->load->helper(array('form', 'url'));
		$this->load->model('registrationmodel','',TRUE);
	}

	
	function index()
	{  	$data['StudentID'] = $this->input->post('StudentID');
		$data['FirstName'] = $this->input->post('FirstName');
		$data['MiddleName'] = $this->input->post('MiddleName');
		$data['LastName'] = $this->input->post('LastName');
		$data['FullName'] = $this->input->post('FullName');
		$data['FatherName'] = $this->input->post('FatherName');
		$data['MotherName'] = $this->input->post('MotherName');
		$data['StudentEmail'] = $this->input->post('StudentEmail');
		$data['ParentEmail'] = $this->input->post('ParentEmail');
		$data['Address'] = $this->input->post('Address');
		$data['Disability'] = $this->input->post('Disability');
		$data['Height'] = $this->input->post('Height');
		$data['Weight'] = $this->input->post('Weight');
		$data['IdentificationMarks'] = $this->input->post('IdentificationMarks');
		$data['StudentMobile'] = $this->input->post('StudentMobile');
		$data['ParentMobile'] = $this->input->post('ParentMobile');
		$data['FatherOccupation'] = $this->input->post('FatherOccupation');
		$data['MotherOccupation'] = $this->input->post('MotherOccupation');
		$data['DisabilityType'] = $this->input->post('DisabilityType');
		$data['Gender'] = $this->input->post('Gender');
		$data['Caste'] = $this->input->post('Caste');
		$data['Country'] = $this->input->post('Country');
		$data['BirthDate'] = $this->input->post('BirthDate');
		$data['ImageName'] = $this->input->post('ImageName');
		$this->_render_page('/personal_info',$data);
	}
	
	
	function verify_personal_info(){
		$data['StudentID'] = $this->input->post('StudentID');
		$data['FirstName'] = $this->input->post('FirstName');
		$data['MiddleName'] = $this->input->post('MiddleName');
		$data['LastName'] = $this->input->post('LastName');
		$data['FullName'] = $this->input->post('FullName');
		$data['FatherName'] = $this->input->post('FatherName');
		$data['MotherName'] = $this->input->post('MotherName');
		$data['StudentEmail'] = $this->input->post('StudentEmail');
		$data['ParentEmail'] = $this->input->post('ParentEmail');
		$data['Address'] = $this->input->post('Address');
		$data['Disability'] = $this->input->post('Disability');
		$data['Height'] = $this->input->post('Height');
		$data['Weight'] = $this->input->post('Weight');
		$data['IdentificationMarks'] = $this->input->post('IdentificationMarks');
		$data['StudentMobile'] = $this->input->post('StudentMobile');
		$data['ParentMobile'] = $this->input->post('ParentMobile');
		$data['FatherOccupation'] = $this->input->post('FatherOccupation');
		$data['MotherOccupation'] = $this->input->post('MotherOccupation');
		$data['DisabilityType'] = $this->input->post('DisabilityType');
		$data['Gender'] = $this->input->post('Gender');
		$data['Caste'] = $this->input->post('Caste');
		$data['Country'] = $this->input->post('Country');
		$data['BirthDate'] = $this->input->post('BirthDate');
		$data['ImageName'] = $this->input->post('ImageName');
		$this->_render_page('./verify_personal_info',$data);
	}	
	
	function register_personal_info(){
		$stat['status'] = 'failure';
		$data['StudentID'] = $this->input->post('StudentID');
		$data['FirstName'] = $this->input->post('FirstName');
		$data['MiddleName'] = $this->input->post('MiddleName');
		$data['LastName'] = $this->input->post('LastName');
		$data['FullName'] = $this->input->post('FullName');
		$data['FatherName'] = $this->input->post('FatherName');
		$data['MotherName'] = $this->input->post('MotherName');
		$data['StudentEmail'] = $this->input->post('StudentEmail');
		$data['ParentEmail'] = $this->input->post('ParentEmail');
		$data['Address'] = $this->input->post('Address');
		$data['Disability'] = $this->input->post('Disability');
		$data['Height'] = $this->input->post('Height');
		$data['Weight'] = $this->input->post('Weight');
		$data['IdentificationMarks'] = $this->input->post('IdentificationMarks');
		$data['StudentMobile'] = $this->input->post('StudentMobile');
		$data['ParentMobile'] = $this->input->post('ParentMobile');
		$data['FatherOccupation'] = $this->input->post('FatherOccupation');
		$data['MotherOccupation'] = $this->input->post('MotherOccupation');
		$data['DisabilityType'] = $this->input->post('DisabilityType');
		$data['Gender'] = $this->input->post('Gender');
		$data['Caste'] = $this->input->post('Caste');
		$data['Country'] = $this->input->post('Country');
		$data['BirthDate'] = $this->input->post('BirthDate');
		$extension = explode('.', $this->input->post('ImageName'));
		$data['ImageName'] = $data['StudentID'].'.'.$extension[1];
		// All the values in data variable are to be stored in the corresponding table
		if($this->registrationmodel->register_personal_info($data)){
			rename('C:/xampp/htdocs/temp_admission-master/files/'.$this->input->post('ImageName'),'C:/xampp/htdocs/temp_admission-master/files/'.$data['StudentID'].'.'.$extension[1]);
			$stat['status'] = "success";
            $stat['message'] = 'Account successfully created. Login now.';
            $stat['url'] = 'educational_info';
			echo json_encode($stat);
			return TRUE;
		}
		else{
			$stat['message'] = 'Incorrect input or email id already register.';
			echo json_encode($stat);
		}
		return FALSE;
	}

	
	function educational_info(){
		//$this->load->view('/educational_info');
		$data['StudentID'] = $this->input->post('StudentID');
		$data['RegNo'] = $this->input->post('RegNo');
		$data['RollNo'] = $this->input->post('RollNo');
		$data['Section'] = $this->input->post('Section');
		$data['AdmissionQuota'] = $this->input->post('AdmissionQuota');
		$data['MainsRank'] = $this->input->post('MainsRank');
		$data['SatScore'] = $this->input->post('SatScore');
		$data['YearOfAdmission'] = $this->input->post('YearOfAdmission');
		$data['YearOfStudy'] = $this->input->post('YearOfStudy');
		$data['AdmissionBatch'] = $this->input->post('AdmissionBatch');
		$data['Semester'] = $this->input->post('Semester');
		$data['Status'] = $this->input->post('Status');
		$data['Class10Percentage'] = $this->input->post('Class10Percentage');
		$data['Class12Percentage'] = $this->input->post('Class12Percentage');
		$this->_render_page('/educational_info', $data);
	}
	
	function verify_educational_info(){
		$data['StudentID'] = $this->input->post('StudentID');
		$data['RegNo'] = $this->input->post('RegNo');
		$data['RollNo'] = $this->input->post('RollNo');
		$data['Section'] = $this->input->post('Section');
		$data['AdmissionQuota'] = $this->input->post('AdmissionQuota');
		$data['MainsRank'] = $this->input->post('MainsRank');
		$data['SatScore'] = $this->input->post('SatScore');
		$data['YearOfAdmission'] = $this->input->post('YearOfAdmission');
		$data['YearOfStudy'] = $this->input->post('YearOfStudy');
		$data['AdmissionBatch'] = $this->input->post('AdmissionBatch');
		$data['Semester'] = $this->input->post('Semester');
		$data['Status'] = $this->input->post('Status');
		$data['Class10Percentage'] = $this->input->post('Class10Percentage');
		$data['Class12Percentage'] = $this->input->post('Class12Percentage');
		$this->_render_page('/verify_educational_info', $data);
	}
	
	function register_educational_info(){
		$stat['status'] = 'failure';
		$data['StudentID'] = $this->input->post('StudentID');
		$data['RegNo'] = $this->input->post('RegNo');
		$data['RollNo'] = $this->input->post('RollNo');
		$data['Section'] = $this->input->post('Section');
		$data['AdmissionQuota'] = $this->input->post('AdmissionQuota');
		$data['MainsRank'] = $this->input->post('MainsRank');
		$data['SatScore'] = $this->input->post('SatScore');
		$data['YearOfAdmission'] = $this->input->post('YearOfAdmission');
		$data['YearOfStudy'] = $this->input->post('YearOfStudy');
		$data['AdmissionBatch'] = $this->input->post('AdmissionBatch');
		$data['Semester'] = $this->input->post('Semester');
		$data['Status'] = $this->input->post('Status');
		$data['Class10Percentage'] = $this->input->post('Class10Percentage');
		$data['Class12Percentage'] = $this->input->post('Class12Percentage');
		// All the values in data variable are to be stored in the corresponding table
		if($this->registrationmodel->register_educational_info($data)){
			$stat['status'] = "success";
            $stat['message'] = 'Account successfully created. Login now.';
            $stat['url'] = 'payment_info';
			echo json_encode($stat);
			return TRUE;
		}
		else{
			$stat['message'] = 'Incorrect input or email id already register.';
			echo json_encode($stat);
		}
		//return FALSE;
	}
	
	
	function payment_info(){
		$data['StudentID'] = $this->input->post('StudentID');
		$data['PaymentMode'] = $this->input->post('PaymentMode');
		$data['Amount'] = $this->input->post('Amount');
		$data['DDUTRNumber'] = $this->input->post('DDUTRNumber');
		$data['StudentAccNumber'] = $this->input->post('StudentAccNumber');
		$data['HostelerDS'] = $this->input->post('HostelerDS');
		$this->_render_page('/payment_info',$data);
	}
	
	function verify_payment_info(){
		$data['StudentID'] = $this->input->post('StudentID');
		$data['PaymentMode'] = $this->input->post('PaymentMode');
		$data['Amount'] = $this->input->post('Amount');
		$data['DDUTRNumber'] = $this->input->post('DDUTRNumber');
		$data['StudentAccNumber'] = $this->input->post('StudentAccNumber');
		$data['HostelerDS'] = $this->input->post('HostelerDS');
		$this->_render_page('/verify_payment_info', $data);
	}
	
	
	function printpdf(){
		$data;
		$value['StudentID'] = $this->session->userdata('StudentID');
		$data['personal_info'] = $this->registrationmodel->get_personal_info($value);
		$data['educational_info'] = $this->registrationmodel->get_educational_info($value);
		$data['payment_info'] = $this->registrationmodel->get_payment_info($value);
		$this->_render_page('/printpdf', $data);
		
	}
	
	function omaha(){
		$data;

		$value['StudentID'] = $this->session->userdata('StudentID');;
		
		$data['personal_info'] = $this->registrationmodel->get_personal_info($value);
		$data['educational_info'] = $this->registrationmodel->get_educational_info($value);
		$data['payment_info'] = $this->registrationmodel->get_payment_info($value);
		$this->_render_page('/omaha', $data);
		
	}
	
	function enrollmentslip(){
		$data;
		$value['StudentID'] = $this->session->userdata('StudentID');;
		$data['personal_info'] = $this->registrationmodel->get_personal_info($value);
		$data['educational_info'] = $this->registrationmodel->get_educational_info($value);
		$data['payment_info'] = $this->registrationmodel->get_payment_info($value);
		$this->_render_page('/enrollmentslip', $data);
		
	}
	
	function register_payment_info(){
		$stat['status'] = 'failure';
		$data['StudentID'] = $this->input->post('StudentID');
		$data['PaymentMode'] = $this->input->post('PaymentMode');
		$data['Amount'] = $this->input->post('Amount');
		$data['DDUTRNumber'] = $this->input->post('DDUTRNumber');
		$data['StudentAccNumber'] = $this->input->post('StudentAccNumber');
		$data['HostelerDS'] = $this->input->post('HostelerDS');
		// All the values in data variable are to be stored in the corresponding table
		if($this->registrationmodel->register_payment_info($data)){
			$stat['status'] = 'success';
            $stat['message'] = 'Account successfully created. Login now.';
			$stat['url'] = 'printpdf';
			$this->session->set_userdata(array(
												'StudentID' => $data['StudentID']
												));
			echo json_encode($stat);
			return TRUE;
		}
		else{
			$stat['message'] = 'Incorrect input or email id already register.';
			echo json_encode($stat);
		}
		return FALSE;
	}
	
	
	public function upload_file()
	{
		$status = "";
		$msg = "";
		$file_element_name = 'Image';
		if ($status != "error")
		{
			$config['upload_path'] = './files/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size'] = 1024;
			//$config['overwrite'] = 1024;
			$config['encrypt_name'] = TRUE;
		
			$this->load->library('upload', $config);
	 
			if (!$this->upload->do_upload($file_element_name))
			{
				$status = 'error';
				$msg = $this->upload->display_errors('', '');
				$filename = 'error';
			}
			else
			{
				$data = $this->upload->data();
				//$file_id = $this->files_model->insert_file($data['file_name'], $_POST['title']);
				if($data)
				{	$filename = $data['file_name'];
					$status = "success";
					$msg = "File successfully uploaded";
				}
				else
				{
					unlink($data['full_path']);
					$status = "error";
					$msg = "Something went wrong when saving the file, please try again.";
					$filename = 'error';
				}
			}
			@unlink($_FILES[$file_element_name]);
		}
		echo json_encode(array('status' => $status, 'msg' => $msg, 'filename' => $filename));
	}
	


	function deleteFile(){
		$status='error';
		$imgBuffer = $this->input->post('imgBuffer');
		
		if($imgBuffer && $var= fopen('C:/xampp/htdocs/temp_admission-master/files/'.$imgBuffer, 'a')){
			fclose($var);
			if(unlink('C:/xampp/htdocs/temp_admission-master/files/'.$imgBuffer))
			$status='success';
		}
		
		echo json_encode(array('status' => $status, 'value'=>'C:/xampp/htdocs/temp_admission-master/files/'.$imgBuffer));
	}	
	

	function crop(){
		$this->load->view('photo');
	}
	function send_base64(){
		if (isset($_POST['base'])) {
			$data = $_POST['base'];
			list($type, $data) = explode(';', $data);
			list(, $data)      = explode(',', $data);
			$data = base64_decode($data);
			file_put_contents($_SERVER['DOCUMENT_ROOT']."/ap_admissions/files/".$_POST['name'], $data);
		}
	}

	 function _render_page($view, $data=null, $render=false)
     {  //$data['current_page'] = isset($data['current_page']) ? $data['current_page'] : 'home';
        $view_html = array(
            $this->load->view('/base/header', $data, $render),
            // $this->load->view('events/menu/header', $data, $render),
            $this->load->view($view, $data, $render),
            // $this->load->view('events/menu/footer', $data, $render),
            $this->load->view('/base/footer', $data, $render)
        );
        if (!$render) return $view_html;
    }



}