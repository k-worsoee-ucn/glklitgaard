<?php get_header(); 
$By = new WP_Query(array(
    'posts_per_page'    => -1,
    'orderby'    => "meta_key=kilometer_vaek",
    'post_type' => "ferie-byer",
    'order' => 'ASC',
));
$pattern = "/<img.*?src[^\>]+>/";?>

<section class="relative bg-slate-100 h-fit min-h-96">
        <div class="h-fit z-10 bg-slate-100 bg-opacity-75 bottom-1/3 5 lg:pb-28 pt-72 lg:bottom-0 w-full lg:w-6/12 absolute left-0">
            <h1 class="text-center py-2 text-4xl bold"><?php echo post_type_archive_title( '', false );?></h1>
            <h3 class="text-center text-2xl"><?php $byer = 1;
            while($By->have_posts()){
                $By->the_post();
            if($byer == 1){
            echo get_the_title(); }else{if($byer == $By->found_posts){echo " og ".get_the_title();}else{ echo ", ".get_the_title();}} $byer++; };?>
            </h3>
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
<?php


$AmountBy = 1;
while($By->have_posts()){
    $By->the_post(); if($AmountBy % 2 != 0){ ?>
    <section class="bg-gray-200 relative w-full z-30 grid gap-5 grid-cols-1 lg:grid-cols-3 pt-10 pb-14">
        <div class="w-full rip rotate-180 absolute bottom-full h-6 -top-6 z-20 fill-gray-200">
            <?php echo file_get_contents( get_theme_file_uri("/assets/svg/Paper-rip.svg")); ?>
        </div>
        <div class="Waves absolute top-5 h-fit overflow-x-hidden w-full -z-10 ease-linear duration-150">    
            <?php echo file_get_contents( get_theme_file_uri("/assets/svg/Wave.svg")); ?>
        </div>
        <div class="mx-auto lg:mx-none lg:ml-auto w-9/12 md:w-6/12 lg:w-11/12 my-5 col-start-1 col-span-1 row-start-1 grid grid-cols-1 h-fit gap-10">
        <h2 class="text-4xl text-center w-full"><?php the_title();?></h2>
        <div class="relative z-10 mr-auto w-full bg-white p-3 mx-auto md:mx-0 md:mr-10 md:ml-auto">
            <img src="<?php echo get_the_post_thumbnail_url();?>" alt="vidunderlig udsight i <?php echo get_the_title(); ?>">
            <div class="tape tape-left z-20">
                <?php echo file_get_contents( get_theme_file_uri("/assets/svg/tape.svg")); ?>
            </div>
            <div class="tape tape-right z-20">
                <?php echo file_get_contents( get_theme_file_uri("/assets/svg/tape.svg")); ?>
            </div>
        </div>
        </div>
        <div class="lg:row-start-1 lg:col-start-2 lg:col-span-2 w-10/12 mx-auto md:w-8/12 lg:w-8/12 grid h-fit gap-5">
        <?php   $UnimgCont = preg_replace($pattern," ",get_the_content());
               $UnimgCont = preg_replace("/<figure.*?(.*?)+>/"," ",$UnimgCont);
               echo $UnimgCont;?>
        <div class="grid grid-cols-1 md:inline-flex justify-between w-full mx-auto">
            <a href="<?php echo get_field("link_til_sted"); //ligende med tidligere ting, men vi henter linket fra en seperat fil og sætter ind som href'en.?>" class="knap text-center px-3 py-1 m-auto font-semibold">Besøg <?php echo get_the_title(); ?></a>
            <div class="mt-5 md:mt-0 mx-auto md:mx-0 grid grid-cols-3 grid-rows-2 w-8/12 gap-x-2">
                <p class="text-center w-full col-start-2 row-start-1"><?php echo get_field("kilometer_vaek") ?> Km</p>
                <p class="w-full text-right col-start-1 row-start-2">Gl. Klitgaard</p>
                <svg class="my-auto w-full h-fit fill-zinc-900 col-start-2 row-start-2" width="128" height="16" viewBox="0 0 128 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M127.707 8.70711C128.098 8.31658 128.098 7.68342 127.707 7.29289L121.343 0.928932C120.953 0.538408 120.319 0.538408 119.929 0.928932C119.538 1.31946 119.538 1.95262 119.929 2.34315L125.586 8L119.929 13.6569C119.538 14.0474 119.538 14.6805 119.929 15.0711C120.319 15.4616 120.953 15.4616 121.343 15.0711L127.707 8.70711ZM0 9H127V7H0V9Z" class="fill-inherit"/>
                </svg>
                <p class="w-full col-start-3 row-start-2"><?php echo get_the_title(); ?></p>
            </div>
        </div>
        </div>
        <?php if($AmountBy != 10){?>
            <div class="w-full rip absolute top-full h-6 -bottom-6 fill-gray-200">
                <?php echo file_get_contents( get_theme_file_uri("/assets/svg/Paper-rip.svg")); ?>
            </div>
        <?php }?>
    </section>

<?php }else{ ?> 
    <section class="bg-yellow-100 relative overflow-hidden w-full z-10 grid gap-5 grid-cols-1 lg:grid-cols-3 pt-16 pb-14">
    <img src="<?php echo get_theme_file_uri("/assets/images/crumpled-paper.jpg") ?>" alt="crumpled paper" class="absolute w-full h-full object-fill opacity-50 top-0 left-0 -z-10">
    <div class="mx-auto lg:mx-none lg:ml-auto w-9/12 md:w-6/12 lg:w-11/12 my-5 lg:col-start-3 col-span-1 row-start-1 grid grid-cols-1 h-fit gap-10">
        <h2 class="text-4xl text-center w-full"><?php the_title();?></h2>
        <div class="relative z-10 mr-auto w-full bg-white p-3 mx-auto md:mx-0 md:mr-10 md:ml-auto">
            <img src="<?php echo get_the_post_thumbnail_url();?>" alt="vidunderlig udsight i <?php echo get_the_title(); ?>">
            <div class="tape tape-left z-20">
                <?php echo file_get_contents( get_theme_file_uri("/assets/svg/tape.svg")); ?>
            </div>
            <div class="tape tape-right z-20">
                <?php echo file_get_contents( get_theme_file_uri("/assets/svg/tape.svg")); ?>
            </div>
        </div>
        </div>
        <div class="lg:row-start-1 lg:col-start-1 lg:col-span-2 w-10/12 mx-auto md:w-8/12 lg:w-8/12 grid h-fit gap-5">
        <?php   $UnimgCont = preg_replace($pattern," ",get_the_content());
               $UnimgCont = preg_replace("/<figure.*?(.*?)+>/"," ",$UnimgCont);
               echo $UnimgCont;?>
        <div class="grid grid-cols-1 md:inline-flex justify-between w-full mx-auto">
            <a href="<?php echo get_field("link_til_sted"); //ligende med tidligere ting, men vi henter linket fra en seperat fil og sætter ind som href'en.?>" class="knap text-center px-3 py-1 m-auto font-semibold">Besøg <?php echo get_the_title(); ?></a>
            <div class="mt-5 md:mt-0 mx-auto md:mx-0 grid grid-cols-3 grid-rows-2 w-8/12 gap-x-2">
                <p class="text-center w-full col-start-2 row-start-1"><?php echo get_field("kilometer_vaek") ?> Km</p>
                <p class="w-full text-right col-start-1 row-start-2">Gl. Klitgaard</p>
                <svg class="my-auto w-full h-fit fill-zinc-900 col-start-2 row-start-2" width="128" height="16" viewBox="0 0 128 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M127.707 8.70711C128.098 8.31658 128.098 7.68342 127.707 7.29289L121.343 0.928932C120.953 0.538408 120.319 0.538408 119.929 0.928932C119.538 1.31946 119.538 1.95262 119.929 2.34315L125.586 8L119.929 13.6569C119.538 14.0474 119.538 14.6805 119.929 15.0711C120.319 15.4616 120.953 15.4616 121.343 15.0711L127.707 8.70711ZM0 9H127V7H0V9Z" class="fill-inherit"/>
                </svg>
                <p class="w-full col-start-3 row-start-2"><?php echo get_the_title(); ?></p>
            </div>
        </div>
        </div>
    </section>
<?php }; $AmountBy++;} wp_reset_postdata(); get_footer();?>