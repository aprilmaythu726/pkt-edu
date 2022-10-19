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
      <a href="<?php echo base_url('adm/portal/student'); ?>" class="btn btn-secondary py-1 px-2" ><span class="material-icons align-text-bottom">reorder</span></a>
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
              echo form_open_multipart('adm/portal/student/add', $attributes);
            ?>
          <div class="col-md-12">

    <div class="col-md-6 float-left">
<!-- Student Photo -->
        <?php
          echo form_label('Student Photo','userfile', array('class' => 'col-form-label'));
        ?>
        <div class="col-md-12 col-sm-12 p-0">
          <?php
            echo form_input(array(
            'name' => 'userfile',
            'type' => 'file',
            'class' => 'form-control',
            'id' => 'clickImg',
            'accept' => 'image/*'
            ));
            
          ?>
          <div class="form-group col-md-12 col-sm-12 p-0" id="showImg1"> </div>
                
        </div>
        <span class="text-danger"><?php echo form_error('userfile'); ?></span>
<!-- Student Photo -->  
    </div>
    <div class="col-md-6 float-left">
<!-- date -->
          <div class="form-group" style="padding-left: 165px;">
                <label class="weight-400" for="release" style="margin-bottom:10px">Date</label> 
                <span class="badge badge-danger">Required</span>
                <input type="datetime-local" step="1" name="release" id="release" class="form-control" placeholder="" value="<?php echo html_escape(set_value('release',isset($result)?date('YYYY-MM-DDTkk:mm',strtotime($result->released_date)):''), ENT_QUOTES) ?>">
                <span class="text-danger"><?php echo form_error( 'release' ); ?></span>
              </div>
