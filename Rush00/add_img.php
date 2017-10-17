<?php
//session_start();

$msg = "";
include 'dbh_siguo.php';
if (isset($_POST['upload'])) 
{
	  $target = "images/" .basename($_FILES['image']['name']);
	  //$db = mysqli_connect("localhost", "root", "thwalafelix1988", "photos");
	  $image = $_FILES['image']['name'];
	  $name = $_POST['text'];
	  $price = "R100";

	  $sql = "INSERT INTO images (image, name, price) VALUES ('$image', '$name', '$price')";
	  $result = $conn->query($sql);
	  //mysqli_query($db, $sql);
	  if (move_uploaded_file($_FILES['image']['tmp_name'], $target))
	  {
		  $smg = "Image uploaded succeefully";
	  }
	  else
	  {
			$smg = "Therewas a prob";
	  }
  }
?>

<html>
<head>
	<title>up_imge</title>
</head>
<body>

<div id = "content" >
	<form method = "post" action = "add_img.php" enctype="multipart/form-data">
		<input type="hidden" name="size" value="100000000">
			<div>
				<input type = "file" name= "image">
			</div>
			<div>
				<textarea name "text" cols="40" rows="4" placeholders="image description"></textarea>
			</div>
			<div>
				<input type = "submit" name = "upload" value= "Upload Image">
			</div>
</div>
</form>
 </body>    
</html>