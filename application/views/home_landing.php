<!DOCTYPE html>
<html manifest="blogrob.appcache">
	<head>
		<title><?php echo $title ?></title>

		<link href='<?=site_url(); ?>assets/favicon.ico' rel='icon' type='image/x-icon'/>
		<link href="<?=site_url(); ?>assets/stylesheets/styles.css" rel="stylesheet"/>
		<link href="<?=current_url(); ?>" rel="canonical"/> 
		<script type="text/javascript" src="<?=site_url(); ?>assets/javascripts/pace.min.js"></script>
		<meta name="viewport" content="width=device-width">
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="BlogRob adalah blog pribadi Robby Sanjaya dan memuat informasi seputar IT serta teknologi">
		<meta name="BlogRob CMS" content="program">

	</head>
	<body>
	<script>
		(function() {
		var cx = '001866544959566411245:vdebhpz9id0';
		var gcse = document.createElement('script');
		gcse.type = 'text/javascript';
		gcse.async = true;
		gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
		var s = document.getElementsByTagName('script')[0];
		s.parentNode.insertBefore(gcse, s);
		})();
	</script>
		<div class="wrapper">
		<header>
			<a href="<?=site_url() ?>"><h1>ROBSAN BLOG</h1></a>
			<h3>Web Geek. Love sea and mountain.</h3>
				<div class="menus">
					<gcse:search></gcse:search>
					<?php foreach($query2->result_array() as $row): ?>
					<a href="<?=site_url($row['menuUrl']); ?>"><i class="fa fa-home"></i><?=$row['menuName']?></a><br>
					<?php endforeach;?>
				</div>
				
		</header>
		<section>
			<div id="main">
			<?php 	if ($this->uri->segment(1) == "post") { 
					echo '<div class="blogmain">';
						foreach ($query->result() as $row):

								$permalink  = '/post/detail/'.$row->postId.'/'. url_title($row->postTitle);
								$identifier = $this->uri->segment('3'); 
								$img = site_url('xcrud/assets/images').'/'.$row->postImg;
								
								echo '<div class="perpos">';
								echo anchor(site_url($permalink), '<h2>'.$row->postTitle.'</h2>');
						        if($row->postImg != NULL)
						        {
						        	echo '<img src='.$img.' alt="'.$title.'" /><br/>';
						        } else {
						        	echo '';
						        };

						        echo '<div class="pcontent"><strong>'.$row->postDate = date('l, d F Y h:i').'</strong>';
								echo nl2br($row->postContent).'</div></div>'; ?>
								<!-- Disqus commenting -->
								<div id="disqus_thread"></div>
								<script>
									var disqus_config = function () {
										this.page.url = $permalink;  // Replace PAGE_URL with your page's canonical URL variable
										this.page.identifier = $identifier; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
									};
									
									(function() {  // REQUIRED CONFIGURATION VARIABLE: EDIT THE SHORTNAME BELOW
										var d = document, s = d.createElement('script');
										
										s.src = '//janker.disqus.com/embed.js';  // IMPORTANT: Replace EXAMPLE with your forum shortname!
										
										s.setAttribute('data-timestamp', +new Date());
										(d.head || d.body).appendChild(s);
									})();
								</script>
								<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>
					<?php endforeach; ?>
				</div>
				<?php } elseif($this->uri->segment(1) == "page") {
								echo '<div class="perpos">';
							foreach ($query->result() as $row):
								echo anchor(site_url().'page/detail/'.$row->pageId.'/'. url_title($row->pageTitle), '<h2>'.$row->pageTitle.'</h2>');
						        echo '<div class="pcontent"><strong>'.$row->pageDate = date('l, d F Y h:i').'</strong>';
								echo nl2br($row->pageContent).'</div></div>';
							endforeach;
					} else { ?>				
				<div class="blogmain">
					<?php
						foreach ($query->result_array() as $row):
						
								echo '<div class="perpos">';
								$img = site_url('xcrud/assets/images').'/'.$row['postImg'];
								echo anchor(site_url().'post/detail/'.$row['postId'].'/'. url_title($row['postTitle']), '<h2 class="title">'.$row['postTitle'].'</h2>');
						        if($row['postImg'] != NULL)
						        {
						        	echo '<img src='.$img.' alt="'.$title.'" /><br/>';
						        } else {
						        	echo '';
						        };
						        echo '<strong>'.$row['postDate'] = date('l, d F Y h:i').'</strong>';
								echo '<p>'.word_limiter($row['postContent'], 25);
								echo anchor(site_url().'post/detail/'.$row['postId'].'/'. url_title($row['postTitle']), '(Baca Selengkapnya)');
								echo '</p></div>';
						endforeach;
					?>
				</div>
				<?php }; ?>
			</div>
		</section>
		<footer>
		<p><small>&mdash; Written by <a href="//jankerzone.com">Robby S. Muhammad</a></small></p>
		</footer>
		</div>
	<script id="dsq-count-scr" src="//janker.disqus.com/count.js" async></script>	
	</body>
</html>