<?php get_header();?>
<section class="bg-gray-200 wavey-section">

<h1 class="text-center text-3xl"><?php echo post_type_archive_title( '', false );?></h1>
</section>
<div class="h-fit w-full rip bg-white fill-gray-200 rotate-180">
        <?php echo file_get_contents( get_theme_file_uri("/assets/svg/Paper-rip.svg")); ?>
</div>
<section class="bg-yellow-100 w-full h-full -mt-6 pb-24">
        <img class="opacity-25 absolute h-full w-full top-0 left-0 object-cover" src="<?php echo get_theme_file_uri("/assets/images/crumpled-paper.jpg")?>">
        <hr class="hidden-push">
    <?php $Sted = new WP_Query(array(
    'posts_per_page'    => -1,
    'orderby'    => "meta_key=kilometer_vaek", //find værdien på hvor langt væk stedet er
    'post_type' => "Sevaerdigheder",
    'order' => 'ASC', // og sorter efter afstand, fra lavest til højest.
));
while($Sted->have_posts()){
    $Sted->the_post();?>
    <div class="drop-shadow bg-gray-100 grid grid-cols-1 lg:grid-cols-2 md:grid-cols-2 gap-5 gap-y-15 mt-8 shadow-sm relative w-10/12 lg:w-8/12 mx-auto">
            <a class="simple-pic-drop min-h-60 relative -top-5 -left-5 h-2/3 w-auto max-h-20 z-20 col-start-1 row-start-1" href="<?php echo post_permalink();/*henter det link til postens enkel side*/?>">
                <div class="absolute w-fit left-1/2 right-1/2 -top-5 -translate-x-1/2 z-10">
                    <?php echo file_get_contents( get_theme_file_uri("/assets/svg/tac.svg"));//henter og indsætter inholdet fra theme mappen/assets/svg/tac ?>
                </div>
                <img class="drop-shadow-sm h-full min-h-60 md:min-h-52 lg:min-h-40 w-full object-cover" src="<?php echo the_post_thumbnail_url(); // udskriver url'en for billede brugt til thumbnailen?>" alt="<?php the_title(); //Postens titel :)?>">
            </a>
            <?php if(get_field("sevaerdigheds_logo")){?>
                <a class="duration-300 ease-in-out hover:scale-110 col-start-1 w-10/12 md:w-8/12 lg:w-6/12 mx-auto mt-64 row-start-1" href="<?php echo get_field("link_til_sted"); ?>"><img class="w-full h-auto object-contain" src="<?php echo get_field("sevaerdigheds_logo"); ?>" alt="<?php echo get_the_title() ?>"></a>
            <?php };?>
            <div class="col-start-1 md:col-span-2 lg:col-span-2 h-10 lg:h-6 absolute bg-gray-950 opacity-35 row-start-1 row-span-1 w-full" ></div>
            <div class="mt-3 md:mt-10 lg:mt-7 w-10/12 mx-auto md:mx-0 lg:mx-0 md:min-h-40 lg:min-h-32 flex flex-col h-full justify-around md:mb-4">
                <h3 class="text-center h-fit text-lg mb-3"><?php the_title(); ?></h3>
                <?php the_content(); ?>
            <div class="lg:col-span-2 md:col-span-2 w-full h-fit my-3 knap px-3 py-1 text-center mt-3 z-10">
                <a href="<?php echo get_field("link_til_sted");?>" class=" mb-5 text-center w-full mt-auto font-semibold">besøg <?php echo get_the_title() ?>'s hjemmeside</a>
            </div>
            <div class="absolute inline-flex w-full left-0 top-full lg:col-span-2 flex-nowrap -mt-0.5">
                <div class="bg-gray-100 h-10 w-full -mr-0.5 pr-0.5"></div>
                <svg class="h-10 w-10 -rotate-90" width="59" height="57" viewBox="0 0 59 57" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M58.5 0.819336L58.5 56.5L0.0952523 0.819356L58.5 0.819336Z" class="fill-gray-200"/>
                </svg>
            </div>
        </div>

<?php }?>
</section>
<section class="w-full relative bg-gray-200 pb-24">
<div class="h-fit w-full rip  fill-gray-200 absolute bottom-full mt-3 z-20">
        <?php echo file_get_contents( get_theme_file_uri("/assets/svg/Paper-rip.svg")); ?>
</div>
<div class="lg:w-8/12 md:w-9/12 w-10/12 mx-auto">
    <?php echo do_shortcode("[display-map id='233']"); ?>
</div>
</section>
<?php get_footer(); ?>