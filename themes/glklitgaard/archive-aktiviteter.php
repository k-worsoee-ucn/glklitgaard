<?php get_header() ?>
<div class="mt-40 col-span-12 text-center">
    <h1 class="text-4xl">Kommende aktiviteter på</h1>
    <h1 class="text-4xl text-secondary-brand-color">Gl. Klitgaard Camping & Hytteby</h1>
</div>
<div class="wave-sect py-32 col-span-12">
    <div class="grid lg:grid-cols-3 grid-cols-2 lg:gap-32 lg:mx-32">
    <?php
    $activities = new WP_Query(array(
        'posts_per_page' => -1,
        'post_type' => 'Aktiviteter',
        'meta_query' => array(
            'relation' => 'AND',
            'date' => array(
                'key' => 'date',
                'type' => 'DATE',
            ),
            'time_from' => array(
                'key' => 'time_from',
                'type' => 'TIME',
            ),
        ),
        'orderby' => array(
            'date' => 'ASC',
            'time_from' => 'ASC'
        )
    ));

    while ($activities->have_posts()) {
        $activities->the_post();
    ?>

        <div class="bg-white lg:pt-10 pt-2 lg:pb-10 pb-5 lg:px-10 px-2 col-span-1 w-full shadow-lg mx-auto grid mb-10 lg:mb-0">
            <img src="<?php echo the_post_thumbnail_url("small-thumb") ?>" alt="" class="w-full">
            <h2 class="text-center text-2xl my-5"><?php the_title() ?></h2>
            <p class="text-xl"><?php the_field("date")?> - <?php the_field("time_from") ?></p>
            <p class="text-xl">Pris: <?php the_field("price") ?></p>
            <a href="<?php echo get_the_permalink()?>" class="mt-5 knap bg-main-interaction-color px-10 py-2 rounded-full mx-auto font-bold text-lg">Læs mere</a>
        </div>
    <?php
    }
    ?>
    </div>
</div>
<?php get_footer() ?>