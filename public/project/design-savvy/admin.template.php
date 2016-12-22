<?php

$tfolder = 'images/typography'; 
$tthumbs = 'images/typography/thumbs';
$afolder = 'images/advertisements';
$athumbs = 'images/advertisements/thumbs';
	 
if(!is_dir($tfolder)){    
	mkdir($tfolder, 744);
}elseif(!is_dir($tthumbs)){
	mkdir($tthumbs, 744);
}

if(!is_dir($afolder)){
	mkdir($afolder, 744);
}elseif(!is_dir($athumbs)){
	mkdir($athumbs, 744);
}

if(isset($_POST['advertisementsubmit'])){

	$filename = $afolder.'/'.$_FILES['image']['name'];
	$file = $athumbs.'/'.$_FILES['image']['name'];
		
	$this_ext = explode('.',$filename);
	$ext = $this_ext[(sizeof($this_ext)-1)];
	
	if($ext == 'jpeg' || $ext == 'jpg' || $ext == 'JPG' || $ext == 'JPEG'){
		move_uploaded_file($_FILES['image']['tmp_name'],$filename);
	}else{
		echo '<p class="error">Wrong file type.</p>';
	}
	
	if(file_exists($filename)){
	
	   $sql = 'INSERT advertisements SET
					image = "' . htmlentities($filename) . '",
					thumb = "' . htmlentities($file) . '",
					title = "' . htmlentities($_POST['title']) . '",
					creator = "' . htmlentities($_POST['creator']) . '",
					active = 1';
		$query = $db->query($sql);

		list($width, $height) = getimagesize($filename);
		
		switch($ext){
			case 'gif':
				$im = imagecreatefromgif($filename);
				break;
			case 'jpg':
				$im = imagecreatefromjpeg($filename);
				break;
			case 'jpeg':
				$im = imagecreatefromjpeg($filename);
				break;
			case 'JPG':
				$im = imagecreatefromjpeg($filename);
				break;
			case 'JPEG':
				$im = imagecreatefromjpeg($filename);
				break;
			case 'png':
				$im = imagecreatefrompng($filename);
				break;
		}
    
        // resize image
        
        if($width>640){
            $new_width = 640;
            $percent = $new_width/$width;
            $new_height = floor($height * $percent);
            $new_image = imagecreatetruecolor($new_width, $new_height);
            imagecopyresampled($new_image, $im, 0, 0 ,0 ,0, $new_width, $new_height, $width, $height);
            imagejpeg($new_image, $filename);
            imagedestroy($new_image);
                
            }
            
            function CroppedThumbnail($imgSrc,$thumbnail_width,$thumbnail_height){

            list($width_orig, $height_orig) = getimagesize($imgSrc);   
            $myImage = imagecreatefromjpeg($imgSrc);
            $ratio_orig = $width_orig/$height_orig;
            
            if ($thumbnail_width/$thumbnail_height > $ratio_orig) {
               $new_height = $thumbnail_width/$ratio_orig;
               $new_width = $thumbnail_width;
            } else {
               $new_width = $thumbnail_height*$ratio_orig;
               $new_height = $thumbnail_height;
            }
            
            $x_mid = $new_width/2;  
            $y_mid = $new_height/2; 
            
            $process = imagecreatetruecolor(round($new_width), round($new_height)); 
            
            imagecopyresampled($process, $myImage, 0, 0, 0, 0, $new_width, $new_height, $width_orig, $height_orig);
            $thumb = imagecreatetruecolor($thumbnail_width, $thumbnail_height); 
            imagecopyresampled($thumb, $process, 0, 0, ($x_mid-($thumbnail_width/2)), ($y_mid-($thumbnail_height/2)), $thumbnail_width, $thumbnail_height, $thumbnail_width, $thumbnail_height);

            $thumbsFile = 'images/advertisements/thumbs';
            $file = $thumbsFile.'/'.$_FILES['image']['name'];
            
            imagejpeg($thumb, $file);
            
            imagedestroy($process);
            imagedestroy($myImage);
            return $thumb;
            }    
            
            $newThumb = CroppedThumbnail($filename,208,208);
            
    }
	
}

