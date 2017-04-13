<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Swift Industries
 */
?>

<?php if( is_page('swiftcampout') ) : ?>
	<footer class="text-center brown" style="background:linear-gradient(0deg, #d57427, #f0f2db)" role="contentinfo">
		<div class="py-xxl">
			<h1 class="type-grow stormy caps py-xl">Happy Trails!</h1>
		  <h2 class="h3 caps bold mb-xl">A <a href="http://builtbyswift.com">Swift Industries</a> Production</h2>
		  <p class="bold">
		    <a href="mailto:swiftcampout@builtbyswift.com">swiftcampout@builtbyswift.com</a>
		  </p>
		</div>
		<div class="p-m">
			<p class="text-center">Site by <a class="brown" href="http://alexbloom.co">Alex Bloom</a> </p>
		</div>
	</footer>
<?php endif;?>

<?php wp_footer(); ?>

</body>
</html>
