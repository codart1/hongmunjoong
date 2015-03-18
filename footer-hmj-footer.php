<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package dazzling
 */
?>
<?php 
	$asset_uri = get_template_directory_uri() . "/hmj-assets/";
	$img_main_uri = $asset_uri . "img/0.main/";
	$css_uri = $asset_uri . "css/";
	$js_uri = $asset_uri . "js/";
 ?>

	
	<link rel="stylesheet" href="<?php echo $css_uri . 'customized.css' ?>">
	<link rel="stylesheet" href="<?php echo $css_uri . 'hmj_footer.css' ?>">

	<div id="footer-area">
		<div class="container footer-inner">
			<?php get_sidebar( 'footer' ); ?>
		</div>

		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="site-info container">
				<div class="col-md-3 hidden-sm hidden-xs">
					<img src="<?php echo $img_main_uri . 'logo_footer.png' ?>" alt="" class="img-responsive">
				</div>
				<div class="col-md-9 hidden-sm hidden-xs">
					<img src="<?php echo $img_main_uri . 'footer_info.png' ?>" alt="" class="img-responsive">
				</div>
			</div><!-- .site-info -->
			<div class="col-sm-12 visible-sm-block visible-xs-block">
				<p class="text-center">		
				홍문종 국희의윔실 대묘긔『 주소 l 서욜륵맬시 영듕포구 여의도동 국희의 뭔희관 건화번41 02-188-2961 이매일 1 M6r830r80er 0881 DESIGNED BY 휴믄쥬 국희의읨 심 
				</p>
			</div>
			<div class="scroll-to-top"><i class="fa fa-angle-up"></i></div><!-- .scroll-to-top -->
		</footer><!-- #colophon -->
	</div>
</div><!-- #page -->

<?php wp_footer(); ?>
<script src="<?php echo $js_uri . 'customized.js' ?>"></script>
</body>
</html>