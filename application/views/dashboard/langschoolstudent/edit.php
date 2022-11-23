<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php include(dirname(__FILE__) ."/../templates/header.php"); ?>

<div class="content-wrapper">
  <div class="row page-tilte align-items-center">
    <div class="col-md-auto">
      <a href="#" class="mt-3 d-md-none float-right toggle-controls"><span class="material-icons">keyboard_arrow_down</span></a>
      <h1 class="weight-300 h3 title">Edit JLS Applicant Registration</h1>
    </div> 
    <div class="col controls-wrapper mt-3 mt-md-0 d-none d-md-block ">
      <div class="controls d-flex justify-content-center justify-content-md-end float-right">
        
      <a href="<?php echo base_url('adm/portal/langschool_applicant'); ?>" class="btn btn-secondary py-1 px-2" ><span class="material-icons align-text-bottom">reorder</span></a>

      </div>
    </div>
  </div> 

  <?php if(!empty($_SESSION['msg_success'])){ ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>Success!</strong>  <?php echo $_SESSION['msg_success']; ?> 
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true" class="material-icons md-18">clear</span>
      </button>
    </div>
  <?php } ?>    

  <?php if(!empty($_SESSION['msg_error'])){ ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong>Warning!</strong>  <?php echo $_SESSION['msg_error']; ?> 
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true" class="material-icons md-18">clear</span>
      </button>
    </div>
  <?php } ?>
<div class="content">
<div class="row">
<div class="col-lg-12 col-md-12 mb-4 mb-lg-0">
<div class="card">
<div class="card-body">
    <?php
      $attributes = array('class' => 'form-horizontal form-label-left');
      echo form_open_multipart('adm/portal/langschool_applicant/add', $attributes);
    ?>
<div class="col-md-12">
<div class="col-md-6 " style="display: flex;padding-top: 32px;">
  <!-- Student Photo -->
    <?php
      echo form_label('Applicant Photo','userfile', array('class' => 'col-form-label')) ;
      
    ?>
   <div class="col-md-6" style="width: 100%;padding-left:0px;padding-right: 0px;">
      <?php
        echo form_input(array(
        'name' => 'userfile',
        'type' => 'file',
        'class' => 'form-control stu_label',
        'id' => 'clickImg',
        'accept' => 'image/*'
        ));
      ?>
      <div class="form-group col-md-12 col-sm-12 p-0" id="showImg1"> </div>   
    </div>
  <span class="text-danger"><?php echo form_error('userfile'); ?></span>
  </div>
  <!-- Student Photo -->  
  <div class="col-md-6 float-left" style="display: flex;padding-top: 12px;">
  <!-- Student Photo -->
    <?php
      echo form_label('Applicant Sign','userfile', array('class' => 'col-form-label')) ;
      
    ?>
   <div class="col-md-6" style="width: 100%;padding-left:0px;padding-right: 0px;">
      <?php
        echo form_input(array(
        'name' => 'userfile',
        'type' => 'file',
        'class' => 'form-control stu_label',
        'id' => 'clickImg',
        'accept' => 'image/*'
        ));
      ?>
      <div class="form-group col-md-12 col-sm-12 p-0" id="showImg1"> </div>   
    </div>
  <span class="text-danger"><?php echo form_error('userfile'); ?></span>
  </div>
  <!-- Student Photo -->  
<!-- date -->
  <!-- <div class="col-md-6 float-left">
      <div class="form-group" style="padding-left: 165px;">
          <label class="weight-400" for="release" style="margin-bottom:10px">Date</label> 
          <span class="badge badge-danger">Required</span>
          <input type="datetime-local" step="1" name="release" id="release" class="form-control" placeholder="" value="">
          <span class="text-danger"><?php echo form_error( 'release' ); ?></span>
      </div>
  </div> -->
<!-- date-->

<!-- JLS Name -->
<div class="school_list" name="jls_name" >
<p class="list_label">JLS Name  </p>
<select name="jls_name" class="school_select">
    <option value="">Please Select!</option>
    <option value="ECC">ECC</option>
    <option value="JCLI">JCLI</option>
    <option value="OJLS">OJLS</option>
    <option value="Fukuoka">fukuoka</option>
    <option value="Shizuoka">shizuoka</option>
</select>
</div>
<!-- JLS Name -->

<!-- Status -->
<div class="status_popup" >
      <!-- Status Name -->
<div class="school_list status_select" name="" >
<p class="list_label">Status </p>
<select name="" id="sele_popup " class="school_select">
<option value="">Please Select!</option>
        <option value="Register">Register</option>
        <option value="Interview">Interview</option>
        <option value="Interview Failed">Interview Failed</option>
        <option value="Admission">Admission</option>
        <option value="Admission Complete">Admission Complete</option>
        <option value="COE Waiting">COE Waiting</option>
        <option value="Cancel">Cancel</option>
        <option value="COE Failed">COE Failed</option>
        <option value="COE Passed">COE Passed</option>
</select>
</div>
  <!-- Status Name -->
  <!-- interview date -->
  <div class="col-md-10 float-left" id="interview_date"  style="display: none;">
    <div class="form-group school_list"  style="width:60% ;padding: 0px;">
    <p class="list_label" >
       <label style="margin-bottom: 0px;margin-top: 12px;">Interview Date</label>
       <span class="badge badge-danger" >Required</span>

    </p>
        <?php
          echo form_input(array(
            'name' => 'interview_date',
            'type' => 'date',
            // 'value' => html_escape(set_value('std_birthday',isset($result)?$result->birthday:''), ENT_QUOTES),
            'class' => 'form-control',
            'id' => 'interview_date',
            'autocomplete' => ''));
          ?>
        <span class="text-danger"><?php echo form_error('interview_date'); ?></span>
    </div>
  </div>
<!-- interview date -->

