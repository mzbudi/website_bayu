<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

 <title>Analisis Sentimen Pilpres 2019</title>

  <!-- Bootstrap core CSS -->
  <link href='<?php echo base_url();?>vendor/bootstrap/css/bootstrap.min.css' rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href='<?php echo base_url();?>css/simple-sidebar.css' rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <style type="text/css">

  	.bg::before {
    position: fixed;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    background: url('images/pilpres.jpg') right center no-repeat fixed;
    background-size: 1200px 800px;
    opacity: .4;
    content: "";
    z-index: -1;
}

  	
  </style>

</head>

<body>
	<div class="bg">
  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading">Analisis Sentimen</div>
      <div class="list-group list-group-flush">
        <a href='<?php echo base_url()."index.php/Sentimen/tampil/home";?>' class="list-group-item list-group-item-action bg-light">Home</a>
        <a href='<?php echo base_url()."index.php/Sentimen/tampil/tweet";?>' class="list-group-item list-group-item-action bg-light">Tweet Jokowi</a>
        <a href="<?php echo base_url()?>" class="list-group-item list-group-item-action bg-light"  >Tweet Prabowo</a>
        <a href="<?php echo base_url()?>" class="list-group-item list-group-item-action bg-light"  >Diagram</a>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>

      <div class="container-fluid" >
        <button id="pie">Test</button>
        <h1 id="d_pie">ini Homepage</h1>
      </div>
    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->
</div>
  <!-- Bootstrap core JavaScript -->
  <!-- <script src='<?php echo base_url();?>vendor/jquery/jquery.min.js'></script>
  <script src='<?php echo base_url();?>vendor/bootstrap/js/bootstrap.bundle.min.js'></script> -->

  <!-- Menu Toggle Script -->
  <script>
    $(document).ready(function(){
      $("button#pie").click(function(){
        $("h1#d_pie").hide();
       });
    })
  </script>

</body>

</html>
