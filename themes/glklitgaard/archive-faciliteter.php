<?php get_header();
$Faciliteter = new WP_Query(array(
    'posts_per_page'    => 1,
    'post_type' => "faciliteter",
));
$pattern = "/<img.*?src[^\>]+>/"; ?>

<section class="relative bg-slate-100 h-fit min-h-96 -z-10 col-span-12">
    <div class="Faci-change h-fit z-10 bg-slate-100 bg-opacity-75 bottom-1/3 5 lg:pb-28 pt-72 lg:bottom-0 lg:w-6/12 w-full absolute left-0">
        <?php while ($Faciliteter->have_posts()) {
            $Faciliteter->the_post() ?>
            <h1 class="text-center py-2 text-4xl">Vores <?php echo post_type_archive_title('', false); ?></h1>
            <h3 class="text-center text-4xl text-secondary-brand-color">Som vores <br>
                <strong><?php echo get_the_title(); ?></strong>
            </h3>
        <?php };
        wp_reset_postdata(); ?>
    </div>
    <div class="h-fit w-full rip -mb-10 fill-slate-100 z-10 opacity-75 absolute hidden md:block lg:rotate-90 left-0 lg:translate-x-5">
        <?php echo file_get_contents(get_theme_file_uri("/assets/svg/Paper-rip.svg")); ?>
    </div>
    <div class="absolute top-0 left-0 w-full md:min-h-72 min-h-96">
        <div class="min-h-72 overflow-hidden lg:min-h-96 md:min-h-80 slideshow shadow-lg relative w-full h-full">
            <div class="relative slideshow-img h-full min-h-72 lg:min-h-96 md:min-h-80 w-full overflow-hidden">
                <?php while (have_posts()) {
                    the_post();
                    $content = strip_tags(get_the_content(), '<img>'); // fjerner alle tags, undtaget img
                    // REGEX til at finde billede
                    if (preg_match($pattern, $content)) {
                        $content = str_replace("<", "<!--Cut here--> <", $content); //finder, erstatter, hvilken string
                        $content = str_replace(">", "> <!--Cut here-->", $content); //erstatter
                        $parts = explode("<!--Cut here-->", $content); //skær hver gang den finder <!-- cut here -->, laver en array
                        $i = 1; // bare til at idexsere så vi ikke har så mange img på denne side :)
                        foreach ($parts as $p) { // for hver del af array'et
                            if (preg_match($pattern, $p) and $i != 2) { // hvis den har billede
                                echo $p; //print billede ud
                                $i++; // increase.
                            }
                        }
                    } else { ?> <img class="w-full h-full" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo the_title(); ?>"> <?php } ?>

                <?php }; ?>
            </div>
            <div class="SlideControls shadow-inner h-fit w-full lg:w-7/12 absolute bottom-10 right-0 z-10 inline-flex gap-5 justify-center"></div>
        </div>
    </div>
</section>
<?php $Faciliteter = new WP_Query(array(
    'posts_per_page'    => -1,
    'orderby'    => "title",
    'post_type' => "faciliteter",
    'meta_key'      => 'facilitets_type',
    'meta_value'    => 'Belejlig',
    'order' => 'ASC',
));
if ($Faciliteter->have_posts()) {
    $BelejAmnt = 1; ?>
    <section class="bg-gray-200 grid gap-6 relative grid-cols-1 w-full h-fit wavey-section z-10">
        <div class="w-full rip absolute bottom-full h-6 -top-6 z-20 fill-gray-200">
            <?php echo file_get_contents(get_theme_file_uri("/assets/svg/Paper-rip.svg")); ?>
        </div>
        <div class="Waves absolute top-14 h-fit overflow-x-hidden w-full ease-linear duration-150 -z-10">
            <?php echo file_get_contents(get_theme_file_uri("/assets/svg/Wave.svg")); ?>
        </div>
        <div class="w-full grid grid-cols-1 md:w-8/12 lg:6/12 mx-auto">
            <h2 class="text-3xl text-center w-full my-5">Belejlige Faciliteter</h2>
            <?php while ($Faciliteter->have_posts()) {
                $Faciliteter->the_post();
                if ($BelejAmnt % 2 != 0) { ?>
                    <div class="relative w-full grid grid-cols-1 md:inline-flex">
                        <div class="bg-slate-50 relative md:absolute p-5 md:pb-16 w-8/12 md:w-5/12 z-30 left-0 top-0 mx-auto md:mx-none">
                            <a class="overflow-hidden w-full md:w-full h-fit block bg-slate-900" href="<?php echo post_permalink(); ?>">
                                <img class="hover:opacity-85 w-full hover:rotate-3 duration-300 ease-in-out object-cover object-center hover:scale-110 " src="<?php echo the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                            </a>
                        </div>
                        <div class="relative w-10/12 md:w-8/12 min-h-fit h-1/5 ml-0 md:ml-auto md:my-10">
                            <div class="w-full mx-auto grid grid-cols-1  bg-yellow-100 py-8 pl-10">
                                <h3 class="text-2xl w-full md:w-8/12 mr-10 ml-auto"><?php echo get_the_title(); ?></h3>
                                <div class=" w-full md:w-8/12 mr-10 ml-auto">
                                    <?php if (has_excerpt()) {
                                        echo get_the_excerpt();
                                    } else {
                                        $content = strip_tags(get_the_content(), '<img>'); // fjerner alle tags, undtaget img
                                        // REGEX til at finde billede
                                        if (preg_match($pattern, $content)) {
                                            $content = str_replace($pattern, "", $content); //finder, erstatter, hvilken string
                                            echo wp_trim_words($content, 100, "...");
                                        } else {
                                            echo wp_trim_words(get_the_content(), 100, "...");
                                        }
                                    } ?></div>
                                <a href="<?php echo get_the_permalink(); //ligende med tidligere ting, men vi henter linket fra en seperat fil og sætter ind som href'en.
                                            ?>" class="knap text-center px-3 py-1 mx-auto w-fit mt-5 font-semibold grid">Læs mere</a>
                            </div>
                            <!-- cursed paper effects-->
                            <svg class="drop-shadow-xl z-10 -ml-0.5 absolute left-full bottom-full w-8 h-8" preserveAspectRatio="none" width="15" height="19" viewBox="0 0 15 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7.18631 9.58405C12.3191 9.58405 14.8859 19 14.8859 19C14.8859 19 15.9125 9.07867 11.8061 4.53958C7.69962 0.000492576 0 0 0 0V19C0 19 2.05352 9.58405 7.18631 9.58405Z" class="fill-yellow-100" />
                            </svg>
                            <svg class="absolute -z-10 -ml-0.5 left-full bottom-full w-8 h-5" preserveAspectRatio="none" width="15" height="10" viewBox="0 0 15 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 10C0 10 1.5 0 8.25 0C15 0 15 10 15 10H0Z" class="fill-amber-200 saturate-50 brightness-75" />
                            </svg>
                            <svg class=" z-20 absolute bottom-full left-0 w-full h-8 pr-0.5 box-content" preserveAspectRatio="none" width="52" height="8" viewBox="0 0 52 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="52" height="8" class="fill-yellow-100" />
                            </svg>
                            <div class="grid grid-cols-1 absolute top-0 left-full w-8 h-10">
                                <svg class="w-8 h-auto max-h-72 min-h-44" preserveAspectRatio="none" width="10" height="60" viewBox="0 0 10 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="10" height="60" class="fill-amber-200 saturate-50 brightness-75" />
                                </svg>
                                <svg class="w-8 h-8" preserveAspectRatio="none" width="39" height="23" viewBox="0 0 39 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0 22.9512H0.135742L0.599121 22.499L0.952637 22.6641L1.69824 22.4482L2.44385 22.6641V22.2109L3.18945 21.7578V21.9961L4.12939 21.7578L3.93506 21.9961H4.68066L5.07129 21.5938L5.42627 21.543L6.19287 21.5938L9.9209 20.6191L11.4121 18.8789L15.1401 19.4219L15.6011 19.3311L16.3467 18.8789L17.0923 19.3311L18.1016 18.5898L18.5835 18.4258H19.3291V17.9727L20.666 17.8252L20.8203 18.4258H21.5659L21.8506 18.8789H22.5967L23.3418 19.3311L24.4395 19.4219L24.833 19.7832L25.5791 19.4219L26.3242 20.2363H27.0703V20.6885H28.5615L29.5298 21.8164L39 18.2246V0H0V22.9512Z" class="fill-amber-200 saturate-50 brightness-75" />
                                </svg>
                            </div>
                        </div>
                    </div>
                <?php } else { ?>
                    <div class="relative w-full grid grid-cols-1 md:inline-flex">
                        <div class="bg-slate-50 relative md:absolute p-5 md:pb-16 w-8/12 md:w-5/12 z-30 right-0 top-0 mx-auto md:mx-none">
                            <a class="overflow-hidden w-full md:w-full h-fit block bg-slate-900" href="<?php echo post_permalink(); ?>">
                                <img class="hover:opacity-85 hover:rotate-3 duration-300 ease-in-out object-cover object-center hover:scale-110 " src="<?php echo the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                            </a>
                        </div>
                        <div class="relative w-10/12 md:w-8/12 scale-x-100 min-h-fit h-1/5 ml-0 md:ml-auto md:my-10">
                            <div class="scale-x-100 w-full mx-auto grid grid-cols-1  bg-yellow-100 py-8 pl-10">
                                <h3 class="text-2xl w-full md:w-8/12 mr-10 ml-auto"><?php echo get_the_title(); ?></h3>
                                <div class="w-full md:w-8/12 mr-10 ml-auto">
                                    <?php if (has_excerpt()) {
                                        echo get_the_excerpt();
                                    } else {
                                        $content = strip_tags(get_the_content(), '<img>'); // fjerner alle tags, undtaget img
                                        // REGEX til at finde billede
                                        if (preg_match($pattern, $content)) {
                                            $content = str_replace($pattern, "", $content); //finder, erstatter, hvilken string
                                            echo wp_trim_words($content, 100, "...");
                                        } else {
                                            echo wp_trim_words(get_the_content(), 100, "...");
                                        }
                                    } ?></div>
                                <a href="<?php echo get_the_permalink(); //ligende med tidligere ting, men vi henter linket fra en seperat fil og sætter ind som href'en.
                                            ?>" class="knap text-center px-3 py-1 mx-auto w-fit mt-5 font-semibold grid">Læs mere</a>
                            </div>
                            <!-- cursed paper effects-->
                            <svg class="drop-shadow-xl z-10 -ml-0.5 absolute left-full bottom-full w-8 h-8" preserveAspectRatio="none" width="15" height="19" viewBox="0 0 15 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7.18631 9.58405C12.3191 9.58405 14.8859 19 14.8859 19C14.8859 19 15.9125 9.07867 11.8061 4.53958C7.69962 0.000492576 0 0 0 0V19C0 19 2.05352 9.58405 7.18631 9.58405Z" class="fill-yellow-100" />
                            </svg>
                            <svg class="absolute -z-10 -ml-0.5 left-full bottom-full w-8 h-5" preserveAspectRatio="none" width="15" height="10" viewBox="0 0 15 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 10C0 10 1.5 0 8.25 0C15 0 15 10 15 10H0Z" class="fill-amber-200 saturate-50 brightness-75" />
                            </svg>
                            <svg class=" z-20 absolute bottom-full left-0 w-full h-8 pr-0.5 box-content" preserveAspectRatio="none" width="52" height="8" viewBox="0 0 52 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="52" height="8" class="fill-yellow-100" />
                            </svg>
                            <div class="grid grid-cols-1 absolute top-0 left-full w-8 h-10">
                                <svg class="w-8 h-auto max-h-72 min-h-44" preserveAspectRatio="none" width="10" height="60" viewBox="0 0 10 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="10" height="60" class="fill-amber-200 saturate-50 brightness-75" />
                                </svg>
                                <svg class="w-8 h-8" preserveAspectRatio="none" width="39" height="23" viewBox="0 0 39 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0 22.9512H0.135742L0.599121 22.499L0.952637 22.6641L1.69824 22.4482L2.44385 22.6641V22.2109L3.18945 21.7578V21.9961L4.12939 21.7578L3.93506 21.9961H4.68066L5.07129 21.5938L5.42627 21.543L6.19287 21.5938L9.9209 20.6191L11.4121 18.8789L15.1401 19.4219L15.6011 19.3311L16.3467 18.8789L17.0923 19.3311L18.1016 18.5898L18.5835 18.4258H19.3291V17.9727L20.666 17.8252L20.8203 18.4258H21.5659L21.8506 18.8789H22.5967L23.3418 19.3311L24.4395 19.4219L24.833 19.7832L25.5791 19.4219L26.3242 20.2363H27.0703V20.6885H28.5615L29.5298 21.8164L39 18.2246V0H0V22.9512Z" class="fill-amber-200 saturate-50 brightness-75" />
                                </svg>
                            </div>
                        </div>
                    </div>
                <?php }
                $BelejAmnt++;
                if ($BelejAmnt == 5) { ?>
                    <div class="Waves absolute bottom-7 h-fit overflow-x-hidden w-full ease-linear duration-150 -z-10">
                        <?php echo file_get_contents(get_theme_file_uri("/assets/svg/Wave.svg")); ?>
                    </div>
            <?php };
            };
            wp_reset_postdata(); ?>
        </div>
    </section>
<?php };
$Faciliteter = new WP_Query(array(
    'posts_per_page'    => -1,
    'orderby'    => "title",
    'post_type' => "faciliteter",
    'meta_key'      => 'facilitets_type',
    'meta_value'    => 'Sjov',
    'order' => 'ASC',
));
if ($Faciliteter->have_posts()) {
    $SjovjAmnt = 1;
    $flipFlop = 1; ?>
    <section class="bg-third-brand-color relative w-full h-fit wavey-section z-10 py-10 shadow-sm">
        <div class="bg-gray-400 shadow-md absolute h-full w-11/12 pt-5 pl-7 right-0 box-content"></div>
        <div class="bg-gray-200 shadow-md absolute h-full w-11/12 pt-2 pl-4 right-0 mt-2 box-content"></div>
        <div class="z-10 bg-slate-50 relative min-h-96 mt-4 w-11/12 pl-5 py-10 pr-16 grid grid-cols-5 gap-5 ml-auto">
            <?php $Sjov = 1;
            while ($Faciliteter->have_posts()) {
                $Faciliteter->the_post();
                if ($Sjov != 2 and $Sjov != 4 and $Sjov != 7 and $Sjov != 10) { ?>
                    <div class="relative row-span-2 z-10 col-start-1 col-span-5 lg:col-span-3 md:col-span-5 mr-auto bg-white p-3 mx-auto md:mx-0 md:mr-10 md:ml-auto md:w-10/12 w-full lg:w-11/12 inline-flex gap-3 my-auto">
                        <a class="overflow-hidden w-full md:w-full h-full block bg-slate-900" href="<?php echo post_permalink(); ?>">
                            <img class="hover:opacity-85 hover:rotate-3 h-full duration-300 ease-in-out object-cover object-center hover:scale-110 " src="<?php echo the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                        </a>
                        <div class="w-full">
                            <h3 class="text-2xl w-full md:w-8/12 mr-10 ml-auto"><?php echo get_the_title(); ?></h3>
                            <?php if (has_excerpt()) {
                                echo get_the_excerpt();
                            } else {
                                $content = strip_tags(get_the_content(), '<img>'); // fjerner alle tags, undtaget img
                                // REGEX til at finde billede
                                if (preg_match($pattern, $content)) {
                                    $content = str_replace($pattern, "", $content); //finder, erstatter, hvilken string
                                    echo wp_trim_words($content, 75, "...");
                                } else {
                                    echo wp_trim_words(get_the_content(), 100, "...");
                                }
                            } ?>
                            <a href="<?php echo get_the_permalink(); //ligende med tidligere ting, men vi henter linket fra en seperat fil og sætter ind som href'en.
                                        ?>" class="knap text-center px-3 py-1 mx-auto w-fit mt-5 font-semibold grid">Læs mere</a>
                        </div>
                        <div class="tape tape-left z-20">
                            <?php echo file_get_contents(get_theme_file_uri("/assets/svg/tape.svg")); ?>
                        </div>
                        <div class="tape tape-right z-20">
                            <?php echo file_get_contents(get_theme_file_uri("/assets/svg/tape.svg")); ?>
                        </div>
                    </div>
                <?php } else { ?>
                    <?php if ($flipFlop % 2 != 0) { ?>
                        <div class="rotate-3 col-span-2 md:col-span-3 row-span-3 md:col-start-auto lg:col-start-4 row-spandrop-shadow bg-yellow-100 grid grid-cols-1 lg:grid-cols-2 gap-5 gap-y-15 shadow-sm relative w-10/12 mx-auto">
                            <a class="simple-pic-drop min-h-60 relative mx-auto h-2/3 w-10/12 max-h-20 z-10" href="<?php echo post_permalink();/*henter det link til postens enkel side*/ ?>">
                                <div class="absolute w-fit left-1/2 right-1/2 -top-5 -translate-x-1/2 z-20">
                                    <?php echo file_get_contents(get_theme_file_uri("/assets/svg/tac.svg")); //henter og indsætter inholdet fra theme mappen/assets/svg/tac 
                                    ?>
                                </div>
                                <img class="drop-shadow-sm h-full min-h-60 md:min-h-52 lg:min-h-40 w-full object-cover" src="<?php echo the_post_thumbnail_url(); // udskriver url'en for billede brugt til thumbnailen
                                                                                                                                ?>" alt="<?php the_title(); //Postens titel :)
                                                                                                                                                                                                                                ?>">
                            </a>
                            <div class="col-start-1 md:col-span-2 lg:col-span-2 h-10 lg:h-6 absolute bg-yellow-800 opacity-20 row-start-1 row-span-1 w-full"></div>
                            <div class="-rotate-3 mt-5 md:mt3 lg:mt-7 w-10/12 mx-auto md:min-h-40 lg:min-h-32">
                                <h3 class="text-center h-fit text-lg"><?php the_title(); ?></h3>
                                <?php if (has_excerpt()) {
                                    echo get_the_excerpt();
                                } else {
                                    $content = strip_tags(get_the_content(), '<img>'); // fjerner alle tags, undtaget img
                                    // REGEX til at finde billede
                                    if (preg_match($pattern, $content)) {
                                        $content = str_replace($pattern, "", $content); //finder, erstatter, hvilken string
                                        echo wp_trim_words($content, 75, "...");
                                    } else {
                                        echo wp_trim_words(get_the_content(), 100, "...");
                                    }
                                } ?>
                                <a href="<?php echo get_the_permalink(); //ligende med tidligere ting, men vi henter linket fra en seperat fil og sætter ind som href'en.
                                            ?>" class="knap text-center px-3 py-1 mx-auto w-fit mt-5 font-semibold grid">Læs mere</a>
                            </div>

                            <div class="absolute inline-flex w-full top-full lg:col-span-2 flex-nowrap -mt-0.5">
                                <div class="bg-yellow-100 h-10 w-full -mr-0.5 pr-0.5"></div>
                                <svg class="h-10 w-10 -rotate-90" width="59" height="57" viewBox="0 0 59 57" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M58.5 0.819336L58.5 56.5L0.0952523 0.819356L58.5 0.819336Z" class="fill-yellow-200" />
                                </svg>
                            </div>
                        </div>
                    <?php } else { ?>
                        <div class="col-span-2 md:col-span-3 row-span-3 md:col-start-auto lg:col-start-4 row-spandrop-shadow bg-yellow-100 grid grid-cols-1 lg:grid-cols-2 gap-5 gap-y-15 shadow-sm relative w-10/12 mx-auto">
                            <a class="simple-pic-drop min-h-60 relative mx-auto h-2/3 w-10/12 max-h-20 z-10" href="<?php echo post_permalink();/*henter det link til postens enkel side*/ ?>">
                                <div class="absolute w-fit left-1/2 right-1/2 -top-5 -translate-x-1/2 z-20">
                                    <?php echo file_get_contents(get_theme_file_uri("/assets/svg/tac.svg")); //henter og indsætter inholdet fra theme mappen/assets/svg/tac 
                                    ?>
                                </div>
                                <img class="drop-shadow-sm h-full min-h-60 md:min-h-52 lg:min-h-40 w-full object-cover" src="<?php echo the_post_thumbnail_url(); // udskriver url'en for billede brugt til thumbnailen
                                                                                                                                ?>" alt="<?php the_title(); //Postens titel :)
                                                                                                                                                                                                                                ?>">
                            </a>
                            <div class="col-start-1 md:col-span-2 lg:col-span-2 h-10 lg:h-6 absolute bg-yellow-800 opacity-20 row-start-1 row-span-1 w-full"></div>
                            <div class="mt-5 md:mt3 lg:mt-7 w-10/12 mx-auto md:min-h-40 lg:min-h-32">
                                <h3 class="text-center h-fit text-lg"><?php the_title(); ?></h3>
                                <?php if (has_excerpt()) {
                                    echo get_the_excerpt();
                                } else {
                                    $content = strip_tags(get_the_content(), '<img>'); // fjerner alle tags, undtaget img
                                    // REGEX til at finde billede
                                    if (preg_match($pattern, $content)) {
                                        $content = str_replace($pattern, "", $content); //finder, erstatter, hvilken string
                                        echo wp_trim_words($content, 75, "...");
                                    } else {
                                        echo wp_trim_words(get_the_content(), 100, "...");
                                    }
                                } ?>
                                <a href="<?php echo get_the_permalink(); //ligende med tidligere ting, men vi henter linket fra en seperat fil og sætter ind som href'en.
                                            ?>" class="knap text-center px-3 py-1 mx-auto w-fit mt-5 font-semibold grid">Læs mere</a>
                            </div>

                            <div class="absolute inline-flex w-full top-full lg:col-span-2 flex-nowrap -mt-0.5">
                                <div class="bg-yellow-100 h-10 w-full -mr-0.5 pr-0.5"></div>
                                <svg class="h-10 w-10 -rotate-90" width="59" height="57" viewBox="0 0 59 57" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M58.5 0.819336L58.5 56.5L0.0952523 0.819356L58.5 0.819336Z" class="fill-yellow-200" />
                                </svg>
                            </div>
                        </div>
            <?php }
                    $flipFlop++;
                }
                $Sjov++;
            };
            wp_reset_postdata(); ?>
        </div>
    </section>
<?php }
get_footer(); ?>