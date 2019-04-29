<style>
   .border{
	height: 700px;   
   }
</style>
<div class="border">
<div class="content-wrapper">
    <?php $this->load->view('user/signpost'); ?>
    <div class="col-lg-12">
    <div class="panel panel-default">
      <div class="panel-heading"><?php echo $heading ?></div>
      <div class="panel-body">
          <form action="<?php echo $action; ?>" method="post">
          <input type="hidden" name="userid" value="<?php echo $userid; ?>" />
          <div class="form-group">
            <label for="LabelName">Username</label>
            <input type="text" class="form-control" name="username" id="username" placeholder="Username" value="<?php echo $username; ?>">
          </div>
          <div class="form-group">
            <label for="LabelPassword">Fullname</label>
            <input type="text" class="form-control" name="fullname" id="fullname" placeholder="Fullname" value="<?php echo $fullname; ?>">
          </div>
          <div class="form-group">
            <label for="Label">Email</label>
            <input type="text" class="form-control" name="email" id="email" placeholder="Email" value="<?php echo $email; ?>">
          </div>
		  <div class="form-group">
            <label for="Label">Password</label>
            <input type="password" class="form-control" name="password" id="password" placeholder="Password" value="<?php echo $password; ?>">
          </div>
            <button type="submit" class="btn btn-default">
                    Submit
            </button>
            <a href="<?php echo base_url() ?>user/">
                <button type="button" class="btn btn-default">
                    Cancel
                </button>
            </a>
        </form>
          <?php if ($error != ''){ ?>
            <br/>
            <div class="alert alert-danger" role="alert">
              <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
              <span class="sr-only">Error:</span>
              <?php echo $error; ?>
            </div>
          <?php }?>
          
        </div>
      </div>
    </div>
</div>
</div>