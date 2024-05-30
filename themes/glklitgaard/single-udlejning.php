<?php get_header();
$hasIMG = false;
?>
<section class="bg-gray-200 wavey-section z-10 pt-16">

<h1 class="text-center py-6 mt-5 text-3xl"><?php the_title();?></h1>
</section>
<div class="h-fit w-full rip fill-gray-200 -mb-10">
        <?php echo file_get_contents( get_theme_file_uri("/assets/svg/Paper-rip.svg")); ?>
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
                $i = 1; // bare til at idexsere så vi ikke har så mange img på denne side :)
                foreach($parts as $p){ // for hver del af array'et
                    if(preg_match($pattern, $p) && $i < 4){ // hvis den har billede
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
<section class="bg-gray-200 wavey-section relative w-full z-20 grid grid-cols-12 py-10">
    <div class="w-full rip rotate-180 absolute bottom-full h-6 -top-6 fill-gray-200">
        <?php echo file_get_contents( get_theme_file_uri("/assets/svg/Paper-rip.svg")); ?>
    </div>
    <div class="Waves absolute top-5 h-fit overflow-x-hidden w-full -z-10 ease-linear duration-150">    
        <?php echo file_get_contents( get_theme_file_uri("/assets/svg/Wave.svg")); ?>
    </div>

        <div class="w-full mx-auto my-10 col-start-2 col-span-6 grid grid-cols-1">
            <h1 class="text-center text-xl mb-4">
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
            </h1>
            <?php if($hasIMG == false){echo get_the_content();} else{
               $UnimgCont = preg_replace($pattern," ",get_the_content());
               echo $UnimgCont;
            }?>
            <div class="w-10/12 md:w-9/12 lg:w-8/12 mt-5 mx-auto inline-flex justify-between">
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
        </div>
    <div class="bg-slate-50 grid grid-cols-3 p-3 shadow-sm relative h-fit col-start-9 col-span-3 border-main-brand-color">
        <div class="grid grid-cols-1 w-full h-fit col-span-3">
            <i class="fa-solid fa-coins text-main-brand-color text-5xl w-fit h-fit mx-auto"></i>
            <h4 class="text-lg text-center">Pris:</h4>
        </div>
        <div class="h-fit w-full border-inherit border-0"><p class="h-fit w-fit p-2 m-auto text-center">Datoer:</p></div>
        <div class="h-fit w-full border-inherit border-x-4 rounded"><p class="h-fit w-fit p-2 m-auto text-center">Pris pr. dag:</p></div>
        <div class="h-fit w-fullborder-inherit border-0"><p class="h-fit w-fit p-2 m-auto text-center">Pris pr uge:</p></div>
        <?php $dates = 1;
        while(get_field("dates_".$dates)){
            $group = get_field("dates_".$dates);?>
            <!--<div class="h-fit w-full border-inherit border-0 rounded-l border-t-4"><p class="h-fit w-fit p-2 m-auto text-center"><?php echo $dates ?></p></div>
            <div class="h-fit w-full border-inherit border-x-4 rounded border-t-4 "><p class="h-fit w-fit p-2 m-auto text-center"><?php echo get_sub_field('pris_per_dag')?></p></div>
            <div class="h-fit w-fullborder-inherit border-0 rounded-r border-t-4 "><p class="h-fit w-fit p-2 m-auto text-center"><?php echo get_sub_field('pris_per_uge')?></p></div>-->
        <?php $dates++; }?>
        <div class="tape tape-left">
            <?php echo file_get_contents( get_theme_file_uri("/assets/svg/tape.svg")); ?>
        </div>
        <div class="tape tape-right">
            <?php echo file_get_contents( get_theme_file_uri("/assets/svg/tape.svg")); ?>
        </div>
    </div>
    <hr class="hidden-push col-start-1 col-span-12">
</section>


<?php get_footer();?>