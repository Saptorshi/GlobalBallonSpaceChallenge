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
          <th id = 'gps_speed'>GPS Speed</th>
          <th id = 'vert_vel'>Vertical Velocity</th>
          <th id = 'acc_x'>Acceleration X</th>
          <th id = 'acc_y'>Acceleration Y</th>
          <th id = 'acc_z'>Acceleration Z</th>
          </tr>
      </thead>

      <tbody>

      <?php
        $sql = "SELECT packet_no, gps_speed, vert_vel, acc_x, acc_y, acc_z FROM data ORDER BY packet_no DESC";
        $result = mysqli_query($conn, $sql);
        $count = 0;
        while($rows = mysqli_fetch_array($result, MYSQLI_ASSOC)){
          echo "<tr>";
          echo "<td data-title='packet_no'>".$rows['packet_no']."</td>";
          echo "<td data-title='gps_speed'>".$rows['gps_speed']."</td>";
          echo "<td data-title='vert_vel'>".$rows['vert_vel']."</td>";
          echo "<td data-title='acc_x'>".$rows['acc_x']."</td>";
          echo "<td data-title='acc_y'>".$rows['acc_y']."</td>";
          echo "<td data-title='acc_z'>".$rows['acc_z']."</td>";
          echo "</tr>";
         }
      ?>
      </tbody>
    </table>
  </div>
</div>