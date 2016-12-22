<?php

function isselected($page) {
	if($_GET['page'] == $page){
		echo 'is-selected';
	} else {
		echo 'no-underline';
	}
}

?>

    <div class="container">
		<div class="col-12">
			<a href="?page=portfolio">
				<img src="/images/logo.png" class="image-logo-mobile" />
			</a>
			<ul class="navbar">
				<li class="nav-item col-2 left">
					<a href="?page=portfolio" class="nav-item-target <?php isselected('portfolio') ?>" >portfolio</a>
				</li>
				<li class="nav-item col-2">
					<a href="?page=about" class="nav-item-target <?php isselected('about') ?>">about</a>
				</li>
				<li class="nav-item col-4">
		        	<a href="?page=portfolio" class="nav-item-target">
		        		<img src="/images/logo.png" class="image-logo" />
	        		</a>
		        </li>
		        <li class="nav-item col-2">
		        	<a href="/docs/resume.pdf" class="nav-item-target <?php isselected('resume') ?>" target="_blank">resume</a>
	        	</li>
	        	<li class="nav-item col-2 right">
		        	<a href="?page=contact" class="nav-item-target <?php isselected('contact') ?>">contact</a>
	        	</li>
			</ul>
		</div>