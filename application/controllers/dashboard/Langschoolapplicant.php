<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Langschoolapplicant extends CI_Controller
{
  private $private_db = "dashboard/Langschoolapplicant_Model";
	private $data, $key, $url;
  //Initial auth session
	protected $current_id, $current_user, $current_role, $current_csrf_key, $current_permission, $current_session_count, $current_login_time, $current_log_id, $session_checker, $user_config;
  //Initial presite config
	protected $site_name, $meta_tag, $favicon, $decimal_point, $date_format, $phone_format, $user_session, $timezone;

  //File upload data
  private $filename;
  private $upload_path = "./upload/assets/adm/usr/";
  private $file_path = "/../../../upload/assets/adm/usr/";
  private $max_size = "202800";  // upload max size 200 MB
  private $max_width = "1024";
  private $max_height = "1024";
  private $allow_type = 'jpg|jpeg|png|JPEG';

  public function __construct()
  {
    parent::__construct();
    $this->load->database();
    $this->load->model($this->private_db);
    $this->load->library('form_validation');
    $this->load->library('session');
    $this->load->library('encryption');
    $this->load->library('user_agent');
    $this->load->library('upload');
    $this->load->library('email');
    $this->load->library('mainconfig');
		$this->load->helper('custom');
		$this->mainconfig->_DefaultTimeZone($this->timezone);
		
		/** Current User Session Assign **/
		$this->__preSessionDataSet();
		/** Site Configuration Assign **/
		$this->user_config = $this->__preSiteConfigDataSet();
		
		/** Token Checker **/
		$this->__tokenChecker();
		
		/** User Permission Checker **/
		$this->key = "pe_student";
		$this->url = "adm/portal/d-panel";
		$this->__permissionChecker($this->key,$this->url);
  }
  
  public function index()
  {
    /** User Permission Checker **/
		$this->__permissionChecker($this->key,$this->url);
		$globalHeader = array(
			"alert" => $this->mainconfig->_DefaultNotic(),
			'title' => "Student Lists",
			'msg' => "",
			'uri' => array("langschoolapplicant","jls_lists"),
			'config' => $this->user_config
		);
		
		$list = $this->Langschoolapplicant_Model->getStudentList();
		//*** Generate necessary key and value
		$Q_list = _transfer_key_prepare(array_keys_checker($list));
		$this->data['lists'] = array_transfer($list, $Q_list);
    $this->data['course'] = $this->Langschoolapplicant_Model->getStudentCourseRequest();	
		$this->data = $this->mainconfig->_ArrayDataMarge($globalHeader, $this->data);

    // For data showing (course, )
    $this->load->view('dashboard/langschoolstudent/lists', $this->data);

  }

  public function new()
  {
    /** User Permission Checker **/
		$this->__permissionChecker($this->key,$this->url);
		$globalHeader = array(
			"alert" => $this->mainconfig->_DefaultNotic(),
			'title' => "Student Lists",
			'msg' => "",
			'uri' => array("langschoolapplicant","jls_lists"),
			'config' => $this->user_config
		);
		
		$list = $this->Langschoolapplicant_Model->getStudentList();
		//*** Generate necessary key and value
		$Q_list = _transfer_key_prepare(array_keys_checker($list));
		$this->data['lists'] = array_transfer($list, $Q_list);
    $this->data['course'] = $this->Langschoolapplicant_Model->getStudentCourseRequest();	
		$this->data = $this->mainconfig->_ArrayDataMarge($globalHeader, $this->data);

    // For data showing (course, )
    $this->load->view('dashboard/langschoolstudent/lists', $this->data);

  }
  public function interview()
  {
    /** User Permission Checker **/
		$this->__permissionChecker($this->key,$this->url);
		$globalHeader = array(
			"alert" => $this->mainconfig->_DefaultNotic(),
			'title' => "Student Lists",
			'msg' => "",
			'uri' => array("langschoolapplicant","jls_lists"),
			'config' => $this->user_config
		);
		
		$list = $this->Langschoolapplicant_Model->getStudentList();
		//*** Generate necessary key and value
		$Q_list = _transfer_key_prepare(array_keys_checker($list));
		$this->data['lists'] = array_transfer($list, $Q_list);
    $this->data['course'] = $this->Langschoolapplicant_Model->getStudentCourseRequest();	
		$this->data = $this->mainconfig->_ArrayDataMarge($globalHeader, $this->data);

    // For data showing (course, )
    $this->load->view('dashboard/langschoolstudent/lists', $this->data);

  }
  public function add()
	{
    /** User Permission Checker **/
		$this->__permissionChecker($this->key,$this->url);

		$globalHeader = array(
			"alert" => $this->mainconfig->_DefaultNotic(),
			'title' => "Add JLS Student",
			'msg' => "",
			'uri' => array("langschoolapplicant","jls_add"),
			'config' => $this->user_config,
		);
		$this->data = $this->mainconfig->_ArrayDataMarge($globalHeader, []);

		if($_POST) {
			// $this->form_validation->set_rules('std_name', 'student name', 'trim|required|min_length[5]|is_unique[OSL_std_profile.name]|xss_clean');
			// $this->form_validation->set_rules('std_email', 'email', 'trim|required|valid_email|is_unique[OSL_student.email]|xss_clean');
      // $this->form_validation->set_rules('std_password', 'password', 'trim|required|min_length[6]|max_length[30]|xss_clean');
      // $this->form_validation->set_rules('conf_password', 'confirm password', 'trim|required|min_length[6]|max_length[30]|xss_clean|matches[std_password]');
      $this->form_validation->set_rules('jls_name', 'jls name', 'trim|required|xss_clean');      
      // $this->form_validation->set_rules('applicant_name', 'applicant name', 'trim|required|xss_clean');
      // $this->form_validation->set_rules('applicant_name_kanji', 'applicant name kanji', 'trim|required|xss_clean');
      // $this->form_validation->set_rules('date_of_birthday', 'date of birthday.', 'trim|required|xss_clean');
      // $this->form_validation->set_rules('place_birth', 'place birth', 'trim|required|xss_clean');
			// $this->form_validation->set_rules('age', 'age', 'trim|required|xss_clean');
      // $this->form_validation->set_rules('nationality', 'nationality', 'trim|required|xss_clean');   
      // $this->form_validation->set_rules('gender', 'gender', 'trim|required|xss_clean');
      // $this->form_validation->set_rules('martial_status', 'martial status', 'trim|required|xss_clean');
      // //$this->form_validation->set_rules('partaner_name', 'partaner name.', 'trim|required|xss_clean');
      // $this->form_validation->set_rules('place_birth', 'place birth', 'trim|required|xss_clean');
			// $this->form_validation->set_rules('std_email', 'std email', 'trim|required|xss_clean');
      // $this->form_validation->set_rules('phone', 'phone', 'trim|required|numeric|xss_clean');
      // $this->form_validation->set_rules('std_facebook', 'facebook account', 'trim|xss_clean');
      // $this->form_validation->set_rules('userfile', 'Student photo', 'trim|xss_clean');

			// $this->form_validation->set_message('required', 'You must enter %s!');
			// $this->form_validation->set_message('is_unique', 'Your %s is already exits!');
			// $this->form_validation->set_message('numeric', 'The %s always allow only numbers!');
			// $this->form_validation->set_message('valid_email', 'The %s must be valid!');

			if ($this->form_validation->run() === false) {
				$this->load->view('dashboard/langschoolstudent/add', $this->data);
			} else {
        

				$data_info = array(
					'jls_name' => $this->input->post('jls_name'),
          'applicant_name' => $this->input->post('applicant_name'),
          'applicant_name_kanji' => $this->input->post('applicant_name_kanji'),
          'date_of_birthday' => $this->input->post('date_of_birthday'),
          'place_birth' => $this->input->post('place_birth'),
          'age' => $this->input->post('age'),
          'nationality' => $this->input->post('nationality'),
          'gender' => $this->input->post('gender'),
          'martial_status' => $this->input->post('martial_status'),
          'partaner_name' => $this->input->post('partaner_name'),
          'std_email' => $this->input->post('std_email'),
          'phone' => $this->input->post('phone'),
          'address' => $this->input->post('address'),
          'course_study_lengh' => $this->input->post('course_study_lengh'),
          'occupation' => $this->input->post('occupation'),
          'place_employment_school' => $this->input->post('place_employment_school'),
          'addr_employment_school' => $this->input->post('addr_employment_school'),
          'tel_employment_school' => $this->input->post('tel_employment_school'),
          'entry_age_ele_school' => $this->input->post('entry_age_ele_school'),
          'duration_jp_language_study' => $this->input->post('duration_jp_language_study'),
          'passport' => $this->input->post('passport'),
          'educational_school_name' => $this->input->post('educational_school_name'),
          'passport_no' => $this->input->post('passport_no'),
          'passport_data_issue' => $this->input->post('passport_data_issue'),
          'passport_data_exp' => $this->input->post('passport_data_exp'),
          'military_service' => $this->input->post('military_service'),
          'family_mail' => $this->input->post('family_mail'),
          'family_tel' => $this->input->post('family_tel'),
          'family_address' => $this->input->post('family_address'),
          
          
          // 'created_at' => date('Y-m-d H:i:s'),
          // 'updated_at' => date('Y-m-d H:i:s'),
          // 'status' => $this->input->post('std_status'),
          // 'permission' => $this->input->post('std_permission')
        );
        $data_info = $this->__Xss($data_info);

        if (!empty($_FILES['userfile']['name'])) {
          //image upload sever and add database
          $imgupload = $this->mainconfig->_fileUpload($this->filename, $this->upload_path, $this->max_size, $this->max_width, $this->max_height, $this->allow_type, TRUE, TRUE, FALSE);

          if (!empty($imgupload['msg_error'])) {
            $this->session->set_flashdata('msg_error', $imgupload['msg_error']);
            redirect('adm/portal/jls_applicant/add');
          } else {
            $data_info['image_file'] = $imgupload['file_name'];
          }
        }
        if (!empty($_FILES['signfile']['name'])) {
          //image upload sever and add database
          $imgupload = $this->mainconfig->_fileUpload($this->filename, $this->upload_path, $this->max_size, $this->max_width, $this->max_height, $this->allow_type, TRUE, TRUE, FALSE);

          if (!empty($imgupload['msg_error'])) {
            $this->session->set_flashdata('msg_error', $imgupload['msg_error']);
            redirect('adm/portal/jls_applicant/add');
          } else {
            $data_info['sign_file'] = $imgupload['file_name'];
          }
        }

        $applicant_id = $this->Langschoolapplicant_Model->JLSapplicantinfo($data_info);

        $data_details = array(
          'applicant_id' => $applicant_id,
          'have_you_visited_jp' => $this->input->post('have_you_visited_jp'),
          'visited_date' => $this->input->post('visited_date'),
          'date_of_departure' => $this->input->post('date_of_departure'),
          'visa_type' => $this->input->post('visa_type'),
          'school_apply_before_japan' => $this->input->post('school_apply_before_japan'),
          'school_apply_date' => $this->input->post('school_apply_date'),
          'school_apply_status' => $this->input->post('school_apply_status'),
          'school_apply_name' => $this->input->post('school_apply_name'),
          'immigration_office' => $this->input->post('immigration_office'),
          'immigration_result' => $this->input->post('immigration_result'),
          'COE_reject' => $this->input->post('COE_reject'),
          'place_apply_visa' => $this->input->post('place_apply_visa'),
					'family_language' => $this->input->post('family_language'),
          'eligibility_have' => $this->input->post('eligibility_have'),
          'eligibility_time' => $this->input->post('eligibility_time'),
          'eligibility_purpose' => $this->input->post('eligibility_purpose'),
          'eligibility_date' => $this->input->post('eligibility_date'),
          'provide_english' => $this->input->post('provide_english'),
          'accompanying_person' => $this->input->post('accompanying_person'),
          'criminal_record' => $this->input->post('criminal_record'),
          'criminal_record_details' => $this->input->post('criminal_record_details'),
          'departure_deportation' => $this->input->post('departure_deportation'),
          'current_status' => $this->input->post('current_status'),
          'current_status_school_name' => $this->input->post('current_status_school_name'),
          'current_status_school_major' => $this->input->post('current_status_school_major'),
          'current_status_school_grade' => $this->input->post('current_status_school_grade'),
          'expected_month' => $this->input->post('expected_month'),
          'expected_year' => $this->input->post('expected_year'),
          'specific_plans_after_graduating	' => $this->input->post('specific_plans_after_graduating	'),
          'specific_plan_type_schools' => $this->input->post('specific_plan_type_schools'),
          'specific_plan_school_name' => $this->input->post('specific_plan_school_name'),
          'specific_plan_major' => $this->input->post('specific_plan_major'),
          'will_you_return' => $this->input->post('will_you_return'),
          'purpose_studying_in_japanese	' => $this->input->post('purpose_studying_in_japanese	'),
        );
        $data_details = $this->__Xss($data_details);      
        $this->Langschoolapplicant_Model->JLSapplicantdetails($data_details);

        $data_financial_sponsor = array(
          'applicant_id' => $applicant_id,
          'name' => $this->input->post('name'),
          'age' => $this->input->post('age'),
          'address' => $this->input->post('address'),
          'tel' => $this->input->post('tel'),
          'email' => $this->input->post('email'),
          'occupation' => $this->input->post('occupation'),
          'work_place' => $this->input->post('work_place'),
          'annual_income' => $this->input->post('annual_income'),
          'amount_saving_for_study_abroad' => $this->input->post('amount_saving_for_study_abroad'),
          'amount_of_saving_which_proved' => $this->input->post('amount_of_saving_which_proved'),
          'start_work_date' => $this->input->post('start_work_date'),
      ); 
      $data_financial_sponsor = $this->__Xss($data_financial_sponsor);      
      $this->Langschoolapplicant_Model->JLSfinancialsponser($data_financial_sponsor);

        $edu_name=$_POST['edu_name'];
        $edu_address=$_POST['edu_address'];
        $edu_start_date=$_POST['edu_start_date'];
        $edu_end_date=$_POST['edu_end_date'];
        $edu_year=$_POST['edu_year'];
        $count1 = count($_POST['edu_name']);

        for($i=0; $i<$count1; $i++) {
          $data_edu_history = array(
            'applicant_id' => $applicant_id,
            'edu_name' => $edu_name[$i], 
            'address' => $edu_address[$i],
            'start_date' => $edu_start_date[$i],
            'end_date' => $edu_end_date[$i],
            'year' => $edu_year[$i],
          ); 
          $this->db->insert('JLS_educational_history', $data_edu_history);
          
        }
        $jp_name=$_POST['jp_name'];
        $jp_address=$_POST['jp_address'];
        $jp_start_date=$_POST['jp_start_date'];
        $jp_end_date=$_POST['jp_end_date'];
        $jp_hour=$_POST['jp_hour'];
        $count1 = count($_POST['jp_name']);

        for($i=0; $i<$count1; $i++) {
          $data_lang_study = array(
            'applicant_id' => $applicant_id,
            'jp_name' => $jp_name[$i], 
            'address' => $jp_address[$i],
            'start_date' => $jp_start_date[$i],
            'end_date' => $jp_end_date[$i],
            'hour' => $jp_hour[$i],
          ); 
          $this->db->insert('JLS_previous_jp_lang_study', $data_lang_study);
          
        }
        // JLS_achievement_jp_lang_test
        $achiv_name=$_POST['achiv_name'];
        $level=$_POST['achiv_level'];
        $exam_year=$_POST['achiv_exam_year'];
        $score=$_POST['achiv_score'];
        $result=$_POST['achiv_result'];
        $date_qualification=$_POST['achiv_date_qualification'];
        $count1 = count($_POST['achiv_name']);

        for($i=0; $i<$count1; $i++) {
          $data_achievement_jp = array(
            'applicant_id' => $applicant_id,
            'name' => $achiv_name[$i], 
            'level' => $level[$i],
            'exam_year' => $exam_year[$i],
            'score' => $score[$i],
            'result' => $result[$i],
            'date_qualification' => $date_qualification[$i],
          ); 
          $this->db->insert('JLS_achievement_jp_lang_test', $data_achievement_jp);
          
        }
        // JLS_achievement_jp_lang_test  
        //JLS_name_jp_lang_tests_going_to_take
        $going_name=$_POST['going_name'];
        $going_level=$_POST['going_level'];
        $count1 = count($_POST['going_name']);

        for($i=0; $i<$count1; $i++) {
          $data_jp_lang_going_to_take = array(
            'applicant_id' => $applicant_id,
            'going_name' => $going_name[$i], 
            'going_level' => $going_level[$i],
          ); 
          $this->db->insert('JLS_name_jp_lang_tests_going_to_take', $data_jp_lang_going_to_take);
          
        }
        //JLS_name_jp_lang_tests_going_to_take
        //JLS_history_employment
        $emp_name=$_POST['emp_name'];
        $emp_address=$_POST['emp_address'];
        $emp_start_date=$_POST['emp_start_date'];
        $emp_end_date=$_POST['emp_start_date'];
        $emp_year=$_POST['emp_year'];
        $emp_job_description=$_POST['emp_job_description'];
        $count1 = count($_POST['emp_name']);

        for($i=0; $i<$count1; $i++) {
          $data_history_employment = array(
            'applicant_id' => $applicant_id,
            'name' => $emp_name[$i], 
            'address' => $emp_address[$i],
            'start_date' => $emp_start_date[$i],
            'end_date' => $emp_end_date[$i],
            'year' => $emp_year[$i],
            'job_description' => $emp_job_description[$i],
          ); 
          $this->db->insert('JLS_history_employment', $data_history_employment);
          
        }
        //JLS_history_employment

        //JLS_family_member
        $fam_name=$_POST['fam_name'];
        $relationship=$_POST['fam_relationship'];
        $work_place=$_POST['fam_work_place'];
        $birthday=$_POST['fam_birthday'];
        $occupation=$_POST['fam_occupation'];
        $annual_income=$_POST['fam_annual_income'];
        $address=$_POST['fam_address'];
        $length_sevice=$_POST['fam_length_sevice'];
        $count1 = count($_POST['fam_name']);
        

        for($i=0; $i<$count1; $i++) {
          $data_family_member = array(
            'applicant_id' => $applicant_id,
            'name' => $fam_name[$i], 
            'relationship' => $relationship[$i],
            'work_place' => $work_place[$i],
            'birthday' => $birthday[$i],
            'occupation' => $occupation[$i],
            'annual_income' => $annual_income[$i],
            'address' => $address[$i],
            'length_sevice' => $length_sevice[$i],
          ); 
          $this->db->insert('JLS_family_member', $data_family_member);
          
        }
        //JLS_family_member

        //JLS_family_in_japan
         $plan_to_stay_with_them=$_POST['ja_plan_to_stay_with_them'];
         $name=$_POST['ja_fam_name'];
         $age=$_POST['ja_fam_age'];
         $relationship=$_POST['ja_fam_relationship'];
         $residing_applicant=$_POST['ja_fam_residing_applicant'];
         $nationality=$_POST['ja_fam_nationality'];
         $visa_status=$_POST['ja_fam_visa_status'];
         $work_place=$_POST['ja_fam_work_place'];
         $count1 = count($_POST['ja_fam_name']);
         
 
         for($i=0; $i<$count1; $i++) {
           $data_family_japan = array(
             'applicant_id' => $applicant_id,
             'plan_to_stay_with_them' => $plan_to_stay_with_them[$i], 
             'name' => $name[$i],
             'age' => $age[$i],
             'relationship' => $relationship[$i],
             'residing_applicant' => $residing_applicant[$i],
             'nationality' => $nationality[$i],
             'visa_status' => $visa_status[$i],
             'work_place' => $work_place[$i],
           ); 
           $this->db->insert('JLS_family_in_japan', $data_family_japan);
           
         }
        //JLS_family_in_japan

        //JLS_previous_stay_in_japan
        $entry_date=$_POST['entry_date'];
        $arrival_date=$_POST['arrival_date'];
        $depature_date=$_POST['depature_date'];
        $status=$_POST['status'];
        $entry_purpose=$_POST['entry_purpose'];
        $count1 = count($_POST['entry_date']);
        

        for($i=0; $i<$count1; $i++) {
          $data_previous_stay_japan = array(
            'applicant_id' => $applicant_id,
            'entry_date' => $entry_date[$i], 
            'arrival_date' => $arrival_date[$i],
            'depature_date' => $depature_date[$i],
            'status' => $status[$i],
            'entry_purpose' => $entry_purpose[$i],
          ); 
          $this->db->insert('JLS_previous_stay_in_japan', $data_previous_stay_japan);
          
        }
       //JLS_previous_stay_in_japan 

      // $data_edu_history = $this->__Xss($data_edu_history);      
      // $this->Langschoolapplicant_Model->JLSeduhistory($data_edu_history);
        
        $this->session->set_flashdata('msg_success', 'Your data has been insert!');
        redirect('adm/portal/jls_applicant/add');
			}
		} else {
			$this->load->view('dashboard/langschoolstudent/add', $this->data);
		}
  }


  // confirm
  public function confirm()
	{
    /** User Permission Checker **/
		$this->__permissionChecker($this->key,$this->url);

		$globalHeader = array(
			"alert" => $this->mainconfig->_DefaultNotic(),
			'title' => "Add JLS Student",
			'msg' => "",
			'uri' => array("langschoolapplicant","jls_add"),
			'config' => $this->user_config,
		);
		$this->data = $this->mainconfig->_ArrayDataMarge($globalHeader, []);

		if($_POST) {
			// $this->form_validation->set_rules('std_name', 'student name', 'trim|required|min_length[5]|is_unique[OSL_std_profile.name]|xss_clean');
			// $this->form_validation->set_rules('std_email', 'email', 'trim|required|valid_email|is_unique[OSL_student.email]|xss_clean');
      // $this->form_validation->set_rules('std_password', 'password', 'trim|required|min_length[6]|max_length[30]|xss_clean');
      // $this->form_validation->set_rules('conf_password', 'confirm password', 'trim|required|min_length[6]|max_length[30]|xss_clean|matches[std_password]');
      $this->form_validation->set_rules('jls_name', 'jls name', 'trim|required|xss_clean');      
      $this->form_validation->set_rules('applicant_name', 'applicant name', 'trim|required|xss_clean');
      $this->form_validation->set_rules('applicant_name_kanji', 'applicant name kanji', 'trim|required|xss_clean');
      $this->form_validation->set_rules('date_of_birthday', 'date of birthday.', 'trim|required|xss_clean');
      $this->form_validation->set_rules('place_birth', 'place birth', 'trim|required|xss_clean');
			$this->form_validation->set_rules('age', 'age', 'trim|required|xss_clean');
      $this->form_validation->set_rules('nationality', 'nationality', 'trim|required|xss_clean');   
      $this->form_validation->set_rules('gender', 'gender', 'trim|required|xss_clean');
      $this->form_validation->set_rules('martial_status', 'martial status', 'trim|required|xss_clean');
      //$this->form_validation->set_rules('partaner_name', 'partaner name.', 'trim|required|xss_clean');
      $this->form_validation->set_rules('place_birth', 'place birth', 'trim|required|xss_clean');
			$this->form_validation->set_rules('std_email', 'std email', 'trim|required|xss_clean');
      $this->form_validation->set_rules('phone', 'phone', 'trim|required|numeric|xss_clean');
      // $this->form_validation->set_rules('std_facebook', 'facebook account', 'trim|xss_clean');
      // $this->form_validation->set_rules('userfile', 'Student photo', 'trim|xss_clean');

			// $this->form_validation->set_message('required', 'You must enter %s!');
			// $this->form_validation->set_message('is_unique', 'Your %s is already exits!');
			// $this->form_validation->set_message('numeric', 'The %s always allow only numbers!');
			// $this->form_validation->set_message('valid_email', 'The %s must be valid!');

			if ($this->form_validation->run() === false) {
				$this->load->view('dashboard/langschoolstudent/confirm', $this->data);
			} else {
        

				$data = array(
					'jls_name' => $this->input->post('jls_name'),
          'applicant_name' => $this->input->post('applicant_name'),
          'applicant_name_kanji' => $this->input->post('applicant_name_kanji'),
          'date_of_birthday' => $this->input->post('date_of_birthday'),
          'place_birth' => $this->input->post('place_birth'),
          'age' => $this->input->post('age'),
          'nationality' => $this->input->post('nationality'),
          'gender' => $this->input->post('gender'),
          'martial_status' => $this->input->post('martial_status'),
          'partaner_name' => $this->input->post('partaner_name'),
          'std_email' => $this->input->post('std_email'),
          'phone' => $this->input->post('phone'),
          // 'created_at' => date('Y-m-d H:i:s'),
          // 'updated_at' => date('Y-m-d H:i:s'),
          // 'status' => $this->input->post('std_status'),
          // 'permission' => $this->input->post('std_permission')
        );
        $data = $this->__Xss($data);

        if (!empty($_FILES['userfile']['name'])) {
          //image upload sever and add database
          $imgupload = $this->mainconfig->_fileUpload($this->filename, $this->upload_path, $this->max_size, $this->max_width, $this->max_height, $this->allow_type, TRUE, TRUE, FALSE);

          if (!empty($imgupload['msg_error'])) {
            $this->session->set_flashdata('msg_error', $imgupload['msg_error']);
            redirect('adm/portal/jls_applicant/confirm');
          } else {
            $data['image_file'] = $imgupload['file_name'];
          }
        }
        if (!empty($_FILES['signfile']['name'])) {
          //image upload sever and add database
          $imgupload = $this->mainconfig->_fileUpload($this->filename, $this->upload_path, $this->max_size, $this->max_width, $this->max_height, $this->allow_type, TRUE, TRUE, FALSE);

          if (!empty($imgupload['msg_error'])) {
            $this->session->set_flashdata('msg_error', $imgupload['msg_error']);
            redirect('adm/portal/jls_applicant/confirm');
          } else {
            $data['sign_file'] = $imgupload['file_name'];
          }
        }

        // Auto Mail Sending
        // if($this->input->post('std_email') != "") {
        //   $this->sendAutoMail(1, $this->input->post('std_email'), 'regConf');
        // }

        $this->Langschoolapplicant_Model->JLSapplicantinfo($data);
        $this->session->set_flashdata('msg_success', 'Your data has been insert!');
        redirect('adm/portal/jls_applicant/add');
			}
		} else {
			$this->load->view('dashboard/langschoolstudent/confirm', $this->data);
		}
  }
// confirm
  public function edit($id)
	{
    /** User Permission Checker **/
		$this->__permissionChecker($this->key,$this->url);
		
		$globalHeader = array(
			"alert" => $this->mainconfig->_DefaultNotic(),
			'title' => "Edit Student",
			'msg' => "",
			'uri' => array("student","std_lists"),
			'config' => $this->user_config,
		);
		
		$list = $this->Langschoolapplicant_Model->studentDetail($id);
		//*** Current query value checker
		$this->__resultEmptyChecker($id, $globalHeader,"adm/portal/langschoolstudent", $list);
		//*** Generate necessary key and value
		$Q_list = _transfer_key_prepare(object_key_checker($list));
		
		$this->data['result'] = object_transfer($list, $Q_list);
		$this->data = $this->mainconfig->_ArrayDataMarge($globalHeader, $this->data);
    $recent_photo = $this->data['result']->image_file;
		if($_POST) {
      $this->form_validation->set_rules('std_name', 'student name', 'trim|required|min_length[5]|xss_clean');
			$this->form_validation->set_rules('std_email', 'email', 'trim|required|valid_email|xss_clean');
      $this->form_validation->set_rules('std_password', 'password', 'trim|min_length[6]|max_length[30]|xss_clean');
      $this->form_validation->set_rules('conf_password', 'confirm password', 'trim|min_length[6]|max_length[30]|xss_clean|matches[std_password]');
      $this->form_validation->set_rules('address', 'address', 'trim|xss_clean');      
      $this->form_validation->set_rules('std_birthday', 'birthday', 'trim|xss_clean');
      $this->form_validation->set_rules('std_edu', 'education', 'trim|xss_clean');
      $this->form_validation->set_rules('std_nrc', 'NRC no.', 'trim|xss_clean');
      $this->form_validation->set_rules('std_batch', 'batch', 'trim|xss_clean');
			$this->form_validation->set_rules('phone', 'phone number', 'trim|required|numeric|xss_clean');
			$this->form_validation->set_rules('std_facebook', 'facebook account', 'trim|xss_clean');
      $this->form_validation->set_rules('userfile', 'Student photo', 'trim|xss_clean');

			$this->form_validation->set_message('required', 'You must enter a %s!');
			$this->form_validation->set_message('is_unique', 'Your %s is already exits!');
			$this->form_validation->set_message('numeric', 'The %s always allow only numbers!');
			$this->form_validation->set_message('valid_email', 'The %s must be valid!');

			if ($this->form_validation->run() === false) {
				$this->load->view('dashboard/langschoolstudent/edit', $this->data);
			} else {
        $usrData = array(
          'email' => $this->input->post('std_email'),
          'updated_at' => date('Y-m-d H:i:s'),
        );
        if(!empty($this->input->post('std_password'))) {
          $usrData['password'] = $this->__passwordDataHashing($this->input->post('std_password'));
        }
        $usrData = $this->__Xss($usrData);

        $data = array(
          'name' => $this->input->post('std_name'),  
          'phone' => $this->input->post('phone'),
          'address' => $this->input->post('address'),
          'birthday' => $this->input->post('std_birthday'),
          'nrc' => $this->input->post('std_nrc'),
          'education' => $this->input->post('std_edu'),
          'social' => $this->input->post('std_facebook'),
          'updated_at' => date('Y-m-d H:i:s'),
          'status' => $this->input->post('std_status'),
          'permission' => $this->input->post('std_permission'),
        );
        $data = $this->__Xss($data);

        //Check validation
        $checkdata = $this->Langschoolapplicant_Model->studentCheck($data, $id);
        $checkemail = $this->Langschoolapplicant_Model->studentEmailCheck($this->input->post('std_email'),$id);
     
        if($this->input->post('std_status') == 1) {
          $data['activate_date'] = date('Y-m-d H:i:s');
        }else{
          $data['activate_date'] = "0000-00-00 00:00:00";
        }
  
        if (!$checkemail) {
          if (!empty($_FILES['userfile']['name'])) {
            if(!empty($recent_photo)) {
              $preview_link = dirname(__FILE__)."".$this->file_path."".$recent_photo;
              if(file_exists($preview_link)){
                unlink($preview_link);
              }
            }
            //image upload sever and add database
            $imgupload = $this->mainconfig->_fileUpload($this->filename, $this->upload_path, $this->max_size, $this->max_width, $this->max_height, $this->allow_type, TRUE, TRUE, FALSE);

            if(!empty($imgupload['msg_error'])) {
              $this->session->set_flashdata('msg_error', $imgupload['msg_error']);
              redirect('adm/portal/langschoolstudent/edit/'.$id, $data);
            } else {
              $data['image_file'] = $imgupload['file_name'];
            }
          } else {
            if ($checkdata) {
              $this->session->set_flashdata('msg_error', 'Your data already exits! please fill other data!');
              redirect('adm/portal/langschoolstudent/edit/'.$id, $data);
            }
          }
        } else {
          $this->session->set_flashdata('msg_error', 'Your email already exits!');
          redirect('adm/portal/langschoolstudent/edit/'.$id, $data);
        } 
          
        if(empty($checkdata) || empty($checkemail)) {
          $this->Langschoolapplicant_Model->studentAuthUpdate($usrData, $id);
          $this->Langschoolapplicant_Model->studentUpdate($data, $id);
          $this->session->set_flashdata('msg_success', 'Your data has been update!');
          redirect("adm/portal/langschoolstudent");
        }

        // Auto Mail Sending
        // if($this->input->post('std_email') != ""  && $this->input->post('std_status') == 1) {
        //     $this->sendAutoMail(1, $this->input->post('std_email'), 'memAct');
        // }
			}
		} else {
			$this->load->view('dashboard/langschoolstudent/edit', $this->data);
		}
	}

  public function view($id)
	{
    /** User Permission Checker **/
	  $this->__permissionChecker($this->key,$this->url);
	
	  $globalHeader = array(
		  "alert" => $this->mainconfig->_DefaultNotic(),
		  'title' => "View Student",
		  'msg' => "",
		  'uri' => array("student","std_lists"),
		  'config' => $this->user_config
	  );
	
	  $list = $this->Langschoolapplicant_Model->studentViewDetail($id);
	  //*** Current query value checker
	  $this->__resultEmptyChecker($id, $globalHeader,"adm/portal/langschoolstudent", $list);
	  //*** Generate necessary key and value
	  $Q_list = _transfer_key_prepare(object_key_checker($list));
	  $this->data['result'] = object_transfer($list, $Q_list);

    $course = $this->Langschoolapplicant_Model->studentViewCourse($id);
		$Q_list = _transfer_key_prepare(array_keys_checker($course));
		$this->data['course'] = array_transfer($course, $Q_list);
    $this->data['record'] = $this->Langschoolapplicant_Model->studentViewRecord($id);
    $this->data['noted'] = $this->Langschoolapplicant_Model->studentViewNotes($id);
    $this->data['batch'] = $this->Langschoolapplicant_Model->getBatch();
	  $this->data = $this->mainconfig->_ArrayDataMarge($globalHeader, $this->data);

    if($_POST) {
      $this->form_validation->set_rules('std_id', 'std_id', 'trim|required|xss_clean');
      $this->form_validation->set_rules('batch_id', 'batch_id', 'trim|required|xss_clean');
      $this->form_validation->set_rules('pay_type', 'payment type', 'trim|required|xss_clean');
      $this->form_validation->set_rules('pay_info', 'payment info', 'trim|required|xss_clean');
      $this->form_validation->set_rules('note', 'note', 'trim|xss_clean');
			if ($this->form_validation->run() === false) {
        $data['msg'] = "Something wrong!";
				$this->load->view('dashboard/langschoolstudent/views', $this->data);
			} else {
        $lastid = $this->Langschoolapplicant_Model->getCourseID();   
        $lastid = (isset($lastid)?$lastid:1);
        $invoice_number = serial_id_generate("Inv-", $lastid-1, 6);
        $courseinfo = $this->Langschoolapplicant_Model->getBatchDetail($this->input->post('batch_id'));

        $data = array(
					'std_id' => $this->input->post('std_id'),
          'bat_id' => $this->input->post('batch_id'),
          'cos_id' => $courseinfo->course_id,
          'request_date' => date('Y-m-d H:i:s'),
          'expired_date' => "0000-00-00 00:00:00",
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s'),
					'status' => $this->input->post('status')
				);

        if($this->input->post('status') == 1) {
          $data['activate_date'] = date('Y-m-d H:i:s');
        }else{
          $data['activate_date'] = "0000-00-00 00:00:00";
        }
      
        $data = $this->security->xss_clean($data);        
				$checkdata = $this->Langschoolapplicant_Model->batchCheck($data);

				if ($checkdata){
					$this->session->set_flashdata('msg_error', 'Your data already exits! please fill other data!');
					redirect('adm/portal/langschoolstudent/view/'.$id);
        }
				$cos_id = $this->Langschoolapplicant_Model->insertBatch($data);

        $invoice = array(
          'std_id' => $this->input->post('std_id'),
          'std_cos_id' => $cos_id,
          'invoice_number' => $invoice_number,
          'pay_type' => $this->input->post('pay_type'),
          'discount' => 0,
          'txt' => 0,
          'charge' => 0,
          'sub_price' => $courseinfo->fees,
          'total_price' => $courseinfo->fees,
          'pay_info' => $this->input->post('pay_info'),
          'description' => $this->input->post('note'),
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s'),
        );
        $this->Langschoolapplicant_Model->insertInvoice($invoice);

				$this->session->set_flashdata('msg_success', 'Your data has been insert!');
				redirect('adm/portal/langschoolstudent/view/'.$id);
			}
		} else {
      // print_r($this->data['noted']);
			$this->load->view('dashboard/langschoolstudent/views', $this->data);
		}
  }
  public function delete($id)
  {
    /** User Permission Checker **/
		$this->__permissionChecker($this->key,$this->url);
	
		$globalHeader = array(
			"alert" => $this->mainconfig->_DefaultNotic(),
			'title' => "Delete Student",
			'msg' => "",
			'uri' => array("student",""),
			'config' => $this->user_config,
		);

    $list = $this->Langschoolapplicant_Model->studentDetail($id);
		//*** Current query value checker
		$this->__resultEmptyChecker($id, $globalHeader,"adm/portal/langschoolstudent", $list);
    $recent_cover = $list->image_file;

    if(!empty($recent_cover)) {
      $preview_link = dirname(__FILE__)."".$this->file_path."".$recent_cover;
      if(file_exists($preview_link)){
        unlink($preview_link);
      }
    }

		$this->Langschoolapplicant_Model->Delete($id);
    $this->Langschoolapplicant_Model->stdAuthDelete($id);
    $this->Langschoolapplicant_Model->stdConfigDelete($id);
    $this->Langschoolapplicant_Model->stdCourseDelete($id);
    $this->Langschoolapplicant_Model->stdInvoiceDelete($id);
    $this->Langschoolapplicant_Model->stdNoteDelete($id);
    $this->Langschoolapplicant_Model->stdPaymentDelete($id);

		$this->session->set_flashdata('msg_success', 'Your data has been delete!');
    redirect('adm/portal/langschoolstudent');
  }

  public function activated($id)
  {
    $globalHeader = array(
			"alert" => $this->mainconfig->_DefaultNotic(),
			'title' => "Activate Student",
			'msg' => "",
			'uri' => array("student","std_lists"),
			'config' => $this->user_config,
		);
		$this->__resultEmptyChecker($id, $globalHeader, "adm/portal/langschoolstudent", $globalHeader);
    $data = array(
      'activate_date' => date('Y-m-d H:i:s'),
      "status" => 1
    );

    $data['result'] = $this->Langschoolapplicant_Model->studentUpdate($data, $id);
    $this->session->set_flashdata('msg_success', 'Your data has been activated!');
    redirect("adm/portal/langschoolstudent", $data);
  }

  public function deactivated($id)
	{
    $globalHeader = array(
			"alert" => $this->mainconfig->_DefaultNotic(),
			'title' => "Deactivate Student",
			'msg' => "",
			'uri' => array("student","std_lists"),
			'config' => $this->user_config,
		);
		$this->__resultEmptyChecker($id, $globalHeader, "adm/portal/langschoolstudent", $globalHeader);
		$data = array(
			'activate_date' => date('0000-00-00 00:00:00'),
			"status" => 0
		);

		$data['result'] = $this->Langschoolapplicant_Model->studentUpdate($data, $id);
		$this->session->set_flashdata('msg_success', 'Your data has been deactivated!');
		redirect("adm/portal/langschoolstudent", $data);
	}
  
  public function permission_activated($id)
  {
    $globalHeader = array(
			"alert" => $this->mainconfig->_DefaultNotic(),
			'title' => "Activate Course",
			'msg' => "",
			'uri' => array("student","std_lists"),
			'config' => $this->user_config,
		);
		$this->__resultEmptyChecker($id, $globalHeader, "adm/portal/langschoolstudent", $globalHeader);
    $data = array(
      'updated_at' => date('Y-m-d H:i:s'),
      "permission" => 1
    );

    $data['result'] = $this->Langschoolapplicant_Model->studentUpdate($data, $id);
    $this->session->set_flashdata('msg_success', 'Your data has been activated!');
    redirect("adm/portal/langschoolstudent", $data);
  }

  public function permission_deactivated($id)
  {
    $globalHeader = array(
			"alert" => $this->mainconfig->_DefaultNotic(),
			'title' => "Deactivate Course",
			'msg' => "",
			'uri' => array("student","std_lists"),
			'config' => $this->user_config,
		);
		$this->__resultEmptyChecker($id, $globalHeader, "adm/portal/langschoolstudent", $globalHeader);
    $data = array(
      'updated_at' => date('Y-m-d H:i:s'),
      "permission" => 0
    );

    $data['result'] = $this->Langschoolapplicant_Model->studentUpdate($data, $id);
    $this->session->set_flashdata('msg_success', 'Your data has been deactivated!');
    redirect("adm/portal/langschoolstudent", $data);
  }

  public function invoice_view($id)
  {
    /** User Permission Checker **/
	  $this->__permissionChecker($this->key,$this->url);
	
	  $globalHeader = array(
		  "alert" => $this->mainconfig->_DefaultNotic(),
		  'title' => "View Student",
		  'msg' => "",
		  'uri' => array("student","std_lists"),
		  'config' => $this->user_config
	  );
	
	  $list = $this->Langschoolapplicant_Model->studentCourseDetail($id);
	  //*** Current query value checker
	  $this->__resultEmptyChecker($id, $globalHeader,"adm/portal/langschoolstudent", $list);
	  //*** Generate necessary key and value
	  $Q_list = _transfer_key_prepare(object_key_checker($list));
	  $this->data['result'] = object_transfer($list, $Q_list);

    $invoice = $this->Langschoolapplicant_Model->studentInvoiceDetail($id);
		$Q_list = _transfer_key_prepare(object_key_checker($invoice));
		$this->data['invoice'] = object_transfer($invoice, $Q_list);
    
    $payment = $this->Langschoolapplicant_Model->studentPaymentLists($id);
		$Q_list = _transfer_key_prepare(array_keys_checker($payment));
    
		$this->data['payment'] = array_transfer($payment, $Q_list);
    $this->data['type'] = $this->Langschoolapplicant_Model->getStudentPaymentMethod();
    
	  $this->data = $this->mainconfig->_ArrayDataMarge($globalHeader, $this->data);
  
    $this->load->view('dashboard/langschoolstudent/course_views', $this->data);
  }

  public function purchase_add($id)
  {
    /** User Permission Checker **/
	  $this->__permissionChecker($this->key,$this->url);
	
	  $globalHeader = array(
		  "alert" => $this->mainconfig->_DefaultNotic(),
		  'title' => "Add Purchase Course",
		  'msg' => "",
		  'uri' => array("student","std_lists"),
		  'config' => $this->user_config
	  );
    $this->data = $this->mainconfig->_ArrayDataMarge($globalHeader, []);

    if($_POST) {
      $this->form_validation->set_rules('ref_number', 'reference number', 'trim|required|xss_clean');
      $this->form_validation->set_rules('pay_from', 'receive from', 'trim|required|xss_clean');
      $this->form_validation->set_rules('cash', 'cash', 'trim|required|xss_clean');
      $this->form_validation->set_rules('desc', 'description', 'trim|required|xss_clean');

			if ($this->form_validation->run() === false) {
        $this->session->set_flashdata('msg_error', 'Empty Data! please fill data!');
        redirect('adm/portal/langschoolstudent/invoice/view/'.$id);
			} else {
        $lastid = $this->Langschoolapplicant_Model->getStudentPaymentID();   
        $lastid = (isset($lastid)?$lastid:1);
        $pay_number = serial_id_generate("Pay-", $lastid-1, 6);
        $c_total = $this->Langschoolapplicant_Model->CourseTotalPrice($id);
        $s_cash = $this->Langschoolapplicant_Model->studentPurchaseTotal($id);

       $this->__CheckStudentPurchaseChecker($c_total->total_price, $s_cash[0]->total_cash, $this->input->post('cash'), 'adm/portal/student/course/view/'.$id);

        $data = array(
          'std_id' => $c_total->std_id,
          'std_inv_id' => $this->input->post('id'),
          'payment_id' => $pay_number,
					'ref_number' => $this->input->post('ref_number'),
          'cash_type' => $this->input->post('pay_from'),
          'total_cash' => $this->input->post('cash'),
          'description' => $this->input->post('desc'),
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s'),
				);
        $data = $this->security->xss_clean($data);        
				$checkdata = $this->Langschoolapplicant_Model->studentPaymentCheck($data);

				if ($checkdata){
					$this->session->set_flashdata('msg_error', 'Your data already exits! please fill other data!');
					redirect('adm/portal/langschoolstudent/invoice/view/'.$id);
        }

				$this->Langschoolapplicant_Model->insertStdPayment($data);
				$this->session->set_flashdata('msg_success', 'Your data has been insert!');
				redirect('adm/portal/langschoolstudent/invoice/view/'.$id);
			}
		} else {
			$this->session->set_flashdata('msg_error', 'Not allow! please try again!');
      redirect('adm/portal/langschoolstudent/invoice/view/'.$id);
		}
  }

  public function course_active($id)
  {
    //global header
		$data['title'] = "Activate Course";
    $data['msg'] = "";
    
    //Define Aside bar value
    $data['uri'] = array("student",""); 

    if(empty($id) || !is_numeric($id)){
      $this->session->set_flashdata('msg_error', "Bad Request, Not allowed permission!");
      redirect('adm/langschoolstudent/lists', $data);
    }

    $data = array(
      'activate_date' => date('Y-m-d H:i:s'),
      "status" => 1
    );

    $student_course = $this->Langschoolapplicant_Model->studentCourseDetail($id);
    $target = $this->Langschoolapplicant_Model->studentCourseTargetDate($student_course->bat_id);
    
    $data['result'] = $this->Langschoolapplicant_Model->studentEnrollUpdate($data, $id);
    $std_id = $this->Langschoolapplicant_Model->getStudentID($id);

    if($target->liveclass == "on") {
      $initial = $target->start_date;
      $monthdue = $target->month_duration;
      $daydue = $target->day_duration;
      $target_date = explode(", ", $target->days);
      $description = $target->cos_title." (".$target->start_time."~".$target->end_time.") ";
      $json = $this->__attendDateGenerate($target_date, $initial, $monthdue, $daydue);
      $data = array(
        'std_cos_id' => $id,
        'std_id' => $student_course->std_id,
        'class_date' => $json,
        'description' => $description,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
      );
      $this->Langschoolapplicant_Model->insertLocalClass($data);
    }
    $this->session->set_flashdata('msg_success', 'Your data has been activated!');
    redirect("adm/portal/langschoolstudent/view/".$std_id->std_id, $data);
  }

  public function course_deactive($id)
  {
    //global header
		$data['title'] = "Deactivate Course";
    $data['msg'] = "";
    
    //Define Aside bar value
    $data['uri'] = array("student","");    

    if(empty($id) || !is_numeric($id)){
      $this->session->set_flashdata('msg_error', "Bad Request, Not allowed permission!");
      redirect('adm/langschoolstudent/lists', $data);
    }

    $data = array(
      'activate_date' => "0000-00-00 00:00:00",
      "status" => 0
    );

    $std_id = $this->Langschoolapplicant_Model->getStudentID($id);

    if(!empty($std_id->std_id)) {
      $this->Langschoolapplicant_Model->studentCalenderDelete($std_id->id, $std_id->std_id);
    }
    $data['result'] = $this->Langschoolapplicant_Model->studentEnrollUpdate($data, $id);
    $this->session->set_flashdata('msg_success', 'Your data has been deactivated!');
    redirect("adm/portal/langschoolstudent/view/".$std_id->std_id, $data);
  }

  public function course_delete($id,$stdid)
  {
    /** User Permission Checker **/
		$this->__permissionChecker($this->key,$this->url);
		
		$globalHeader = array(
			"alert" => $this->mainconfig->_DefaultNotic(),
			'title' => "Delete Invoice Record",
			'msg' => "",
			'uri' => array("student",""),
			'config' => $this->user_config,
		);

		$this->__resultEmptyChecker($id, $globalHeader,"adm/portal/langschoolstudent", $globalHeader);
    $parentChecker = $this->Langschoolapplicant_Model->checkParentCourseInvoice($id);
    $Checker = $this->Langschoolapplicant_Model->checkParentCoursePayment($parentChecker[0]->id);

    if(count($Checker) > 0 ) {
      $this->session->set_flashdata('msg_error', "Request data can't delete! Purchase has value");
      redirect('adm/portal/langschoolstudent/view/'.$stdid);
    } else {
      $this->Langschoolapplicant_Model->studentCourseDelete($id);
      $this->Langschoolapplicant_Model->studentCourseEnrollDelete($id);
      $this->session->set_flashdata('msg_success', 'Your data has been delete!');
      redirect("adm/portal/langschoolstudent/view/".$stdid);
    }
  }

  public function purchase_delete($id,$invid)
  {
    /** User Permission Checker **/
		$this->__permissionChecker($this->key,$this->url);
			
		$globalHeader = array(
			"alert" => $this->mainconfig->_DefaultNotic(),
			'title' => "Delete Purchase Record",
			'msg' => "",
			'uri' => array("student",""),
			'config' => $this->user_config,
		);

		$this->__resultEmptyChecker($id, $globalHeader,"adm/portal/langschoolstudent", $globalHeader);
		$this->Langschoolapplicant_Model->studentEnrollDelete($id);
		$this->session->set_flashdata('msg_success', 'Your data has been delete!');
    redirect("adm/portal/langschoolstudent/invoice/view/".$invid);
  }
  
//Auto Mail System
  public function sendAutoMail($admin, $email, $key) 
  {
    $adminemail = $this->Langschoolapplicant_Model->selectAdminEmail($admin);
    $subject = $this->Langschoolapplicant_Model->selectEmailContent($key);
    $message = '
    <!DOCTYPE html>
    <html>
    <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PKT Online School</title>
    </head><body>';

    $message .= $subject->message;
    $message .= '</body></html>';
    $name = " PKT Online School ".$adminemail->name;
    $config['protocol'] = 'sendmail';
    $config['mailpath'] = '/usr/sbin/sendmail';
    $config['mailtype'] = 'html';
    $config['charset'] = 'iso-8859-1';
    $config['wordwrap'] = TRUE;
    $config['validate'] = TRUE;
    $config['crlf'] = "\r\n";
    $config['newline'] = "\r\n";

    $this->email->initialize($config);
    $this->email->from($adminemail->email, $name);
    $this->email->to($email);
    $this->email->cc($adminemail->cc);
    $this->email->subject($subject->subject);
    $this->email->message($message);
    $this->email->send();
  }

/******* Session Reassign and Distibute *********/
	private function __preSessionDataSet(){
		$this->current_id = isset($_SESSION['__admin_user_data']['user_id'])?$_SESSION['__admin_user_data']['user_id']:"";
		$this->current_user = isset($_SESSION['__admin_user_data']['user_name'])?$_SESSION['__admin_user_data']['user_name']:"";
		$this->current_role = isset($_SESSION['__admin_user_data']['user_role'])?$_SESSION['__admin_user_data']['user_role']:"";
		$this->current_csrf_key = isset($_SESSION['__admin_token_slug'])?$_SESSION['__admin_token_slug']:"";
		$this->current_permission = isset($_SESSION['__admin_user_data']['user_permission'])?$_SESSION['__admin_user_data']['user_permission']:"";
		$this->current_log_id  = isset($_SESSION['__admin_session_id'])?$_SESSION['__admin_session_id']:"";
		$this->current_session_count = isset($_SESSION['__admin_user_data']['session'])?$_SESSION['__admin_user_data']['session']:"";
		$this->current_login_time = isset($_SESSION['__admin_user_data']['login_time'])?$_SESSION['__admin_user_data']['login_time']:"";
		$this->session_checker = isset($_SESSION['__pre_session_check']['check_point'])?$_SESSION['__pre_session_check']['check_point']:"";
	}
	
	/******* Site Configuration Reassign and Distibute *********/
	private function __preSiteConfigDataSet(){
		$config = $this->mainconfig->_getInitialSiteConfigData();
		if(!empty($config)) {
			$this->site_name = $config->site_name;
			$this->meta_tag = $config->meta_tag;
			$this->favicon = $config->favicon;
			$this->date_format = $config->date_format;
			$this->decimal_point = $config->decimal_point;
			$this->phone_format = $config->phone_format;
			$this->user_session = $config->user_session;
			$this->timezone = isset($config->timezone)?$config->timezone:"Asia/Rangoon";
		}
		return $config;
	}
	
	/******* Security Configuration *********/
	private function __Xss($data){
		return $this->security->xss_clean($data);
	}

	private function __passwordDataHashing($data){
		return password_hash($data, PASSWORD_BCRYPT);
	}
	
	/******* Role And Permission Check Point *********/
	private function string_pos($find)
	{
		if(!empty($this->current_permission)) {
			return strpos($this->current_permission, $find);
		}
	}
	
	private function __permissionChecker($key, $url){
		if($this->string_pos($key) === FALSE){
			$this->session->set_flashdata('msg_error', "Your aren't permission for this config!");
			redirect($url);
		}
	}
	
	/******* Login Configuration and Token Checker *********/
	private function _user_query_Remove($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('adm_config');
		return true;
	}
	
	private function _get_user_token($token, $slug)
	{
		$this->db->select('id,adm_id,csrf_token_key,csrf_slug_key');
		$this->db->from('adm_config');
		$this->db->where('csrf_token_key', $token);
		$this->db->where('csrf_slug_key', $slug);
		$query=$this->db->get();
		return $query->result();
	}
	
	private function __pretokenCheck()
  {
		if(empty($this->current_csrf_key) || $this->session_checker == false) {
			return FALSE;
		} else {
			$data = $this->mainconfig->_mbSplit('_', $this->current_csrf_key);
			$key_info = $this->_get_user_token($data[0].'_', $data[1]);
			if(count($key_info) == 1 && $key_info[0]->id == $this->current_log_id) {
				return TRUE;
			} else {
				return FALSE;
			}
		}
	}
	
	private function __tokenChecker()
  {
		if(empty($this->__pretokenCheck())) {
			$queryChecker = $this->_user_query_Remove($this->current_log_id);
			if($queryChecker) {
				redirect('adm/portal/auth/logout');
			}
		}
	}

  private function __generate_auth_key($email)
  {
    $comp1 = []; $dd = "";
    $e = explode('@',$email);
    $e1 = $e[0];

    $e1 = "pkD".$this->encrypt->encode($e1)."@";

    $first_str = preg_replace("/[\/]/", "$1", $e1);

		$first_str = preg_replace("/[0-9+_=~]/", "$1", $first_str);

    for ($i = 0; $i < 2; $i++) {
			$comp1[] = mb_substr($first_str, (1*$i), 10);
		}
    foreach ($comp1 as $row) {
			$dd .= $row;
		}
    $dd = substr($dd, 0, 21);
    return $dd."@";
  }
	
	/******* Other necessary Configuration *********/
	public function __resultEmptyChecker($id, $return, $url, $data = Null)
  {
		if(empty($id) || !is_numeric($id) || empty($data)){
			$this->session->set_flashdata('msg_error', "Bad Request, Not allowed permission!");
			redirect($url, $return);
		}
	}

  public function __CheckStudentPurchaseChecker($ctotal, $scash, $input, $url)
  {
    if($ctotal < $scash+$input) {
      $this->session->set_flashdata('msg_error', 'Please check your purchase amount!');
      redirect($url);
    } else {
      return true;
    }
  }

  public function __attendDateGenerate(array $data, $initial, $month, $day)
  {
    // Add days to date and display it
    $add_month = date('Y-m-d', strtotime($initial. ' + '.$month.' months'));
    $final = date('Y-m-d', strtotime($add_month. ' + '.$day.' days'));
    $target_date = $this->mainconfig->targetDateGenerate($data, $initial, $final);
    return json_encode($target_date);
  }

}