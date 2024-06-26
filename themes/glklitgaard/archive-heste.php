<?php get_header(); ?>
<div class="horse-hero col-span-12 text-center">
    <h1 class="mt-60 text-6xl">Velkommen til</h1>
    <h1 class="mt-10 text-6xl text-secondary-brand-color">Vores heste</h1>
</div>
<img src="<?php echo get_theme_file_uri("/assets/images/sol.png") ?>" alt="" class="col-span-1 absolute top-2/4">
<div class="col-span-12 grid grid-cols-12 horse-intro -mt-5">
    <div class="col-start-4 col-span-6 text-center text-lg py-20 mt-10">
        <p>På Gl. Klitgaard camping er vi meget glade for den islandskhest. Vi har en lille flok på omkring 25 heste. som går fordelt på flere af vores mange store folde. Om sommeren kommer nogle ud i klitterne, helt ud til vandet, da det er her de har det bedst om sommeren.</p>
        <p>De fleste af hestene er det muligt at prøve en tur på, hvis du finder en som du synes er særlig sød, kom og prøv ham eller hende i din ferie hos os. De elsker at komme ud i naturen.</p>
    </div>
</div>
<div class="lg:hidden grid grid-cols-12 horse-sect col-span-12">
    <?php
    $hest = new WP_Query(array(
        'posts_per_page' => -1,
        'post_type' => 'Heste',
        'orderby' => 'date',
        'order' => 'ASC'
    ));

    while ($hest->have_posts()) {
        $hest->the_post();

    ?>
        <div class="grid grid-cols-12 col-span-12 mt-10">
            <img src="<?php the_post_thumbnail_url('horse') ?>" alt="" class="horse-img col-start-3 col-span-8 w-full">
            <div class="col-start-1 col-span-12 horse-container">
                <h2 class="text-center text-3xl font-normal mt-10"><?php the_title() ?></h2>
                <h3 class="font-normal text-center"><?php echo get_field("feif-id") ?></h3>
                <p class="text-lg"><?php echo get_field("desc") ?></p>
            </div>
        </div>
    <?php
    } 
    wp_reset_postdata();
    ?>
</div>
<div class="col-span-12 lg:grid hidden grid-cols-12 horse-sect">
    <?php
    $hest = new WP_Query(array(
        'posts_per_page' => -1,
        'post_type' => 'Heste',
        'orderby' => 'date',
        'order' => 'ASC'

    ));

    $index = 0;

    while ($hest->have_posts()) {
        $hest->the_post();
        // Determine staggered class: left for even index, right for odd index
        $class = ($index % 2 == 0) ? 'horse-left' : 'horse-right';
        // Add 'horseshoe' class to every other right-aligned post, starting with the first
        $special_class = ($index % 4 == 1) ? ' horseshoe' : '';
    ?>
        <div class="grid grid-cols-2 col-span-6 horse-container p-16 <?php echo $class . $special_class; ?>">
            <img src="<?php the_post_thumbnail_url('horse') ?>" alt="" class="horse-img row-span-1 row-start-1 col-start-1 col-span-1">
            <div class="col-start-2 mr-10">
                <h2><?php the_title() ?></h2>
                <h3 class="font-normal"><?php echo get_field("feif-id") ?></h3>
                <p class="text-lg"><?php echo get_field("desc") ?></p>
            </div>
        </div>
    <?php
        $index++;
    }
    ?>
    <p class="hidden horseshoeurl"><?php echo get_theme_file_uri("/assets/images/horseshoetrail.png") ?></p>
</div>
<div class="bottom-cta col-span-12 py-32 -mt-8 z-20 grid grid-cols-12">
    <div class="lg:col-start-1 lg:col-span-7 col-start-2 col-span-10 grid lg:grid-cols-11 grid-cols-9">
        <div class="lg:pt-6 lg:px-6 lg:pb-10 px-2 pt-2 bg-white lg:w-10/12 w-full row-start-1 row-span-1 lg:col-start-2 col-start-1 lg:col-span-4 col-span-3 -rotate-6 shadow-lg ">
            <img src="<?php echo get_theme_file_uri("/assets/images/ctaimg1.png") ?>" alt="" class="w-full h-3/5 object-cover">
        </div>
        <div class="lg:pt-6 lg:px-6 lg:pb-10 px-2 pt-2 bg-white lg:w-10/12 w-full row-start-1 row-span-1 lg:col-start-5 col-start-4 lg:col-span-4 col-span-3 rotate-12 shadow-lg">
            <img src="<?php echo get_theme_file_uri("/assets/images/ctaimg2.png") ?>" alt="" class="w-full h-3/5 object-cover">
        </div>
        <div class="lg:pt-6 lg:px-6 lg:pb-10 px-2 pt-2 bg-white lg:w-10/12 w-full row-start-1 row-span-1 lg:col-start-8 col-start-7 lg:col-span-4 col-span-3 shadow-lg -ml20 z-10">
            <img src="<?php echo get_theme_file_uri("/assets/images/ctaimg3.png") ?>" alt="" class="w-full h-3/5 object-cover">
        </div>

    </div>
    <div class="lg:col-start-8 lg:col-span-4 col-start-2 col-span-10 text-center my-auto lg:mt-0 mt-10">
        <h2 class="text-4xl">Vil du vide mere?</h2>
        <p class="text-lg">Har du spørgsmål til vores hest eller ønsker du at booke en ridetur på en af dem, så du velkommen til at kontakte os.</p>
        <a href="<?php echo get_site_url() . "/kontakt-os" ?>" class="knap"><button class="bg-main-interaction-color px-10 py-2 my-4 rounded-full">Kontakt os</button></a>
        <h3>Vi håber vi ses på Gl. Klitgaard Camping.</h3>
    </div>
</div>

<?php get_footer(); ?>