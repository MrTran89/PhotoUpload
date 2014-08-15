<?php
	include 'includes/db.inc.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="css/photoupload.css">
	<title>Les images</title>
</head>
<body>
	<?php
		$select = $bdd->query('
			SELECT *
			FROM images
		');
		while ($datas = $select->fetch()): 
	?>
		<img src="<?php echo $datas['link'];?>" width="<?php echo $datas['width_img'];?>" height="<?php echo $datas['height_img'];?>">
	<?php endwhile;?>
</body>
</html>