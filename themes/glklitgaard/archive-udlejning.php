<?php get_header();
// ^ Henter header.php 
?>

<section class="bg-[#EFEFEA]">
    <h1 class="text-center mt-5 text-3xl"><?php echo post_type_archive_title('', false); ?></h1>
</section>
<div class="h-fit w-full rip bg-white -mb-10 -mt-5 rotate-180">
    <svg class="fill-slate-100 w-full"><?php echo file_get_contents(get_theme_file_uri("/assets/svg/Paper-rip.svg")); ?></svg>
</div>

<?php // ^ vil gerne have en varriabel for at give ID til hver slideshow. til JavaScripting for sider med mere end 1 slideshow.

$Hytte = new WP_Query(array(
    'posts_per_page'    => -1,
    'post_type' => "Udlejning",
    'meta_key'      => 'udlejnings_type',
    'meta_value'    => 'hytter'
));
//^ Definerer hvad vi leder efter. alle (-1) posts med type Udlejning, og deres udlejnings type er "hytter"
//v Derefter så siger vi at hvis de findes. så lav det nedenunder, inden i if statementet
$AmountH = $Hytte->found_posts;
if ($AmountH) {
    $HytteMæng = 1;
?>
    <section class="Papery bg-yellow-100 relative w-full py-10">
        <img src="<?php echo get_theme_file_uri("/assets/images/crumpled-paper.jpg") ?>" alt="crumpled paper" class="absolute w-full h-full object-fill opacity-50 top-0 left-0">
        <h2 class="text-center pt-10 text-2xl z-10 relative">Hytter</h2>
        <hr class="hidden-push">
        <div class="grid grid-cols-6 lg:grid-cols-10 gap-10 gap-y-20 md:gap-y-16 lg:gap-y-10 w-10/12 mx-auto relative">
            <?php
            // imens der er post's, så indsæt i disse. Note, if-statementet påvirker kun CSS'en i forhold til om det er et lige eller ulige mændge
            while ($Hytte->have_posts()) {
                $Hytte->the_post();
                // v sammenligning, hvis vi har den sidste post, og den er ulige, så skal den printe den her version ud
                // $HytteMæng striger med 1 per gang den køre i while loopet. så den kan kun matche AmountH hvis det er sidste post
                // $Amount % 2, dividere bare det fulde numbmer med 2, hvis det er 0, går det op med 2 (lige), hvis ikke, kommer et 1 ud
                // der kunne også have stået $AmountH % 2 == 1
                if ($HytteMæng == $AmountH and $AmountH % 2 != 0) {
            ?>
                    <div class="drop-shadow bg-yellow-100 grid grid-cols-1 lg:grid-cols-2 md:grid-cols-2 lg:col-start-3 col-span-6 col gap-5 gap-y-15 shadow-sm relative w-10/12 mx-auto">
                        <a class="simple-pic-drop min-h-60 relative -top-5 -left-5 h-2/3 w-auto max-h-20 z-10" href="<?php echo post_permalink();/*henter det link til postens enkel side*/ ?>">
                            <div class="absolute w-fit left-1/2 right-1/2 -top-5 -translate-x-1/2 z-20">
                                <?php echo file_get_contents(get_theme_file_uri("/assets/svg/tac.svg")); //henter og indsætter inholdet fra theme mappen/assets/svg/tac 
                                ?>
                            </div>
                            <img class="drop-shadow-sm h-full min-h-60 md:min-h-52 lg:min-h-40 w-full object-cover" src="<?php echo the_post_thumbnail_url(); // udskriver url'en for billede brugt til thumbnailen
                                                                                                                            ?>" alt="<?php the_title(); //Postens titel :)
                                                                                                                                                                                                                            ?>">
                        </a>
                        <div class="col-start-1 md:col-span-2 lg:col-span-2 h-10 lg:h-6 absolute bg-yellow-800 opacity-20 row-start-1 row-span-1 w-full"></div>
                        <div class="mt-40 md:mt-10 lg:mt-7 w-10/12 mx-auto md:mx-0 lg:mx-0 md:min-h-40 lg:min-h-32">
                            <h3 class="text-center h-fit text-lg"><?php the_title(); ?></h3>
                            <?php if (has_excerpt()) { //Hvis at denne post har en exceprt (intro tekst)
                                the_excerpt(); //så udskriv den.
                            } else { // men hvis ikke
                                wp_trim_words(get_the_content(), 100, "..."); // så tag indholdet, og trim det ned til 100 ord, til sidst indsæt ". . ." hvis der er mere end 100 ord.
                            }; ?>
                        </div>
                        <div class="lg:col-span-2 md:col-span-2 w-8/12 mx-auto inline-flex justify-between">
                            <div class="grid grid-cols-1 z-20">
                                <i class="fa-solid fa-user text-main-brand-color text-5xl w-fit mx-auto"></i>
                                <h4>Sovepladser:</h4>
                                <p class="text-center"><?php echo get_field("antal_sove_pladser"); // vi finder indformationen fra postens ACF (advanced costume fields) og indsætter her
                                                        ?> Personer</p>
                            </div>
                            <div class="grid grid-cols-1">
                                <i class="fa-solid fa-shower text-main-brand-color text-5xl w-fit mx-auto"></i>
                                <h4>WC/Bad:</h4>
                                <p class="text-center"><?php echo get_field("wcbad"); //samme som over, men nu leder vi efter wc/bad værdien
                                                        ?></p>
                            </div>
                            <div class="grid grid-cols-1">
                                <i class="fa-solid fa-kitchen-set text-main-brand-color text-5xl w-fit mx-auto"></i>
                                <h4>Køkken:</h4>
                                <p class="text-center"><?php echo get_field("kokken_service"); // =||= 
                                                        ?></p>
                            </div>
                        </div>
                        <div class="lg:col-span-2 md:col-span-2 w-8/12 mx-auto inline-flex justify-between">
                            <a href="<?php echo post_permalink(); //giv a-tag (knappen) linket til posten
                                        ?>" class="knap mb-5 text-center px-3 py-1 mx-auto mt-auto font-semibold">Læs mere</a>
                            <a href="<?php echo file_get_contents(get_theme_file_uri("/assets/links/Booking-site.txt")); //ligende med tidligere ting, men vi henter linket fra en seperat fil og sætter ind som href'en.
                                        ?>" class="knap mb-5 text-center px-3 py-1 mx-auto mt-auto font-semibold">Book nu</a>
                        </div>

                        <div class="absolute inline-flex w-full top-full lg:col-span-2 flex-nowrap -mt-0.5">
                            <div class="bg-yellow-100 h-10 w-full -mr-0.5 pr-0.5"></div>
                            <svg class="h-10 w-10 -rotate-90" width="59" height="57" viewBox="0 0 59 57" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M58.5 0.819336L58.5 56.5L0.0952523 0.819356L58.5 0.819336Z" class="fill-yellow-200" />
                            </svg>
                        </div>
                    </div>

                <?php } else { //hvis dette ikke opfylder "if($HytteMæng == $AmountH AND $AmountH % 2 != 0)", så udskriv posten som dette istedet
                    // der er ingen størrer ændrigner undtaget styling og rækkefølge af nogle af tingene. samme til senere sider. se klithuset for nyt. 
                ?>
                    <div class="drop-shadow bg-yellow-100 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 col-span-6 lg:col-span-5 px-3 pb-3 gap-5 shadow-sm relative w-10/12 mx-auto gap-y-15">
                        <?php if ($HytteMæng % 2 != 0) { ?>
                            <a class="row-start-1 simple-pic-drop min-h-60 relative -top-5 -left-5 h-2/3 w-auto max-h-20 z-10" href="<?php echo post_permalink(); ?>">
                                <div class="absolute w-fit left-1/2 right-1/2 -top-5 -translate-x-1/2 z-20">
                                    <?php echo file_get_contents(get_theme_file_uri("/assets/svg/tac.svg")); ?>
                                </div>
                                <img class="drop-shadow-sm h-full min-h-60 md:min-h-52 lg:min-h-40 w-full object-cover" src="<?php echo the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                            </a>
                            <div class="col-start-1 md:col-span-2 lg:col-span-2 h-10 lg:h-6 absolute bg-yellow-800 opacity-20 row-start-1 row-span-1 w-full"></div>
                            <div class="mt-0 md:mt-10 lg:mt-7 w-10/12 mx-auto md:mx-0 lg:mx-0 md:min-h-40 lg:min-h-32">
                                <h3 class="text-center h-fit text-lg"><?php the_title(); ?></h3>
                                <?php if (has_excerpt()) {
                                    the_excerpt();
                                } else {
                                    wp_trim_words(get_the_content(), 100, "...");
                                }; ?>
                            </div>
                            <div class="lg:col-span-2 md:col-span-2 w-8/12 mx-auto inline-flex justify-between">
                                <div class="grid grid-cols-1 z-20">
                                    <i class="fa-solid fa-user text-main-brand-color text-5xl w-fit mx-auto"></i>
                                    <h4>Sovepladser:</h4>
                                    <p class="text-center"><?php echo get_field("antal_sove_pladser") ?> Personer</p>
                                </div>
                                <div class="grid grid-cols-1">
                                    <i class="fa-solid fa-shower text-main-brand-color text-5xl w-fit mx-auto"></i>
                                    <h4>WC/Bad:</h4>
                                    <p class="text-center"><?php echo get_field("wcbad") ?></p>
                                </div>
                                <div class="grid grid-cols-1">
                                    <i class="fa-solid fa-kitchen-set text-main-brand-color text-5xl w-fit mx-auto"></i>
                                    <h4>Køkken:</h4>
                                    <p class="text-center"><?php echo get_field("kokken_service") ?></p>
                                </div>
                            </div>
                            <div class="lg:col-span-2 md:col-span-2 w-8/12 mx-auto inline-flex justify-between">
                                <a href="<?php echo post_permalink(); ?>" class="knap mb-5 text-center px-3 py-1 mx-auto mt-auto font-semibold">Læs mere</a>
                                <a href="<?php echo file_get_contents(get_theme_file_uri("/assets/links/Booking-site.txt")); ?>" class="knap mb-5 text-center px-3 py-1 mx-auto mt-auto font-semibold">Book nu</a>
                            </div>

                            <div class="absolute inline-flex w-full top-full lg:col-span-2 flex-nowrap -mt-1 z-10">
                                <div class="bg-yellow-100 h-10 w-full -mr-0.5 pr-0.5 -mt-0.5"></div>
                                <svg class="h-10 w-10 -rotate-90" width="59" height="57" viewBox="0 0 59 57" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M58.5 0.819336L58.5 56.5L0.0952523 0.819356L58.5 0.819336Z" class="fill-yellow-200" />
                                </svg>
                            </div>
                        <?php } else { ?>
                            <div class="-ml-3 md:ml-0 lg:ml-0 col-start-1 md:col-span-2 lg:col-span-2 h-10 lg:h-6 absolute bg-yellow-800 opacity-20 row-start-1 row-span-1 w-full"></div>
                            <div class="md:mt-10 lg:mt-7 w-10/12 mx-auto md:ml-auto lg:ml-auto md:min-h-40 lg:min-h-32">
                                <h3 class="text-center h-fit"><?php the_title(); ?></h3>
                                <?php if (has_excerpt()) {
                                    the_excerpt();
                                } else {
                                    wp_trim_words(get_the_content(), 100, "...");
                                }; ?>
                            </div>
                            <a class="row-start-1 col-start-1 md:col-start-2 lg:col-start-2 simple-pic-drop min-h-60 relative -top-5 -right-5 h-2/3 w-auto max-h-20 z-10" href="<?php echo post_permalink(); ?>">
                                <div class="absolute w-fit left-1/2 right-1/2 -top-5 -translate-x-1/2 z-20">
                                    <?php echo file_get_contents(get_theme_file_uri("/assets/svg/tac.svg")); ?>
                                </div>
                                <img class="drop-shadow-sm h-full min-h-60 md:min-h-52 lg:min-h-40 w-full object-cover" src="<?php echo the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                            </a>
                            <div class="lg:col-span-2 md:col-span-2 w-8/12 mx-auto inline-flex justify-between">
                                <div class="grid grid-cols-1 z-20">
                                    <i class="fa-solid fa-user text-main-brand-color text-5xl w-fit mx-auto"></i>
                                    <h4>Sovepladser:</h4>
                                    <p class="text-center"><?php echo get_field("antal_sove_pladser") ?> Personer</p>
                                </div>
                                <div class="grid grid-cols-1">
                                    <i class="fa-solid fa-shower text-main-brand-color text-5xl w-fit mx-auto"></i>
                                    <h4>WC/Bad:</h4>
                                    <p class="text-center"><?php echo get_field("wcbad") ?></p>
                                </div>
                                <div class="grid grid-cols-1">
                                    <i class="fa-solid fa-kitchen-set text-main-brand-color text-5xl w-fit mx-auto"></i>
                                    <h4>Køkken:</h4>
                                    <p class="text-center"><?php echo get_field("kokken_service") ?></p>
                                </div>
                            </div>
                            <div class="lg:col-span-2 md:col-span-2 w-8/12 mx-auto inline-flex justify-between">
                                <a href="<?php echo post_permalink(); ?>" class="knap mb-5 text-center px-3 py-1 mx-auto mt-auto font-semibold">Læs mere</a>
                                <a href="<?php echo file_get_contents(get_theme_file_uri("/assets/links/Booking-site.txt")); ?>" class="knap mb-5 text-center px-3 py-1 mx-auto mt-auto font-semibold">Book nu</a>
                            </div>

                            <div class="absolute inline-flex w-full top-full lg:col-span-2 flex-nowrap -mt-1 z-10">
                                <svg class="h-10 w-10" width="59" height="57" viewBox="0 0 59 57" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M58.5 0.819336L58.5 56.5L0.0952523 0.819356L58.5 0.819336Z" class="fill-yellow-200" />
                                </svg>
                                <div class="bg-yellow-100 h-10 w-full -ml-0.5 pl-0.5 -mt-0.5"></div>
                            </div>
                        <?php }; ?>
                    </div>
            <?php };
                $HytteMæng++;
            }; ?>
        </div>
        <hr class="hidden-push">
        <div class="h-12 absolute bottom-0 w-full rip rotate-180 fill-gray-200">
            <?php echo file_get_contents(get_theme_file_uri("/assets/svg/Paper-rip.svg")); ?>
        </div>
    </section><?php };
            wp_reset_postdata();
            //^ slutter if-statementet. og reseter den defination vi hadve tidligere (best practise at gøre)
            $Andet = new WP_Query(array(
                'posts_per_page'    => -1,
                'post_type' => "Udlejning",
                'meta_key'      => 'udlejnings_type',
                'meta_value'    => 'andet'
            ));
            $AmountA = $Andet->found_posts;
            if ($AmountA) {
                $AndetMæng = 1; ?>

    <section class="bg-gray-200 wavey-section pb-14 -mb-7 relative">
        <hr class="hidden-push">
        <div class="grid grid-cols-6 lg:grid-cols-10 gap-10 w-10/12 mx-auto relative">
            <h2 class="text-2xl text-center col-span-6 lg:col-span-10">Alternative muligheder</h2>
            <?php
                while ($Andet->have_posts()) {
                    $Andet->the_post();
                    if ($AndetMæng == $AmountA and $AmountA % 2 != 0) {
            ?>
                    <div class="bg-slate-50 grid grid-cols-1 min-h-40 lg:grid-cols-2 md:grid-cols-2 lg:col-start-3 col-span-6 p-3 gap-5 shadow-sm relative w-10/12 mx-auto">
                        <a class="inside-pic-drop min-h-40" href="<?php echo post_permalink(); ?>">
                            <img src="<?php echo the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                        </a>
                        <div>
                            <h3 class="text-center h-fit text-lg"><?php the_title(); ?></h3>
                            <?php if (has_excerpt()) {
                                the_excerpt();
                            } else {
                                wp_trim_words(get_the_content(), 100, "...");
                            }; ?>
                        </div>
                        <div class="md:col-span-2 lg:col-span-2 w-8/12 mx-auto inline-flex justify-between">
                            <div class="grid grid-cols-1">
                                <i class="fa-solid fa-user text-main-brand-color text-5xl w-fit mx-auto"></i>
                                <h4>Sovepladser:</h4>
                                <p class="text-center"><?php echo get_field("antal_sove_pladser") ?> Personer</p>
                            </div>
                            <div class="grid grid-cols-1">
                                <i class="fa-solid fa-shower text-main-brand-color text-5xl w-fit mx-auto"></i>
                                <h4>WC/Bad:</h4>
                                <p class="text-center"><?php echo get_field("wcbad") ?></p>
                            </div>
                            <div class="grid grid-cols-1">
                                <i class="fa-solid fa-kitchen-set text-main-brand-color text-5xl w-fit mx-auto"></i>
                                <h4>Køkken:</h4>
                                <p class="text-center"><?php echo get_field("kokken_service") ?></p>
                            </div>
                        </div>
                        <div class="md:col-span-2 lg:col-span-2 w-8/12 mx-auto inline-flex justify-between">
                            <a href="<?php echo post_permalink(); ?>" class="knap mb-5 text-center px-3 py-1 mx-auto mt-auto font-semibold">Læs mere</a>
                            <a href="<?php echo file_get_contents(get_theme_file_uri("/assets/links/Booking-site.txt")); ?>" class="knap mb-5 text-center px-3 py-1 mx-auto mt-auto font-semibold">Book nu</a>
                        </div>

                        <div class="tape tape-left">
                            <?php echo file_get_contents(get_theme_file_uri("/assets/svg/tape.svg")); ?>
                        </div>
                        <div class="tape tape-right">
                            <?php echo file_get_contents(get_theme_file_uri("/assets/svg/tape.svg")); ?>
                        </div>
                    </div>
                <?php } else { ?>
                    <div class="bg-slate-50 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 col-span-6 lg:col-span-5 p-3 gap-5 shadow-sm relative">
                        <a class="inside-pic-drop" href="<?php echo post_permalink(); ?>">
                            <img src="<?php echo the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                        </a>
                        <div>
                            <h3 class="text-center h-fit text-lg"><?php the_title(); ?></h3>
                            <?php if (has_excerpt()) {
                                the_excerpt();
                            } else {
                                wp_trim_words(get_the_content(), 100, "...");
                            }; ?>
                        </div>
                        <div class="md:col-span-2 lg:col-span-2 w-8/12 mx-auto inline-flex justify-between">
                            <div class="grid grid-cols-1">
                                <i class="fa-solid fa-user text-main-brand-color text-5xl w-fit mx-auto"></i>
                                <h4>Sovepladser:</h4>
                                <p class="text-center"><?php echo get_field("antal_sove_pladser") ?> Personer</p>
                            </div>
                            <div class="grid grid-cols-1">
                                <i class="fa-solid fa-shower text-main-brand-color text-5xl w-fit mx-auto"></i>
                                <h4>WC/Bad:</h4>
                                <p class="text-center"><?php echo get_field("wcbad") ?></p>
                            </div>
                            <div class="grid grid-cols-1">
                                <i class="fa-solid fa-kitchen-set text-main-brand-color text-5xl w-fit mx-auto"></i>
                                <h4>Køkken:</h4>
                                <p class="text-center"><?php echo get_field("kokken_service") ?></p>
                            </div>
                        </div>
                        <div class="md:col-span-2 lg:col-span-2 w-8/12 mx-auto inline-flex justify-between">
                            <a href="<?php echo post_permalink(); ?>" class="knap mb-5 text-center px-3 py-1 mx-auto mt-auto font-semibold">Læs mere</a>
                            <a href="<?php echo file_get_contents(get_theme_file_uri("/assets/links/Booking-site.txt")); ?>" class="knap mb-5 text-center px-3 py-1 mx-auto mt-auto font-semibold">Book nu</a>
                        </div>

                        <div class="tape tape-left">
                            <?php echo file_get_contents(get_theme_file_uri("/assets/svg/tape.svg")); ?>
                        </div>
                        <div class="tape tape-right">
                            <?php echo file_get_contents(get_theme_file_uri("/assets/svg/tape.svg")); ?>
                        </div>
                    </div>
            <?php }
                    $AndetMæng++;
                }; ?>
        </div>
        <div class="Waves absolute top-1/4 h-fit overflow-x-hidden w-full -z-10 ease-linear duration-150">
            <?php echo file_get_contents(get_theme_file_uri("/assets/svg/Wave.svg")); ?>
        </div>
        <hr class="hidden-push">
    </section>
<?php };
            get_footer(); ?>