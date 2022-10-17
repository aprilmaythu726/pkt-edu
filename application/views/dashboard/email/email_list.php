<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>            
<?php include(dirname(__FILE__) ."/../templates/header.php"); ?>

  <div class="content-wrapper">
    <div class="row page-tilte align-items-center">
      <div class="col-md-auto">
        <a href="#" class="mt-3 d-md-none float-right toggle-controls"><span class="material-icons">keyboard_arrow_down</span></a>
        <h1 class="weight-300 h3 title">Email Management</h1>
      </div> 
      <div class="col controls-wrapper mt-3 mt-md-0 d-none d-md-block ">
        <div class="controls d-flex justify-content-center justify-content-md-end float-right">
        <a href="<?php echo base_url('adm/portal/email/add'); ?>" class="btn btn-secondary py-1 px-2" ><span class="material-icons align-text-bottom">add_circle</span></a>
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

  <div class="card">
    <div class="card-body">

    <div class="table-responsive">
      <table class="table table-striped bg-white text-nowrap" id="studentDataOnline">
      <thead>
        <tr class="text-center">
          <th width="1">#</th>
          <th width="1">Subject</th>
          <th>Content</th>
          <th width="1">Ref Key</th>
          <th width="1">Created Date</th>
          <th width="1">Updated Date</th>
          <th width="1">State </th>
          <th width="1">Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php 
        $x = 1;
        foreach ($lists as $row) { ?>
        <tr>
          <th class="text-right"><?php echo $x; ?> </th>
          <td class="text-left">
						<a href="<?php echo base_url('adm/portal/email/view/'.$row->id);?>"  data-toggle="tooltip" data-placement="top" title="Email Detail" class="text-dark weight-400">
							<?php echo $row->subject; ?>
						</a>
					</td>
          <td class="text-left"><?php echo $row->content; ?></td>
          <td><?php echo $row->def_key; ?></td>
          <td>
						<?php echo $row->created_at; ?>
					</td>
          <td>
						<?php echo $row->updated_at; ?>
					</td>
          <td class="text-center">   
						<?php if(!empty($row->description)) { ?> 
						<a href="#" class="text-secondary" data-toggle="tooltip" data-placement="top" title="<?php echo $row->description; ?>">
								<span class="material-icons align-middle md-18 text-info">notes</span>
						</a>
						<?php } ?>
						<?php if($row->status == 1) { ?>       
							<span class="badge badge-success text-white">Public</span>
						<?php } else { ?>
							<span class="badge badge-dark text-white">Private</span>
						<?php } ?>
          </td>
          
          <td class="text-center"><a href="#" class="text-muted" id="actionDropdown" data-toggle="dropdown">
            <span class="material-icons md-20 align-middle">more_vert</span></a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="actionDropdown">
              <a class="dropdown-item" href="<?php echo base_url('adm/portal/email/edit/'.$row->id); ?>">Edit</a>
              <a onclick="return confirm('Are you want to delete this data?');" class="dropdown-item" href="<?php echo base_url('adm/portal/email/delete/'.$row->id); ?>">Delete</a>
            </div>
          </td>
        </tr>
        <?php $x++; } ?>
      </tbody>
    </table>
    </div>
    </div>
  </div>

  <?php include(dirname(__FILE__) ."/../templates/footer.php"); ?>
