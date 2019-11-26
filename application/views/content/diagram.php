    <!-- Page Content -->

      <div class="container-fluid" >
        <div style="margin-top: 10px">
          <button id="btnPie" type="button" class="btn btn-primary">Diagram Pie</button>
          <button id="btnHist" type="button" class="btn btn-primary">Histogram</button>
        </div>
        <div id="pieToogle" style="display: none;">
          <?php
            include_once('diagram/pie.php');
          ?>
        </div>
        <div id="histToogle" style="display: none;">
          <?php
            include_once('diagram/hist.php');
          ?>
        </div>
      </div>