<!-- admission date -->
<div class="col-md-10 float-left" id="admission_date" style="display: none;">
    <div class="form-group school_list"  style="width:60% ;padding: 0px;">
    <p class="list_label" >
       <label  style="margin-bottom: 0px;margin-top: 12px;">Admission Date</label>
       <span class="badge badge-danger">Required</span>
    </p>
        <?php
          echo form_input(array(
            'name' => 'admission_date',
            'type' => 'date',
            // 'value' => html_escape(set_value('std_birthday',isset($result)?$result->birthday:''), ENT_QUOTES),
            'class' => 'form-control',
            'id' => 'admission_date',
            'autocomplete' => ''));
          ?>
        <span class="text-danger"><?php echo form_error('admission_date'); ?></span>
    </div>
</div>
<!-- admission date -->

<!-- collect data expired date -->
<div class="col-md-10 float-left" id="data_expired_date" style="display: none;">
    <div class="form-group school_list"  style="width:60% ;padding: 0px;">
    <p class="list_label">
       <label  style="margin-bottom: 0px;margin-top: 12px;">Collect Data EXP Date</label>
       <span class="badge badge-danger" >Required</span>
    </p>
        <?php
          echo form_input(array(
            'name' => 'data_expired_date',
            'type' => 'date',
            // 'value' => html_escape(set_value('std_birthday',isset($result)?$result->birthday:''), ENT_QUOTES),
            'class' => 'form-control',
            'id' => 'data_expired_date',
            'autocomplete' => ''));
          ?>
        <span class="text-danger"><?php echo form_error('data_expired_date'); ?></span>
    </div>
</div>
<!-- collect data expired date -->

<!-- admission date -->
<div class="col-md-10 float-left" id="adm_complete_date" style="display: none;">
    <div class="form-group school_list" style="width:60% ;padding: 0px;">
    <p class="list_label">
       <label  style="margin-bottom: 0px;margin-top: 12px;">Complete Date</label>
       <span class="badge badge-danger">Required</span>
    </p>
        <?php
          echo form_input(array(
            'name' => 'adm_complete_date',
            'type' => 'date',
            // 'value' => html_escape(set_value('std_birthday',isset($result)?$result->birthday:''), ENT_QUOTES),
            'class' => 'form-control',
            'id' => 'adm_complete_date',
            'autocomplete' => ''));
          ?>
        <span class="text-danger"><?php echo form_error('adm_complete_date'); ?></span>
    </div>
</div>
<!-- admission date -->

<!-- tracking code -->
<div class="col-md-10 float-left" id="tracking_code" style="display: none;">
    <div class="form-group school_list"  style="width:60% ;padding: 0px;margin-top: 8px;">
    <p class="list_label">
       <label  style="margin-bottom: 0px;margin-top: 12px;">Tracking Code</label>
       <!-- <span class="badge badge-danger">Required</span> -->
    </p>
        <?php
          echo form_input(array(
            'name' => 'tracking_code',
            'type' => 'input',
            // 'value' => html_escape(set_value('std_birthday',isset($result)?$result->birthday:''), ENT_QUOTES),
            'class' => 'form-control',
            'id' => 'tracking_code',
            'autocomplete' => ''));
          ?>
        <span class="text-danger"><?php echo form_error('tracking_code'); ?></span>
    </div>
</div>
<!-- tracking code -->

</div>
<!-- Status -->
</div>
</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>
$(function() {  
    $(".status_select").change(function() {
       if($('option:selected', this).text() =="Interview"){
         $('#interview_date').show();
         $('#data_expired_date').hide();
         $('#admission_date').hide();
         $('#tracking_code').hide();
         $('#adm_complete_date').hide();

        }else if($('option:selected', this).text() =="Admission"){
        $('#data_expired_date').show();
        $('#admission_date').show();
        $('#interview_date').hide();
        $('#tracking_code').hide();
        $('#adm_complete_date').hide();
      }else if($('option:selected', this).text() =="Admission Complete"){
        $('#data_expired_date').hide();
        $('#admission_date').hide();
        $('#interview_date').hide();
        $('#tracking_code').show();
        $('#adm_complete_date').show();
      }else{
        $('#data_expired_date').hide();
        $('#admission_date').hide();
        $('#interview_date').hide();
        $('#tracking_code').hide();
        $('#adm_complete_date').hide();
      }
    });
});
</script>

