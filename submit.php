<?php
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>Add Photo</title>

		<link rel="stylesheet" href="css/style.css"/>
		<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
		<script src="https://code.jquery.com/ui/1.10.4/jquery-ui.min.js"></script>
		<script src='js/gallery.js' type="text/javascript"></script>
	</head>
	
	<body>
	  <div id="photoBooth">
			<p>
				<h2><b>Upload an Image</b></h2>
				<form method="POST" action="files/upload.php" enctype="multipart/form-data">
					<input name="pic" id="pic" type="file" /></br></br>
					Picture Description</br><textarea name="desc" ></textarea></br></br>
					Picture Location: <input type="text"  name="location" title="Enter Location" /></br></br>
					Date of Picture: <input type="date"   name="date" title="Enter Date" /></br></br>
					<input type="submit" value="Upload" name="submit" /></br></br>
				</form>
			</p>
	   </div>
	   <a href="index.php" >Home</a>
</body>

</html>