<?php
    require('admenu.php')
?>
<!DOCTYPE html>
<html>
<head>
  <title>Add Places</title>
  <style>
    .panel {
    background-color: transparent;
    width:100vw;
    padding: 20px;
    }

    h2 {
        color: black;
    font-size: 1.5em;
    }

    input {
    width: 200px;
    border: 1px solid #ccc;
    padding: 10px;
    }

    button {
    background-color: blue;
    color: white;
    padding: 10px;
    border: none;
    cursor: pointer;
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
  </style>
</head>
<body>
  <div class="panel">
    <form action="place_pro.php" method="post">
    <h2>Enter the Available Tourist Spots</h2>
    <input type="text" name="place" autofocus>
    <button type="submit">Enter</button>
    </form>
    <?php
    require('dbconnect.php');

    $q1="select * from places";
    $res1=mysqli_query($con,$q1);

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
    <?php
      if (isset($_GET['ok'])) {
        echo '<script>
                  alert("Added Successfully");
              </script>';
      }
      if (isset($_GET['yes'])) {
        echo '<script>
                alert("Fill up the Fields");
              </script>';
      }
    ?>
  </div>
</body>
</html>