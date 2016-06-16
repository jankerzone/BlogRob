<!DOCTYPE html>
<html manifest="blogrob.appcache">
	<head>
		<title><?php echo $title ?></title>

		<link href='<?php echo site_url(); ?>assets/favicon.ico' rel='icon' type='image/x-icon'/>
		
		<link rel="stylesheet" href="<?php echo site_url(); ?>assets/stylesheets/styles.css">
		<script type="text/javascript" src="<?php echo site_url(); ?>assets/javascripts/pace.min.js"></script>
		<meta name="viewport" content="width=device-width">
	
	</head>
	<body>
		<div class="wrapper">
		<header>
			<h1>ROBSAN BLOG</h1>
			<h3>Web Geek. Love sea and mountain.</h3>
				<a href="<?php echo site_url(); ?>"><i class="fa fa-home"></i>Home</a><br>
				
				
		</header>
		<section>
			<div id="main">
			<?php if ($this->uri->segment(1) == "post") { ?>
				<div class="blogmain">
					<?php
						foreach ($query->result_array() as $row)
						{
								echo '<div class="perpos">';
								$img = site_url('xcrud/assets/images').'/'.$row['postImg'];
								echo anchor(site_url().'post/'.$row['postId'].'/'. url_title($row['postTitle']), '<h1>'.$row['postTitle'].'</h1>');
						        echo '<img src='.$img.' /><br/>';
						        echo '<strong>'.$row['postDate'] = date('l, d F Y h:i').'</strong>';
								echo '<p>'.nl2br($row['postContent']).'</p></div>';
						}
					?>
				</div>
				<?php } else { ?>				
				<div class="blogmain">
					<?php
						foreach ($query->result_array() as $row)
						{
								echo '<div class="perpos">';
								$img = site_url('xcrud/assets/images').'/'.$row['postImg'];
								echo anchor(site_url().'post/detail/'.$row['postId'].'/'. url_title($row['postTitle']), '<h1>'.$row['postTitle'].'</h1>');
						        echo '<img src='.$img.' /><br/>';
						        echo '<strong>'.$row['postDate'] = date('l, d F Y h:i').'</strong>';
								echo '<p>'.word_limiter($row['postContent'], 25);
								echo anchor(site_url().'post/detail/'.$row['postId'].'/'. url_title($row['postTitle']), '(Baca Selengkapnya)');
								echo '</p></div>';
						}
					?>
				</div>
				<?php }; ?>
			</div>
		</section>
		<footer>
		<p><small>Hosted on GitHub Pages &mdash; Theme by <a href="https://github.com/orderedlist">orderedlist</a> &mdash; Written by <a href="//jankerzone.com">Robby S. Muhammad</a></small></p>
		</footer>
		</div>
		
	</body>
</html>