<style>
 #interview_date,
 #data_expired_date,
 #admission_date,
 #tracking_code,
 #adm_complete_date{
  margin-top: 9px;
} 
.status_select{
    display: inline;
}
.school_list.status_select {
    padding-left: 14px;
}
select.form-group.col-md-9.school_select{
    padding: 8px;
    margin: 7px 7px 7px 35px;
    border: 1px solid #ced4db;
    border-radius: 3px;
}
</style>
<!-- Start dropdown APPLICANT INFORMATION -->
<div class="content_detail">
  <input class="dropdown" type="checkbox" id="faq-2">
  <p class="drop_ttl"><label for="faq-2" class="drop_label">APPLICANT INFORMATION  </label></p>
  <div class="drop_txt">
  <h4 class="appl_ttl"><span>※</span>Contact Details</h4>
 
  <!-- leftside -->
   <div class="col-md-6 float-left">
      <div class="form-group">
        <?php echo form_label('Name (アルファベット)', 'applicant_name', array( 'class' => '', 'id'=> '', 'style' => '', 'for' => 'applicant_name')); ?>
        <?php
          echo form_input(array(
            'name' => 'applicant_name',
            'type' => 'text',
            'value' => html_escape(set_value('std_birthday',isset($result)?$result->applicant_name:''), ENT_QUOTES),
            'class' => 'form-control',
            'id' => 'applicant_name',
            'autocomplete' => ''));
          ?>
        <span class="badge badge-danger">Required</span>
      </div>

      <div class="form-group">
        <?php echo form_label(' Name (漢字)', 'applicant_name_kanji', array( 'class' => '', 'id'=> '', 'style' => '', 'for' => 'applicant_name_kanji')); ?>
        <span class="badge badge-danger">Required</span>
      </div>

      <div class="form-group">
        <?php echo form_label('Date Of Birth', 'date_of_birthday', array( 'class' => '', 'id'=> '', 'style' => '', 'for' => 'date_of_birthday')); ?>
        <span class="badge badge-danger">Required</span>
      </div>

      <div class="form-group">
        <?php echo form_label('Place Of Birth', 'place_birth', array( 'class' => '', 'id'=> '', 'style' => '', 'for' => 'place_birth')); ?>
      </div>

      <div class="form-group">
        <?php echo form_label('Age', 'age', array( 'class' => '', 'id'=> '', 'style' => '', 'for' => 'age')); ?>
        <span class="badge badge-danger">Required</span>
      </div>

      <div class="form-group">
        <?php echo form_label('Nationality', 'nationality', array( 'class' => '', 'id'=> '', 'style' => '', 'for' => 'nationality')); ?>
        <span class="badge badge-danger">Required</span>
      </div>

      <div class="form-group">
        <?php echo form_label('Gender', 'gender', array( 'class' => 'form-control-label', 'id'=> '')); ?>
        <span class="badge badge-danger">Required</span>
      </div> 

      <div class="form-group">
        <?php echo form_label('Martial Status', 'martial_status', array( 'class' => 'form-control-label', 'id'=> '')); ?>
        <span class="badge badge-danger">Required</span>
      </div> 

      <div class="form-group " id="partaner" >
        <?php echo form_label('Name of your Partaner', 'partaner_name', array( 'class' => '', 'id'=> '', 'style' => '', 'for' => 'std_name')); ?>
        <span class="badge badge-danger">Required</span>
      </div>
   
<!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>
$(function() {  
    $("#martial_status").change(function() {
       if($('option:selected', this).text() =="Single"){
         $('#partaner').hide();
        }else if($('option:selected', this).text() =="Married"){
        $('#partaner').show();
      }else{
        $('#partaner').hide();
      }
    });
});
</script> -->
      <div class="form-group">
        <?php echo form_label('Email', 'std_email', array( 'class' => '', 'id'=> '', 'style' => '', 'for' => 'std_email')); ?>
        <span class="badge badge-danger">Required</span>
      </div>

      <div class="form-group">
        <?php echo form_label('Phone Number', 'phone', array( 'class' => '', 'id'=> '', 'style' => '', 'for' => 'phone')); ?>
        <span class="badge badge-danger">Required</span>
      </div>

      <div class="form-group">
        <?php echo form_label('Address','address', array('class' => 'col-form-label')); ?>
        <span class="badge badge-danger">Required</span>
      </div>
     
      <div class="form-group">
        <?php echo form_label('Course of Admission','course_admission', array( 'class' => '', 'id'=> '', 'style' => '', 'for' => 'course_admission')); ?>
      </div>

      <div class="form-group">
        <?php echo form_label('Length of Study', 'course_study_lengh', array( 'class' => '', 'id'=> '', 'style' => '', 'for' => 'course_study_lengh')); ?>
        <span class="badge badge-danger">Required</span>
      </div>

      <div class="form-group">
        <?php echo form_label('Have you visited Japan?', 'have_you_visited_jp', array( 'class' => 'form-control-label', 'id'=> '')); ?>
      </div>

      <div class="form-group">
        <?php echo form_label('Date of Entry', 'visited_date', array( 'class' => '', 'id'=> '', 'style' => '', 'for' => 'visited_date')); ?>
      </div>

      <div class="form-group">
        <?php echo form_label('Date of Departure', 'date_of_departure', array( 'class' => '', 'id'=> '', 'style' => '', 'for' => 'date_of_departure')); ?>
      </div>

      <div class="form-group">
        <?php echo form_label('Enter visa type if you visited Japan', 'visa_type', array( 'class' => '', 'id'=> '', 'style' => '', 'for' => 'visa_type')); ?>
      </div>

      <div class="form-group">
        <?php echo form_label('Departure by deportation / departure order or not', 'departure_deportation', array( 'class' => 'form-control-label', 'id'=> '')); ?>
      </div>

      <div class="form-group">
        <?php echo form_label('Current Status', 'current_status', array( 'class' => '', 'id'=> '', 'style' => '', 'for' => 'current_status')); ?>
      </div>
 
      <div class="form-group">
        <?php echo form_label('(Expected month and year of graduating from the school.) ', 'expected_month_year_graduating', array( 'class' => '', 'id'=> '', 'style' => '', 'for' => 'phone')); ?>
        <div class="graduating_month_year">
          <p class="expected_txt" style="padding-left: 22px;font-size:17px">月</p>
          <p class="expected_txt" style="padding-left: 22px;font-size:17px">年</p>
        </div>
      </div>

      <div class="form-group">
        <?php echo form_label('Name of School', 'current_status_school_name', array( 'class' => '', 'id'=> '', 'style' => '', 'for' => 'current_status_school_name')); ?>
      </div>

      <div class="form-group">
        <?php echo form_label('Department/Major', 'current_status_school_major', array( 'class' => '', 'id'=> '', 'style' => '', 'for' => 'current_status_school_major')); ?>
      </div>

      <div class="form-group">
        <?php echo form_label('Grade', 'current_status_school_grade', array( 'class' => '', 'id'=> '', 'style' => '', 'for' => 'current_status_school_grade')); ?>
      </div>

      <h6 class="spec_plan">Specific Plans after Graduating</h6>
      <div class="form-group">
        <?php echo form_label('Specific Plans after Graduating', 'specific_plans_after_graduating', array( 'class' => '', 'id'=> '', 'style' => '', 'for' => 'phone')); ?>
      </div>

      <h6 class="spec_plan">Higher Education in Japan</h6>
      <div class="form-group">
        <?php echo form_label('Type of Schools', 'specific_plan_type_schools', array( 'class' => '', 'id'=> '', 'style' => '', 'for' => 'specific_plan_type_schools')); ?>
      </div>

      <div class="form-group">
        <?php echo form_label('Name of School', 'specific_plan_school_name', array( 'class' => '', 'id'=> '', 'style' => '', 'for' => 'specific_plan_school_name')); ?>
      </div>

      <div class="form-group">
        <?php echo form_label('Major', 'specific_plan_major ', array( 'class' => '', 'id'=> '', 'style' => '', 'for' => 'specific_plan_major')); ?>
      </div>
