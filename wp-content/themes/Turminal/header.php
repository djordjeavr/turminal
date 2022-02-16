<?php
?>
<!doctype html>
<html lang="en">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

</head>
<title>
    <?php
    if (is_front_page()) {
        bloginfo('name');
    } else {
        wp_title('');
    }
    ?>
</title>

<?php wp_head(); ?>
<meta content="Turminal - Innovative Hubs und Arbeitsfläche massgeschneidert" property="twitter:title">
<meta content="Der Turminal mit seinen Büroflächen schlägt die Brücke von Home Office zu einem Ort des Austausches, der vom Kommen und Gehen lebt."
      property="twitter:description">
<meta property="og:type" content="website">
<meta content="summary_large_image" name="twitter:card">
<meta content="width=device-width, initial-scale=1" name="viewport">

<link href="<?php bloginfo('template_directory'); ?>/css/axa-turminal.5a713deac.min.css" rel="stylesheet"
      type="text/css">
<script src="<?php bloginfo('template_directory'); ?>/js/webfont.js" type="text/javascript"></script>
<script type="text/javascript">WebFont.load({google: {families: ["Roboto:regular,700"]}});</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"
        type="text/javascript"></script>
<script type="text/javascript">!function (o, c) {
        var n = c.documentElement, t = " w-mod-";
        n.className += t + "js", ("ontouchstart" in o || o.DocumentTouch && c instanceof DocumentTouch) && (n.className += t + "touch")
    }(window, document);</script>
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css?v=1">
<link rel="icon" href="<?php echo get_field('site_favicon', 'options'); ?>" type="image/x-icon"/>
<link rel="shortcut icon" href="<?php echo get_field('site_favicon', 'options'); ?>" type="image/x-icon"/>
</head>


<body <?php body_class(); ?>>

