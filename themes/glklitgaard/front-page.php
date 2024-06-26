<?php get_header() ?>
<section class="fp-hero col-span-12 text-center">
    <h1 class="lg:mt-32 sm:mt-10 text-secondary-brand-color text-4xl">Gl. Klitgaard Camping & Hytteby</h1>
    <h2 class="text-2xl">Skøn natur, Vesterhavet, aktiviter og plads til alle</h2>
</section>
<img src="<?php echo get_theme_file_uri("/assets/images/sol.png") ?>" alt="" class="col-span-1 absolute top-2/4 z-20 hidden lg:block">
<section class="fp-welcome col-span-12 grid grid-cols-12 text-center z-10 lg:pb-16 pb-28 -mt-5">
    <p class="lg:col-start-4 lg:col-span-6 col-start-2 col-span-10 text-lg mt-12">
        Gl. Klitgaard Camping er en <b>smukt beliggende</b> campingplads ved det <b>dejlige Vesterhav</b> med en <b>skøn strand</b>, perfekt til <b>aktiviteter</b>. Stemningen er <b>afslappet</b> og <b>imødekommende</b>, hvor der er <b>plads til alle</b>. Om du bare vil ud i <b>naturen</b>, <b>ride heste</b>, bare vil deltage i vores aktiviteter eller besøge vores <b>Mini-Zoo</b>.
    </p>
    <p class="col-start-4 col-span-6 text-lg">Vi tilbyder et bredt udvalg af hytter, campingvogne og telte.</p>
    <p class="col-start-4 col-span-6 text-lg mb-12">Vi håber at byde jer velkommen!</p>
</section>
<section class="fp-news-container col-start-1 col-span-12 grid grid-cols-12 z-20 mt-20">
    <img src="<?php echo get_theme_file_uri("/assets/images/newsbg.png") ?>" alt="" class="col-start-1 col-span-12 -z-10 row-start-1 row-span-3 lg:h-full w-full object-cover lg:-mt-36 -mt-52">
    <h2 class=" cpnews text-4xl row-start-2 col-start-1 col-span-12 text-center -mt-40">Nyt på campingpladsen</h2>
    <div class="fp-news lg:col-start-3 lg:col-span-9 col-start-2 col-span-10 grid grid-cols-10 w-full lg:pb-64 row-start-3 row-span-1 lg:-mt-52">
        <?php
        $tilbud = new WP_Query(array(
            'posts_per_page' => 1,
            'post_type' => 'krhimmelfarts-tilbud',
            'meta_query' => array(
                'date' => array(
                    'key' => 'date_from',
                    'compare' => 'EXISTS',
                    'type' => 'DATE',
                ),
            ),
            'orderby' => array(
                'date' => 'ASC',
            ),
            'meta_key' => 'date_from'
        ));

        while ($tilbud->have_posts()) {
            $tilbud->the_post();
        ?>
            <div class="col-span-10 grid grid-cols-10 lg:pt-60">
                <img src="<?php echo the_post_thumbnail_url("small-thumb") ?>" alt="" class="lg:col-start-2 lg:col-span-3 col-start-1 col-span-10 bg-white pt-6 px-6 lg:pb-40 pb-60 lg:-rotate-6 shadow-md lg:row-span-1 lg:row-start-1 lg:w-8/12 lg:mr-28 w-full">
                <div class="lg:col-start-5 lg:col-span-4 lg:row-span-1 col-start-2 col-span-8 lg:row-start-1 grid grid-cols-4 row-start-2 -mt-60 lg:-mt-0">
                    <h3 class="lg:text-4xl text-xl text-center lg:text-left col-span-4"><?php the_title() ?></h3>
                    <p class="col-span-4 lg:text-lg"><?php the_field("desc") ?></p>
                    <p class="col-span-4 lg:text-lg"><?php the_field("offer") ?></p>
                    <a href="<?php echo get_site_url() . "/priser" ?>" class="col-start-2 col-span-2 knap text-center h-fit py-3 lg:mt-0 mt-10">Læs mere</a>
                </div>
            </div>
        <?php
        }

        wp_reset_postdata();

        $news = new WP_Query(array(
            'posts_per_page' => 1,
            'post_type' => 'Nyheder',
            'orderby' => array(
                'date' => 'DESC'
            )
        ));

        while ($news->have_posts()) {
            $news->the_post();
        ?>
            <div class="col-span-10 grid grid-cols-10 lg:mt-10 mt-20">
                <img src="<?php echo the_post_thumbnail_url("small-thumb") ?>" alt="" class="lg:col-start-6 lg:col-span-3 col-start-1 col-span-10 bg-white  pt-6 px-6 lg:pb-40 pb-60 lg:-rotate-6 shadow-md lg:row-span-1 lg:row-start-1 lg:w-8/12 lg:ml-28 w-full">
                <div class="lg:col-start-2 lg:col-span-4 lg:row-span-1 col-start-2 col-span-8 lg:row-start-1 grid grid-cols-4 row-start-3 -mt-60 lg:-mt-0"">
                    <h3 class=" lg:text-4xl text-xl text-center lg:text-left col-span-4"><?php the_title() ?></h3>
                    <p class="col-span-4 lg:text-lg"><?php the_field("desc") ?></p>
                </div>
            </div>
        <?php
        }
        wp_reset_postdata();
        ?>


    </div>
