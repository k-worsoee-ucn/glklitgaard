<?php get_header();
$hasIMG = false;
?>
<section class="bg-gray-200 z-10 pt-16">

<h1 class="text-center py-6 mt-5 text-3xl"><?php the_title();?></h1>
</section>
<div class="h-fit w-full rip fill-gray-200 -mb-10">
        <svg class="rotate-180 -mt-5"><?php echo file_get_contents( get_theme_file_uri("/assets/svg/Paper-rip.svg")); ?></svg>
</div>
            <?php $content = strip_tags(get_the_content(), '<img>'); // fjerner alle tags, undtaget img
            $pattern = "/<img.*?src[^\>]+>/"; // REGEX til at finde billede
            if(preg_match($pattern, $content)){ $hasIMG = true;  ?>
            <section class="relative">
            <div class="min-h-72 overflow-hidden lg:min-h-96 md:min-h-80 slideshow shadow-lg relative w-full h-full">
            <div class="relative -z-20 slideshow-img h-full min-h-72 lg:min-h-96 md:min-h-80 w-full overflow-hidden"><?php echo get_the_post_thumbnail();
            $content = strip_tags(get_the_content(), '<img>'); // fjerner alle tags, undtaget img
                $content = str_replace("<","<!--Cut here--> <",$content); //finder, erstatter, hvilken string
                $content = str_replace(">","> <!--Cut here-->",$content); //erstatter
                $parts = explode("<!--Cut here-->",$content); //skær hver gang den finder <!-- cut here -->, laver en array
                foreach($parts as $p){ // for hver del af array'et
                    if(preg_match($pattern, $p)){ // hvis den har billede
                        echo $p; //print billede ud
                        $i++; // increase.
                    };
                };?>
                </div>
                <button type="button" class="right bottom-1/2 right-5 hover:drop-shadow-md translate-y-1/2 absolute h-10 w-10 z-20 hover:fill-brand-darkgreen"><?php echo file_get_contents(get_theme_file_uri("/assets/svg/arrow.svg"));?></button>
                <button type="button" class="left bottom-1/2 hover:drop-shadow-md translate-y-1/2 absolute h-10 w-10 z-20 hover:fill-brand-darkgreen translate-x-full"><?php echo file_get_contents(get_theme_file_uri("/assets/svg/arrow.svg"));?></button>
                <div class="SlideControls shadow-inner h-fit w-full absolute bottom-10 left-0 z-10 inline-flex gap-5 justify-center"></div>
            <?php } else { ?>
                <div class="slideshow-img -z-10 relative h-full w-full min-h-72"><?php echo get_the_post_thumbnail();
            };?>
                </div>
                </section>
            <?php ;?>