</div>
<!-- leftside -->

<!-- rightside -->
<div class="col-md-6 float-left">
    <div class="form-group">
        <?php echo form_label('Occupation', 'occupation', array( 'class' => '', 'id'=> '', 'style' => '', 'for' => 'occupation')); ?>
    </div>

    <div class="form-group">
      <?php echo form_label('Place of Employment or School', 'place_employment_school', array( 'class' => '', 'id'=> '', 'style' => '', 'for' => 'place_employment_school')); ?>
    </div>

    <div class="form-group">
      <?php echo form_label('Address of Employment or School', 'addr_employment_school', array( 'class' => '', 'id'=> '', 'style' => '', 'for' => 'addr_employment_school')); ?>
    </div>
  
    <div class="form-group">
      <?php echo form_label('Tel of Employment or School', 'tel_employment_school', array( 'class' => 'employment_text', 'id'=> '', 'style' => '', 'for' => 'tel_employment_school'));?>
    </div>
    
    <div class="form-group">
      <?php echo form_label('Entrance Age to Elementary School', 'entry_age_ele_school', array( 'class' => '', 'id'=> '', 'style' => '', 'for' => 'entry_age_ele_school')); ?>
    </div>
    
    <div class="form-group">
      <?php echo form_label('Lastest Educational history School name', 'educational_school_name', array( 'class' => '', 'id'=> '', 'style' => '', 'for' => 'educational_school_name')); ?>
    </div>
    
    <div class="form-group">
      <?php echo form_label('Duration of JP Language study', 'duration_jp_language_study', array( 'class' => '', 'id'=> '', 'style' => '', 'for' => 'duration_jp_language_study')); ?>
    </div>
  
    <div class="form-group">
      <?php echo form_label('Passport', 'passport', array( 'class' => 'passport_text', 'id'=> '')); ?>
    </div>
  
    <div class="form-group">
      <?php echo form_label('Passport Number', 'passport_no', array( 'class' => '', 'id'=> '', 'style' => '', 'for' => 'passport_no')); ?>
    </div>
    
    <div class="form-group">
      <?php echo form_label('Date of issue', 'passport_data_issue', array( 'class' => '', 'id'=> '', 'style' => '', 'for' => 'passport_data_issue')); ?>
    </div> 
  
    <div class="form-group">
      <?php echo form_label('Date of expiration', 'passport_data_exp', array( 'class' => '', 'id'=> 'passport_data_exp_ttl', 'style' => '', 'for' => 'passport_data_exp')); ?>
    </div>  

    <div class="form-group">
      <?php echo form_label('Blank period／Military service', 'military_service', array( 'class' => 'military_txt', 'id'=> '')); ?>
    </div>
  
    <div class="form-group">
      <?php echo form_label('Place to Apply for VISA', 'place_apply_visa', array( 'class' => '', 'id'=> '', 'style' => '', 'for' => 'place_apply_visa')); ?>
    </div>
  
    <div class="form-group">
      <?php echo form_label('Accompanying Persons,if Any', 'accompanying_person', array( 'class' => 'form-control-label', 'id'=> '')); ?>
    </div>
  
    <div class="form-group">
      <?php echo form_label('Did you apply before in Japan?', 'school_apply_before_japan', array( 'class' => 'form-control-label', 'id'=> '')); ?>
    </div>
    
    <div class="form-group">
      <?php echo form_label('when?', 'school_apply_date', array( 'class' => '', 'id'=> '', 'style' => '', 'for' => 'school_apply_date')); ?>
    </div>
  
    <div class="form-group">
      <?php echo form_label('status?', 'school_apply_status', array( 'class' => '', 'id'=> '', 'style' => '', 'for' => 'school_apply_status')); ?>
    </div>
  
    <div class="form-group">
      <?php echo form_label('Name of School?', 'school_apply_name', array( 'class' => '', 'id'=> '', 'style' => '', 'for' => 'school_apply_name')); ?>
    </div>
  
    <div class="form-group">
      <?php echo form_label('Which immigration office?', 'immigration_office', array( 'class' => '', 'id'=> '', 'style' => '', 'for' => 'immigration_office')); ?>
    </div>

    <div class="form-group">
      <p class="addmission"  style="margin-bottom: 7px;">Result?</p>
      <!-- <select name="immigration_result" class="admission_select">
          <option value="交付">交付</option>
          <option value="不交付">不交付</option>
          <option value="取下げ">取下げ</option>
          <option value="交付後の未入国">交付後の未入国</option>
      </select> -->
    </div>
    <div class="form-group">
        <?php echo form_label('Have you ever experienced COE rejection?', 'COE_reject', array( 'class' => 'form-control-label', 'id'=> '')); ?>
        <span class="badge badge-danger">Required</span>
      <!-- <select name="COE_reject" id="COE_reject" class="admission_select">
          <option value="1">Yes</option>
          <option value="0">No</option>
      </select> -->
    </div>
    <br><br><br><br><br><br><br><br><br><br>
    <h6 class="spec_plan" style="padding-top:20px;">Employment</h6>
    <div class="form-group">
        <?php echo form_label('Aimed occupational category', 'aimed_occupational_category', array( 'class' => 'employment', 'id'=> '', 'style' => '', 'for' => 'phone')); ?>
    </div>
    <h6 class="spec_plan">Return to home country</h6>
    <div class="form-group">
        <?php echo form_label('When will you return', 'will_you_return', array( 'class' => '', 'id'=> '', 'style' => '', 'for' => 'phone')); ?>
    </div>
    <div class="form-group">
        <?php echo form_label('Is it possible to provide in English? ', 'provide_english', array( 'class' => 'form-control-label', 'id'=> '')); ?>
        <span class="badge badge-danger">Required</span>
    <!-- <select name="provide_english" id="provide_english" class="admission_select">
        <option value="1">Yes</option>
        <option value="0">No</option>
    </select> -->
    </div>
