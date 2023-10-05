<?php
    require('admenu.php');
?>
<!DOCTYPE html>
<html>
<head>
  <title>Add Travel Modes</title>
  <style>
    .panel {
    background-color: transparent;
    width:100vw;
    padding: 20px;
    }
    .styled-table {
    border-collapse: collapse;
    margin: 25px 0;
    font-size: 0.9em;
    font-family: sans-serif;
    min-width: 400px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}
.styled-table thead tr {
    background-color: #5500cb;
    color: #ffffff;
    text-align: left;
}
.styled-table th,
.styled-table td {
    padding: 12px 15px;
}
.styled-table tbody tr {
    border-bottom: 1px solid #dddddd;
}

.styled-table tbody tr:nth-of-type(even) {
    background-color: #f3f3f3;
}

.styled-table tbody tr:last-of-type {
    border-bottom: 2px solid #5500cb;
}
.row {
  display: flex;
  flex-direction: row;
}

.col {
  width: 50%;
}
  </style>
</head>
<body>
  <div class="panel">
  <h2>From Here, You can manage the system</h2><br><br> 
  <h3><a href="../user/index.php">Go to the Main Website</a></h3><br><br>
  <?php
    require('dbconnect.php');

    $q="select * from mode";
    $res=mysqli_query($con,$q);
    

    $q1="select * from places";
    $res1=mysqli_query($con,$q1);

  
  ?>
  <h3>Added Modes</h3> 
  <?php
  if (mysqli_num_rows($res)>0)
      {
        
        echo "<div class='row'>
              <div class='col'>
              <table border=2px class='styled-table' cellpadding=10px>
              <thead>
                <tr>
                  <th>Travel Modes</th>
                </tr>
              </thead>
              <tbody>";
			while($row=mysqli_fetch_assoc($res)){
			  echo "<tr>
				<td>".$row['mode']."</td>
			</tr>";
      }
      echo "</tbody>
      </table></div>";

      }
    ?>
    <div class='col'>
    <h3>Added Places</h3>
  <?php
  if (mysqli_num_rows($res1)>0)
      {
        
        echo "<table border=2px class='styled-table' cellpadding=10px>
              <thead>
                <tr>
                  <th>Places</th>
                </tr>
              </thead>
              <tbody>";
			while($row1=mysqli_fetch_assoc($res1)){
			  echo "<tr>
				<td>".$row1['place']."</td>
			</tr>";
      }
      echo "</tbody>
      </table></div></div>";

      }
    ?>
  </div>
</body>
</html>