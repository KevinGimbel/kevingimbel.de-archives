<?php
  $page_title = "Projects";
  $current_page = "projects";

  include('./includes/header.php');
?>

<section class="module module--showcase">
	<aside class="module__img"><img src="assets/img/projects/minimalism_in_grey.png" alt=""></aside>
	<div class="module__inner">
		<header class="module__header">
			<h1>Minimalism In Grey</h1>
		</header>
		<div class="module__content">
			<p>I always loved to craft my own Tumblr Layouts. <i>Minimalism In Grey</i> is a very basic Layout. It is fully flexible and fits all screens.
				It is supposed to be used by People who have art-blogs or blog a lot of photos. The focus lies on minimalism and flexibility. You can view the
				<a href="http://minimalismingrey.tumblr.com">themes page here</a>.</p>
		</div>
	</div>
</section>

<section class="module module--showcase">
	<aside class="module__img"><img src="assets/img/projects/readrr.png" alt=""></aside>
	<div class="module__inner">
		<header class="module__header">
			<h1>Readrr</h1>
		</header>
		<div class="module__content">
			<p>Readrr will be a social network for people who love to read and archive their reads. It's a side-project I work on
				with my best friend <a href="http://codepen.io/MyXoToD">Max</a>. He does the Back-End Stuff and I craft the Front-End.</p>
			<p>Note: Readrr is still more than alpha. The image is one of the very first screen designs an not at all final.</p>
		</div>
	</div>
</section>


<?php
  include('./includes/footer.php');

  /* 
section.module>(aside.module__img>img)>(div.module__inner>(header.module__header>h1)>(div.module__content>p)>(footer.module__footer>p))	
  */
?>
