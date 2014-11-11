<?php require_once('view/header.html'); ?>
<div class="maincontent">
	<div class="content">
		<article class="topcontent">
			<header>
				<h2>A registration form</h2>
			</header>
			<footer>
				<p class="post-info">This post has been written by me</p>
			</footer>
			
				<form name="MyForm" action="authentication.php" method="POST">
				Username: <input type="text" name="username"><br>
				Password: <input type="password" name="pwd"><br>
				<input type="submit" value="Submit">

				</form>


			<?php if(array_key_exists('fail', $_REQUEST) && $_REQUEST['fail']) { ?>

			<p>Authentication failed. Try again.</p>

			<?php } ?>

		</article><!-- .topcontent -->

	</div><!-- .content -->

	 <?php require_once('view/sidebar.html'); ?>
	 <?php require_once('view/footer.html'); ?>