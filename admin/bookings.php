<?php
    require('admenu.php');
?>
<!DOCTYPE html>
<html>
<head>
  <title>User Bookings</title>
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
.change{
        border: none;
        color: white;
        padding: 6px 8px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 10px;
        border-radius: 10px;
       background-color: blue;
      }
      .change:hover {
       background-color: green;}
  </style>
</head>
<body>
  <div class="panel">
    <h2>Bookings</h2>
    <?php
      require('dbconnect.php');
      $q="select * from book_list ";
      $result=mysqli_query($con,$q);
      

      if (mysqli_num_rows($result)>0)
      {
        echo "<table border=2px  class='styled-table' cellpadding=10px>
              <thead>
                <tr>
                  <th>Booking ID</th>
                  <th>Usename</th>
                  <th>Package</th>
                  <th>User Confirmation</th>
                  <th>Date Of Booking</th>
                  <th>Date of Tour</th>
                  <th>Number of Persons</th>
                  <th>Total Amount</th>
                  <th>Approve</th>
                </tr>
              </thead>
              <tbody>";
              while($row=mysqli_fetch_assoc($result)){

                $bid=$row['book_id'];
                $pid=$row['package_id'];
                $q1="select * from packages where package_id=$pid";
                $res=mysqli_query($con,$q1);
                $row1=mysqli_fetch_assoc($res);

                $uid=$row['uid'];
                $q2="select * from users where uid=$uid";
                $res1=mysqli_query($con,$q2);
                $row2=mysqli_fetch_assoc($res1);

                echo "<tr>
                <td>".$row['book_id']."</td>
                <td>".$row2['username']."</td>
                <td>".$row1['title']."</td>";
                if (($row['status_user'])==0) {
                  echo "<td>Confirm</td>";
                }
                else{echo "<td>Cancelled</td>";}
                echo "<td>".$row['date_book']."</td>
                <td>".$row['from_date']."</td>
                <td>".$row['no_ppl']."</td>
                <td>".$row['tcost']."</td>";
                if (($row['status_user'])==0) {
                  echo "<form action='bookaproval.php?bid=$bid' method='post'>";
                  if ((($row['status_admin'])==2)) {
                    echo "<td><select disabled name='aprove'>";
                  }
                  else{echo "<td><select name='aprove'>";}
                  if (($row['status_admin'])==0) {
                    echo "<option>Pending";
                  }
                  elseif (($row['status_admin'])==1) {
                    echo "<option>Confirm";
                  }
                  elseif (($row['status_admin'])==2) {
                    echo "<option>Completed";
                  }
                  else{
                    echo "<option>Cancel";
                  }
                  
                echo "<option value='0'>Pending";
                echo "<option value='1'>Confirm";
                echo "<option value='2'>Completed";
                echo "<option value='3'>Cancel";  
                echo "</select><br><br>";
                if ((($row['status_admin'])==2)) {
                  echo "<button disabled class='change' name='change'>Ok</a></td></form>";
                }
                else{
                echo "<button class='change' name='change'>Ok</a></td></form>";}

                }else{ echo "<td>Disabled</td>";}
            
              }
              echo "</tbody>
              </table>";
      }

      if (isset($_GET['done'])) {
        echo '<script>alert("Approved");</script>';
      }
      ?>
  </div>
</body>
</html>