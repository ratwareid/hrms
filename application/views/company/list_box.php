<style>
   .border{
	height: 700px;   
   }
</style>
<div class="border">
	<div class="col-lg-12">
<div class="panel panel-default">
<!-- Default panel contents -->
<div class="panel-heading">Company List</div>
<table class="table table-striped ">
  <thead>
    <tr>
      <th scope="col">No.</th>
      <th scope="col">Company Name</th>
      <th scope="col">Address</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
      $nourut = 1;
      if ($page != null) $nourut = $nourut + $page;
    
      foreach ($data->result() as $row) {
    ?>
    <tr>
      <th scope="row"><?php echo $nourut++; ?></th>
      <td><?php echo $row->company_name; ?></td>
      <td><?php echo $row->company_address; ?></td>
      <td><?php echo $row->company_phone; ?></td>
      <td>
        <a href="<?php echo base_url() ?>company/edit/<?php echo $row->company_id; ?>">Edit</a>
        <a href="<?php echo base_url() ?>company/delete/<?php echo $row->company_id; ?>">Delete</a>
      </td>
    </tr>
    <?php
      }
    ?>
  </tbody>
</table>
</div><!-- /.col-lg-6 -->
</div>

</div>