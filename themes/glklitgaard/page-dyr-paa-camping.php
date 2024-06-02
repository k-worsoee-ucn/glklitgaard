<?php get_header(); 
$pattern = "/<img.*?src[^\>]+>/";?>

<section class="relative bg-slate-100 h-fit min-h-96">
        <div class="h-fit z-10 bg-slate-100 bg-opacity-75 bottom-1/3 5 lg:pb-28 pt-72 lg:bottom-0 w-full lg:w-6/12 absolute left-0">
            <h1 class="text-center py-2 text-4xl bold">Dyr med på <strong><?php wp_bio ?></strong></h1>
        </div>
    <div class="h-fit w-full rip -mb-10 fill-slate-100 z-10 opacity-75 absolute lg:-rotate-90 left-0 lg:translate-x-5">
            <?php echo file_get_contents( get_theme_file_uri("/assets/svg/Paper-rip.svg")); ?>
    </div>
    <div class="absolute top-0 left-0 w-full min-h-72">
            <div class=" overflow-hidden min-h-96 slideshow shadow-lg relative w-full h-full">
            <div class="relative slideshow-img h-full min-h-96 w-full overflow-hidden">
    <?php while(have_posts()){the_post();
        $content = strip_tags(get_the_content(), '<img>'); // fjerner alle tags, undtaget img
             // REGEX til at finde billede
            if(preg_match($pattern, $content)){
                $content = str_replace("<","<!--Cut here--> <",$content); //finder, erstatter, hvilken string
                $content = str_replace(">","> <!--Cut here-->",$content); //erstatter
                $parts = explode("<!--Cut here-->",$content); //skær hver gang den finder <!-- cut here -->, laver en array
                $i = 1; // bare til at idexsere så vi ikke har så mange img på denne side :)
                foreach($parts as $p){ // for hver del af array'et
                    if(preg_match($pattern, $p)){ // hvis den har billede
                        echo $p; //print billede ud
                        $i++; // increase.
                    };
                };?>
                </div>
                <div class="SlideControls shadow-inner h-fit w-full lg:w-7/12 absolute bottom-10 right-0 z-10 inline-flex gap-5 justify-center"></div>
            <?php }};?>
            </div>
        </div>
</section>