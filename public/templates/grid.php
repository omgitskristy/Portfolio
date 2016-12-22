<div class="col-12 grid grid-3">
<?php

	if(!isset($_GET['page'])){
		$page = 'portfolio';
	} else {
		$page = $_GET['page'];
	}

	if($page == 'portfolio') {
		$sql = 'SELECT id, title, image, descriptionPreview, technology, link, image1, image2
			FROM projects
			ORDER BY id ASC';
	} elseif($page == 'about'){
		$sql = 'SELECT id, title, image, descriptionPreview
			FROM about
			ORDER BY id ASC';
	}

	$query = $db->query($sql);

	while ($projects = $query->fetch_assoc()) {
		echo '			<div class="col-4">'."\n";
		echo	'				<img src="'.$projects['image'].'" class="image-preview" />'."\n";
		echo	'				<h1 class="h5">'.$projects['title'].'</h1>'."\n";
		echo 	'				<p>'.$projects['descriptionPreview'].'</p>'."\n";
		if($page == 'portfolio'){
			echo 	'				<p><a href="?page=project&id='.$projects['id'].'">more details</a></p>'."\n";
		}
		echo '			</div>'."\n";
	}

	$db->close();

?>
</div>