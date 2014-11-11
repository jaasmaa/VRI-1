<?php require_once('view/header.html'); ?>
<?php 
$posts = array(
	array('title'=> 'Headline1', 'footer'=> 'footer text1', 'text' => 'some text1'), 
	array('title'=> 'Headline2', 'footer'=> 'footer text2', 'text' => 'some text2'), 
	array('title'=> 'Headline3', 'footer'=> 'footer text3', 'text' => 'some text3','private'=> true)
	);


 ?>
<div class="maincontent">
	<div class="content">
		<?php foreach ($posts as $post) { ?>
		<?php if (array_key_exists('private', $post) && $post['private']) continue; ?>
		<article class="topcontent">
			<header>
				<h2><?php echo $post['title']; ?></h2>
			</header>
			<footer>
				<p class="post-info"><?php echo $post['footer']; ?></p>
			</footer>
		
				<p><?php echo $post['text']; ?></p>
			
		</article><!-- .topcontent -->
		<?php  } ?>

	</div><!-- .content -->
    <?php require_once('view/sidebar.html'); ?>
    <div style="clear:both;"></div>
  <?php require_once('view/footer.html'); ?>