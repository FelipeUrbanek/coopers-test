<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Coopers_Test
 */

// Obtém todos os campos ACF
$fields = get_fields();

$footer_section = $fields['footer_section'];

?>

<footer>
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="footer-content">
					<h2 class="footer-title"><?php echo esc_html($footer_section['title']); ?></h2>
					<a href="mailto:<?php echo esc_attr($footer_section['email']); ?>"
						class="footer-email"><?php echo esc_html($footer_section['email']); ?></a>
					<p class="copyright"><?php echo esc_html($footer_section['copyright']); ?></p>
				</div>
			</div>
		</div>
	</div>
</footer>

<!-- Scripts não críticos com loading otimizado -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"
	defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js" async></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/vendor/js/aos.js" defer></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/svg-inject.min.js" defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/gsap.min.js" async></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/ScrollTrigger.min.js" async></script>
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>

<!-- Preload de recursos críticos -->
<link rel="preload" href="<?php echo get_template_directory_uri(); ?>/assets/img/header/logo.svg" as="image"
	type="image/svg+xml" />
<link rel="preload" href="<?php echo get_template_directory_uri(); ?>/assets/img/header/BG.svg" as="image"
	type="image/svg+xml" />

<script>
	document.addEventListener("DOMContentLoaded", function () {
		const splide = new Splide(".good-things-slider", {
			type: "loop",
			perPage: 3,
			perMove: 1,
			gap: "20px",
			arrows: false,
			pagination: true,
			autoplay: "play",
			interval: 3000,
			pauseOnHover: true,
			pauseOnFocus: true,
			rewind: true,
			speed: 1000,
			breakpoints: {
				992: {
					perPage: 3,
				},
				768: {
					perPage: 2,
				},
				576: {
					perPage: 1,
				},
			},
			a11y: {
				container: "Good things carousel",
				items: "Slide",
				prev: "Previous slide",
				next: "Next slide",
				pagination: "Carousel pagination",
				slideX: "Go to slide %s",
				play: "Start autoplay",
				pause: "Pause autoplay",
				first: "Go to first slide",
				last: "Go to last slide",
				slideLabel: "Slide %s of %s",
			},
		});

		splide.mount();

		// Add keyboard controls
		document.addEventListener("keydown", function (e) {
			if (e.key === "ArrowLeft") {
				splide.go("<");
			} else if (e.key === "ArrowRight") {
				splide.go(">");
			}
		});

		setTimeout(() => {
			splide.Components.Autoplay.play();
		}, 100);

		// Improve read more links accessibility
		document.querySelectorAll(".read-more").forEach((link) => {
			link.addEventListener("keydown", function (e) {
				if (e.key === "Enter" || e.key === " ") {
					e.preventDefault();
					this.click();
				}
			});

			// Add descriptive text for screen readers
			const cardTitle = link
				.closest(".card-good-things")
				.querySelector(".good-things-title")
				.textContent.trim();
			link.setAttribute("aria-label", `Read more about: ${cardTitle}`);
		});
	});
</script>



<!-- Toastify JS -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>

<script>
	document.addEventListener("DOMContentLoaded", function () {
		// Antes de enviar o formulário
		document.addEventListener("wpcf7beforesubmit", function (event) {
			Toastify({
				text: "⌛ Formulário sendo enviado!",
				duration: 3000,
				gravity: "top",
				position: "right",
				backgroundColor: "#353b55",
				stopOnFocus: true,
			}).showToast();
		});

		// Evento de sucesso no envio
		document.addEventListener("wpcf7mailsent", function (event) {
			Toastify({
				text: "✅ Formulário enviado com sucesso!",
				duration: 3000,
				gravity: "top",
				position: "right",
				backgroundColor: "#28a745",
				stopOnFocus: true,
			}).showToast();
		});

		// Evento de erro no envio
		document.addEventListener("wpcf7mailfailed", function (event) {
			Toastify({
				text: "⚠️ Erro ao enviar. Tente novamente mais tarde.",
				duration: 3000,
				gravity: "top",
				position: "right",
				backgroundColor: "#FFA500",
				stopOnFocus: true,
			}).showToast();
		});

		// Evento de erro na validação do formulário
		document.addEventListener("wpcf7invalid", function (event) {
			Toastify({
				text: "❌ Por favor, verifique os campos e tente novamente.",
				duration: 3000,
				gravity: "top",
				position: "right",
				backgroundColor: "#FF0000",
				stopOnFocus: true,
			}).showToast();
		});

		// Evento de bloqueio por SPAM
		document.addEventListener("wpcf7spam", function () {
			Toastify({
				text: "🚫 Detecção de SPAM! Tente novamente mais tarde.",
				duration: 3000,
				gravity: "top",
				position: "right",
				backgroundColor: "#FF0000",
				stopOnFocus: true,
			}).showToast();
		});
	});
</script>

<?php wp_footer(); ?>
</body>

</html>