<!-- date-->
    </div>
 <div class="school_list">
    <p class="list_label">Japanese Language School  </p>
    <select name="" class="form-group col-md-6 school_select">
        <option value="ECC">ECC</option>
        <option value="JCLI">JCLI</option>
        <option value="OJLS">OJLS</option>
        <option value="Fukuoka">fukuoka</option>
        <option value="Shizuoka">shizuoka</option>
    </select>
     </div>
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
        <?php echo form_label('Name (アルファベット)', 'std_name', array( 'class' => '', 'id'=> '', 'style' => '', 'for' => 'std_name')); ?>
        <span class="badge badge-danger">Required</span>
        <?php
          echo form_input(array(
            'name' => 'std_name',
            'type' => 'text',
            'value' => html_escape(set_value('std_name',isset($result)?$result->name:''), ENT_QUOTES),
            'placeholder' => 'Enter student name!',
            'class' => 'form-control',
            'id' => 'std_name',
            'autocomplete' => 'new-std_name'));
          ?>
        <span class="text-danger"><?php echo form_error('std_name'); ?></span>
      </div>

      <div class="form-group">
        <?php echo form_label(' Name (漢字)', 'std_name', array( 'class' => '', 'id'=> '', 'style' => '', 'for' => 'std_name')); ?>
        <span class="badge badge-danger">Required</span>
        <?php
          echo form_input(array(
            'name' => 'std_name',
            'type' => 'text',
            'value' => html_escape(set_value('std_name',isset($result)?$result->name:''), ENT_QUOTES),
            'placeholder' => 'Enter student name!',
            'class' => 'form-control',
            'id' => 'std_name',
            'autocomplete' => 'new-std_name'));
          ?>
        <span class="text-danger"><?php echo form_error('std_name'); ?></span>
      </div>
      <div class="form-group">
        <?php echo form_label('Date Of Birth', 'std_birthday', array( 'class' => '', 'id'=> '', 'style' => '', 'for' => 'std_birthday')); ?>
        <span class="badge badge-danger">Required</span>
        <?php
          echo form_input(array(
            'name' => 'std_birthday',
            'type' => 'date',
            'value' => html_escape(set_value('std_birthday',isset($result)?$result->birthday:''), ENT_QUOTES),
            'placeholder' => 'Enter Date Of Birth!',
            'class' => 'form-control',
            'id' => 'std_birthday',
            'autocomplete' => 'new-std_birthday'));
          ?>
        <span class="text-danger"><?php echo form_error('std_birthday'); ?></span>
      </div>

      <div class="form-group">
        <?php echo form_label('Place Of Birth', '', array( 'class' => '', 'id'=> '', 'style' => '', 'for' => 'std_name')); ?>
        <?php
          echo form_input(array(
            'name' => '',
            'type' => 'text',
            'value' => html_escape(set_value('std_name',isset($result)?$result->name:''), ENT_QUOTES),
            'placeholder' => 'Enter Place Of Birth!',
            'class' => 'form-control',
            'id' => 'std_name',
            'autocomplete' => 'new-std_name'));
          ?>
        <span class="text-danger"><?php echo form_error('std_name'); ?></span>
      </div>

      <div class="form-group">
        <?php echo form_label('Age', '', array( 'class' => '', 'id'=> '', 'style' => '', 'for' => 'std_name')); ?>
        <span class="badge badge-danger">Required</span>
        <?php
          echo form_input(array(
            'name' => '',
            'type' => 'text',
            'value' => html_escape(set_value('std_name',isset($result)?$result->name:''), ENT_QUOTES),
            'placeholder' => "Enter student's Age!",
            'class' => 'form-control',
            'id' => 'std_name',
            'autocomplete' => 'new-std_name'));
          ?>
        <span class="text-danger"><?php echo form_error('std_name'); ?></span>
      </div>

      <div class="form-group">
        <?php echo form_label('Nationality', '', array( 'class' => '', 'id'=> '', 'style' => '', 'for' => 'std_name')); ?>
        <span class="badge badge-danger">Required</span>
        <?php
          echo form_input(array(
            'name' => '',
            'type' => 'text',
            'value' => html_escape(set_value('std_name',isset($result)?$result->name:''), ENT_QUOTES),
            'placeholder' => "Enter student's Nationality!",
            'class' => 'form-control',
            'id' => 'std_name',
            'autocomplete' => 'new-std_name'));
          ?>
        <span class="text-danger"><?php echo form_error('std_name'); ?></span>
      </div>

      <div class="form-group">
        <?php echo form_label('Gender', 'std_permission', array( 'class' => 'form-control-label', 'id'=> '')); ?>
        <span class="badge badge-danger">Required</span>
          <div class="radio">
              <label class="col-md-4">
                  <input type="radio" name="std_permission" value="1" > Male
              </label>
              <label class="col-md-4">
                  <input type="radio" name="std_permission" value="0" checked="checked"> Female
              </label>
        </div>
      </div>

      <div class="form-group">
        <?php echo form_label('Martial Status', 'std_permission', array( 'class' => 'form-control-label', 'id'=> '')); ?>
        <span class="badge badge-danger">Required</span>
          <div class="radio">
              <label class="col-md-4 status ">
                  <input type="radio" class="marriage_status" name="std_permission" value="1" checked="checked"> Single
              </label>
              <label class="col-md-4 status ">
                  <input type="radio" class="marriage_status" name="std_permission" value="0" > Married
              </label>
        </div>
      </div>

      <div class="form-group " id="partaner" style="display: none;">
        <?php echo form_label('Name of your Partaner', '', array( 'class' => '', 'id'=> '', 'style' => '', 'for' => 'std_name')); ?>
        <span class="badge badge-danger">Required</span>
        <?php
          echo form_input(array(
            'name' => '',
            'type' => 'text',
            'value' => html_escape(set_value('std_name',isset($result)?$result->name:''), ENT_QUOTES),
            'placeholder' => "Enter Name of your Partaner",
            'class' => 'form-control',
            'id' => 'std_name',
            'autocomplete' => 'new-std_name'));
          ?>
        <span class="text-danger"><?php echo form_error('std_name'); ?></span>
      </div>
   
      <div class="form-group">
        <?php echo form_label('Email', 'std_email', array( 'class' => '', 'id'=> '', 'style' => '', 'for' => 'std_email')); ?>
        <span class="badge badge-danger">Required</span>
        <?php
          echo form_input(array(
            'name' => 'std_email',
            'type' => 'text',
            'value' => html_escape(set_value('std_email',isset($result)?$result->email:''), ENT_QUOTES),
            'placeholder' => 'Enter email account!',
            'class' => 'form-control',
            'id' => 'std_email',
            'autocomplete' => 'new-std_email'));
        ?>
        <span class="text-danger"><?php echo form_error('std_email'); ?></span>
       </div>

       <div class="form-group">
        <?php echo form_label('Phone Number', 'phone', array( 'class' => '', 'id'=> '', 'style' => '', 'for' => 'phone')); ?>
        <span class="badge badge-danger">Required</span>
        <?php
          echo form_input(array(
            'name' => 'phone',
            'type' => 'text',
            'value' => html_escape(set_value('phone',isset($result)?$result->phone:''), ENT_QUOTES),
            'placeholder' => 'Enter phone number!',
            'class' => 'form-control',
            'id' => 'phone',
            'autocomplete' => 'new-phone'));
        ?>
        <span class="text-danger"><?php echo form_error('phone'); ?></span>
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
    <p class="addmission">Course of Admission</p>
    <select name="" class="admission_select">
        <option value="一般">一般</option>
        <option value="進学">進学</option>
        <option value="ビジネス">ビジネス</option>
        <option value="SSW">SSW</option>
    </select>
  </div>

  <div class="form-group">
      <?php echo form_label('Length of Study', '', array( 'class' => '', 'id'=> '', 'style' => '', 'for' => 'std_name')); ?>
      <span class="badge badge-danger">Required</span>
      <?php
        echo form_input(array(
          'name' => '',
          'type' => 'text',
          'value' => html_escape(set_value('std_name',isset($result)?$result->name:''), ENT_QUOTES),
          'placeholder' => "Enter Length of Study",
          'class' => 'form-control',
          'id' => 'std_name',
          'autocomplete' => 'new-std_name'));
        ?>
      <span class="text-danger"><?php echo form_error(''); ?></span>
  </div>


  <div class="form-group">
        <?php echo form_label('Have you visited Japan?', 'std_permission', array( 'class' => 'form-control-label', 'id'=> '')); ?>
        <span class="badge badge-danger">Required</span>
          <div class="radio">
              <label class="col-md-4">
                  <input type="radio" name="std_permission" value="1" checked="checked"> Yes
              </label>
              <label class="col-md-4">
                  <input type="radio" name="std_permission" value="0" > No
              </label>
        </div>
  </div>

  <div class="form-group">
        <?php echo form_label('Date of Entry', '', array( 'class' => '', 'id'=> '', 'style' => '', 'for' => 'phone')); ?>
        <?php
          echo form_input(array(
            'name' => '',
            'type' => 'text',
            'value' => html_escape(set_value('phone',isset($result)?$result->phone:''), ENT_QUOTES),
            'placeholder' => 'Enter phone number!',
            'class' => 'form-control',
            'id' => 'phone',
            'autocomplete' => 'new-phone'));
        ?>
        <span class="text-danger"><?php echo form_error('phone'); ?></span>
  </div>
 

  <div class="form-group">
        <?php echo form_label('Date of Departure', '', array( 'class' => '', 'id'=> '', 'style' => '', 'for' => 'phone')); ?>
        <?php
          echo form_input(array(
            'name' => '',
            'type' => 'text',
            'value' => html_escape(set_value('phone',isset($result)?$result->phone:''), ENT_QUOTES),
            'placeholder' => 'Enter phone number!',
            'class' => 'form-control',
            'id' => 'phone',
            'autocomplete' => 'new-phone'));
        ?>
        <span class="text-danger"><?php echo form_error('phone'); ?></span>
  </div>

  <div class="form-group">
        <?php echo form_label('Enter visa type if you visited Japan', '', array( 'class' => '', 'id'=> '', 'style' => '', 'for' => 'phone')); ?>
        <?php
          echo form_input(array(
            'name' => '',
            'type' => 'text',
            'value' => html_escape(set_value('phone',isset($result)?$result->phone:''), ENT_QUOTES),
            'placeholder' => 'Enter phone number!',
            'class' => 'form-control',
            'id' => 'phone',
            'autocomplete' => 'new-phone'));
        ?>
        <span class="text-danger"><?php echo form_error('phone'); ?></span>
  </div>

  <div class="form-group">
        <?php echo form_label('Departure by deportation / departure order or not', 'std_permission', array( 'class' => 'form-control-label', 'id'=> '')); ?>
        <span class="badge badge-danger">Required</span>
          <div class="radio">
              <label class="col-md-4">
                  <input type="radio" name="std_permission" value="1" checked="checked"> Yes
              </label>
              <label class="col-md-4">
                  <input type="radio" name="std_permission" value="0" > No
              </label>
        </div>
  </div>

  <div class="form-group">
        <?php echo form_label('Current Status', '', array( 'class' => '', 'id'=> '', 'style' => '', 'for' => 'phone')); ?>
        <?php
          echo form_input(array(
            'name' => '',
            'type' => 'text',
            'value' => html_escape(set_value('phone',isset($result)?$result->phone:''), ENT_QUOTES),
            'placeholder' => 'Enter phone number!',
            'class' => 'form-control',
            'id' => 'phone',
            'autocomplete' => 'new-phone'));
        ?>
        <span class="text-danger"><?php echo form_error('phone'); ?></span>
  </div>
 

  <div class="form-group">
        <?php echo form_label('(Expected month and year of graduating from the school.) ', '', array( 'class' => '', 'id'=> '', 'style' => '', 'for' => 'phone')); ?>
        <div class="graduating_month_year">
        <?php
          echo form_input(array(
            'name' => '',
            'type' => 'text',
            'value' => html_escape(set_value('phone',isset($result)?$result->phone:''), ENT_QUOTES),
            'placeholder' => 'Please Enter!',
            'class' => 'form-control',
            'id' => 'expected_month',
            'autocomplete' => 'new-phone'));
        ?><p class="expected_txt" style="padding-left: 22px;font-size:17px">月</p>
        <?php
          echo form_input(array(
            'name' => '',
            'type' => 'text',
            'value' => html_escape(set_value('phone',isset($result)?$result->phone:''), ENT_QUOTES),
            'placeholder' => 'Please Enter!',
            'class' => 'form-control',
            'id' => 'expected_year',
            'autocomplete' => 'new-phone'));
        ?>
         <p class="expected_txt" style="padding-left: 22px;font-size:17px">年</p>
          </div>
        <span class="text-danger"><?php echo form_error(''); ?></span>
  </div>

  <div class="form-group">
        <?php echo form_label('Name of School', '', array( 'class' => '', 'id'=> '', 'style' => '', 'for' => 'phone')); ?>
        <?php
          echo form_input(array(
            'name' => '',
            'type' => 'text',
            'value' => html_escape(set_value('phone',isset($result)?$result->phone:''), ENT_QUOTES),
            'placeholder' => 'Please Enter!',
            'class' => 'form-control',
            'id' => 'phone',
            'autocomplete' => 'new-phone'));
        ?>
        <span class="text-danger"><?php echo form_error('phone'); ?></span>
  </div>
  <div class="form-group">
        <?php echo form_label('Department/Major', '', array( 'class' => '', 'id'=> '', 'style' => '', 'for' => 'phone')); ?>
        <?php
          echo form_input(array(
            'name' => '',
            'type' => 'text',
            'value' => html_escape(set_value('phone',isset($result)?$result->phone:''), ENT_QUOTES),
            'placeholder' => 'Please Enter!',
            'class' => 'form-control',
            'id' => 'phone',
            'autocomplete' => 'new-phone'));
        ?>
        <span class="text-danger"><?php echo form_error('phone'); ?></span>
  </div>
  <div class="form-group">
        <?php echo form_label('Grade', '', array( 'class' => '', 'id'=> '', 'style' => '', 'for' => 'phone')); ?>
        <?php
          echo form_input(array(
            'name' => '',
            'type' => 'text',
            'value' => html_escape(set_value('phone',isset($result)?$result->phone:''), ENT_QUOTES),
            'placeholder' => 'Please Enter!',
            'class' => 'form-control',
            'id' => 'phone',
            'autocomplete' => 'new-phone'));
        ?>
        <span class="text-danger"><?php echo form_error('phone'); ?></span>
  </div>
  <h6 class="spec_plan">Specific Plans after Graduating</h6>
  <div class="form-group">
    <p class="addmission">Specific Plans after Graduating</p>
    <select name="" class="admission_select">
        <option value="Return to Home Country">帰国 /Return to Home Country</option>
        <option value="Attend School in Japan">日本での進学 /Attend School in Japan</option>
        <option value="Other">その他 /Other</option>
    </select>
  </div>
  <h6 class="spec_plan">Higher Education in Japan</h6>
  <div class="form-group">
        <?php echo form_label('Type of Schools', '', array( 'class' => '', 'id'=> '', 'style' => '', 'for' => 'phone')); ?>
        <?php
          echo form_input(array(
            'name' => '',
            'type' => 'text',
            'value' => html_escape(set_value('phone',isset($result)?$result->phone:''), ENT_QUOTES),
            'placeholder' => 'Please Enter!',
            'class' => 'form-control',
            'id' => 'phone',
            'autocomplete' => 'new-phone'));
        ?>
        <span class="text-danger"><?php echo form_error('phone'); ?></span>
  </div>
  <div class="form-group">
        <?php echo form_label('Name of School', '', array( 'class' => '', 'id'=> '', 'style' => '', 'for' => 'phone')); ?>
        <?php
          echo form_input(array(
            'name' => '',
            'type' => 'text',
            'value' => html_escape(set_value('phone',isset($result)?$result->phone:''), ENT_QUOTES),
            'placeholder' => 'Please Enter!',
            'class' => 'form-control',
            'id' => 'phone',
            'autocomplete' => 'new-phone'));
        ?>
        <span class="text-danger"><?php echo form_error('phone'); ?></span>
  </div>
  <div class="form-group">
        <?php echo form_label('Major', '', array( 'class' => '', 'id'=> '', 'style' => '', 'for' => 'phone')); ?>
        <?php
          echo form_input(array(
            'name' => '',
            'type' => 'text',
            'value' => html_escape(set_value('phone',isset($result)?$result->phone:''), ENT_QUOTES),
            'placeholder' => 'Please Enter!',
            'class' => 'form-control',
            'id' => 'phone',
            'autocomplete' => 'new-phone'));
        ?>
        <span class="text-danger"><?php echo form_error('phone'); ?></span>
  </div>
