<?php get_header();
$pattern = "/<img.*?src[^\>]+>/"; ?>

<section class="relative bg-slate-100 h-fit min-h-96 overflow-hidden">
    <div class="h-full z-10 paper-overlay lg:-left-10 bg-slate-100 bg-opacity-75  w-full lg:bottom-auto lg:top-0 lg:w-6/12 absolute left-0">
        <h1 class="text-center grid text-4xl bold w-8/12 mx-auto mt-28">Dyr med på <br><strong class="text-secondary-brand-color text-shadow">Gl. Klitgaard Camping & Hytteby</strong></h1>
    </div>
    <div class="absolute top-0 left-0 w-full min-h-72">
        <div class=" overflow-hidden min-h-96 slideshow shadow-lg relative w-full h-full">
            <div class="relative slideshow-img h-full min-h-96 w-full overflow-hidden">
                <?php while (have_posts()) {
                    the_post(); ?>
                    <?php $content = strip_tags(get_the_content(), '<img>'); // fjerner alle tags, undtaget img
                    // REGEX til at finde billede
                    if (preg_match($pattern, $content)) {
                        $content = str_replace("<", "<!--Cut here--> <", $content); //finder, erstatter, hvilken string
                        $content = str_replace(">", "> <!--Cut here-->", $content); //erstatter
                        $parts = explode("<!--Cut here-->", $content); //skær hver gang den finder <!-- cut here -->, laver en array
                        $i = 1; // bare til at idexsere så vi ikke har så mange img på denne side :)
                        foreach ($parts as $p) { // for hver del af array'et
                            if (preg_match($pattern, $p)) { // hvis den har billede
                                echo $p; //print billede ud
                                $i++; // increase.
                            };
                        }; ?>
            </div>
            <div class="SlideControls shadow-inner h-fit w-full lg:w-7/12 absolute bottom-10 right-0 z-10 inline-flex gap-5 justify-center"></div>
        <?php } else { ?>
            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_the_title(); ?>">
    <?php }
                }; ?>
        </div>
    </div>
</section>
<section class="grid md:grid-cols-3 gap-5 bg-yellow-100 pt-10 pb-24 relative">
    <div class="paper-crumb absolute -top-6 h-full w-full">
        <img class="w-full h-6 object-cover object-top opacity-90" src="<?php echo get_theme_file_uri("/assets/images/crumpled-paper.jpg"); ?>" alt="krøllet papir texture">
        <img class="w-full h-full object-cover opacity-35" src="<?php echo get_theme_file_uri("/assets/images/crumpled-paper.jpg"); ?>" alt="krøllet papir texture">
    </div>
    <div class="mb-24 z-10 md:mb-0 rotate-3 bg-gray-100 grid grid-cols-1 gap-5 gap-y-15 shadow-sm relative w-10/12 mx-auto">
        <div class="col-start-1 md:col-span-2 lg:col-span-2 h-10 lg:h-6 absolute bg-gray-800 opacity-20 row-start-1 row-span-1 w-full"></div>
        <div class="-rotate-3 mt-5 md:mt3 lg:mt-7 w-10/12 mx-auto md:min-h-40 py-5 lg:min-h-32">
            <h3 class="text-center h-fit text-lg">Kom med om du er:</h3>
            <ul>
                <li>menneske</li>
                <li>hund</li>
                <li>kat</li>
                <li>hest</li>
                <li>og andre!</li>
            </ul>
        </div>

        <div class="absolute inline-flex w-full top-full lg:col-span-2 flex-nowrap -mt-0.5">
            <div class="bg-gray-100 h-10 w-full -mr-0.5 pr-0.5"></div>
            <svg class="h-10 w-10 -rotate-90" width="59" height="57" viewBox="0 0 59 57" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M58.5 0.819336L58.5 56.5L0.0952523 0.819356L58.5 0.819336Z" class="fill-gray-200" />
            </svg>
        </div>
    </div>
    <div class="md:col-start-2 md:col-span-2 w-10/12 mx-auto">
        <h3 class="text-2xl text-center">Alle i familien med, ogs hvis de er pelsede</h3><?php the_content(); ?>
    </div>
</section>

<?php get_footer(); ?>