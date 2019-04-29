<div class="content-wrapper">
<?php $this->load->view('user/signpost'); ?>
<?php $this->load->view('resource/search-bar'); ?>
<div class="col-lg-12">
    <a href="<?php echo base_url() ?>user/create">
        <button type="button" class="btn btn-default">
          <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> 
            Create
        </button>
    </a>
</div><br/><br/>
<?php $this->load->view('user/list_box'); ?>
<center>
<div class="col-lg-12">
        <div class="col">
            <!--Tampilkan pagination-->
            
        </div>
</div>
</center>
</div>

</div>

