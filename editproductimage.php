<?php
	include('db.php');
	$id=$_GET['id'];

	$result = mysqli_query($conn,"SELECT * FROM products where ID='$id'");
		while($row = mysqli_fetch_array($result))
			{
				$image=$row['image'];
			}
?>
<img src="reservation/img/products/<?php echo $image ?>" style="">
<form action="editpicexec1.php" method="post" enctype="multipart/form-data">
	<br>
	<input type="hidden" name="prodid" class="form-control" value="<?php echo $id=$_GET['id']; ?>">
	Select Image
	<br>
	<input type="file" name="image"  required class="form-control"><br>
	<input type="submit" value="Upload" class="theme-btn btn-style-one" style="background:#008fd5">
</form>