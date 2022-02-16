<?php /* Template Name: Startseite */ ?>

<?php get_header() ?>
<?php
ob_start("minifier");
function minifier($code)
{
    $search = array(

        // Remove whitespaces after tags
        '/\>[^\S ]+/s',

        // Remove whitespaces before tags
        '/[^\S ]+\</s',

        // Remove multiple whitespace sequences
        '/(\s)+/s',

        // Removes comments
        '/<!--(.|\s)*?-->/'
    );
    $replace = array('>', '<', '\\1');
    $code = preg_replace($search, $replace, $code);
    return $code;
}

$image_2 = get_field('image_2');
$image_1 = get_field('image_1');
$title = get_field('section_2_title');
$text = get_field('section_2_text');
$arrow = get_field('arrow', 'options');
$gallery = get_field('gallery');
$title2 = get_field('section_3_title');
$text2  = get_field('section_3_text');
$text3 = get_field('contact_info');
$turminalImage  = get_field('turminal_image');
$turminalImage2  = get_field('turminal_image_2');
$posts2 = get_field('section_3_posts')
?>

<div class="section-header wf-section">
    <div data-collapse="all" data-animation="default" data-duration="400" data-easing="ease" data-easing2="ease"
         role="banner" class="navigation w-nav">
        <div class="navigation-header">
            <div class="navigation-global"><a href="<?php echo get_home_url(); ?>" class="w-inline-block"><img
                            src="<?php echo get_field('site_logo', 'options'); ?>" width="200" alt="Turminal"
                            class="logo-header"></a></div>
        </div>
    </div>
</div>
<div class="hero-section wf-section">
    <div class="container container-hero">
        <div class="hero-shapes"><img src="<?= get_field('intro_image') ?>"
                                      loading="lazy" alt="" class="hero-shifted"></div>
        <div class="hero-container">
            <div class="line-wrap"></div>
            <div class="hero-first"><p class="hero-lead"><?= get_field('header_text') ?><br>
                </p><a href="#kontakt" class="hero-button w-button">Ja, ich möchte kontaktiert werden</a></div>
        </div>
    </div>
    <div class="bg-image-container"></div>
</div>
<div class="section wf-section">
    <div class="container">
        <div class="title-block-2"><h2 class="heading"><?= get_field('contact_title') ?></h2>
            <div class="line-wrap line-title"></div>
        </div>
        <div class="block-three bottom">
            <div class="first-arrow"><img src="<?= get_field('arrow', 'options'); ?>"
                                          loading="lazy" alt="Arrow"></div>
            <div class="mid-text">
                <?= get_field('contact_text') ?>
                <a id="broschure"
                   target="_blank"
                   href="<?= get_field('broschure_pdf') ?>"
                   class="block-link w-inline-block">
                    <img src="<?php bloginfo('template_directory'); ?>/images/604b795b2cedeb42cadd37ab_icon1.svg"
                         loading="lazy" alt="Broschure icon">
                    <div class="link-inline">Broschüre</div>
                </a>
                <div class="download">
                    <a id="grundrissplan"
                       href="<?= get_field('grundrissplan_pdf') ?>"
                       target="_blank" class="block-link w-inline-block">
                        <img src="<?php bloginfo('template_directory'); ?>/images/604b78c5fe8447a7787ffb40_icon3.svg"
                             loading="lazy" alt="Grundrissplan icon">
                        <div class="link-inline">Grundrissplan</div>
                    </a></div>
            </div>
            <div id="Kontakt" class="last-list">
                <div class="title-block-2 large full"><h2 class="heading"><strong>Möchten Sie mehr erfahren?</strong>
                    </h2>
                    <div class="line-wrap line-title white"></div>
                </div>
                <div class="w-form">
                    <?php the_field('contact_form'); ?>
                </div>
            </div>
        </div>
        <div class="container-2 w-container">
            <?php
            $number = 0;
            $number2 = ceil(count(get_field('contact_posts')) / 3);
            foreach (get_field('contact_posts') as $index => $post):
                $number++;
                $index++;
                if ($number == 1):
                    ?>
                    <div class="rowcol <?php echo ($number2 > 1) ? "bottom" : ""; ?>">
                    <?php
                    $number2--;
                endif; ?>
                <div class="coluber">
                    <div class="numbers">
                        <div class="big-number"><?php echo ($index < 10) ? "0" . $index : $index; ?></div>
                        <h3><?= $post['title'] ?></h3>
                        <?= $post['text'] ?>
                    </div>
                </div>
                <?php if ($number == 3): ?>
                </div>
            <?php endif;
                if ($number == 3) {
                    $number = 0;
                }
                ?>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="background-line">
        <div class="line-rotate">
            <div class="big-line"></div>
            <div class="big-line"></div>
        </div>
    </div>
    <div class="background-text-left">Helle und flexible<br>Flächengestaltung mit<br>perfekte Anbindung</div>
    <div class="background-text-right">Helle und<br>Flächen<br>perfek</div>
