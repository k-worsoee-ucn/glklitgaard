
<?php get_header();?>
<main>
    <div class="rotate-180">
        <?php echo file_get_contents( get_theme_file_uri("/assets/svg/Paper-rip.svg")); ?>
    </div>
    <h1><?php echo get_the_title();?></h1>

    
</main>
<?php get_footer();?>