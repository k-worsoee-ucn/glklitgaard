
<?php get_header();
// ^ Henter header.php
$Slideshow = 1;
// ^ vil gerne have en varriabel for at give ID til hver slideshow. til JavaScripting for sider med mere end 1 slideshow.
    $Hytte = new WP_Query(array(
        'posts_per_page'    => -1,
        'post_type' => "Udlejning",
        'meta_key'      => 'udlejnings_type',
        'meta_value'    => 'hytter'
    ));
    //^ Definerer hvad vi leder efter. alle (-1) posts med type Udlejning, og deres udlejnings type er "hytter"
    //v Derefter så siger vi at hvis de findes. så lav det nedenunder, inden i if statementet
    $AmountH = $Hytte->found_posts;
    if($AmountH){
        $HytteMæng = 1;
?>
<section class="bg-gray-200 wavey-section relative w-full">
<h1 class="text-center">Hytter</h1>
<hr class="hidden-push">
<div class="grid grid-cols-6 lg:grid-cols-10 gap-10 gap-y-20 md:gap-y-16 lg:gap-y-10 w-10/12 mx-auto relative">
<?php
// imens der er post's, så indsæt i disse. Note, if-statementet påvirker kun CSS'en i forhold til om det er et lige eller ulige mændge
    while($Hytte->have_posts()){
        $Hytte->the_post();
        // v sammenligning, hvis vi har den sidste post, og den er ulige, så skal den printe den her version ud
        // $HytteMæng striger med 1 per gang den køre i while loopet. så den kan kun matche AmountH hvis det er sidste post
        // $Amount % 2, dividere bare det fulde numbmer med 2, hvis det er 0, går det op med 2 (lige), hvis ikke, kommer et 1 ud
        // der kunne også have stået $AmountH % 2 == 1
        if($HytteMæng == $AmountH AND $AmountH % 2 != 0){
        ?>
        <div class="drop-shadow bg-yellow-100 grid grid-cols-1 lg:grid-cols-2 md:grid-cols-2 lg:col-start-3 col-span-6 col gap-5 gap-y-15 shadow-sm relative w-10/12 mx-auto">
            <a class="simple-pic-drop min-h-60 relative -top-5 -left-5 h-2/3 w-auto max-h-20 z-10" href="<?php echo post_permalink();/*henter det link til postens enkel side*/?>">
                <div class="absolute w-fit left-1/2 right-1/2 -top-5 -translate-x-1/2 z-20" >
                    <?php echo file_get_contents( get_theme_file_uri("/assets/svg/tac.svg"));//henter og indsætter inholdet fra theme mappen/assets/svg/tac ?>
                </div>
                <img class="drop-shadow-sm h-full min-h-60 md:min-h-52 lg:min-h-40 w-full object-cover" src="<?php echo the_post_thumbnail_url(); // udskriver url'en for billede brugt til thumbnailen?>" alt="<?php the_title(); //Postens titel :)?>">
            </a>
            <div class="col-start-1 md:col-span-2 lg:col-span-2 h-10 lg:h-6 absolute bg-yellow-800 opacity-20 row-start-1 row-span-1 w-full" ></div>
            <div class="mt-40 md:mt-10 lg:mt-7 w-10/12 mx-auto md:mx-0 lg:mx-0 md:min-h-40 lg:min-h-32">
                <h3 class="text-center h-fit"><?php the_title(); ?></h3>
                <?php if(has_excerpt()){ //Hvis at denne post har en exceprt (intro tekst)
                    the_excerpt(); //så udskriv den.
                }
                else { // men hvis ikke
                    wp_trim_words(get_the_content(), 100, "..." ); // så tag indholdet, og trim det ned til 100 ord, til sidst indsæt ". . ." hvis der er mere end 100 ord.
                };?>
            </div>
            <div class="lg:col-span-2 md:col-span-2 w-8/12 mx-auto inline-flex justify-between">
                <div class="grid grid-cols-1 z-20">
                    <i class="fa-solid fa-user text-orange-700 text-5xl w-fit mx-auto"></i>
                    <h4>Sovepladser:</h4>
                    <p class="text-center"><?php echo get_field("antal_sove_pladser"); // vi finder indformationen fra postens ACF (advanced costume fields) og indsætter her?> Personer</p>
                </div>
                <div class="grid grid-cols-1">
                    <i class="fa-solid fa-shower text-orange-700 text-5xl w-fit mx-auto"></i>
                    <h4>WC/Bad:</h4>
                    <p class="text-center"><?php echo get_field("wcbad"); //samme som over, men nu leder vi efter wc/bad værdien?></p>
                </div>
                <div class="grid grid-cols-1">
                    <i class="fa-solid fa-kitchen-set text-orange-700 text-5xl w-fit mx-auto"></i>
                    <h4>Køkken:</h4>
                    <p class="text-center"><?php echo get_field("kokken_service");// =||= ?></p>
                </div>
            </div>
            <div class="lg:col-span-2 md:col-span-2 w-8/12 mx-auto inline-flex justify-between">
                <a href="<?php echo post_permalink();//giv a-tag (knappen) linket til posten?>" class="knap mb-5 text-center px-3 py-1 mx-auto mt-auto font-semibold">Læs mere</a>
                <a href="<?php echo file_get_contents( get_theme_file_uri("/assets/links/Booking-site.txt"));//ligende med tidligere ting, men vi henter linket fra en seperat fil og sætter ind som href'en.?>" class="knap mb-5 text-center px-3 py-1 mx-auto mt-auto font-semibold">Book nu</a>
            </div>

            <div class="absolute inline-flex w-full top-full lg:col-span-2 flex-nowrap -mt-0.5">
                <div class="bg-yellow-100 h-10 w-full -mr-0.5 pr-0.5"></div>
                <svg class="h-10 w-10 -rotate-90" width="59" height="57" viewBox="0 0 59 57" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M58.5 0.819336L58.5 56.5L0.0952523 0.819356L58.5 0.819336Z" class="fill-yellow-200"/>
                </svg>
            </div>
        </div>

    <?php } else{ //hvis dette ikke opfylder "if($HytteMæng == $AmountH AND $AmountH % 2 != 0)", så udskriv posten som dette istedet
        // der er ingen størrer ændrigner undtaget styling og rækkefølge af nogle af tingene. samme til senere sider. se klithuset for nyt. ?>
        <div class="drop-shadow bg-yellow-100 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 col-span-6 lg:col-span-5 px-3 pb-3 gap-5 shadow-sm relative w-10/12 mx-auto gap-y-15">
        <?php if($HytteMæng % 2 != 0){ ?>
        <a class="row-start-1 simple-pic-drop min-h-60 relative -top-5 -left-5 h-2/3 w-auto max-h-20 z-10" href="<?php echo post_permalink();?>">
                <div class="absolute w-fit left-1/2 right-1/2 -top-5 -translate-x-1/2 z-20" >
                    <?php echo file_get_contents( get_theme_file_uri("/assets/svg/tac.svg")); ?>
                </div>
                <img class="drop-shadow-sm h-full min-h-60 md:min-h-52 lg:min-h-40 w-full object-cover" src="<?php echo the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
            </a>
            <div class="col-start-1 md:col-span-2 lg:col-span-2 h-10 lg:h-6 absolute bg-yellow-800 opacity-20 row-start-1 row-span-1 w-full" ></div>
            <div class="mt-0 md:mt-10 lg:mt-7 w-10/12 mx-auto md:mx-0 lg:mx-0 md:min-h-40 lg:min-h-32">
                <h3 class="text-center h-fit"><?php the_title(); ?></h3>
                <?php if(has_excerpt()){the_excerpt();}else{wp_trim_words(get_the_content(), 100, "..." );};?>
            </div>
            <div class="lg:col-span-2 md:col-span-2 w-8/12 mx-auto inline-flex justify-between">
                <div class="grid grid-cols-1 z-20">
                    <i class="fa-solid fa-user text-orange-700 text-5xl w-fit mx-auto"></i>
                    <h4>Sovepladser:</h4>
                    <p class="text-center"><?php echo get_field("antal_sove_pladser")?> Personer</p>
                </div>
                <div class="grid grid-cols-1">
                    <i class="fa-solid fa-shower text-orange-700 text-5xl w-fit mx-auto"></i>
                    <h4>WC/Bad:</h4>
                    <p class="text-center"><?php echo get_field("wcbad")?></p>
                </div>
                <div class="grid grid-cols-1">
                    <i class="fa-solid fa-kitchen-set text-orange-700 text-5xl w-fit mx-auto"></i>
                    <h4>Køkken:</h4>
                    <p class="text-center"><?php echo get_field("kokken_service")?></p>
                </div>
            </div>
            <div class="lg:col-span-2 md:col-span-2 w-8/12 mx-auto inline-flex justify-between">
                <a href="<?php echo post_permalink();?>" class="knap mb-5 text-center px-3 py-1 mx-auto mt-auto font-semibold">Læs mere</a>
                <a href="<?php echo file_get_contents( get_theme_file_uri("/assets/links/Booking-site.txt"));?>" class="knap mb-5 text-center px-3 py-1 mx-auto mt-auto font-semibold">Book nu</a>
            </div>

            <div class="absolute inline-flex w-full top-full lg:col-span-2 flex-nowrap -mt-1 z-10">
                <div class="bg-yellow-100 h-10 w-full -mr-0.5 pr-0.5 -mt-0.5"></div>
                <svg class="h-10 w-10 -rotate-90" width="59" height="57" viewBox="0 0 59 57" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M58.5 0.819336L58.5 56.5L0.0952523 0.819356L58.5 0.819336Z" class="fill-yellow-200"/>
                </svg>
            </div>
            <?php } else{ ?>
                    <div class="-ml-3 md:ml-0 lg:ml-0 col-start-1 md:col-span-2 lg:col-span-2 h-10 lg:h-6 absolute bg-yellow-800 opacity-20 row-start-1 row-span-1 w-full" ></div>
                    <div class="md:mt-10 lg:mt-7 w-10/12 mx-auto md:ml-auto lg:ml-auto md:min-h-40 lg:min-h-32">
                        <h3 class="text-center h-fit"><?php the_title(); ?></h3>
                        <?php if(has_excerpt()){the_excerpt();}else{wp_trim_words(get_the_content(), 100, "..." );};?>
                    </div>
                    <a class="row-start-1 col-start-1 md:col-start-2 lg:col-start-2 simple-pic-drop min-h-60 relative -top-5 -right-5 h-2/3 w-auto max-h-20 z-10" href="<?php echo post_permalink();?>">
                        <div class="absolute w-fit left-1/2 right-1/2 -top-5 -translate-x-1/2 z-20" >
                            <?php echo file_get_contents( get_theme_file_uri("/assets/svg/tac.svg")); ?>
                        </div>
                        <img class="drop-shadow-sm h-full min-h-60 md:min-h-52 lg:min-h-40 w-full object-cover" src="<?php echo the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                    </a>
                    <div class="lg:col-span-2 md:col-span-2 w-8/12 mx-auto inline-flex justify-between">
                        <div class="grid grid-cols-1 z-20">
                            <i class="fa-solid fa-user text-orange-700 text-5xl w-fit mx-auto"></i>
                            <h4>Sovepladser:</h4>
                            <p class="text-center"><?php echo get_field("antal_sove_pladser")?> Personer</p>
                        </div>
                        <div class="grid grid-cols-1">
                            <i class="fa-solid fa-shower text-orange-700 text-5xl w-fit mx-auto"></i>
                            <h4>WC/Bad:</h4>
                            <p class="text-center"><?php echo get_field("wcbad")?></p>
                        </div>
                        <div class="grid grid-cols-1">
                            <i class="fa-solid fa-kitchen-set text-orange-700 text-5xl w-fit mx-auto"></i>
                            <h4>Køkken:</h4>
                            <p class="text-center"><?php echo get_field("kokken_service")?></p>
                        </div>
                    </div>
                    <div class="lg:col-span-2 md:col-span-2 w-8/12 mx-auto inline-flex justify-between">
                        <a href="<?php echo post_permalink();?>" class="knap mb-5 text-center px-3 py-1 mx-auto mt-auto font-semibold">Læs mere</a>
                        <a href="<?php echo file_get_contents( get_theme_file_uri("/assets/links/Booking-site.txt"));?>" class="knap mb-5 text-center px-3 py-1 mx-auto mt-auto font-semibold">Book nu</a>
                    </div>
        
                    <div class="absolute inline-flex w-full top-full lg:col-span-2 flex-nowrap -mt-1 z-10">
                        <svg class="h-10 w-10" width="59" height="57" viewBox="0 0 59 57" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M58.5 0.819336L58.5 56.5L0.0952523 0.819356L58.5 0.819336Z" class="fill-yellow-200"/>
                        </svg>
                        <div class="bg-yellow-100 h-10 w-full -ml-0.5 pl-0.5 -mt-0.5"></div>
                    </div>
            <?php }; ?>
        </div>
    <?php };
        $HytteMæng++; }; ?>
</div>
    <div class="Waves absolute top-1/4 h-fit overflow-x-hidden w-full -z-10 ease-linear duration-150">    
        <?php echo file_get_contents( get_theme_file_uri("/assets/svg/Wave.svg")); ?>
    </div>
    <hr class="hidden-push">
    <div class="h-fit w-full rip">
        <?php echo file_get_contents( get_theme_file_uri("/assets/svg/Paper-rip.svg")); ?>
    </div>
</section><?php }; wp_reset_postdata();
//^ slutter if-statementet. og reseter den defination vi hadve tidligere (best practise at gøre)
$Andet = new WP_Query(array(
    'posts_per_page'    => -1,
    'post_type' => "Udlejning",
    'meta_key'      => 'udlejnings_type',
    'meta_value'    => 'andet'
));
$AmountA = $Andet->found_posts;
if($AmountA){
    $AndetMæng = 1;?>

<section class="Papery bg-yellow-100 pb-14 -mb-7 relative">
    <hr class="hidden-push">
    <img src="<?php echo get_theme_file_uri("/assets/images/crumpled-paper.jpg") ?>" alt="crumpled paper" class="absolute w-full h-full object-fill opacity-20 top-0 left-0">
    <div class="grid grid-cols-6 lg:grid-cols-10 gap-10 w-10/12 mx-auto relative">
        <h2 class="text-3xl text-center col-span-6 lg:col-span-10">Alternative muligheder</h2>
        <?php
    while($Andet->have_posts()){
        $Andet->the_post();
        if($AndetMæng == $AmountA AND $AmountA % 2 != 0){
        ?>
        <div class="bg-slate-50 grid grid-cols-1 min-h-40 lg:grid-cols-2 md:grid-cols-2 lg:col-start-3 col-span-6 p-3 gap-5 shadow-sm relative w-10/12 mx-auto">
            <a class="inside-pic-drop min-h-40" href="<?php echo post_permalink();?>">
                <img src="<?php echo the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
            </a>
            <div>
                <h3 class="text-center h-fit"><?php the_title(); ?></h3>
                <?php if(has_excerpt()){the_excerpt();}else{wp_trim_words(get_the_content(), 100, "..." );};?>
            </div>
            <div class="md:col-span-2 lg:col-span-2 w-8/12 mx-auto inline-flex justify-between">
                <div class="grid grid-cols-1">
                    <i class="fa-solid fa-user text-orange-700 text-5xl w-fit mx-auto"></i>
                    <h3>Sovepladser:</h3>
                    <p class="text-center"><?php echo get_field("antal_sove_pladser")?> Personer</p>
                </div>
                <div class="grid grid-cols-1">
                    <i class="fa-solid fa-shower text-orange-700 text-5xl w-fit mx-auto"></i>
                    <h3>WC/Bad:</h3>
                    <p class="text-center"><?php echo get_field("wcbad")?></p>
                </div>
                <div class="grid grid-cols-1">
                    <i class="fa-solid fa-kitchen-set text-orange-700 text-5xl w-fit mx-auto"></i>
                    <h3>Køkken:</h3>
                    <p class="text-center"><?php echo get_field("kokken_service")?></p>
                </div>
            </div>
            <div class="md:col-span-2 lg:col-span-2 w-8/12 mx-auto inline-flex justify-between">
                <a href="<?php echo post_permalink();?>" class="knap mb-5 text-center px-3 py-1 mx-auto mt-auto font-semibold">Læs mere</a>
                <a href="<?php echo file_get_contents( get_theme_file_uri("/assets/links/Booking-site.txt"));?>" class="knap mb-5 text-center px-3 py-1 mx-auto mt-auto font-semibold">Book nu</a>
            </div>

            <div class="tape tape-left">
                <?php echo file_get_contents( get_theme_file_uri("/assets/svg/tape.svg")); ?>
            </div>
            <div class="tape tape-right">
                <?php echo file_get_contents( get_theme_file_uri("/assets/svg/tape.svg")); ?>
            </div>
        </div>
    <?php } else{?>
        <div class="bg-slate-50 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 col-span-6 lg:col-span-5 p-3 gap-5 shadow-sm relative">
        <a class="inside-pic-drop" href="<?php echo post_permalink();?>">
                <img src="<?php echo the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
            </a>
            <div>
                <h3 class="text-center h-fit"><?php the_title(); ?></h3>
                <?php if(has_excerpt()){the_excerpt();}else{wp_trim_words(get_the_content(), 100, "..." );};?>
            </div>
            <div class="md:col-span-2 lg:col-span-2 w-8/12 mx-auto inline-flex justify-between">
                <div class="grid grid-cols-1">
                    <i class="fa-solid fa-user text-orange-700 text-5xl w-fit mx-auto"></i>
                    <h3>Sovepladser:</h3>
                    <p class="text-center"><?php echo get_field("antal_sove_pladser")?> Personer</p>
                </div>
                <div class="grid grid-cols-1">
                    <i class="fa-solid fa-shower text-orange-700 text-5xl w-fit mx-auto"></i>
                    <h3>WC/Bad:</h3>
                    <p class="text-center"><?php echo get_field("wcbad")?></p>
                </div>
                <div class="grid grid-cols-1">
                    <i class="fa-solid fa-kitchen-set text-orange-700 text-5xl w-fit mx-auto"></i>
                    <h3>Køkken:</h3>
                    <p class="text-center"><?php echo get_field("kokken_service")?></p>
                </div>
            </div>
            <div class="md:col-span-2 lg:col-span-2 w-8/12 mx-auto inline-flex justify-between">
                <a href="<?php echo post_permalink();?>" class="knap mb-5 text-center px-3 py-1 mx-auto mt-auto font-semibold">Læs mere</a>
                <a href="<?php echo file_get_contents( get_theme_file_uri("/assets/links/Booking-site.txt"));?>" class="knap mb-5 text-center px-3 py-1 mx-auto mt-auto font-semibold">Book nu</a>
            </div>

            <div class="tape tape-left">
                <?php echo file_get_contents( get_theme_file_uri("/assets/svg/tape.svg")); ?>
            </div>
            <div class="tape tape-right">
                <?php echo file_get_contents( get_theme_file_uri("/assets/svg/tape.svg")); ?>
            </div>
        </div>
    <?php }
        $AndetMæng++; }; ?>
    </div>
    <hr class="hidden-push">
</section>
<?php }; wp_reset_postdata();
$Klit = new WP_Query(array(
    'posts_per_page'    => -1,
    'post_type' => "Udlejning",
    'meta_key'      => 'udlejnings_type',
    'meta_value'    => 'klithus'
));
$AmountK = $Klit->found_posts;
if($AmountK){
$AndetMæng = 1;?>
<section class="relative">
    <div class="Sunset-bg w-full overflow-hidden h-full -z-50">
    </div>
    <div class="w-11/12 md:w-10/12 lg:w-9/12 mx-auto my-36 grid grid-cols-1 lg:grid-cols-3 lg:gap-5">
    <?php while($Klit->have_posts()){
        $Klit->the_post();?>
        <div id="Slideshow<?php echo $Slideshow;?>" class="min-h-96 md:min-h-80 slideshow shadow-lg bg-slate-100 p-7 lg:w-full md:5 lg:3 w-full md:w-5/6 md:mx-auto h-full z-10">
            <div class="SlideControls shadow-inner h-full w-full"></div>
            <div id="Slide-img"></div>
        </div>
        <div class="drop-shadow-md relative px-5 lg:col-start-2 lg:col-span-2 w-10/12 md:w-9/12 mx-auto lg:w-full bg-yellow-100 lg:pl-5 lg:pr-5 lg:-ml-5 lg:my-10 py-1.5 grid grid-cols-1">
            <h1 class="text-center">Klithuset</h1>
            <div class="h-1 w-full pl-5 -ml-5 bg-orange-800 opacity-50 box-content pr-5"></div>
            <p class="py-5 max-w-96 mx-auto"><?php if(has_excerpt()){echo get_the_excerpt();}else{wp_trim_words(get_the_content(), 100, "..." );};?></p>
            <div class="w-11/12 md:10/12 lg:w-8/12 mx-auto inline-flex justify-between">
                <div class="grid grid-cols-1">
                    <i class="fa-solid fa-user text-orange-700 text-5xl w-fit mx-auto"></i>
                    <h3>Sovepladser:</h3>
                    <p class="text-center"><?php echo get_field("antal_sove_pladser")?> Personer</p>
                </div>
                <div class="grid grid-cols-1">
                    <i class="fa-solid fa-shower text-orange-700 text-5xl w-fit mx-auto"></i>
                    <h3>WC/Bad:</h3>
                    <p class="text-center"><?php echo get_field("wcbad")?></p>
                </div>
                <div class="grid grid-cols-1">
                    <i class="fa-solid fa-kitchen-set text-orange-700 text-5xl w-fit mx-auto"></i>
                    <h3>Køkken:</h3>
                    <p class="text-center"><?php echo get_field("kokken_service")?></p>
                </div>
            </div>
            <div class="w-11/12 md:10/12 lg:w-8/12 mx-auto inline-flex justify-between mt-5">
                <a href="<?php echo post_permalink();?>" class="knap mb-5 text-center px-3 py-1 mx-auto mt-auto font-semibold">Læs mere</a>
                <a href="<?php echo file_get_contents( get_theme_file_uri("/assets/links/Booking-site.txt"));?>" class="knap mb-5 text-center px-3 py-1 mx-auto mt-auto font-semibold">Book nu</a>
            </div>
            <div class="h-fit w-full paper-rip absolute left-0 top-full">
                <?php echo file_get_contents( get_theme_file_uri("/assets/svg/Paper-rip.svg")); ?>
            </div>
            <div class="absolute h-full left-5 bottom-8 z-30">
                <svg class="opacity-50 box-content h-16 w-16" preserveAspectRatio="none" width="60" height="56" viewBox="0 0 60 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M59.9996 0V2C59.9996 2 33 2 17.5 14.5C2 27 2 56 2 56H0C0 56 -0.000392914 26 15.9996 13C31.9996 0 59.9996 0 59.9996 0Z" class="fill-orange-800 stroke-2 stroke-orange-800"/>
                </svg>
                <svg class="fade w-1 h-full opacity-50" preserveAspectRatio="none" width="10" height="60" viewBox="0 0 10 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect width="10" height="60" class="fill-orange-800"/>
                </svg>
            </div>
            <!-- cursed paper effects-->
            <svg class="drop-shadow-xl z-10 -ml-0.5 absolute left-full bottom-full w-8 h-8" preserveAspectRatio="none" width="15" height="19" viewBox="0 0 15 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M7.18631 9.58405C12.3191 9.58405 14.8859 19 14.8859 19C14.8859 19 15.9125 9.07867 11.8061 4.53958C7.69962 0.000492576 0 0 0 0V19C0 19 2.05352 9.58405 7.18631 9.58405Z" class="fill-yellow-100"/>
            </svg>
            <svg class="absolute -z-10 -ml-0.5 left-full bottom-full w-8 h-5" preserveAspectRatio="none" width="15" height="10" viewBox="0 0 15 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 10C0 10 1.5 0 8.25 0C15 0 15 10 15 10H0Z" class="fill-amber-200 saturate-50 brightness-75"/>
            </svg>
            <svg class=" z-20 absolute bottom-full left-0 w-full h-8 pr-0.5 box-content" preserveAspectRatio="none" width="52" height="8" viewBox="0 0 52 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect width="52" height="8" class="fill-yellow-100"/>
            </svg>
            <div class="grid grid-cols-1 absolute top-0 left-full w-8">
                <svg class="w-8 h-auto max-h-72 min-h-44" preserveAspectRatio="none" width="10" height="60" viewBox="0 0 10 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect width="10" height="60" class="fill-amber-200 saturate-50 brightness-75"/>
                </svg>
                <svg class="w-8 h-8" preserveAspectRatio="none" width="39" height="23" viewBox="0 0 39 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 22.9512H0.135742L0.599121 22.499L0.952637 22.6641L1.69824 22.4482L2.44385 22.6641V22.2109L3.18945 21.7578V21.9961L4.12939 21.7578L3.93506 21.9961H4.68066L5.07129 21.5938L5.42627 21.543L6.19287 21.5938L9.9209 20.6191L11.4121 18.8789L15.1401 19.4219L15.6011 19.3311L16.3467 18.8789L17.0923 19.3311L18.1016 18.5898L18.5835 18.4258H19.3291V17.9727L20.666 17.8252L20.8203 18.4258H21.5659L21.8506 18.8789H22.5967L23.3418 19.3311L24.4395 19.4219L24.833 19.7832L25.5791 19.4219L26.3242 20.2363H27.0703V20.6885H28.5615L29.5298 21.8164L39 18.2246V0H0V22.9512Z" class="fill-amber-200 saturate-50 brightness-75"/>
                </svg>

            </div>

        </div>
        <?php }; ?>
    </div>
    <hr class="hidden-push">
</section>

<?php }; ?>
<?php get_footer();?>