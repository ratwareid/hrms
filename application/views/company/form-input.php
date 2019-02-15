<div class="content-wrapper">
    <?php $this->load->view('company/signpost'); ?>
    <div class="col-lg-12">
    <div class="panel panel-default">
      <div class="panel-heading"><?php echo $heading ?></div>
      <div class="panel-body">
          <form action="<?php echo $action; ?>" method="post">
          <input type="hideen" name="company_id" value="<?php echo $company_id; ?>" />
          <div class="form-group">
            <label for="LabelName">Company Name</label>
            <input type="text" class="form-control" name="company_name" id="company_name" placeholder="Company Name" value="<?php echo $company_name; ?>">
          </div>
          <div class="form-group">
            <label for="LabelPassword">Company Address</label>
            <input type="text" class="form-control" name="company_address" id="company_address" placeholder="Address" value="<?php echo $company_address; ?>">
          </div>
          <div class="form-group">
            <label for="Label">Number Contact</label>
            <input type="number" class="form-control" name="company_phone" id="company_phone" placeholder="Phone Number" value="<?php echo $company_phone; ?>">
          </div>
            <button type="submit" class="btn btn-default">
                    Submit
            </button>
            <a href="<?php echo base_url() ?>company/">
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