</div>
<!-- leftside -->

<!-- rightside -->
<div class="col-md-6 float-left">
  <div class="form-group">
      <?php echo form_label('Occupation', '', array( 'class' => '', 'id'=> '', 'style' => '', 'for' => 'phone')); ?>
      <?php
        echo form_input(array(
          'name' => '',
          'type' => 'text',
          'value' => html_escape(set_value('phone',isset($result)?$result->phone:''), ENT_QUOTES),
          'placeholder' => 'Please Enter!',
          'class' => 'form-control',
          'id' => 'phone',
          'autocomplete' => 'new-phone'));
      ?>
      <span class="text-danger"><?php echo form_error('phone'); ?></span>
  </div>
  <div class="form-group">
      <?php echo form_label('Place of Employment or School', '', array( 'class' => '', 'id'=> '', 'style' => '', 'for' => 'phone')); ?>
      <?php
        echo form_input(array(
          'name' => '',
          'type' => 'text',
          'value' => html_escape(set_value('phone',isset($result)?$result->phone:''), ENT_QUOTES),
          'placeholder' => 'Please Enter!',
          'class' => 'form-control',
          'id' => 'phone',
          'autocomplete' => 'new-phone'));
      ?>
      <span class="text-danger"><?php echo form_error('phone'); ?></span>
  </div>
  <div class="form-group">
      <?php echo form_label('Address of Employment or School', '', array( 'class' => '', 'id'=> '', 'style' => '', 'for' => 'phone')); ?>
      <?php
        echo form_input(array(
          'name' => '',
          'type' => 'text',
          'value' => html_escape(set_value('phone',isset($result)?$result->phone:''), ENT_QUOTES),
          'placeholder' => 'Please Enter!',
          'class' => 'form-control',
          'id' => 'phone',
          'autocomplete' => 'new-phone'));
      ?>
      <span class="text-danger"><?php echo form_error('phone'); ?></span>
  </div>
  <div class="form-group">
      <?php echo form_label('Tel of Employment or School', '', array( 'class' => '', 'id'=> '', 'style' => '', 'for' => 'phone')); ?>
      <?php
        echo form_input(array(
          'name' => '',
          'type' => 'text',
          'value' => html_escape(set_value('phone',isset($result)?$result->phone:''), ENT_QUOTES),
          'placeholder' => 'Please Enter!',
          'class' => 'form-control',
          'id' => 'phone',
          'autocomplete' => 'new-phone'));
      ?>
      <span class="text-danger"><?php echo form_error('phone'); ?></span>
  </div>
  <div class="form-group">
      <?php echo form_label('Entrance Age to Elementary School', '', array( 'class' => '', 'id'=> '', 'style' => '', 'for' => 'phone')); ?>
      <?php
        echo form_input(array(
          'name' => '',
          'type' => 'text',
          'value' => html_escape(set_value('phone',isset($result)?$result->phone:''), ENT_QUOTES),
          'placeholder' => 'Please Enter!',
          'class' => 'form-control',
          'id' => 'phone',
          'autocomplete' => 'new-phone'));
      ?>
      <span class="text-danger"><?php echo form_error('phone'); ?></span>
  </div>
  <div class="form-group">
      <?php echo form_label('Lastest Educational history School name', '', array( 'class' => '', 'id'=> '', 'style' => '', 'for' => 'phone')); ?>
      <?php
        echo form_input(array(
          'name' => '',
          'type' => 'text',
          'value' => html_escape(set_value('phone',isset($result)?$result->phone:''), ENT_QUOTES),
          'placeholder' => 'Please Enter!',
          'class' => 'form-control',
          'id' => 'phone',
          'autocomplete' => 'new-phone'));
      ?>
      <span class="text-danger"><?php echo form_error('phone'); ?></span>
  </div>
  <div class="form-group">
      <?php echo form_label('Duration of JP Language study', '', array( 'class' => '', 'id'=> '', 'style' => '', 'for' => 'phone')); ?>
      <?php
        echo form_input(array(
          'name' => '',
          'type' => 'text',
          'value' => html_escape(set_value('phone',isset($result)?$result->phone:''), ENT_QUOTES),
          'placeholder' => 'Please Enter!',
          'class' => 'form-control',
          'id' => 'phone',
          'autocomplete' => 'new-phone'));
      ?>
      <span class="text-danger"><?php echo form_error('phone'); ?></span>
  </div>
  <div class="form-group" style="margin-bottom: 12px;">
        <?php echo form_label('Passport', 'std_permission', array( 'class' => 'form-control-label', 'id'=> '')); ?>
        <span class="badge badge-danger">Required</span>
          <div class="radio">
              <label class="col-md-4">
                  <input type="radio" name="std_permission" value="1" checked="checked"> Yes
              </label>
              <label class="col-md-4">
                  <input type="radio" name="std_permission" value="0" > No
              </label>
        </div>
  </div>
  <div class="form-group">
      <?php echo form_label('Passport Number', '', array( 'class' => '', 'id'=> '', 'style' => '', 'for' => 'phone')); ?>
      <?php
        echo form_input(array(
          'name' => '',
          'type' => 'text',
          'value' => html_escape(set_value('phone',isset($result)?$result->phone:''), ENT_QUOTES),
          'placeholder' => 'Please Enter!',
          'class' => 'form-control',
          'id' => 'phone',
          'autocomplete' => 'new-phone'));
      ?>
      <span class="text-danger"><?php echo form_error('phone'); ?></span>
  </div>
  <div class="form-group">
      <?php echo form_label('Date of issue', '', array( 'class' => '', 'id'=> '', 'style' => '', 'for' => 'phone')); ?>
      <?php
        echo form_input(array(
          'name' => '',
          'type' => 'text',
          'value' => html_escape(set_value('phone',isset($result)?$result->phone:''), ENT_QUOTES),
          'placeholder' => 'Please Enter!',
          'class' => 'form-control',
          'id' => 'phone',
          'autocomplete' => 'new-phone'));
      ?>
      <span class="text-danger"><?php echo form_error('phone'); ?></span>
  </div> 
  <div class="form-group">
      <?php echo form_label('Date of expiration', '', array( 'class' => '', 'id'=> '', 'style' => '', 'for' => 'phone')); ?>
      <?php
        echo form_input(array(
          'name' => '',
          'type' => 'text',
          'value' => html_escape(set_value('phone',isset($result)?$result->phone:''), ENT_QUOTES),
          'placeholder' => 'Please Enter!',
          'class' => 'form-control',
          'id' => 'phone',
          'autocomplete' => 'new-phone'));
      ?>
      <span class="text-danger"><?php echo form_error('phone'); ?></span>
  </div>  
  <div class="form-group">
        <?php echo form_label('Blank period／Military service', 'std_permission', array( 'class' => 'form-control-label', 'id'=> '')); ?>
        <span class="badge badge-danger">Required</span>
          <div class="radio">
              <label class="col-md-4">
                  <input type="radio" name="std_permission" value="1" checked="checked"> Yes
              </label>
              <label class="col-md-4">
                  <input type="radio" name="std_permission" value="0" > No
              </label>
        </div>
  </div>
  <div class="form-group">
      <?php echo form_label('Place to Apply for VISA', '', array( 'class' => '', 'id'=> '', 'style' => '', 'for' => 'phone')); ?>
      <?php
        echo form_input(array(
          'name' => '',
          'type' => 'text',
          'value' => html_escape(set_value('phone',isset($result)?$result->phone:''), ENT_QUOTES),
          'placeholder' => 'Please Enter!',
          'class' => 'form-control',
          'id' => 'phone',
          'autocomplete' => 'new-phone'));
      ?>
      <span class="text-danger"><?php echo form_error('phone'); ?></span>
  </div>
  <div class="form-group" style="margin-bottom: 17px;">
        <?php echo form_label('Accompanying Persons,if Any', 'std_permission', array( 'class' => 'form-control-label', 'id'=> '')); ?>
        <span class="badge badge-danger">Required</span>
          <div class="radio">
              <label class="col-md-4">
                  <input type="radio" name="std_permission" value="1" checked="checked"> Yes
              </label>
              <label class="col-md-4">
                  <input type="radio" name="std_permission" value="0" > No
              </label>
        </div>
  </div>
  <div class="form-group" style="margin-bottom: 0px;">
        <?php echo form_label('Did you apply before in Japan?', 'std_permission', array( 'class' => 'form-control-label', 'id'=> '')); ?>
        <span class="badge badge-danger">Required</span>
          <div class="radio">
              <label class="col-md-4">
                  <input type="radio" name="std_permission" value="1" checked="checked"> Yes
              </label>
              <label class="col-md-4">
                  <input type="radio" name="std_permission" value="0" > No
              </label>
        </div>
  </div>
  <div class="form-group">
      <?php echo form_label('when?', '', array( 'class' => '', 'id'=> '', 'style' => '', 'for' => 'phone')); ?>
      <?php
        echo form_input(array(
          'name' => '',
          'type' => 'text',
          'value' => html_escape(set_value('phone',isset($result)?$result->phone:''), ENT_QUOTES),
          'placeholder' => 'Please Enter!',
          'class' => 'form-control',
          'id' => 'phone',
          'autocomplete' => 'new-phone'));
      ?>
      <span class="text-danger"><?php echo form_error('phone'); ?></span>
  </div>
  <div class="form-group">
      <?php echo form_label('status?', '', array( 'class' => '', 'id'=> '', 'style' => '', 'for' => 'phone')); ?>
      <?php
        echo form_input(array(
          'name' => '',
          'type' => 'text',
          'value' => html_escape(set_value('phone',isset($result)?$result->phone:''), ENT_QUOTES),
          'placeholder' => 'Please Enter!',
          'class' => 'form-control',
          'id' => 'phone',
          'autocomplete' => 'new-phone'));
      ?>
      <span class="text-danger"><?php echo form_error('phone'); ?></span>
  </div>
  <div class="form-group">
      <?php echo form_label('Name of School?', '', array( 'class' => '', 'id'=> '', 'style' => '', 'for' => 'phone')); ?>
      <?php
        echo form_input(array(
          'name' => '',
          'type' => 'text',
          'value' => html_escape(set_value('phone',isset($result)?$result->phone:''), ENT_QUOTES),
          'placeholder' => 'Please Enter!',
          'class' => 'form-control',
          'id' => 'phone',
          'autocomplete' => 'new-phone'));
      ?>
      <span class="text-danger"><?php echo form_error('phone'); ?></span>
  </div>
  <div class="form-group">
      <?php echo form_label('Which immigration office?', '', array( 'class' => '', 'id'=> '', 'style' => '', 'for' => 'phone')); ?>
      <?php
        echo form_input(array(
          'name' => '',
          'type' => 'text',
          'value' => html_escape(set_value('phone',isset($result)?$result->phone:''), ENT_QUOTES),
          'placeholder' => 'Please Enter!',
          'class' => 'form-control',
          'id' => 'phone',
          'autocomplete' => 'new-phone'));
      ?>
      <span class="text-danger"><?php echo form_error('phone'); ?></span>
  </div>
  <div class="form-group">
    <p class="addmission"  style="margin-bottom:3px;">Result?</p>
    <select name="" class="admission_select">
        <option value="交付">交付</option>
        <option value="不交付">不交付</option>
        <option value="取下げ">取下げ</option>
        <option value="交付後の未入国">交付後の未入国</option>
    </select>
  </div>
  <div class="form-group">
        <?php echo form_label('Have you ever experienced COE rejection?', 'std_permission', array( 'class' => 'form-control-label', 'id'=> '')); ?>
        <span class="badge badge-danger">Required</span>
          <div class="radio">
              <label class="col-md-4">
                  <input type="radio" name="std_permission" value="1" checked="checked"> Yes
              </label>
              <label class="col-md-4">
                  <input type="radio" name="std_permission" value="0" > No
              </label>
        </div>
  </div><br><br><br><br><br><br><br><br><br><br><br>
  <h6 class="spec_plan" style="padding-top:4px;">Employment</h6>
  <div class="form-group">
        <?php echo form_label('Aimed occupational category', '', array( 'class' => 'employment', 'id'=> '', 'style' => '', 'for' => 'phone')); ?>
        <?php
          echo form_input(array(
            'name' => '',
            'type' => 'text',
            'value' => html_escape(set_value('phone',isset($result)?$result->phone:''), ENT_QUOTES),
            'placeholder' => 'Please Enter!',
            'class' => 'form-control',
            'id' => 'phone',
            'autocomplete' => 'new-phone'));
        ?>
        <span class="text-danger"><?php echo form_error('phone'); ?></span>
  </div>
  <h6 class="spec_plan">Higher Education in Japan</h6>
  <div class="form-group">
        <?php echo form_label('When will you return', '', array( 'class' => '', 'id'=> '', 'style' => '', 'for' => 'phone')); ?>
        <?php
          echo form_input(array(
            'name' => '',
            'type' => 'text',
            'value' => html_escape(set_value('phone',isset($result)?$result->phone:''), ENT_QUOTES),
            'placeholder' => 'Please Enter!',
            'class' => 'form-control',
            'id' => 'phone',
            'autocomplete' => 'new-phone'));
        ?>
        <span class="text-danger"><?php echo form_error('phone'); ?></span>
  </div>
  <div class="form-group">
        <?php echo form_label('Is it possible to provide in English? ', 'std_permission', array( 'class' => 'form-control-label', 'id'=> '')); ?>
        <span class="badge badge-danger">Required</span>
          <div class="radio" style="padding-top: 12px;">
              <label class="col-md-4">
                  <input type="radio" name="std_permission" value="1" checked="checked"> Yes
              </label>
              <label class="col-md-4">
                  <input type="radio" name="std_permission" value="0" > No
              </label>
        </div>
  </div>

