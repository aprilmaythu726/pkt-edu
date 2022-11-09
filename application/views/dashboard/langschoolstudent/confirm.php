<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php include(dirname(__FILE__) ."/../templates/header.php"); ?>

<div class="content-wrapper">
  <div class="row page-tilte align-items-center">
    <div class="col-md-auto">
      <a href="#" class="mt-3 d-md-none float-right toggle-controls"><span class="material-icons">keyboard_arrow_down</span></a>
      <h1 class="weight-300 h3 title">JLS Applicant Registration</h1>
    </div> 
    <div class="col controls-wrapper mt-3 mt-md-0 d-none d-md-block ">
      <div class="controls d-flex justify-content-center justify-content-md-end float-right">
      <a href="<?php echo base_url('adm/portal/jls_applicant'); ?>" class="btn btn-secondary py-1 px-2" ><span class="material-icons align-text-bottom">reorder</span></a>
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
<style>

label {
font-weight: initial;
}       
.std_img{
    padding-top: 12px;
}
.list_label{
    padding-top: 12px;
}
.comfirm_val{
    padding-left: 12px;
    font-size: 1rem;
}
</style>
<div class="content">
<div class="row">
<div class="col-lg-12 col-md-12 mb-4 mb-lg-0">
<div class="card">
<div class="card-body">
    <?php
      $attributes = array('class' => 'form-horizontal form-label-left');
      echo form_open_multipart('adm/portal/jls_applicant/confirm', $attributes);
    ?>
<div class="col-md-12">

<!-- Student Photo -->
<div class="col-md-6" style="display: flex;padding-top: 32px;">
<?php
    echo form_label('Applicant Photo','userfile', array('class' => 'col-form-label')) ;
?>
<div class="std_img">
    <img src="../../../asset/admin/images/user.png" style="width:140px;height:auto;">
</div>
</div>
<!-- Student Photo -->  

<!-- Student Sign -->
<div class="col-md-6" style="display: flex;padding-top: 12px;">
<?php
    echo form_label('Applicant Sign','userfile', array('class' => 'col-form-label')) ;
?>
<div class="std_img">
    <img src="../../../asset/admin/images/testerSign.jpg" style="width:140px;height:auto;">
</div>  
</div>
<!-- Student Sign -->

<!-- JLS Name  -->
<div class="col-md-6 school_list" name="" >
    <p class="list_label">JLS Name </p>
    <p name="" class="list_label">ECC</p>
</div>
<!-- JLS Name -->

</div>
</div>
  
