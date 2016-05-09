<?php require'db_conn.php';?>


<div id="demo">  
  <!-- Responsive table starts here -->
  <!-- For correct display on small screens you must add 'data-title' to each 'td' in your table -->
  <div class="table-responsive-vertical shadow-z-1">
  <!-- Table starts here -->
  <table id="table" class="table table-hover table-mc-light-blue">
      <thead>
        <tr>
          <th id = 'packet_no'>Packet No.</th>
          <th id = 'lat'>Latitude</th>
          <th id = 'lng'>Longitude</th>
          <th id = 'gps_alt'>GPS Altitude</th>
          </tr>
      </thead>

      <tbody>

      <?php
        $sql = "SELECT packet_no, lat, lng, gps_alt FROM data ORDER BY packet_no DESC";
        $result = mysqli_query($conn, $sql);
        $count = 0;
        while($rows = mysqli_fetch_array($result, MYSQLI_ASSOC)){
          echo "<tr>";
          echo "<td data-title='packet_no'>".$rows['packet_no']."</td>";
          echo "<td data-title='lat'>".$rows['lat']."</td>";
          echo "<td data-title='lng'>".$rows['lng']."</td>";
          echo "<td data-title='gps_alt'>".$rows['gps_alt']."</td>";
          echo "</tr>";
         }
      ?>
      </tbody>
    </table>
  </div>
</div>