</section>
<section class="col-span-12 grid grid-cols-12 fam-kallmayer lg:-mt-44 z-20 lg:pb-0 pb-40">
    <img src="<?php echo get_theme_file_uri("/assets/images/famkallmayer.png") ?>" alt="" class="lg:col-span-6 col-span-12 lg:-mt-20 w-full">
    <div class="lg:col-start-7 lg:col-span-6 col-span-10 col-start-2 lg:mx-10 text-center lg:grid lg:grid-rows-5 fam-wave">
        <h2 class="text-4xl font-normal row-start-1 lg:mt-28 mt-5">Vi er Familien Kallmayer</h2>
        <div class="row-start-2 text-lg">
            <p>
                I 2005 valgte vores familie at forfølge vores drøm om at drive en campingplads. Efter at have overvejet flere muligheder, fandt vi os selv forelskede i Gl. Klitgaard Camping. Vi forlod vores jobs og kastede os ud i det ukendte.
            </p>
            <p class="mt-10">
                17 år senere er campingpladsen blevet vores hjem og arbejdsplads, hvor vi nyder livet blandt glade mennesker. Vores børn, Jonas, Maja og Emil, har også bidraget til pladsen gennem årene, hvilket har været en berigende oplevelse for os alle.
            </p>
        </div>
        <div class="row-start-3 mt-10">
            <a class="knap" href="<?php echo get_site_url() . "/om-os" ?>"><button class="bg-main-interaction-color px-10 py-2 rounded-full mx-auto">Læs mere om os</button></a>
        </div>
        <h3 class="row-start-4 mx-auto font-bold">Vi håber vi ses på Gl. Klitgaard Camping.</h3>
    </div>
