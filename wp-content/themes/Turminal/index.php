<?php get_header() ?>

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
<div class="small_header wf-section">
    <div class="bg-image-container"><img
            src="<?=  get_field('header_image')  ?>" loading="lazy"
            sizes="100vw" alt="" class="bg-image"></div>
</div>
<div class="section wf-section body">
    <div class="container">
        <?php if(get_field('content')):  ?>
        <div class="title-block-2"><h2 class="heading"><?= get_field('title') ?></h2>
            <div class="line-wrap line-title"></div>
        </div>
        <?php foreach (get_field('content') as $text): ?>
        <div class="block-three">
            <div class="first-arrow p-10"><img src="<?= get_field('arrow', 'options'); ?>"
                                          loading="lazy" alt="Arrow"></div>
            <div class="mid-text wider"><?= $text['text'] ?></div>
        </div>
        <?php endforeach; ?>
        <?php else: ?>
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <?php the_content(); ?>
            <?php endwhile; endif; ?>
        <?php endif; ?>
    </div>
    <div class="background-line">
        <div class="line-rotate">
            <div class="big-line"></div>
            <div class="big-line"></div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
