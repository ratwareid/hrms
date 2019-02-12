<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Ratwareid Computers</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link disabled" href="<?php echo site_url('home'); ?>">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('user'); ?>">Users</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('contact'); ?>">Contact Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('ticket'); ?>">Ticket</a>
      </li>
    </ul>
	   <form class="form-inline my-2 my-lg-0 dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			<b>User Profile<b>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Wallet</a>
          <a class="dropdown-item" href="#">Setting</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="<?php echo site_url('auth/logout'); ?>">Logout</a>
        </div>
      </li>
    </form>
  </div>
</nav>
