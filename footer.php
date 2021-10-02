
<!-- footer-menu -->
<div id="footer-menu">
		<div class="inner">
			<div class="footer-logo"><a href="/">TF-30</a></div><!-- /footer-logo -->
			<div class="footer-sub">サブタイトルが入りますサブタイトルが入ります</div><!-- /footer-sub -->

	<!-- header-nav -->
<nav class="footer-nav">
<div class="inner">
<?php
wp_nav_menu(
//.header-listを置き換えて、PC用メニューを動的に表示する
array(
'depth' => 1,
'theme_location' => 'global', //グローバルメニューをここに表示すると指定
'container' => 'false',
'menu_class' => 'header-list',
)
);
?>
</div><!-- /inner -->
</nav><!-- footer-nav -->

		</div><!-- /inner -->
	</div><!-- /footer-menu -->



<!-- footer -->
<footer id="footer">
<div class="inner">
<div class="copy">&copy; matsunogo WordPress theme All rights reserved.</div><!-- /copy -->
<div class="by">Presented by <a href="https://matsunogo.com/blog/" rel="noopener" target="_blank">matsunogo</a></div><!-- /by -->

</div><!-- /inner -->
</footer><!-- /footer -->

<!-- シングルページのとき（他のページでも表示させたい場合は条件は好きに変更してください） -->
<?php if(is_single()): ?>
		<!-- footer-sns -->
		<?php get_template_part( 'template-parts/footer-sns' ); ?>
	<?php endif; ?>



	<div class="floating">
  <a href="#"><i class="fas fa-chevron-up"></i></a>
</div>

<!--
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="js/script.js"></script>
ここを置き換える。jqueryはWPデフォで読み込まれるので消してOK。
-->

<?php wp_footer(); ?>
</body>
</html>

	
</body>

</html>