</div> 
<!-- rightside -->

<!-- co_leftside -->
<div class="float-left">
    <h6 class="txt" style="padding: 33px 0px 12px;">Is there any your family member who understands at least one  of the languages which we understand?And, who?</h6>
</div>
<div class="col-md-6 float-left">
<div class="form-group">
      <?php echo form_label('Who?', '', array( 'class' => '', 'id'=> '', 'style' => '', 'for' => 'phone')); ?>
      <?php
        echo form_input(array(
          'name' => '',
          'type' => 'text',
          'value' => html_escape(set_value('phone',isset($result)?$result->phone:''), ENT_QUOTES),
          'placeholder' => 'Please Enter!',
          'class' => 'form-control',
          'id' => 'phone',
          'autocomplete' => 'new-phone'));
      ?>
      <span class="text-danger"><?php echo form_error('phone'); ?></span>
</div>
 <div class="form-group">
    <p class="addmission">Language</p>
    <select name="" class="admission_select">
        <option value="English">English</option>
        <option value="Chinese">Chinese</option>
        <option value="Korean">Korean</option>
        <option value="Thai">Thai</option>
        <option value="Vietnamese">Vietnamese</option>
        <option value="Japanese">Japanese Relationship</option>
    </select>
  </div>

  
</div>
<!-- co_leftside -->
<div class="criminal form-group float-left">
    <div class="">
      <label>Criminal Record in Japan or Overseas</label>
      <span class="badge badge-danger">Required</span>
    </div>
  
      <div class="radio_record">
          <div class="radio criminal_record  ">
              <label class="col-rd">
                  <input type="radio" name="std_permission" value="1" > Yes
              </label>
              <label class="col-rd">
                  <input type="radio" name="std_permission" value="0" checked="checked"> No
              </label>
          </div>
          <div class="criminal_record01  ">
              <label class="col-rd cri_text"><span style="padding-left:4px ;">Details</span>
                  <input type="text" class="details form-control col-md-12" name="std_permission" value="" checked="checked">
              </label>
              
          </div>
      </div>  
      

      <div class="">
      <label>Have you applied for Certificate of Eligibility?</label>
      <span class="badge badge-danger">Required</span>
    </div>
  
      <div class="radio_record">
          <div class="radio criminal_record  ">
              <label class="muti_txt">
                  <input type="radio" name="std_permission" value="1" > Yes
              </label>
              <label class="muti_txt">
                  <input type="radio" name="std_permission" value="0" checked="checked"> No
              </label>
          </div>
          <div class="criminal_record01  ">
              <label class="cri_text muti_txt">Times:
                  <input type="text" class="appli form-control col-md-9" name="std_permission" value="" checked="checked">
              </label>
             
          </div>
          <div class="criminal_record01  ">
              <label class="cri_text muti_txt">When:
                  <input type="text" class="appli form-control col-md-9" name="std_permission" value="" checked="checked">
              </label>
              
          </div>
          <div class="criminal_record01  ">
              <label class="cri_text muti_txt">Purpose of Entry:
                  <input type="text" class="appli form-control col-md-9" name="std_permission" value="" checked="checked">
              </label>
              
          </div>
          
      </div>  
      <label>Purpose of studying in Japanese </label>
      <div class="col-md-12 col-sm-12 p-0">
          <?php 
            $data = array(
            'name' => 'address',
            'value' => '',
            'rows' => '5',
            'cols' => '',
            'placeholder' => 'Please Enter!',
            'class' => "form-control",
            'value' => set_value('address',isset($result)?$result->address:'')
          );
          echo form_textarea($data); ?>
          <span class="text-danger"><?php echo form_error('address'); ?></span>
      </div>
      
