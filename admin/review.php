<?php
    require('admenu.php');
?>
<!DOCTYPE html>
<html>
<head>
  <title>User Reviews</title>
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
  </style>
</head>
<body>
  <div class="panel">
    <h2>User Feedbacks</h2>
    <?php
      require('dbconnect.php');
      $q="select * from rate_review";
      $result=mysqli_query($con,$q);
    
      if (mysqli_num_rows($result)>0)
      {
        echo "<table border=2px class='styled-table' cellpadding=10px>
              <thead>
                <tr>
                  <th>Review ID</th>
                  <th>Username</th>
                  <th>Booking ID</th>
                  <th>Package</th>
                  <th>Rating</th>
                  <th>Review</th>
                </tr>
              </thead>
              <tbody>";
			while($row=mysqli_fetch_assoc($result)){
        $pid=$row['package_id'];
        $uid=$row['uid'];
        $q1="select * from packages where package_id=$pid";
        $res=mysqli_query($con,$q1);
        $row1=mysqli_fetch_assoc($res);

        $q2="select * from users where uid=$uid";
        $res1=mysqli_query($con,$q2);
        $row2=mysqli_fetch_assoc($res1);

			  echo "<tr>
				<td>".$row['review_id']."</td>
				<td>".$row2['username']."</td>
        <td>".$row['book_id']."</td>
        <td>".$row1['title']."</td>
        <td>".$row['rate']."</td>
        <td>".$row['review']."</td>
			</tr>";
      }
      echo "</tbody>
      </table>";

      }
	  ?>
  </div>
</body>
</html>