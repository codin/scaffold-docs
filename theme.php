<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Scaffold Documentation</title>
		
		<link rel="stylesheet" href="/assets/css/style.css">
		<link rel="stylesheet" href="/assets/css/prism.css">
	</head>
	<body>
		<header id="top">
			<a id="logo" href="/">
				<img src="/assets/img/logo.png" title="Scaffold logo" alt="Scaffold">
			</a>
			
			<ul role="navigation">
				<?php foreach($nav as $item): ?>
				<li <?php if(strpos($url, $item['slug']) !== false) echo 'class="active"'; ?>>
					<a href="/<?php echo $item['slug']; ?>"><?php echo $item['title']; ?></a>

					<?php if(isset($item['pages'])): ?>
					<ul>
					<?php foreach($item['pages'] as $page): ?>
						<li <?php if(strpos($url, $page[0]) !== false) echo 'class="active"'; ?>>							<a href="/<?php echo $item['slug'] . '/' . $page[0]; ?>"><?php echo $page[1]; ?></a>
						</li>
					<?php endforeach; ?>
					</ul>
					<?php endif; ?>
				</li>
				<?php endforeach; ?>
			</ul>
		</header>
		
		<section class="content">
			<?php echo $content; ?>
		</section>
		
		<script src="/assets/js/prism.js"></script>
		<script src="/assets/js/prism-php.js"></script>
	</body>
</html>