</section>
<section class="col-span-12 py-40 weatherAndActivities -mt-52 z-20">
    <h2 class="row-start-1 row-span-1 col-span-5 text-center text-4xl font-normal mt-20">Kommende vejr</h2>
    <div class="forecastContainer grid gap-10 lg:mx-40 mt-10"></div>
    <div class="mt-20">
        <h2 class="text-center text-4xl font-normal">Kommende aktiviteter</h2>
        <div class="lg:grid lg:grid-cols-3 lg:gap-10 lg:mx-80 mx-10">
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
                <div class="bg-white pt-5 px-5 pb-10 shadow-lg lg:mt-0 mt-10 grid">
                    <img src="<?php echo the_post_thumbnail_url() ?>" alt="" class="aspect-square object-cover">
                    <h2 class="mt-5"><?php echo the_title() ?></h2>
                    <p><?php echo the_field("date") ?> - <?php echo the_field("time_from") ?></p>
                    <p>Pris: <?php echo the_field("price") ?></p>
                    <a class="mx-auto knap" href="<?php echo the_permalink() ?>"><button class="bg-main-interaction-color px-10 py-2 rounded-full mx-auto font-bold text-lg">Læs mere</button></a>
                </div>
            <?php
            }
            wp_reset_postdata();
            ?>
        </div>
        <div class="text-center grid grid-cols-12 mt-10">
            <p class="text-lg lg:col-start-5 lg:col-span-4 row-start-1 lg:mx-20 col-start-2 col-span-10">Vi har altid noget i gang hos Gl. Klitgaard, hesteridning, dyre fodring, med mere.</p>
            <a class="lg:col-start-6 lg:col-span-2 col-start-3 col-span-8 row-start-2 knap bg-main-interaction-color px-10 py-2 rounded-full mx-auto font-bold text-lg" href="<?php echo get_site_url() . "/aktiviteter" ?>">Se alle vores aktiviteter</a>
        </div>
    </div>
