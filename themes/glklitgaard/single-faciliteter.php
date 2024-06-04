<?php get_header();
$hasIMG = false;
?>
<section class="bg-gray-200 z-10 pt-16">

<h1 class="text-center py-6 mt-5 text-3xl"><?php the_title();?></h1>
</section>
<div class="h-fit w-full rip fill-gray-200 -mb-10">
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
            <?php ; if(get_field("facilitets_type") == "Belejlig"){ $flipFlop = 1;
            $content = str_replace("</h1>","</h1> <!--Cut here-->",$content); //erstatter
                $parts = explode("<!--Cut here-->",$content); //skær hver gang den finder <!-- cut here -->, laver en array
                $Sets = 1;
                foreach($parts as $part){
                    if($flipFlop % 2 != 0){ ?>
    <section class="bg-gray-200 wavey-section relative w-full z-20 grid grid-cols-3 pt-10 pb-14">
        <div class="w-full rip rotate-180 absolute bottom-full h-6 -top-6 fill-gray-200">
            <?php echo file_get_contents( get_theme_file_uri("/assets/svg/Paper-rip.svg")); ?>
        </div>
        <div class="Waves absolute top-5 h-fit overflow-x-hidden w-full -z-10 ease-linear duration-150">    
            <?php echo file_get_contents( get_theme_file_uri("/assets/svg/Wave.svg")); ?>
        </div>
        <div class="w-10/12 mx-auto flex flex-nowrap flex-col-reverse md:flex-row justify-between">
            <div class="w-full md:w-8/12 lg:w-7/12"><?php echo $part ?></div>
            <div class="rotate-3 bg-yellow-100 grid grid-cols-1 gap-5 gap-y-15 shadow-sm relative w-10/12 md:w-4/12 mx-auto">
                        <div class="col-start-1 md:col-span-2 lg:col-span-2 h-10 lg:h-6 absolute bg-yellow-800 opacity-20 row-start-1 row-span-1 w-full" ></div>
                        <div class="-rotate-3 mt-5 md:mt3 lg:mt-7 w-10/12 mx-auto md:min-h-40 lg:min-h-32">
                            <h3 class="text-center h-fit text-lg">Fakta:</h3>
                            <?php if(have_rows("faktaer")){
                                while(have_rows("faktaer")){
                                    if(has_sub_field("fakta_".$Sets)){
                                        $Block = 1;
                                    $Field = get_sub_field("fakta_".$Sets);
                                    print_r($Field);
                                }}
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
<?php }
}?>
<section class="w-full relative pt-24 bg-brand-darkgreen">
    <img class="h-28 rotate-180 top-1/2 left-0 opacity-40" src="<?php echo get_theme_file_uri("/assets/images/horseshoetrail.png")?>" alt="hestesko z-20">
    <img class="h-28 rotate-180 bottom-1/2 right-0 opacity-40" src="<?php echo get_theme_file_uri("/assets/images/horseshoetrail.png")?>" alt="hestesko z-20">
    <div class="mt-48 mx-auto relative w-10/12 md:w-8/12 lg:w-6/12 bg-yellow-100 z-30 pb-28 pt-5 px-10">
    <div class="h-fit w-full rip fill-yellow-100 rotate-180 absolute bottom-full left-0">
        <?php echo file_get_contents( get_theme_file_uri("/assets/svg/Paper-rip.svg")); ?>
    </div>
        <h3 class="text-4xl text-center">Skal vi være dig nye campingsted?</h3>
        <a href="<?php echo get_post_type_archive_link("Udlejning"); //ligende med tidligere ting, men vi henter linket fra en seperat fil og sætter ind som href'en.?>" class="knap text-center px-3 py-1 mx-auto w-fit mt-5 font-semibold grid">Se vores udlejnings muligheder her</a>
    </div>
    <img class="absolute top-0 left-0 w-full h-full object-cover object-top" src="<?php echo get_theme_file_uri("/assets/images/newsbg.png") ?>" alt="Vidunderlig solneddang over vesterkysten">
</section>
<?php };?>
<?php get_footer(); ?>