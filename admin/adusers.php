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
}.delete{
        border: none;
        color: white;
        padding: 10px 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 14px;
        border-radius: 8px;
       background-color: red;
      }
      .delete:hover {
        color: black;
       background-color: yellow;}
  </style>
</head>
<body>
  <div class="panel">
    <h2>Users</h2>
  <?php
      require('dbconnect.php');
      $q="select * from users";
      $result=mysqli_query($con,$q);
      

      if (mysqli_num_rows($result)>0)
      {
        echo "<table border=2px class='styled-table' cellpadding=10px>
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Username</th>
                  <th>Password[Encrypted]</th>
                  <th>Email</th>
                  <th>Country</th>
                  <th>Pincode</th>
                  <th>Operations</th>
                </tr>
              </thead>
              <tbody>";
			while($row=mysqli_fetch_assoc($result)){

        $password=md5($row['password']);
        $uid=$row['uid'];
			  echo "<tr>
				<td>".$row['uname']."</td>
				<td>".$row['username']."</td>
        <td>".$password."</td>
        <td>".$row['email']."</td>
        <td>INDIA</td>
        <td>".$row['pincode']."</td>
        <form method='post'>
        <td><button formaction='deluser.php?uid=$uid' name='delete' class='delete'>Delete</button></td>
        </form>
			</tr>";
      }
    
      echo "</tbody>
      </table>";
    }
    if (isset($_GET['ok'])) {
      echo "<script>alert('Deleted Successfully');</script>";
  }
    ?>
  </div>
</body>
</html>