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
          <th id = 'int_temp'>Internal Temp</th>
          <th id = 'ext_temp'>External Temp </th>
          <th id = 'pressure'>Pressure </th>
          <th id = 'humidity'>Humidity </th>
          <th id = 'light_intensity'>Light Intensity </th>
        </tr>
      </thead>

      <tbody>

      <?php
        $sql = "SELECT packet_no, int_temp, ext_temp, pressure, baro_alt, humidity, light_intensity FROM data ORDER BY packet_no DESC";
        $result = mysqli_query($conn, $sql);
        $count = 0;
        while($rows = mysqli_fetch_array($result, MYSQLI_ASSOC)){
          echo "<tr>";
          echo "<td data-title='packet_no'>".$rows['packet_no']."</td>";
          echo "<td data-title='int_temp'>".$rows['int_temp']."</td>";
          echo "<td data-title='ext_temp'>".$rows['ext_temp']."</td>";
          echo "<td data-title='pressure'>".$rows['pressure']."</td>";
          echo "<td data-title='humidity'>".$rows['humidity']."</td>";
          echo "<td data-title='light_intensity'>".$rows['light_intensity']."</td>";
          echo "</tr>";
        }
      ?>
      </tbody>
    </table>
  </div>
</div>