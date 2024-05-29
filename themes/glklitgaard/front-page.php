<?php get_header() ?>
<section class="fp-hero col-span-12 text-center text-4xl">
    <h1 class="col-span-12 mt-32">Velkommen til</h1>
    <h1 class="col-span-12 text-secondary-brand-color">Gl. Klitgaard Camping & Hytteby</h1>
</section>
<img src="<?php echo get_theme_file_uri("/assets/images/sol.png") ?>" alt="" class="col-span-1 absolute top-2/4 z-20">
<section class="fp-welcome col-span-12 grid grid-cols-12 text-center z-10 pb-16 -mt-5">
    <p class="col-start-4 col-span-6 text-lg mt-12">
        Gl. Klitgaard Camping er en smukt beliggende campingplads ved det dejlige Vesterhav med en skøn strand, perfekt til aktiviteter. Stemningen er afslappet og imødekommende, hvor der er plads til alle. Om du bare vil ud i naturen, ride heste, bare vil deltage i vores aktiviteter eller besøge vores Mini-Zoo.
    </p>
    <p class="col-start-4 col-span-6 text-lg">Vi tilbyder et bredt udvalg af hytter, campingvogne og telte.</p>
    <p class="col-start-4 col-span-6 text-lg mb-12">Vi håber at byde jer velkommen!</p>
</section>
<section class="fp-news-container col-start-1 col-span-12 grid grid-cols-12 z-20">
    <img src="<?php echo get_theme_file_uri("/assets/images/newsbg.png") ?>" alt="" class="col-start-1 col-span-12 -z-10 row-start-1 row-span-1 w-full -mt-36">
    <div class="fp-news col-start-3 col-span-9 grid grid-cols-10 w-full pb-52 row-start-1 row-span-1">
        <div class="col-span-10 grid grid-cols-10 pt-44">
            <img src="https://unsplash.it/400" alt="" class="col-start-2 col-span-3 bg-white pt-6 px-6 pb-40 -rotate-6 shadow-md row-span-1 row-start-1 w-8/12 mr-28">
            <div class="col-start-5 col-span-4 row-span-1 row-start-1 grid grid-cols-4">
                <h3 class="text-4xl col-span-4">Kr. Himmelfarts Tilbud</h3>
                <p class="col-span-4 text-lg">Vi vil gerne give muligheden for jer og jeres nærmeste til at nyde de dejlige nye sommer dage og helligdage sammen i den dejlige natur, i nærheden af det kølige Vesterhav for at have mulighed for at køle ned.</p>
                <p class="col-span-4 text-lg">Alle tilbuddene er gældende fra d. 8. maj til d. 12. maj 2024. </p>
                <a href="#" class="col-start-2 col-span-2 w-9/12"><button class="bg-main-interaction-color px-10 py-2 rounded-full mx-auto">Læs mere</button></a>
            </div>
        </div>
        <div class="col-span-10 grid grid-cols-10 pt-28">
            <img src="https://unsplash.it/400" alt="" class="col-start-6 col-span-3 bg-white pt-6 px-6 pb-40 rotate-6 shadow-md row-span-1 row-start-1 w-8/12 ml-28">
            <div class="col-start-2 col-span-4 row-span-1 row-start-1 grid grid-cols-4">
                <h3 class="text-4xl col-span-4">Kr. Himmelfarts Tilbud</h3>
                <p class="col-span-4 text-lg">Vi vil gerne give muligheden for jer og jeres nærmeste til at nyde de dejlige nye sommer dage og helligdage sammen i den dejlige natur, i nærheden af det kølige Vesterhav for at have mulighed for at køle ned.</p>
                <p class="col-span-4 text-lg">Alle tilbuddene er gældende fra d. 8. maj til d. 12. maj 2024. </p>
                <a href="#" class="col-start-2 col-span-2 w-9/12"><button class="bg-main-interaction-color px-10 py-2 rounded-full mx-auto">Læs mere</button></a>
            </div>
        </div>
    </div>
</section>
<section class="col-span-12 grid grid-cols-12 fam-kallmayer -mt-10 z-20">
    <img src="<?php echo get_theme_file_uri("/assets/images/famkallmayer.png") ?>" alt="" class="col-span-6 -mt-20 w-full">
    <div class="col-span-6 mx-10 text-center grid grid-rows-5 fam-wave">
        <h2 class="text-4xl font-normal row-start-1 mt-28">Vi er Familien Kallmayer</h2>
        <div class="row-start-2 text-lg">
            <p>
                I 2005 valgte vores familie at forfølge vores drøm om at drive en campingplads. Efter at have overvejet flere muligheder, fandt vi os selv forelskede i Gl. Klitgaard Camping. Vi forlod vores jobs og kastede os ud i det ukendte.
            </p>
            <p class="mt-10">
                17 år senere er campingpladsen blevet vores hjem og arbejdsplads, hvor vi nyder livet blandt glade mennesker. Vores børn, Jonas, Maja og Emil, har også bidraget til pladsen gennem årene, hvilket har været en berigende oplevelse for os alle.
            </p>
        </div>
        <div class="row-start-3 mt-10">
            <a href=""><button class="bg-main-interaction-color px-10 py-2 rounded-full mx-auto">Læs mere om os</button></a>
        </div>
        <h3 class="row-start-4 mx-auto font-bold">Vi håber vi ses på Gl. Klitgaard Camping.</h3>
    </div>
