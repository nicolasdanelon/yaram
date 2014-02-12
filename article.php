<?php include(dirname(__FILE__).'/header.php'); ?>

<section>

	<div id="container">

		<div class="width-sidebar" itemscope itemtype="http://schema.org/BlogPosting">

			<article role="article" id="post-<?php echo $plxShow->artId(); ?>">

				<header>
					<h1 itemprop="name headline">
						<?php $plxShow->artTitle(''); ?>
					</h1>
					<p>
						<?php $plxShow->lang('WRITTEN_BY') ?>
						<span itemscope itemtype="http://schema.org/Person">
							<span itemprop="name">
								<a href="https://plus.google.com/+NicolasDanelon-webdev" target="_blank"><?php $plxShow->artAuthor(); ?></a>
							</span>
						</span> -
						<time datetime="<?php $plxShow->artDate('#num_year(4)-#num_day-#num_month'); ?>" itemprop="datePublished">
							<?php $plxShow->artDate('#num_day #month #num_year(4)'); ?>
						</time> -
						<?php $plxShow->artNbCom(); ?>
					</p>
				</header>

				<section itemprop="articleBody">
					<?php $plxShow->artContent(); ?>
				</section>

				<footer>
					<p>
						<?php $plxShow->lang('CLASSIFIED_IN') ?> : <?php $plxShow->artCat(); ?> -
						<?php $plxShow->lang('TAGS') ?> : <?php $plxShow->artTags(); ?>
					</p>
				</footer>

			</article>

			<?php $plxShow->artAuthorInfos('<div class="author-infos">#art_authorinfos</div>'); ?>

			<?php include(dirname(__FILE__).'/commentaires.php'); ?>

		</div>

		<?php include(dirname(__FILE__).'/sidebar.php'); ?>

	</div>

</section>

<?php include(dirname(__FILE__).'/footer.php'); ?>
