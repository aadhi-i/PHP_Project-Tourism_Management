<?php
    require('admenu.php');
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
     .button2{
        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        border-radius: 8px;
       background-color: blue;
      }
      .button2:hover {
       box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);}
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
.edit{
        border: none;
        color: white;
        padding: 10px 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 14px;
        border-radius: 8px;
       background-color: blue;
      }
      .edit:hover {
       background-color: green;}
      .delete{
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
    <h2>Packages</h2>
    <a href="package.php"><button class="button2">Create New</button></a><br><br>
		<?php
      require('dbconnect.php');
      $q="select * from packages,mode where packages.mode_id=mode.mode_id";
      $result=mysqli_query($con,$q);
      

      if (mysqli_num_rows($result)>0)
      {
        echo "<table border=2px class='styled-table' cellpadding=10px>
              <thead>
                <tr>
                  <th>Title</th>
                  <th>Cost</th>
                  <th>Description</th>
                  <th>Mode</th>
                  <th>Places</th>
                  <th>Status</th>
                  <th>Date Of Creation</th>
                  <th>Image</th>
                  <th>Number of Days</th>
                  <th>Operations</th>
                </tr>
              </thead>
              <tbody>";
			while($row=mysqli_fetch_assoc($result)){
        $pid=$row['package_id'];
        $place='';
        $q1="select place from places,place_pack where places.place_id=place_pack.place_id and place_pack.package_id=$pid";
        $res=mysqli_query($con,$q1);
        while ($row1=mysqli_fetch_assoc($res)) {
          $place=$place.$row1['place'].",";
        }

			  echo "<tr>
				<td>".$row['title']."</td>
				<td>".$row['cost']."</td>
        <td>".$row['description']."</td>
        <td>".$row['mode']."</td>
        <td>".rtrim($place,',')."</td>";
        if (($row['status'])==1) {
          echo "<td>Active</td>";
        }else{echo "<td>Inactive</td>";}
        echo "<td>".$row['date_created']."</td>
        <td><img src='../Images/".$row['upload']."'width='100px' height='100%'></td>
        <td>".$row['no_days']."</td>
        <form method='post'>
        <td>
        <button formaction='delpack.php?pid=$pid' name='delete' class='delete'>Delete</button></td>
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