<!-- Page Content -->
    

<div class="container-fluid" >
        <table class="table" style="margin-top:30px;">
  <thead class="thead-dark">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Tweet</th>
      <th scope="col">Sentimen</th>
      <th scope="col">Prediksi</th>
  </thead>
  <tbody>
  <?php
    
    $n = 1;

    foreach ($miss_predict as $key) {
      echo "<tr>";
      echo "<td>".$key['a']."</td>";
      echo "<td>".$key['b']."</td>";
      echo "<td>".$key['c']."</td>";
      echo "<td>".$key['d']."</td>";
      echo "</tr>";
      $n++;

    }


  ?>
  </tbody>
</table>
      </div>