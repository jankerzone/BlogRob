<html>
	<head>
		<title><?php echo $title ?></title>
		<link href='favicon.ico' rel='icon' type='image/x-icon'/>
		
		<link rel="stylesheet" href="assets/stylesheets/styles.css">
		<link rel="stylesheet" href="assets/stylesheets/github-light.css">
		<meta name="viewport" content="width=device-width">
	
	</head>
	<body>
		<div class="wrapper">
		<header>
			<h1>ROBSAN BLOG</h1>
			<h3>Web Geek. Love sea and mountain.</h3>
				<a href=""><i class="fa fa-home"></i>Home</a><br>
				
				
		</header>
		<section>
			<div id="main">
				<span style="font-family:courier new,courier,monospace;">
					<?php
						$query = $this->db->query("select * from posts");

						foreach ($query->result_array() as $row)
						{
								$img = site_url('xcrud/assets/images').'/'.$row['postImg'];
								echo '<img src='.$img.' />';
						        echo '<h2>'.$row['postTitle'].'</h2>';
						        echo '<span>'.$row['postDate'] = date('l, d F Y h:i').'</span>';
														        
						        echo '<p>'.word_limiter($row['postContent'], 25).'</p>';

						        //echo anchor(BASE_URL.'news/detail/'.$row->id.'/'. url_title($row->judul),'(baca selengkapnya)') ;
						}
					?>
				</span>
			</div>
		</section>
		<footer>
		<p><small>Hosted on GitHub Pages &mdash; Theme by <a href="https://github.com/orderedlist">orderedlist</a> &mdash; Written by <a href="//jankerzone.com">Robby S. Muhammad</a></small></p>
		</footer>
		</div>
		
	</body>
</html>