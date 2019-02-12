<?php
if ($username != null){
  $readonly = "readonly";
}else{
  $readonly = "";
}
 ?>
<div class="col-sm-12 col-md-6">

  <form action="<?php echo $action; ?>" method="post">
  <center>  <p> <?php echo $pesan; ?> </p></center>
  <div class="form-group">
    <label for="LabelUsername">Username</label>
    <input type="text" class="form-control" name="username" id="username" placeholder="Username" value="<?php echo $username; ?>" <?php echo $readonly; ?>>
  </div>
  <div class="form-group">
    <label for="LabelPassword">Password</label>
    <input type="password" class="form-control" name="password" id="password" placeholder="Password" value="<?php echo $password; ?>">
  </div>
  <input type="hidden" name="id" value="<?php echo $id; ?>" />
  <input type="submit" name="submit" value="<?php echo $tombol; ?>" />
</form>
</div>
