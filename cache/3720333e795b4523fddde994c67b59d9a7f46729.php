<html>
<head>
<<<<<<< HEAD
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
=======
>>>>>>> 90939e0... Added basic themeing ability including a default theme
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Fira+Code&display=swap" rel="stylesheet"> 
	<link rel="stylesheet" href="<?php echo e($config['resource_path']); ?>/main.css" media="all" />
</head>
<body>
	<main>
<header>
<img src="<?php echo e($config['resource_path']); ?>/<?php echo e($config['logo']); ?>" alt="<?php echo e($config['logo_alt']); ?>" />
<p><?php echo e($config['title']); ?></p>
</header>
<?php
foreach ($links as $item) {
?>
		<article>
			<a href="<?php echo $item['link'];?>"><?php echo $item['title']; ?></a>
		</article>
<?php
} // foreach
?>
	</main>
<script src="<?php echo e($config['resource_path']); ?>/main.js"></script>
</body>
</html>
<?php /**PATH /data/websites/mark.biek.org/htdocs/links/themes/default/index.blade.php ENDPATH**/ ?>