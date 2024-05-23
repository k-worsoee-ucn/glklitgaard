
<?php get_header();?>
<section class="col-span-12 bg-gray-100 rip">

<h1 class="text-center"><?php the_archive_title();?></h1>
<div class="-scale-y-100 h-fit w-full rip bg-white">
        <?php echo file_get_contents( get_theme_file_uri("/assets/svg/Paper-rip.svg")); ?>
</div>
</section>

    
<?php get_footer();?>