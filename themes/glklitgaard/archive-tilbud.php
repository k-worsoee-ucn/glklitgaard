<?php get_header() ?>
<section class="glk-hero col-span-12 text-center text-4xl">
    <h1 class="col-span-12 mt-20 text-6xl">Tilbud</h1>
    <h1 class="col-span-12 mt-10 text-secondary-brand-color text-6xl">Kristi himmelfartsferie</h1>
</section>
<div class="rating-sect col-span-12 -mt-10 py-20">
    <div class="lg:hidden grid grid-cols-12">
        <?php
        $tilbud = new WP_Query(array(
            'posts_per_page' => -1,
            'post_type' => 'Tilbud'
        ));

        while ($tilbud->have_posts()) {
            $tilbud->the_post();
        ?>
            <div class="col-span-12 col-start-1 grid grid-cols-12 mb-20">
                <img class="col-span-10 col-start-2 bg-white px-5 pt-5 pb-32 w-full" src="<?php the_post_thumbnail_url("small-thumb") ?>" alt="">
                <div class="paper col-span-12 p-10 grid">
                    <h3 class="ml-16 font-normal text-3xl"><?php echo the_field("title") ?></h3>
                    <p class="ml-16 mt-16 text-lg"><?php echo the_field("desc") ?></p>
                    <p class="ml-16 mb-16 mt-10 font-bold text-2xl text-right"><?php echo the_field("offer") ?></p>
                    <a class="knap bg-main-interaction-color px-10 py-2 rounded-full mx-auto font-bold text-lg" href="#">Book tilbudet</a>
                </div>
            </div>
        <?php
        } 
        wp_reset_postdata();
        ?>
    </div>
    <div class="lg:grid grid-cols-12 hidden">
        <?php
        $tilbud = new WP_Query(array(
            'posts_per_page' => -1,
            'post_type' => 'Tilbud'
        ));

        $i = 1;
        while ($tilbud->have_posts()) {
            $tilbud->the_post();
            if ($i % 2 != 0) {
        ?>
                <div class="col-span-8 col-start-2 grid grid-cols-8">
                    <img class="col-span-2 bg-white px-5 pt-5 pb-32 w-full" src="<?php the_post_thumbnail_url("small-thumb") ?>" alt="">
                    <div class="paper col-span-5 p-10">
                        <h3 class="ml-16 font-normal text-3xl"><?php echo the_field("title") ?></h3>
                        <p class="ml-16 mt-16 text-lg"><?php echo the_field("desc") ?></p>
                        <p class="ml-16 mb-16 mt-10 font-bold text-2xl text-right"><?php echo the_field("offer") ?></p>
                        <a class="!ml-64 knap " href="#"><button class="bg-main-interaction-color px-10 py-2 rounded-full mx-auto font-bold text-lg">Book tilbudet</button></a>
                    </div>
                </div>
            <?php
                $i = $i + 1;
            } else {
            ?>
                <div class="col-span-8 col-start-5 grid grid-cols-8">
                    <div class="paper-rev col-span-5 p-10">
                        <h3 class="ml-16 font-normal text-3xl"><?php echo the_field("title") ?></h3>
                        <p class="ml-16 mt-16 text-lg"><?php echo the_field("desc") ?></p>
                        <p class="ml-16 mb-16 mt-10 font-bold text-2xl text-right"><?php echo the_field("offer") ?></p>
                        <a class="!ml-64 knap " href="#"><button class="bg-main-interaction-color px-10 py-2 rounded-full mx-auto font-bold text-lg">Book tilbudet</button></a>
                    </div>
                    <img class="col-span-2 bg-white px-5 pt-5 pb-32 w-full" src="<?php the_post_thumbnail_url("small-thumb") ?>" alt="">
                </div>
            <?php
                $i = $i + 1;
            }
            ?>

        <?php
        }
        ?>
        <div class="col-span-12 grid grid-cols-12 gap-32 my-20">
            <div class="drop-shadow bg-yellow-100 grid grid-cols-1 lg:grid-cols-1 md:grid-cols-1 lg:col-start-2 col-span-4 col gap-5 gap-y-15 shadow-sm relative w-10/12 mx-auto px-20 -rotate-6">
                <div class="col-start-1 md:col-span-2 lg:col-span-1 h-10 lg:h-6 absolute bg-yellow-800 opacity-20 row-start-1 row-span-1 w-full"></div>
                <h3 class="row-start-1 mt-14 text-center font-normal text-2xl">Alle tilbud inkluderer:</h3>
                <ul class="offer-points row-start-2">
                    <li>Vær med til fodring i Mini-Zoo'en.</li>
                    <li>Trækketure på Islandske Heste, på ridebanen.</li>
                    <li>Fodboldkamp.</li>
                    <li>Petanque turnering.</li>
                </ul>
                <div class="absolute inline-flex w-full top-full lg:col-span-2 flex-nowrap -mt-0.5">
                    <div class="bg-yellow-100 h-10 w-full -mr-0.5 pr-0.5"></div>
                    <svg class="h-10 w-10 -rotate-90" width="59" height="57" viewBox="0 0 59 57" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M58.5 0.819336L58.5 56.5L0.0952523 0.819356L58.5 0.819336Z" class="fill-yellow-200" />
                    </svg>
                </div>
            </div>
            <div class="offerClause col-start-8 col-span-4">
                <p class="py-20 px-14">Ovennævnte priser for hytter er endvidere ekskl. evt. slutrengøring. Slutrengøring kan købes (Priser mellem Kr. 350,- og Kr. 750,- alt efter hytte type). Man er velkommen til at spare denne udgift og selv rengøre hytten ved afrejse. Der er rengøringsmiddel og grej i hytterne.</p>
            </div>
        </div>
    </div>
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
        <a href="#" class="knap"><button class="bg-main-interaction-color px-10 py-2 my-4 rounded-full">Kontakt os</button></a>
        <h3>Vi håber vi ses på Gl. Klitgaard Camping.</h3>
    </div>
</div>
<?php get_footer() ?>