</div>
<div class="col-md-6 float-left">
<h6 class="" style="padding: 33px 0px 12px;">Contact details of your family</h6>
<div class="form-group">
        <?php echo form_label('Email', 'std_email', array( 'class' => '', 'id'=> '', 'style' => '', 'for' => 'std_email')); ?>
        <span class="badge badge-danger">Required</span>
        <?php
          echo form_input(array(
            'name' => 'std_email',
            'type' => 'text',
            'value' => html_escape(set_value('std_email',isset($result)?$result->email:''), ENT_QUOTES),
            'placeholder' => 'Enter email account!',
            'class' => 'form-control',
            'id' => 'std_email',
            'autocomplete' => 'new-std_email'));
        ?>
        <span class="text-danger"><?php echo form_error('std_email'); ?></span>
       </div>

       <div class="form-group">
        <?php echo form_label('Phone Number', 'phone', array( 'class' => '', 'id'=> '', 'style' => '', 'for' => 'phone')); ?>
        <span class="badge badge-danger">Required</span>
        <?php
          echo form_input(array(
            'name' => 'phone',
            'type' => 'text',
            'value' => html_escape(set_value('phone',isset($result)?$result->phone:''), ENT_QUOTES),
            'placeholder' => 'Enter phone number!',
            'class' => 'form-control',
            'id' => 'phone',
            'autocomplete' => 'new-phone'));
        ?>
        <span class="text-danger"><?php echo form_error('phone'); ?></span>
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
</div>
<!-- co_leftside -->

