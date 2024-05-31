<?php get_header() ?>
<section class="hestpaaferie-hero col-span-12 text-center text-4xl">
    <h1 class="col-span-12 mt-32 text-6xl"><?php the_title() ?></h1>
</section>
<div class="col-span-12 grid grid-cols-12 horse-intro -mt-5">
    <div class="col-start-4 col-span-6 text-center text-lg py-20 mt-10">
        <p>Som en af de få campingpladser i Danmark tilbyder vi, at man kan tage sin egen hest med på camping - Det være sig i enten kortere eller længere perioder.</p>
    </div>
    <div class="col-span-12 grid grid-cols-3 gap-10 mx-10">
        <div class="bg-white px-10 pt-10 pb-20 col-start-1 w-9/12 shadow-lg -rotate-12 grid text-center ml-20 z-10">
            <img class="aspect-square object-cover" src="<?php echo get_theme_file_uri("/assets/images/folde.png") ?>" alt="">
            <h2 class="text-4xl mt-10">Folde</h2>
            <p class="text-lg">pr. overnatning pr. hest 75,-</p>
        </div>
        <div class="bg-white px-10 pt-10 pb-20 col-start-2 w-9/12 shadow-lg rotate-12 grid text-center -ml-10">
            <img class="aspect-square object-cover" src="<?php echo get_theme_file_uri("/assets/images/bokse.png") ?>" alt="">
            <h2 class="text-4xl mt-10">Bokse</h2>
            <p class="text-lg">pr. overnatning pr. hest 150,-</p>
        </div>
        <p class="text-xl mr-40 my-auto">Din hest kommer til at gå på fold alene, eller hvis du har flere heste med, kan de gå på en lidt større fold sammen. Der er også et begrænset antal bokse til rådighed.</p>
    </div>
</div>
<img src="<?php echo get_theme_file_uri("/assets/images/sol.png") ?>" alt="" class="col-span-1 absolute top-2/4 z-20">
<?php get_footer() ?>