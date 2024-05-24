
<?php get_header();?>
<section class="bg-gray-200 wavey-section">

<h1 class="text-center"><?php echo post_type_archive_title( '', false );?></h1>
</section>
<div class="h-fit w-full rip bg-white">
        <?php echo file_get_contents( get_theme_file_uri("/assets/svg/Paper-rip.svg")); ?>
</div>
<section class="Papery bg-yellow-100 pb-14 -mb-7 relative">
<hr class="hidden-push">
<img src="<?php echo get_theme_file_uri("/assets/images/crumpled-paper.jpg") ?>" alt="crumpled paper" class="absolute w-full h-full object-fill opacity-20 top-0 left-0">
<div class="grid grid-cols-2 gap-10 w-10/12 mx-auto relative">
    <?php while(have_posts()){
        the_post();?>
        <div class="bg-slate-50 grid grid-cols-2 p-3 gap-5 shadow-sm relative">
            <a class="inside-pic-drop" href="<?php echo post_permalink();?>">
                <img src="<?php echo the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
            </a>
        <div class="grid grid-cols-1">
            <h3 class="text-center"><?php the_title(); ?></h3>
            <?php wp_trim_words(the_excerpt(), 100, "...")?>
            <a href="<?php echo post_permalink();?>" class="knap text-center px-3 py-1 mx-auto mt-auto font-semibold">Læs mere</a>
        </div>
        <div class="tape tape-left">
            <?php echo file_get_contents( get_theme_file_uri("/assets/svg/tape.svg")); ?>
        </div>
        <div class="tape tape-right">
            <?php echo file_get_contents( get_theme_file_uri("/assets/svg/tape.svg")); ?>
        </div>
    </div>
    <?php };wp_reset_postdata();  ?>
</div>
<hr class="hidden-push">
</section>

    
<?php get_footer();?>