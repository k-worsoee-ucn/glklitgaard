<?php get_header();?>

<section class="bg-gray-200 z-20 pt-16">
<h1 class="text-center py-2 text-3xl">Oplevelser</h1>
<div class="h-fit w-full rip fill-gray-200 -mb-10 z-20 relative">
        <?php echo file_get_contents( get_theme_file_uri("/assets/svg/Paper-rip.svg")); ?>
</div>
</section>
<section class="relative overflow-hidden">
        <div class="relative h-fit z-10 w-8/12 md:w-6/12 lg:w-5/12 my-16 mx-auto md:mx-0 md:mr-10 md:ml-auto">
            <div class="col-start-3 col-span-7 text-center text-lg py-5 mt-10 bg-white relative p-10">
            <h2 class="text-2xl w-full text-center mt-3 mb-6">Vil du opleve det skønne naturområde</h2>
            <a class="mx-auto text-md mt-5 w-fit text-center knap py-1 px-3 text-base" href="<?php echo get_site_url()."/naturguide"; ?>">Se vores naturguide</a>
            </div>
            <div class="tape tape-left z-20">
                <?php echo file_get_contents( get_theme_file_uri("/assets/svg/tape.svg")); ?>
            </div>
            <div class="tape tape-right z-20">
                <?php echo file_get_contents( get_theme_file_uri("/assets/svg/tape.svg")); ?>
            </div>
        </div>
    <img class="w-full h-full absolute top-0 object-cover object-center" src="<?php echo get_theme_file_uri("/assets/images/sol-nedgang.jpg")?>" alt="Solnedgang over gammel klitgaards strand">
</section>
<section class="bg-yellow-50 relative grid grid-cols-1 md:grid-cols-2 gap-6 w-full py-10 z-30">
<div class="paper-crumb absolute -top-6 h-full w-full">
    <img class="w-full h-6 object-cover object-top opacity-90" src="<?php echo get_theme_file_uri("/assets/images/crumpled-paper.jpg"); ?>" alt="krøllet papir texture">
    <img class="w-full h-full object-cover opacity-35" src="<?php echo get_theme_file_uri("/assets/images/crumpled-paper.jpg"); ?>" alt="krøllet papir texture">