<!-- dropdown APPLICANT INFORMATION -->
<div class="content_detail">
  <input class="dropdown" type="checkbox" id="faq-2">
  <p class="drop_ttl"><label for="faq-2" class="drop_label">APPLICANT INFORMATION  </label></p>
  <div class="drop_txt">
  <h4 class="appl_ttl"><span>※</span>Contact Details</h4>
 
  <!-- leftside -->
   <div class="col-md-6 float-left">
      <div class="form-group">
        <?php echo form_label('Name (アルファベット)', 'applicant_name', array( 'class' => '', 'id'=> '', 'style' => '', 'for' => 'std_name')); ?>
        <span class="badge badge-danger">Required</span>
        <p class="comfirm_val" id="applicant_name" name="applicant_name">MIN THANT</p>
    </div>

    <div class="form-group">
        <?php echo form_label(' Name (漢字)', 'applicant_name', array( 'class' => '', 'id'=> '', 'style' => '', 'for' => 'std_name')); ?>
        <span class="badge badge-danger">Required</span>
        <p class="comfirm_val" id="applicant_name" name="applicant_name">MIN THANT</p>
    </div>

    <div class="form-group">
        <?php echo form_label('Date Of Birth', 'date_of_birthday', array( 'class' => '', 'id'=> '', 'style' => '', 'for' => 'std_birthday')); ?>
        <span class="badge badge-danger">Required</span>
        <p class="comfirm_val" id="date_of_birthday" name="date_of_birthday">01/01/2004</p>
    </div>

    <div class="form-group">
        <?php echo form_label('Place Of Birth', 'place_birth', array( 'class' => '', 'id'=> '', 'style' => '', 'for' => 'std_name')); ?>
        <p class="comfirm_val" id="place_birth" name="place_birth">Botahtaung Township,Yangon</p>
    </div>

    <div class="form-group">
        <?php echo form_label('Age', 'age', array( 'class' => '', 'id'=> '', 'style' => '', 'for' => 'std_name')); ?>
        <span class="badge badge-danger">Required</span>
        <p class="comfirm_val" id="age" name="age">21</p>
    </div>

    <div class="form-group">
        <?php echo form_label('Nationality', 'nationality', array( 'class' => '', 'id'=> '', 'style' => '', 'for' => 'std_name')); ?>
        <p class="comfirm_val" id="nationality" name="nationality">Myanmar</p>
    </div>

    <div class="form-group">
       <?php echo form_label('Gender', 'gender', array( 'class' => 'form-control-label', 'id'=> '')); ?>
       <span class="badge badge-danger">Required</span>
       <p class="comfirm_val" id="gender" name="gender">Female</p>
    </div> 

    <div class="form-group">
      <?php echo form_label('Martial Status', 'martial_status', array( 'class' => 'form-control-label', 'id'=> '')); ?>
      <span class="badge badge-danger">Required</span>
      <p class="comfirm_val" id="gender" name="gender">Single</p>
    </div> 
     
    <div class="form-group " id="partaner">
        <?php echo form_label('Name of your Partaner', 'partaner_name', array( 'class' => '', 'id'=> '', 'style' => '', 'for' => 'std_name')); ?>
        <p class="comfirm_val" id="partaner_name" name="partaner_name">-</p>
    </div>

    <div class="form-group">
        <?php echo form_label('Email', 'email', array( 'class' => '', 'id'=> '', 'style' => '', 'for' => 'std_email')); ?>
        <span class="badge badge-danger">Required</span>
        <p class="comfirm_val" id="std_email" name="email">yoonmem86@gmail.com</p>
    </div>

    <div class="form-group">
        <?php echo form_label('Phone Number', 'phone', array( 'class' => '', 'id'=> '', 'style' => '', 'for' => 'phone')); ?>
        <span class="badge badge-danger">Required</span>
        <p class="comfirm_val" id="phone" name="phone">09420229743</p>
    </div>

    <div class="form-group">
        <?php echo form_label('Address','address', array('class' => '')); ?>
        <span class="badge badge-danger">Required</span>
        <p class="comfirm_val" id="address" name="address">No(44),Testing,Yangon</p>
    </div>

    <div class="form-group">
        <p class="addmission">Course of Admission</p>
        <p class="comfirm_val" id="course_admission" name="course_admission">進学</p>
    </div>

    <div class="form-group">
        <?php echo form_label('Length of Study', 'course_study_lengh', array( 'class' => '', 'id'=> '', 'style' => '', 'for' => 'std_name')); ?>
        <p class="comfirm_val" id="course_study_lengh" name="course_study_lengh">-</p>
    </div>

   <div class="form-group">
        <?php echo form_label('Have you visited Japan?', 'have_you_visited_jp', array( 'class' => 'form-control-label', 'id'=> '')); ?>
        <p class="comfirm_val" id="have_you_visited_jp" name="have_you_visited_jp">No</p>
  </div>

  <div class="form-group">
        <?php echo form_label('Date of Entry', 'visited_date', array( 'class' => '', 'id'=> '', 'style' => '', 'for' => 'phone')); ?>
        <p class="comfirm_val" id="visited_date" name="visited_date">-</p>
  </div>
 
  <div class="form-group">
        <?php echo form_label('Date of Departure', 'date_of_departure', array( 'class' => '', 'id'=> '', 'style' => '', 'for' => 'phone')); ?>
        <p class="comfirm_val" id="date_of_departure" name="date_of_departure">-</p>
  </div>

  <div class="form-group">
        <?php echo form_label('Enter visa type if you visited Japan', 'visa type', array( 'class' => '', 'id'=> '', 'style' => '', 'for' => 'phone')); ?>
        <p class="comfirm_val" id="visa_type" name="visa_type">-</p>
  </div>

  <div class="form-group">
        <?php echo form_label('Departure by deportation / departure order or not', 'departure_deportation', array( 'class' => 'form-control-label', 'id'=> '')); ?>
        <p class="comfirm_val" id="departure_deportation" name="departure_deportation">-</p>
  </div>

  <div class="form-group">
        <?php echo form_label('Current Status', 'current_status', array( 'class' => '', 'id'=> '', 'style' => '', 'for' => 'phone')); ?>
        <p class="comfirm_val" id="current_status" name="current_status">-</p>
  </div>
 
  <div class="form-group">
        <?php echo form_label('(Expected month and year of graduating from the school.) ', 'expected_month_year_graduating', array( 'class' => '', 'id'=> '', 'style' => '', 'for' => 'phone')); ?>
        <div class="graduating_month_year">
            <p class="comfirm_val" id="expected_month" name="expected_month" style="text-align: center;">11</p>
            <p class="expected_txt">月</p>
            <p class="comfirm_val" id="expected_year" name="expected_year" style="text-align: center;">2022</p>
            <p class="expected_txt" >年</p>
        </div>
  </div>

  <div class="form-group">
        <?php echo form_label('Name of School', 'current_status_school_name', array( 'class' => '', 'id'=> '', 'style' => '', 'for' => 'phone')); ?>
        <p class="comfirm_val" id="current_status_school_name" name="current_status_school_name">EYU</p>
  </div>

  <div class="form-group">
        <?php echo form_label('Department/Major', 'current_status_school_major', array( 'class' => '', 'id'=> '', 'style' => '', 'for' => 'phone')); ?>
        <p class="comfirm_val" id="current_status_school_major" name="current_status_school_major">Industrial Chemistry</p>
  </div>

  <div class="form-group">
        <?php echo form_label('Grade', 'current_status_school_grade', array( 'class' => '', 'id'=> '', 'style' => '', 'for' => 'phone')); ?>
        <p class="comfirm_val" id="current_status_school_major" name="current_status_school_major">Industrial Chemistry</p>
  </div>

  <h6 class="spec_plan">Specific Plans after Graduating</h6>
  <div class="form-group">
        <?php echo form_label('Specific Plans after Graduating', 'specific_plans_after_graduating', array( 'class' => '', 'id'=> '', 'style' => '', 'for' => 'phone')); ?>
        <p class="comfirm_val" id="specific_plans_after_graduating" name="specific_plans_after_graduating">その他 /Other</p>
  </div>

  <h6 class="spec_plan">Higher Education in Japan</h6>
  <div class="form-group">
        <?php echo form_label('Type of Schools', 'specific_plan_type_schools', array( 'class' => '', 'id'=> '', 'style' => '', 'for' => 'phone')); ?>
        <p class="comfirm_val" id="specific_plans_after_graduating" name="specific_plans_after_graduating">-</p>
  </div>

  <div class="form-group">
        <?php echo form_label('Name of School', 'specific_plan_school_name', array( 'class' => '', 'id'=> '', 'style' => '', 'for' => 'phone')); ?>
        <p class="comfirm_val" id="specific_plan_school_name" name="specific_plan_school_name">-</p>
  </div>

  <div class="form-group">
        <?php echo form_label('Major', 'specific_plan_major ', array( 'class' => '', 'id'=> '', 'style' => '', 'for' => 'phone')); ?>
        <p class="comfirm_val" id="specific_plan_major" name="specific_plan_major">-</p>
  </div>
</div>
<!-- leftside -->

