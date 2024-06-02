<?php get_header() ?>
<div class="singleact-hero col-span-12">
    <div class="singleact-hero-h p-20 absolute h-60">
        <h1 class="text-4xl wrap max-w"><?php the_title() ?></h1>
    </div>
    <img src="<?php the_post_thumbnail_url() ?>" alt="" class="w-full object-cover">
</div>
<div class="col-span-12 grid grid-cols-12 horse-intro -mt-5 z-10 lg:py-20">
    <div class="lg:col-start-2 col-start-2 lg:col-span-6 col-span-10 lg:text-center text-left text-lg mt-10">
        <p><?php the_field("desc")?></p>
    </div>
    <div class="singleact-paper lg:col-start-9 col-start-2 lg:col-span-4 col-span-11 lg:pt-10 pt-5 lg:pb-10 lg:pl-20 pl-10 grid lg:gap-5 w-full mt-5 lg:mt-0 mb-10 lg:mb-0">
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
<div class="col-span-12 h-44 bg-[#F4F4F4] -mt-5"></div>
<?php get_footer() ?>