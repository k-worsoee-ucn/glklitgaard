<?php get_header();
$hasIMG = false;
?>
<section class="bg-gray-200 z-10 pt-16">

<h1 class="text-center py-6 mt-5 text-3xl"><?php the_title();?></h1>
</section>
<div class="h-fit w-full rip fill-gray-200 -mb-10 rotate-180 -mt-1">
        <?php echo file_get_contents( get_theme_file_uri("/assets/svg/Paper-rip.svg")); ?>
</div>
            <?php $content = strip_tags(get_the_content(), '<img>'); // fjerner alle tags, undtaget img
            $pattern = "/<img.*?src[^\>]+>/"; // REGEX til at finde billede
            if(preg_match($pattern, $content)){ $hasIMG = true;  ?>
            <section class="relative col-start-1 col-span-12">
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
                <div class="relative col-start-1 col-span-12 slideshow-img -z-10 h-full w-full min-h-72"><?php echo get_the_post_thumbnail();
            };?>
                </div>
                </section>
            <?php ; if(get_field("facilitets_type") == "Belejlig"){ 
                $content= str_replace($pattern," ",get_the_content()); $flipFlop = 1;
                $content = str_replace("<h2","<!--Cut here--> <h2",$content); //erstatter
                $parts = explode("<!--Cut here-->",$content); //skær hver gang den finder <!-- cut here -->, laver en array
                $Sets = 1;
                $factCompate = 2;
                foreach($parts as $part){
                    if($flipFlop % 2 == 0 AND $Sets != 1){ ?>
    <section class="bg-gray-200 wavey-section relative w-full z-20 pt-10 pb-14">
        <div class="w-full rip absolute bottom-full h-6 -top-6 fill-gray-200">
            <?php echo file_get_contents( get_theme_file_uri("/assets/svg/Paper-rip.svg")); ?>
        </div>
        <div class="w-full rip absolute top-full h-6 fill-gray-200 rotate-180">
            <?php echo file_get_contents( get_theme_file_uri("/assets/svg/Paper-rip.svg")); ?>
        </div>
        <div class="Waves absolute top-5 h-fit overflow-x-hidden w-full -z-10 ease-linear duration-150">    
            <?php echo file_get_contents( get_theme_file_uri("/assets/svg/Wave.svg")); ?>
        </div>
        <div class="w-10/12 mx-auto flex flex-nowrap flex-col-reverse md:flex-row lg:justify-betweenmy-5 gap-16">
            <div class="w-full md:w-8/12 lg:w-7/12"><?php echo $part ?></div>
            <div class="rotate-3 bg-yellow-100 grid grid-cols-1 gap-5 gap-y-15 shadow-sm relative w-10/12 md:w-4/12 mx-auto">
                        <div class="col-start-1 md:col-span-2 lg:col-span-2 h-10 lg:h-6 absolute bg-yellow-800 opacity-20 row-start-1 row-span-1 w-full" ></div>
                        <div class="-rotate-3 mt-5 md:mt3 lg:mt-7 w-10/12 mx-auto md:min-h-40 lg:min-h-32">
                            <h3 class="text-center h-fit text-lg">Fakta:</h3>
                            <?php if(have_rows("faktaer")){
                                while(have_rows("faktaer")){
                                    the_row();
                                    if($Sets == $factCompate){
                                    $CurrentSec = get_sub_field("fakta_".$Sets-1);
                                        foreach($CurrentSec as $fac){
                                            if($fac["label"] && $fac["vaerdi"]){?>
                                                <p class="ml-2 my-5"><?php echo $fac["label"] .": ". $fac["vaerdi"]; ?></p>
                                            <?php }
                                        }
                                    $factCompate ++;
                                    }
                                }
                            }?>
                            
                        </div>
            
                        <div class="absolute inline-flex w-full top-full lg:col-span-2 flex-nowrap -mt-0.5">
                            <div class="bg-yellow-100 h-10 w-full -mr-0.5 pr-0.5"></div>
                            <svg class="h-10 w-10 -rotate-90" width="59" height="57" viewBox="0 0 59 57" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M58.5 0.819336L58.5 56.5L0.0952523 0.819356L58.5 0.819336Z" class="fill-yellow-200"/>
                            </svg>
                        </div>
                    </div>
            </div>
    </section>
<?php } elseif($Sets != 1){?>
    <section class="bg-yellow-100 relative w-full pt-16 pb-14">
    <img src="<?php echo get_theme_file_uri("/assets/images/crumpled-paper.jpg") ?>" alt="crumpled paper" class="absolute w-full h-full object-fill opacity-50 top-0 left-0">
    <div class="w-10/12 relative mx-auto z-20 flex flex-nowrap flex-col-reverse md:flex-row lg:justify-betweenmy-5 gap-16">
            <div class="mb-10 col-start-1 -rotate-3 bg-gray-100 grid grid-cols-1 gap-5 gap-y-15 shadow-sm relative w-10/12 md:w-4/12 mx-auto">
                        <div class="col-start-1 md:col-span-2 lg:col-span-2 h-10 lg:h-6 absolute bg-gray-800 opacity-20 row-start-1 row-span-1 w-full" ></div>
                        <div class="rotate-3 mt-5 md:mt3 lg:mt-7 w-10/12 mx-auto md:min-h-40 lg:min-h-32">
                            <h3 class="text-center h-fit text-lg">Fakta:</h3>
                            <?php if(have_rows("faktaer")){
                                while(have_rows("faktaer")){
                                    the_row();
                                    if($Sets == $factCompate){
                                    $CurrentSec = get_sub_field("fakta_".$Sets-1);
                                        foreach($CurrentSec as $fac){
                                            if($fac["label"] && $fac["vaerdi"]){?>
                                                <p class="ml-2 my-5"><?php echo $fac["label"] .": ". $fac["vaerdi"]; ?></p>
                                            <?php }
                                        }
                                    $factCompate ++;
                                    }
                                }
                            }?>
                            
                        </div>
            
                        <div class="absolute inline-flex w-full top-full lg:col-span-2 flex-nowrap -mt-0.5">
                            <div class="bg-gray-100 h-10 w-full -mr-0.5 pr-0.5"></div>
                            <svg class="h-10 w-10 -rotate-90" width="59" height="57" viewBox="0 0 59 57" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M58.5 0.819336L58.5 56.5L0.0952523 0.819356L58.5 0.819336Z" class="fill-gray-300"/>
                            </svg>
                        </div>
                    </div>
                    <div class="w-full md:w-8/12 lg:w-7/12"><?php echo $part ?></div>
            </div>
    </section>
<?php } $flipFlop++; $Sets++;
}?>
<section class="w-full relative pt-12 bg-gray-200 wavey-section z-20 overflow-x-hidden">
        <div class="w-full rip absolute bottom-full h-6 -top-6 fill-gray-200">
            <?php echo file_get_contents( get_theme_file_uri("/assets/svg/Paper-rip.svg")); ?>
        </div>
    <img class="h-96 rotate-90 top-1/3 left-16 opacity-40 z-20 absolute" src="<?php echo get_theme_file_uri("/assets/images/horseshoetrail.png")?>" alt="hestesko z-20">
    <img class="h-96 rotate-90  bottom-1/3 right-16 opacity-40 z-20 absolute" src="<?php echo get_theme_file_uri("/assets/images/horseshoetrail.png")?>" alt="hestesko z-20">
    <div class="mt-52 mx-auto relative w-10/12 md:w-8/12 lg:w-6/12 bg-yellow-100 z-30 pb-28 pt-5 px-10">
    <div class="h-fit w-full rip fill-yellow-100 absolute bottom-full left-0">
        <?php echo file_get_contents( get_theme_file_uri("/assets/svg/Paper-rip.svg")); ?>
    </div>
        <p class="text-lg w-10/12 mx-auto text-center">Vi gør vort allerbedste for at holde servicefaciliteterne rene og indbydende. Skulle det, mod vores forventning, ske at I forefinder faciliteterne, i en ikke tilfredsstillende stand, vil vi sætte stor pris på at få besked, så vi hurtigst muligt kan udbedre dette – Vi er der jo for vore gæster.</p>
    </div>
    <img class="absolute top-0 left-0 w-full h-full object-cover object-top" src="<?php echo get_theme_file_uri("/assets/images/newsbg.png") ?>" alt="Vidunderlig solneddang over vesterkysten">
</section>
<?php }else{ $Sets=1; ?>
    <section class="bg-gray-200 wavey-section relative w-full z-20 pb-14 grid grid-cols-6">
        <div class="w-full rip absolute bottom-full h-6 -top-6 fill-gray-200">
            <?php echo file_get_contents( get_theme_file_uri("/assets/svg/Paper-rip.svg")); ?>
        </div>
        <div class="w-full rip absolute top-full h-6 fill-gray-200">
            <?php echo file_get_contents( get_theme_file_uri("/assets/svg/Paper-rip.svg")); ?>
        </div>
        <div class="Waves absolute top-0 h-fit overflow-x-hidden w-full -z-10 ease-linear duration-150">    
            <?php echo file_get_contents( get_theme_file_uri("/assets/svg/Wave.svg")); ?>
        </div>
        <div class="col-start-2 md:col-start-1 col-span-4 md:col-span-4 w-full my-auto mx-auto md:w-9/12 lg:w-7/12">
            <?php $content= str_replace($pattern," ",get_the_content());
                $content = str_replace("<h2","<!--Cut here--> <h2",$content);
                $content = explode("<!--Cut here-->",$content);
                 echo $content[0]; ?>
        </div>
        <div class="relative md:col-start-5 md:col-span-2 -scale-x-100 col-start-2 col-span-5 my-16 md:my:0">
            <div class="w-full mx-auto grid grid-cols-1 bg-yellow-100 py-5 min-h-60 -scale-x-100">
            <h3 class="text-center h-fit text-lg">Fakta:</h3>
            <?php if(have_rows("faktaer")){
                 while(have_rows("faktaer")){
                    the_row();
                    $CurrentSec = get_sub_field("fakta_".$Sets);
                    foreach($CurrentSec as $fac){
                        if($fac["label"] && $fac["vaerdi"]){?>
                            <p class="ml-2 my-5"><?php echo $fac["label"] .": ". $fac["vaerdi"]; ?></p>
                        <?php }
                    } $Sets++;
                }
            }?>
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
    </section>
<?php if(count($content) != 0){
    $flipFlop = 1;
foreach($content as $extra){
    if($flipFlop != 1){
    if($flipFlop % 2 == 0){?>
       <section class="bg-gray-200 wavey-section relative w-full z-20 pt-10 pb-14">
       <div class="w-full rip rotate-180 absolute bottom-full h-6 -top-6 fill-gray-200">
           <?php echo file_get_contents( get_theme_file_uri("/assets/svg/Paper-rip.svg")); ?>
       </div>
       <div class="w-full rip absolute top-full h-6 fill-gray-200">
           <?php echo file_get_contents( get_theme_file_uri("/assets/svg/Paper-rip.svg")); ?>
       </div>
       <div class="Waves absolute top-5 h-fit overflow-x-hidden w-full -z-10 ease-linear duration-150">    
           <?php echo file_get_contents( get_theme_file_uri("/assets/svg/Wave.svg")); ?>
       </div><div class="w-10/12 md:w-8/12 lg:w-6/12 mx-auto my-10"><?php echo $extra ?></div>
   </section>
<?php } else{ ?>
    <section class="bg-gray-200 wavey-section relative w-full z-20 pt-10 pb-14">
        <div class="w-full rip rotate-180 absolute bottom-full h-6 -top-6 fill-gray-200">
            <?php echo file_get_contents( get_theme_file_uri("/assets/svg/Paper-rip.svg")); ?>
        </div>
        <div class="w-full rip absolute top-full h-6 fill-gray-200">
            <?php echo file_get_contents( get_theme_file_uri("/assets/svg/Paper-rip.svg")); ?>
        </div>
        <div class="Waves absolute top-5 h-fit overflow-x-hidden w-full -z-10 ease-linear duration-150">    
            <?php echo file_get_contents( get_theme_file_uri("/assets/svg/Wave.svg")); ?>
        </div>
        <div class="w-10/12 md:w-8/12 lg:w-6/12 mx-auto my-10"><?php echo $extra ?></div>
        </div>
    </section>
<?php }} $flipFlop++; }}
wp_reset_postdata(); $Aktivitet = new WP_Query(array(
    'post_type' => 'Aktiviteter',
    'posts_per_page' => 3,
    'meta_query' => array(
        array(
            'key' => 'location', // navn af custom field
            'value' => '"' . get_the_ID() . '"', // mmatch med præsis
            'compare' => 'LIKE'
        )
    ),));
 if($Aktivitet->have_posts()){
?>
<section class="relative z-30 bg-third-brand-color pt-16 pb-24">
<div class="w-full rip fill-third-brand-color -mb-10 -top-6 h-6 rotate-180 absolute">
        <?php echo file_get_contents( get_theme_file_uri("/assets/svg/Paper-rip.svg")); ?>
</div>
<h2 class="w-full text-3xl text-center ">Kommende aktiviteter her</h2>
<div class="flex flex-nowrap justify-items-center gap-5 flex-col md:flex-row">
<?php while($Aktivitet->have_posts()){
            $Aktivitet->the_post();?>
                    <div class="bg-slate-50 relative p-5 md:pb-16 w-1/3 z-30 mx-auto">
                        <a class="overflow-hidden w-full h-24 block bg-slate-900" href="<?php echo post_permalink();?>">
                            <img class="hover:opacity-85 w-full hover:rotate-3 duration-300 ease-in-out object-cover object-center hover:scale-110 " src="<?php echo the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                        </a>
                        <h3 class="w-full text-lg text-center my-3"><?php echo get_the_title();?></h3>
                        <p class="w-full"><?php echo get_field("date");?> - Fra kl. <?php echo get_field("time_from")?></p>
                        <p class="w-full mt-2">Pris: <?php echo get_field("price");?></p>
                        <a href="<?php echo get_site_url("/kontakt-os"); ?>" class="knap my-12 px-10 py-2 rounded-full">Læs mere</a>
                    </div>
        <?php }?>

</section>
</div>
<?php }}?>
<?php get_footer(); ?>