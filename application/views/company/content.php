<div class="content-wrapper">
<?php $this->load->view('company/signpost'); ?>
<?php $this->load->view('resource/search-bar'); ?>
<div class="col-lg-12">
    <a href="<?php echo base_url() ?>company/create">
        <button type="button" class="btn btn-default">
          <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> 
            Create
        </button>
    </a>
</div><br/><br/>
<?php $this->load->view('company/list_box'); ?>
<center>
<div class="col-lg-12">
        <div class="col">
            <!--Tampilkan pagination-->
            <?php echo $pagination; ?>
        </div>
</div>
</center>
</div>