</section>
<section class="rating-sect -mt-10 z-20">
    <div class="lg:hidden grid mt-32">
        <h2 class="text-main-brand-color text-center text-4xl">Plads til alle</h2>
        <div class="grid">
            <p class="mx-10 mb-5">Gl. Klitgaard Camping ligger i nærheden af løkken og tæt ved norden, så der er mulighed for mange forskellige oplevelser i nær området. Må det være Fårup sommerland, Nordsøen Oceanarium eller bare at nyde vestkysten.</p>
            <a href="" class="mx-auto knap w-5/6 knap bg-main-interaction-color px-10 py-2 rounded-full font-bold text-lg">Se nærliggende seværdigheder</a>
        </div>
        <div class="mt-20 grid">
            <p class="mx-10 mb-5">Og hvis du ikke vil længere væk end bare campingpladsen, har vi masser at man kan tage sig til. om det skal være ridning af heste, at besøge vores minizoo eller nyde at være i sin egen hytte med familien.</p>
            <a href="" class="mx-auto knap w-3/5 bg-main-interaction-color px-10 py-2 rounded-full font-bold text-lg">Se vores faciliteter</a>
        </div>
    </div>
    <div class="grid-cols-2 mt-32 hidden lg:grid">
        <h2 class="text-main-brand-color col-span-12 text-center text-4xl mb-5">Plads til alle</h2>
        <div class="drop-shadow bg-yellow-100 grid grid-cols-1 lg:grid-cols-2 md:grid-cols-2 lg:col-start-1 col-span-1 col gap-5 gap-y-15 shadow-sm relative w-10/12 mx-auto">
            <a class="simple-pic-drop min-h-60 relative -top-5 -left-5 h-2/3 w-auto max-h-20 z-10" href="#">
                <div class="absolute w-fit left-1/2 right-1/2 -top-5 -translate-x-1/2 z-20">
                    <?php echo file_get_contents(get_theme_file_uri("/assets/svg/tac.svg")); //henter og indsætter inholdet fra theme mappen/assets/svg/tac 
                    ?>
                </div>
                <img class="drop-shadow-sm h-full min-h-60 md:min-h-52 lg:min-h-40 w-full object-cover" src="<?php echo get_theme_file_uri("/assets/images/seværdigheder.png"); ?>" alt="">
            </a>
            <div class="col-start-1 md:col-span-2 lg:col-span-2 h-10 lg:h-6 absolute bg-yellow-800 opacity-20 row-start-1 row-span-1 w-full"></div>
            <div class="mt-40 md:mt-10 lg:mt-7 w-10/12 mx-auto md:mx-0 lg:mx-0 md:min-h-40 lg:min-h-32">
                <h3 class="text-center h-fit">Seværdigheder</h3>
                <p>Gl. Klitgaard Camping ligger i nærheden af løkken og tæt ved norden, så der er mulighed for mange forskellige oplevelser i nær området. Må det være Fårup sommerland, Nordsøen Oceanarium eller bare at nyde vestkysten.</p>
            </div>
            <div class="lg:col-span-2 md:col-span-2 w-8/12 mx-auto mr-0 inline-flex">
                <a href="#" class="knap font-semibold px-10 py-2">Se nærliggende seværdigheder</a>
            </div>

            <div class="absolute inline-flex w-full top-full lg:col-span-2 flex-nowrap -mt-0.5">
                <div class="bg-yellow-100 h-10 w-full -mr-0.5 pr-0.5"></div>
                <svg class="h-10 w-10 -rotate-90" width="59" height="57" viewBox="0 0 59 57" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M58.5 0.819336L58.5 56.5L0.0952523 0.819356L58.5 0.819336Z" class="fill-yellow-200" />
                </svg>
            </div>
        </div>
        <div class="drop-shadow bg-yellow-100 grid grid-cols-1 lg:grid-cols-2 md:grid-cols-2 lg:col-start-2 col-span-1 col gap-5 gap-y-15 shadow-sm relative w-10/12 mx-auto">
            <a class="simple-pic-drop min-h-60 relative -top-5 -left-5 h-2/3 w-auto max-h-20 z-10" href="#">
                <div class="absolute w-fit left-1/2 right-1/2 -top-5 -translate-x-1/2 z-20">
                    <?php echo file_get_contents(get_theme_file_uri("/assets/svg/tac.svg")); //henter og indsætter inholdet fra theme mappen/assets/svg/tac 
                    ?>
                </div>
                <img class="drop-shadow-sm h-full min-h-60 md:min-h-52 lg:min-h-40 w-full object-cover" src="<?php echo get_theme_file_uri("/assets/images/faciliteter.png"); ?>" alt="">
            </a>
            <div class="col-start-1 md:col-span-2 lg:col-span-2 h-10 lg:h-6 absolute bg-yellow-800 opacity-20 row-start-1 row-span-1 w-full"></div>
            <div class="mt-40 md:mt-10 lg:mt-7 w-10/12 mx-auto md:mx-0 lg:mx-0 md:min-h-40 lg:min-h-32">
                <h3 class="text-center h-fit">Faciliteter</h3>
                <p>Og hvis du ikke vil længere væk end bare campingpladsen, har vi masser at man kan tage sig til. om det skal være ridning af heste, at besøge vores minizoo eller nyde at være i sin egen hytte med familien.</p>
            </div>
            <div class="lg:col-span-2 md:col-span-2 w-8/12 mx-auto mr-0 inline-flex">
                <a href="#" class="knap text-center px-10 py-2 mx-auto mt-auto font-semibold">Se vores faciliteter</a>
            </div>

            <div class="absolute inline-flex w-full top-full lg:col-span-2 flex-nowrap -mt-0.5">
                <div class="bg-yellow-100 h-10 w-full -mr-0.5 pr-0.5"></div>
                <svg class="h-10 w-10 -rotate-90" width="59" height="57" viewBox="0 0 59 57" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M58.5 0.819336L58.5 56.5L0.0952523 0.819356L58.5 0.819336Z" class="fill-yellow-200" />
                </svg>
            </div>
        </div>
    </div>
    <div class="grid grid-cols-12 py-20 mt-10">
        <h2 class="text-center text-5xl font-normal col-span-12">Hvad synes andre?</h2>
        <img src="<?php echo get_theme_file_uri("/assets/logos/TripAdvisor_Logo.png") ?>" alt="" class="lg:col-start-3 lg:col-span-3 col-start-2 col-span-4 h-full row-start-2 row-span-1 mx-auto object-contain">
        <div class="grid grid-cols-5 lg:col-start-3 lg:col-span-3 col-start-2 col-span-4 mx-auto w-2/5">
            <img src="<?php echo get_theme_file_uri("/assets/svg/star_filled.svg") ?>" alt="">
            <img src="<?php echo get_theme_file_uri("/assets/svg/star_filled.svg") ?>" alt="">
            <img src="<?php echo get_theme_file_uri("/assets/svg/star_filled.svg") ?>" alt="">
            <img src="<?php echo get_theme_file_uri("/assets/svg/star_filled.svg") ?>" alt="">
            <img src="<?php echo get_theme_file_uri("/assets/svg/star_empty.svg") ?>" alt="">
        </div>
        <img src="<?php echo get_theme_file_uri("/assets/logos/Google_2015_logo.png") ?>" alt="" class="lg:col-start-8 lg:col-span-3 col-start-8 col-span-4 h-full row-start-2 row-span-1 mx-auto">
        <div class="grid grid-cols-5 lg:col-start-8 lg:col-span-3  col-start-8 col-span-4 mx-auto w-2/5">
            <img src="<?php echo get_theme_file_uri("/assets/svg/star_filled.svg") ?>" alt="">
            <img src="<?php echo get_theme_file_uri("/assets/svg/star_filled.svg") ?>" alt="">
            <img src="<?php echo get_theme_file_uri("/assets/svg/star_filled.svg") ?>" alt="">
            <img src="<?php echo get_theme_file_uri("/assets/svg/star_filled.svg") ?>" alt="">
            <img src="<?php echo get_theme_file_uri("/assets/svg/star_empty.svg") ?>" alt="">
        </div>
        <div class="reviews col-span-12 grid lg:grid-cols-5 grid-cols-1 lg:gap-24 gap-5 lg:mx-24 mx-20 mt-20"></div>
    </div>
    <p class="theme_url hidden"><?php echo get_theme_file_uri() ?></p>