<!-- rightside -->
<div class="col-md-6 float-left">
  <div class="form-group">
      <?php echo form_label('Occupation', 'occupation', array( 'class' => '', 'id'=> '', 'style' => '', 'for' => 'phone')); ?>
      <p class="comfirm_val" id="occupation" name="occupation">Student</p>
  </div>

  <div class="form-group">
      <?php echo form_label('Place of Employment or School', 'place_employment_school', array( 'class' => '', 'id'=> '', 'style' => '', 'for' => 'phone')); ?>
      <p class="comfirm_val" id="place_employment_school" name="place_employment_school">PKT Education Center</p>
  </div>

  <div class="form-group">
      <?php echo form_label('Address of Employment or School', 'addr_employment_school', array( 'class' => '', 'id'=> '', 'style' => '', 'for' => 'phone')); ?>
      <p class="comfirm_val" id="addr_employment_school" name="addr_employment_school">No(71), Room A, Ground Floor, Upper Pazundaung Road Mingalar Taung Nyunt Township,Yangon.</p>
  </div>

  <style>
    .employment_text{
      margin-bottom: 10px;
    }
  </style>

  <div class="form-group">
      <?php echo form_label('Tel of Employment or School', 'tel_employment_school', array( 'class' => 'employment_text', 'id'=> '', 'style' => '', 'for' => 'phone'));?>
      <p class="comfirm_val" id="tel_employment_school" name="tel_employment_school">09-251801804 , 09-251801805</p>
  </div>

  <div class="form-group">
      <?php echo form_label('Entrance Age to Elementary School', 'entry_age_ele_school', array( 'class' => '', 'id'=> '', 'style' => '', 'for' => 'phone')); ?>
      <p class="comfirm_val" id="entry_age_ele_school" name="entry_age_ele_school">-</p>
  </div>

  <div class="form-group">
      <?php echo form_label('Lastest Educational history School name', 'educational_school_name', array( 'class' => '', 'id'=> '', 'style' => '', 'for' => 'phone')); ?>
      <p class="comfirm_val" id="educational_school_name" name="educational_school_name">-</p>
  </div>

  <div class="form-group">
      <?php echo form_label('Duration of JP Language study', 'duration_jp_language_study', array( 'class' => '', 'id'=> '', 'style' => '', 'for' => 'phone')); ?>
      <p class="comfirm_val" id="duration_jp_language_study" name="duration_jp_language_study">2years</p>
  </div>

  <style>
    .passport_text{
      margin-bottom: 10px;
    }
  </style>

  <div class="form-group">
  <?php echo form_label('Passport', 'passport', array( 'class' => 'passport_text', 'id'=> '')); ?>
  <p class="comfirm_val" id="passport" name="passport">Yes</p>
  </div>

  <div class="form-group">
      <?php echo form_label('Passport Number', 'passport_no', array( 'class' => '', 'id'=> '', 'style' => '', 'for' => 'phone')); ?>
      <p class="comfirm_val" id="paspassport_nosport" name="passport_no">MT123456</p>
  </div>

  <div class="form-group">
      <?php echo form_label('Date of issue', 'passport_data_issue', array( 'class' => '', 'id'=> '', 'style' => '', 'for' => 'phone')); ?>
      <p class="comfirm_val" id="paspassport_nosport" name="passport_no">-</p>
  </div> 

  <div class="form-group">
      <?php echo form_label('Date of expiration', 'passport_data_exp', array( 'class' => '', 'id'=> '', 'style' => '', 'for' => 'phone')); ?>
      <p class="comfirm_val" id="passport_data_exp" name="passport_data_exp">24/08/2027</p>
  </div>  

  <style>
    .military_txt{
      margin-bottom: 16px;
    }
  </style>

  <div class="form-group">
      <?php echo form_label('Blank period／Military service', 'military_service', array( 'class' => 'military_txt', 'id'=> '')); ?>
      <p class="comfirm_val" id="military_service" name="military_service">No</p>
  </div>

  <div class="form-group">
      <?php echo form_label('Place to Apply for VISA', 'place_apply_visa', array( 'class' => '', 'id'=> '', 'style' => '', 'for' => 'phone')); ?>
      <p class="comfirm_val" id="place_apply_visa" name="place_apply_visa">-</p>
  </div>
  
  <div class="form-group">
      <?php echo form_label('Accompanying Persons,if Any', 'accompanying_person', array( 'class' => 'form-control-label', 'id'=> '')); ?>
      <p class="comfirm_val" id="accompanying_person" name="accompanying_person">-</p>
  </div>

  <div class="form-group">
      <?php echo form_label('Did you apply before in Japan?', 'school_apply_before_japan', array( 'class' => 'form-control-label', 'id'=> '')); ?>
      <p class="comfirm_val" id="school_apply_before_japan" name="school_apply_before_japan">No</p>
  </div>

  <div class="form-group">
      <?php echo form_label('when?', 'school_apply_date', array( 'class' => '', 'id'=> '', 'style' => '', 'for' => 'phone')); ?>
      <p class="comfirm_val" id="school_apply_date" name="school_apply_date">-</p>
  </div>

  <div class="form-group">
      <?php echo form_label('status?', 'school_apply_status', array( 'class' => '', 'id'=> '', 'style' => '', 'for' => 'phone')); ?>
      <p class="comfirm_val" id="school_apply_status" name="school_apply_status">-</p>
  </div>

  <div class="form-group">
      <?php echo form_label('Name of School?', 'school_apply_name', array( 'class' => '', 'id'=> '', 'style' => '', 'for' => 'phone')); ?>
      <p class="comfirm_val" id="school_apply_name" name="school_apply_name">-</p>   
  </div>

  <div class="form-group">
      <?php echo form_label('Which immigration office?', 'immigration_office', array( 'class' => '', 'id'=> '', 'style' => '', 'for' => 'phone')); ?>
      <p class="comfirm_val" id="immigration_office" name="immigration_office">-</p>   
  </div>

  <div class="form-group">
     <?php echo form_label('Result?', 'immigration_result', array( 'class' => '', 'id'=> '', 'style' => '', 'for' => 'phone')); ?>
     <p class="comfirm_val" id="immigration_result" name="immigration_result">交付後の未入国</p>   
  </div>

  <div class="form-group">
  <?php echo form_label('Have you ever experienced COE rejection?', 'COE_reject', array( 'class' => 'form-control-label', 'id'=> '')); ?>
  <span class="badge badge-danger">Required</span>
  <p class="comfirm_val" id="COE_reject" name="COE_reject">No</p>   
  </div>
  
  <br><br><br><br><br><br><br><br><br>
  <h6 class="spec_plan">Employment</h6>
  <div class="form-group">
        <?php echo form_label('Aimed occupational category', 'aimed_occupational_category', array( 'class' => 'employment', 'id'=> '', 'style' => '', 'for' => 'phone')); ?>
        <p class="comfirm_val" id="aimed_occupational_category" name="aimed_occupational_category">-</p>   
  </div>
  <h6 class="spec_plan" style="padding: 0px;margin-bottom:10px;">Return to home country</h6>
  <div class="form-group">
        <?php echo form_label('When will you return', 'will_you_return', array( 'class' => '', 'id'=> '', 'style' => '', 'for' => 'phone')); ?>
        <p class="comfirm_val" id="will_you_return" name="will_you_return">-</p>   
  </div>

  <div class="form-group">
  <?php echo form_label('Is it possible to provide in English? ', 'provide_english', array( 'class' => 'form-control-label', 'id'=> '')); ?>
  <span class="badge badge-danger">Required</span>
  <p class="comfirm_val" id="provide_english" name="provide_english">Yes</p>   

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
<style>
  .wholanguage{
    margin-bottom: 19px;
  }
</style>
<div class="col-md-6 float-left">
  <div class="form-group">
        <?php echo form_label('Who?', 'understand_language', array( 'class' => 'wholanguage', 'id'=> '', 'style' => '', 'for' => 'phone')); ?>
        <?php
          echo form_input(array(
            'name' => 'understand_language',
            'type' => 'text',
            // 'value' => html_escape(set_value('understand_language',isset($result)?$result->understand_language:''), ENT_QUOTES),
            'placeholder' => 'Please Enter!',
            'class' => 'form-control',
            'id' => 'understand_language',
            'autocomplete' => ''));
        ?>
        <span class="text-danger"><?php echo form_error('understand_language'); ?></span>
  </div>

  <div class="form-group">
  <?php echo form_label('Criminal Record in Japan or Overseas', 'criminal_record', array( 'class' => 'form-control-label', 'id'=> '')); ?>
    <span class="badge badge-danger">Required</span>
      <select name="criminal_record" id="criminal_record" class="admission_select">
          <option value="1">Yes</option>
          <option value="0">No</option>
      </select>
    </div>
   
