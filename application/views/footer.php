<script src='<?php echo base_url();?>vendor/jquery/jquery.min.js'></script>
  <script src='<?php echo base_url();?>vendor/bootstrap/js/bootstrap.bundle.min.js'></script>

  <!-- Menu Toggle Script -->
  <script>
    $(document).ready(function(){
	    $("#menu-toggle").click(function(e) {
	      	e.preventDefault();
	    	$("#wrapper").toggleClass("toggled");
    	});
    	$("#btnPie").click(function(){
    		$("#pieToogle").show();
    		$("#histToogle").hide();
   		 });
    	$("#btnHist").click(function(){
    		$("#pieToogle").hide();
    		$("#histToogle").show();
   		 });
    })
  </script>

