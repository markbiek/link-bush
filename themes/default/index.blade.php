<html>
<head>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Fira+Code&display=swap" rel="stylesheet"> 
	<link rel="stylesheet" href="{{ $config['resource_path'] }}/main.css" media="all" />
</head>
<body>
	<main>
<header>
<img src="{{ $config['resource_path'] }}/{{ $config['logo'] }}" alt="{{ $config['logo_alt'] }}" />
<p>{{ $config['title'] }}</p>
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
<script src="{{ $config['resource_path'] }}/main.js"></script>
</body>
</html>