<section class="bg-gray-200 wavey-section relative w-full z-20 grid grid-cols-12 pt-10 pb-14">
    <div class="w-full rip rotate-180 absolute bottom-full h-6 -top-6 fill-gray-200">
        <svg class="rotate-180"><?php echo file_get_contents( get_theme_file_uri("/assets/svg/Paper-rip.svg")); ?></svg>
    </div>
    <div class="Waves absolute top-5 h-fit overflow-x-hidden w-full -z-10 ease-linear duration-150">    
        <?php echo file_get_contents( get_theme_file_uri("/assets/svg/Wave.svg")); ?>
    </div>

        <div class="w-10/12 md:w-full mx-auto my-10 col-start-1 col-span-12 md:col-start-2 lg:col-start-2 md:col-span-5 lg:col-span-6 grid grid-cols-1">
            <h2 class="text-center text-xl mb-4">
            <?php switch(true){
                case(get_field("udlejnings_type")=="Hytter"):
                    echo "Lidt om Hytten";
                break;
                case(get_field("udlejnings_type")=="Andet" && str_contains(get_the_title(), "hus")):
                    echo "Lidt om Klithuset";
                break;
                case(get_field("udlejnings_type")=="Andet" &&!str_contains( get_the_title(), "hus")):
                    echo "Lidt om lejemuligheden";
                break;
                default:
                    echo "Lidt mere om";
                break;
                    }?>
            </h2>
            <?php if($hasIMG == false){echo get_the_content();} else{
               $UnimgCont = preg_replace($pattern," ",get_the_content());
               echo $UnimgCont;
            }?>
            <div class="w-10/12 md:w-10/12 lg:w-8/12 mt-5 mx-auto inline-flex justify-between">
                <div class="grid grid-cols-1">
                    <i class="fa-solid fa-user text-main-brand-color text-5xl w-fit mx-auto"></i>
                    <h4>Sovepladser:</h4>
                    <p class="text-center"><?php echo get_field("antal_sove_pladser")?> Personer</p>
                </div>
                <div class="grid grid-cols-1">
                    <i class="fa-solid fa-shower text-main-brand-color text-5xl w-fit mx-auto"></i>
                    <h4>WC/Bad:</h4>
                    <p class="text-center"><?php echo get_field("wcbad")?></p>
                </div>
                <div class="grid grid-cols-1">
                    <i class="fa-solid fa-kitchen-set text-main-brand-color text-5xl w-fit mx-auto"></i>
                    <h4>Køkken:</h4>
                    <p class="text-center"><?php echo get_field("kokken_service")?></p>
                </div>
            </div>
            <?php $GestPris = new WP_Query(array(
                'posts_per_page'    => 1,
                'post_type' => "page",
                'pagename' => "vores-priser",));
                if($GestPris->have_posts())
                while($GestPris->have_posts()){
                    $GestPris->the_post();
                    if(have_rows("gaestekort")){
                        while(have_rows("gaestekort")){ the_row();?>
                <p class="mt-6">
                <?php
                      echo "Daggæst er ".get_sub_field("dagsgaest").",- pr. besøg."; ?>
                </p>
                <?php }}}?>
            
        </div>
    <div class="bg-slate-50 col-start-2 col-span-10 p-6 grid grid-cols-3 md:p-3 shadow-sm relative h-fit md:col-start-8 lg:col-start-9 md:col-span-4 lg:col-span-3 border-main-brand-color">
        <div class="grid grid-cols-1 w-full h-fit col-span-3">
            <i class="fa-solid fa-coins text-main-brand-color text-5xl w-fit h-fit mx-auto"></i>
            <h4 class="text-lg text-center">Pris:</h4>
        </div>
        <div class="h-fit w-full border-inherit border-0"><p class="h-fit w-fit p-2 m-auto text-center">Datoer:</p></div>
        <div class="h-fit w-full border-inherit border-x-4 rounded-t"><p class="h-fit w-fit p-2 m-auto text-center">Pris pr. dag:</p></div>
        <div class="h-fit w-fullborder-inherit border-0"><p class="h-fit w-fit p-2 m-auto text-center">Pris pr uge:</p></div>
        <?php $dates = 1; // Temp, til at loade alle priserne ud da alle har lign navn
        if( have_rows('dates_'.$dates) ){ // hvis denne bruppe findes og har underpunkter
            while( have_rows('dates_'.$dates) ){ the_row(); // så imens den har, gør dette. minder om din post while loop
                $dateStart = get_sub_field('date_start'); // tildel alle disee en varriabel.
                $dateEnd = get_sub_field('date_end');
                $DayPrice = get_sub_field('pris_per_dag');
                $WeekPrice = get_sub_field('pris_per_uge');
                if($dateStart AND $dateEnd AND $DayPrice AND $WeekPrice){ // check om alle har en value, dereft4er put det ind i disse v hvis de har. ?>
                <div class="h-fit w-full border-inherit border-0 rounded-l border-t-4"><p class="h-fit w-fit p-2 m-auto text-center"><?php echo $dateStart." - ".$dateEnd; ?></p></div>
                <div class="h-fit w-full border-inherit border-x-4 border-t-4 "><p class="h-fit w-fit p-2 m-auto text-center"><?php echo $DayPrice ?>dkk</p></div>
                <div class="h-fit w-full border-inherit border-0 rounded-r border-t-4 "><p class="h-fit w-fit p-2 m-auto text-center"><?php echo $WeekPrice ?>dkk</p></div>
            <?php $dates++; }}
        }?>
        <div class="tape tape-left translate-x-6 md:translate-x-0">
            <?php echo file_get_contents( get_theme_file_uri("/assets/svg/tape.svg")); ?>
        </div>
        <div class="tape tape-right -translate-x-6 md:translate-x-0">
            <?php echo file_get_contents( get_theme_file_uri("/assets/svg/tape.svg")); ?>
        </div>
    </div>
    <hr class="hidden-push col-start-1 col-span-12">
    <?php if(get_field("udlejnings_indhold")){ ?>
    <div class="drop-shadow bg-yellow-100 rotate-6 col-start-2 col-span-10 md:col-start-1 lg:col-start-2 lg:col-span-4 md:col-span-5 h-fit grid-cols-1 col gap-5 gap-y-15 shadow-sm relative w-full mx-auto">
            <div class="col-start-1 md:col-span-2 lg:col-span-2 h-10 lg:h-6 absolute bg-yellow-800 opacity-20 row-start-1 row-span-1 w-full" ></div>
            <div class="relative z-20 mt-10 lg:mt-7 w-11/12 md:w-10/12 mx-auto md:mx-0 lg:mx-0 md:min-h-40 lg:min-h-32 -rotate-6 md:pb-2 pb-5">
                <h3 class="text-center h-fit text-lg"><?php
                switch(true){
                    case(get_field("udlejnings_type")=="Hytter"):
                        echo "Hytten indholder:";
                    break;
                    case(get_field("udlejnings_type")=="Andet" && str_contains(get_the_title(), "hus")):
                        echo "Klithuset indholder:";
                    break;
                    default:
                        echo "Her er:";
                    break;
                        } ?></h3>
                <div class="w-11/12 md:w-10/12 ml-auto"><?php $indhold = get_field("udlejnings_indhold");
                $indholdIm = preg_split('/<br[^>]*>/i', $indhold); //laver split hver gang den finder en <br> :) laves til en array some vi kan bruge til foreach lige neden under
                foreach($indholdIm as $item){?>
                    <li><?php echo $item; ?></li>
                <?php }
                ?></div>
            </div>
            <div class="absolute inline-flex w-full top-full lg:col-span-2 flex-nowrap -mt-0.5">
                <div class="bg-yellow-100 h-10 w-full -mr-0.5 pr-0.5"></div>
                <svg class="h-10 w-10 -rotate-90" width="59" height="57" viewBox="0 0 59 57" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M58.5 0.819336L58.5 56.5L0.0952523 0.819356L58.5 0.819336Z" class="fill-yellow-200"/>
                </svg>
            </div>
        </div><?php };?>
        <div class="drop-shadow-md gap-5 md:gap-2 relative col-start-1 col-span-12 mt-20 md:mt-3 md:col-span-6 md:col-start-7 lg:col-start-7 lg:col-span-5 w-full md:w-full mx-auto md:ml-auto lg:w-full">
            <div class="bg-yellow-100 w-full h-fit grid grid-cols-3 px-10 md:px-5 py-3">
                    <?php if( have_rows("tag_med") ){ // hvis denne bruppe findes og har underpunkter
                        while( have_rows("tag_med")){ the_row(); // så imens den har, gør dette. minder om din post while loop
                            $leje = get_sub_field('leje_muligheder'); // tildel alle disee en varriabel.
                            $tag = get_sub_field('ikke_muligt'); // tildel alle disee en varriabel.
                            switch(true){
                                case($leje AND $tag):?>
                                    <div class="col-start-1 col-span-2">
                                        <h4 class="text-center text-lg mb-2">Kan Lejes:</h4>
                                        <?php $listItems = preg_split('/<br[^>]*>/i', $leje); 
                                            foreach($listItems as $li){?>
                                                <li><?php echo $li ?></li>
                                            <?php }; ?>
                                    </div>
                                    <div>
                                        <h4 class="text-center text-lg">Skal selv medbringes:</h4>
                                        <?php $listItems = preg_split('/<br[^>]*>/i', $tag); 
                                            foreach($listItems as $li){?>
                                                <li><?php echo $li ?></li>
                                        <?php }; ?>
                                    </div>
                                <?php break;
                                case(!$leje AND $tag):?>
                                    <div class="col-start-1 col-span-3">
                                    <h4 class="text-center text-lg">Skal selv medbringes:</h4>
                                    <?php $listItems = preg_split('/<br[^>]*>/i', $tag); 
                                        foreach($listItems as $li){?>
                                            <li><?php echo $li ?></li>
                                    <?php }; ?>
                                    </div>
                                <?php break;
                                case(!$leje AND $tag):?>
                                    <div class="col-start-1 col-span-3">
                                    <h4 class="text-center text-lg">Skal selv medbringes:</h4>
                                    <?php $listItems = preg_split('/<br[^>]*>/i', $tag); 
                                        foreach($listItems as $li){?>
                                        <li><?php echo $li ?></li>
                                    <?php }; ?>
                                    </div>
                                <?php break;
                                default:
                                    
                                break;
                            }
                        }
                    }?>
                    <p class="col-start-2 text-center my-2">er <?php switch(true){
                                        case(get_field("udlejnings_type")=="Hytter"):
                                            echo "hytten";
                                        break;
                                        case(get_field("udlejnings_type")=="Andet" && str_contains(get_the_title(), "hus")):
                                            echo "klithuset";
                                        break;
                                        default:
                                            echo "det";
                                        break;
                                            } ?> noget for dig?</p>
            <a href="<?php echo file_get_contents( get_theme_file_uri("/assets/links/Booking-site.txt"));?>" class="knap col-start-2 mb-5 text-center px-3 py-1 mx-auto mt-auto font-semibold">Book nu</a>
            </div>
            <div class="h-fit w-full paper-rip absolute left-0 -top-5">
                <?php echo file_get_contents( get_theme_file_uri("/assets/svg/Paper-rip.svg")); ?>
            </div>
            <div class="h-fit w-full paper-rip absolute left-0 bottom-0 rotate-180">
                <?php echo file_get_contents( get_theme_file_uri("/assets/svg/Paper-rip.svg")); ?>
            </div>
        </div>    
        </div>
        <?php if(get_field("plantegning")){?>
    <div class="hidden md:block w-full rip absolute top-full h-6 -bottom-6 fill-gray-200">
        <?php echo file_get_contents( get_theme_file_uri("/assets/svg/Paper-rip.svg")); ?>
    </div><?php } ?>
