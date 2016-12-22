<?php

$i = 0;

$sql = 'SELECT thumb, title, creator
		FROM typography';
$query = $db->query($sql);

	while ($images = $query->fetch_assoc()) {
	
		$thumb = $images['thumb'];
		$title = $images['title'];
		$creator = $images['creator'];
	
		if(file_exists($thumb)){
			if($i == 0 || $i%3 == 0){
			echo '<div class="row">'."\n";
			}
				echo '<div class="col">'."\n";
					echo '<img src="' .$thumb. '" /><br/>'."\n";
					echo '<h2>' .$title. '</h2><br/>'."\n";
					echo '<h3>' .$creator. '</h3><br/>'."\n";
				echo '</div>'."\n";
				$i++;
			if($i%3 == 0){
			echo '</div>'."\n";
			}
			}
			
    }
	
	if($i%3 != 0){
		echo '</div>'."\n";
	}
		
?>