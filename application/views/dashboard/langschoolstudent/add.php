<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php include(dirname(__FILE__) ."/../templates/header.php"); ?>

<div class="content-wrapper">
  <div class="row page-tilte align-items-center">
    <div class="col-md-auto">
      <a href="#" class="mt-3 d-md-none float-right toggle-controls"><span class="material-icons">keyboard_arrow_down</span></a>
      <h1 class="weight-300 h3 title">JLS Applicant Registration</h1>
    </div> 
  
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
          <div class="form-group">
                <label class="weight-400" for="release" style="margin-bottom:10px">Date</label> 
                <span class="badge badge-danger">Required</span>
                <input type="datetime-local" step="1" name="release" id="release" class="form-control" placeholder="" value="<?php echo html_escape(set_value('release',isset($result)?date('YYYY-MM-DDTkk:mm',strtotime($result->released_date)):''), ENT_QUOTES) ?>">
                <span class="text-danger"><?php echo form_error( 'release' ); ?></span>
              </div>
<!-- date-->
    </div>
  </div>
  </div>
   <!-- dropdown APPLICANT INFORMATION -->
<div class="c">
  <input class="dropdown" type="checkbox" id="faq-2">
  <p class="drop_ttl"><label for="faq-2" class="drop_label">APPLICANT INFORMATION  </label></p>
  <div class="drop_txt">
    <p>Yes with pure CSS and HTML.</p>
  </div>
</div>
<!-- dropdown APPLICANT INFORMATION -->

<!-- dropdown FINANICIAL SPONSOR -->
<div class="c">
  <input class="dropdown" type="checkbox" id="faq-3">
  <p class="drop_ttl"><label for="faq-3" class="drop_label">  FINANICIAL SPONSOR</label></p>
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
#clickImg {
border: 0px solid;
padding: 5px 0px 0px;
}
.col-form-label {
padding-top: 0px;
padding-bottom: 10px;
}
#showImg1{
margin: 10px 0px;
}
div.c{
position: relative;
margin:0 2em;
}
.dropdown{
position: absolute;
left: 0;
top: 0;
height: 100%;
width: 100%;
opacity:0;
visibility: 0;
}
.drop_ttl{
background:steelblue;
color:white;
padding:1em;
position: relative;
}
.drop_label::before{
content:"";
display: inline-block;
border: 15px solid transparent;
border-left:20px solid white;
}
.drop_label{
cursor: pointer;
position: relative;
display: flex;
align-items: center;
}
div.drop_txt{
max-height:0px;
overflow: hidden;
transition:max-height 0.5s;
background-color: white;
box-shadow:0 0 10px 0 rgba(0, 0, 0, 0.2);
}
div.drop_txt p {
padding:2em;
}
.dropdown:checked ~ .drop_ttl .drop_label::before{
border-left:15px solid transparent;
border-top:20px solid white;
margin-top:12px;
margin-right:10px;
}
.dropdown:checked ~ .drop_ttl ~ div.drop_txt{
max-height:100px;
}
a{
color:steelblue;
}
</style>