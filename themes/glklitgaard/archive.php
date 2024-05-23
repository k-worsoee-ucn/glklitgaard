
<?php get_header();
$postAmount = 1?>
<section class="bg-gray-200 wavey-section">

<h1 class="text-center"><?php echo post_type_archive_title( '', false );?></h1>
</section>
<div class="h-fit w-full rip bg-white">
        <?php echo file_get_contents( get_theme_file_uri("/assets/svg/Paper-rip.svg")); ?>
</div>
<section class="Papery bg-yellow-100 pb-14">
<hr class="hidden-push">
<img src="<?php echo get_theme_file_uri("/assets/images/crumpled-paper.jpg") ?>" alt="crumpled paper" class="absolute w-full h-full object-fill opacity-20 top-0 left-0">
<div class="grid grid-cols-2 gap-20 w-10/12 mx-auto">
    <?php while(have_posts()){
        the_post();?>
        <div><?php the_title(); ?></div>
    <?php }; ?>
</div>
<hr class="hidden-push">
</section>

    
<?php get_footer();?>