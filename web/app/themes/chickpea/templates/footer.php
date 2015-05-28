<?php global $options; ?>
<footer class="content-info" role="contentinfo">
	<div class="container-fluid">
		<h2>Chickpea Vegan Cafe</h2>
		<div class="col-md-4 col-md-push-8">
			<img src="/app/themes/chickpea/assets/img/chick.png" alt="A baby chick" />
		</div>
		<div class="col-sm-6 col-md-4 col-md-pull-4">
			<?=get_field('street_address'); ?><br />
			<?=get_field('city');?>, <?=get_field('state');?> <?=get_field('zip');?>
		</div>
		<div class="col-sm-6 col-md-4 col-md-pull-4">
			To place an order, call or text <a href="tel:<?=str_replace(array('(',')','-',' '),'',get_field('phone'));?>"><?=get_field('phone');?></a><br />
			<a href="mailto:<?=$options['email']?>"><?=$options['email']?></a><br />
			<div class="social">
				<?php if (array_key_exists('facebook', $options)) {?>
						<a target="_blank" href="https://www.facebook.com/<?=$options['facebook'];?>">
						<i class="fa fa-facebook"></i></a>
				<?php } ?>
				<?php if (array_key_exists('twitter', $options)) {?>
						<a target="_blank" href="https://www.twitter.com/<?=$options['twitter'];?>">
						<i class="fa fa-twitter"></i></a>
				<?php } ?>
				<?php if (array_key_exists('instagram', $options)) {?>
						<a target="_blank" href="https://www.instagram.com/<?=$options['instagram'];?>">
						<i class="fa fa-instagram"></i></a>
				<?php } ?>
			</div>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>
