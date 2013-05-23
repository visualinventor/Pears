	<?php get_sidebar(); ?>
</div> <!-- /wrap -->

<footer role="contentinfo" style="text-align:center;">
	<p>Pears is handcrafted in Salem, Massachusetts by <a href="http://simplebits.com">SimpleBits</a>.</p>
	<p class="cc">This work is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/3.0/">Creative Commons Attribution-NonCommercial-ShareAlike 3.0 Unported License</a>.</p>
	<p><a href="http://simplebits.com" id="sb"><img src="<?php echo get_template_directory_uri(); ?>/images/sb-black.png"></a></p>
</footer>

<!-- jQuery -->
<?php wp_enqueue_script('jquery'); ?>

<script>
	$(document).ready(function() {
		$.scoped();

		// update rendered pattern when user edits the textareas
		$('#markup textarea').live('keyup', function(e) {
			$('#pattern-wrap').html($(this).val());
		});
		$('#style textarea').live('keyup', function(e) {
			$('div.main style').html($(this).val());
		});

		// auto-select code in textarea when clipboard icon is clicked
		$('#markup a.clip').click(function(){
			$('#markup textarea').select();
			return false;
		});
		$('#style a.clip').click(function(){
			$('#style textarea').select();
			return false;
		});

		// expand/collapse side nav
		$('#nav-toggle').click(function() {
			$('body').toggleClass('expanded');
			return false;
		});
	});
</script>

<?php wp_footer(); ?>
</body>
</html>
