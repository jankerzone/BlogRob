<html>
	<head>
		<title><?php echo $title ?></title>
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	</head>
	<body>
		<header>
		<h1>WebMin :: Administrasi Website :: BlogRob</h1>
		</header>
		<nav>
			<?php	echo anchor('admnt/user','User Management');
			echo ' - ';
			echo anchor('admnt/post','Post Management');
			echo ' - ';
			echo anchor('admnt/categories','Categories Management');
			echo ' - ';
			echo anchor('admnt/menus','Menu Management');
			echo ' - ';
			echo anchor(site_url(),'Home');
			?>
		</nav>
		<content>
			<?php echo $content ?>
		</content>
		<footer>jankerzone 2016</footer>
	</body>
</html>