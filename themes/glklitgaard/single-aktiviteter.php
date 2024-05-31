<?php get_header() ?>
<div class="singleact-hero col-span-12">
    <div class="singleact-hero-h p-20 absolute h-60">
        <h1 class="text-4xl wrap max-w"><?php the_title() ?></h1>
    </div>
    <img src="<?php the_post_thumbnail_url() ?>" alt="" class="w-full object-cover">
</div>
<div class="col-span-12 grid grid-cols-12 horse-intro -mt-5 z-10 py-20">
    <div class="col-start-2 col-span-6 text-center text-lg mt-10">
        <p><?php the_field("desc")?></p>
    </div>
    <div class="singleact-paper col-start-9 col-span-4 pt-10 pb-10 pl-20 grid gap-5 w-full">
        <h2 class="text-4xl font-normal">Info</h2>
        <div>
            <h3 class="">Dato:</h3>
            <p><?php the_field("date") ?></p>
        </div>
        <div>
            <h3>Tidspunkt:</h3>
            <p><?php the_field("time_from")?> - <?php the_field("time_to") ?></p>
        </div>
        <div>
            <h3>Lokation:</h3>
            <p><?php the_field("location") ?></p>
        </div>
    </div>
</div>
<?php get_footer() ?>