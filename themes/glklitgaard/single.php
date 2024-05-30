<?php get_header();
$hasIMG = false;
?>
<section class="bg-gray-200 wavey-section z-10">

<h1 class="text-center py-6"><?php the_title();?></h1>
</section>
<div class="h-fit w-full rip bg-white">
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
<section class="bg-gray-200 wavey-section relative w-full z-20">
        <div class="w-full rip rotate-180 absolute bottom-full h-6 -top-6">
            <?php echo file_get_contents( get_theme_file_uri("/assets/svg/Paper-rip.svg")); ?>
        </div>
        <div class="max-w-10/12 md:max-w-9/12 lg:max-w-7/12 w-fit mx-auto my-10">
            <?php if($hasIMG == false){echo get_the_content();} else{
               $UnimgCont = preg_replace($pattern," ",get_the_content());
               echo $UnimgCont;
            }?>
        </div>
        <div class="Waves absolute top-5 h-fit overflow-x-hidden w-full -z-10 ease-linear duration-150">    
            <?php echo file_get_contents( get_theme_file_uri("/assets/svg/Wave.svg")); ?>
        </div>
    <hr class="hidden-push">
</section>


<?php get_footer();?>