<div class="criminal form-group float-left">
    <div class="">
    <?php echo form_label('Have you applied for Certificate of Eligibility?', 'criminal_record', array( 'class' => 'form-control-label', 'id'=> '')); ?>
      <span class="badge badge-danger">Required</span>
    </div>
  
    <div class="radio_record">
        <div class="criminal_record01">
          <select name="criminal_record" id="criminal_record" class="col-md-12 admission_select">
              <option value="1">Yes</option>
              <option value="0">No</option>
          </select>
        </div>
        <div class="">
            <label class="col-rd cri_text"><span style="padding-left:30px ;margin-top: 7px;">Details</span>
                <input type="text" class="details form-control col-md-8" name="criminal_record_details" value="" checked="checked">
            </label> 
        </div>
    </div>  
</div>
    
</div>



<div class="col-md-6 float-left">
 <div class="form-group">
    <p class="addmission">Language</p>
    <select name="family_language" class="admission_select">
        <option value="English">English</option>
        <option value="Chinese">Chinese</option>
        <option value="Korean">Korean</option>
        <option value="Thai">Thai</option>
        <option value="Vietnamese">Vietnamese</option>
        <option value="Japanese">Japanese</option>
    </select>
  </div>
  <!-- <div class="criminal_record02">
            <label class="col-rd cri_text"><span style="padding-left:4px ;">Details</span>
                <input type="text" class="details form-control col-md-12" name="criminal_record_details" value="" checked="checked">
            </label> 
        </div> -->
        <div class="form-group">
        <?php echo form_label('Details', ' criminal_record_details', array( 'class' => 'eli_text', 'id'=> 'criminal_record_details', 'style' => '', 'for' => 'phone')); ?>
        <?php
          echo form_input(array(
            'name' => 'criminal_record_details ',
            'type' => 'text',
            'placeholder' => 'Please Enter!',
            'class' => 'form-control',
            'id' => ' criminal_record_details',
            'autocomplete' => ''));
        ?>
        <span class="text-danger"><?php echo form_error('criminal_record_details '); ?></span>
  </div>
  <div class="criminal form-group float-left">
    <div class="">
    <?php echo form_label('Have you applied for Certificate of Eligibility?', 'criminal_record', array( 'class' => 'form-control-label', 'id'=> '')); ?>
      <span class="badge badge-danger">Required</span>
    </div>
  
    <div class="radio_record">
        <div class="">
            <label class="col-rd cri_text"><span style="margin-top: 7px;">When:</span>
                <input type="text" class="details form-control col-md-8" name="criminal_record_details" value="" checked="checked" style="margin-left: 16px;margin-right: 0px;">
            </label> 
        </div>
        <div class="">
            <label class="col-rd cri_text"><span>Purpose of Entry:</span>
                <input type="text" class="details form-control col-md-8" name="criminal_record_details" value="" checked="checked" style="margin: 0px;">
            </label> 
        </div>
    </div>  
</div>
  <style>
  .criminal_record01 {
    width: 34%;
    /* position: absolute; */
  }
  /* .criminal_record02 {
    position: relative;
    top: 0px;
    left: 25%;
  } */
  .criminal_record03{
    position: relative;
    top: 0px;
    left: 25%;
  }
  /* .eli_text{
    padding-left: 37px;

  } */
</style> 
  
</div>
<!-- co_leftside -->

<div class="criminal form-group float-left">
      <!-- <div class="">
      <label>Have you applied for Certificate of Eligibility?</label>
      <span class="badge badge-danger">Required</span>
    </div> -->
  
      <!-- <div class="radio_record">
          <div class="criminal_record01">
          <select name="criminal_record" id="criminal_record" class="col-md-12 admission_select">
              <option value="1">Yes</option>
              <option value="0">No</option>
          </select>
        </div>
          <div class="criminal_record03  ">
              <label class="cri_text muti_txt">Times:
                  <input type="text" class="appli form-control " name="criminal_record_times" value="" checked="checked">
              </label>
          </div>
          <div class="criminal_record03  ">
              <label class="cri_text muti_txt">When:
                  <input type="text" class="appli form-control " name="criminal_record_when" value="" checked="checked">
              </label>
          </div>
          <div class="criminal_record03  ">
              <label class="cri_text muti_txt">Purpose of Entry:
                  <input type="text" class="appli form-control " name="criminal_record_details" value="" checked="checked">
              </label>
          </div> 
      </div>   -->
      <label>Purpose of studying in Japanese </label>
      <div class="col-md-12 col-sm-12 p-0">
          <?php 
            $data = array(
            'name' => '',
            'value' => ' ',
            'type' => 'text',
            'placeholder' => 'Please Enter!',
            'class' => "form-control",
            // 'value' => set_value('purpose_studying_in_japanese ',isset($result)?$result->purpose_studying_in_japanese :'')
          );
          echo form_textarea($data); ?>
          <span class="text-danger"><?php echo form_error('purpose_studying_in_japanese '); ?></span>
      </div>
      
</div>
<div class="col-md-6 float-left">
<h6 class="" style="padding: 33px 0px 12px;">Contact details of your family</h6>
<div class="form-group">
        <?php echo form_label('Email', 'family_mail', array( 'class' => '', 'id'=> '', 'style' => '', 'for' => 'std_email')); ?>
        <span class="badge badge-danger">Required</span>
        <?php
          echo form_input(array(
            'name' => 'family_mail',
            'type' => 'text',
            'value' => html_escape(set_value('family_mail',isset($result)?$result->family_mail:''), ENT_QUOTES),
            'placeholder' => 'Enter email account!',
            'class' => 'form-control',
            'id' => 'family_mail',
            'autocomplete' => ''));
        ?>
        <span class="text-danger"><?php echo form_error('family_mail'); ?></span>
       </div>

       <div class="form-group">
        <?php echo form_label('Phone Number', 'family_tel', array( 'class' => '', 'id'=> '', 'style' => '', 'for' => 'phone')); ?>
        <span class="badge badge-danger">Required</span>
        <?php
          echo form_input(array(
            'name' => 'family_tel',
            'type' => 'text',
            'value' => html_escape(set_value('family_tel',isset($result)?$result->family_tel:''), ENT_QUOTES),
            'placeholder' => 'Enter phone number!',
            'class' => 'form-control',
            'id' => 'family_tel',
            'autocomplete' => ''));
        ?>
        <span class="text-danger"><?php echo form_error('family_tel'); ?></span>
       </div>