</div> 
<!-- rightside -->

<!-- co_leftside -->
    <div class="float-left">
        <h6 class="txt" style="padding: 33px 10px 12px;">Is there any your family member who understands at least one  of the languages which we understand?And, who?</h6>
    </div>

<div class="col-md-6 float-left">
    <div class="form-group">
        <?php echo form_label('Who?', 'understand_language', array( 'class' => 'wholanguage', 'id'=> '', 'style' => '', 'for' => 'understand_language')); ?>
    </div>

    <div class="form-group">
        <?php echo form_label('Criminal Record in Japan or Overseas', 'criminal_record', array( 'class' => 'form-control-label', 'id'=> '')); ?>
        <span class="badge badge-danger">Required</span>
      <!-- <select name="criminal_record" id="criminal_record" class="admission_select">
          <option value="1">Yes</option>
          <option value="0">No</option>
      </select> -->
    </div>
   
    <div class="criminal form-group float-left">
      <div class="">
        <?php echo form_label('Have you applied for Certificate of Eligibility?', 'criminal_record', array( 'class' => 'form-control-label', 'id'=> '')); ?>
        <span class="badge badge-danger">Required</span>
      </div>
  
      <div class="radio_record">
        <div class="criminal_record01">
          <!-- <select name="criminal_record" id="criminal_record" class="col-md-12 admission_select">
              <option value="1">Yes</option>
              <option value="0">No</option>
          </select> -->
        </div>

        <div class="">
            <label class="col-rd cri_text"><span style="padding-left:30px ;margin-top: 7px;">Details</span>
                <!-- <input type="text" class="details form-control col-md-8" name="criminal_record_details" value="" checked="checked"> -->
            </label> 
        </div>
    </div>  
  </div>

</div>



<div class="col-md-6 float-left">
    <div class="form-group">
       <p class="addmission">Language</p>
        <!-- <select name="family_language" class="admission_select">
            <option value="English">English</option>
            <option value="Chinese">Chinese</option>
            <option value="Korean">Korean</option>
            <option value="Thai">Thai</option>
            <option value="Vietnamese">Vietnamese</option>
            <option value="Japanese">Japanese</option>
        </select> -->
    </div>
    <div class="form-group">
        <?php echo form_label('Details', ' criminal_record_details', array( 'class' => 'eli_text', 'id'=> 'criminal_record_details', 'style' => '', 'for' => 'criminal_record_details')); ?>
    </div>
<div class="criminal form-group float-left">
    <div class="">
        <?php echo form_label('Have you applied for Certificate of Eligibility?', 'criminal_record', array( 'class' => 'form-control-label', 'id'=> '')); ?>
        <span class="badge badge-danger">Required</span>
    </div> 
    <div class="radio_record">
        <div class="">
            <label class="col-rd cri_text"><span style="margin-top: 7px;">When:</span>
                <!-- <input type="text" class="details form-control col-md-8" name="criminal_record_details" value="" checked="checked" style="margin-left: 16px;margin-right: 0px;"> -->
            </label> 
        </div>
        <div class="">
            <label class="col-rd cri_text"><span>Purpose of Entry:</span>
                <!-- <input type="text" class="details form-control col-md-8" name="criminal_record_details" value="" checked="checked" style="margin: 0px;"> -->
            </label> 
        </div>
    </div>  
</div>
  
  
</div>
<!-- co_leftside -->

<div class="criminal form-group float-left">
    <div class="form-group">
          <?php echo form_label('Purpose of studying in Japanese', 'purpose_studying_in_japanese', array( 'class' => '', 'id'=> '', 'style' => '', 'for' => 'purpose_studying_in_japanese')); ?>
    </div>
</div>
<div class="col-md-6 float-left">
    <h6 class="" style="padding: 33px 0px 12px;">Contact details of your family</h6>
    <div class="form-group">
        <?php echo form_label('Email', 'family_mail', array( 'class' => '', 'id'=> '', 'style' => '', 'for' => 'family_mail')); ?>
        <span class="badge badge-danger">Required</span>
    </div>

    <div class="form-group">
        <?php echo form_label('Phone Number', 'family_tel', array( 'class' => '', 'id'=> '', 'style' => '', 'for' => 'family_tel')); ?>
        <span class="badge badge-danger">Required</span>
    </div>

    <div class="form-group">
        <?php echo form_label('Address','family_address', array('class' => 'col-form-label')); ?>
        <span class="badge badge-danger">Required</span>
    </div>
</div>
<!-- co_leftside -->