<!-- Table -->
<div class="col-md-12 float-left">
<h6 class="" style="padding: 33px 0px 12px;">Educational History : from Elementary School to the Most Recent School</h6>
<div class="tbl">
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Name of institution</th>
      <th scope="col">Address</th>
      <th scope="col">Starting <br>Year/Month  </th>
      <th scope="col">Finishing <br>Year/Month </th>
      <th scope="col">Term of Study</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>
      <input type="text" class="table-control form-control col-md-12" name="" value="">
      </td>
      <td>
      <input type="text" class="table-control form-control col-md-12" name="" value="">
      </td>
      <td>
      <input type="text" class="table-control form-control col-md-12" name="" value="">
      </td>
      <td>
      <input type="text" class="table-control form-control col-md-12" name="" value="">
      </td>
      <td>
      <input type="text" class=" table-control term form-control col-md-12" name="" value=""><span class="study_year">year</span> 
      </td>
    </tr>
    <tr>
      <td>
      <input type="text" class="table-control form-control col-md-12" name="" value="">
      </td>
      <td>
      <input type="text" class="table-control form-control col-md-12" name="" value="">
      </td>
      <td>
      <input type="text" class="table-control form-control col-md-12" name="" value="">
      </td>
      <td>
      <input type="text" class="table-control form-control col-md-12" name="" value="">
      </td>
      <td>
      <input type="text" class=" table-control term form-control col-md-12" name="" value=""><span class="study_year">year</span> 
      </td>
    </tr>
    <tr>
      <td>
      <input type="text" class="table-control form-control col-md-12" name="" value="">
      </td>
      <td>
      <input type="text" class="table-control form-control col-md-12" name="" value="">
      </td>
      <td>
      <input type="text" class="table-control form-control col-md-12" name="" value="">
      </td>
      <td>
      <input type="text" class="table-control form-control col-md-12" name="" value="">
      </td>
      <td>
      <input type="text" class=" table-control term form-control col-md-12" name="" value=""><span class="study_year">year</span> 
      </td>
    </tr>
    <tr>
      <td>
      <input type="text" class="table-control form-control col-md-12" name="" value="">
      </td>
      <td>
      <input type="text" class="table-control form-control col-md-12" name="" value="">
      </td>
      <td>
      <input type="text" class="table-control form-control col-md-12" name="" value="">
      </td>
      <td>
      <input type="text" class="table-control form-control col-md-12" name="" value="">
      </td>
      <td>
      <input type="text" class="table-control term form-control col-md-12" name="" value=""><span class="study_year">year</span> 
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
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Name of institution</th>
      <th scope="col">Address</th>
      <th scope="col">Starting <br>Year/Month  </th>
      <th scope="col">Finishing <br>Year/Month </th>
      <th scope="col">Total hour of Study</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>
      <input type="text" class="table-control form-control col-md-12" name="" value="">
      </td>
      <td>
      <input type="text" class="table-control form-control col-md-12" name="" value="">
      </td>
      <td>
      <input type="text" class="table-control form-control col-md-12" name="" value="">
      </td>
      <td>
      <input type="text" class="table-control form-control col-md-12" name="" value="">
      </td>
      <td>
      <input type="text" class=" table-control term form-control col-md-12" name="" value=""><span class="study_year">hour</span> 
      </td>
    </tr>
    <tr>
      <td>
      <input type="text" class="table-control form-control col-md-12" name="" value="">
      </td>
      <td>
      <input type="text" class="table-control form-control col-md-12" name="" value="">
      </td>
      <td>
      <input type="text" class="table-control form-control col-md-12" name="" value="">
      </td>
      <td>
      <input type="text" class="table-control form-control col-md-12" name="" value="">
      </td>
      <td>
      <input type="text" class=" table-control term form-control col-md-12" name="" value=""><span class="study_year">hour</span> 
      </td>
    </tr>
    <tr>
      <td>
      <input type="text" class="table-control form-control col-md-12" name="" value="">
      </td>
      <td>
      <input type="text" class="table-control form-control col-md-12" name="" value="">
      </td>
      <td>
      <input type="text" class="table-control form-control col-md-12" name="" value="">
      </td>
      <td>
      <input type="text" class="table-control form-control col-md-12" name="" value="">
      </td>
      <td>
      <input type="text" class=" table-control term form-control col-md-12" name="" value=""><span class="study_year">hour</span> 
      </td>
    </tr>
    <tr>
      <td>
      <input type="text" class="table-control form-control col-md-12" name="" value="">
      </td>
      <td>
      <input type="text" class="table-control form-control col-md-12" name="" value="">
      </td>
      <td>
      <input type="text" class="table-control form-control col-md-12" name="" value="">
      </td>
      <td>
      <input type="text" class="table-control form-control col-md-12" name="" value="">
      </td>
      <td>
      <input type="text" class="table-control term form-control col-md-12" name="" value=""><span class="study_year">hour</span> 
      </td>
    </tr>
  </tbody>
