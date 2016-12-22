<?php

	if($_GET['page'] == 'project'){
		$sql = 'SELECT id, title, image, description1, description2, technology, link, linkGithub, imageHero, image1, image2
				FROM projects
				WHERE id ='.$_GET['id'].'
				ORDER BY id ASC';
		$query = $db->query($sql);

		while ($projects = $query->fetch_assoc()) {
			echo	'		<div class="col-12">';
			echo 	'			<img src="'.$projects['imageHero'].'" class="image-hero" />';
			echo	'		</div>';

			echo	'		<div class="col-12">'."\n";
			echo 	'			<div class="col-3 left full">'."\n";
			echo	'				<h1 class="h5">Created Using</h1>'."\n";
			echo	'				<p>'.$projects['technology'].'</p>'."\n";
			if(isset($projects['link']) || isset($projects['linkGithub'])){
				echo 	'				<p><a href="'.$projects['link'].'" target="_blank">view project live</a>';
				if($projects['linkGithub'] != NULL){
					echo 	'				<br /><a href="'.$projects['linkGithub'].'" target="_blank">view on github</a>'."\n";	
				}
				echo '</p>';
			}
			echo '			</div>'."\n";

			echo '			<div class="col-9 left full">'."\n";
			echo	'				<h1 class="h5">'.$projects['title'].'</h1>'."\n";
			echo 	'				<p>'.$projects['description1'].''."\n";
			echo 	'				<p>'.$projects['description2'].''."\n";
			echo '			</div>'."\n";
			echo '		</div>'."\n";

			echo '		<div class="col-12 grid-2">'."\n";
			echo '			<div class="col-6">'."\n";
			echo	'				<img src="'.$projects['image1'].'" class="image-project"/>'."\n";
			echo '			</div>'."\n";
			echo '			<div class="col-6">'."\n";
			echo	'				<img src="'.$projects['image2'].'" class="image-project"/>'."\n";
			echo '			</div>'."\n";
			echo '		</div>'."\n";

			echo '			</div>'."\n";
			echo '		</div>'."\n";
		}

		$db->close();
	}

?>