<html lang="en-US">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Fira+Code&display=swap" rel="stylesheet"> 
	<link rel="stylesheet" href="{{ $config['resource_path'] }}/main.css" media="all" />

	@if (isset($config['meta']))
		<!-- Primary Meta Tags -->
		<title>{{ $config['meta']['title'] }}</title>
		<meta name="title" content="{{ $config['meta']['title'] }}">
		<meta name="description" content="{{ $config['meta']['description'] }}">

		<!-- Open Graph / Facebook -->
		<meta property="og:type" content="website">
		<meta property="og:url" content="{{ $config['meta']['url'] }}">
		<meta property="og:title" content="{{ $config['meta']['title'] }}">
		<meta property="og:description" content="{{ $config['meta']['description'] }}">
		<meta property="og:image" content="{{ $config['meta']['image'] }}">

		<!-- Twitter -->
		<meta property="twitter:card" content="summary_large_image">
		<meta property="twitter:url" content="{{ $config['meta']['url'] }}">
		<meta property="twitter:title" content="{{ $config['meta']['title'] }}">
		<meta property="twitter:description" content="{{ $config['meta']['description'] }}">
		<meta property="twitter:image" content="{{ $config['meta']['image'] }}">
	@endif
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
