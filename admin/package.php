<?php
	require('admenu.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Create Packages</title>
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
    .button2{
        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        border-radius: 8px;
       background-color: dodgerblue;
      }
      .button2:hover {
  background-color: royalblue;
}
      /* Customize the label (the container) */
.container {
  display: block;
  position: relative;
  padding-left: 35px;
  margin-bottom: 12px;
  cursor: pointer;
  font-size: 18px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* Hide the browser's default checkbox */
.container input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
  height: 0;
  width: 0;
}

/* Create a custom checkbox */
.checkmark {
  position: absolute;
  top: 0;
  left: 0;
  height: 25px;
  width: 25px;
  background-color: #eee;
}

/* On mouse-over, add a grey background color */
.container:hover input ~ .checkmark {
  background-color: #ccc;
}

/* When the checkbox is checked, add a blue background */
.container input:checked ~ .checkmark {
  background-color: #2196F3;
}

/* Create the checkmark/indicator (hidden when not checked) */
.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the checkmark when checked */
.container input:checked ~ .checkmark:after {
  display: block;
}

/* Style the checkmark/indicator */
.container .checkmark:after {
  left: 9px;
  top: 5px;
  width: 5px;
  height: 10px;
  border: solid white;
  border-width: 0 3px 3px 0;
  -webkit-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  transform: rotate(45deg);
}

    /* Style the form - display items horizontally */
.form-inline {
  display: flex;
  flex-flow: row wrap;
  align-items: center;
}

/* Add some margins for each label */
.form-inline label {
  margin: 5px 10px 5px 0;
}

/* Style the input fields */
.form-inline input {
  vertical-align: middle;
  margin: 5px 10px 5px 0;
  padding: 10px;
  background-color: #fff;
  border: 1px solid #ddd;
}
.box {
        width: 120px;
        height: 30px;
        border: 1px solid #999;
        font-size: 18px;
        color: #1c87c9;
        background-color: #eee;
        border-radius: 5px;
        box-shadow: 4px 4px #ccc;
      }


/* Add responsiveness - display the form controls vertically instead of horizontally on screens that are less than 800px wide */
@media (max-width: 800px) {
  .form-inline input {
    margin: 10px 0;
  }

  .form-inline {
    flex-direction: column;
    align-items: stretch;
  }
}
  </style>
</head>
<body>
	<div class="panel">
		<h2>Create Packages</h2><br>
		<form  action="pkg_pro.php" method="post">
    <div class="form-inline">
			<label><h4>Add Title</h4></label><input type="text" name="title" placeholder="Title" required autofocus>&nbsp;&nbsp;&nbsp;
			&nbsp;
			<label><h4>Add Cost</h4></label><input type="text" name="cost" placeholder="$0.00" required>&nbsp;&nbsp;&nbsp;
			&nbsp;
			<label><h4>Add Description</h4></label><textarea style="height: 80px;width:500px;" name="desc" placeholder="Description" required></textarea>
    </div><br>
      <h3>Select the Places</h3><br>
      <?php
					require('dbconnect.php');
					$q="select * from places";
					$res=mysqli_query($con,$q);
					while ($row=mysqli_fetch_assoc($res)) {
						echo "<label class='container'>".$row['place']."
            <input name='place[]' type='checkbox' value='".$row['place_id']."'>
            <span class='checkmark'></span>
            </label>";
					}
			?>
      <div class="form-inline">
			<label><h4>Select Mode of Travel</h4></label>
			<select class="box" name="mode">
				<?php
					require('dbconnect.php');
					$q="select * from mode";
					$res=mysqli_query($con,$q);
					while ($row=mysqli_fetch_assoc($res)) {
						echo "<option value='".$row['mode_id']."'>".$row['mode'];
					}
				?>
			</select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<label><h4>Upload an Image</h4></label>
			<input  type="file" name="upload" placeholder="Upload Path" required>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<label><h4>No. of days</h4></label><input type="text" name="no_days" placeholder="1 Day" required>
      </div><br>
			<button class="button2">Submit</button>
		</form>
	</div>
</body>
</html>