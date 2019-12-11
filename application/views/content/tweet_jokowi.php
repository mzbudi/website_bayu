  <!-- Page Content -->

  <div class="container-fluid" >
        <div style="margin-top: 10px">
          <button id="btnNew" type="button" class="btn btn-primary">Keseluruhan Tweet</button>
          <button id="btnPie" type="button" class="btn btn-primary">Hasil Prediksi</button>
          <button id="btnHist" type="button" class="btn btn-primary">Kesalahan Prediksi</button>
        </div>
        <div id="newToogle">
          <?php
            include_once('tweet/tweet_jokowi.php');
          ?>
        </div>
        <div id="pieToogle" style="display: none;">
          <?php
            include_once('tweet/predict_jokowi.php');
          ?>
        </div>
        <div id="histToogle" style="display: none;">
          <?php
            include_once('tweet/jokowi_miss.php');
          ?>
        </div>
      </div>
