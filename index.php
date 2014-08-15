<?php
	include 'includes/db.inc.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Upload Image</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/photoupload.css">
</head>
<body>
	<h1 class="title">UPLOAD YOURS PHOTOS</h1>
	<form action="check_upload.php" method="post" enctype="multipart/form-data">

		<label class="width">
			<span>La largeur de l'image :</span>
			<input type="text" name="width" placeholder="Largeur de l'image">
			<span class="hidden_message">Entrez la largeur de l'image</span>
		</label> <br />
		<label class="hight">
			<span>La hauteur de l'image:</span>
			<input type="text" name="height" placeholder="Hauteur de l'image">
			<span class="hidden_message">Entrez la hauteur de l'image</span>
		</label><br />
		<input class="file" type="file" name="fileUpload" /><br />
		<input class="send" type="submit" value="UpLoad">
	</form>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>