<!-- Table -->
<div class="col-md-12 float-left">
<h6 class="" style="padding: 33px 0px 12px;">Educational History : from Elementary School to the Most Recent School</h6>
<div class="tbl">
<table class="table-bordered" name="applicant_id">
  <thead class="tbl_head" >
    <tr>
      <th>Name of institution</th>
      <th>Address</th>
      <th>Starting <br>Year/Month  </th>
      <th >Finishing <br>Year/Month </th>
      <th>Term of Study</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>
      <input type="text" class=" table-control"  name="edu_name[]" value="">
      </td>
      <td>
      <input type="text" class=" table-control"  name="edu_address[]" value="">
      </td>
      <td>
      <input type="text" class=" table-control"  name="edu_start_date[]" value="">
      </td>
      <td>
      <input type="text" class=" table-control"  name="edu_end_date[]" value="">
      </td>
      <td>
      <input type="text" class=" table-control term" name="edu_year[]" value=""><span class="study_year">year</span> 
      </td>
    </tr>
  </tbody>
</table>
</div>      
</div>
<!-- Table -->
<!-- Table -->
<div class="col-md-12 float-left">
<h6 class="" style="padding: 33px 0px 12px;">Previous Japanese Language Study</h6>
<div class="tbl">
<table class="table-b ordered" name="applicant_id">
  <thead class="tbl_head">
    <tr>
      <th>Name of institution</th>
      <th>Address</th>
      <th>Starting <br>Year/Month  </th>
      <th >Finishing <br>Year/Month </th>
      <th>Total hour of Studyy</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>
      <input type="text" class=" table-control"  name="jp_name[]" value="">
      </td>
      <td>
      <input type="text" class=" table-control"  name="jp_address[]" value="">
      </td>
      <td>
      <input type="text" class=" table-control"  name="jp_start_date[]" value="">
      </td>
      <td>
      <input type="text" class=" table-control"  name="jp_end_date[]" value="">
      </td>
      <td>
      <input type="text" class=" table-control term" name="jp_hour[]" value=""><span class="study_year">hour</span> 
      </td>
    </tr>
  </tbody>
</table>
</div>

</div>
<!-- Table -->


<div class="col-md-8 float-left">
<h6 class="" style="padding: 33px 0px 12px;">Achievement in JP language tests</h6>
<div class="tbl">
<table class="table-bordered" name="applicant_id">
  <thead class="tbl_head">
    <tr>
      <th>Name of Japanese language test</th>
      <th>Level</th>
      <th>Exam Years</th>
      <th >Score</th>
      <th>Result</th>
      <th>Date of Qualification</th>
    </tr>
  </thead>
  <tbody>
    
    <tr>
      <td>
      <input type="text" class=" table-control"  name="achiv_name[]" value="">
      </td>
      <td>
      <input type="text" class=" table-control"  name="level[]" value="">
      </td>
      <td>
      <input type="text" class=" table-control"  name="exam_year[]" value="">
      </td>
      <td>
      <input type="text" class=" table-control"  name="score[]" value="">
      </td>
      <td>
      <input type="text" class=" table-control term" name="result[]" value="">
      </td>
      <td>
      <input type="text" class=" table-control" name="date_qualification[]" value="">
      </td>
    </tr>
  </tbody>
</table>
</div>
</div>
<div class="col-md-4 float-left">
<h6 class="" style="padding: 33px 0px 12px;">Name of JP language tests you are going to take</h6>
<table class="table-bordered" name="applicant_id">
  <thead class="tbl_head">
    <tr>
      <th>Name of Japanese language test</th>
      <th>Level</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>
      <input type="text" class=" table-control term" name="going_name[" value="">
      </td>
      <td>
      <input type="text" class=" table-control" name="going_level[]" value="">
      </td>
    </tr>
  </tbody>
</table>
</div>

<!-- Table -->

<!-- Table -->
<div class="col-md-12 float-left">
<h6 class="" style="padding: 33px 0px 12px;">History of Employment (Write in order, ending with the most recent employment.)</h6>
<div class="tbl">
<table class="table-bordered" name="applicant_id">
  <thead class="tbl_head">
    <tr>
      <th>Placement of Employment</th>
      <th>Address</th>
      <th>Years</th>
      <th>Starting <br>Year/Month  </th>
      <th >Finishing <br>Year/Month </th>
      <th>Job Description</th>
    </tr>
  </thead>
  <tbody>
    
    <tr>
      <td>
      <input type="text" class=" table-control"  name="emp_name[]" value="">
      </td>
      <td>
      <input type="text" class=" table-control"  name="emp_address[]" value="">
      </td>
      <td>
      <input type="text" class=" table-control"  name="emp_year[]" value="">
      </td>
      <td>
      <input type="text" class=" table-control"  name="emp_start_date[]" value="">
      </td>
      <td>
      <input type="text" class=" table-control term" name="emp_end_date[]" value="">
      </td>
      <td>
      <input type="text" class=" table-control" name="emp_job_description[]" value="">
      </td>
    </tr>
  </tbody>
</table>
</div>
</div>
<!-- Table -->

<!-- Table -->
<div class="col-md-12 float-left">
<h6 class="" style="padding: 33px 0px 12px;">Family Member</h6>
<div class="tbl">
<table class="table-bordered" name="applicant_id">
  <thead class="tbl_head">
    <tr>
      <th>Name</th>
      <th>Relationship	</th>
      <th>Work Place	</th>
      <th>Date Of Birth</th>
      <th >Occupation </th>
      <th>Annual Income</th>
      <th>Address</th>
      <th>Length of service</th>
    </tr>
  </thead>
  <tbody>
    
    <tr>
      <td>
      <input type="text" class=" table-control"  name="fam_name[]" value="">
      </td>
      <td>
      <input type="text" class=" table-control"  name="fam_relationship[]" value="">
      </td>
      <td>
      <input type="text" class=" table-control"  name="fam_work_place[]" value="">
      </td>
      <td>
      <input type="text" class=" table-control"  name="fam_birthday[]" value="">
      </td>
      <td>
      <input type="text" class=" table-control"  name="fam_occupation[]" value="">
      </td>
      <td>
      <input type="text" class=" table-control"  name="fam_annual_income[]" value="">
      </td>
      <td>
      <input type="text" class=" table-control " name="fam_address[]" value="">
      </td>
      <td>
      <input type="text" class=" table-control" name="fam_length_sevice[]" value="">
      </td>
    </tr>
  </tbody>
