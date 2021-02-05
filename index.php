<?php
$data = [
	[
		"title" => "Resume/CV",
		"link" => "https://mark.biek.org/cv",
	],
	[
		"title" => "Github",
		"link" => "https://github.com/markbiek",
	],
	[
		"title" => "Personal Blog",
		"link" => "https://mark.biek.org/blog",
	],
	[
		"title" => "Twitter",
		"link" => "https://twitter.com/antelopelovefan",
	],
	[
		"title" => "Instagram",
		"link" => "https://www.instagram.com/markbiek/",
	],
];
?>
<html>
<head>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Fira+Code&display=swap" rel="stylesheet"> 
	<link rel="stylesheet" href="dist/main.css" media="all" />
</head>
<body>
	<main>
<header>
<img src="src/img/mark-shades.jpg" alt="Mark Biek wearing sunglasses" />
<p>Mark Biek</p>
</header>
<?php
foreach ($data as $item) {
?>
		<article>
			<a href="<?php echo $item['link'];?>"><?php echo $item['title']; ?></a>
		</article>
<?php
} // foreach
?>
	</main>
<script src="dist/main.js"></script>
</body>
</html>
