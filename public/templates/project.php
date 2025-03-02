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
			// echo 	'			<picture>';
			// echo 	'			<img';
			// echo 	'			    sizes="(max-width: 1024px) 100vw, 1024px"';
			// echo 	'			    srcset="';
			// echo 	'			    image-preview_udcmzq_c_scale,w_190.jpg 190w,';
			// echo 	'			    image-preview_udcmzq_c_scale,w_961.jpg 961w,';
			// echo 	'			    image-preview_udcmzq_c_scale,w_1024.jpg 1024w"';
			// echo 	'			    src="image-preview_udcmzq_c_scale,w_1024.jpg"';
			// echo 	'			    alt="">';
			// echo 	'			</picture>';
			echo	'		</div>';

			echo	'		<div class="col-12">'."\n";
			echo 	'			<div class="col-3 left full">'."\n";
			echo	'				<h1 class="h5">Created Using</h1>'."\n";
			echo	'				<p>'.$projects['technology'].'</p>'."\n";
			if(isset($projects['link']) || isset($projects['linkGithub'])){
				if($projects['id'] != 6){
					echo 	'				<p><a href="'.$projects['link'].'" target="_blank">view project live</a>';
				}else{
					echo 	'				<p><a href="'.$projects['link'].'">view project live</a>';
				}
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