</section>
<section class="col-span-12 py-40 weatherAndActivities -mt-52 z-20">
    <h2 class="row-start-1 row-span-1 col-span-5 text-center text-4xl font-normal mt-20">Kommende vejr</h2>
    <div class="forecastContainer grid gap-10 mx-40 mt-10"></div>
    <div class="mt-20">
        <h2 class="text-center text-4xl font-normal">Kommende aktiviteter</h2>
        <div class="grid grid-cols-3 gap-10 mx-80">
            <?php
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $aktiviteter = new WP_Query(array(
                'posts_per_page' => 3,
                'paged' => $paged,
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

            while ($aktiviteter->have_posts()) {
                $aktiviteter->the_post();
            ?>
                <div class="bg-white pt-5 px-5 pb-10 shadow-lg">
                    <img src="<?php echo the_post_thumbnail_url() ?>" alt="" class="aspect-square object-cover">
                    <h2 class="mt-5"><?php echo the_title() ?></h2>
                    <p><?php echo the_field("date") ?> - <?php echo the_field("time_from") ?></p>
                    <p>Pris: <?php echo the_field("price") ?></p>
                    <a class="mx-24" href=""><button class="bg-main-interaction-color mt-5 px-10 py-2 rounded-full mx-auto font-bold text-lg">Læs mere</button></a>
                </div>
            <?php
            }
            the_posts_pagination(array(
                'mid_size'  => 2,
                'prev_text' => __('Back', 'textdomain'),
                'next_text' => __('Onward', 'textdomain'),
            ));
            wp_reset_postdata();
            ?>
        </div>
        <div class="text-center grid grid-cols-12 mt-10">
            <p class="text-lg col-start-5 col-span-4 row-start-1 mx-20">Vi har altid noget i gang hos Gl. Klitgaard, hesteridning, dyre fodring, med mere.</p>
            <a class="col-start-6 col-span-2 row-start-2" href=""><button class="bg-main-interaction-color mt-5 px-10 py-2 rounded-full mx-auto font-bold text-lg">Se alle vores aktiviteter</button></a>
        </div>
        <div class="grid grid-cols-12">
            <h2 class="text-center text-5xl font-normal col-span-12">Hvad synes andre?</h2>
            <img src="<?php echo get_theme_file_uri("/assets/logos/TripAdvisor_Logo.png") ?>" alt="" class="col-start-3 col-span-3 h-full row-start-2 row-span-1 mx-auto">
            <div class="grid grid-cols-5 col-start-3 col-span-3 mx-auto w-2/5">
                <img src="<?php echo get_theme_file_uri("/assets/svg/star_filled.svg") ?>" alt="">
                <img src="<?php echo get_theme_file_uri("/assets/svg/star_filled.svg") ?>" alt="">
                <img src="<?php echo get_theme_file_uri("/assets/svg/star_filled.svg") ?>" alt="">
                <img src="<?php echo get_theme_file_uri("/assets/svg/star_filled.svg") ?>" alt="">
                <img src="<?php echo get_theme_file_uri("/assets/svg/star_empty.svg") ?>" alt="">
            </div>
            <img src="<?php echo get_theme_file_uri("/assets/logos/Google_2015_logo.png") ?>" alt="" class="col-start-8 col-span-3 h-full row-start-2 row-span-1 mx-auto">
            <div class="grid grid-cols-5 col-start-8 col-span-3 mx-auto w-2/5">
                <img src="<?php echo get_theme_file_uri("/assets/svg/star_filled.svg") ?>" alt="">
                <img src="<?php echo get_theme_file_uri("/assets/svg/star_filled.svg") ?>" alt="">
                <img src="<?php echo get_theme_file_uri("/assets/svg/star_filled.svg") ?>" alt="">
                <img src="<?php echo get_theme_file_uri("/assets/svg/star_filled.svg") ?>" alt="">
                <img src="<?php echo get_theme_file_uri("/assets/svg/star_empty.svg") ?>" alt="">
            </div>
            <div class="reviews col-span-12 grid grid-cols-5 gap-24 mx-24 mt-20"></div>
        </div>
        <p class="theme_url hidden"><?php echo get_theme_file_uri() ?></p>
    </div>
</section>
<div class="bottom-cta col-span-12 py-32 -mt-8 z-20 grid grid-cols-12">
    <div class="col-start-1 col-span-7 grid grid-cols-11">
        <div class="pt-6 px-6 pb-10 bg-white w-10/12 row-start-1 row-span-1 col-start-2 col-span-4 -rotate-6 shadow-lg ">
            <img src="<?php echo get_theme_file_uri("/assets/images/ctaimg1.png") ?>" alt="" class="w-full h-3/5 object-cover">
        </div>
        <div class="pt-6 px-6 pb-10 bg-white w-10/12 row-start-1 row-span-1 col-start-5 col-span-4 rotate-12 shadow-lg">
            <img src="<?php echo get_theme_file_uri("/assets/images/ctaimg2.png") ?>" alt="" class="w-full h-3/5 object-cover">
        </div>
        <div class="pt-6 px-6 pb-10 bg-white w-10/12 row-start-1 row-span-1 col-start-8 col-span-4 shadow-lg -ml20 z-10">
            <img src="<?php echo get_theme_file_uri("/assets/images/ctaimg3.png") ?>" alt="" class="w-full h-3/5 object-cover">
        </div>
        
    </div>
    <div class="col-start-8 col-span-4 text-center my-auto">
        <h2 class="text-4xl">Vil du vide mere?</h2>
        <p class="text-lg">Har du spørgsmål til vores hest eller ønsker du at booke en ridetur på en af dem, så du velkommen til at kontakte os.</p>
        <a href="#" class="button"><button class="bg-main-interaction-color px-10 py-2 my-4 rounded-full">Kontakt os</button></a>
        <h3>Vi håber vi ses på Gl. Klitgaard Camping.</h3>
    </div>
</div>
<?php get_footer() ?>