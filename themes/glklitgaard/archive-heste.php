<?php get_header(); ?>
<div class="horse-hero col-span-12">
    <h1>Velkommen til</h1>
    <h1>Vores heste</h1>
</div>


<?php 
    $hest = new WP_Query(array(
        'posts_per_page' => -1,
        'post_type' => 'Heste',
        
    ));

    while($hest->have_posts()) {
        $hest->the_post();
        ?>
        <div class="grid grid-cols-2 col-start-2 col-span-5 horse-container p-16">
            <img src="<?php the_post_thumbnail_url('horse') ?>" alt="" class="horse-img">
            <div class="col-start-2 mr-10">
                <h2><?php the_title()?></h2>
                <h3 class="font-normal"><?php echo get_field("feif-id") ?></h3>
                <p class="text-lg"><?php echo get_field("desc") ?></p>
            </div>
        </div>
        <?php
    }
?>

<?php get_footer(); ?>