<div class="form-group">
        <?php echo form_label('Address','family_address', array('class' => 'col-form-label')); ?>
        <span class="badge badge-danger">Required</span>
        <?php
          echo form_input(array(
            'name' => 'address',
            'type' => 'text',
            'value' => html_escape(set_value('phone',isset($result)?$result->address:''), ENT_QUOTES),
            'placeholder' => 'Enter address!',
            'class' => 'form-control',
            'id' => 'address',
            'autocomplete' => ''));
        ?>
        <span class="text-danger"><?php echo form_error('address'); ?></span>
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
      <th>Finishing <br>Year/Month </th>
      <th>Term of Study</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>
      <input type="text" class=" table-control"  name="name" value="">
      </td>
      <td>
      <input type="text" class=" table-control"  name="address" value="">
      </td>
      <td>
      <input type="text" class=" table-control"  name="start_date" value="">
      </td>
      <td>
      <input type="text" class=" table-control"  name="end_date" value="">
      </td>
      <td>
      <input type="text" class=" table-control term" name="year" value=""><span class="study_year">year</span> 
      </td>
    </tr>
    <tr>
      <td>
      <input type="text" class=" table-control"  name="name" value="">
      </td>
      <td>
      <input type="text" class=" table-control"  name="address" value="">
      </td>
      <td>
      <input type="text" class=" table-control"  name="start_date" value="">
      </td>
      <td>
      <input type="text" class=" table-control"  name="end_date" value="">
      </td>
      <td>
      <input type="text" class=" table-control term" name="year" value=""><span class="study_year">year</span> 
      </td>
    </tr>
    <tr>
      <td>
      <input type="text" class=" table-control"  name="name" value="">
      </td>
      <td>
      <input type="text" class=" table-control"  name="address" value="">
      </td>
      <td>
      <input type="text" class=" table-control"  name="start_date" value="">
      </td>
      <td>
      <input type="text" class=" table-control"  name="end_date" value="">
      </td>
      <td>
      <input type="text" class=" table-control term" name="year" value=""><span class="study_year">year</span> 
      </td>
    </tr>
    <tr>
      <td>
      <input type="text" class=" table-control"  name="name" value="">
      </td>
      <td>
      <input type="text" class=" table-control"  name="address" value="">
      </td>
      <td>
      <input type="text" class=" table-control"  name="start_date" value="">
      </td>
      <td>
      <input type="text" class=" table-control"  name="end_date" value="">
      </td>
      <td>
      <input type="text" class=" table-control term" name="year" value=""><span class="study_year">year</span> 
      </td>
    </tr>
    <tr>
      <td>
      <input type="text" class=" table-control"  name="name" value="">
      </td>
      <td>
      <input type="text" class=" table-control"  name="address" value="">
      </td>
      <td>
      <input type="text" class=" table-control"  name="start_date" value="">
      </td>
      <td>
      <input type="text" class=" table-control"  name="end_date" value="">
      </td>
      <td>
      <input type="text" class=" table-control term" name="year" value=""><span class="study_year">year</span> 
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
<table class="table-bordered" name="applicant_id">
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
      <input type="text" class=" table-control"  name="name" value="">
      </td>
      <td>
      <input type="text" class=" table-control"  name="address" value="">
      </td>
      <td>
      <input type="text" class=" table-control"  name="start_date" value="">
      </td>
      <td>
      <input type="text" class=" table-control"  name="end_date" value="">
      </td>
      <td>
      <input type="text" class=" table-control term" name="hour" value=""><span class="study_year">hour</span> 
      </td>
    </tr>
    <tr>
      <td>
      <input type="text" class=" table-control"  name="name" value="">
      </td>
      <td>
      <input type="text" class=" table-control"  name="address" value="">
      </td>
      <td>
      <input type="text" class=" table-control"  name="start_date" value="">
      </td>
      <td>
      <input type="text" class=" table-control"  name="end_date" value="">
      </td>
      <td>
      <input type="text" class=" table-control term" name="hour" value=""><span class="study_year">hour</span> 
      </td>
    </tr>
    <tr>
      <td>
      <input type="text" class=" table-control"  name="name" value="">
      </td>
      <td>
      <input type="text" class=" table-control"  name="address" value="">
      </td>
      <td>
      <input type="text" class=" table-control"  name="start_date" value="">
      </td>
      <td>
      <input type="text" class=" table-control"  name="end_date" value="">
      </td>
      <td>
      <input type="text" class=" table-control term" name="hour" value=""><span class="study_year">hour</span> 
      </td>
    </tr>
    <tr>
      <td>
      <input type="text" class=" table-control"  name="name" value="">
      </td>
      <td>
      <input type="text" class=" table-control"  name="address" value="">
      </td>
      <td>
      <input type="text" class=" table-control"  name="start_date" value="">
      </td>
      <td>
      <input type="text" class=" table-control"  name="end_date" value="">
      </td>
      <td>
      <input type="text" class=" table-control term" name="hour" value=""><span class="study_year">hour</span> 
      </td>
    </tr>
    <tr>
      <td>
      <input type="text" class=" table-control"  name="name" value="">
      </td>
      <td>
      <input type="text" class=" table-control"  name="address" value="">
      </td>
      <td>
      <input type="text" class=" table-control"  name="start_date" value="">
      </td>
      <td>
      <input type="text" class=" table-control"  name="end_date" value="">
      </td>
      <td>
      <input type="text" class=" table-control term" name="hour" value=""><span class="study_year">hour</span> 
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
      <input type="text" class=" table-control"  name="name" value="">
      </td>
      <td>
      <input type="text" class=" table-control"  name="level" value="">
      </td>
      <td>
      <input type="text" class=" table-control"  name="exam_year" value="">
      </td>
      <td>
      <input type="text" class=" table-control"  name="score" value="">
      </td>
      <td>
      <input type="text" class=" table-control term" name="result" value="">
      </td>
      <td>
      <input type="text" class=" table-control" name="date_qualification" value="">
      </td>
    </tr>
    <tr>
      <td>
      <input type="text" class=" table-control"  name="name" value="">
      </td>
      <td>
      <input type="text" class=" table-control"  name="level" value="">
      </td>
      <td>
      <input type="text" class=" table-control"  name="exam_year" value="">
      </td>
      <td>
      <input type="text" class=" table-control"  name="score" value="">
      </td>
      <td>
      <input type="text" class=" table-control term" name="result" value=""> 
      </td>
      <td>
      <input type="text" class=" table-control" name="date_qualification" value="">
      </td>
    </tr>
    <tr>
      <td>
      <input type="text" class=" table-control"  name="name" value="">
      </td>
      <td>
      <input type="text" class=" table-control"  name="level" value="">
      </td>
      <td>
      <input type="text" class=" table-control"  name="exam_year" value="">
      </td>
      <td>
      <input type="text" class=" table-control"  name="score" value="">
      </td>
      <td>
      <input type="text" class=" table-control term" name="result" value=""> 
      </td>
      <td>
      <input type="text" class=" table-control" name="date_qualification" value="">
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
      <input type="text" class=" table-control term" name="name" value="">
      </td>
      <td>
      <input type="text" class=" table-control" name="level" value="">
      </td>
    </tr>
    <tr>
      <td>
      <input type="text" class=" table-control term" name="name" value="">
      </td>
      <td>
      <input type="text" class=" table-control" name="level" value="">
      </td>
    </tr>
    <tr>
      <td>
      <input type="text" class=" table-control term" name="name" value="">
      </td>
      <td>
      <input type="text" class=" table-control" name="level" value="">
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
      <input type="text" class=" table-control"  name="name" value="">
      </td>
      <td>
      <input type="text" class=" table-control"  name="address" value="">
      </td>
      <td>
      <input type="text" class=" table-control"  name="start_date" value="">
      </td>
      <td>
      <input type="text" class=" table-control"  name="end_date" value="">
      </td>
      <td>
      <input type="text" class=" table-control term" name="year" value="">
      </td>
      <td>
      <input type="text" class=" table-control" name="job_description" value="">
      </td>
    </tr>
    <tr>
      <td>
      <input type="text" class=" table-control"  name="name" value="">
      </td>
      <td>
      <input type="text" class=" table-control"  name="address" value="">
      </td>
      <td>
      <input type="text" class=" table-control"  name="start_date" value="">
      </td>
      <td>
      <input type="text" class=" table-control"  name="end_date" value="">
      </td>
      <td>
      <input type="text" class=" table-control term" name="year" value=""> 
      </td>
      <td>
      <input type="text" class=" table-control" name="job_description" value="">
      </td>
    </tr>
    <tr>
      <td>
      <input type="text" class=" table-control"  name="name" value="">
      </td>
      <td>
      <input type="text" class=" table-control"  name="address" value="">
      </td>
      <td>
      <input type="text" class=" table-control"  name="start_date" value="">
      </td>
      <td>
      <input type="text" class=" table-control"  name="end_date" value="">
      </td>
      <td>
      <input type="text" class=" table-control term" name="year" value=""> 
      </td>
      <td>
      <input type="text" class=" table-control" name="job_description" value="">
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
      <input type="text" class=" table-control"  name="name" value="">
      </td>
      <td>
      <input type="text" class=" table-control"  name="relationship" value="">
      </td>
      <td>
      <input type="text" class=" table-control"  name="work_place" value="">
      </td>
      <td>
      <input type="text" class=" table-control"  name="birthday" value="">
      </td>
      <td>
      <input type="text" class=" table-control"  name="occupation" value="">
      </td>
      <td>
      <input type="text" class=" table-control"  name="annual_income" value="">
      </td>
      <td>
      <input type="text" class=" table-control " name="address" value="">
      </td>
      <td>
      <input type="text" class=" table-control" name="length_sevice" value="">
      </td>
    </tr>
    <tr>
    <td>
      <input type="text" class=" table-control"  name="name" value="">
      </td>
      <td>
      <input type="text" class=" table-control"  name="relationship" value="">
      </td>
      <td>
      <input type="text" class=" table-control"  name="work_place" value="">
      </td>
      <td>
      <input type="text" class=" table-control"  name="birthday" value="">
      </td>
      <td>
      <input type="text" class=" table-control"  name="occupation" value="">
      </td>
      <td>
      <input type="text" class=" table-control"  name="annual_income" value="">
      </td>
      <td>
      <input type="text" class=" table-control " name="address" value=""> 
      </td>
      <td>
      <input type="text" class=" table-control" name="length_sevice" value="">
      </td>
    </tr>
    <tr>
    <td>
      <input type="text" class=" table-control"  name="name" value="">
      </td>
      <td>
      <input type="text" class=" table-control"  name="relationship" value="">
      </td>
      <td>
      <input type="text" class=" table-control"  name="work_place" value="">
      </td>
      <td>
      <input type="text" class=" table-control"  name="birthday" value="">
      </td>
      <td>
      <input type="text" class=" table-control"  name="occupation" value="">
      </td>
      <td>
      <input type="text" class=" table-control"  name="annual_income" value="">
      </td>
      <td>
      <input type="text" class=" table-control " name="address" value=""> 
      </td>
      <td>
      <input type="text" class=" table-control" name="length_sevice" value="">
      </td>
    </tr>
    <tr>
    <td>
      <input type="text" class=" table-control"  name="name" value="">
      </td>
      <td>
      <input type="text" class=" table-control"  name="relationship" value="">
      </td>
      <td>
      <input type="text" class=" table-control"  name="work_place" value="">
      </td>
      <td>
      <input type="text" class=" table-control"  name="birthday" value="">
      </td>
      <td>
      <input type="text" class=" table-control"  name="occupation" value="">
      </td>
      <td>
      <input type="text" class=" table-control"  name="annual_income" value="">
      </td>
      <td>
      <input type="text" class=" table-control " name="address" value=""> 
      </td>
      <td>
      <input type="text" class=" table-control" name="length_sevice" value="">
      </td>
    </tr>
    <tr>
    <td>
      <input type="text" class=" table-control"  name="name" value="">
      </td>
      <td>
      <input type="text" class=" table-control"  name="relationship" value="">
      </td>
      <td>
      <input type="text" class=" table-control"  name="work_place" value="">
      </td>
      <td>
      <input type="text" class=" table-control"  name="birthday" value="">
      </td>
      <td>
      <input type="text" class=" table-control"  name="occupation" value="">
      </td>
      <td>
      <input type="text" class=" table-control"  name="annual_income" value="">
      </td>
      <td>
      <input type="text" class=" table-control " name="address" value=""> 
      </td>
      <td>
      <input type="text" class=" table-control" name="length_sevice" value="">
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
<p >If yes, fill in all the family members in Japan.</p>
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
      <input type="text" class=" table-control"  name="name" value="">
      </td>
      <td>
      <input type="text" class=" table-control"  name="age" value="">
      </td>
      <td>
      <input type="text" class=" table-control"  name="relationship" value="">
      </td>
      <td>
      <div class="">
      <select name="residing_applicant" class="table-control col-md-12">
            <option value=""></option>
            <option value="0">Yes</option>
            <option value="1">No</option>
        </select>
     </div>
      </td>
      <td>
      <input type="text" class=" table-control"  name="nationality" value="">
      </td>
      <td>
      <input type="text" class=" table-control " name="visa_status" value="">
      </td>
      <td>
      <input type="text" class=" table-control" name="work_place" value="">
      </td>
    </tr>
    <tr>
    
      <td>
      <input type="text" class=" table-control"  name="name" value="">
      </td>
      <td>
      <input type="text" class=" table-control"  name="age" value="">
      </td>
      <td>
      <input type="text" class=" table-control"  name="relationship" value="">
      </td>
      <td>
      <div class="">
      <select name="residing_applicant" class="table-control col-md-12">
            <option value=""></option>
            <option value="0">Yes</option>
            <option value="1">No</option>
        </select>
     </div>
      </td>
      <td>
      <input type="text" class=" table-control"  name="nationality" value="">
      </td>
      <td>
      <input type="text" class=" table-control " name="visa_status" value=""> 
      </td>
      <td>
      <input type="text" class=" table-control" name="work_place" value="">
      </td>
    </tr>
    <tr>
    
      <td>
      <input type="text" class=" table-control"  name="name" value="">
      </td>
      <td>
      <input type="text" class=" table-control"  name="age" value="">
      </td>
      <td>
      <input type="text" class=" table-control"  name="relationship" value="">
      </td>
      <td>
      <div class="">
      <select name="residing_applicant" class="table-control col-md-12">
            <option value=""></option>
            <option value="0">Yes</option>
            <option value="1">No</option>
        </select>
     </div>
      </td>
      <td>
      <input type="text" class=" table-control"  name="nationality" value="">
      </td>
      <td>
      <input type="text" class=" table-control " name="visa_status" value=""> 
      </td>
      <td>
      <input type="text" class=" table-control" name="work_place" value="">
      </td>
    </tr>
    <tr>
      <td>
      <input type="text" class=" table-control"  name="name" value="">
      </td>
      <td>
      <input type="text" class=" table-control"  name="age" value="">
      </td>
      <td>
      <input type="text" class=" table-control"  name="relationship" value="">
      </td>
      <td>
      <div class="">
        <select name="residing_applicant " class="table-control col-md-12">
            <option value=""></option>
            <option value="0">Yes</option>
            <option value="1">No</option>
        </select>
     </div>
      </td>
      <td>
      <input type="text" class=" table-control"  name="nationality" value="">
      </td>
      <td>
      <input type="text" class=" table-control"  name="visa_status" value="">
      </td>
      <td>
      <input type="text" class=" table-control " name="work_place" value=""> 
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
      <input type="text" class=" table-control"  name="entry_date" value="">
      </td>
      <td>
      <input type="text" class=" table-control"  name="arrival_date" value="">
      </td>
      <td>
      <input type="text" class=" table-control"  name="depature_data" value="">
      </td>
      <td>
      <input type="text" class=" table-control"  name="status" value="">
      </td>
      <td>
      <input type="text" class=" table-control"  name="entry_purpose" value="">
      </td>
    </tr>
    <tr>
      <td>
      <input type="text" class=" table-control"  name="entry_date" value="">
      </td>
      <td>
      <input type="text" class=" table-control"  name="arrival_date" value="">
      </td>
      <td>
      <input type="text" class=" table-control"  name="depature_data" value="">
      </td>
      <td>
      <input type="text" class=" table-control"  name="status" value="">
      </td>
      <td>
      <input type="text" class=" table-control"  name="entry_purpose" value="">
      </td>
     
    </tr>
    <tr>
      <td>
      <input type="text" class=" table-control"  name="entry_date" value="">
      </td>
      <td>
      <input type="text" class=" table-control"  name="arrival_date" value="">
      </td>
      <td>
      <input type="text" class=" table-control"  name="depature_data" value="">
      </td>
      <td>
      <input type="text" class=" table-control"  name="status" value="">
      </td>
      <td>
      <input type="text" class=" table-control"  name="entry_purpose" value="">
      </td>
    </tr>
  </tbody>
