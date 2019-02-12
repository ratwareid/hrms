
<div class="col-sm-12 col-md-6">
<div class="row">
  <a href="<?php echo base_url() ?>user/tambah" class="btn btn-primary" role="button" aria-pressed="true">Tambah User</a>
</div>
<div class="row">
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Username</th>
      <th scope="col">Password</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
      $nourut = 1;
      foreach ($rows as $row) {
    ?>
    <tr>
      <th scope="row"><?php echo $nourut++; ?></th>
      <td><?php echo $row->username; ?></td>
      <td><?php echo $row->password; ?></td>
      <td>
        <a href="<?php echo base_url() ?>user/ubah/<?php echo $row->id; ?>">Edit</a>
        <a href="<?php echo base_url() ?>user/delete/<?php echo $row->id; ?>">Delete</a>
      </td>
    </tr>
    <?php
      }
    ?>
  </tbody>
</table>
</div>
</div>