</table>
</div>
</div>
<!-- Table -->
<!-- Table -->
<div class="col-md-12 float-left">
<h6 class="" style="padding: 33px 0px 12px;">Family in Japan (Father, Mother, Spouse, Child, Brother and Sisters, or Others) :</h6>
<p>If yes, fill in all the family members in Japan.</p>
<div class="form-group">
  <?php echo form_label('Are you planning to stay with them in Japan? : ', 'plan_to_stay_with_them', array( 'class' => 'form-control-label', 'id'=> '')); ?><br/>
    <select name="plan_to_stay_with_them" id="plan_to_stay_with_them" class="planning_select">
        <option value="1">Yes</option>
        <option value="0">No</option>
    </select>
  </div>
<div class="tbl">
<table class="table-bordered" name="applicant_id">
  <thead class="tbl_head">
    <tr>
      <th>Name</th>
      <th>Age	</th>
      <th>Relatonship</th>
      <th>Residing with Applicant or Not	</th>
      <th >Nationality </th>
      <th>Visa status	</th>
      <th>Work Place	</th>
    </tr>
  </thead>
  <tbody>
    
    <tr>
      
      <td>
      <input type="text" class=" table-control"  name="ja_fam_name[]" value="">
      </td>
      <td>
      <input type="text" class=" table-control"  name="ja_fam_age[]" value="">
      </td>
      <td>
      <input type="text" class=" table-control"  name="ja_fam_relationship[]" value="">
      </td>
      <td>
      <div class="">
      <select name="ja_fam_residing_applicant[]" class="table-control col-md-12">
            <option value=""></option>
            <option value="0">Yes</option>
            <option value="1">No</option>
        </select>
     </div>
      </td>
      <td>
      <input type="text" class=" table-control"  name="ja_fam_nationality[]" value="">
      </td>
      <td>
      <input type="text" class=" table-control " name="ja_fam_visa_status[]" value="">
      </td>
      <td>
      <input type="text" class=" table-control" name="ja_fam_work_place[]" value="">
      </td>
    </tr>
  </tbody>
</table>
</div>
</div>
<!-- Table -->
<!-- Table -->
<div class="col-md-12 float-left" style="padding-bottom: 15px;">
<h6 class="" style="padding: 33px 0px 12px;">Previous  stay in Japan</h6>
<div class="tbl">
<table class="table-bordered" name="applicant_id">
  <thead class="tbl_head">
    <tr>
      <th>Date of Entry	</th>
      <th>Date of Arrival	</th>
      <th>Date of Depature </th>
      <th >Status	 </th>
      <th>Purpose of Entry</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>
      <input type="text" class=" table-control"  name="entry_date[]" value="">
      </td>
      <td>
      <input type="text" class=" table-control"  name="arrival_date[]" value="">
      </td>
      <td>
      <input type="text" class=" table-control"  name="depature_date[]" value="">
      </td>
      <td>
      <input type="text" class=" table-control"  name="status[]" value="">
      </td>
      <td>
      <input type="text" class=" table-control"  name="entry_purpose[]" value="">
      </td>
    </tr>
  </tbody>
</table>
</div>
</div>
<!-- Table -->
</div>
</div>

<!-- End dropdown APPLICANT INFORMATION -->
<!--Start dropdown FINANICIAL SPONSOR -->
<div class="content_detail">
  <input class="dropdown" type="checkbox" id="faq-3">
  <p class="drop_ttl"><label for="faq-3" class="drop_label">FINANICIAL SPONSOR</label></p>
  <div class="drop_txt">
  <h5 class="finial_ttl">Finanicial Sponsor</h5>
  <div class="col-md-6 float-left" name="applicant_id">
      <div class="form-group">
        <?php echo form_label('Name', 'name', array( 'class' => '', 'id'=> '', 'style' => '', 'for' => 'std_name')); ?>
        <span class="badge badge-danger">Required</span>
      </div>
      <div class="form-group">
        <?php echo form_label('Age', 'age', array( 'class' => '', 'id'=> '', 'style' => '', 'for' => 'std_name')); ?>
        <span class="badge badge-danger">Required</span>
      </div>
      <div class="form-group">
        <?php echo form_label('Relationship', 'relationship', array( 'class' => '', 'id'=> '', 'style' => '', 'for' => 'std_name')); ?>
        <span class="badge badge-danger">Required</span>
      </div>
      <div class="form-group">
        <?php
          echo form_label('Address','address', array('class' => 'col-form-label'));
        ?>
      </div>
  </div>
    <div class="form-group">
        <?php echo form_label('Phone Number', 'tel', array( 'class' => '', 'id'=> '', 'style' => '', 'for' => 'phone')); ?>
        <span class="badge badge-danger">Required</span>
    </div>
    <div class="form-group">
        <?php echo form_label('Email', 'email', array( 'class' => '', 'id'=> '', 'style' => '', 'for' => 'std_email')); ?>
        <span class="badge badge-danger">Required</span>
    </div>
    <div class="form-group">
      <?php echo form_label('Occupation', 'occupation', array( 'class' => '', 'id'=> '', 'style' => '', 'for' => 'phone')); ?>
    </div>
    <div class="form-group">
      <?php echo form_label('Work Place', 'work_place', array( 'class' => '', 'id'=> '', 'style' => '', 'for' => 'phone')); ?>
    </div>
    <div class="form-group">
      <?php echo form_label('Annual Income', 'annual_income', array( 'class' => '', 'id'=> '', 'style' => '', 'for' => 'phone')); ?>
    </div>
    <div class="form-group">
      <?php echo form_label('The amount of saving for study abroad ', 'amount_saving_for_study_abroad ', array( 'class' => '', 'id'=> '', 'style' => '', 'for' => 'phone')); ?>
    </div>
    <div class="form-group">
      <?php echo form_label('The amount of saving which can be proved ', 'amount_of_saving_which_proved', array( 'class' => '', 'id'=> '', 'style' => '', 'for' => 'phone')); ?>
    </div>
    <div class="form-group">
      <?php echo form_label('Start of Work date', 'start_work_date ', array( 'class' => '', 'id'=> '', 'style' => '', 'for' => 'phone')); ?>
    </div>
  </div>