</section>
<div class="bottom-cta col-span-12 py-32 -mt-8 z-20 grid grid-cols-12">
    <div class="lg:col-start-1 lg:col-span-7 col-start-2 col-span-10 grid lg:grid-cols-11 grid-cols-9">
        <div class="lg:pt-6 lg:px-6 lg:pb-10 px-2 pt-2 bg-white lg:w-10/12 w-full row-start-1 row-span-1 lg:col-start-2 col-start-1 lg:col-span-4 col-span-3 -rotate-6 shadow-lg ">
            <img src="<?php echo get_theme_file_uri("/assets/images/ctaimg4.png") ?>" alt="" class="w-full h-3/5 object-cover">
        </div>
        <div class="lg:pt-6 lg:px-6 lg:pb-10 px-2 pt-2 bg-white lg:w-10/12 w-full row-start-1 row-span-1 lg:col-start-5 col-start-4 lg:col-span-4 col-span-3 rotate-12 shadow-lg">
            <img src="<?php echo get_theme_file_uri("/assets/images/ctaimg5.png") ?>" alt="" class="w-full h-3/5 object-cover">
        </div>
        <div class="lg:pt-6 lg:px-6 lg:pb-10 px-2 pt-2 bg-white lg:w-10/12 w-full row-start-1 row-span-1 lg:col-start-8 col-start-7 lg:col-span-4 col-span-3 shadow-lg -ml20 z-10">
            <img src="<?php echo get_theme_file_uri("/assets/images/ctaimg6.png") ?>" alt="" class="w-full h-3/5 object-cover">
        </div>

    </div>
    <div class="lg:col-start-8 lg:col-span-4 col-start-2 col-span-10 text-center my-auto lg:mt-0 mt-10">
        <h2 class="text-4xl">Vil du vide mere?</h2>
        <p class="text-lg">Har du spørgsmål, kommentarer eller feedback? Vi vil elske at høre fra dig!</p>
        <a href="<?php echo get_site_url() . "/kontakt-os" ?>" class="knap"><button class="bg-main-interaction-color px-10 py-2 my-4 rounded-full">Kontakt os</button></a>
        <h3>Vi håber vi ses på Gl. Klitgaard Camping.</h3>
    </div>
</div>
<?php get_footer() ?>