</table>
</div>
      

       
</div>
<!-- Table -->
<!-- Table -->
<div class="col-md-12 float-left">
<h6 class="" style="padding: 33px 0px 12px;">History of Employment (Write in order, ending with the most recent employment.)</h6>
<div class="tbl">
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Placement of Employment</th>
      <th scope="col">Address</th>
      <th scope="col">Years</th>
      <th scope="col">Starting <br>Year/Month  </th>
      <th scope="col">Finishing <br>Year/Month </th>
      <th scope="col">Job Description</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <td>
      <input type="text" class="table-control form-control col-md-12" name="" value="">
      </td>
      <td>
      <input type="text" class="table-control form-control col-md-12" name="" value="">
      </td>
      <td>
      <input type="text" class="table-control form-control col-md-12" name="" value="">
      </td>
      <td>
      <input type="text" class="table-control form-control col-md-12" name="" value="">
      </td>
      <td>
      <input type="text" class="table-control form-control col-md-12" name="" value="">
      </td>
      <td>
      <input type="text" class=" table-control term form-control col-md-12" name="" value="">
      </td>
    </tr>
    <tr>
    <td>
      <input type="text" class="table-control form-control col-md-12" name="" value="">
      </td>
      <td>
      <input type="text" class="table-control form-control col-md-12" name="" value="">
      </td>
      <td>
      <input type="text" class="table-control form-control col-md-12" name="" value="">
      </td>
      <td>
      <input type="text" class="table-control form-control col-md-12" name="" value="">
      </td>
      <td>
      <input type="text" class="table-control form-control col-md-12" name="" value="">
      </td>
      <td>
      <input type="text" class=" table-control term form-control col-md-12" name="" value="">
      </td>
    </tr>
    <tr>
    <td>
      <input type="text" class="table-control form-control col-md-12" name="" value="">
      </td>
      <td>
      <input type="text" class="table-control form-control col-md-12" name="" value="">
      </td>
      <td>
      <input type="text" class="table-control form-control col-md-12" name="" value="">
      </td>
      <td>
      <input type="text" class="table-control form-control col-md-12" name="" value="">
      </td>
      <td>
      <input type="text" class="table-control form-control col-md-12" name="" value="">
      </td>
      <td>
      <input type="text" class=" table-control term form-control col-md-12" name="" value="">
      </td>
    </tr>
    <tr>
    <td>
      <input type="text" class="table-control form-control col-md-12" name="" value="">
      </td>
      <td>
      <input type="text" class="table-control form-control col-md-12" name="" value="">
      </td>
      <td>
      <input type="text" class="table-control form-control col-md-12" name="" value="">
      </td>
      <td>
      <input type="text" class="table-control form-control col-md-12" name="" value="">
      </td>
      <td>
      <input type="text" class="table-control form-control col-md-12" name="" value="">
      </td>
      <td>
      <input type="text" class="table-control term form-control col-md-12" name="" value="">
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
.col-rd{
  margin: 0px 50px 0px 24px;
}
.details {
    padding: 10px 10px 9px 9px;
    border: 1px solid #ced4db;
    border-radius: 3px;
    margin: 0px 54px 12px 16px;
}
.employment{
  padding-bottom: 12px;
}
.radio_record{
  margin-bottom: 20px;
  display: flex;
}
.criminal{
  padding-left: 12px;
  width: 100%;
}
.cri_text{
  display: flex;
}
.muti_txt{
  margin-right: 24px;
}
.appli{
  margin-left: 11px;

}
.table-control{
    border: none;
  }