if(isset($_POST['typographysubmit'])){

	$filename = $tfolder.'/'.$_FILES['image']['name'];
	$file = $tthumbs.'/'.$_FILES['image']['name'];
		
	$this_ext = explode('.',$filename);
	$ext = $this_ext[(sizeof($this_ext)-1)];
	
	if($ext == 'jpeg' || $ext == 'jpg' || $ext == 'JPG' || $ext == 'JPEG'){
		move_uploaded_file($_FILES['image']['tmp_name'],$filename);
	}else{
		echo '<p class="error">Wrong file type.</p>';
	}
	
	if(file_exists($filename)){
	
	   $sql = 'INSERT typography SET
				image = "' . $filename . '",
				thumb = "' . $file . '",
				title = "' . htmlentities($_POST['title']) . '",
				creator = "' . htmlentities($_POST['creator']) . '",
				active = 1';
		$query = $db->query($sql);

		list($width, $height) = getimagesize($filename);
		
		switch($ext){
			case 'gif':
				$im = imagecreatefromgif($filename);
				break;
			case 'jpg':
				$im = imagecreatefromjpeg($filename);
				break;
			case 'jpeg':
				$im = imagecreatefromjpeg($filename);
				break;
			case 'JPG':
				$im = imagecreatefromjpeg($filename);
				break;
			case 'JPEG':
				$im = imagecreatefromjpeg($filename);
				break;
			case 'png':
				$im = imagecreatefrompng($filename);
				break;
		}
		
        if($width>640){
            $new_width = 640;
            $percent = $new_width/$width;
            $new_height = floor($height * $percent);
            $new_image = imagecreatetruecolor($new_width, $new_height);
            imagecopyresampled($new_image, $im, 0, 0 ,0 ,0, $new_width, $new_height, $width, $height);
            imagejpeg($new_image, $filename);
            imagedestroy($new_image);
                
            }
            
            function CroppedThumbnail($imgSrc,$thumbnail_width,$thumbnail_height){

            list($width_orig, $height_orig) = getimagesize($imgSrc);   
            $myImage = imagecreatefromjpeg($imgSrc);
            $ratio_orig = $width_orig/$height_orig;
            
            if ($thumbnail_width/$thumbnail_height > $ratio_orig) {
               $new_height = $thumbnail_width/$ratio_orig;
               $new_width = $thumbnail_width;
            } else {
               $new_width = $thumbnail_height*$ratio_orig;
               $new_height = $thumbnail_height;
            }
            
            $x_mid = $new_width/2;  
            $y_mid = $new_height/2; 
            
            $process = imagecreatetruecolor(round($new_width), round($new_height)); 
            
            imagecopyresampled($process, $myImage, 0, 0, 0, 0, $new_width, $new_height, $width_orig, $height_orig);
            $thumb = imagecreatetruecolor($thumbnail_width, $thumbnail_height); 
            imagecopyresampled($thumb, $process, 0, 0, ($x_mid-($thumbnail_width/2)), ($y_mid-($thumbnail_height/2)), $thumbnail_width, $thumbnail_height, $thumbnail_width, $thumbnail_height);

            $thumbsFile = 'images/typography/thumbs';
            $file = $thumbsFile.'/'.$_FILES['image']['name'];
            
            imagejpeg($thumb, $file);
            
            imagedestroy($process);
            imagedestroy($myImage);
            return $thumb;
            }    
            
            $newThumb = CroppedThumbnail($filename,208,208);	
            
      }	  
        
}

?>

<div id="admin">
	<div id="adminleft">
		<table>
			<form action="?page=admin" enctype="multipart/form-data" method="post">
				<tr>
					<td colspan="2"><h2>Advertisements</h2><br/><br/></td>
				</tr>
				<tr>
					<td><p class="copytext">Upload: </p></td>
					<td><input type="file" name="image" /></td>
				</tr>
				<tr>
					<td><p class="copytext">Title: </p></td>
					<td><input type="text" name="title" /></td>
				</tr>
				<tr>
					<td><p class="copytext">Creator: </p></td>
					<td><input type="text" name="creator" /></td>
				</tr>
				<tr>
					<td><br/><input type="submit" value="Upload" /></td>
				</tr>
				<tr>
					<td><input type="hidden" name="advertisementsubmit" value="true" /></td>
				</tr>
			</form>
		</table>
	</div>

	<div id="adminright">
		<table>
			<form action="?page=admin" enctype="multipart/form-data" method="post">
				<tr>
					<td colspan="2"><h2>Typography</h2><br/><br/></td>
				</tr>
				<tr>
					<td><p class="copytext">Upload: </p></td>
					<td><input type="file" name="image" /></td>
				</tr>
				<tr>
					<td><p class="copytext">Title: </p></td>
					<td><input type="text" name="title" /></td>
				</tr>
				<tr>
					<td><p class="copytext">Creator: </p></td>
					<td><input type="text" name="creator" /></td>
				</tr>
				<tr>
					<td><br/><input type="submit" value="Upload" /></td>
				</tr>
				<tr>
					<td><input type="hidden" name="typographysubmit" value="true" /></td>
				</tr>
			</form>
		</table>
	</div>
</div>