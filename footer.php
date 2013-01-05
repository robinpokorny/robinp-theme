<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package robinp
 * @since robinp 1.0
 */
?>

	</div><!-- #main -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<nav role="navigation" class="site-navigation main-navigation">
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
			<?php wp_tag_cloud('smallest=80&largest=80&unit=%&number=0&format=list');
?>
			<ul>
				<?php wp_list_bookmarks('category=7&categorize=0&title_before=&title_after=&title_li=&orderby=rating'); ?> 
			</ul>
		</nav><!-- .site-navigation .main-navigation -->

		<div class="site-info">
			<?php do_action( 'robinp_credits' ); ?>

<a rel="license" href="http://creativecommons.org/licenses/by/3.0/"><img alt="Creative Commons License" style="border-width:0" src="<?php bloginfo('template_directory'); ?>/images/cc_by.png" /></a>
<div class="licence"><span xmlns:dct="http://purl.org/dc/terms/" href="http://purl.org/dc/dcmitype/Text" property="dct:title" rel="dct:type">Robin Plus</span> by <span xmlns:cc="http://creativecommons.org/ns#" property="cc:attributionName">Robin Pokorný</span><br/>is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by/3.0/">CC BY 3.0</a></div>
			<a href="http://apple.com/" title="Made on a Mac"></a>
		</div><!-- .site-info -->
	</footer><!-- #colophon .site-footer -->
</div><!-- #page .hfeed .site -->

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-639471-25']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

<script type="text/javascript" src="http://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS_HTML"></script>

<?php wp_footer(); ?>

</body>
</html>