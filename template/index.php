<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        
        <title><?php echo($page_title); ?></title>
        
        <?php echo($page_meta); ?>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="stylesheet" href="<?php echo($template_dir_url); ?>style.css">
        <link rel="stylesheet" href="<?php echo($template_dir_url); ?>subdiv.css">
        <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet' type='text/css'>
        
        <?php get_header(); ?>
    </head>

    <body>
	
	
		<div class="header">
			<div class="row">
				<div class="one-quarter">
					<a href="<?php echo($blog_url);?>"><img src="./cache/<?php echo($blog_twitter);?>.jpg" id="head-img"></a>
				</div>
				<div class="three-quarters" id="head-txt">
					<h1><?php echo($blog_title);?></h1>
					<p><?php echo($meta_description);?></p>
				</div>
			</div>
		</div>
        
        <?php echo($content); ?>
        
        <?php get_footer(); ?>
    </body>
</html>