</div>
</div>
<div class="section section-gray gray-pattern wf-section">
    <div class="container">
        <div class="row2">
            <div class="column">
                <div class="first-img"><img
                            src="<?= $image_1 ?>"
                            loading="lazy" sizes="(max-width: 479px) 36vw, (max-width: 991px) 30vw, 22vw"

                            alt="" class="img-height"></div>
                <div class="second-img"><img
                            src="<?= $image_2 ?>"
                            loading="lazy" sizes="(max-width: 479px) 36vw, (max-width: 991px) 30vw, 22vw"
                            alt="" class="img-height"></div>
            </div>
            <div class="column column2">
                <div class="title-block-2 large"><h2 class="heading"><?= $title ?></h2>
                    <div class="line-wrap line-title"></div>
                </div>
                <div class="block-three">
                    <div class="first-arrow"><img src="<?= $arrow ?>"
                                                  loading="lazy" alt="Arrow"></div>
                    <div class="mid-text large"><?= $text ?></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section section-gallery wf-section">
    <div data-delay="4000" data-animation="slide" class="slider w-slider" data-autoplay="false" data-easing="ease"
         data-hide-arrows="false" data-disable-swipe="false" data-autoplay-limit="0" data-nav-spacing="3"
         data-duration="500" data-infinite="true">
        <div class="w-slider-mask">
            <?php foreach ($gallery as $image): ?>
                <div class="w-slide"><img sizes="100vw" src="<?= $image ?>"
                                          loading="lazy" alt="" class="img-full"></div>
            <?php endforeach; ?>
        </div>
        <div class="left-arrow w-slider-arrow-left">
            <div class="w-icon-slider-left"></div>
            <div class="div-block"></div>
        </div>
        <div class="right-arrow w-slider-arrow-right">
            <div class="w-icon-slider-right"></div>
        </div>
        <div class="slide-nav w-slider-nav"></div>
    </div>
</div>
<div id="kontakt" class="section section-form wf-section"><img
            src="<?php bloginfo('template_directory'); ?>/images/603e36644916bb27a0cab728_T7-shape.svg" loading="lazy"
            alt="Turminal 7"
            class="t7">
    <div class="container">
        <div class="turminal-wrap"></div>
        <div class="wrap-form bottom">
            <div class="first-form">
                <div class="title-block-2 large"><h2 class="heading"><strong><?= $title2 ?></strong></h2>
                    <div class="line-wrap line-title white"></div>
                </div>
                <?= $text2 ?>
            </div>
            <div class="second-form">
                <img src="<?= $turminalImage ?>" loading="lazy"
                     width="400" alt="Turminal logo black" class="turminal-logo distance"><img
                        src="<?= $turminalImage2 ?>" loading="lazy"
                        width="275"
                        alt="Wirtztanner logo" class="wirztanner">
                <?= $text3 ?>
            </div>
        </div>
    </div>
    <div class="container-3 w-container">
        <?php
        $number2 = 0;
        $number3 = ceil(count($posts2) / 3);
        foreach ($posts2 as $index => $post):
            $number2++;
            $index++;
            if ($number2 == 1):
                ?>
                <div class="rowcol <?php echo ($number3 > 1) ? "bottom" : ""; ?>">
                <?php
                $number3--;
            endif; ?>
            <div class="coluber">
                <div class="numbers">
                    <div class="big-number"><?php echo ($index < 10) ? "0" . $index : $index; ?></div>
                    <h3><strong><?= $post['text'] ?></strong></h3>
                </div>
            </div>
            <?php if ($number2 == 3): ?>
            </div>
        <?php endif;
            if ($number2 == 3) {
                $number2 = 0;
            }
            ?>
        <?php endforeach; ?>
    </div>
</div>
<div class="section section-gray off wf-section">
    <div class="container">
        <div class="column column2 no">
            <div class="title-block-2 large"><h2 class="heading">Über uns</h2>
                <div class="line-wrap line-title"></div>
            </div>
            <p>Wirz Tanner Immobilien geht mit der Zeit und steht für höchste Qualität. Die Bedürfnisse der Kundschaft
                steht in unserem Mittelpunkt und mit unserer Expertise und Erfahrung helfen wir gerne bei der Beratung
                für die optimalen Büroräumlichkeiten. Auch wir lernen täglich dazu und begegnen neuen Trends mit
                Neugierde. So bleiben unsere Dienstleistungen auch in Zukunft wegweisend.<br>‍<br>Eigentümer des
                Gebäudes ist AXA Anlagenstiftung, Zürich.<br>Wirztanner.ch ist das Schweizer Portal für
                Immobilienservices.<br><br><strong>// Sie erhalten bei uns:</strong><br></p></div>
        <div class="rowcol">
            <div class="coluber">
                <div class="numbers">
                    <div class="big-number">01</div>
                    <h3>Sicherheit dank vertrauenswürdiger, partnerschaftlicher Eigentümerschaft</h3></div>
            </div>
            <div class="coluber">
                <div class="numbers">
                    <div class="big-number">02</div>
                    <h3>Informative und umfassende Präsentation der Objekte</h3></div>
            </div>
            <div class="coluber">
                <div class="numbers">
                    <div class="big-number">03</div>
                    <h3>Kompetente, kundenorientierte Beratung durch renommierte Immobilientreuhänder</h3></div>
            </div>
        </div>
    </div>
</div>

<?php
ob_end_flush();
?>
<?php
get_footer();
?>
