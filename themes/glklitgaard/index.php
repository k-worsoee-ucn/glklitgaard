<!--mest basic side. hvis der ikke er andre templates der passer ind, så bruges den her.-->

<?php get_header();
?>
<section class="bg-gray-200 wavey-section z-10 pt-16">
<h1 class="text-center py-6"><?php the_title();?></h1>
</section>
<div class="h-fit w-full rip fill-gray-200 -mb-10">
        <?php echo file_get_contents( get_theme_file_uri("/assets/svg/Paper-rip.svg")); ?>
</div>
<section class="bg-gray-200 wavey-section relative w-full z-20 py-10">
        <div class="w-full rip rotate-180 absolute bottom-full h-6 -top-6 fill-gray-200">
            <?php echo file_get_contents( get_theme_file_uri("/assets/svg/Paper-rip.svg")); ?>
        </div>
        <div class="max-w-10/12 md:max-w-9/12 lg:max-w-7/12 w-fit mx-auto my-10">
            <?php echo get_the_content();?>
        </div>
        <div class="Waves absolute top-5 h-fit overflow-x-hidden w-full -z-10 ease-linear duration-150">    
            <?php echo file_get_contents( get_theme_file_uri("/assets/svg/Wave.svg")); ?>
        </div>
    <hr class="hidden-push">
</section>
<?php get_footer();?>