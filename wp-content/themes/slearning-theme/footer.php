<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package slearning-theme
 */

?>
</main>
	<footer id="colophon" class="site-footer">
		<div class="footer-container">

		<!-- Logo de CEM -->
		<div class="footer-logo">
			<?php the_custom_logo(); ?>
		</div>

		<!-- Descripción -->
		<div class="footer-description">
			<p>La solución especializada en formación online para ayuntamientos.</p>
		</div>

		<!-- Enlaces rápidos -->
		<div class="footer-links">
			<h4>Enlaces rápidos</h4>
			<ul>
				<li><a href="http://localhost/singularlearning/formacion-online-especializada-para-ayuntamientos/">Inicio</a></li>
				<li><a href="http://localhost/singularlearning/servicios/">Servicios</a></li>
				<li><a href="http://localhost/singularlearning/soluciones/">Soluciones</a></li>
				<li><a href="http://localhost/singularlearning/beneficios/">Beneficios</a></li>
				<li><a href="http://localhost/singularlearning/contacto/">Contacto</a></li>
				
			</ul>
		</div>

		<!-- Contacto -->
		<div class="footer-contact">
			<h4>Contacto</h4>
			<p><a href="mailto:info@campus-elearning.online">info@campus-elearning.online</a></p>
		</div>

		<!-- Legal -->
		<div class="footer-legal">
			<h4>Legal</h4>
			<ul>
				<li><a href="#">Política de privacidad</a></li>
				<li><a href="#">Términos y condiciones</a></li>
				<li><a href="#">Aviso legal</a></li>
			</ul>
		</div>
		
		<!-- Línea separadora verde + copyright -->
		<div class="site-bottom-bar">
		<hr class="bottom-separator">
		<div class="copyright-text">© <?php echo date('Y'); ?> Campus eLearning Municipal. Todos los derechos reservados.</div>
		</div>
	</div>
	</footer><!-- #colophon -->
	
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
