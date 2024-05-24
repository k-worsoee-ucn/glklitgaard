
<?php get_header();
    $Hytte = new WP_Query(array(
        'posts_per_page'    => -1,
        'post_type' => "Udlejning",
        'meta_key'      => 'udlejnings_type',
        'meta_value'    => 'hytter'
    ));
    if($Hytte){
        $HytteMæng = 1;
        $Amount = $Hytte->found_posts;
?>
<section class="bg-gray-200 wavey-section relative">
<h1 class="text-center">Hytter</h1>
<hr class="hidden-push">
<div class="grid grid-cols-6 lg:grid-cols-10 gap-10 w-10/12 mx-auto relative">
<?php
    while($Hytte->have_posts()){
        $Hytte->the_post();
        if($HytteMæng == $Amount AND $Amount % 2 != 0){
        ?>
        <div class="bg-slate-50 grid grid-cols-1 lg:grid-cols-2 md:grid-cols-2 col-start-3 col-span-6 col p-3 gap-5 shadow-sm relative w-10/12 mx-auto">
            <div class="inside-pic-drop">
                <img src="<?php echo the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
            </div>
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
    <?php } else{?>
        <div class="bg-slate-50 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 col-span-6 lg:col-span-5 p-3 gap-5 shadow-sm relative">
            <div class="inside-pic-drop">
                <img src="<?php echo the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
            </div>
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
    <?php }
        $HytteMæng++; }; ?>
</div>
    <?php echo file_get_contents( get_theme_file_uri("/assets/svg/Wave.svg")); ?>
    <hr class="hidden-push">
</section><?php } ?>

    
<?php get_footer();?>