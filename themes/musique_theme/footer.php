<!--Footer-->

<footer class="container-fluid page-footer text-center mt-4 bg-dark">

	<div class="row">
		<div class="col-lg-4 pt-3">
			<h2 class="mb-4 cat-title">Coordonnées</h2>
			<address>
				<p><i class="fa fa-map-marker"></i> 1 Bis rue Lutèce, 75004 PARIS</p>
				<a href="tel:+33143547519"><i class="fa fa-phone"></i> 01 43 54 75 19</a>
			</address>
			<div>
				<iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2625.198279250918!2d2.3441018156971314!3d48.85442930893958!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e671e04e0c9aa1%3A0xadf406cffe4d0399!2s1%20Rue%20de%20Lut%C3%A8ce%2C%2075004%20Paris!5e0!3m2!1sfr!2sfr!4v1599659808989!5m2!1sfr!2sfr" width="200" height="100" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
			</div>
		</div>
		<div class="col-lg-4 pt-2 d-flex flex-column align-self-center">
			<h2 class="mb-4 cat-title">Newsletter</h2>
			<form method="post" action="#" class="d-flex justify-content-center" class="subscribe">
				<input type="text" class="form-control mr-2" placeholder="Email" style="width:200px;">
				<input type="submit" value="Envoyer" class="btn btn-outline-light btn-sm mb-2">
			</form>
		</div>

		<div class="col-lg-4 pt-2 d-flex flex-column align-self-center">
			<h2 class="mb-4 cat-title">Liens</h2>

			<ul class="list-unstyled">
				<li><a href="#">À propos de nous</a></li>
				<li><a href="#">Conditions d'utilisation</a></li>
				<li><a href="#">Confidentialité</a></li>
				<li><a href="<?php bloginfo('url'); ?>/index.php/contact/">Nous contacter</a></li>
			</ul>
		</div>
	</div>

	<!-- Social icons -->
	<div class="row">
		<div class="col-lg-12 pb-2">
			<a href="" target="_blank">
				<i class="fa fa-facebook fa-2x mr-3"></i>
			</a>
			<a href="" target="_blank">
				<i class="fa fa-twitter fa-2x mr-3"></i>
			</a>
			<a href="" target="_blank">
				<i class="fa fa-youtube fa-2x mr-3"></i>
			</a>
			<a href="" target="_blank">
				<i class="fa fa-instagram fa-2x mr-3"></i>
			</a>
			<a href="" target="_blank">
				<i class="fa fa-twitch fa-2x"></i>
			</a>
		</div>
	</div>

	<!--Copyright-->
	<div class="row">
		<div class="col-lg-12 py-1">
			AlloMusic © 2020 Copyright
		</div>
	</div>

	<?php wp_footer(); ?>

</footer>

</body>
</html>