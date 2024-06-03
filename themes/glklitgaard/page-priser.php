<?php get_header() ?>
<section class="glk-hero col-span-12">
</section>
<h1 class="col-span-12 mt-10 py-10 text-6xl text-center"><?php the_title() ?></h1>
<div class="col-span-12 grid grid-cols-12 horse-intro -mt-5">
    <div class="col-start-3 col-span-8 text-center text-lg py-20 mt-10">
        <p>På Gl. Klitgaard er fokusset på at komme tæt på den dejlige natur og selskabbet, så vi prøver at holde priserne så langt ned vi kan, så de felste folk kan komme og nyde vesterkysten.</p>
        <p class="mt-20 mb-10">Alle priser kan findes på siden "Vores priser" eller ved at klikke på knappen her under.</p>
        <a class="knap bg-main-interaction-color mt-5 px-10 py-2 rounded-full mx-auto font-bold text-lg" href="<?php echo get_site_url() . "/vores-priser" ?>">Se vores priser her</a>
    </div>
</div>
<div class="rating-sect col-span-12 -mt-10 py-20">
    <h2 class="text-4xl text-center">Kommende tilbud</h2>
    <div class="grid lg:grid-cols-3 lg:gap-32 gap-10 mx-20 pt-10">
        <div class="bg-white grid px-5 pt-5 pb-5">
            <img src="<?php echo get_theme_file_uri("/assets/images/pasketilbud.png") ?>" alt="" class="w-full">
            <div class="grid">
                <h3 class="text-2xl text-center mt-5">Påske tilbud</h3>
                <p class="mb-5 text-center">Gældende fra d. 22. marts til d. 1. april 2024.</p>
                <a class="knap bg-main-interaction-color px-10 py-2 rounded-full mx-auto font-bold text-lg" href="<?php echo get_site_url() . "/paske-tilbud" ?>">Se tilbud</a>
            </div>
        </div>
        <div class="bg-white grid px-5 pt-5 pb-5">
            <img src="<?php echo get_theme_file_uri("/assets/images/krhimmeltilbud.png") ?>" alt="" class="w-full">
            <div class="grid">
                <h3 class="text-2xl text-center pt-5">Kr. himmelfarts tilbud</h3>
                <p class="mb-5 text-center">Gældende fra d. 8. maj til d. 12. maj 2024.</p>
                <a class="knap bg-main-interaction-color px-10 py-2 rounded-full mx-auto font-bold text-lg" href="<?php echo get_site_url() . "/krhimmelfarts-tilbud" ?>">Se tilbud</a>
            </div>
        </div>
        <div class="bg-white grid px-5 pt-5 pb-5">
            <img src="<?php echo get_theme_file_uri("/assets/images/pinsetilbud.png") ?>" alt="" class="w-full">
            <div class="grid">
                <h3 class="text-2xl text-center pt-5">Pinse tilbud</h3>
                <p class="mb-5 text-center">Gældende fra d. 13. maj til d. 26. maj 2024</p>
                <a class="knap bg-main-interaction-color px-10 py-2 rounded-full mx-auto font-bold text-lg" href="<?php echo get_site_url() . "/pinse-tilbud" ?>">Se tilbud</a>
            </div>
        </div>
    </div>
</div>
<?php get_footer() ?>