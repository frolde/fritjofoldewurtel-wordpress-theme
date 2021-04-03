<footer>
	<div class="container-fluid pagefooter">
		<div class="row">
			<div class="col-12 col-md-4 footer__col footer__col--left">
				@php dynamic_sidebar('sidebar-footer-navigation') @endphp
			</div>
			<div class="d-none d-md-block col-md-4 footer__col footer__col--middle">
				<a class="scroll-link" <?php if ( !is_front_page() ) {echo 'href="/"';}?>>
					<img src="<?php echo get_template_directory_uri() . '/../dist/images/fo-logo-sw.svg' ?>">
				</a>
			</div>
			<div class="d-none d-md-block col-md-4  footer__col footer__colRight">
        		@php dynamic_sidebar('sidebar-footer-contact') @endphp
			</div>
		</div>
	</div>
	<div class="container-fluid copyright">
		<span>&copy; <?php echo date('Y'); ?> Fritjof Oldewurtel - Made with <i class="fas fa-heart" aria-hidden="true"></i> and <a href="https://www.wordpress.org" target="_blank">Wordpress</a>.</span>
	</div>
</footer>