</table>
</div>

</div>
<!-- Table -->



</div>
</div>

<!-- dropdown APPLICANT INFORMATION -->
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
/* #expected_year {
    margin-left: 17px;
    width: 40%;
} */
/* #expected_month{
  width: 40%;

} */
.graduating_month_year{
  display: flex;
}
.expected_txt {
    margin-left: 13px;
    font-size: 17px;
}
.col-rd{
  margin: 0px 50px 0px 0px;
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
 
/* .tbl{
   width: 100%;
  } */

/* .term{
  position: relative;
} */
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

</style>




<!-- dropdown FINANICIAL SPONSOR -->
<div class="content_detail">
  <input class="dropdown" type="checkbox" id="faq-3">
  <p class="drop_ttl"><label for="faq-3" class="drop_label">FINANICIAL SPONSOR</label></p>
  <div class="drop_txt">
  <h5 class="finial_ttl">Finanicial Sponsor</h5>
  <div class="col-md-6 float-left" name="applicant_id">
      <div class="form-group">
        <?php echo form_label('Name', 'name', array( 'class' => '', 'id'=> '', 'style' => '', 'for' => 'std_name')); ?>
        <span class="badge badge-danger">Required</span>
        <?php
          echo form_input(array(
            'name' => 'name',
            'type' => 'text',
            'value' => html_escape(set_value('name',isset($result)?$result->name:''), ENT_QUOTES),
            'placeholder' => 'Enter name!',
            'class' => 'form-control',
            'id' => 'name',
            'autocomplete' => ''));
          ?>
        <span class="text-danger"><?php echo form_error('name'); ?></span>
      </div>
      <div class="form-group">
        <?php echo form_label('Age', 'age', array( 'class' => '', 'id'=> '', 'style' => '', 'for' => 'std_name')); ?>
        <span class="badge badge-danger">Required</span>
        <?php
          echo form_input(array(
            'name' => 'age',
            'type' => 'text',
            'value' => html_escape(set_value('age',isset($result)?$result->age:''), ENT_QUOTES),
            'placeholder' => "Enter Age!",
            'class' => 'form-control',
            'id' => 'age',
            'autocomplete' => ''));
          ?>
        <span class="text-danger"><?php echo form_error('age'); ?></span>
      </div>
      <div class="form-group">
        <?php echo form_label('Relationship', 'relationship', array( 'class' => '', 'id'=> '', 'style' => '', 'for' => 'std_name')); ?>
        <span class="badge badge-danger">Required</span>
        <?php
          echo form_input(array(
            'name' => 'relationship',
            'type' => 'text',
            'value' => html_escape(set_value('relationship',isset($result)?$result->relationship:''), ENT_QUOTES),
            'placeholder' => "Enter student's Age!",
            'class' => 'form-control',
            'id' => 'relationship',
            'autocomplete' => ''));
          ?>
        <span class="text-danger"><?php echo form_error('relationship'); ?></span>
      </div>
      <div class="form-group">
        <?php
          echo form_label('Address','address', array('class' => 'col-form-label'));
        ?>
        <div class="col-md-12 col-sm-12 p-0">
          <?php 
            $data = array(
            'name' => 'address',
            'value' => '',
            'rows' => '3',
            'cols' => '',
            'placeholder' => 'Enter address',
            'class' => "form-control",
            'value' => set_value('address',isset($result)?$result->address:'')
          );
          echo form_textarea($data); ?>
          <span class="text-danger"><?php echo form_error('address'); ?></span>
        </div>
       </div>
       <div class="form-group">
        <?php echo form_label('Phone Number', 'tel', array( 'class' => '', 'id'=> '', 'style' => '', 'for' => 'phone')); ?>
        <span class="badge badge-danger">Required</span>
        <?php
          echo form_input(array(
            'name' => 'tel',
            'type' => 'text',
            'value' => html_escape(set_value('tel',isset($result)?$result->tel:''), ENT_QUOTES),
            'placeholder' => 'Enter phone number!',
            'class' => 'form-control',
            'id' => 'tel',
            'autocomplete' => ''));
        ?>
        <span class="text-danger"><?php echo form_error('tel'); ?></span>
       </div>
       <div class="form-group">
        <?php echo form_label('Email', 'email', array( 'class' => '', 'id'=> '', 'style' => '', 'for' => 'std_email')); ?>
        <span class="badge badge-danger">Required</span>
        <?php
          echo form_input(array(
            'name' => 'email',
            'type' => 'text',
            'value' => html_escape(set_value('email',isset($result)?$result->email:''), ENT_QUOTES),
            'placeholder' => 'Enter email account!',
            'class' => 'form-control',
            'id' => 'email',
            'autocomplete' => ''));
        ?>
        <span class="text-danger"><?php echo form_error('email'); ?></span>
       </div>
       <div class="form-group">
      <?php echo form_label('Occupation', 'occupation', array( 'class' => '', 'id'=> '', 'style' => '', 'for' => 'phone')); ?>
      <?php
        echo form_input(array(
          'name' => 'occupation',
          'type' => 'text',
          'value' => html_escape(set_value('occupation',isset($result)?$result->occupation:''), ENT_QUOTES),
          'placeholder' => 'Please Enter!',
          'class' => 'form-control',
          'id' => 'occupation',
          'autocomplete' => ''));
      ?>
      <span class="text-danger"><?php echo form_error('occupation'); ?></span>
  </div>
  <div class="form-group">
      <?php echo form_label('Work Place', 'work_place', array( 'class' => '', 'id'=> '', 'style' => '', 'for' => 'phone')); ?>
      <?php
        echo form_input(array(
          'name' => 'work_place',
          'type' => 'text',
          'value' => html_escape(set_value('work_place',isset($result)?$result->work_place:''), ENT_QUOTES),
          'placeholder' => 'Please Enter!',
          'class' => 'form-control',
          'id' => 'work_place',
          'autocomplete' => ''));
      ?>
      <span class="text-danger"><?php echo form_error('work_place'); ?></span>
  </div>
  <div class="form-group">
      <?php echo form_label('Annual Income', 'annual_income', array( 'class' => '', 'id'=> '', 'style' => '', 'for' => 'phone')); ?>
      <?php
        echo form_input(array(
          'name' => 'annual_income',
          'type' => 'text',
          'value' => html_escape(set_value('annual_income',isset($result)?$result->annual_income:''), ENT_QUOTES),
          'placeholder' => 'Please Enter!',
          'class' => 'form-control',
          'id' => 'annual_income',
          'autocomplete' => ''));
      ?>
      <span class="text-danger"><?php echo form_error('annual_income'); ?></span>
  </div>
  <div class="form-group">
      <?php echo form_label('The amount of saving for study abroad ', 'amount_saving_for_study_abroad ', array( 'class' => '', 'id'=> '', 'style' => '', 'for' => 'phone')); ?>
      <?php
        echo form_input(array(
          'name' => 'amount_saving_for_study_abroad ',
          'type' => 'text',
          'value' => html_escape(set_value('amount_saving_for_study_abroad ',isset($result)?$result->amount_saving_for_study_abroad :''), ENT_QUOTES),
          'placeholder' => 'Please Enter!',
          'class' => 'form-control',
          'id' => 'amount_saving_for_study_abroad ',
          'autocomplete' => ''));
      ?>
      <span class="text-danger"><?php echo form_error('amount_saving_for_study_abroad '); ?></span>
  </div>
  <div class="form-group">
      <?php echo form_label('The amount of saving which can be proved ', 'amount_of_saving_which_proved', array( 'class' => '', 'id'=> '', 'style' => '', 'for' => 'phone')); ?>
      <?php
        echo form_input(array(
          'name' => 'amount_of_saving_which_proved',
          'type' => 'text',
          'value' => html_escape(set_value('amount_of_saving_which_proved',isset($result)?$result->amount_of_saving_which_proved:''), ENT_QUOTES),
          'placeholder' => 'Please Enter!',
          'class' => 'form-control',
          'id' => 'amount_of_saving_which_proved',
          'autocomplete' => ''));
      ?>
      <span class="text-danger"><?php echo form_error('amount_of_saving_which_proved'); ?></span>
  </div>
  <div class="form-group">
      <?php echo form_label('Start of Work date', 'start_work_date ', array( 'class' => '', 'id'=> '', 'style' => '', 'for' => 'phone')); ?>
      <?php
        echo form_input(array(
          'name' => 'start_work_date  ',
          'type' => 'text',
          'value' => html_escape(set_value('start_work_date ',isset($result)?$result->start_work_date :''), ENT_QUOTES),
          'placeholder' => 'Please Enter!',
          'class' => 'form-control',
          'id' => 'start_work_date ',
          'autocomplete' => ''));
      ?>
      <span class="text-danger"><?php echo form_error('start_work_date '); ?></span>
  </div>
  </div>
</div>
<!-- dropdown FINANICIAL SPONSOR -->
<div class="clearfix"></div>
          <hr class="my-4 dashed clearfix">

          <div class="text-right">
            <button type="submit" class="btn btn-primary text-white btn-sm py-1 px-2">
              <span class="material-icons align-top md-18 mr-1">add_circle</span>Confirm
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
    font-size: 15px;
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
    margin: 10px 140px 0px;
}
div.content_detail{
position: relative;
margin:0 2em 1em;
}
.dropdown{
position: absolute;
left: 0;
top: 0;
/* height: 100%; */
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
margin-top: 5px;
    margin-right: 5px;
border: 8px solid transparent;
border-top: 12px solid white;
}
.drop_label{
  cursor: pointer;
  position: relative;
  display: flex;
  align-items: center;
}
/* input:checked ~ p .drop_label::before {
    margin-top: 5px;
    margin-right: 5px;
    border: 8px solid transparent;
    border-top: 12px solid white;
} */

.drop_label{
cursor: pointer;
position: relative;
display: flex;
align-items: center;
margin-bottom: 0px;
}
/* div.drop_txt{
max-height:0px;
overflow: hidden;
transition:max-height 0.9s;
} */
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
    padding: 8px;
    margin: 7px 5px 7px 0px;
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
  width: 49%;
  font-size: 16px;
  margin: 0px;
}
.text-right {
    padding-bottom: 27px;
    text-align: right !important;
}
</style>