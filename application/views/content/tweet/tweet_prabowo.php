<!-- Page Content -->
    

<div class="container-fluid" >
        <table class="table" style="margin-top:30px;">
  <thead class="thead-dark">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Tweet</th>
      <th scope="col">Sentimen</th>
  </thead>
  <tbody>
  <?php
    
    $n = 1;

    foreach ($data_tweet as $key) {
      echo "<tr>";
      echo "<td>".$n."</td>";
      echo "<td>".$key['b']."</td>";
      echo "<td>".$key['c']."</td>";
      echo "</tr>";
      $n++;

    }


  ?>
  </tbody>
</table>
      </div>