.tbl{
   width: 100%;
  }
.study_year{
  text-align: end;
}
.term{
  position: relative;
}
.study_year {
    position: relative;
    top: -27px;
    left: 110px;
}
</style>


<!-- dropdown FINANICIAL SPONSOR -->
<div class="content_detail">
  <input class="dropdown" type="checkbox" id="faq-3">
  <p class="drop_ttl"><label for="faq-3" class="drop_label">FINANICIAL SPONSOR</label></p>
  <div class="drop_txt">
    <p>I was inpired by an article on css-tricks. <a href="https://css-tricks.com/the-checkbox-hack/">link to article</a>
    </p>
  </div>
</div>
<!-- dropdown FINANICIAL SPONSOR -->
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
          $(div).html('<embed src="'+e.target.result+'" width="30%" height="30%">');
      };
      reader.readAsDataURL(input.files[0]);
    }
  }

  $("#clickImg").change(function () {
    filePreview(this,"#showImg1");
  });
  </script>

<style>
input#clickImg {
    padding: 4px;
}
.col-form-label {
padding-top: 0px;
padding-bottom: 10px;
}
#showImg1{
margin: 10px 0px;
}
div.content_detail{
position: relative;
margin:0 2em;
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
background:#48a1af;
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
    padding: 8px;
    margin: 7px;
    border: 1px solid #ced4db;
    border-radius: 3px;
}
.school_list{
  width: 55%;
  padding: 12px;
  align-items: center;
  display: flex;
}
.list_label{
  font-size: 16px;
  margin: 0px;
}
</style>