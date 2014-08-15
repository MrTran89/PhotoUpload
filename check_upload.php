<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="css/photoupload.css">
	<title>Upload Image</title>
</head>
<body>
<?php
	include 'includes/db.inc.php';
	if (isset($_FILES['fileUpload']) && $_FILES['fileUpload']['error'] == 0 && isset($_POST['width']) && isset($_POST['height']))
	{
		$width = htmlspecialchars($_POST['width']);
		$height = htmlspecialchars($_POST['height']);
		$fileUpload = $_FILES['fileUpload'];
		if ($fileUpload['size'] <= 1000000)
		{
			$fileName = pathinfo($fileUpload['name']);
			$fileExtension = $fileName['extension'];
			$extension_allowed = array('jpg', 'png', 'jpeg', 'gif');
			if (in_array($fileExtension, $extension_allowed))
			{
				if ($height < 1000 && $width < 1000)
				{
					$linkImage = 'uploads/' . basename($fileUpload['name']);
                	move_uploaded_file($fileUpload['tmp_name'], $linkImage);
                	echo "L'envoi a bien été effectué !";
                	echo '<a href="images.php"> Voir les images</a>';
                	$insert_image = $bdd->prepare('
                		INSERT INTO images 
                		VALUES(null, :link, :width, :height)
                	');
                	$insert_image->execute(array('link' => $linkImage,
                								 'width' => $width,
                								 'height' => $height));
				}
				else
					echo 'Height and width must be less than 1000px';
			}
			else
				echo '<h2 class="error">Error extensions</h2>';
		}
		else
			echo '<h2 class="error">Error size</h2>';
	}
	else
		echo '<h2 class="error">Please choose your size of your image or insert an image</h2>';
?>
</body>
</html>