</section>
<?php if(get_field("plantegning")){?>
<section class="hidden md:block relative w-full h-fit col-start-1 col-span-12 -mt-2 py-10 bg-yellow-100">
    <div class="paper-overlay h-full w-full">
        <img class="opacity-25 absolute h-full w-full" src="<?php echo get_theme_file_uri("/assets/images/crumpled-paper.jpg")?>">
    </div>
    <h3 class="text-2xl text-center w-full mx-auto z-20 relative my-5">Plantegning</h3>
    <div class="relative hidden md:block md:w-10/12 lg:w-8/12 h-fit my-10 mx-auto bg-slate-50 p-5">
        <div class="absolute w-fit right-10 translate-x-1/2 -top-3 z-20" >
            <?php echo file_get_contents( get_theme_file_uri("/assets/svg/tac.svg")); ?>
        </div>
        <div class="absolute w-fit left-10 -translate-x-1/2 -top-3 z-20" >
            <?php echo file_get_contents( get_theme_file_uri("/assets/svg/tac.svg")); ?>
        </div>
        <img class="w-full h-auto" src="<?php echo get_field("plantegning") ?>" alt="<?php echo "plantegning af ". get_the_title();?>">
    </div>
</section>
<?php }; ?>
<section class="bg-gray-200 wavey-section z-10 pt-16 relative grid grid-cols-12">
    <?php if(get_field("plantegning")){?>
    <div class="w-full rip rotate-180 absolute bottom-full h-6 -top-6 fill-gray-200">
        <?php echo file_get_contents( get_theme_file_uri("/assets/svg/Paper-rip.svg")); ?>
    </div>
    <?php }; ?>
    <div class="Waves absolute top-10 h-fit overflow-x-hidden w-full -z-10 ease-linear duration-150">    
        <?php echo file_get_contents( get_theme_file_uri("/assets/svg/Wave.svg")); ?>
    </div>
    <h2 class="w-full col-start-1 col-span-12 text-center text-2xl my-5">Praktisk info</h2>
    <?php $HavPris = false;
    $CleanPris = new WP_Query(array(
                        'posts_per_page'    => 1,
                        'post_type' => "Page",
                        'name' => 'vores priser'
                    )); if($CleanPris->have_posts()){ $HavPris = true; ?>
    <div class="relative md:col-start-9 md:col-span-4 -scale-x-100 col-start-2 col-span-11">
            <div class="w-full mx-auto grid grid-cols-1 bg-yellow-100 py-5 min-h-60 -scale-x-100">
                <i class="fa-solid fa-coins text-main-brand-color text-5xl w-fit h-fit mx-auto"></i>
                <p class="w-fit mx-auto my-2">Slutrengøring: <?php 
                 while($CleanPris->have_posts()){
                    $CleanPris->the_post();
                    echo get_field("slutrengoring",get_the_ID());
                    }?>,-</p>
                                <div class="h-fit w-full paper-rip absolute left-0 -bottom-5">
                <?php echo file_get_contents( get_theme_file_uri("/assets/svg/Paper-rip.svg")); ?>
            </div>
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
            <div class="grid grid-cols-1 absolute top-0 left-full w-8 h-10">
                <svg class="w-8 h-auto max-h-72 min-h-44" preserveAspectRatio="none" width="10" height="60" viewBox="0 0 10 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect width="10" height="60" class="fill-amber-200 saturate-50 brightness-75"/>
                </svg>
                <svg class="w-8 h-8" preserveAspectRatio="none" width="39" height="23" viewBox="0 0 39 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 22.9512H0.135742L0.599121 22.499L0.952637 22.6641L1.69824 22.4482L2.44385 22.6641V22.2109L3.18945 21.7578V21.9961L4.12939 21.7578L3.93506 21.9961H4.68066L5.07129 21.5938L5.42627 21.543L6.19287 21.5938L9.9209 20.6191L11.4121 18.8789L15.1401 19.4219L15.6011 19.3311L16.3467 18.8789L17.0923 19.3311L18.1016 18.5898L18.5835 18.4258H19.3291V17.9727L20.666 17.8252L20.8203 18.4258H21.5659L21.8506 18.8789H22.5967L23.3418 19.3311L24.4395 19.4219L24.833 19.7832L25.5791 19.4219L26.3242 20.2363H27.0703V20.6885H28.5615L29.5298 21.8164L39 18.2246V0H0V22.9512Z" class="fill-amber-200 saturate-50 brightness-75"/>
                </svg>
            </div>
        </div>
        <?php }; wp_reset_postdata();
        $info = new WP_Query(array(
            'posts_per_page'    => 1,
            'page_type' => "page",
            'pagename' => 'praktisk-info',
        ));
        if($info && $HavPris == true){ 
        ?>
        <div class="col-start-2 col-span-11 md:col-start-2 lg:col-start-2 md:col-span-6 lg:col-span-6 w-10/12 md:w-full lg:w-8/10 mx-auto row-start-2 pb-12">
        <?php 
        while($info->have_posts()){
            $info->the_post();
            echo get_the_content();
        }; ?>
        </div>
        <?php } else{?>
            <div class="col-start-2 col-span-11 w-10/12 md:w-8/12 lg:w-6/10 mx-auto row-start-2 pb-12">
        <?php 
        while($info->have_posts()){
            $info->the_post();
            echo get_the_content();
        };}; ?>
        </div>
        <hr class="hidden-push col-start-1 col-span-12">
