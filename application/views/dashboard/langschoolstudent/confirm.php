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
    font-weight: 400;
    font-size: 16px !important;
}      
.std_img{
    padding-top: 12px;
}
.list_label{
    padding-top: 12px;
}
.comfirm_val{
    /* padding-left: 12px; */
    font-size: 14px;
}
.tbl_comfirmVal{
  font-size: 14px;
}
p{
  margin-bottom: 0px;
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
    <label class="list_label">JLS Name </label>
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
        <p class="comfirm_val" id="applicant_name" name="applicant_name">MIN MIN</p>
    </div>

    <div class="form-group">
        <?php echo form_label(' Name (漢字)', 'applicant_name', array( 'class' => '', 'id'=> '', 'style' => '', 'for' => 'std_name')); ?>
        <p class="comfirm_val" id="applicant_name" name="applicant_name">MIN MIN</p>
    </div>

    <div class="form-group">
        <?php echo form_label('Date Of Birth', 'date_of_birthday', array( 'class' => '', 'id'=> '', 'style' => '', 'for' => 'std_birthday')); ?>
        <p class="comfirm_val" id="date_of_birthday" name="date_of_birthday">01/01/2004</p>
    </div>

    <div class="form-group">
        <?php echo form_label('Place Of Birth', 'place_birth', array( 'class' => '', 'id'=> '', 'style' => '', 'for' => 'std_name')); ?>
        <p class="comfirm_val" id="place_birth" name="place_birth">Botahtaung Township,Yangon</p>
    </div>

    <div class="form-group">
        <?php echo form_label('Age', 'age', array( 'class' => '', 'id'=> '', 'style' => '', 'for' => 'std_name')); ?>
        <p class="comfirm_val" id="age" name="age">21</p>
    </div>

    <div class="form-group">
        <?php echo form_label('Nationality', 'nationality', array( 'class' => '', 'id'=> '', 'style' => '', 'for' => 'std_name')); ?>
        <p class="comfirm_val" id="nationality" name="nationality">Myanmar</p>
    </div>

    <div class="form-group">
       <?php echo form_label('Gender', 'gender', array( 'class' => 'form-control-label', 'id'=> '')); ?>
       <p class="comfirm_val" id="gender" name="gender">Female</p>
    </div> 

    <div class="form-group">
      <?php echo form_label('Martial Status', 'martial_status', array( 'class' => 'form-control-label', 'id'=> '')); ?>
      <p class="comfirm_val" id="gender" name="gender">Single</p>
    </div> 
     
    <div class="form-group " id="partaner">
        <?php echo form_label('Name of your Partaner', 'partaner_name', array( 'class' => '', 'id'=> '', 'style' => '', 'for' => 'std_name')); ?>
        <p class="comfirm_val" id="partaner_name" name="partaner_name">-</p>
    </div>

    <div class="form-group">
        <?php echo form_label('Email', 'email', array( 'class' => '', 'id'=> '', 'style' => '', 'for' => 'std_email')); ?>
        <p class="comfirm_val" id="std_email" name="email">yoonmem86@gmail.com</p>
    </div>

    <div class="form-group">
        <?php echo form_label('Phone Number', 'phone', array( 'class' => '', 'id'=> '', 'style' => '', 'for' => 'phone')); ?>
        <p class="comfirm_val" id="phone" name="phone">09420229743</p>
    </div>

    <div class="form-group">
        <?php echo form_label('Address','address', array('class' => '')); ?>
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
  <p class="comfirm_val" id="COE_reject" name="COE_reject">No</p>   
  </div>
  
  <br><br><br><br><br><br>
  <h6 class="spec_plan" style="padding-top: 36px;">Employment</h6>
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
  <p class="comfirm_val" id="provide_english" name="provide_english">Yes</p>   
  </div>

</div> 
<!-- rightside -->

<!-- co_leftside -->
<div class="float-left">
    <h6 class="txt" style="padding: 33px 10px 12px;">Is there any your family member who understands at least one  of the languages which we understand?And, who?</h6>
</div>
<div class="col-md-6 float-left">
  <div class="form-group">
        <?php echo form_label('Who?', 'understand_language', array( 'class' => 'wholanguage', 'id'=> '', 'style' => '', 'for' => 'phone')); ?>
        <p class="comfirm_val" id="understand_language" name="understand_language">Father</p>   
  </div>

  <div class="form-group">
        <?php echo form_label('Criminal Record in Japan or Overseas', 'criminal_record', array( 'class' => 'form-control-label', 'id'=> '')); ?>
        <p class="comfirm_val" id="criminal_record" name="criminal_record">No</p>   
  </div>
   
  <div class="criminal form-group float-left">
  <div class="">
        <?php echo form_label('Have you applied for Certificate of Eligibility?', 'criminal_record', array( 'class' => 'form-control-label', 'id'=> '')); ?>
  </div>
  <div class="radio_record">
  <div class="criminal_record01">
      <p class="comfirm_val" id="criminal_record" name="criminal_record">No</p>   
  </div>        
  <div class="">
      <label class="col-rd cri_text"><span>Details</span>
      <p class="comfirm_val" id="criminal_record_details" name="criminal_record_details">-</p>   
      </label> 
  </div>
  </div>  
</div>  
</div>
<div class="col-md-6 float-left">
 <div class="form-group">
    <label class="addmission">Language</label>
    <p class="comfirm_val" id="family_language" name="family_language">English</p>   
  </div>
  <div class="form-group">
    <?php echo form_label('Details', ' criminal_record_details', array( 'class' => 'eli_text', 'id'=> 'criminal_record_details', 'style' => '', 'for' => 'phone')); ?>
    <p class="comfirm_val" id="criminal_record_details" name="criminal_record_details">-</p>   
    <!-- <?php
      echo form_input(array(
        'name' => 'criminal_record_details ',
        'type' => 'text',
        'placeholder' => 'Please Enter!',
        'class' => 'form-control',
        'id' => ' criminal_record_details',
        'autocomplete' => ''));
    ?>
    <span class="text-danger"><?php echo form_error('criminal_record_details '); ?></span> -->
  </div>
  <div class="criminal form-group float-left">
    <div class="">
    <?php echo form_label('Have you applied for Certificate of Eligibility?', 'criminal_record', array( 'class' => 'form-control-label', 'id'=> '')); ?>
    </div>
  
    <div class="radio_record">
        <div class="">
            <label class="col-rd cri_text"><span>When:</span>
            <p class="comfirm_val" id="criminal_record_details" name="criminal_record_details">-</p>
            </label>                
        </div>
        <div class="">
            <label class="col-rd cri_text"><span>Purpose of Entry:</span>
            <p class="comfirm_val" id="criminal_record_details" name="criminal_record_details">-</p>
                <!-- <input type="text" class="details form-control col-md-8" name="criminal_record_details" value="" checked="checked" style="margin: 0px;"> -->
            </label> 
        </div>
    </div>  
</div>
  <style>
  .criminal_record01 {
    width: 34%;
  }
  .criminal_record03{
    position: relative;
    top: 0px;
    left: 25%;
  }
</style> 
  
</div>
<!-- co_leftside -->

<div class="criminal form-group float-left">
  <label>Purpose of studying in Japanese </label>
  <div class="col-md-12 col-sm-12 p-0">
  <p class="comfirm_val" id="purpose_studying_in_japanese" name="purpose_studying_in_japanese">
  "Hobby". Hobby is something people enjoy the most. Different people have different kind of hobbies such as drawing, language and watching movies.
  And people also tend to have more than one hobby. As a human being living in society, I, with no exception, also have my hobbies. 
  Obviously, Japanese language is one of my hobbies. Since my childhood days, there was no day passed by without talking about "Japan" related topics in Myanmar conversations as Myanmar had very close ties with Japan historically. 
  So as a child, Japan had always been in my mind and I became eager to learn more about Japan. When it comes to accumulate knowledge, the best way is from Media such as TV programmes, video games and literature.
  Therefore, I watched a vast majority of Japanese TV programmes which made me fall in love with Japanese language. To study Japanese has always been my dream since then. A curry is best to eat when it is still hot. The same goes for Japanese language. 
  Japanese language is best to study in Japan as it is the origin of the language. Hence, I have decided to go to study in Japan. Moreover, I like Osaka among other cities in Japan. Osaka is a historically prestigious city. 
  The main historical events of Japan took place in Osaka such as the Siege of Osaka(1614) in which Toyotomi clan fell and Tokugawa clan rose to Shogunate. For me to study Japanese in such historically prestigious city is more than "dream". Therefore, I am eager to learn at Language school of Osaka. Moreover, IT is also one of hobbies.
  IT is much alike organizing the festivals. We need to write codes with critical ways to represent what we intend to. Without thorough knowledge of festivity and history, we cannot organize the festivals well. Hence, without proper and thorough knowledge of IT, we cannot write programmes we intended well.
  This is the beauty of IT. Because of that knowledge, I appreciate IT professionals very much for the technologies we use today. Admiring someone makes the person to strive to become like who he admires. Therefore, I want to take the step of IT professionals I admire. As Japan is one of the leading IT countires around the globe and my favourite country, I intend to study IT at senmon gakkou after I have finished Language school.
  </p>
  </div>   
</div>
<div class="col-md-6 float-left">
<h6 class="" style="padding: 33px 0px 12px;">Contact details of your family</h6>
<div class="form-group">
    <?php echo form_label('Email', 'family_mail', array( 'class' => '', 'id'=> '', 'style' => '', 'for' => 'std_email')); ?>
    <p class="comfirm_val" id="family_mail" name="family_mail">testing123@gmail.com</p>
</div>

<div class="form-group">
    <?php echo form_label('Phone Number', 'family_tel', array( 'class' => '', 'id'=> '', 'style' => '', 'for' => 'phone')); ?>
    <p class="comfirm_val" id="family_tel" name="family_tel">09410393440</p>
</div>

<div class="form-group">
    <?php echo form_label('Address','family_address', array('class' => '')); ?>
    <p class="comfirm_val" id="family_address" name="family_address">N0(44),Bokalay zayy,Yangon</p>
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
      <p class="tbl_comfirmVal" name="name" style="text-align: center;">No.3 Basic Education Elementary School</p>
    </td>
    <td>
      <p class="tbl_comfirmVal" name="address" style="text-align: center;">Bahan Township, Yangon</p>
    </td>
    <td>
      <p class="tbl_comfirmVal" name="start_date" style="text-align: center;">01/06/2009</p>
    </td>
    <td>
      <p class="tbl_comfirmVal"  name="end_date" style="text-align: center;">01/02/2014</p>
    </td>
    <td>
      <p class="tbl_comfirmVal" name="year" style="text-align: right;" >5       
        <span class="study_year">years</span> 
      </p>
    </td>
  </tr>
  <tr>
    <td>
      <p class="tbl_comfirmVal" name="name" style="text-align: center;">No.2 Basic Education Hight School</p>
    </td>
    <td>
      <p class="tbl_comfirmVal" name="address" style="text-align: center;">Bahan Township, Yangon</p>
    </td>
    <td>
      <p class="tbl_comfirmVal" name="start_date" style="text-align: center;">01/06/2014</p>
    </td>
    <td>
      <p class="tbl_comfirmVal"  name="end_date" style="text-align: center;">01/02/2018</p>
    </td>
    <td>
      <p class="tbl_comfirmVal" name="year" style="text-align: right;" >5       
        <span class="study_year">years</span> 
      </p>
    </td>
  </tr>
  <tr>
    <td>
      <p class="tbl_comfirmVal" name="name" style="text-align: center;">No.2 Basic Education Hight School</p>
    </td>
    <td>
      <p class="tbl_comfirmVal" name="address" style="text-align: center;">Bahan Township, Yangon</p>
    </td>
    <td>
      <p class="tbl_comfirmVal" name="start_date" style="text-align: center;">01/06/2018</p>
    </td>
    <td>
      <p class="tbl_comfirmVal"  name="end_date" style="text-align: center;">01/03/2020</p>
    </td>
    <td>
      <p class="tbl_comfirmVal" name="year" style="text-align: right;" >3      
        <span class="study_year">years</span> 
      </p>
    </td>
  </tr>
  <tr>
    <td>
      <p class="tbl_comfirmVal" name="name" style="text-align: center;">PKT Education Center (Dip.in IT)</p>
    </td>
    <td>
      <p class="tbl_comfirmVal" name="address" style="text-align: center;">MingalarTaungNyunt Township,Yangon</p>
    </td>
    <td>
      <p class="tbl_comfirmVal" name="start_date" style="text-align: center;">01/04/2020</p>
    </td>
    <td>
      <p class="tbl_comfirmVal"  name="end_date" style="text-align: center;">01/03/2022</p>
    </td>
    <td>
      <p class="tbl_comfirmVal" name="year" style="text-align: right;" >2      
        <span class="study_year">years</span> 
      </p>
    </td>
  </tr>
  <tr>
    <td>
      <p class="tbl_comfirmVal" name="name" style="text-align: center;"></p>
    </td>
    <td>
      <p class="tbl_comfirmVal" name="address" style="text-align: center;"></p>
    </td>
    <td>
      <p class="tbl_comfirmVal" name="start_date" style="text-align: center;"></p>
    </td>
    <td>
      <p class="tbl_comfirmVal"  name="end_date" style="text-align: center;"></p>
    </td>
    <td>
      <p class="tbl_comfirmVal" name="year" style="text-align: right;" >      
        <span class="study_year">years</span> 
      </p>
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
      <p class="tbl_comfirmVal" name="name" style="text-align: center;" >PKT Education Center</p>
    </td>
    <td>
      <p class="tbl_comfirmVal" name="address" style="text-align: center;" >MingalarTaungNyunt Township,Yangon</p>
    </td>
    <td>
      <p class="tbl_comfirmVal" name="start_date" style="text-align: center;" >01/04/2020</p>
    </td>
    <td>
      <p class="tbl_comfirmVal" name="end_date" style="text-align: center;" >01/08/2022</p>
    </td>
    <td>
      <p class="tbl_comfirmVal" name="hour" style="text-align: right;" >160
         <span class="study_year">hours</span> 
      </p>
    </td>
  </tr>
  <tr>
    <td>
      <p class="tbl_comfirmVal" name="name" style="text-align: center;" ></p>
    </td>
    <td>
      <p class="tbl_comfirmVal" name="address" style="text-align: center;" ></p>
    </td>
    <td>
      <p class="tbl_comfirmVal" name="start_date" style="text-align: center;" ></p>
    </td>
    <td>
      <p class="tbl_comfirmVal" name="end_date" style="text-align: center;" ></p>
    </td>
    <td>
      <p class="tbl_comfirmVal" name="hour" style="text-align: right;" >
         <span class="study_year">hours</span> 
      </p>
    </td>
  </tr>
  <tr>
    <td>
      <p class="tbl_comfirmVal" name="name" style="text-align: center;" ></p>
    </td>
    <td>
      <p class="tbl_comfirmVal" name="address" style="text-align: center;" ></p>
    </td>
    <td>
      <p class="tbl_comfirmVal" name="start_date" style="text-align: center;" ></p>
    </td>
    <td>
      <p class="tbl_comfirmVal" name="end_date" style="text-align: center;" ></p>
    </td>
    <td>
      <p class="tbl_comfirmVal" name="hour" style="text-align: right;" >
         <span class="study_year">hours</span> 
      </p>
    </td>
  </tr>
  <tr>
    <td>
      <p class="tbl_comfirmVal" name="name" style="text-align: center;" ></p>
    </td>
    <td>
      <p class="tbl_comfirmVal" name="address" style="text-align: center;" ></p>
    </td>
    <td>
      <p class="tbl_comfirmVal" name="start_date" style="text-align: center;" ></p>
    </td>
    <td>
      <p class="tbl_comfirmVal" name="end_date" style="text-align: center;" ></p>
    </td>
    <td>
      <p class="tbl_comfirmVal" name="hour" style="text-align: right;" >
         <span class="study_year">hours</span> 
      </p>
    </td>
  </tr>
  <tr>
    <td>
      <p class="tbl_comfirmVal" name="name" style="text-align: center;" ></p>
    </td>
    <td>
      <p class="tbl_comfirmVal" name="address" style="text-align: center;" ></p>
    </td>
    <td>
      <p class="tbl_comfirmVal" name="start_date" style="text-align: center;" ></p>
    </td>
    <td>
      <p class="tbl_comfirmVal" name="end_date" style="text-align: center;" ></p>
    </td>
    <td>
      <p class="tbl_comfirmVal" name="hour" style="text-align: right;" >
         <span class="study_year">hours</span> 
      </p>
    </td>
  </tr>
  </tbody>
</table>
</div>

</div>
<!-- Table -->

<!-- Table -->
<div class="col-md-7 float-left">
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
      <p class="tbl_comfirmVal" name="end_date" style="text-align: center;">JLPT</p>
    </td>
    <td>
     <p class="tbl_comfirmVal" name="level" style="text-align: center;" >N4</p>
    </td>
    <td>
     <p class="tbl_comfirmVal" name="exam_year" style="text-align: center;" >2021</p>
    </td>
    <td>
     <p class="tbl_comfirmVal" name="score" style="text-align: center;" >120</p>
    </td>
    <td>
     <p class="tbl_comfirmVal" name="result" style="text-align: center;">B</p>
    </td>
    <td>
     <p class="tbl_comfirmVal" name="date_qualification" style="text-align: center;" >12/02/2022</p>
    </td>
  </tr>
  <tr>
    <td>
      <p class="tbl_comfirmVal" name="end_date" style="text-align: center;">-</p>
    </td>
    <td>
     <p class="tbl_comfirmVal" name="level" style="text-align: center;" ></p>
    </td>
    <td>
     <p class="tbl_comfirmVal" name="exam_year" style="text-align: center;" ></p>
    </td>
    <td>
     <p class="tbl_comfirmVal" name="score" style="text-align: center;" ></p>
    </td>
    <td>
     <p class="tbl_comfirmVal" name="result" style="text-align: center;"></p>
    </td>
    <td>
     <p class="tbl_comfirmVal" name="date_qualification" style="text-align: center;" ></p>
    </td>
  </tr>
  <tr>
    <td>
      <p class="tbl_comfirmVal" name="end_date" style="text-align: center;">-</p>
    </td>
    <td>
     <p class="tbl_comfirmVal" name="level" style="text-align: center;" ></p>
    </td>
    <td>
     <p class="tbl_comfirmVal" name="exam_year" style="text-align: center;" ></p>
    </td>
    <td>
     <p class="tbl_comfirmVal" name="score" style="text-align: center;" ></p>
    </td>
    <td>
     <p class="tbl_comfirmVal" name="result" style="text-align: center;"></p>
    </td>
    <td>
     <p class="tbl_comfirmVal" name="date_qualification" style="text-align: center;" ></p>
    </td>
  </tr>
  </tbody>
</table>
</div>
</div>
<div class="col-md-5 float-left">
<h6 class="" style="padding: 33px 0px 12px;">Name of JP language tests you are going to take</h6>
<table class="table-bordered" name="applicant_id">
  <thead class="tbl_head">
    <tr>
      <th>Name of Japanese language <br>test</th>
      <th>Level</th>
    </tr>
  </thead>
  <tbody>
  <tr>
    <td>
      <p class="tbl_comfirmVal" name="name" style="text-align: center;" >JLPT</p>
    </td>
    <td>
      <p class="tbl_comfirmVal" name="level" style="text-align: center;" >N3</p>
    </td>
  </tr>
  <tr>
    <td>
      <p class="tbl_comfirmVal" name="name" style="text-align: center;" >-</p>
    </td>
    <td>
      <p class="tbl_comfirmVal" name="level" style="text-align: center;" ></p>
    </td>
  </tr>
  <tr>
    <td>
      <p class="tbl_comfirmVal" name="name" style="text-align: center;" >-</p>
    </td>
    <td>
      <p class="tbl_comfirmVal" name="level" style="text-align: center;" ></p>
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
      <p class="tbl_comfirmVal" name="name" style="text-align: center;" >May Myanmarlin Co.Limited</p>  
    </td>
    <td>
      <p class="tbl_comfirmVal" name="address" style="text-align: center;" >MingalarTaungNyunt Township,Yangon</p>  
    </td>
    <td>
      <p class="tbl_comfirmVal" name="year" style="text-align: center;" >1year</p> 
    </td>
    <td>
      <p class="tbl_comfirmVal" name="start_date" style="text-align: center;" >2021</p> 
    </td>
    <td>
      <p class="tbl_comfirmVal" name="end_date" style="text-align: center;" >2022</p> 
    </td>
    <td>
      <p class="tbl_comfirmVal" name="job_description" style="text-align: center;" >-</p> 
    </td>
  </tr>
  <tr>
    <td>
      <p class="tbl_comfirmVal" name="name" style="text-align: center;" >-</p>  
    </td>
    <td>
      <p class="tbl_comfirmVal" name="address" style="text-align: center;" ></p>  
    </td>
    <td>
      <p class="tbl_comfirmVal" name="start_date" style="text-align: center;" ></p> 
    </td>
    <td>
      <p class="tbl_comfirmVal" name="end_date" style="text-align: center;" ></p> 
    </td>
    <td>
      <p class="tbl_comfirmVal" name="year" style="text-align: center;" ></p> 
    </td>
    <td>
      <p class="tbl_comfirmVal" name="job_description" style="text-align: center;" ></p> 
    </td>
  </tr>
  <tr>
    <td>
      <p class="tbl_comfirmVal" name="name" style="text-align: center;" >-</p>  
    </td>
    <td>
      <p class="tbl_comfirmVal" name="address" style="text-align: center;" ></p>  
    </td>
    <td>
      <p class="tbl_comfirmVal" name="start_date" style="text-align: center;" ></p> 
    </td>
    <td>
      <p class="tbl_comfirmVal" name="end_date" style="text-align: center;" ></p> 
    </td>
    <td>
      <p class="tbl_comfirmVal" name="year" style="text-align: center;" ></p> 
    </td>
    <td>
      <p class="tbl_comfirmVal" name="job_description" style="text-align: center;" ></p> 
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
      <p class="tbl_comfirmVal" name="name" style="text-align: center;" >U Aye</p> 
    </td>
    <td>
      <p class="tbl_comfirmVal" name="relationship" style="text-align: center;" >Father</p> 
    </td>
    <td>
      <p class="tbl_comfirmVal" name="work_place" style="text-align: center;" >Yangon</p> 
    </td>
    <td>
      <p class="tbl_comfirmVal" name="birthday" style="text-align: center;" >10/05/1965</p> 
    </td>
    <td>
      <p class="tbl_comfirmVal" name="occupation" style="text-align: center;" >Officer</p> 
    </td>
    <td>
      <p class="tbl_comfirmVal" name="annual_income" style="text-align: center;" >200000</p> 
    </td>
    <td>
      <p class="tbl_comfirmVal" name="address" style="text-align: center;" >No(44),Bokalay Zayy</p> 
    </td>
    <td>
      <p class="tbl_comfirmVal" name="length_sevice" style="text-align: center;" >-</p> 
    </td>
  </tr>
  <tr>
    <td>
      <p class="tbl_comfirmVal" name="name" style="text-align: center;" >Daw Hla</p> 
    </td>
    <td>
      <p class="tbl_comfirmVal" name="relationship" style="text-align: center;" >Mother</p> 
    </td>
    <td>
      <p class="tbl_comfirmVal" name="work_place" style="text-align: center;" >Yangon</p> 
    </td>
    <td>
      <p class="tbl_comfirmVal" name="birthday" style="text-align: center;" >10/05/1966</p> 
    </td>
    <td>
      <p class="tbl_comfirmVal" name="occupation" style="text-align: center;" >Officer</p> 
    </td>
    <td>
      <p class="tbl_comfirmVal" name="annual_income" style="text-align: center;" >200000</p> 
    </td>
    <td>
      <p class="tbl_comfirmVal" name="address" style="text-align: center;" >No(44),Bokalay Zayy</p> 
    </td>
    <td>
      <p class="tbl_comfirmVal" name="length_sevice" style="text-align: center;" >-</p> 
    </td>
  </tr>
  <tr>
    <td>
      <p class="tbl_comfirmVal" name="name" style="text-align: center;" >Ko Kyaw Kyaw</p> 
    </td>
    <td>
      <p class="tbl_comfirmVal" name="relationship" style="text-align: center;" >Brother</p> 
    </td>
    <td>
      <p class="tbl_comfirmVal" name="work_place" style="text-align: center;" >Yangon</p> 
    </td>
    <td>
      <p class="tbl_comfirmVal" name="birthday" style="text-align: center;" >10/05/1999</p> 
    </td>
    <td>
      <p class="tbl_comfirmVal" name="occupation" style="text-align: center;" >Teacher</p> 
    </td>
    <td>
      <p class="tbl_comfirmVal" name="annual_income" style="text-align: center;" >300000</p> 
    </td>
    <td>
      <p class="tbl_comfirmVal" name="address" style="text-align: center;" >No(44),Bokalay Zayy</p> 
    </td>
    <td>
      <p class="tbl_comfirmVal" name="length_sevice" style="text-align: center;" >-</p> 
    </td>
  </tr>
  <tr>
    <td>
      <p class="tbl_comfirmVal" name="name" style="text-align: center;" >-</p> 
    </td>
    <td>
      <p class="tbl_comfirmVal" name="relationship" style="text-align: center;" ></p> 
    </td>
    <td>
      <p class="tbl_comfirmVal" name="work_place" style="text-align: center;" ></p> 
    </td>
    <td>
      <p class="tbl_comfirmVal" name="birthday" style="text-align: center;" ></p> 
    </td>
    <td>
      <p class="tbl_comfirmVal" name="occupation" style="text-align: center;" ></p> 
    </td>
    <td>
      <p class="tbl_comfirmVal" name="annual_income" style="text-align: center;" ></p> 
    </td>
    <td>
      <p class="tbl_comfirmVal" name="address" style="text-align: center;" ></p> 
    </td>
    <td>
      <p class="tbl_comfirmVal" name="length_sevice" style="text-align: center;" ></p> 
    </td>
  </tr>
  <tr>
    <td>
      <p class="tbl_comfirmVal" name="name" style="text-align: center;" >-</p> 
    </td>
    <td>
      <p class="tbl_comfirmVal" name="relationship" style="text-align: center;" ></p> 
    </td>
    <td>
      <p class="tbl_comfirmVal" name="work_place" style="text-align: center;" ></p> 
    </td>
    <td>
      <p class="tbl_comfirmVal" name="birthday" style="text-align: center;"> </p> 
    </td>
    <td>
      <p class="tbl_comfirmVal" name="occupation" style="text-align: center;" ></p> 
    </td>
    <td>
      <p class="tbl_comfirmVal" name="annual_income" style="text-align: center;" ></p> 
    </td>
    <td>
      <p class="tbl_comfirmVal" name="address" style="text-align: center;" ></p> 
    </td>
    <td>
      <p class="tbl_comfirmVal" name="length_sevice" style="text-align: center;" ></p> 
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
    <p class="comfirm_val" id="plan_to_stay_with_them" name="plan_to_stay_with_them">No</p>
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
     <p class="tbl_comfirmVal" name="name" style="text-align: center;" >-</p> 
    </td>
    <td>
     <p class="tbl_comfirmVal" name="age" style="text-align: center;" ></p>
    </td>
    <td>
     <p class="tbl_comfirmVal" name="relationship" style="text-align: center;" ></p>
    </td>
    <td>
     <p class="tbl_comfirmVal" name="residing_applicant" style="text-align: center;" ></p>
    </td>
    <td>
      <p class="tbl_comfirmVal" name="nationality" style="text-align: center;" ></p>
    </td>
    <td>
      <p class="tbl_comfirmVal" name="visa_status" style="text-align: center;" ></p>
    </td>
    <td>
      <p class="tbl_comfirmVal" name="work_place" style="text-align: center;" ></p>
    </td>
  </tr>
  <tr>
    <td>
     <p class="tbl_comfirmVal" name="name" style="text-align: center;" >-</p> 
    </td>
    <td>
     <p class="tbl_comfirmVal" name="age" style="text-align: center;" ></p>
    </td>
    <td>
     <p class="tbl_comfirmVal" name="relationship" style="text-align: center;" ></p>
    </td>
    <td>
     <p class="tbl_comfirmVal" name="residing_applicant" style="text-align: center;" ></p>
    </td>
    <td>
      <p class="tbl_comfirmVal" name="nationality" style="text-align: center;" ></p>
    </td>
    <td>
      <p class="tbl_comfirmVal" name="visa_status" style="text-align: center;" ></p>
    </td>
    <td>
      <p class="tbl_comfirmVal" name="work_place" style="text-align: center;" ></p>
    </td>
  </tr>
  <tr>
    <td>
     <p class="tbl_comfirmVal" name="name" style="text-align: center;" >-</p> 
    </td>
    <td>
     <p class="tbl_comfirmVal" name="age" style="text-align: center;" ></p>
    </td>
    <td>
     <p class="tbl_comfirmVal" name="relationship" style="text-align: center;" ></p>
    </td>
    <td>
     <p class="tbl_comfirmVal" name="residing_applicant" style="text-align: center;" ></p>
    </td>
    <td>
      <p class="tbl_comfirmVal" name="nationality" style="text-align: center;" ></p>
    </td>
    <td>
      <p class="tbl_comfirmVal" name="visa_status" style="text-align: center;" ></p>
    </td>
    <td>
      <p class="tbl_comfirmVal" name="work_place" style="text-align: center;" ></p>
    </td>
  </tr>
  <tr>
    <td>
     <p class="tbl_comfirmVal" name="name" style="text-align: center;" >-</p> 
    </td>
    <td>
     <p class="tbl_comfirmVal" name="age" style="text-align: center;" ></p>
    </td>
    <td>
     <p class="tbl_comfirmVal" name="relationship" style="text-align: center;" ></p>
    </td>
    <td>
     <p class="tbl_comfirmVal" name="residing_applicant" style="text-align: center;" ></p>
    </td>
    <td>
      <p class="tbl_comfirmVal" name="nationality" style="text-align: center;" ></p>
    </td>
    <td>
      <p class="tbl_comfirmVal" name="visa_status" style="text-align: center;" ></p>
    </td>
    <td>
      <p class="tbl_comfirmVal" name="work_place" style="text-align: center;" ></p>
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
     <p class="tbl_comfirmVal" name="entry_date" style="text-align: center;" >-</p>
    </td>
    <td>
     <p class="tbl_comfirmVal" name="arrival_date" style="text-align: center;" ></p>
    </td>
    <td>
     <p class="tbl_comfirmVal" name="depature_data" style="text-align: center;" ></p>
    </td>
    <td>
     <p class="tbl_comfirmVal" name="status" style="text-align: center;" ></p>
    </td>
    <td>
     <p class="tbl_comfirmVal" name="entry_purpose" style="text-align: center;" ></p>
    </td>
  </tr>
  <tr>
    <td>
     <p class="tbl_comfirmVal" name="entry_date" style="text-align: center;" >-</p>
    </td>
    <td>
     <p class="tbl_comfirmVal" name="arrival_date" style="text-align: center;" ></p>
    </td>
    <td>
     <p class="tbl_comfirmVal" name="depature_data" style="text-align: center;" ></p>
    </td>
    <td>
     <p class="tbl_comfirmVal" name="status" style="text-align: center;" ></p>
    </td>
    <td>
     <p class="tbl_comfirmVal" name="entry_purpose" style="text-align: center;" ></p>
    </td>
  </tr>
  <tr>
    <td>
     <p class="tbl_comfirmVal" name="entry_date" style="text-align: center;" >-</p>
    </td>
    <td>
     <p class="tbl_comfirmVal" name="arrival_date" style="text-align: center;" ></p>
    </td>
    <td>
     <p class="tbl_comfirmVal" name="depature_data" style="text-align: center;" ></p>
    </td>
    <td>
     <p class="tbl_comfirmVal" name="status" style="text-align: center;" ></p>
    </td>
    <td>
     <p class="tbl_comfirmVal" name="entry_purpose" style="text-align: center;" ></p>
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
.radio_record{
  width: 100%;
  margin-bottom: 20px;
  display: flex;
}
.criminal{
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
    <p class="comfirm_val" id="name" name="name">-</p>
  </div>
  <div class="form-group">
    <?php echo form_label('Age', 'age', array( 'class' => '', 'id'=> '', 'style' => '', 'for' => 'std_name')); ?>
    <p class="comfirm_val" id="age" name="age">-</p>   
  </div>
  <div class="form-group">
    <?php echo form_label('Relationship', 'relationship', array( 'class' => '', 'id'=> '', 'style' => '', 'for' => 'std_name')); ?>
    <p class="comfirm_val" id="relationship" name="relationship">-</p>   
  </div>
  <div class="form-group">
    <?php echo form_label('Address','address', array('class' => 'col-form-label'));?>
    <p class="comfirm_val" id="address" name="address">-</p>   
  </div>
  <div class="form-group">
  <?php echo form_label('Phone Number', 'tel', array( 'class' => '', 'id'=> '', 'style' => '', 'for' => 'phone')); ?>
    <p class="comfirm_val" id="tel" name="tel">0988890887</p>   
  </div>
  <div class="form-group">
    <?php echo form_label('Email', 'email', array( 'class' => '', 'id'=> '', 'style' => '', 'for' => 'std_email')); ?>
    <p class="comfirm_val" id="email" name="email">test123456@gmail.com</p>   
  </div>
  <div class="form-group">
    <?php echo form_label('Occupation', 'occupation', array( 'class' => '', 'id'=> '', 'style' => '', 'for' => 'phone')); ?>
    <p class="comfirm_val" id="occupation" name="occupation">-</p>   
  </div>
  <div class="form-group">
    <?php echo form_label('Work Place', 'work_place', array( 'class' => '', 'id'=> '', 'style' => '', 'for' => 'phone')); ?>
    <p class="comfirm_val" id="work_place" name="work_place">-</p>      
  </div>
  <div class="form-group">
    <?php echo form_label('Annual Income', 'annual_income', array( 'class' => '', 'id'=> '', 'style' => '', 'for' => 'phone')); ?>
    <p class="comfirm_val" id="annual_income" name="annual_income">-</p> 
  </div>
  <div class="form-group">
    <?php echo form_label('The amount of saving for study abroad ', 'amount_saving_for_study_abroad ', array( 'class' => '', 'id'=> '', 'style' => '', 'for' => 'phone')); ?>
    <p class="comfirm_val" id="amount_saving_for_study_abroad" name="amount_saving_for_study_abroad">-</p> 
  </div>
  <div class="form-group">
    <?php echo form_label('The amount of saving which can be proved ', 'amount_of_saving_which_proved', array( 'class' => '', 'id'=> '', 'style' => '', 'for' => 'phone')); ?>
    <p class="comfirm_val" id="amount_of_saving_which_proved" name="amount_of_saving_which_proved">-</p> 
  </div>
  <div class="form-group">
      <?php echo form_label('Start of Work date', 'start_work_date ', array( 'class' => '', 'id'=> '', 'style' => '', 'for' => 'phone')); ?>
      <p class="comfirm_val" id="start_work_date" name="start_work_date">-</p> 
  </div>
  </div>
</div>
<!-- dropdown FINANICIAL SPONSOR -->
<div class="clearfix"></div>
          <hr class="my-4 dashed clearfix">

          <div class="text-right">
            <button type="submit" class="btn btn-primary text-white btn-sm py-1 px-2">
              <span class="material-icons align-top md-18 mr-1">add_circle</span>Submit
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