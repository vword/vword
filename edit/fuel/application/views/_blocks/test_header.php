<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta charset="utf-8">
 	<title>
		<?php 
			if (!empty($is_blog)) :
				echo $CI->fuel->blog->page_title($page_title, ' : ', 'right');
			else:
				echo fuel_var('page_title', '');
			endif;
		?>
	</title>

	<meta name="keywords" content="<?php echo fuel_var('meta_keywords')?>">
	<meta name="description" content="<?php echo fuel_var('meta_description')?>">
</head>
<body>
        <?php
            echo css(fuel_var('css'));
        ?>
       
        <?=jquery()?>
	<div class="page">
		<div class="wrapper">
			<header class="page_header">
				<div class="logo">
					
				</div>
				<h1><?php echo fuel_var('heading')?></h1>
			</header>		