</div>
    <div class="w-full relative z-10">
        <h2 class="text-center w-full text-xl mb-8">Sedværdigheder i nærheden</h2>
        <?php     $sedværdighed = new WP_Query(array(
            'posts_per_page'    => 2,
            'post_type' => "Seværdigheder",
        )); 
        while($sedværdighed->have_posts()){
            $sedværdighed->the_post();
            ?>
            <div class="drop-shadow bg-yellow-100 grid grid-cols-1 lg:grid-cols-2 md:grid-cols-2 gap-5 gap-y-15 shadow-sm relative w-10/12 mx-auto">
                <a class="simple-pic-drop min-h-60 relative -top-5 -left-5 h-2/3 w-auto max-h-20 z-10" href="<?php echo post_permalink();/*henter det link til postens enkel side*/?>">
                    <div class="absolute w-fit left-1/2 right-1/2 -top-5 -translate-x-1/2 z-20" >
                        <?php echo file_get_contents( get_theme_file_uri("/assets/svg/tac.svg"));//henter og indsætter inholdet fra theme mappen/assets/svg/tac ?>
                    </div>
                    <img class="drop-shadow-sm h-full min-h-60 md:min-h-52 lg:min-h-40 w-full object-cover" src="<?php echo the_post_thumbnail_url(); // udskriver url'en for billede brugt til thumbnailen?>" alt="<?php the_title(); //Postens titel :)?>">
                </a>
                <div class="col-start-1 md:col-span-2 lg:col-span-2 h-10 lg:h-6 absolute bg-yellow-800 opacity-20 row-start-1 row-span-1 w-full" ></div>
                <div class="mt-10 mb-5 md:mb-0 md:mt-10 lg:mt-7 w-10/12 mx-auto md:mx-0 lg:mx-0 md:min-h-40 lg:min-h-32">
                    <h3 class="text-center h-fit text-lg"><?php the_title(); ?></h3>
                    <?php if(has_excerpt()){ //Hvis at denne post har en exceprt (intro tekst)
                        the_excerpt(); //så udskriv den.
                    }
                    else { // men hvis ikke
                        echo wp_trim_words(get_the_content(), 100, "..." ); // så tag indholdet, og trim det ned til 100 ord, til sidst indsæt ". . ." hvis der er mere end 100 ord.
                    };?>
                    <div class="mx-auto mt-5 w-fit h-fit text-base"><a href="<?php echo post_permalink();//giv a-tag (knappen) linket til posten?>" class="knap mb-5 text-center px-3 py-1 font-semibold">Læs mere</a></div>
                </div>
                <div class="absolute inline-flex w-full top-full lg:col-span-2 flex-nowrap -mt-0.5">
                    <div class="bg-yellow-100 h-10 w-full -mr-0.5 pr-0.5"></div>
                    <svg class="h-10 w-10 -rotate-90" width="59" height="57" viewBox="0 0 59 57" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M58.5 0.819336L58.5 56.5L0.0952523 0.819356L58.5 0.819336Z" class="fill-yellow-200"/>
                    </svg>
                </div>
            </div> <?php }; wp_reset_postdata(); ?>
            <div class="mx-auto mt-16 w-fit"><a href="<?php echo get_post_type_archive_link("Seværdigheder");?>" class="knap mb-5 text-center px-3 py-1 font-semibold">Læs mere</a></div>
        </div>
        <div class="relative h-fit w-fit mx-auto md:mr-auto">
            <div class="text-center z-10 text-lg mt-10 bg-white relative py-5 mx-auto md:mx-0 w-9/12 lg:w-7/12 -rotate-3">
            <h2 class="text-xl w-full text-center mt-3">Oplev vores skønne feriebyer</h2>
                <div class="mx-auto my-3 w-10/12 text-base">
                    <?php $by = new WP_Query(array(
                        'posts_per_page'    => -1,
                        'post_type' => "ferie-byer",
                    )); $byer = 1;
                    while ($by->have_posts()){
                        $by->the_post();
                        if($byer == 1){?>
                        <img class="w-full h-auto max-h-64 mb-5 object-cover object-center" src="<?php echo get_the_post_thumbnail_url()?>" alt="<?php echo get_the_title();?>">
                        <?php ?>
                        <div class="rotate-3">
                        <?php  ?>
                        <p>Vores campingplads har den perfekte beliggenhed mellem 
                        <?php echo get_the_title(); }else{if($byer == $by->found_posts){echo " og ".get_the_title();}else{ echo ", ".get_the_title();}} $byer++; };?>
                            , <?php switch(true){
                                case($byer == 2):
                                    echo "en";
                                break;
                                case($byer == 3):
                                    echo "to";
                                break;
                                case($byer == 4):
                                    echo "tre";
                                break;
                                case($byer == 5):
                                    echo "fire";
                                break;
                                case($byer == 6):
                                    echo "fem";
                                break;
                                default:
                                    echo $byer-1;
                                break;
                            }?> virkelig fantastiske feriedestinationer. <?php switch(true){
                                case($byer == 2):
                                    echo "Byen";
                                break;
                                case($byer == 3):
                                    echo "Begge Byerne";
                                break;
                                default:
                                    echo "Alle ". $byer-1 ." byer";
                                break;
                            }?> emmer af feriestemning og byder på charmerende caféer, hyggelige restauranter og unikke butikker.</p>
                    <div class="mx-auto mt-5 w-fit"><a class="text-center knap py-2 px-3" href="<?php echo get_post_type_archive_link('ferie-byer');;?>">Læs mere</a></div>
                    </div>
                </div>
                <div class="tape tape-left">
                <?php echo file_get_contents( get_theme_file_uri("/assets/svg/tape.svg")); ?>
                </div>
                <div class="tape tape-right">
                    <?php echo file_get_contents( get_theme_file_uri("/assets/svg/tape.svg")); ?>
                </div>
        </div>
        <hr class="hidden-push">
</section>
<?php get_footer();?>