<?php
	include('../../check.php'); // Include Login Script
	if ((isset($_SESSION['userid']) == '')) 
	{
		header('Location:../../check.php');
	}
?>
<head>
<title>Ratwareid Computers</title>
<link rel="stylesheet" href="../../css/bootstrap.min.css" >
<script>
function includeHTML() {
  var z, i, elmnt, file, xhttp;
  /*loop through a collection of all HTML elements:*/
  z = document.getElementsByTagName("*");
  for (i = 0; i < z.length; i++) {
    elmnt = z[i];
    /*search for elements with a certain atrribute:*/
    file = elmnt.getAttribute("w3-include-html");
    if (file) {
      /*make an HTTP request using the attribute value as the file name:*/
      xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if (this.readyState == 4) {
          if (this.status == 200) {elmnt.innerHTML = this.responseText;}
          if (this.status == 404) {elmnt.innerHTML = "Page not found.";}
          /*remove the attribute, and call this function once more:*/
          elmnt.removeAttribute("w3-include-html");
          includeHTML();
        }
      }      
      xhttp.open("GET", file, true);
      xhttp.send();
      /*exit the function:*/
      return;
    }
  }
};
</script>
</head>

<body>
<div w3-include-html="../nav2.html"></div>

</center>
<div class="row">
<div class="col-sm-12">
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Ratwareid</a></li>
    <li class="breadcrumb-item active" aria-current="page">About Us (You're Here!)</li>
  </ol>
</nav>
</div>
</div>
<div class="col-sm-12">
<h2>Selamat datang di <span class="badge badge-secondary">Ratwareid Computers</span></h2></br>
</div>

</center>
<div class="row">
<div class="col-sm-3 col-md-3" w3-include-html="../sidebarL.html"></div>
<div class="col-sm-12 col-md-6" w3-include-html="../about.html"></div>
<div class="col-sm-3 col-md-3" w3-include-html="../sidebarR.html"></div>
</div>
<script>includeHTML();</script>
<script src="../../js/bootstrap.bundle.min.js"></script>
<script src="../../js/jquery-3.3.1.slim.min.js"></script>
<script src="../../js/popper.min.js"></script>
<script src="../../js/bootstrap.min.js"></script>
</body>