</div>
<!--End dropdown FINANICIAL SPONSOR -->
<div class="clearfix"></div>
  <hr class="my-4 dashed clearfix">
  <div class="text-right">
      <button type="submit" class="btn btn-primary text-white btn-sm py-1 px-2">
          <span class="material-icons align-top md-18 mr-1">update</span>Update
      </button>
      <button type="reset" class="btn btn-secondary text-white btn-sm py-1 px-2">
          <span class="material-icons align-top md-18 mr-1">sync</span>Reset
      </button>
  </div>
        <?php echo form_close(); ?>
</div>
</div>
</div>
</div>
</div>

<?php include(dirname(__FILE__) ."/../templates/footer.php"); ?>
<script>
  function filePreview(input,div){
  if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function (e) {
          $(div).empty();
          $(div).html('<embed src="'+e.target.result+'" width="50%" >');
      };
      reader.readAsDataURL(input.files[0]);
    }
  }

  $("#clickImg").change(function () {
    filePreview(this,"#showImg1");
  });
  </script>

<style>
.table-bordered thead th, .table-bordered thead td {
    font-weight: 400;
    border-bottom-width: 2px;
}
input#clickImg {
    /* width: 252px; */
    padding: 3.5px;
}
.col-form-label {
  width:49%;
  padding-top: 7px;
  padding-bottom: 10px;
}
#showImg1 {
    margin: 10px 120px 0px;
}
div.content_detail{
position: relative;
margin:0 2em 1em;
}
.dropdown{
position: absolute;
left: 0;
top: 0;
width: 100%;
opacity:0;
visibility: 0;
}
.drop_ttl{
background:#f1797b;
color:white;
padding: 0.75rem 1.25rem;
position: relative;
margin: 0px;
border: 1px solid rgba(0, 0, 0, 0.125);
border-radius: 5px;
}
.drop_label::before {
content: "";
display: inline-block;
border: 9px solid transparent;
border-left: 10px solid white;
}
.drop_label{
cursor: pointer;
position: relative;
display: flex;
align-items: center;
margin-bottom: 0px;
}
div.drop_txt{
max-height:0px;
overflow: hidden;
transition:max-height 0.9s;
}
/* div.drop_txt p {
padding:2em;
} */
.dropdown:checked ~ .drop_ttl ~ div.drop_txt{
max-height:100%;
}
a{
color:#48a1af;
}
.school_select {
    width: 45.3%;
    padding: 8px;
    margin: 7px 1px 7px 0px;
    border: 1px solid #ced4db;
    border-radius: 3px;
}
.school_list{
  width: 55%;
  padding: 5px 12px;
  align-items: center;
  display: flex;
}
.list_label{
  width: 44%;
  font-size: 16px;
  margin: 0px;
}
.text-right {
    padding-bottom: 27px;
    text-align: right !important;
}
</style>
<style>
  .appl_ttl {
    padding: 16px;
    text-align: center;
}
.addmission{
  padding: 0px;
  /* margin: 0px; */
}
.admission_select{
  width: 100%;
  padding: 8px;
  /* margin: 7px; */
  border: 1px solid #ced4db;
  border-radius: 3px;
}
.planning_select {
    width: 30%;
    margin: 12px 0px;
    padding: 8px;
    border: 1px solid #ced4db;
    border-radius: 3px;
}
#expected_year {
    margin-left: 17px;
    width: 40%;
}
#expected_month{
  width: 40%;

}
.graduating_month_year{
  display: flex;
}
.expected_txt{
  padding-left: 22px;
  font-size: 17px;
  margin-bottom: 0px;
  margin-top: 11px;
}

.details {
    padding: 8px 10px 7px 9px;
    border: 1px solid #ced4db;
    border-radius: 3px;
    margin: 0px 54px 12px 27px;
}
.employment{
  padding-bottom: 12px;
}
.radio_record{
  width: 100%;
  margin-bottom: 20px;
  display: flex;
}
.criminal{
  /* padding-left: 12px; */
  width: 100%;
}
.cri_text{
  display: flex;
}
.muti_txt{
  margin-right: 0px;
}
.appli{
  margin-left: 11px;

}
.table-control{
  width: 84%;
    border: none;
  }
.tbl_head{
  text-align: center;
}
.table-bordered{
  width: 100%;
}
.study_year{
  margin-right: 0px;
}
.finial_ttl{
  padding: 20px 12px;
}
.radio .col-md-2{
  padding: 0px;
}
.stu_label{
  /* margin-left: 57% */
}
.employment_text{
  margin-bottom: 10px;
}
.passport_text{
  margin-bottom: 10px;
}
#passport_data_exp_ttl{
  margin-top: 7px;
}
.military_txt{
  margin-bottom: 18px;
}
.wholanguage{
  margin-bottom: 19px;
}
.criminal_record01 {
    width: 34%;
}
.criminal_record03{
  position: relative;
  top: 0px;
  left: 25%;
}
</style> 
<!-- <script>
  function filePreview(input,div){
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $(div).empty();
            $(div).html('<embed src="'+e.target.result+'" width="30%" height="30%">');
        };
        reader.readAsDataURL(input.files[0]);
    }
  }
  $("#clickImg").change(10,function () {
    filePreview(this,"#showImg1");
    $(".pb-1").hide(100);
  });
  </script> -->