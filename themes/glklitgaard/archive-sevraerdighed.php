<?php get_header();?>
<section class="bg-gray-200 wavey-section">

<h1 class="text-center text-3xl"><?php echo post_type_archive_title( '', false );?></h1>
</section>
<div class="h-fit w-full rip bg-white fill-gray-200">
        <?php echo file_get_contents( get_theme_file_uri("/assets/svg/Paper-rip.svg")); ?>
</div>
<section>
    <?php $Sted = new WP_Query(array(
    'posts_per_page'    => -1,
    'orderby'    => "meta_key=kilometer_vaek", //find værdien på hvor langt væk stedet er
    'post_type' => "sevraerdighed",
    'order' => 'ASC', // og sorter efter afstand, fra lavest til højest.
)); // https://interactivegeomaps.com/
while($Sted->have_posts()){
    $Sted->the_post();?>
    <div class="drop-shadow bg-gray-100 grid grid-cols-1 lg:grid-cols-2 md:grid-cols-2 gap-5 gap-y-15 shadow-sm relative w-10/12 lg:w-8/12 mx-auto">
            <a class="simple-pic-drop min-h-60 relative -top-5 -left-5 h-2/3 w-auto max-h-20 z-10" href="<?php echo post_permalink();/*henter det link til postens enkel side*/?>">
                <div class="absolute w-fit left-1/2 right-1/2 -top-5 -translate-x-1/2 z-20" >
                    <?php echo file_get_contents( get_theme_file_uri("/assets/svg/tac.svg"));//henter og indsætter inholdet fra theme mappen/assets/svg/tac ?>
                </div>
                <img class="drop-shadow-sm h-full min-h-60 md:min-h-52 lg:min-h-40 w-full object-cover" src="<?php echo the_post_thumbnail_url(); // udskriver url'en for billede brugt til thumbnailen?>" alt="<?php the_title(); //Postens titel :)?>">
            </a>
            <div class="col-start-1 md:col-span-2 lg:col-span-2 h-10 lg:h-6 absolute bg-gray-950 opacity-35 row-start-1 row-span-1 w-full" ></div>
            <div class="mt-40 md:mt-10 lg:mt-7 w-10/12 mx-auto md:mx-0 lg:mx-0 md:min-h-40 lg:min-h-32">
                <h3 class="text-center h-fit text-lg"><?php the_title(); ?></h3>
                <?php the_content(); ?>
            <div class="lg:col-span-2 md:col-span-2 w-8/12 mx-auto inline-flex justify-between">
                <a href="<?php echo get_field("link_til_sted");?>" class="knap mb-5 text-center px-3 py-1 mx-auto mt-auto font-semibold">besøg <?php echo get_the_title() ?>'s hjemmeside</a>
            </div>
            <div class="absolute inline-flex w-full top-full lg:col-span-2 flex-nowrap -mt-0.5">
                <div class="bg-gray-100 h-10 w-full -mr-0.5 pr-0.5"></div>
                <svg class="h-10 w-10 -rotate-90" width="59" height="57" viewBox="0 0 59 57" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M58.5 0.819336L58.5 56.5L0.0952523 0.819356L58.5 0.819336Z" class="fill-gray-200"/>
                </svg>
            </div>
        </div>

<?php }?>
</section>
<?php get_footer(); ?>