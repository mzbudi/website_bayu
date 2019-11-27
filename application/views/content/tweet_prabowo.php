  <!-- Page Content -->

  <div class="container-fluid" >
        <div style="margin-top: 10px">
          <button id="btnPie" type="button" class="btn btn-primary">Tweet Prabowo</button>
          <button id="btnHist" type="button" class="btn btn-primary">Hasil Prediksi</button>
        </div>
        <div id="pieToogle" style="display: none;">
          <?php
            include_once('tweet/tweet_prabowo.php');
          ?>
        </div>
        <div id="histToogle" style="display: none;">
          <?php
            include_once('tweet/predict_prabowo.php');
          ?>
        </div>
      </div>
