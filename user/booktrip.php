
<?php

session_start();

if (!isset($_SESSION['uid'])) {
  $pid=$_GET['pid'];
  header("Location: login.php?pid=$pid");
  exit();
}

require('dbconnect.php');


?>
<!DOCTYPE html>
<html>
<head>
  <title>BookTrip</title>
  <link rel="stylesheet" href="assets/css/style-starter.css">
    <link href="//fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="//fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap" rel="stylesheet">
<style>
  .row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  margin-top: 50px;
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #04AA6D;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (and change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
.button2{
        border: none;
        color: white;
        margin-left:30px;
        margin-top:20px;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        border-radius: 8px;
       background-color: dodgerblue;
      }
      .button2:hover {
  background-color: royalblue;}
</style>
</head>
<body>
  <div>
  <a href="index.php"><button class="button2"><i class=" fa fa-home"></i> Back</button></a>
  <div class="row">
  <div class="col-75">
    <div class="container">

      <?php
        $package_id=$_GET['pid'];
        $q="select * from packages where package_id='$package_id'";
        $rs=mysqli_query($con,$q)or die("Wrong Query");
        $row=mysqli_fetch_assoc($rs);

        $uid=$_SESSION['uid'];
        $q1="select * from users where uid='$uid'";
        $rs1=mysqli_query($con,$q1)or die("Wrong Query");
        $row1=mysqli_fetch_assoc($rs1);
      
      echo "<form action='book_pro.php?pid=$package_id' method='post'>";
      ?>
        <div class="row">
          <div class="col-50">
            <h3>Billing Address</h3>
            <label for="fname"><i class="fa fa-table"></i> Package</label>
            <input type="text" id="fname" name="pid" value="<?php echo $row['title'];?>" disabled>
            <label ><i class="fa fa-user"></i> User</label>
            <input type="text" id="fname" name="uid" value="<?php echo $row1['username'];?>"  disabled>
            <label ><i class="fa fa-calendar-o"></i> Date You want to book</label><br>
            <input type="date" id="fname" name="from_date" required><br><br>
            <label ><i class="fa fa-calendar-o"></i> Number of Days for Tour</label>
            <input type="text" id="city"  value="<?php echo $row['no_days'];?>"  disabled>
            <label ><i class="fa fa-users"></i> Number of Persons</label>
            <input type="number" id="city"  name="no_ppl" max="10" required>

            <div class="row">
              <div class="col-50">
                <label for="state">State</label>
                <input type="text" id="state" name="state" placeholder="NY">
              </div>
              <div class="col-50">
                <label for="zip">Zip</label>
                <input type="text" id="zip" name="zip" placeholder="10001">
              </div>
            </div>
          </div>

          <div class="col-50">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Name on Card</label>
            <input type="text" id="cname"  placeholder="Enter Name" required>
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum"  placeholder="1111-2222-3333-4444">
            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth"  placeholder="September">

            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" placeholder="2018">
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv"  placeholder="352">
              </div>
            </div>
          </div>

        </div>
        <h4>Cost per Person : $ <?php echo $row['cost']?></h4>
        <input type="submit" value="Pay" class="btn">
      </form>
    </div>
  </div>

  </div>
</body>
</html>
