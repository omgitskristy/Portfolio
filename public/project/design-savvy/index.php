<?php

include('config/settings.php');

?>
<html>
<head>
<?php
    
if(isset($_GET['page']) && $_GET['page'] != ''){
    echo '<title>Design Savvy - '.ucfirst($_GET['page']).'</title>';    
}else{
    echo '<title>Design Savvy</title>';    
}
    
?>
<link rel="stylesheet" type="text/css" href="css.css" />
</head>

<body>
<div id="container">
	<?php include('header.php'); ?>
	<div id="content">
			<?php
			
				if(isset($_GET['page']) && $_GET['page'] != ''){
					$pageTemplateName = $_GET['page'] . '.template.php';
					if(file_exists($pageTemplateName)){
						include($pageTemplateName);
					}else{
						echo '<div id="body">Page not found!</div>';
					}
				}else{
					include('index.template.php');
				}
			
			?>
	</div>
	<?php include('footer.php'); ?>
</div>
</body>
</html>