</section>
<section class="relative col-span-12 py-16 -mt-8 z-20 grid grid-cols-12 bg-gray-100">
    <div class="col-start-1 col-span-7 grid grid-cols-11">
        <div class="pt-3 px-3 pb-10 bg-white w-10/12 row-start-1 row-span-1 col-start-2 col-span-4 -rotate-6 shadow-lg ">
            <img src="<?php echo get_theme_file_uri("/assets/images/ctaimg1.png") ?>" alt="" class="w-full h-3/5 object-cover">
        </div>
        <div class="pt-3 px-3 pb-10 bg-white w-10/12 row-start-1 row-span-1 col-start-5 col-span-4 rotate-12 shadow-lg">
            <img src="<?php echo get_theme_file_uri("/assets/images/ctaimg2.png") ?>" alt="" class="w-full h-3/5 object-cover">
        </div>
        <div class="pt-3 px-3 pb-10 bg-white w-10/12 row-start-1 row-span-1 col-start-8 col-span-4 shadow-lg -ml20 z-10">
            <img src="<?php echo get_theme_file_uri("/assets/images/ctaimg3.png") ?>" alt="" class="w-full h-3/5 object-cover">
        </div>
    </div>
    <div class="w-full rip absolute bottom-full h-6 fill-gray-100">
        <?php echo file_get_contents( get_theme_file_uri("/assets/svg/Paper-rip.svg")); ?>
    </div>
    <div class="Waves absolute top-8 h-fit overflow-x-hidden w-full -z-10 ease-linear duration-150">
        <?php echo file_get_contents( get_theme_file_uri("/assets/svg/Wave.svg")); ?>
    </div>
    <div class="col-start-8 col-span-4 text-center my-auto">
        <h2 class="text-4xl mb-5">Vil du vide mere?</h2>
        <p class="text-lg my-3">Har du spørgsmål til vores hest eller ønsker du at booke en ridetur på en af dem, så du velkommen til at kontakte os.</p>
        <a href="<?php echo get_site_url("/kontakt-os"); ?>" class="knap my-12 px-10 py-2 rounded-full">Kontakt os</a>
        <h3 class="mt-5">Vi håber vi ses på Gl. Klitgaard Camping.</h3>
    </div>
    </section>
<?php get_footer();?>