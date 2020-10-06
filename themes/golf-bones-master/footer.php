			<footer class="footer" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">

				<div id="inner-footer" class="wrap cf">

				<div class="clearfix">
					<div class="info">
						<h2>Tel:0120-123-4567</h2>
						<h2>Mail:wednesdaygolfclub.co.jp</h2>
						<h4>ご連絡お待ちしております。</h4>
					</div><!-- //info -->

					<div id="nav3">
						<ul>
							<li><a href="<?php echo home_url('/course'); ?>">コース紹介</a></li>
							<li><a href="<?php echo home_url('/price'); ?>">料金</a></li>
							<li><a href="<?php echo home_url('/facility'); ?>">施設案内</a></li>
							<li><a href="<?php echo home_url('/reserve'); ?>">ご予約</a></li>
							<li><a href="<?php echo home_url('/access'); ?>">アクセス</a></li>
						</ul>
					</div><!-- //nav -->
				</div><!-- //clearfix -->
				<p class="copyright"><small>Copyright © Wednesday Golf Club</small></p>

					<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>.</p> 

				</div>

			</footer>

		</div>

		<?php // all js scripts are loaded in library/bones.php ?>
		<?php wp_footer(); ?>

	</body>

</html> <!-- end of site. what a ride! -->
