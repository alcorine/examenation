<aside class='sidebar'>
	<section class='search'>
		<form action='' method='Post'>
			<input name='s' placeholder='Search...' type='search'>
			<input name='go' type='submit' value=''>
		</form>
	</section>
	<?php if(!dynamic_sidebar('sidebar')): ?>
		<article class='categories sidebar-block'>
			<h2>Categories</h2>
		</article>
	<?php endif; ?>
</aside>

