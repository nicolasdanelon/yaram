<?php if (!defined('PLX_ROOT')) exit; ?>

<footer role="contentinfo">

	<p>
		<?php $plxShow->mainTitle('link'); ?> © 2014 - <?php $plxShow->subTitle(); ?>
	</p>
	<p>
		<?php $plxShow->chrono(); ?>
		<?php $plxShow->httpEncoding() ?>
	</p>
	<p>
		<a href="<?php $plxShow->urlRewrite('#top') ?>" title="<?php $plxShow->lang('GOTO_TOP') ?>"><?php $plxShow->lang('TOP') ?></a>
		<?php $plxShow->lang('POWERED_BY') ?> <a href="http://www.pluxml.org" title="<?php $plxShow->lang('PLUXML_DESCRIPTION') ?>">PluXml</a>
	</p>

</footer>

</body>

</html>
