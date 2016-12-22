<div class="col-12">
<?php

	if($_GET['page'] == 'project'){
		$sql = 'SELECT id, title, image, description1, description2, technology, link, image1, image2, image3, image4, image5, image6
				FROM projects
				WHERE id ='.$_GET['id'].'
				ORDER BY id ASC';
		$query = $db->query($sql);

		while ($projects = $query->fetch_assoc()) {
			echo '			<div class="col-4 center">'."\n";
			echo	'				<img src="'.$projects['image'].'" class="image-preview" />'."\n";
			echo	'				<h1 class="h5">'.$projects['title'].'</h1>'."\n";
			echo 	'				<p>'.$projects['description'].'</p>'."\n";
			echo	'				<h1 class="h5">Created Using</h5>'."\n";
			echo 	'				<p>'.$projects['technology'].'</p>'."\n";
			if($projects['link'] != ''){
			echo 	'				<p><a href="'.$projects['link'].'" target="_blank">view project</a></p>'."\n";				
			}
			echo '			</div>'."\n";

			echo '			<div class="col-8">'."\n";
			echo	'				<img src="'.$projects['image1'].'" class="image-project" />'."\n";
			echo	'				<h1 class="h5 left">The Project</h1>'."\n";
			echo 	'				<p class="left">This project is the deprecated version of my portfolio website. It was both designed and developed myself to showcase the work I had done up to that point. Focusing on adaptive design, this website utilizes breakpoints to change the layout depending on what device is being used to view it.</p>'."\n";
			echo 	'				<p class="left">This project is database driven with a schema I created from scratch using MySQL. PHP templates were created to allow the minimization of repetitive code.</p>'."\n";
			echo	'				<img src="'.$projects['image2'].'" class="image-project"/>'."\n";
			echo '			</div>'."\n";
		}

		$db->close();
	}

?>
</div>