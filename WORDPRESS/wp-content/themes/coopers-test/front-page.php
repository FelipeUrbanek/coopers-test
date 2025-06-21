<?php
/**
 * Template Name: Página Inicial
 *
 * This is the template that displays the front page of your site.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Coopers_Test
 */

get_header();

// Obtém todos os campos ACF
$fields = get_fields();

// Separa os campos por seção
$hero_section = $fields['hero_section'];
$todo_section = $fields['todo_section'];
$plans_section = $fields['plans_section'];
$good_things_section = $fields['good_things_section'];
$contact_section = $fields['contact_section'];
$footer_section = $fields['footer_section'];

?>
<!-- Skip Links -->
<nav class="skip-links" aria-label="Links de atalho">
    <a href="#main" class="skip-link">Pular para conteúdo principal</a>
    <a href="#todo-section" class="skip-link">Pular para lista de tarefas</a>
    <a href="#contact-section" class="skip-link">Pular para contato</a>
</nav>

<header>
    <section id="hero-section" aria-labelledby="hero-title">
        <div class="container mb-3 mb-lg-5">
            <a href="<?php echo home_url(); ?>" class="logo" aria-label="Voltar para página inicial">
                <img src="<?php echo esc_url($hero_section['hero_logo']['url']); ?>"
                    alt="<?php echo esc_attr($hero_section['hero_logo']['alt']); ?>" />
            </a>
        </div>

        <div class="bg-hero">
            <img src="<?php echo esc_url($hero_section['hero_bg']['url']); ?>" alt="" class="svg-hero"
                aria-hidden="true" />
        </div>

        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-lg-6">
                    <h1 id="hero-title"><?php echo wp_kses_post($hero_section['hero_content']['title']); ?></h1>
                    <p class="hero-description"><?php echo esc_html($hero_section['hero_content']['description']); ?>
                    </p>
                    <a href="<?php echo esc_url($hero_section['hero_content']['button']['url']); ?>" class="btn-hero"
                        aria-label="Ir para seção de lista de tarefas">
                        <?php echo esc_html($hero_section['hero_content']['button']['title']); ?>
                    </a>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="img-hero-container">
                        <img src="<?php echo esc_url($hero_section['hero_content']['image']['url']); ?>"
                            alt="<?php echo esc_attr($hero_section['hero_content']['image']['alt']); ?>"
                            class="img-fluid img-hero" />
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/header/arrow.svg" alt=""
                        class="arrow-down" aria-hidden="true" />
                </div>
            </div>
        </div>
    </section>
</header>

<main id="main">
    <section id="todo-section" aria-labelledby="todo-title">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 id="todo-title" class="todo-title"><?php echo esc_html($todo_section['content']['title']); ?>
                    </h2>
                    <p class="todo-description">
                        <?php echo esc_html($todo_section['content']['description']); ?>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="plans-section" aria-label="Planos disponíveis">
        <div class="element-plans">
            <img src="<?php echo esc_url($plans_section['composition']['url']); ?>" alt="" class="svg-plans"
                aria-hidden="true" />
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <?php foreach ($plans_section['plans'] as $plan): ?>
                    <div
                        class="col-12 col-sm-10 col-md-8 col-lg-4 <?php echo ($plan === reset($plans_section['plans'])) ? 'offset-lg-2' : ''; ?> mb-4 mb-lg-0">
                        <div class="card-plan">
                            <div class="card-plan-header">
                                <h3 class="plan-price"><?php echo esc_html($plan['header']['price']); ?> <span>/
                                        <?php echo esc_html($plan['header']['period']); ?></span></h3>
                                <p class="plan-name">
                                    <?php echo esc_html($plan['header']['name']); ?>
                                    <strong
                                        class="plan-feature"><?php echo esc_html($plan['header']['highlight']); ?></strong>
                                </p>
                            </div>
                            <div class="card-plan-body">
                                <ul class="plan-features" role="list">
                                    <?php foreach ($plan['features'] as $feature): ?>
                                        <li class="<?php echo $feature['available'] ? 'available' : 'unavailable'; ?>">
                                            <i class="fa-solid fa-<?php echo $feature['available'] ? 'check' : 'xmark'; ?>"
                                                aria-hidden="true"></i>
                                            <?php echo esc_html($feature['text']); ?>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                            <div class="card-plan-footer">
                                <a href="<?php echo esc_url($plan['button']['url']); ?>"
                                    class="btn-plan"><?php echo esc_html($plan['button']['title']); ?></a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section id="good-things-section" aria-labelledby="good-things-heading">
        <div class="container good-things-container">
            <div class="row">
                <div class="col-12">
                    <h2 id="good-things-heading"><?php echo esc_html($good_things_section['content']['title']); ?></h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="splide good-things-slider" role="region" aria-roledescription="carousel">
                        <div class="splide__track">
                            <div class="splide__list" role="presentation">
                                <?php foreach ($good_things_section['content']['cards'] as $card): ?>
                                    <div class="splide__slide" role="group" aria-roledescription="slide">
                                        <article class="card-good-things">
                                            <div class="card-good-things-header">
                                                <img src="<?php echo esc_url($card['image']['url']); ?>"
                                                    alt="<?php echo esc_attr($card['image']['alt']); ?>"
                                                    class="svg-good-things" loading="lazy" width="100%" height="160" />
                                            </div>
                                            <div class="card-good-things-body">
                                                <span class="function"
                                                    role="text"><?php echo esc_html($card['tag']); ?></span>
                                                <h3 class="good-things-title">
                                                    <?php echo esc_html($card['title']); ?>
                                                </h3>
                                                <a href="<?php echo esc_url($card['link']['url']); ?>" class="read-more"
                                                    aria-label="<?php echo esc_attr($card['title']); ?>"><?php echo esc_html($card['link']['title']); ?></a>
                                                <div class="composition-good-things">
                                                    <img src="<?php echo esc_url($card['composition']['url']); ?>" alt=""
                                                        aria-hidden="true" loading="lazy" />
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact-section" aria-labelledby="contact-title">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="box-contact">
                        <div class="box-contact-header" role="presentation">
                            <img src="<?php echo esc_url($contact_section['content']['image']['url']); ?>"
                                alt="<?php echo esc_attr($contact_section['content']['image']['alt']); ?>"
                                class="img-fluid img-contact" />
                        </div>
                        <div class="box-contact-body">
                            <h2 id="contact-title" class="contact-title">
                                <span class="icon-contact" aria-hidden="true">
                                    <img src="<?php echo esc_url($contact_section['content']['icon']['url']); ?>"
                                        alt="" />
                                </span>
                                <span class="contact-title-text">
                                    <?php echo wp_kses_post($contact_section['content']['title']); ?>
                                </span>
                            </h2>
                            <?php
                            if ($contact_section['content']['form']) {
                                echo do_shortcode('[contact-form-7 id="' . esc_attr($contact_section['content']['form']) . '"]');
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>



<?php get_footer(); ?>