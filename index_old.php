<?php
/**
 * @package WordPress
 * @subpackage UX BOX
 */
?>
<!DOCTYPE html>
<html lang="pt-br"> 
<head>
    <title><?php bloginfo('name'); ?> - <?php bloginfo("description"); ?></title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link rel="canonical" href="<?php bloginfo('url'); ?>"/>  
    <?php get_template_part('meta-header'); ?>
</head>
<body id="ixbox">

    <?php if (have_posts()) : ?>
        <ul class="posts"> 
            <?php get_template_part( 'loop' , 'entry') ?>                      
            <?php if (function_exists("pagination")) { pagination($additional_loop->max_num_pages); } ?>
        </ul>
    <?php endif; ?>

</body>
</html>